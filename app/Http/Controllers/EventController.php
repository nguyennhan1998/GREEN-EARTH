<?php

namespace App\Http\Controllers;

use App\Event;
use App\Organize;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function listEvent()
    {
        $events =Event::paginate(20);
        return view("admin.event.list", [
            "events" => $events
        ]);

    }

    public function newEvent()
    {
        $organizations=Organize::all();
        return view("admin.event.new",
        [
            "organizations"=>$organizations,
//
        ]);
    }

    public function saveEvent(Request $request){
        $request->validate([
            "title"=>"required",
            "description"=>"required",
            "content"=>"required",
            "start_at"=>"required",
            "end_at"=>"required",
            "total_money"=>"required",
            "organization_id"=>"required"

        ]);
        try {
            Event::create([
                "title"=>$request->get("title"),
                "description"=>$request->get("description"),
                "content"=>$request->get("content"),
                "start_at"=>$request->get("start_at"),
                "end_at"=>$request->get("end_at"),
                "total_money"=>$request->get("total_money"),
                "organization_id"=>$request->get("organization_id")
            ]);

        }catch (\Exception $exception){
            return $exception->getMessage();
        }
       return redirect()->to("/admin/list-event");
    }

    public function editEvent($id){
        $event = Event::findOrFail($id);
        $organizations=Organize::all();
        return view("admin.event.edit",[
            "event"=>$event,
            "organizations"=>$organizations,
            ]);
    }

    public function updateEvent($id,Request $request){
        $event = Event::findOrFail($id);
        $request->validate([
            "title"=>"required,title,{$id}",
            "description"=>"required",
            "content"=>"required",
            "start_at"=>"required",
            "end_at"=>"required",
            "total_money"=>"required",
            "organization_id"=>"required"
        ]);
        try {
            $event->update([
                "title"=>$request->get("title"),
                "description"=>$request->get("description"),
                "content"=>$request->get("content"),
                "start_at"=>$request->get("start_at"),
                "end_at"=>$request->get("end_at"),
                "total_money"=>$request->get("total_money"),
                "organization_id"=>$request->get("organization_id")
            ]);
        }catch (\Exception $exception){
            return redirect()->back();
        }
        return redirect()->to("/admin/list-event");
    }

    public function deleteEvent($id){
        $event = Event::findOrFail($id);
        try {
            $event->delete();
        }catch (\Exception $exception){

        }
        return redirect()->to("admin/list-event");
    }
}
