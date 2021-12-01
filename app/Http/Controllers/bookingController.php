<?php

namespace App\Http\Controllers;
use App\Models\booking;
use Illuminate\Http\Request;

class bookingController extends Controller
{
 public function index(){
 return view ('booking');
 }
 public function Store(Request $req){
    $user = new booking();
    $user->Surname = request('sname');
    $user->Middlename = request('mname');
    $user->Firstname = request('fname');
    $user->Bithday = request('birthday');
    $user->Age = request('age');
    $user->Streetname = request('street');
    $user->City = request('city');
    $user->Postalcode = request('code');
    $user->Phonenumber = request('tnum');
    $user->Mobilenumber = request('mnum');
    $user->Email = request('email');
    $user->Fullname = request('fullname');
    $user->EmergencyMobileNumber = request('emergency');
    $user->Relationship = request('relationship');
    $user->save();
    return redirect()->route('booking.index'); 

}
public function Show(){
    $booking = booking::all();
    return view('booking2', ['bookings'=>$booking,]);
}

}
