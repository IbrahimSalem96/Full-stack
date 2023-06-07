<?php

namespace App\Http\Controllers\Dashboard;
use DataTables;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        return view('dashboard.messages.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('dashboard.messages.add');
    }

    public function getMessagesDatatable()
    {

        $data = Contact::select('*');
        return DataTables::of($data)
        ->addIndexColumn()
        ->addColumn('action', function ($row) {
                return $btn = '
                    <div class="d-flex">
                        <a href="' . route('dashboard.messages.edit', $row->id) . '"  class="edit btn btn-success btn-sm" ><i class="fa fa-edit"></i></a>
                        <a id="deleteBtn" data-id="' . $row->id . '" class="edit btn btn-danger btn-sm"  data-toggle="modal" data-target="#deletemodal"><i class="fa fa-trash"></i></a>
                    </div>';

        })

        ->addColumn('Name', function ($row) {
            return $row->name;
        })

        ->addColumn('Subject', function ($row) {
            return $row->subject;
        })

        ->addColumn('Msessage', function ($row) {
            return $row->message;
        })

        ->addColumn('Sending Time', function ($row) {
            return $row->created_at;
        })

        ->rawColumns(['action'])
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
        //
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
    public function edit(Contact $contact)
    {

        return view('dashboard.messages.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        try {
            if(is_numeric($request->id)){
                Contact::where('id' , $request->id)->delete();
            }
            return redirect()->route('dashboard.messages.index')->with(['success' => 'successfully']);

        } catch (\Exception $ex) {

            return redirect()->route('dashboard.messages.index')->with(['error' => 'error']);
        }
    }
}
