<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
class PostController extends Controller
{
    public function index(){
        // $allPosts = Post::where('title','Laravel')->get();
        // Post model
        $allPosts = Post::all();
        // @dd($allPosts);
        // get dv recoreds from posts table

        return view('posts.index',[
            'allPosts'=> $allPosts
        ]);
    }
    public function create(){
        // retrieve users
        $users = User::all();
        // @dd($users);
        return view('posts.create',[
            'users'=>$users
        ]);
    }
    public function store(){
        // $val = redirect();
        # dd ---> pass any variable and now the result of this.
        // dd($val);

        ###1) form submition محتاج اجيب الداتا الل بتجيلي من ال ---> request() global helper method -> chain arrow
        $data = request()->all();
        // @dd($data);

        ###2) احفظ البيانات جوا الداتا بيز
        Post::create([

            'title'=>$data['title'],
            'description'=>$data['description'],
            'user_id'=>$data['posted_creater']

            /* 'title'=>'PHP',
             'description'=>'new description',*/
        ]);
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
    public function destroy($postid){
        return redirect()->route('posts.index');
    }
}
