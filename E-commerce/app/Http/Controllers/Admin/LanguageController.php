<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Language;
use App\Http\Requests\LanguageRequest;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function index(){
        $languages = Language::selection();
        return view('admin.languages.index',compact('languages'));
    }

    public function create(){

        return view('admin.languages.create');
    }

    public function store(LanguageRequest $request)
    {

        try {
            Language::create($request->except(['_token']));
            return redirect()->route('admin.languages.settings')->with(['success' => 'Language saved successfully']);
        } catch (\Exception $ex) {

            return redirect()->route('admin.languages.settings')->with(['error' => 'Something went wrong, please try again later']);
        }


    }

    public function edit($id){

        $language = Language::select()->find($id);
        if(!$language){

            return redirect()->route('admin.languages.settings')->with(['error' => 'Something went wrong, please try again later']);
        }

        return view('admin.languages.edit', compact('language'));

    }

    public function update($id, LanguageRequest $request){

        try {

            $language = Language::select()->find($id);
            if(!$language){
                return redirect()->route('admin.languages.settings')->with(['error' => 'Something went wrong, please try again later']);
            }

            if (!$request->has('active'))
                $request->request->add(['active' => 0]);
            else
                $request->request->add(['active' => 1]);

            Language::where('id', $id)->update($request->except(['_token']));
            return redirect()->route('admin.languages.settings')->with(['success' => 'Language Update Successfully']);
        } catch (\Exception $ex) {

            return redirect()->route('admin.languages.settings')->with(['error' => 'Something Went Wrong, Please Try Again Later']);
        }
    }

    public function destroy($id){

        try {

            $language = Language::select()->find($id);
            if(!$language){
                return redirect()->route('admin.languages.settings')->with(['error' => 'Something Went Wrong, Please Try Again Later']);
            }

            Language::where('id', $id)->delete();
            return redirect()->route('admin.languages.settings')->with(['success' => 'Language Delete Successfully']);
        } catch (\Exception $ex) {

            return redirect()->route('admin.languages.settings')->with(['error' => 'Something Went Wrong, Please Try Again Later']);
        }
    }




}
