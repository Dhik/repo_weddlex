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
    public function save_2(Request $req)
    {
        $result = new Comment;
        $result->nama = $req->nama;
        $result->comment = $req->comment;
        $result->id_wedding = 2;
        if ($result->save()) {
            return redirect()->route('design.client22');
        } else {
            return back();
        }
    }
    public function view_comment_2()
    {
        // $data = Comment::latest()->where('id_wedding',2)->take(5)->get();
        return view('design.client2.client22');
    }
    public function save_3(Request $req)
    {
        $result = new Comment;
        $result->nama = $req->nama;
        $result->comment = $req->comment;
        $result->id_wedding = 2;
        if ($result->save()) {
            return redirect()->route('design.client23');
        } else {
            return back();
        }
    }
    public function view_comment_3()
    {
        // $data = Comment::latest()->where('id_wedding',2)->take(5)->get();
        return view('design.client2.client23');
    }
    public function save_4(Request $req)
    {
        $result = new Comment;
        $result->nama = $req->nama;
        $result->comment = $req->comment;
        $result->id_wedding = 2;
        if ($result->save()) {
            return redirect()->route('design.client24');
        } else {
            return back();
        }
    }
    public function view_comment_4()
    {
        // $data = Comment::latest()->where('id_wedding',2)->take(5)->get();
        return view('design.client2.client24');
    }
    public function save_5(Request $req)
    {
        $result = new Comment;
        $result->nama = $req->nama;
        $result->comment = $req->comment;
        $result->id_wedding = 2;
        if ($result->save()) {
            return redirect()->route('design.client25');
        } else {
            return back();
        }
    }
    public function view_comment_5()
    {
        // $data = Comment::latest()->where('id_wedding',2)->take(5)->get();
        return view('design.client2.client25');
    }
    public function save_6(Request $req)
    {
        $result = new Comment;
        $result->nama = $req->nama;
        $result->comment = $req->comment;
        $result->id_wedding = 2;
        if ($result->save()) {
            return redirect()->route('design.client26');
        } else {
            return back();
        }
    }
    public function view_comment_6()
    {
        // $data = Comment::latest()->where('id_wedding',2)->take(5)->get();
        return view('design.client2.client26');
    }
    public function save_7(Request $req)
    {
        $result = new Comment;
        $result->nama = $req->nama;
        $result->comment = $req->comment;
        $result->id_wedding = 2;
        if ($result->save()) {
            return redirect()->route('design.client27');
        } else {
            return back();
        }
    }
    public function view_comment_7()
    {
        // $data = Comment::latest()->where('id_wedding',2)->take(5)->get();
        return view('design.client2.client27');
    }
    public function save_8(Request $req)
    {
        $result = new Comment;
        $result->nama = $req->nama;
        $result->comment = $req->comment;
        $result->id_wedding = 2;
        if ($result->save()) {
            return redirect()->route('design.client28');
        } else {
            return back();
        }
    }
    public function view_comment_8()
    {
        // $data = Comment::latest()->where('id_wedding',2)->take(5)->get();
        return view('design.client2.client28');
    }
    public function save_9(Request $req)
    {
        $result = new Comment;
        $result->nama = $req->nama;
        $result->comment = $req->comment;
        $result->id_wedding = 2;
        if ($result->save()) {
            return redirect()->route('design.client29');
        } else {
            return back();
        }
    }
    public function view_comment_9()
    {
        // $data = Comment::latest()->where('id_wedding',2)->take(5)->get();
        return view('design.client2.client29');
    }
    public function save_10(Request $req)
    {
        $result = new Comment;
        $result->nama = $req->nama;
        $result->comment = $req->comment;
        $result->id_wedding = 2;
        if ($result->save()) {
            return redirect()->route('design.client210');
        } else {
            return back();
        }
    }
    public function view_comment_10()
    {
        // $data = Comment::latest()->where('id_wedding',2)->take(5)->get();
        return view('design.client2.client210');
    }
}
