<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Illuminate\Support\Facades\DB;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events=Event::where('user_id', auth()->id())->orderBy('created_at','desc')->paginate(10);
        return view('events.index')->with('events', $events);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'event_name'=> 'required',
            'event_date' => 'required',
            'event_time'=> 'required',
            'event_location' => 'required',
            'event_image'=> 'required|file|mimes:jpg,png,jpeg|max:5000',
            // 'organizer_email'=> 'required',
            // 'organizer_phone'=> 'required',
            'event_description'=>'required'

        ]);

        //Create Event
        // $event=new Event;
        // $event->event_name=$request->input('event_name');
        // $event->event_date=$request->input('event_date');
        // $event->event_time=$request->input('event_time');
        // $event->event_location=$request->input('event_location');
        // $event->organizer_name=$request->input('organizer_name');
        // $event->organizer_email=$request->input('organizer_email');
        // $event->organizer_phone=$request->input('organizer_phone');
        // $event->event_description=$request->input('event_description');
        // $event->user_id = $request()->user()->id;
        // $event->save();

        // getClientOriginalExtension

        if ($request->hasFile('event_image')) {
            $extension = $request->event_image->getClientOriginalExtension();
            $name = now()->format('Ymdhi').rand(999,9999).'.'.$extension;

            $request->event_image->storeAs('public/event-images', $name);
        }

        $data = collect($request->except(['_token', 'event_image']))->merge(['image_path' => $name])->toArray();
        $request->user()->events()->firstOrCreate($data);
        

        return redirect()->route('events.index')->with('success', 'Event Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('events.show')->with('event',$event); 
    }
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);
        return view('events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $this->validate($request, [
            'event_name'=> 'required',
            'event_date' => 'required',
            'event_time'=> 'required',
            'event_location' => 'required',
            // 'organizer_name'=> 'required',
            // 'organizer_email'=> 'required',
            // 'organizer_phone'=> 'required',
            'event_description'=>'required'

        ]);
        //Create Post
        $event->event_name=$request->input('event_name');
        $event->event_date=$request->input('event_date');
        $event->event_time=$request->input('event_time');
        $event->event_location=$request->input('event_location');
        $event->event_description=$request->input('event_description');
        $event->update();

        return redirect()->route('events.index',$event->id)->with('success', 'Event Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event= Event::find($id);
        $event->delete();

        return redirect('/events')->with('success', 'Event Removed');
    }
}
