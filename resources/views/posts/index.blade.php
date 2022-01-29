
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
                @foreach ($allPosts as $post)
                <tr>
                    <th scope="row">1</th>
                    <td>{{$post['title']}}</td>
                    <td>{{$post['posted_by']}}</td>
                    <td>{{$post['created_at']}}</td>
                    <td>
                        <a href="{{'posts/{post}'}}" class="btn btn-secondary w-25 mx-2">View</a>
                        <a href="{{'posts/{post}/edit'}}" class="btn btn-success w-25 mx-2">Edit</a>
                        {{-- <form style="display: inline;" action="{{route('posts.destroy,['post'=>$post->id]')}}">
                            <button class="btn btn-primary w-25 mx-2" type="submit">Delete</button>
                        </form> --}}
                        <a href="{{'posts/{post}'}}" class="btn btn-primary w-25 mx-2">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endsection