<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookingSuccess;
use App\Mail\FormData;
use Mail;

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
    function bookingSuccess(Request $req){
        $dbs = new BookingSuccess();

        $typeofticket = $req->ticket;
        $dateofvisit = $req->pickupdate;
        $noofadults = $req->noofadults;
        $tpnoofadults = $req->totalPrice_adults_val;
        $noofchildren = $req->noofchildren;
        $tpnoofchildren = $req->totalPrice_children_val;
        $noofcitizens = $req->noofcitizens;
        $tpnoofcitizens = $req->totalPrice_scitizens_val;
        $totalvisitors = $req->totalvisitorsVal;
        $totalprice = $req->totalPriceCalval;
        
        $dbs->type_of_ticket = $typeofticket;
        $dbs->date_of_visit = $dateofvisit;
        $dbs->no_of_adults = $noofadults;
        $dbs->tp_noofadults = $tpnoofadults;
        $dbs->no_of_children = $noofchildren;
        $dbs->tp_noofchildren = $tpnoofchildren;
        $dbs->no_of_citizens = $noofcitizens;
        $dbs->tp_noofcitizens = $tpnoofcitizens;
        $dbs->total_visitors = $totalvisitors;
        $dbs->total_price = $totalprice;
        $dbs->save();
        $mailData = [
            'typeofticket' => $typeofticket, 
            'dateofvisit' => $dateofvisit, 
            'noofadults' => $noofadults, 
            'tpnoofadults' => $tpnoofadults,
            'noofchildren' => $noofchildren,
            'tpnoofchildren' => $tpnoofchildren,
            'noofcitizens' => $noofcitizens,
            'tpnoofcitizens' => $tpnoofcitizens,
            'totalvisitors' => $totalvisitors,
            'totalprice' => $totalprice,
        ];
          
        Mail::to('web.thakurdeva@gmail.com')->send(new FormData($mailData));
        return true;
    }
    
}
