<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DisplayController extends Controller
{
    public function display()
    {
        $now = now()->toDateString();
        $event = Event::where('startdate', $now)->paginate(3);

        return view('welcome', compact('event'));
    }
}
