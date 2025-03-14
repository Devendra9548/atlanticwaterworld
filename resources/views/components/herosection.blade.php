<section class="hero-section">
    <div class="container-fluid px-5">
        <div class="bg-img">
            <img src="/assets/imgs/1.png" alt="logo.png" width="100%">
        </div>
        <div class="row d-flex justify-content-center align-items-center p-0 m-0">
            <div class="col-12 col-md-12 text-center">
                <img src="/assets/imgs/logo.png" alt="logo.png" width="350px" data-aos="fade-right" id="herologo">
                @if($hero==1)
                <div class="btn-div mt-4">
                    <a href="{{route('ticketbooking')}}" class="btn btn-yellow" data-aos="fade-left">Book Now</a>
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
    <h2 class="text-center pt-2" data-aos="fade-right">{!!$heading!!}</h2>
</section>
<svg class="btm-fix hero-section-last-svg" style="background:#F3E10B" width="100%" height="150" viewBox="0 0 1200 150"
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

@endif