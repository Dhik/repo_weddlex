<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Wedding;

class Client1 extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }
    public function save(Request $req){
        $result = new Comment;
        $result->nama = $req->nama;
        $result->comment = $req->comment;
        $result->id_wedding = 1;
        if($result->save()) {
            return redirect()->route('design.client1'); 
        }else{
            return back();
        }
    }
    public function view_comment(){
        $data = Comment::latest()->where('id_wedding',1)->take(5)->get();
        return view('design.client1.client1',['data'=>$data]);
    }

    public function save_1(Request $req){
        $result = new Comment;
        $result->nama = $req->nama;
        $result->comment = $req->comment;
        $result->id_wedding = 1;
        if($result->save()) {
            return redirect()->route('design.client11'); 
        }else{
            return back();
        }
    }
    public function view_comment_1(){
        $data = Comment::latest()->where('id_wedding',1)->take(5)->get();
        return view('design.client1.client11',['data'=>$data]);
    }

    public function save_2(Request $req){
        $result = new Comment;
        $result->nama = $req->nama;
        $result->comment = $req->comment;
        $result->id_wedding = 1;
        if($result->save()) {
            return redirect()->route('design.client12'); 
        }else{
            return back();
        }
    }
    public function view_comment_2(){
        $data = Comment::latest()->where('id_wedding',1)->take(5)->get();
        return view('design.client1.client12',['data'=>$data]);
    }

    public function save_3(Request $req){
        $result = new Comment;
        $result->nama = $req->nama;
        $result->comment = $req->comment;
        $result->id_wedding = 1;
        if($result->save()) {
            return redirect()->route('design.client13'); 
        }else{
            return back();
        }
    }
    public function view_comment_3(){
        $data = Comment::latest()->where('id_wedding',1)->take(5)->get();
        return view('design.client1.client13',['data'=>$data]);
    }

    public function save_4(Request $req){
        $result = new Comment;
        $result->nama = $req->nama;
        $result->comment = $req->comment;
        $result->id_wedding = 1;
        if($result->save()) {
            return redirect()->route('design.client14'); 
        }else{
            return back();
        }
    }
    public function view_comment_4(){
        $data = Comment::latest()->where('id_wedding',1)->take(5)->get();
        return view('design.client1.client14',['data'=>$data]);
    }

    public function save_5(Request $req){
        $result = new Comment;
        $result->nama = $req->nama;
        $result->comment = $req->comment;
        $result->id_wedding = 1;
        if($result->save()) {
            return redirect()->route('design.client15'); 
        }else{
            return back();
        }
    }
    public function view_comment_5(){
        $data = Comment::latest()->where('id_wedding',1)->take(5)->get();
        return view('design.client1.client15',['data'=>$data]);
    }
}
