@extends('layouts.app')
    @section('content')
    @if(count($events)>0)
    <div class="card-header py-3 border-bottom-primary">
		<h6 class="m-0 font-weight-bold text-primary">Events List</h6>
	</div>
    <div class="card-body">
        <div class="table-responsive">
           
            <table class="table table-striped" id="dataTable">
                <thead>
                    <tr style="background-color: rgb(180, 26, 121)">
                        <th scope="col">Event Name</th>
                        <th scope="col">Event Location</th>
                        <th scope="col" class="">Event Date</th>
                        <th scope="col">Event Time</th>
                        <th scope="col">Oranizer Name</th>
                        <th scope="col">Organizer Email</th>
                        <th scope="col">Organizer Phone</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                    <tbody>
                        @foreach($events as $event)
                    <tr>
						<td class="align-middle text-capitalize">{{$event->event_name}}</td>
						<td class="align-middle text-capitalize">{{$event->event_location}}</td>
                        <td class="align-middle">{{$event->event_date}}</td>
						<td class="align-middle">{{$event->event_time}}</td>
                        <td class="align-middle text-capitalize">{{$event->user->name}}</td>
                        <td class="align-middle">{{$event->user->email}}</td>
                        <td class="align-middle">{{$event->user->phone}}</td>
                        <td class="align-middle">
                            <a href="{{ route('events.show', $event->id) }}" class="btn btn-success btn-square rounded-4">
                                <i class="fas fa-eye" aria-hidden="true"></i>
                            </a>
                            <a href="{{ route('events.edit', $event->id) }}" class="btn btn-warning btn-square rounded-4">
								<i class="fas fa-edit"></i>
							</a>
							<a href="javascript:void(0)" onclick="deleteEvent({{ $event->id }})" class="btn btn-danger btn-square rounded-4">
								<i class="fas fa-trash"></i>
							</a>
                            <form id="event{{ $event->id }}" action="{{ route('events.destroy', $event->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                
                
            </table>
        </div>
        </div>
        @else
        <div class="card-header py-3 border-bottom-primary">
            <h6 class="m-0 font-weight-bold text-primary" style="text-align: center">No Event Founds..!</h6>
        </div>
        @endif

    @endsection
    
    @section('js')
        <script>
            function deleteEvent(event_id) {
                if(confirm('Delete event?')){
                    $('#event'+event_id).submit()
                }
            }
        </script>
    @endsection

    



            
    