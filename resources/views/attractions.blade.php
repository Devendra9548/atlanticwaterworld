@extends('includes.main')
@section('title')
Rides & Attractions | Atlantic Water World
@endsection
@section('header')
<link rel="stylesheet" href="/assets/css/style.css" />
<link rel="stylesheet" href="/assets/css/home.css" />
<link rel="stylesheet" href="/assets/css/global.css" />
<link rel="stylesheet" href="/assets/css/attractions.css" />

@endsection
@section('body')
<x-header />
<x-herosection hero="1" heroheading="" heropara="" heading="Water world Attractions" />

<section class="attractions-section p-2 p-md-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6 mb-4" data-aos="fade-right">
                <div class="cards">
                    <div class="img-card">
                        <img src="/assets/imgs/rides/1.png" alt="" width="100%">
                    </div>
                    <div class="info">
                        <h3>Storm Eye</h3>
                        <p>Drop down an elevated chute and spin like a fusilli before splashing into a giant splash pool
                            below. Not for the faint hearted. Are you in the mood for a cyclone?</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-4" data-aos="fade-left">
                <div class="cards">
                    <div class="img-card">
                        <img src="/assets/imgs/rides/2.png" alt="" width="100%">
                    </div>
                    <div class="info">
                        <h3>Tornado</h3>
                        <p>Experience thrills & chills in this funnel shaped slide as you zoom down 60 feet while
                            sitting on a rubber tube, swinging side to side.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-4" data-aos="fade-right">
                <div class="cards">
                    <div class="img-card">
                        <img src="/assets/imgs/rides/3.png" alt="" width="100%">
                    </div>
                    <div class="info">
                        <h3>Family Pool</h3>
                        <p>The family pool is the best attraction in the park for the entire family. Be it an adult or a
                            child, swimmer or non-swimmer, you can gambol in the shallows and bond over smiles and
                            squeals.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-4" data-aos="fade-left">
                <div class="cards">
                    <div class="img-card">
                        <img src="/assets/imgs/rides/4.png" alt="" width="100%">
                    </div>
                    <div class="info">
                        <h3>Racer</h3>
                        <p>Ready to see who's the fastest wave rider in your gang? Hop on the Racer with two of your
                            friends and show them who's the master of speed as you race them down the slide.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-4" data-aos="fade-right">
                <div class="cards">
                    <div class="img-card">
                        <img src="/assets/imgs/rides/5.png" alt="" width="100%">
                    </div>
                    <div class="info">
                        <h3>Loopy</h3>
                        <p>This one's seriously twisted! Drop down and zoom through the various twists and turns of this
                            very loopy ride.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-4" data-aos="fade-left">
                <div class="cards">
                    <div class="img-card">
                        <img src="/assets/imgs/rides/6.png" alt="" width="100%">
                    </div>
                    <div class="info">
                        <h3>Yippee Land</h3>
                        <p>Missing Goa and Phuket? Now you can enjoy the pleasures of your very own beach in the heart
                            of Delhi. Yes, you read it correctly - Delhi. Soak in the sun or laze around in our
                            beautiful artificial beach.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-4" data-aos="fade-right">
                <div class="cards">
                    <div class="img-card">
                        <img src="/assets/imgs/rides/7.png" alt="" width="100%">
                    </div>
                    <div class="info">
                        <h3>Gravity</h3>
                        <p>Ready to see who's the fastest wave rider in your gang? Hop on the Racer with two of your
                            friends and show them who's the master of speed as you race them down the slide.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-4" data-aos="fade-left">
                <div class="cards">
                    <div class="img-card">
                        <img src="/assets/imgs/rides/8.png" alt="" width="100%">
                    </div>
                    <div class="info">
                        <h3>Baby Cool</h3>
                        <p>Why should adults have all the fun? Let your little tots enjoy their day in the sun (and the
                            much-needed Vitamin D) as they splash about and have a gala time.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-4" data-aos="fade-right">
                <div class="cards">
                    <div class="img-card">
                        <img src="/assets/imgs/rides/9.png" alt="" width="100%">
                    </div>
                    <div class="info">
                        <h3>Slow Flow</h3>
                        <p>Tired from all the fun you're having? Need a break? Then how about you hop on a rubber tube
                            and chill out while you go around our lazy river? You can be lazy without missing out on the
                            fun.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-4" data-aos="fade-left">
                <div class="cards">
                    <div class="img-card">
                        <img src="/assets/imgs/rides/10.png" alt="" width="100%">
                    </div>
                    <div class="info">
                        <h3>Water Wave</h3>
                        <p>Catch the waves and recreate the ambience of the blue waters of the Indian Ocean. Paddle in
                            the shallows or ride the wow inspiring waves with flotation devices. At the end, you come
                            away feeling refreshed.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<x-footer />
@endsection