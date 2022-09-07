<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class Umi extends Controller
{
    public function save(Request $req)
    {
        $result = new Comment;
        $result->nama = $req->nama;
        $result->comment = $req->comment;
        $result->id_wedding = 4;
        if ($result->save()) {
            return redirect()->route('design.umi');
        } else {
            return back();
        }
    }
    public function view_comment()
    {
        $data = Comment::where('id_wedding', 4)->get();
        return view('design.umi_4.main', ['data' => $data]);
    }
}
