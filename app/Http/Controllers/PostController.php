<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $allPosts =[
            ['title'=> 'Learn PHP','posted_by'=>'Ahmed','created_at'=>'2020-01-25'],
            ['title'=> 'Learn Laravel','posted_by'=>'Mohamed','created_at'=>'2020-04-15'],
            ['title'=> 'Design Patterns','posted_by'=>'Galal','created_at'=>'2022-03-05'],
        ];
        return view('posts.index',[
            'allPosts'=> $allPosts
        ]);
    }
    public function create(){
        return view('posts.create');
    }
    public function store(){
        // $val = redirect();
        # dd ---> pass any variable and now the result of this.
        // dd($val);
        return redirect()->route('posts.index');
    }
    public function show($postid){
        // $singlePost = post::fint($postid);
        // return view('posts.show',['postid'=>$singlePost]);
        return view('posts.show');
    }
    public function edit($postid)
    {
        return view('posts.edit');
    }
    public function update(){
        return redirect()->route('posts.index');
    }
    public function destroy(){

    }
}
