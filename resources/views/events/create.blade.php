@extends('layouts.app')
@section('content')
<div class="container-fluid ">
    <div class="card mb-5">
		<div class="card-header py-3 border-bottom-primary">
			<h6 class="m-0 font-weight-bold text-primary ">Add Event</h6>
			</div>
			
	<div class="card-body">
	<form method="post" action="{{ action('EventsController@store') }}" enctype="multipart/form-data">
	@csrf
				<div class="form-row">
				<div class="form-group col-md-3">
					<label for="event-name">Event Name</label>
					<input type="text" class="form-control" name="event_name" id="event-name"
						placeholder="Enter event name" value="">
						</div>
				<div class="form-group col-md-3">
					<label for="date">Event Date</label>
					<input type="date" name="event_date" class="form-control" id="date" value="">
						</div>
				<div class="form-group col-md-3">
					<label for="event-time">Event Time</label>
					<input type="time" name="event_time" class="form-control" id="event-time"
						value="">
						</div>
						<div class="form-group col-md-3">
					<label for="event-location">Event Location</label>
					<input type="text" class="form-control" name="event_location" id="event-location"
						placeholder="Enter event location/venue" value="">
						</div>
					</div>
						<div class="form-row">
			{{-- <div class="form-group col-md-3">
					<label for="org-name">Organizer Name</label>
					<input type="text" name="organizer_name" class="form-control" id="org-name"
						placeholder="Enter organizer name" value="">
						</div>
		
				<div class="form-group col-md-3">
					<label for="org-email">Organizer Email</label>
					<input type="text" name="organizer_email" class="form-control" id="org-email"
						placeholder="Enter organizer email" value="">
				</div>
				<div class="form-group col-md-3">
					<label for="org-phone">Organizer Phone</label>
					<input type="text" name="organizer_phone" class="form-control" id="org-phone"
						placeholder="Enter organizer phone" value="">
				</div> --}}
		<div class="form-group col-md-3">
			<label for="upload-image" class="control-label">Upload Image</label>
			<div class="input-group">
				<div class="custom-file">
					<input type="file" name="event_image" id="upload-image" class="custom-file-input">
					<label class="custom-file-label" for="upload-image">max size 5MB</label>
				</div>
			</div>
			</div>
			</div>
		<div class="form-group">
			<label for="event-description">Event Description</label>
			<textarea id="event-description" rows="5" name="event_description"
				class="form-control"></textarea>
		</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>
</div>

@endsection