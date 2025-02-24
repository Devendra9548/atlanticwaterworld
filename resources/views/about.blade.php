@extends('includes.main')
@section('title')
About Us | Atlantic Water World
@endsection
@section('header')
<link rel="stylesheet" href="/assets/css/style.css" />
<link rel="stylesheet" href="/assets/css/home.css" />
<link rel="stylesheet" href="/assets/css/about.css" />
@endsection
@section('body')
<x-header />
<x-herosection hero="1" heroheading="" heropara="" heading="Atlantic Water World" />
<section class="second-section p-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6 pe-2 pe-md-5 bg-content">
                <div class="layer">
                    <h3 class="mb-3">2The best water park in Delhi NCR, Atlantic Water World is surround by a water canal
                        and
                        sits on the
                        Yamuna waterfront along the Kalindi Kunj barrage.</h3>
                    <p>Atlantic Water World is a world class water park in Delhi/NCR, offering people the perfect
                        getaway
                        full of fun, thrill, sheer excitement and real entertainment.
                    </p>
                    <p>With 13 world class slides, some of which are exclusively available only at Atlantic Water World,
                        like Aqua Funnel, Tornado - both of them, the first in North India.</p>
                    <p>At Atlantic Water World, we are committed to providing you a safe, fun and exciting experience,
                        with
                        our unparalleled safety standards, thrilling rides and offerings that leave you immersed in fun
                        throughout your time with us.</p>
                    <p>Reaching the park is easy-peasy. Being in the heart of South Delhi, it has direct connectivity
                        with
                        the entire city. It's just 100 meters from the Kalindi Kunj Metro Station, and is well served by
                        all
                        the cab providers.</p>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <img src="/assets/imgs/about-right1.png" alt="about-right1" width="100%">
            </div>
        </div>
    </div>
</section>
<div class="full-lin">
    <img src="/assets/imgs/about-line.png" alt="about-right1" width="100%">
</div>

<section class="p-5 third-section">
    <div class="container-fluid pt-5">
        <h2 class="text-center mb-3">Rides We Offer</h2>
        <div class="d-flex justify-content-center mb-2">
            <div class="card-cts">
                <div class="main main-bg-1">
                    <h3>Racer</h3>
                    <p>Ready to see who's the fastest wave rider in your gang? Hop on the Racer with two of your friends
                        and show them who's the master of speed as you race them down the slide.</p>
                    <img src="/assets/imgs/blue-bg.png" alt="">
                </div>
            </div>
            <div class="card-cts">
                <div class="main main-bg-2">
                    <h3>Loopy</h3>
                    <p>This one's seriously twisted! Drop down and zoom through the various twists and turns of this
                        very loopy ride.</p>
                    <img src="/assets/imgs/blue-bg.png" alt="">
                </div>
            </div>
            <div class="card-cts">
                <div class="main main-bg-3">
                    <h3>Yippee Land</h3>
                    <p>Missing Goa and Phuket? Now you can enjoy the pleasures of your very own beach in the heart of
                        Delhi. Yes, you read it correctly - Delhi. Soak in the sun or laze around in our beautiful
                        artificial beach.</p>
                    <img src="/assets/imgs/blue-bg.png" alt="">
                </div>
            </div>

        </div>
    </div>
</section>


<x-footer />

@endsection