<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Wedding;

class Client2 extends Controller
{
    public function save(Request $req)
    {
        $result = new Comment;
        $result->nama = $req->nama;
        $result->comment = $req->comment;
        $result->id_wedding = 2;
        if ($result->save()) {
            return redirect()->route('design.client2');
        } else {
            return back();
        }
    }
    public function view_comment()
    {
        // $data = Comment::latest()->where('id_wedding',2)->take(5)->get();
        return view('design.client2.client2');
    }
    public function just_comment()
    {
        $data = Comment::where('id_wedding', 2)->get();
        return view('design.client2.client2_comment', ['data' => $data]);
    }
    public function view_comment2()
    {
        return view('design.client2.client2_');
    }
    public function save2(Request $req)
    {
        $result = new Comment;
        $result->nama = $req->nama;
        $result->comment = $req->comment;
        $result->id_wedding = 2;
        if ($result->save()) {
            return redirect()->route('design.client2_');
        } else {
            return back();
        }
    }


    // tamu khusus
    public function save_1(Request $req)
    {
        $result = new Comment;
        $result->nama = $req->nama;
        $result->comment = $req->comment;
        $result->id_wedding = 2;
        if ($result->save()) {
            return redirect()->route('design.client21');
        } else {
            return back();
        }
    }
    public function view_comment_1()
    {
        // $data = Comment::latest()->where('id_wedding',2)->take(5)->get();
        return view('design.client2.client21');
    }
}
