@extends('includes.main')
@section('title')
Events | Atlantic Water World
@endsection
@section('header')
<link rel="stylesheet" href="/assets/css/style.css" />
<link rel="stylesheet" href="/assets/css/home.css" />
<link rel="stylesheet" href="/assets/css/events.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
@endsection
@section('body')
<x-header />
<x-herosection hero="1" heroheading="" heropara="" heading="Highlights & Events" />

<?php
$events = [
    [
      [
        'img' => '/assets/imgs/events/1.jpg', 
      ],
      [
        'img' => '/assets/imgs/events/14.jpg', 
      ],
    ],
    [
      [
        'img' => '/assets/imgs/events/2.jpg', 
      ],
      [
        'img' => '/assets/imgs/events/15.jpg', 
      ],
    ],
    [
      [
        'img' => '/assets/imgs/events/3.jpg', 
      ],
      [
        'img' => '/assets/imgs/events/16.jpg', 
      ],
    ],
    [
      [
        'img' => '/assets/imgs/events/4.jpg', 
      ],
      [
        'img' => '/assets/imgs/events/17.jpg', 
      ],
    ],
    [
      [
        'img' => '/assets/imgs/events/5.jpg', 
      ],
      [
        'img' => '/assets/imgs/events/18.jpg', 
      ],
    ],
    [
      [
        'img' => '/assets/imgs/events/6.jpg', 
      ],
      [
        'img' => '/assets/imgs/events/19.jpg', 
      ],
    ],
    [
      [
        'img' => '/assets/imgs/events/7.jpg', 
      ],
      [
        'img' => '/assets/imgs/events/20.jpg', 
      ],
    ],
    [
      [
        'img' => '/assets/imgs/events/8.jpg', 
      ],
      [
        'img' => '/assets/imgs/events/21.jpg', 
      ],
    ],
    [
      [
        'img' => '/assets/imgs/events/9.jpg', 
      ],
      [
        'img' => '/assets/imgs/events/22.jpg', 
      ],
    ],
    [
      [
        'img' => '/assets/imgs/events/10.jpg', 
      ],
      [
        'img' => '/assets/imgs/events/23.jpg', 
      ],
    ],
    [
      [
        'img' => '/assets/imgs/events/11.jpg', 
      ],
      [
        'img' => '/assets/imgs/events/24.jpg', 
      ],
    ],
    [
      [
        'img' => '/assets/imgs/events/12.jpg', 
      ],
      [
        'img' => '/assets/imgs/events/25.jpg', 
      ],
    ],
    [
      [
        'img' => '/assets/imgs/events/13.jpg', 
      ],
      [
        'img' => '/assets/imgs/events/26.jpg', 
      ],
    ],
    ];
?>

<section class="events-section py-5 ps-2 pe-0 m-0">
    <div class="container-fluid m-0 ps-2">
        <div class="events">
            @foreach($events as $event)
            <div class="slide">
                @foreach($event as $imgs)
                <div class="inner-slide p-3">
                    <img src="{{$imgs['img']}}" alt="{{$imgs['img']}}" width="100%">
                </div>
                @endforeach
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="post-event-section p-5">
    <div class="container-fluid">
        <div class="d-flex justify-content-center mb-5">
            <h2 class="text-center" data-aos="fade-right">Past Events</h2>
        </div>
        <div class="row mt-4">
            <div class="col-12 col-md-4" data-aos="fade-left">
                <img src="/assets/imgs/event-1.png" alt="event-1" width="100%">
                <p>Event : Crazy Angel at AWW</p>
                <p>Date : 17th - 21st April 2019</p>
            </div>
            <div class="col-12 col-md-4" data-aos="fade-top">
                <img src="/assets/imgs/event-2.png" alt="event-2" width="100%">
                <p>Event : Mega Weekend Madness</p>
                <p>Date : 17th - 21st April 2019</p>
            </div>
            <div class="col-12 col-md-4" data-aos="fade-right">
                <img src="/assets/imgs/event-3.png" alt="event-3" width="100%">
                <p>Event : Mother's Day Celebrations</p>
                <p>Date : 8th - 12th May 2019</p>
            </div>
        </div>
    </div>
    <br><br>
    <img src="/assets/imgs/last-line-bg.png" alt="" width="100%" class="pb-5 event-bottom-bg">
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        AOS.init();
    });
    </script>

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<script>
$(document).ready(function() {
    $('.events').slick({
        dots: true,
        arrows: false,
        infinite: false,
        speed: 300,
        slidesToShow: 2.5,
        slidesToScroll: 1,
        centerMode: false,
        variableWidth: false,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
});
</script>
<x-footer />
@endsection