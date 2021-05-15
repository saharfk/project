<?php

namespace App\Http\Controllers\Normal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Report;
use App\Models\User_notification;
use App\Models\User_log;

class DashboardController extends Controller
{
    public function index(){
    	$logs= User_log::where('user_id', '=' ,  auth()->user()->id)->orderBy('id', 'asc')->paginate(20);
		return view('normal.dashboard' ,compact('logs') );
	}
	public function messages(){
    	$notifications= User_notification::where('user_id', '=' , auth()->user()->id)->paginate(5);
		return view('normal.messages' ,compact('notifications'));
	}
	public function editprofile(){
    	return view('normal.editprofile');
    }
    public function report(){
    	return view('normal.report');
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
    public function viewnotification($id){
     	$report= User_notification::find($id);
    	return view('normal.viewnotification' , compact('report'));
    }
    public function deletenotification($id){
        $user= User_notification::find($id)-> delete();
        return redirect(route('normal.messages')) ->  with('successMsg','The notification was deleted');
    }
    public function game(){
        $x=explode("-",auth()->user()->levels);
        $array = [];
        for ($i = $x[0]; $i <= $x[1]; $i++) {
            $folderName= "../public/argon/levels/level-".$i;
            $dirs = array_filter(glob($folderName . '/*' , GLOB_ONLYDIR), 'is_dir');
            natsort($dirs);
            foreach ($dirs as $key) {
               $array[] =[$key,$i];
            }
        }
        shuffle($array);
        $a=[];
        for ($i = 0; $i <10; $i++) {
            $a[] =$array[$i];
        }
        $_SESSION["list"] = $a;
        $_SESSION["score"] =0;
        return view('normal.game');
    }
    public function submitgame(Request $request){
        $_SESSION["score"] = $request->score;
        if (str_contains($request->img,"2")) {
            $_SESSION["score"] +=10;
        }
        if ($request->list=="[]") {
           $log= new User_log;
           $log -> user_id = auth()->user()->id;
           $log -> levels = auth()->user()->levels;
           $log -> score= $_SESSION["score"];
           $log -> save();
           $logs= User_log::where('user_id', '=' ,  auth()->user()->id)->orderBy('id', 'asc')->paginate(20);
           return redirect(route('normal.dashboard',compact('logs')));
        }
        $tmp= $request->list;
        $tmp=str_replace("'",'"',$tmp);
        $_SESSION["list"] = json_decode($tmp, true); 
        return view('normal.game');
    }
}
