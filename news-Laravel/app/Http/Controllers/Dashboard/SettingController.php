<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Setting;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use \Illuminate\Support\Str;

class SettingController extends Controller
{
    public function index(){


        return view('dashboard.index');
    }


    public function setting(){

        $setting = Setting::first();
        $this->authorize('view', $setting);
        return view('dashboard.setting');
    }

    public function update(Request $request, Setting $setting)
    {
        $data = [
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'favicon' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'facebook' => 'nullable|string',
            'instagram' => 'nullable|string',
            'phone' => 'nullable|string',
            'email' => 'nullable|email',
        ];

        foreach (config('app.languages') as $key => $value) {
            $data[$key . '*.title'] = 'nullable|string';
            $data[$key . '*.content'] = 'nullable|string';
            $data[$key . '*.address'] = 'nullable|string';
        }

        $ValidateData = $request->validate($data);

        try {
            $setting->update($request->except('image', 'favicon', '_token'));
            $this->authorize('update', $setting);
            if ($request->file('logo')) {
                $file = $request->file('logo');
                $filename = Str::uuid() . $file->getClientOriginalName();
                $file->move(public_path('images'), $filename);
                $path = 'images/' . $filename;
                $setting->update(['logo' => $path]);
            }
            if ($request->file('favicon')) {
                $file = $request->file('favicon');
                $filename = Str::uuid() . $file->getClientOriginalName();
                $file->move(public_path('images'), $filename);
                $path = 'images/' . $filename;
                $setting->update(['favicon' => $path]);
            }
            return redirect()->route('dashboard.settings')->with(['success' => 'successfully']);

        } catch (\Exception $ex) {

            return redirect()->route('dashboard.settings')->with(['error' => 'error']);
        }
    }

}
