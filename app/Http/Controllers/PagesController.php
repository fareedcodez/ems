<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index ()
    {
        $title = 'Welcome To Event Management System';
        return view('pages.index',compact('title'));
    }
    public function about()
   {
    $title ='About US';
    return view('pages.about')->with('title', $title);
   }
   public function services()
   {
       $data = array(
        'title' => 'Services',
        'services' => ['Corporate Events', 'Private events','Planning',
        'Organizing',
        'Staffing',
        'Leading','Coordination',
        'Controlling', 'Annoucement'],
       );
       
       return view('pages.services')-> with($data);
   }
  
   
}
