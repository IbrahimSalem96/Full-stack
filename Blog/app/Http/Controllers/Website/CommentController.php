<?php

namespace App\Http\Controllers\Website;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{

    public function store($id, Request $request){

        $data = [
            'comment' => 'required |string|max:100',
        ];

        $ValidateData = $request->validate($data);

        try {
            Comment::create([
                'name' => $request->name,
                'body' => $request->comment,
                'post_id' => $id,
            ]);
            return redirect()->back()->with(['success' => 'successfully']);

        } catch (\Exception $ex) {

            return redirect()->back()->with(['error' => 'error']);
        }




    }

}
