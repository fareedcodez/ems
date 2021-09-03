@extends('layouts.app')
@section('content')
         <form action='' method='post'>
              @csrf
                      @if($errors->any())
              <ul>
             @foreach($errors->all() as $error)
            <li> {{ $error }} </li>
             @endforeach
        @endif

        @if( session( 'success' ) )
             {{ session( 'success' ) }}
        @endif

        <div class="card-header py-3 border-bottom-primary">
            <h6 class="m-0 font-weight-bold text-primary">Send SMS</h6>
        </div> <br>
             <div class="form-group col-md-6">
                <label for="numbers">Phone numbers (seperate with a comma [,])</label>
                <input  type="text" class="form-control" name="numbers"
                    placeholder="eg +255756060856" value="">
                    </div>
                    <div class="form-group">
                        <label for="event-name">Message</label>
                        <textarea name='message' class="form-control" rows="2" placeholder="Enter message" value=""></textarea >
                            </div>
            <button type="submit" class="btn btn-primary">Send!</button>
      </form>
      
      @endsection

      <style>
        form  {    
            max-width: 500px;
  margin: auto;}
    
      </style>