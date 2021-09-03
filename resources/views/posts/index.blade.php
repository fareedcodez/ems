    @extends('layouts.app')
    @section('content')
    @if(count($posts)>0)
   
    <div class="container-fluid ">
<div class="card shadow mb-5">
<div class="card-header py-3 border-bottom-primary">
<h6 class="m-0 font-weight-bold text-primary ">Posts List</h6>
</div>

<div class="card-body">
<div class="list-responsive">
    @foreach($posts as $post)
    <div class="list-group">
        <ul>
            <li class="list-group-item text-capitalize">
                <a href="/posts/{{$post->id}}"><h3>{{$post->title}}</h3></a>
                <small style="color: cornflowerblue">Posted On  {{$post->created_at}}</small>
            </li>
        </ul>
       
    </div>
    @endforeach
    @else
    <div class="card-header py-3 border-bottom-primary">
        <h6 class="m-0 font-weight-bold text-primary" style="text-align: center">No Post Founds</h6>
    </div>
    @endif
</div>
</div>
    @endsection