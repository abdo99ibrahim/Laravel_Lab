
        @extends('layouts.app')
        @section('title')Index Page @endsection
        @section('content')
        <div class="text-center mb-2">
            <a href="{{route('posts.create')}}" class="btn btn-dark text-warning w-25 mb-3 ">Create Post</a>
        </div>
        <table class="table table-hover mt-3">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Posted By</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                {{-- $allposts -> type object [collection] --}}
                @foreach ($allPosts as $post)
                <tr>
                    {{--@dd($post); return first object in db من نوع -> \Post class  --}}
                    {{--$post->title ((($object --> proprity of obj[cloumn in db]))))--}}
                    <th scope="row">{{$post->id}}</th>
                    <td>{{$post->title}}</td>
                    {{-- @dd($post -> user, $post->user()); --}}
                    <td>{{isset($post -> user)?$post -> user -> name:'NotFound'}}</td>
                    <td>{{$post->created_at}}</td>
                    <td>
                        <a href="{{route('posts.show',2)}}" class="btn btn-secondary w-25 mx-2">View</a>
                        <a href="{{route('posts.edit',2)}}" class="btn btn-success w-25 mx-2">Edit</a>
                        {{-- <form style="display: inline;" action="{{route('posts.destroy,['post'=>$post->id]')}}">
                            <button class="btn btn-primary w-25 mx-2" type="submit">Delete</button>
                        </form> --}}
                        <a href="{{route('posts.destroy',2)}}" class="btn btn-primary w-25 mx-2">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endsection
