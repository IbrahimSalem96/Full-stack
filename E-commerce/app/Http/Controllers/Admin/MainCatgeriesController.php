<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\MainCatgorie;
use App\Http\Requests\MainCategoryRequest;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Str;

class MainCatgeriesController extends Controller
{

    public function index()
    {
        $default_lang = get_default_lang(); // ===> App/Helpers folder function  get_default_lang();
        $categories = MainCatgorie::where('translation_lang', $default_lang)->selection()->get();

        return view('admin.maincatgeries.index', compact('categories'));
    }

    public function create(){

        return view('admin.maincatgeries.create');
    }

    public function store(MainCategoryRequest $request)
    {

        try {

        $main_categorys = collect($request->category);

        $filter = $main_categorys->filter(function($value, $key){
            return $value['abbr'] == get_default_lang();
        });

        $default_category = array_values($filter->all()) [0];

        $filePath = "";
        if ($request->has('photo')) {

            $filePath = saveimages('maincategories', $request->photo);
        }

        DB::beginTransaction(); // First check whether it was completed

        $default_category_id = MainCatgorie::insertGetId([
            'translation_lang' => $default_category['abbr'],
            'translation_of' => 0,
            'name' => $default_category['name'],
            'slug' => $default_category['name'],
            'photo' => $filePath,
        ]);


        $categories = $main_categorys->filter(function ($value, $key) {
            return $value['abbr'] != get_default_lang();
        });

        if(isset($categories) && $categories->count()){

            $categories_arr = [] ;
            foreach ($categories as $category) {
                $categories_arr = [
                    'translation_lang' => $category['abbr'],
                    'translation_of' => $default_category_id,
                    'name' => $category['name'],
                    'slug' => $category['name'],
                    'photo' => $filePath,
                ];

                MainCatgorie::insert($categories_arr);
            }
        }

        DB::commit(); // Check that all operations have been completed

        return redirect()->route('admin.main_catgeries.sections')->with(['success' => 'Language saved successfully']);

        } catch (\Exception $ex) {

            DB::rollback(); // If any process fails to add to the data, stop all operations
            return redirect()->route('admin.main_catgeries.sections')->with(['error' => 'Something went wrong, please try again later']);
        }
    }

    public function edit($mainCat_id){

        $maincatgorie = MainCatgorie::with('categories')->selection()->find($mainCat_id);
        if(!$maincatgorie){

            return redirect()->route('admin.main_catgeries.sections')->with(['error' => 'Something went wrong, please try again later']);
        }

        return view('admin.maincatgeries.edit', compact('maincatgorie'));
    }

    public function update($mainCat_id, MainCategoryRequest $request){

        $main_category = MainCatgorie::find($mainCat_id);
        if(!$main_category ){
            return redirect()->route('admin.main_catgeries.sections')->with(['error' => 'Something went wrong, please try again later']);
        }

        if (!$request->has('category.0.active'))
            $request->request->add(['active' => 0]);
        else
            $request->request->add(['active' => 1]);


        $category = array_values($request->category) [0];

        MainCatgorie::where('id', $mainCat_id)->update([
            'name' => $category['name'],
            'active' => $request->active,
        ]);

        // save image
        $filePath = "";
        if ($request->has('photo')) {
            $filePath = saveimages('maincategories', $request->photo);

            MainCatgorie::where('id', $mainCat_id)->update([
                'photo' => $filePath,
            ]);

        }

        return redirect()->route('admin.main_catgeries.sections')->with(['success' => 'Update completed successfully']);
    }

    public function destroy($id){

        try {

            $maincatgorie = MainCatgorie::find($id);
            if (!$maincatgorie)
                return redirect()->route('admin.maincategories')->with(['error' => 'This section does not exist']);

            $vendors = $maincatgorie->vendors();
            if (isset($vendors) && $vendors->count() > 0) {
                return redirect()->route('admin.main_catgeries.sections')->with(['error' => 'This section cannot be deleted because there are merchants in it, which leads to problems']);
            }

            $image =Str::afterLast($maincatgorie->photo, 'imgsite/'); // get path folder img
            $image = base_path('public/imgsite/'. $image); // get full path folder img
            unlink($image); //delete from folder

            $maincatgorie->categories()->delete(); //delete all transaltion languages of data
            $maincatgorie->delete();
            return redirect()->route('admin.main_catgeries.sections')->with(['success' => 'Delete completed successfully']);

        } catch (\Exception $ex) {

            return redirect()->route('admin.main_catgeries.sections')->with(['error' => 'Something went wrong, please try again later']);
        }
    }

    public function changeStatus($id)
    {
        try {
            $maincatgorie = MainCatgorie::find($id);
            if(!$maincatgorie)
                return redirect()->route('admin.main_catgeries.sections')->with(['error' => 'This section does not exist']);


            $status =  $maincatgorie->active  == 0 ? 1 : 0;
            $maincatgorie->update(['active' => $status]);

            return redirect()->route('admin.main_catgeries.sections')->with(['success' => 'Status changed successfully']);

        } catch (\Exception $ex) {

            return redirect()->route('admin.main_catgeries.sections')->with(['error' => 'Something went wrong, please try again later']);
        }
    }
}
