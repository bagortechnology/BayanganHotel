<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    public function index()
    {
        $room_all = Room::paginate(12);
        return view('front.room', compact('room_all'));
    }

    public function single_room($id)
    {
        $single_room_data = Room::with('rRoomPhoto')->where('id',$id)->first();
        return view('front.room_detail', compact('single_room_data'));
    }

    public function search($id)
    {
        $search_text = $_GET['query'];
        $room_all = Room::where('id','name','%'.$search_text.'%',$id)->get();

        return view('front.home',compact('room_all'));
    }
}
