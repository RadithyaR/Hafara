<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\RoomType;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function view_roomType()
    {
        $type = RoomType::all();

        return view('admin.view_roomType', compact(  'type'));
    }
    public function add_roomType(Request $request)
    {
        $data = new RoomType();
        $data->name = $request->name;
        $data->price = $request->price;

        $image = $request->image;
        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();

            $request->image->move('room', $imagename);

            $data->image=$imagename;
        }

        $data->facility = $request->facility;
        $data->capacity = $request->capacity;
        $data->save();

        return redirect()->back();

    }
    public function edit_roomType(Request $request, $id)
    {
        $type = RoomType::find($id);

        $type->name = $request->name;
        $type->price = $request->price;
        $type->facility = $request->facility;
        $type->capacity = $request->capacity;
        $image = $request->image;
        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();

            $request->image->move('room', $imagename);

            $image->image=$imagename;
        }

        $type->save();

        return redirect()->route('roomTypes.view')->with('success', 'Room Type updated successfully');
    }

    public function delete_roomType($id)
    {
        $type = RoomType::find($id);

        $type->delete();

        return redirect()->route('roomTypes.view')->with('success', 'Room Type deleted successfully');

    }

    public function add_room(Request $request)
    {
        $data = new Room();
        $data->room_number = $request->room_number;
        $data->roomType_id = $request->roomType_id;

        $data->save();

        return redirect()->back();

    }

    public function view_room()
    {
        $room = Room::orderBy('room_number')->with('roomTypes')->get();
        $type = RoomType::all();

        return view('admin.view_room', compact('room', 'type'));
    }

    public function edit_room(Request $request, $id)
    {
       // $tipe = RoomType::all();
        $room = Room::find($id);

        $room->room_number = $request->room_number;
        $room->roomType_id = $request->roomType_id;

        $room->save();

        return redirect()->route('rooms.view')->with('success', 'Room updated successfully');
    }

    public function delete_room($id)
    {
        $room = Room::find($id);

        $room->delete();

        return redirect()->route('rooms.view')->with('success', 'Room deleted successfully');

    }
}