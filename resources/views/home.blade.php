@extends('includes.main')
@section('title')
Home | Atlantic Water World
@endsection
@section('header')
<link rel="stylesheet" href="/assets/css/style.css" />
<link rel="stylesheet" href="/assets/css/home.css" />
@endsection
@section('body')
<x-header />
<x-herosection hero="1" heroheading="" heropara="" heading="" />

<section class="first-section p-5 position-relative">

    <div class="container-fluid pb-5">
        <div class="row">
            <div class="col-12 col-md-6">

            </div>
        </div>
        <div class="row">

            <div class="col-12 col-md-6">
                <div class="heading">
                    <h2 data-aos="fade-right">Atlantic Water World</h2>
                    <!-- <img src="/assets/imgs/heading-line.png" alt=""> -->
                </div>

                <img src="/assets/imgs/bg.png" alt="" width="20%">

                <p data-aos="fade-right">The best water park in Delhi NCR, Atlantic Water World is surround by a water canal and sits on the
                    Yamuna waterfront along the Kalindi Kunj barrage.</p>
                <p data-aos="fade-right">Atlantic Water World is a world class water park in Delhi/NCR, offering people the perfect getaway
                    full of fun, thrill, sheer excitement and real entertainment.</p>
                <p data-aos="fade-right">With 13 world class slides, some of which are exclusively available only at Atlantic Water World,
                    like Aqua Funnel, Tornado - both of them, the first in North India.</p>
                <p data-aos="fade-right">At Atlantic Water World, we are committed to providing you a safe, fun and exciting experience, with
                    our unparalleled safety standards, thrilling rides and offerings that leave you immersed in fun
                    throughout your time with us.</p>
            </div>

            <div class="col-12 col-md-6 position-relative pt-3 d-flex justify-content-end align-items-center pe-4" data-aos="fade-left">

                <div class="video-container" onclick="playVideo(this)" >
                    <div class="play-button"></div>
                    <div class="play-btn">
                        <img src="/assets/imgs/play-btn.png" alt="" width="100px">
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>
<div class="second-line-bg">
    <div class="actual-line"></div>

</div>
<section class="second-section p-2 pt-5 pb-5 water-world-section">
    <div class="container-fluid pt-5">
        <h2 class="text-center mb-3 pb-3" data-aos="fade-right">Water World Attractions</h2>
        <div class="d-flex justify-content-center mb-2">
            <div class="card-cts" data-aos="fade-right">
                <div class="main main-bg-1" onclick="modelshow(this)">
                    <div class="img-card">
                        <img src="/assets/imgs/2.png" alt="2.png" width="100%">
                    </div>
                    <div class="content-card">
                        <h3>Storm Eye</h3>
                        <p>Drop down an elevated chute and spin like a fusilli before splashing into a giant splash pool
                            below. Not for the faint hearted. Are you in the mood for a cyclone?</p>
                    </div>
                </div>
            </div>

            <div class="card-cts" data-aos="fade-right">
                <div class="main main-bg-1" onclick="modelshow(this)">
                    <div class="img-card">
                        <img src="/assets/imgs/3.png" alt="3.png" width="100%">
                    </div>
                    <div class="content-card">
                        <h3>Tornado</h3>
                        <p>Experience thrills & chills in this funnel shaped slide as you zoom down 60 feet while
                            sitting on
                            a rubber tube, swinging side to side.</p>
                    </div>
                </div>
            </div>

            <div class="card-cts" data-aos="fade-top">
                <div class="main main-bg-1" onclick="modelshow(this)">
                    <div class="img-card">
                        <img src="/assets/imgs/4.png" alt="4.png" width="100%">
                    </div>
                    <div class="content-card">
                        <h3>Gravity</h3>
                        <p>Ready to see who's the fastest wave rider in your gang? Hop on the Racer with two of your
                            friends
                            and show them who's the master of speed as you race them down the slide.</p>
                    </div>
                </div>
            </div>

            <div class="card-cts" data-aos="fade-left">
                <div class="main main-bg-1" onclick="modelshow(this)">
                    <div class="img-card">
                        <img src="/assets/imgs/5.png" alt="5.png" width="100%">
                    </div>
                    <div class="content-card">
                        <h3>Baby Cool</h3>
                        <p>Why should adults have all the fun? Let your little tots enjoy their day in the sun (and the
                            much-needed Vitamin D) as they splash about and have a gala time.</p>
                    </div>
                </div>
            </div>

            <div class="card-cts" data-aos="fade-left">
                <div class="main main-bg-1" onclick="modelshow(this)">
                    <div class="img-card">
                        <img src="/assets/imgs/6.png" alt="6.png" width="100%">
                    </div>
                    <div class="content-card">
                        <h3>Family Pool</h3>
                        <p>The family pool is the best attraction in the park for the entire family. Be it an adult or a
                            child, swimmer or non-swimmer, you can gambol in the shallows and bond over smiles and
                            squeals.</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="d-flex justify-content-center mb-3">
            <div class="card-cts" data-aos="fade-right">
                <div class="main main-bg-1" onclick="modelshow(this)">
                    <div class="img-card">
                        <img src="/assets/imgs/7.png" alt="7.png" width="100%">
                    </div>
                    <div class="content-card">
                        <h3>Racer</h3>
                        <p>Ready to see who's the fastest wave rider in your gang? Hop on the Racer with two of your
                            friends
                            and show them who's the master of speed as you race them down the slide.</p>
                    </div>
                </div>
            </div>

            <div class="card-cts" data-aos="fade-right">
                <div class="main main-bg-1" onclick="modelshow(this)">
                    <div class="img-card">
                        <img src="/assets/imgs/8.png" alt="8.png" width="100%">
                    </div>
                    <div class="content-card">
                        <h3>Loopy</h3>
                        <p>This one's seriously twisted! Drop down and zoom through the various twists and turns of this
                            very loopy ride.</p>
                    </div>
                </div>
            </div>

            <div class="card-cts" data-aos="fade-top">
                <div class="main main-bg-1" onclick="modelshow(this)">
                    <div class="img-card">
                        <img src="/assets/imgs/9.png" alt="9.png" width="100%">
                    </div>
                    <div class="content-card">
                        <h3>Water Wave</h3>
                        <p>Catch the waves and recreate the ambience of the blue waters of the Indian Ocean. Paddle in
                            the
                            shallows or ride the wow inspiring waves with flotation devices. At the end, you come away
                            feeling refreshed.</p>
                    </div>
                </div>
            </div>


            <div class="card-cts" data-aos="fade-left">
                <div class="main main-bg-1" onclick="modelshow(this)">
                    <div class="img-card">
                        <img src="/assets/imgs/10.png" alt="10.png" width="100%">
                    </div>
                    <div class="content-card">
                        <h3>Slow Flow</h3>
                        <p>Tired from all the fun you're having? Need a break? Then how about you hop on a rubber tube
                            and
                            chill out while you go around our lazy river? You can be lazy without missing out on the
                            fun.</p>
                    </div>
                </div>
            </div>

            <div class="card-cts" data-aos="fade-left">
                <div class="main main-bg-1" onclick="modelshow(this)">
                    <div class="img-card">
                        <img src="/assets/imgs/11.png" alt="11.png" width="100%">
                    </div>
                    <div class="content-card">
                        <h3>Yippee Land</h3>
                        <p>Missing Goa and Phuket? Now you can enjoy the pleasures of your very own beach in the heart
                            of
                            Delhi. Yes, you read it correctly - Delhi. Soak in the sun or laze around in our beautiful
                            artificial beach.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container modelshow">
        <div id="closeIcon" class="close">
            <a href="#"><i class="fa fa-window-close" aria-hidden="true"></i></a>
        </div>
        <div class="row">
            <div class="content col-12 col-md-6 d-flex align-items-center">
                <div>
                    <h2 id="getheading">Storm Eye</h2>
                    <p id="getpara">Drop down an elevated chute and spin like a fusilli before splashing into a giant
                        splash pool
                        below.
                        Not for the faint hearted. Are you in the mood for a cyclone?</p>
                    <div class="btn-div mt-4">
                        <a href="{{route('ticketbooking')}}" class="btn btn-yellow btn-cts">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 px-0">
                <div class="img-box">
                    <img id="imgsrc" src="/assets/imgs/2.png" alt="2.png" width="100%">
                    <h3 class="text-center" id="getheading1">Storm Eye</h3>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
    
    $testimonials = [
        [
            'img' => '/assets/imgs/testimonials/6.png',
            'name' => 'Ms. Tripti Charan',
            'desc' => "Atlantic Water World is the new place to beat the heat this summer! They have rides for all ages
                        and pools including one for family and wave pool. If you don't have swimming costume, there is
                        no worry. Costumes, caps, mobile pouch are available on hire.",
        ],
        [
            'img' => '/assets/imgs/testimonials/2.png',
            'name' => 'Mr. Vikarm Fogla',
            'desc' => "The Atlantic water world is a very good option to enjoy your weekend with Family and friends.
                        There are more than 6 rides for adults and two separate sections for children. The Food is also
                        good.",
        ],
        [
            'img' => '/assets/imgs/testimonials/1.png',
            'name' => 'Mr. Abhay',
            'desc' => "A good place to visit. Before visiting we had doubts about water quality,
                        crowd, gentry, food, toilets etc. etc. But we were pleasantly surprised that
                        things were very smooth. Water was clean and all places were spick and
                        span.",
        ],
        [
            'img' => '/assets/imgs/testimonials/5.png',
            'name' => 'Mr. Rajan G',
            'desc' => "One of the best water park in the country. Visited with family and young children it was out of
                        the world. Never expected that we have such a beautiful water park in the country.",
        ],
        [
            'img' => '/assets/imgs/testimonials/4.png',
            'name' => 'Mr. Lakshay',
            'desc' => "It is very beautiful and well organized water park in delhi ncr awesome rids for adults and as
                        well as for kids they have seprate section for kids locker and costume are avilable on low price
                        water is cleand staff is well beahved.",
        ],
        [
            'img' => '/assets/imgs/testimonials/3.png',
            'name' => 'Ms. Lajo',
            'desc' => "It was a wonderful visit to the Atlantic water world. They have so many items where we can play.
                        May look adventurous, but , they maintain high safety standards. Definitely you can try out all
                        of them, at reasonable cost",
        ],
     ]
?>

<section class="third-section py-5">
    <div class="container">
        <div class="row text-center">
            <h2 class="text-center" data-aos="fade-right">What Our Visitors Say About Us</h2>
            <div class="line text-center mb-3">
                <img src="/assets/imgs/blue-line-third.png" alt="">
            </div>
            <div class="testimonials">
                @foreach($testimonials as $tm)
                <div class="slide-card row">
                    <div class="col-6 d-flex align-items-center">
                        <div class="img-card">
                            <img src="{{$tm['img']}}" alt="{{$tm['img']}}" width="180px">
                        </div>
                        <div class="user-info ps-4">
                            <p class="name">{{$tm['name']}}</p>
                            <div class="rating d-flex mt-3">
                                <img src="/assets/imgs/star.png" alt="star">
                                <img src="/assets/imgs/star.png" alt="star">
                                <img src="/assets/imgs/star.png" alt="star">
                                <img src="/assets/imgs/star.png" alt="star">
                                <img src="/assets/imgs/star.png" alt="star">
                            </div>
                        </div>
                    </div>
                    <div class="col-6 d-flex align-items-center">
                        <p>{{$tm['desc']}}</p>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>

<?php
$highlights = [
        [
            'img' => '/assets/imgs/highlights/1.png',
        ],
        [
            'img' => '/assets/imgs/highlights/2.png',
        ],
        [
            'img' => '/assets/imgs/highlights/3.png',
        ],
        [
            'img' => '/assets/imgs/highlights/1.png',
        ],
        [
            'img' => '/assets/imgs/highlights/2.png',
        ],
    ];
?>
<section class="heighlight-section p-5">
    <div class="container-fluid">
        <h2>Highlights & Events</h2>
        <div class="highlights row mt-5">
            @foreach($highlights as $hl)
            <div class="col-4">
                <img src="{{$hl['img']}}" alt="{{$hl['img']}}" width="95%">
            </div>
            @endforeach
        </div>
    </div>
</section>


<x-footer />

<script>
function modelshow(val) {
    var heading = val.querySelector("h3").innerHTML;
    var para = val.querySelector("p").innerHTML;
    var imgsrc = val.querySelector("img").src;

    let paragraph = para.replace(/\s+/g, ' ');

    document.querySelector("#getheading").innerHTML = heading;
    document.querySelector("#getheading1").innerHTML = heading;
    document.querySelector("#getpara").innerHTML = paragraph;
    document.querySelector("#imgsrc").src = imgsrc;
    document.querySelector(".modelshow").style.display = "block";

}

document.querySelector("#closeIcon").addEventListener('click', function(event) {
    event.preventDefault();
    document.querySelector(".modelshow").style.display = "none";
})
</script>

<script>
$(document).ready(function() {
    $('.testimonials').slick({
        dots: true,
        arrows: false,
        fade: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
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

<script>
$(document).ready(function() {
    $('.highlights').slick({
        dots: true,
        arrows: false,
        infinite: true,
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

<script>
function playVideo(container) {
    let iframe = document.createElement("iframe");
    iframe.setAttribute("src", "https://www.youtube.com/embed/kxh3T8B8BRk?autoplay=1&rel=0");
    iframe.setAttribute("frameborder", "0");
    iframe.setAttribute("allow", "autoplay; encrypted-media");
    iframe.setAttribute("allowfullscreen", "true");
    iframe.style.width = "100%";
    iframe.style.height = "100%";

    container.innerHTML = "";
    container.appendChild(iframe);
}
</script>
@endsection