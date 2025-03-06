@extends('includes.main')
@section('title')
Offers | Atlantic Water World
@endsection
@section('header')
<link rel="stylesheet" href="/assets/css/style.css" />
<link rel="stylesheet" href="/assets/css/home.css" />
<link rel="stylesheet" href="/assets/css/offer.css" />
@endsection
@section('body')
<x-header />
<x-herosection hero="1" heroheading="" heropara="" heading="Offers" />
<section class="offer-section p-2 p-md-5 pb-0">
    <div class="container-fluid pt-3 px-0 px-md-5">
        <div class="row">
            <div class="col-12 col-md-6 mb-0 mb-md-3">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="/assets/imgs/offer-1.png" alt="offer-1" width="100%">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="text-left">Terms & Conditions:</h3>
                            <ul class="m-0 p-0 ms-3">
                                <li>Offer valid for limited period.</li>
                                <li>Offer redeemed could not be canceled or updated</li>
                                <li>Bookings will be redeemed at the ticket counter of Atlantic Water World.</li>
                                <li>Terms and conditions of Water Park shall be applicable.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-0 mb-md-3">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="/assets/imgs/offer-4.png" alt="offer-1" width="100%">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="text-left">Terms & Conditions:</h3>
                            <ul class="m-0 p-0 ms-3">
                                <li>Offer valid for limited period.</li>
                                <li>Offer redeemed could not be canceled or updated</li>
                                <li>Bookings will be redeemed at the ticket counter of Atlantic Water World.</li>
                                <li>Terms and conditions of Water Park shall be applicable.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-0 mb-md-3">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="/assets/imgs/offer-2.png" alt="offer-1" width="100%">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="text-left">Terms & Conditions:</h3>
                            <ul class="m-0 p-0 ms-3">
                                <li>Offer valid for limited period.</li>
                                <li>Offer redeemed could not be canceled or updated</li>
                                <li>Bookings will be redeemed at the ticket counter of Atlantic Water World.</li>
                                <li>Terms and conditions of Water Park shall be applicable.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-0 mb-md-3">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="/assets/imgs/offer-3.png" alt="offer-1" width="100%">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="text-left">Terms & Conditions:</h3>
                            <ul class="m-0 p-0 ms-3">
                                <li>Offer valid for limited period.</li>
                                <li>Offer redeemed could not be canceled or updated</li>
                                <li>Bookings will be redeemed at the ticket counter of Atlantic Water World.</li>
                                <li>Terms and conditions of Water Park shall be applicable.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="p-2 p-md-5 contact-section">
    <div class="container-fluid pt-4 pb-5">
        <div class="row">
            <div class="col-12 col-md-8">
                <div class="first" data-aos="fade-right">
                    <p class="head">More Details</p>
                    <p>Adult : - <del>1299</del> 649</p>
                    <p>Child : - <del>799</del> 449</p>
                    <p>Sr. Citizen : - <del>899</del> 499</p>
                </div>
                <div class="second mt-4" data-aos="fade-right">
                    <p class="head">Terms & Conditions:</p>
                    <ul class="m-0 p-0 ms-3">
                        <li>Offer valid for limited period.</li>
                        <li>Offer redeemed could not be canceled or updated</li>
                        <li>Bookings will be redeemed at the ticket counter of Atlantic Water World.</li>
                        <li>Terms and conditions of Water Park shall be applicable.</li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="third d-flex align-items-center justify-content-center" data-aos="fade-left">
                    <div class="main">
                        <h3>Park Timings</h3>
                        <p>Monday To Sunday</p>
                        <p>10am To 6pm</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<x-footer />

@endsection