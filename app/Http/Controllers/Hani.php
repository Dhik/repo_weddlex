<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class Hani extends Controller
{
    public function save(Request $req)
    {
        $result = new Comment;
        $result->nama = $req->nama;
        $result->comment = $req->comment;
        $result->id_wedding = 3;
        if ($result->save()) {
            return redirect()->route('design.hani');
        } else {
            return back();
        }
    }
    public function view_comment()
    {
        $data = Comment::where('id_wedding', 3)->get();
        return view('design.hani_3.main2', ['data' => $data]);
    }
}
