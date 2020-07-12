<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Event;
use App\Organize;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $this->authorize("view" , Event::class);
        $organizations=Organize::all();
        $events =Event::paginate(20);
        return view("admin.event.list", [
            "events" => $events,
            "organizations"=>$organizations,
        ]);
    }

    public function new()
    {
        $this->authorize("new",Event::class);
        $events=Event::paginate(20);
        $organizations=Organize::all();
        return view("admin.event.new",
        [
            "events" => $events,
            "organizations"=>$organizations,
        ]);
    }

    public function save(Request $request){
        $this->authorize("save",Event::class);
        $request->validate([
            "title"=>"required",
            "image"=>"required",
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
                "image"=>$request->get("image"),
                "description"=>$request->get("description"),
                "content"=>$request->get("content"),
                "start_at"=>$request->get("start_at"),
                "end_at"=>$request->get("end_at"),
                "total_money"=>$request->get("total_money"),
                "organization_id"=>$request->get("organization_id"),
                "user_id" => Auth::id()
            ]);

        }catch (\Exception $exception){
            return $exception->getMessage();
        }
       return redirect()->to("/admin/events/list");
    }

    public function edit($id){
        $event = Event::findOrFail($id);
        $this->authorize("edit",$event, Event::class);
        $organizations=Organize::all();
        return view("admin.event.edit",[
            "event"=>$event,
            "organizations"=>$organizations,
            ]);
    }

    public function update($id,Request $request){
        $event = Event::findOrFail($id);
        $this->authorize("update",$event,Event::class);
        $request->validate([
            "title"=>"required",
            "image"=>"required",
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
                "image"=>$request->get("image"),
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
        return redirect()->to("/admin/events/list");
    }

    public function delete($id){
        $event = Event::findOrFail($id);
        $this->authorize("delete",$event,Event::class);

        try {
            $event->delete();
        }catch (\Exception $exception){

        }
        return redirect()->to("admin/events/list");
    }
}
