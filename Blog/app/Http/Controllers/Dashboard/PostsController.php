<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use \Illuminate\Support\Str;
use DataTables;

class PostsController extends Controller
{
    protected $postmodel;

    public function __construct(Post $post) {
        $this->postmodel = $post;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('dashboard.posts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::all();
        if (count($categories)>0) {
            return view('dashboard.posts.add' , compact('categories'));
        }
        abort(404);
    }

    public function getPostsDatatable()
    {

        $data = Post::select('*')->with('category');
        return DataTables::of($data)
        ->addIndexColumn()
        ->addColumn('action', function ($row) {

            if(auth()->user()->can('update', $row)){
                return $btn = '
                    <a href="' . route('dashboard.posts.edit', $row->id) . '"  class="edit btn btn-success btn-sm" ><i class="fa fa-edit"></i></a>
                    <a id="deleteBtn" data-id="' . $row->id . '" class="edit btn btn-danger btn-sm"  data-toggle="modal" data-target="#deletemodal"><i class="fa fa-trash"></i></a>';
            }else{
                return;
            }

        })

        ->addColumn('category_name', function ($row) {
            return  $row->category->translate(app()->getLocale())->title;
        })

        ->addColumn('title', function ($row) {
            return $row->translate(app()->getLocale())->title;
        })
        ->rawColumns(['action', 'title', 'category_name'])
        ->make(true);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'category_id' => 'required',
        ];

        foreach (config('app.languages') as $key => $value) {
            $data[$key . '*.title'] = 'required|string';
            $data[$key . '*.content'] = 'nullable|string';
            $data[$key . '*.smallDesc'] = 'nullable|string';
            $data[$key . '*.tags'] = 'nullable|string';
        }
        $ValidateData = $request->validate($data);


        try {

            $this->authorize('create' , $this->postmodel);
            $post = Post::create($request->except('image','_token'));
            $post->update(['user_id' => auth()->user()->id]);
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = Str::uuid() . $file->getClientOriginalName();
                $file->move(public_path('images'), $filename);
                $path = 'images/' . $filename;
                $post->update(['image' => $path]);
            }
            return redirect()->route('dashboard.posts.index')->with(['success' => 'successfully']);

        } catch (\Exception $ex) {

            return redirect()->route('dashboard.posts.index')->with(['error' => 'error']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $this->authorize('update' , $post);
        $categories = Category::all();
        return view('dashboard.posts.edit' , compact('post','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {

        try {
            $this->authorize('update' , $post);
            $post->update(['user_id' => auth()->user()->id]);
            $post->update($request->except('image', '_token'));
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = Str::uuid() . $file->getClientOriginalName();
                $file->move(public_path('images'), $filename);
                $path = 'images/' . $filename;
                $post->update(['image' => $path]);
            }

            return redirect()->route('dashboard.posts.index')->with(['success' => 'successfully']);

        } catch (\Exception $ex) {

            return redirect()->route('dashboard.posts.index')->with(['error' => 'error']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function delete (Request $request)
    {

        try {
            $this->authorize('delete' , $this->postmodel->find($request->id));
            if(is_numeric($request->id)){

                $delet = Post::select()->where('id', $request->id)->first();
                $image =Str::afterLast($delet->image, 'images/'); // get path folder img
                $image = base_path('public/images/'. $image); // get full path folder img
                unlink($image); //delete from folder

                Post::where('id' , $request->id)->delete();
            }

            return redirect()->route('dashboard.posts.index')->with(['success' => 'successfully']);
        } catch (\Exception $ex) {

            return redirect()->route('dashboard.posts.index')->with(['error' => 'error']);
        }

    }
}
