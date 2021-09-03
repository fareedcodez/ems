@extends('layouts.app')
@section('content')
<div class="container-fluid ">
    <div class="row">
<div class="col-md-6">
<div class="card mb-5">
<div class="card-header py-3 border-bottom-primary">
<h6 class="m-0 font-weight-bold text-primary">Edit Post</h6>
</div>
<div class="card-body">
<form method="post"action="{{ action('PostsController@update',$post->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
		<div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" value="{{ old('title')??$post->title }}" name="title" id="title"
            placeholder="Post title" type="text">
                            </div>
    <div class="form-group">
        <label for="message">Message</label>
        <textarea type="text" name="message" value="{{ old('message')??$post->message }}" id="message" cols="30" rows="10"

            class="form-control" placeholder="Write a message"></textarea>
            </div>
    
    <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
</div>
</div>
</div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->

@endsection