<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    //スケジュール表示
    public function calendar(){
        return view("calendars/calendar");
    }
    //to do list表示
    public function to_do_list_show(){
        return view("calendars/calendar");
    }
}
