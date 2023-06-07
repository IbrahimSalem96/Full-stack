<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;
use DB;
use App\Http\Controllers\Controller;
use App\Models\Admin\Vendor;
use App\Models\Admin\MainCatgorie;
use App\Http\Requests\VendorRequest;
use App\Notifications\VendorCreated;

class VendorsController extends Controller
{
    public function index()
    {

        $vendors = Vendor::selection()->paginate(PAGINATION_COUNT);

        return view('admin.vendors.index', compact('vendors'));
    }

    public function create(){


        $categories = MainCatgorie::where('translation_of', 0)->active()->get();
        return view('admin.vendors.create', compact('categories'));
    }

    public function store(VendorRequest $request)
    {
        try{

            if (!$request->has('active'))
                $request->request->add(['active' => 0]);
            else
                $request->request->add(['active' => 1]);

            $filePath = "";
            if ($request->has('logo')) {

                $filePath = saveimages('vendors', $request->logo);
            }

            $vendor = Vendor::create([
                'name' => $request->name,
                'category_id' => $request->category_id,
                'mobile' => $request->mobile,
                'email' => $request->email,
                'active' => $request->active,
                'address' => $request->address,
                'password' => $request->password,
                'logo' => $filePath,
            ]);

            //Notification::send($vendor, new VendorCreated($vendor));

            return redirect()->route('admin.Venders.index')->with(['success' => 'The store has been added successfully']);

        }catch(\Exception $ex) {
            return $ex;
            return redirect()->route('admin.Venders.index')->with(['error' => 'Something went wrong, please try again later']);
        }
    }

    public function edit($vender_id){

        try {

            $vendor = Vendor::selection()->find($vender_id);
            if (!$vendor)
            return redirect()->route('admin.Venders.index')->with(['error' => 'Something went wrong, please try again later']);

            $categories = MainCatgorie::where('translation_of', 0)->active()->get();

            return view('admin.vendors.edit', compact('vendor', 'categories'));

        } catch (\Exception $ex) {

            return redirect()->route('admin.Venders.index')->with(['error' => 'Something went wrong, please try again later']);
        }
    }

    public function update($id, Request $request){

        try {

            $vendor = Vendor::selection()->find($id);
            if (!$vendor)
            return redirect()->route('admin.Venders.index')->with(['error' => 'Something went wrong, please try again later']);


            DB::beginTransaction();
            //photo
            if ($request->has('logo') ) {
                $filePath = saveimages('vendors', $request->logo);
                Vendor::where('id', $id)->update([
                        'logo' => $filePath,
                    ]);
            }

            if (!$request->has('active'))
                $request->request->add(['active' => 0]);
            else
                $request->request->add(['active' => 1]);

            $data = $request->except('_token', 'id', 'logo', 'password'); //except ==> They were dealt with each one alone, so it is not permissible to repeat the amendment order

            if ($request->has('password') && !is_null($request->password)) {

                $data['password'] = $request->password;
            }

            Vendor::where('id', $id)->update(
                    $data
                );

            DB::commit();
            return redirect()->route('admin.Venders.index')->with(['success' => 'The store has been added successfully']);
        } catch (\Exception $ex) {

            DB::rollback();
            return redirect()->route('admin.Venders.index')->with(['error' => 'Something went wrong, please try again later']);
        }
    }

    public function destroy($id){

        try {

            $vendor = Vendor::find($id);
            if (!$vendor)
                return redirect()->route('admin.Venders.index')->with(['error' => 'This merchant does not exist']);

            $image =Str::afterLast($vendor->logo, 'imgsite/'); // get path folder img
            $image = base_path('public/imgsite/'. $image); // get full path folder img
            unlink($image); //delete from folder

            $vendor->delete();
            return redirect()->route('admin.Venders.index')->with(['success' => 'Delete completed successfully']);

        } catch (\Exception $ex) {

            return redirect()->route('admin.Venders.index')->with(['error' => 'Something went wrong, please try again later']);
        }
    }

    public function changeStatus($id)
    {
        try {
            $vendor = Vendor::find($id);
            if(!$vendor)
                return redirect()->route('admin.Venders.index')->with(['error' => 'This section does not exist']);


            $status =  $vendor->active  == 0 ? 1 : 0;
            $vendor->update(['active' => $status]);

            return redirect()->route('admin.Venders.index')->with(['success' => 'Status changed successfully']);

        } catch (\Exception $ex) {

            return redirect()->route('admin.Venders.index')->with(['error' => 'Something went wrong, please try again later']);
        }
    }
}
