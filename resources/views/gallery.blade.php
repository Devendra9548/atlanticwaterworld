@extends('includes.main')
@section('title')
Attractions Gallery | Atlantic Water World
@endsection
@section('header')
<link rel="stylesheet" href="/assets/css/style.css" />
<link rel="stylesheet" href="/assets/css/home.css" />
<link rel="stylesheet" href="/assets/css/global.css" />
<link rel="stylesheet" href="/assets/css/isline.css" />
<link rel="stylesheet" href="/assets/css/gallery.css" />

@endsection
@section('body')
<x-header />
<x-herosection hero="1" heroheading="" heropara="" heading="Water World Attractions" />

<svg width="100%" height="150" viewBox="0 0 1200 150" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
    <path d="M 0 75 
       Q 300 0, 600 75 
       T 1200 75 
       V 150 H 0 Z" fill="#0BE8F9E5" stroke="none" />
    <path d="M 0 75 
       Q 300 0, 600 75 
       T 1200 75" fill="none" stroke="white" stroke-width="2" />
</svg>


<?php
$ridesimg = [
      [
        'img' => '/assets/imgs/rides/1.png', 
      ],
      [
        'img' => '/assets/imgs/rides/2.png', 
      ],
      [
        'img' => '/assets/imgs/rides/3.png', 
      ],
      [
        'img' => '/assets/imgs/rides/4.png', 
      ],
      [
        'img' => '/assets/imgs/rides/5.png', 
      ],
      [
        'img' => '/assets/imgs/rides/6.png', 
      ],
      [
        'img' => '/assets/imgs/rides/7.png', 
      ],     
      [
        'img' => '/assets/imgs/rides/8.png', 
      ],
      [
        'img' => '/assets/imgs/rides/9.png', 
      ],
      ];
?>

<?php
$ridesimg2 = [
      [
        'img' => '/assets/imgs/rides/1.png', 
      ],
      [
        'img' => '/assets/imgs/rides/2.png', 
      ],
      [
        'img' => '/assets/imgs/rides/3.png', 
      ],
      [
        'img' => '/assets/imgs/rides/4.png', 
      ],
      [
        'img' => '/assets/imgs/rides/5.png', 
      ],
      [
        'img' => '/assets/imgs/rides/6.png', 
      ],
      [
        'img' => '/assets/imgs/rides/7.png', 
      ],     
      [
        'img' => '/assets/imgs/rides/8.png', 
      ],
      [
        'img' => '/assets/imgs/rides/9.png', 
      ],
      ];
?>

<section class="gallery-section p-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-5">
                <h2 class="pt-5">Storm Eye</h2>
                <p>Drop down an elevated chute and spin like a fusilli before splashing into a giant splash pool below.
                    Not for the faint hearted. Are you in the mood for a cyclone?</p>
            </div>
            <div class="col-12 col-md-1"></div>
            <div class="col-12 col-md-6">
                <div class="rides">
                    @foreach($ridesimg as $ridesimg)
                    <img src="{{$ridesimg['img']}}" alt="{{$ridesimg['img']}}" width="100%">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <svg class="last-svg" style="background:#0BE8F9E5" width="100%" height="150" viewBox="0 0 1200 150"
        xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
        <path d="M 0 75 
       Q 300 0, 600 75 
       T 1200 75 
       V 150 H 0 Z" fill="white" stroke="none" />
        <path d="M 0 75 
       Q 300 0, 600 75 
       T 1200 75" fill="none" stroke="white" stroke-width="2" />
    </svg>
</section>

<section class="main-gallery p-5">
    <div class="container-fluid mt-5">
        <div class="row mt-5">
            <h2 class="text-center mb-3">Gallery</h2>
            @foreach($ridesimg2 as $ridesimg)
            <div class="col-12 col-md-4 mb-3">
                <a href="#" class="openimg">
                    <img src="{{$ridesimg['img']}}" alt="{{$ridesimg['img']}}" width="100%">
                </a>
            </div>
            @endforeach

        </div>
    </div>
</section>

<?php
$allrides = [
      [
        'img' => '/assets/imgs/2.png', 
        'heading' => 'Storm Eye',
        'para'=>'Drop down an elevated chute and spin like a fusilli before splashing into a giant splash pool
                            below. Not for the faint hearted. Are you in the mood for a cyclone?',

      ],
      [
        'img' => '/assets/imgs/3.png', 
        'heading' => 'Tornado',
        'para'=>'Experience thrills & chills in this funnel shaped slide as you zoom down 60 feet while
                            sitting on a rubber tube, swinging side to side.',
      ],
      [
        'img' => '/assets/imgs/4.png', 
        'heading' => 'Gravity',
        'para'=>"Ready to see who's the fastest wave rider in your gang? Hop on the Racer with two of your
                            friends and show them who's the master of speed as you race them down the slide.",
      ],
      [
        'img' => '/assets/imgs/5.png', 
        'heading' => 'Baby Cool',
        'para'=>'Why should adults have all the fun? Let your little tots enjoy their day in the sun (and the
                            much-needed Vitamin D) as they splash about and have a gala time.',
      ],
      [
        'img' => '/assets/imgs/6.png', 
        'heading' => 'Family Pool',
        'para'=>'The family pool is the best attraction in the park for the entire family. Be it an adult or a
                            child, swimmer or non-swimmer, you can gambol in the shallows and bond over smiles and
                            squeals.',
      ],
      [
        'img' => '/assets/imgs/7.png', 
        'heading' => 'Racer',
        'para'=>"Ready to see who's the fastest wave rider in your gang? Hop on the Racer with two of your
                            friends
                            and show them who's the master of speed as you race them down the slide.",
      ],
      [
        'img' => '/assets/imgs/8.png', 
        'heading' => 'Loopy',
        'para'=>"This one's seriously twisted! Drop down and zoom through the various twists and turns of this
                            very loopy ride.",
      ],     
      [
        'img' => '/assets/imgs/9.png', 
        'heading' => 'Water Wave',
        'para'=>"Catch the waves and recreate the ambience of the blue waters of the Indian Ocean. Paddle in
                            the
                            shallows or ride the wow inspiring waves with flotation devices. At the end, you come away
                            feeling refreshed.",
      ],
      [
        'img' => '/assets/imgs/10.png', 
        'heading' => 'Slow Flow',
        'para'=>"Tired from all the fun you're having? Need a break? Then how about you hop on a rubber tube
                            and
                            chill out while you go around our lazy river? You can be lazy without missing out on the
                            fun.",
      ],
      [
        'img' => '/assets/imgs/11.png', 
        'heading' => 'Yippee Land',
        'para'=>"Missing Goa and Phuket? Now you can enjoy the pleasures of your very own beach in the heart
                            of
                            Delhi. Yes, you read it correctly - Delhi. Soak in the sun or laze around in our beautiful
                            artificial beach.",
      ],
      ];
?>


<section class="more-rides-section p-5">
    <div class="container-fluid">
        <h2 class="text-center">More Rides</h2>
        <div class="more-rides">
            @foreach($allrides as $allrides)
            <div class="cards">
                <div class="img-card">
                    <img src="{{$allrides['img']}}" alt="{{$allrides['img']}}" width="100%">
                </div>
                <div class="info">
                    <h3>{{$allrides['heading']}}</h3>
                    <p>{{$allrides['para']}}</p>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</section>
<script>
$(document).ready(function() {
    $('.rides').slick({
        dots: true,
        arrows: false,
        infinite: false,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
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

<script>
$(document).ready(function() {
    $('.more-rides').slick({
        dots: true,
        arrows: false,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
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