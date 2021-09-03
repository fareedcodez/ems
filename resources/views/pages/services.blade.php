@extends('layouts.app')
@section('content')
<h1>{{$title}}</h1>
@foreach($services as $service)
<div class="form-row ">
    <ul class="list-group">
        <li class="list-group-item">{{$service}}</li>
    </ul>
    </div>
@endforeach
   @endsection

  