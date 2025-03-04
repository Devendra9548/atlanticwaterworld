@extends('includes.main')
@section('title')
Contact Us | Atlantic Water World
@endsection
@section('header')
<link rel="stylesheet" href="/assets/css/style.css" />
<link rel="stylesheet" href="/assets/css/home.css" />
<link rel="stylesheet" href="/assets/css/contact.css" />
@endsection
@section('body')
<x-header />
<x-herosection hero="1" heroheading="" heropara="" heading="Contact Us" />
<section class="contact-info p-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-4" data-aos="fade-left">
                <div class="card-info">
                    <div class="img-card d-flex align-items-center justify-content-center py-4">
                        <img src="/assets/imgs/location-icon.png" alt="location-icon" width="24%">
                    </div>
                    <img src="/assets/imgs/contact-bg.png" alt="contact-bg" width="100%">
                    <div class="card-message px-5">
                        <p>General Query: <a href="tel:+919540004091">+91 9540 004 091</a></p>
                        <p>Group Query: <a href="tel:+919540004092">+91 9540 004 092</a></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4" data-aos="fade-top">
                <div class="card-info">
                    <div class="img-card d-flex align-items-center justify-content-center py-4">
                        <img src="/assets/imgs/phone-Icon.png" alt="phone-Icon" width="20.5%">
                    </div>
                    <img src="/assets/imgs/contact-bg.png" alt="contact-bg" width="100%">
                    <div class="card-message px-5">
                        <p>Kalindi Kunj Park, adjacent to Kalindi Kunj Metro Station New Delhi - 110025.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4" data-aos="fade-right">
                <div class="card-info">
                    <div class="img-card d-flex align-items-center justify-content-center py-4">
                        <img src="/assets/imgs/mail-icon.png" alt="mail-icon" width="25%">
                    </div>
                    <img src="/assets/imgs/contact-bg.png" alt="contact-bg" width="100%">
                    <div class="card-message px-5">
                        <p><a href="mailto:info@atlanticwaterworld.com">info@atlanticwaterworld.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="p-5 pt-0 map-section">
    <div class="container-fluid">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3504.829021514653!2d77.3067274752857!3d28.544858475712708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce565e8b8ad1b%3A0xa1e2429c132e090e!2sAtlantic%20Water%20World!5e0!3m2!1sen!2sin!4v1740675075594!5m2!1sen!2sin"
            width="100%" height="550" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<section class="third-section">
    <div class="container">

        <div class="rows">
            <h3 class="mb-4">Query Form</h3>
            <form>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="exampleInputText">Name*</label>
                            <input type="text" class="form-control" id="exampleInputText" aria-describedby="emailHelp"
                                placeholder="Enter Your Full Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputText">City*</label>
                            <input type="text" class="form-control" id="exampleInputText" aria-describedby="emailHelp"
                                placeholder="Enter Your City/Place">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputText">Guest*</label>
                            <input type="text" class="form-control" id="exampleInputText" aria-describedby="emailHelp"
                                placeholder="Please Enter No of Guest">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputText">Phone</label>
                            <input type="text" class="form-control" id="exampleInputText" aria-describedby="emailHelp"
                                placeholder="Phone no.">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="exampleInputText">E-Mail*</label>
                            <input type="text" class="form-control" id="exampleInputText" aria-describedby="emailHelp"
                                placeholder="Enter Your Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputText">Date*</label>
                            <input type="text" class="form-control" id="exampleInputText" aria-describedby="emailHelp"
                                placeholder="Please Enter Vist Date">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputText">Company Name*</label>
                            <input type="text" class="form-control" id="exampleInputText" aria-describedby="emailHelp"
                                placeholder="Enter Institution / Company Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputText">Message</label>
                            <textarea name="" id="" placeholder="Message"></textarea>
                        </div>
                    </div>
                </div>
                <div class="btn-div mt-4 d-flex justify-content-center">
                    <input class="btn btn-yellow btn-cts" type="Submit" value="Submit" style="width:18%!important">
                </div>
            </form>
        </div>
    </div>
</section>

<x-footer />
@endsection