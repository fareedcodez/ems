@extends('layouts.app')
@section('content')
<div class="pull-right">
    <a href="/events" class="btn btn-primary ">Back</a>
</div>

@foreach($event as $event)
            <div class="card mb-3 rounded-0">
        <div class="card-body">
            <h4 class="card-title text-primary font-weight-bold" style="font-size: 4em">{{$event->event_name}}</h4>
            <img class="card-img-top h-100" style="width: 70%" src="http://eventstar.spantiklab.com/img/1624953473.jpg" alt="Card image cap">

            <p class="card-text mt-3">{{$event->event_description}}</p>
            <b><small>Created at {{$event->created_at}}</small></b>
        </div>

<ul class="list-group list-group-flush">
    <li class="list-group-item">
        <div class="row">
            <div class="col-md-5">
                Event Date
            </div>
            <div class="col-md-7">
                <span class="text-primary">{{$event->event_date}}</span>
            </div>
        </div>
    </li>
    <li class="list-group-item">
        <div class="row">
            <div class="col-md-5">
                Event Time
            </div>
            <div class="col-md-7">
                <span class="text-primary">{{$event->event_time}}</span>
            </div>
        </div>
    </li>
    <li class="list-group-item">
        <div class="row">
            <div class="col-md-5">
                Organizer Name
            </div>
            <div class="col-md-7">
                <span class="text-primary">{{$event->organizer_name}}</span>
            </div>
        </div>
    </li>
    <li class="list-group-item">
        <div class="row">
            <div class="col-md-5">
                Organizer Email
            </div>
            <div class="col-md-7">
                <span class="text-primary">{{$event->organizer_email}}</span>
            </div>
        </div>
    </li>
    <li class="list-group-item">
        <div class="row">
            <div class="col-md-5">
                Organizer Phone
            </div>
            <div class="col-md-7">
                <span class="text-primary">{{$event->organizer_phone}}</span>
            </div>
        </div>
    </li>
</ul>
@endforeach

@endsection
