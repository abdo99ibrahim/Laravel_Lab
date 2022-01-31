<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
class PostController extends Controller
{
    public function index(){
        // $allPosts = Post::where('title','Laravel')->get();
        // Post model
        $allPosts = Post::paginate(3);
        // @dd($allPosts);
        // get dv recoreds from posts table

        return view('posts.index',[
            'allPosts'=> $allPosts,
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
    public function store(StorePostRequest $request){
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
    public function show($post){
        $singlePost = Post::findOrFail($post);
        // @dd($singlePost);
        return view('posts.show',['post'=>$singlePost]);
    }
    public function edit($post)
    {
        $singlePost = Post::findOrFail($post);
        return view('posts.edit',['post'=>$singlePost]);

    }
    public function update($post,Request $request){
        $singlePost = Post::findOrFail($post);
        $singlePost->update([
            'title'=>$request['title'],
            'description'=>$request['description'],
            'user_id'=>$request['posted_creater']
        ]);
        return redirect()->route('posts.index');
    }
    public function destroy($post){
        $singlePost = Post::findOrFail($post);
        $singlePost->delete();
        return redirect()->route('posts.index');
    }
}
