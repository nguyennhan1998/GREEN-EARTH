<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(){
        return view("admin.home");
    }
    public function listEvent(){
        $events=Event::all();
        return view("admin.event.list",[
            "events"=>$events
        ]);
    }
    public function newEvent(){
        return view("admin.event.new");
    }
    public function editEvent($id){
        $event=Event::failOrFail($id);
        return view("admin.event.edit",[
            "event"=>$event
            ]);
    }
    public function saveEvent(Request $request){
     $request->validate([
         "event_name"=>"required"
     ]);
     try{
         Event::create([
             "event_name"=>$request->get("event_name")
         ]);
     }catch (\Exception $exception){
         return redirect()->back();
     }
     return redirect()->to("/admin/list-event");

    }
    public function updateEvent($id, Request $request){
        $event=Event::findOrFail($id);
        $request->validate([
            "event_name"=>$request->get("event_name")
        ]);
        try{
            $event->update([
                "event_name"=>$request->get("event_name")
            ]);

        }catch (\Exception $exception){

            return redirect()->back();
        }
        return redirect()->to("/admin/list-event");
    }
    public function deleteEvent($id){
        $event=Event::findOrFail($id);
        try{
            $event->delete();
        }catch (\Exception $exception){

        }
        return redirect()->to("/admin/list-event");
    }
}