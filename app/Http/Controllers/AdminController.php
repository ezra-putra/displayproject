<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $event = Event::all();
        $banner = Banner::all();
        return view('admin', compact('event', 'banner'));
    }

    public function toAddEvent()
    {
        return view('addevent');
    }

    public function createEvent(Request $request)
    {
        $event = new Event();
        $event->name = $request->input('name');
        $event->room = $request->input('room');
        $event->timestart = $request->input('starttime');
        $event->timeend = $request->input('endtime');
        if($request->has('oneday')){
            $event->oneday = $request->input('oneday') == 'true' ? true : false;
        }
        else{
            $event->oneday = false;
        }
        $event->startdate = $request->input('startdate');
        $event->enddate = $request->input('enddate');
        $event->save();

        return redirect('/information-admin')->with('success', 'Event Successfully Added!');
    }

    public function deleteEvent($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect('/information-admin')->with('success', 'Event Successfully Deleted!');
    }

    public function toUpdateEvent($id)
    {
        $event = Event::find($id);

        return view('edit-event', compact('event'));
    }

    public function updateEvent(Request $request, $id)
    {
        $event = Event::findOrFail($id);
        $event->name = $request->input('name');
        $event->room = $request->input('room');
        $event->timestart = $request->input('starttime');
        $event->timeend = $request->input('endtime');
        if($request->has('oneday')){
            $event->oneday = $request->input('oneday') == 'true' ? true : false;
        }
        else{
            $event->oneday = false;
        }
        $event->startdate = $request->input('startdate');
        $event->enddate = $request->input('enddate');
        $event->save();
        return redirect('/information-admin')->with('success', 'Event Successfully Updated!');
    }


    public function toAddBanner()
    {
        return view('addbanner');
    }

    public function createBanner(Request $request)
    {
        $banner = new Banner;
        $banner->startdate = $request->input('startdate');
        $banner->enddate = $request->input('enddate');
        $banner->save();

        $id = $banner->id;
        if($request->hasFile('image')){
            $image = $request->file('image');
            $name = $id.'-'.Carbon::now()->format('ymd').'.'.$image->getClientOriginalExtension();
            $image->move(public_path("upload/banner/$id"), $name);

            $eventImage = Event::findOrFail($id);
            $eventImage->url = $name;
            $eventImage->save();
        }

        return redirect('/information-admin')->with('success', 'Banner Successfully Added!');
    }

    public function deleteBanner($id)
    {
        $banner = Banner::findOrFail($id);
        $banner->delete();

        return redirect('/information-admin')->with('success', 'Banner Successfully Deleted!');
    }
}
