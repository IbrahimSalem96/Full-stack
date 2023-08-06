<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use DataTables;

class CategoryController extends Controller
{
    protected $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('Dashboard.categories.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::whereNull('parent')->orWhere('parent', 0)->get();
        return view('dashboard.categories.add', compact('categories'));
    }

    public function getCategoriesDatatable()
    {

        $data = Category::select('*')->with('parents');
        return DataTables::of($data)
        ->addIndexColumn()
        ->addColumn('action', function ($row) {
            if(auth()->user()->can('update', $row)){
                return $btn = '
                    <a href="' . route('dashboard.category.edit', $row->id) . '"  class="edit btn btn-success btn-sm" ><i class="fa fa-edit"></i></a>
                    <a id="deleteBtn" data-id="' . $row->id . '" class="edit btn btn-danger btn-sm"  data-toggle="modal" data-target="#deletemodal"><i class="fa fa-trash"></i></a>';
            }else{
                return;
            }
        })

        ->addColumn('parent', function ($row) {
            return ($row->parent ==  0) ? trans('words.main category') :   $row->parents->translate(app()->getLocale())->title;
        })
        ->addColumn('title', function ($row) {
            return $row->translate(app()->getLocale())->title;
        })
        ->addColumn('status', function ($row) {
            return $row->status == null ? __('words.not activated') : __('words.' . $row->status);
        })
        ->rawColumns(['action', 'status', 'title'])
        ->make(true);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Category $category)
    {
        $this->authorize('create' , $this->user);

        $data = [
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'parent' => 'string',
        ];
        foreach (config('app.languages') as $key => $value) {
            $data[$key . '*.title'] = 'nullable|string';
            $data[$key . '*.content'] = 'nullable|string';
        }

        $ValidateData = $request->validate($data);

        try {
            $category =  Category::create($request->except('image', '_token'));

            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = Str::uuid() . $file->getClientOriginalName();
                $file->move(public_path('images'), $filename);
                $path = 'images/' . $filename;
                $category->update(['image' => $path]);
            }
            return redirect()->route('dashboard.category.index')->with(['success' => 'successfully']);

        } catch (\Exception $ex) {

            return redirect()->route('dashboard.category.index')->with(['error' => 'error']);
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
    public function edit(Category $category)
    {
        $this->authorize('update',  $this->user);
        $categories = Category::whereNull('parent')->orWhere('parent', 0)->get();
        return view('dashboard.categories.edit', compact('category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        try {
            $this->authorize('update', $this->user);

            $category->update($request->except('image', '_token'));

            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = Str::uuid() . $file->getClientOriginalName();
                $file->move(public_path('images'), $filename);
                $path = 'images/' . $filename;
                $category->update(['image' => $path]);
            }
            return redirect()->route('dashboard.category.index')->with(['success' => 'successfully']);

        } catch (\Exception $ex) {

            return redirect()->route('dashboard.category.index')->with(['error' => 'error']);
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

    public function delete(Request $request)
    {
        try {
            $this->authorize('delete', $this->user);
            if(is_numeric($request->id)){

                $delet = Category::select()->where('id', $request->id)->first();
                $image =Str::afterLast($delet->image, 'images/'); // get path folder img
                $image = base_path('public/images/'. $image); // get full path folder img
                unlink($image); //delete from folder

                Category::where('parent', $request->id)->delete();
                Category::where('id', $request->id)->delete();
            }
            return redirect()->route('dashboard.category.index')->with(['success' => 'successfully']);

        } catch (\Exception $ex) {

            return redirect()->route('dashboard.category.index')->with(['error' => 'error']);
        }
    }
}

