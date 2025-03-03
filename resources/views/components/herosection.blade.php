<section class="hero-section">
    <div class="container-fluid px-5">
        <div class="bg-img">
            <img src="/assets/imgs/1.png" alt="logo.png" width="100%">
        </div>
        <div class="row d-flex justify-content-center align-items-center p-0 m-0">
            <div class="col-12 col-md-12 text-center">
                <img src="/assets/imgs/logo.png" alt="logo.png" width="350px">
                @if($hero==1)
                <div class="btn-div mt-4">
                    <a href="#" class="btn btn-yellow">Book Now</a>
                </div>
                @endif
            </div>
            <div class="main-info px-3">
                @if($hero==2)
                <div class="hero-heading">
                    <p class="text-center fw-bold head"><img src="/assets/imgs/quote.png" alt="quote"
                            style="position: relative;top: -20px;right: 10px;">{{$heroheading}}</p>
                    <p class="text-center para">{{$heropara}}</p>
                </div>
                @endif

            </div>


        </div>


    </div>
</section>
<br><br>
<div class="bg-layer">
    <svg class="first-svg" width="100%" height="150" viewBox="0 0 1200 150" xmlns="http://www.w3.org/2000/svg"
        preserveAspectRatio="none">
        <path d="M 0 50 
           Q 85.7 0, 171.4 50 
           T 342.8 50 
           T 514.2 50 
           T 685.6 50 
           T 857 50 
           T 1028.4 50 
           T 1200 50 
           V 150 H 0 Z" fill="transparent" stroke="none" />
        <path d="M 0 50 
           Q 85.7 0, 171.4 50 
           T 342.8 50 
           T 514.2 50 
           T 685.6 50 
           T 857 50 
           T 1028.4 50 
           T 1200 50" fill="none" stroke="white" stroke-width="2" />
    </svg>

    <svg width="100%" height="150" viewBox="0 0 1200 150" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
        <path d="M 0 50 
           Q 85.7 0, 171.4 50 
           T 342.8 50 
           T 514.2 50 
           T 685.6 50 
           T 857 50 
           T 1028.4 50 
           T 1200 50 
           V 150 H 0 Z" fill="#F3E10B" stroke="none" />
        <path d="M 0 50 
           Q 85.7 0, 171.4 50 
           T 342.8 50 
           T 514.2 50 
           T 685.6 50 
           T 857 50 
           T 1028.4 50 
           T 1200 50" fill="none" stroke="white" stroke-width="2" />
    </svg>

</div>
@if(!empty($heading))
<section class="first-section pb-5 pb-5">
    <h2 class="text-center pt-2">{!!$heading!!}</h2>
</section>
<svg class="btm-fix" style="background:#F3E10B" width="100%" height="150" viewBox="0 0 1200 150"
    xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
    <path d="M 0 50 
           Q 85.7 0, 171.4 50 
           T 342.8 50 
           T 514.2 50 
           T 685.6 50 
           T 857 50 
           T 1028.4 50 
           T 1200 50 
           V 150 H 0 Z" fill="#fff" stroke="none" />
    <path d="M 0 50 
           Q 85.7 0, 171.4 50 
           T 342.8 50 
           T 514.2 50 
           T 685.6 50 
           T 857 50 
           T 1028.4 50 
           T 1200 50" fill="none" stroke="white" stroke-width="2" />
</svg>

<div class="sticky-socialmedia">
    <div class="mainbar">
        <ul>
            <li>
                <a href="tel:+919540004091">
                    <img src="/assets/imgs/wifi.png" alt="" width="auto" class="pe-1">
                    <div class="content">
                        <p>Call Us at</p>
                        <p>9540004091</p>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <div class="mainbar">
        <ul>
            <li>
                <a href="https://www.instagram.com/atlanticwaterworld/" target="_blank">
                    <img src="/assets/imgs/instagram-side.png" alt="" width="auto" class="pe-1">
                    <div class="content">
                        <p>Follow Us on</p>
                        <p>Instagram</p>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <div class="mainbar">
        <ul>
            <li>
                <a href="https://www.facebook.com/AtlanticWaterWorldPark/" target="_blank">
                    <img src="/assets/imgs/fb-side.png" alt="" width="auto" class="pe-1">
                    <div class="content">
                        <p>Like Us on</p>
                        <p>Facebook</p>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <div class="mainbar">
        <ul>
            <li>
                <a href="https://twitter.com/atlanticworld1" target="_blank">
                    <img src="/assets/imgs/twitter.png" alt="" width="auto" class="pe-1">
                    <div class="content">
                        <p>Like Us on</p>
                        <p>Twitter</p>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <div class="mainbar">
        <ul>
            <li>
                <a href="https://wa.me/9540004091?text=WhatsApp" target="_blank">
                    <img src="/assets/imgs/wp-side.png" alt="" width="auto" class="pe-1">
                    <div class="content">
                        <p>Connect via</p>
                        <p>WhatsApp</p>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <div class="mainbar">
        <ul>
            <li>
                <a href="https://www.youtube.com/channel/UCIyCWpivG-P5YJ7d6qL_IxA" target="_blank">
                    <img src="/assets/imgs/yt-side.png" alt="" width="auto" class="pe-1">
                    <div class="content">
                        <p>Subscribe on</p>
                        <p>YouYube</p>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <div class="mainbar">
        <ul>
            <li>
                <a href="https://www.tripadvisor.in/Attraction_Review-g304551-d12852722-Reviews-Atlantic_water_world-New_Delhi_National_Capital_Territory_of_Delhi.html" target="_blank">
                    <img src="/assets/imgs/tripadvisor.png" alt="" width="auto" class="pe-1">
                    <div class="content">
                        <p>Call Us at</p>
                        <p>9540004091</p>
                    </div>
                </a>
            </li>
        </ul>
    </div>

    
</div>
@endif