@extends('includes.main')
@section('title')
Taxi | Atlantic Water World
@endsection
@section('header')
<link rel="stylesheet" href="/assets/css/style.css" />
<link rel="stylesheet" href="/assets/css/home.css" />
<link rel="stylesheet" href="/assets/css/global.css" />
<link rel="stylesheet" href="/assets/css/taxi.css" />
@endsection
@section('body')
<x-header />
<x-herosection hero="1" heroheading="" heropara=""
    heading="Connectivity - by Taxi" />

<section class="taxi-section p-2 pt-5 p-md-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-1"></div>
            <div class="col-12 col-md-6">
                <p class="subheading" data-aos="fade-right">How to reach Atlantic Water World:</p>
                <ul>
                    <li data-aos="fade-right">3 km (6 min) from Sarita Vihar</li>
                    <li data-aos="fade-right">2 km (5 min) from Jasola Vihar</li>
                    <li data-aos="fade-right">7 km (15 min) from Noida Sector-18 Metro Station</li>
                    <li data-aos="fade-right">5 kms (9 mins) from Film City Noida</li>
                    <li data-aos="fade-right">16 kms (25 mins) from I.T.O</li>
                    <li data-aos="fade-right">17 kms (30 mins) from South Ex.</li>
                    <li data-aos="fade-right">6 kms (10 mins) from Noida Botanical Garden Metro Station</li>
                    <li data-aos="fade-right">19 kms (30 mins) from Connaught Place</li>
                </ul>
            </div>
            <div class="col-12 col-md-4 d-flex align-items-center">
                <img src="/assets/imgs/taxi.png" alt="taxi" width="100%" data-aos="fade-left">
            </div>
            <div class="col-12 col-md-1"></div>
        </div>
    </div>
</section>
<x-footer />
@endsection