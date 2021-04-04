<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Report;
use App\Models\User_notification;

class DashboardController extends Controller
{
    public function index(){
		$users= User::where('doctor_id', '=' , auth()->user()->id)->paginate(5);
		return view('doctor.dashboard',compact('users'));
	}
	public function edit($id){
     	$user= User::find($id);
    	return view('doctor.edit' , compact('user') );
    }
    public function editprofile(){
    	return view('doctor.editprofile');
    }

    public function updatelevels(Request $request , $id ){
    	$user= User::find($id);
    	$user ->levels = $request ->levels;
    	$user -> save();	
    	return back()-> with('successMsg','updated');
    }
    public function updatenotification(Request $request , $id ){

    	$this->validate($request,[
    		'text' => 'required'
    	]);
    	$notification= new User_notification;
    	$notification -> user_id = $id;
    	$notification -> text= $request -> text;
    	$notification -> save();
    	return back()-> with('successMsg2','done');

    }
    public function report(){
    	return view('doctor.report');
    }
     public function makereport(Request $request){
    	$this->validate($request,[
    		'text' => 'required'
    	]);
    	$notification= new Report;
    	$notification -> user_id = auth()->user()->id;
    	$notification -> text= $request -> text;
    	$notification -> save();
    	return back()-> with('successMsg2','done');

    }



}
