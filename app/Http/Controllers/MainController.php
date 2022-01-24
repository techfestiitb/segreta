<?php

namespace App\Http\Controllers;

use App\User;
use App\Level;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;


class MainController extends Controller
{
    public function solution($solution){
        return Level::where('level',Auth::user()->level)->first()->solution==$solution;
    }
    public function Get(){
        return view('welcome');
    }
    public function redirect(Request $request){
        return redirect('http://techfest.org/segreta/');
        $request->session()->reflash();
//        if(session()->has('admin')){
            return redirect()->route('level',Auth::user()->level,302);
//        }
//        else return redirect("https://techfest.org/segreta/login");

    }
    public function levelGet($id){
        return redirect('http://techfest.org/segreta/');
        if(Auth::user()->level!=$id) return redirect('http://techfest.org/segreta/redirect');
        if(Level::where('level',Auth::user()->level)->count()===0) return "All questions over, please wait for some time!";
        return view('levelGet')->with(['level'=>Level::where('level',Auth::user()->level)->first()]);
    }
    public function leaderBoardGet(){
        if(session()->has('admin') && (auth()->user()->id==1 || auth()->user()->id==9)) {
            $top = User::orderBy('level','DESC')->orderBy('updated_at','DESC')->take(11)->get();
            $userIds = User::orderBy('level','DESC')->orderBy('updated_at','DESC')->pluck('id')->toArray();
        }
        else {
            $top = User::whereNotIn('id',[1,9])->orderBy('level','DESC')->orderBy('updated_at','ASC')->take(11)->get();
            $userIds = User::whereNotIn('id',[1,9])->orderBy('level','DESC')->orderBy('updated_at','ASC')->pluck('id')->toArray();
        }
        return view('leaderboard')->with(['top'=>$top,'positions'=>$userIds]);
    }
    public function leaderBoardGet2(){
        return redirect('http://techfest.org/segreta/');

        if(session()->has('admin') && (auth()->user()->id==1 || auth()->user()->id==9)) {
            $top = User::orderBy('level','DESC')->orderBy('updated_at','DESC')->take(1500)->get();
            $userIds = User::orderBy('level','DESC')->orderBy('updated_at','DESC')->pluck('id')->toArray();
        }
        else {
            $top = User::whereNotIn('id',[1,9])->orderBy('level','DESC')->orderBy('updated_at','ASC')->take(1500)->get();
            $userIds = User::whereNotIn('id',[1,9])->orderBy('level','DESC')->orderBy('updated_at','ASC')->pluck('id')->toArray();
        }
        return view('leaderboard')->with(['top'=>$top,'positions'=>$userIds]);
    }
    public function levelPost($id,Request $r){
        return redirect('http://techfest.org/segreta/');
        if($this->solution($r->answer)){
            Auth::user()->increment('level',1);
            Auth::user()->update(['updated_at' => Carbon::now()]);
            return redirect()->route('level',$id+1);
        }
        else {
            session()->flash('error',$r->answer);
        return redirect('http://techfest.org/segreta/redirect/');
        }
    }
    public function logout(){
        Auth::logout();
        session()->flush();
        return redirect()->route('index');
    }
    public function rulesGet(){
        return view('rulesGet');
    }
    public function adminCreate(){
        session(['admin'=>'ok']);
        return redirect('/');
    }
    public function share($id,$name){
        $user = User::where(['id'=>$id,'name'=>$name])->first();
        if($user===null)
            return redirect('http://techfest.org');
        else
            return view('welcome')->with(['user1'=>$user]);
    }
    public function dark_mode($id){
        User::where(['id'=>$id])->update(['dark_mode'=> "1"]);
        return redirect('http://techfest.org/segreta/redirect/');
    }
    public function disable_dark_mode($id){
        User::where(['id'=>$id])->update(['dark_mode'=> "0"]);
        return redirect('http://techfest.org/segreta/redirect/');
    }
}
