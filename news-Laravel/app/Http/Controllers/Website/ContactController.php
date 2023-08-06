<?php

namespace App\Http\Controllers\Website;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index()
    {

        return view('website.contact');
    }

    public function store(Request $request){

        $data = [
            'name' => 'required |string|max:100',
            'email' => 'required |email|max:50',
            'subject' => 'nullable|string',
            'message' => 'nullable|string',
        ];

        $ValidateData = $request->validate($data);

        try {
            $contact =  Contact::create($request->except('_token'));
            return redirect()->route('contacts.index')->with(['success' => 'successfully']);

        } catch (\Exception $ex) {

            return redirect()->route('contacts.index')->with(['error' => 'error']);
        }
    }

}
