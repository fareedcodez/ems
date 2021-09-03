@extends('layouts.app')
    
@section('content')
<div class="container-fluid ">
    <div class="card shadow mb-5">
    <div class="card-header py-3 border-bottom-primary">
        <a href="/posts" class="m-0 font-weight-bold text-primary btn btn-secondary " style="color: rgb(243, 17, 17)">Go Back</a>
    </div>
    
    <div class="card-body">
<h1 class=" jumbotron bg-white p-0 text-capitalize">{{$post ->title}}</h1>
<div style="font-weight: bold;">
    <p class="text-capitalize" style="white-space: pre-wrap; font-weight: bold; color:rgb(2, 2, 2)" >{!!$post->message!!}</p>
   
</div>

<hr>
        <small style="color: cornflowerblue">Posted On {{$post->created_at}}</small><br></br>
        <a href="/posts/{{$post->id}}/edit" class="btn btn-primary pull-right">Edit</a>
    <a href="javascript:void(0)" onclick="deletePost({{ $post->id }})" >
        <span class="btn btn-danger" style="text-align: right">Delete</span>
    </a>
<form id="post{{ $post->id }}" action="{{ route('posts.destroy', $post->id) }}" method="post">
    
    @csrf
    @method('DELETE')
    </form>
    </div>
    </div>
</div>
@endsection

@section('js')

<script>
    function deletePost(post_id) {
        if(confirm('Delete Post?')){
            $('#post'+post_id).submit()
        }
    }
</script>
@endsection