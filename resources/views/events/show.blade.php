@extends('layouts.app')
@section('content')
<div class="container-fluid ">
    <div class="row">
<div class="col-lg-8 col-md-12 col-sm-12">
<div class="jumbotron bg-white p-0">
<div class="img-container masthead">
    <img class="card-img-top h-100" style="width: 50" src="{{ asset('storage/event-images/'.$event->image_path) }}" alt="No images">
</div>
<div class="row m-3">
<div class="col-md-12 ">
    <h4 class="text-dark font-weight-bold mb-4 underline-align-left">Event Description</h6>
        <p class="text-capitalize" style="white-space: pre-wrap; font-weight: bold; color:rgb(2, 2, 2); font-family:'Times New Roman', Times, serif" >{{$event->event_description}}</p>
</div>
</div>

</div><!-- .jumbotron-->

</div><!-- .col-lg-8-->
<div class="col-lg-4 col-md-12 col-sm-12">
<div class="jumbotron bg-white p-0">
<div class="event-detail-title border-bottom p-4 d-flex justify-content-between">
<h4 class="title font-weight-bold text-dark text-capitalize" style="font-size: 2em; font-family:Georgia, 'Times New Roman', Times, serif"><span class="font-weight-bold">{{$event->event_name}}
    </span></h4>

</div>
<div class="event-details pl-4 pr-4">
<div class="detail-box border-bottom pt-4 pb-4">
    <div class="row">
        <div class="col-md-2 d-flex align-items-center">
            <i class="fas fa-map-marker-alt fa-2x text-primary"></i>
            </div>
        <div class="col-md-10 justify-content-left">
            <span class="d-inline-block text-dark font-weight-bold">Event Location/Venue</span>
            <span class="d-block text-capitalize" style="font-weight:bold; color:rgb(187, 199, 27);font-size:1.5em; white-space: pre-wrap; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif" >{{$event->event_location}} </span>
        </div>
    </div>
</div>
<div class="event-details pl-4 pr-4">
<div class="detail-box border-bottom pt-4 pb-4">
    <div class="row">
        <div class="col-md-2 d-flex align-items-center">
            <i class="fas fa-calendar-alt fa-2x text-primary"></i>
        </div>
        <div class="col-md-10 justify-content-left">
            <span class="d-inline-block text-dark font-weight-bold">Event Date</span>
            <span class="d-block">{{$event->event_date}} </span>
        </div>
    </div>
</div>
<div class="detail-box border-bottom pt-4 pb-4">
    <div class="row">
        <div class="col-md-2 d-flex align-items-center">
            <i class="fas fa-clock fa-2x text-primary"></i>
        </div>
        <div class="col-md-10 justify-content-left">
            <span class="d-inline-block text-dark font-weight-bold">Event Time</span>
            <span class="d-block">{{$event->event_time}} </span>
        </div>
    </div>
</div>
<div class="detail-box border-bottom pt-4 pb-4">
    <div class="row">
        <div class="col-md-2 d-flex align-items-center">
            <i class="fas fa-user fa-2x text-primary"></i>
        </div>
        <div class="col-md-10 justify-content-left">
            <span class="d-inline-block text-dark font-weight-bold">  Organizer Name</span>
            <span class="d-block text-capitalize">{{$event->user->name}} </span>
        </div>
    </div>
</div>
<div class="detail-box border-bottom pt-4 pb-4">
    <div class="row">
        <div class="col-md-2 d-flex align-items-center">
            <i class="fas fa-phone-alt fa-2x text-primary"></i>
        </div>
        <div class="col-md-10 justify-content-left">
            <span class="d-inline-block text-dark font-weight-bold">Organizer Phone</span>
            <span class="d-block">{{$event->user->phone}}</span>
        </div>
    </div>
</div>
<div class="detail-box border-bottom pt-4 pb-4">
    <div class="row">
        <div class="col-md-2 d-flex align-items-center">
            <i class="fas fa-envelope fa-2x text-primary"></i>
        </div>
        <div class="col-md-10 justify-content-left">
            <span class="d-inline-block text-dark font-weight-bold">Organizer Email</span>
            <span class="d-block">{{$event->user->email}}</span>
        </div>
    </div>
</div>

<div class="detail-box pt-4 pb-4 ">
    <div class="row">
        <div class="col-md-2 d-flex align-items-center">
            <i class="fas fa-calendar-plus fa-2x text-primary"></i>
        </div>
        <div class="col-md-10 justify-content-left">
            <span class="d-inline-block text-dark font-weight-bold">Created at</span>
            <span class="d-block">{{$event->created_at}}</span>
        </div>
    </div>
</div>
</div>
</div><!-- .jumbotron-->
</div><!-- .row-->
</div>
<!-- /.container-fluid -->
</div>

        @endsection