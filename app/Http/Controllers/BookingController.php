<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
        public function index()
    {
        $data=Booking::latest()->paginate(10);
        return view('articles.index',[
            'bookings'=>$data
        ]);
    }
    public function delete($id)
    {
     $booking = Booking::find($id);
     $booking->delete();
     return redirect('/articles')->with('info', 'Article deleted');
    }
    public function add()
    {
    $data = [
    [ "id" => 1, "name" => "Male" ],
    [ "id" => 2, "name" => "Female" ],
    ];
    return view('articles.add', [
    'genders' => $data
    ]);
    }
    public function create()
    {
        $validator = validator(request()->all(),[
            'name'=>'required',
            'age'=>'required',
            'phone'=>'required',
            'appointment'=>'required',
        ]);
        if($validator->fails()){
            return back()->withErrors($validator);
        }
        $booking = new Booking;
        $booking->name=request()->name;
        $booking->age=request()->age;
        $booking->phone=request()->phone;
        $booking->appointment=request()->appointment;
        $booking->save();
        return view('bookingdone');
    }
 
}
