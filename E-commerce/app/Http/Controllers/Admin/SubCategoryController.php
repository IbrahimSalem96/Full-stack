<?php

namespace App\Http\Controllers\Admin;

use DB;
use Illuminate\Http\Request;
use App\Models\Admin\SubCategory;
use App\Models\Admin\MainCatgorie;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;
use App\Http\Requests\SubCategoryRequest;
use Illuminate\Support\Str;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $default_lang = get_default_lang(); // ===> App/Helpers folder function  get_default_lang();
        $sub_category = SubCategory::with('mainCategory')->where('translation_lang', $default_lang)->selection()->get();

        return view('admin.subcategory.index', compact('sub_category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $default_lang = get_default_lang(); // ===> App/Helpers folder function  get_default_lang();
        $categories = MainCatgorie::where('translation_lang', $default_lang)->selection()->get();
        return view('admin.subcategory.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubCategoryRequest $request)
    {

        try {
            $sub_category = collect($request->category);

            $filter = $sub_category->filter(function($value, $key){
                return $value['abbr'] == get_default_lang();
            });

            $default_sub_category = array_values($filter->all()) [0];

            $filePath = "";
            if ($request->has('photo')) {

                $filePath = saveimages('subcategory', $request->photo);
            }

            DB::beginTransaction(); // First check whether it was completed

            $default_sub_category_id = SubCategory::insertGetId([
                'translation_lang' => $default_sub_category['abbr'],
                'translation_of' => 0,
                'name' => $default_sub_category['name'],
                'slug' => $default_sub_category['name'],
                'parent_id' => $request->parent_id,
                'photo' => $filePath,
            ]);


            $subcategory = $sub_category->filter(function ($value, $key) {
                return $value['abbr'] != get_default_lang();
            });

            if(isset($subcategory) && $subcategory->count()){

                $subcategory_arr = [] ;
                foreach ($subcategory as $sub) {
                    $subcategory_arr = [
                        'translation_lang' => $sub['abbr'],
                        'translation_of' => $default_sub_category_id,
                        'name' => $sub['name'],
                        'slug' => $sub['name'],
                        'parent_id' => $request->parent_id,
                        'photo' => $filePath,
                    ];

                    SubCategory::insert($subcategory_arr);
                }
            }

            DB::commit(); // Check that all operations have been completed

        return redirect()->route('admin.SubCategory.index')->with(['success' => 'Language saved successfully']);

        } catch (\Exception $ex) {

            DB::rollback(); // If any process fails to add to the data, stop all operations
            return redirect()->route('admin.SubCategory.index')->with(['error' => 'Something went wrong, please try again later']);
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
    public function edit($subcategory_id){
        $default_lang = get_default_lang(); // ===> App/Helpers folder function  get_default_lang();
        $categories = MainCatgorie::where('translation_lang', $default_lang)->selection()->get();

        $subcategory = SubCategory::with('subCategory')->selection()->find($subcategory_id);
        if(!$subcategory_id){
            return redirect()->route('admin.SubCategory.index')->with(['error' => 'Something went wrong, please try again later']);
        }

        return view('admin.SubCategory.edit', compact('subcategory', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($mainCat_id, SubCategoryRequest $request){

        $main_category = SubCategory::find($mainCat_id);
        if(!$main_category ){
            return redirect()->route('admin.SubCategory.sections')->with(['error' => 'Something went wrong, please try again later']);
        }

        if (!$request->has('category.0.active'))
            $request->request->add(['active' => 0]);
        else
            $request->request->add(['active' => 1]);


        $category = array_values($request->category) [0];

        SubCategory::where('id', $mainCat_id)->update([
            'name' => $category['name'],
            'active' => $request->active,
        ]);

        // save image
        $filePath = "";
        if ($request->has('photo')) {
            $filePath = saveimages('maincategories', $request->photo);

            SubCategory::where('id', $mainCat_id)->update([
                'photo' => $filePath,
            ]);

        }

        return redirect()->route('admin.SubCategory.index')->with(['success' => 'Update completed successfully']);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {

            $subCategorys = SubCategory::find($id);
            if (!$subCategorys)
                return redirect()->route('admin.SubCategory.index')->with(['error' => 'This section does not exist']);


            $image =Str::afterLast($subCategorys->photo, 'imgsite/'); // get path folder img
            $image = base_path('public/imgsite/'. $image); // get full path folder img
            unlink($image); //delete from folder

            $subCategorys->subCategory()->delete(); //delete all transaltion languages of data
            $subCategorys->delete();
            return redirect()->route('admin.SubCategory.index')->with(['success' => 'Delete completed successfully']);

        } catch (\Exception $ex) {

            return redirect()->route('admin.SubCategory.index')->with(['error' => 'Something went wrong, please try again later']);
        }
    }

    public function changeStatus($id)
    {
        try {
            $subCategorys = SubCategory::find($id);
            if(!$subCategorys)
                return redirect()->route('admin.main_catgeries.sections')->with(['error' => 'This section does not exist']);


            $status =  $subCategorys->active  == 0 ? 1 : 0;
            $subCategorys->update(['active' => $status]);

            return redirect()->route('admin.SubCategory.index')->with(['success' => 'Status changed successfully']);

        } catch (\Exception $ex) {

            return redirect()->route('admin.SubCategory.index')->with(['error' => 'Something went wrong, please try again later']);
        }
    }
}
