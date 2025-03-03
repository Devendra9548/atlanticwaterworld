<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontController extends Controller
{
    public function home(){
        return view('home');
    }
    public function about(){
        return view('about');
    }
    public function blogs(){
        return view('blogs.main');
    }
    public function singleblog($slug){
        return view('blogs.singleblog');
    }
    public function offer(){
        return view('offer');
    }
    public function events(){
        return view('events');
    }
    public function groupbooking(){
        return view('groupbooking');
    }
    public function ticketbooking(){
        return view('booking');
    }
    function contactus(){
        return view('contact');
    }
    function termsconditions(){
        return view('termsconditions');
    }
    function rulesregulations(){
        return view('rulesregulations');
    }
    function websecure(){
        return view("websecure");
    }
    function destroy(){
        session()->flush();
        return redirect('/safty');
    }
    function faq(){
        return view('faq');
    }
    function newspr(){
        return view('newspr');
    }
    function attractions(){
        return view('attractions');
    }
    function gallery(){
        return view('gallery');
    }
    function bus(){
        return view('bus');
    }
    function dmrc(){
        return view('dmrc');
    }
    function taxi(){
        return view('taxi');
    }
    function testimonials(){
        return view('testimonials');
    }
    
}
