@extends('includes.main')
@section('title')
Group Booking | Atlantic Water World
@endsection
@section('header')
<link rel="stylesheet" href="/assets/css/style.css" />
<link rel="stylesheet" href="/assets/css/home.css" />
<link rel="stylesheet" href="/assets/css/groupbooking.css" />
@endsection
@section('body')
<x-header />
<x-herosection hero="1" heroheading="" heropara="" heading="Group Bookings - Atlantic Water World" />
<section class="second-section p-2 p-md-5">
    <div class="container-fluid mb-5" id="schoolpicnic">
        <div class="row">
            <div class="col-12 col-md-6 order-2 order-md-1" data-aos="fade-right">
                <h3 class="subheading">School Picnics</h3>
                <p>
                    With its world class rides and safety standards, Atlantic Water World is the perfect destination for
                    school picnics. Plan a picnic for your students full of fun, excitement and thrills to help them
                    refresh and rejuvenate. With our amazing rides and buffet, we ensure that not only do your students
                    have fun, but that they are well fed and replenished for their way back. Your students are sure to
                    leave with memories which they will cherish forever.
                </p>
                <h3>Requirements:</h3>
                <ul>
                    <li>A group of minimum 25 people is required.</li>
                    <li>Outside edibles, beverages and consumables are not allowed inside the park premises.</li>
                    <li>Buffet can be arranged depending upon the availability. (Minimum 50 people)</li>
                    <li>Booking needs to be made at least a day prior to the planned visit. Same day bookings are not
                        accepted.</li>
                    <li>Rates are subject to change without prior notice.</li>
                    <li>For any more questions related to corporate offers, call us at +91 9540004092.</li>
                </ul>
                <div class="btn-div mt-4">
                    <a href="{{route('ticketbooking')}}" class="btn btn-yellow btn-cts">Book Now</a>
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex align-items-center order-1 order-md-2" data-aos="fade-left">
                <img src="/assets/imgs/groupbooking-1.png" alt="groupbooking-1" width="100%">
            </div>
        </div>
    </div>
    <div class="container-fluid mb-5" id="CorporateParties">
        <div class="row">
            <div class="col-12 col-md-6 order-2 order-md-1" data-aos="fade-right">
                <h3 class="subheading">Corporate Parties</h3>
                <p>
                    With state-of-the-art facilities and multiple dining options, it's easy to turn your boring
                    corporate outings into unforgettable experiences. Atlantic Water World serves as a one-of-a-kind
                    destination to hold your next corporate event or function. Our thrilling rides relaxing pools are
                    sure to reenergize your mood. Get in touch today to know more about our offerings and decide which
                    one is right for your next corporate day outing.
                </p>
                <h3>Requirements:</h3>
                <ul>
                    <li>A group of minimum 25 people is required.</li>
                    <li>Outside edibles, beverages and consumables are not allowed inside the park premises.</li>
                    <li>Buffet can be arranged depending upon the availability. (Minimum 50 people)</li>
                    <li>Booking needs to be made at least a day prior to the planned visit. Same day bookings are not
                        accepted.</li>
                    <li>Rates are subject to change without prior notice.</li>
                    <li>For any more questions related to corporate offers, call us at +91 9540004092.</li>
                </ul>
                <div class="btn-div mt-4">
                    <a href="{{route('ticketbooking')}}" class="btn btn-yellow btn-cts">Book Now</a>
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex align-items-center order-1 order-md-2" data-aos="fade-left">
                <img src="/assets/imgs/groupbooking-2.png" alt="groupbooking-2" width="100%">
            </div>
        </div>
    </div>
    <div class="container-fluid mb-5" id="BirthdayCelebration">
        <div class="row">
            <div class="col-12 col-md-6 order-2 order-md-1" data-aos="fade-right">
                <h3 class="subheading">Birthday Celebration's</h3>
                <p>
                    Celebrate your loved one's special day the in a truly AWWsome way at Atlantic Water World. Our
                    birthday packages are made to ensure that your loved ones have a birthday like never before. Choose
                    from our different offerings including our rides and gourmet buffet options. Spend the day creating
                    memories that you and your loved ones will cherish forever.
                </p>
                <h3>Requirements:</h3>
                <ul>
                    <li>A group of minimum 25 people is required.</li>
                    <li>Outside edibles, beverages and consumables are not allowed inside the park premises.</li>
                    <li>Buffet can be arranged depending upon the availability. (Minimum 50 people)</li>
                    <li>Booking needs to be made at least a day prior to the planned visit. Same day bookings are not
                        accepted.</li>
                    <li>Rates are subject to change without prior notice.</li>
                    <li>For any more questions related to corporate offers, call us at +91 9540004092.</li>
                </ul>
                <div class="btn-div mt-4">
                    <a href="{{route('ticketbooking')}}" class="btn btn-yellow btn-cts">Book Now</a>
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex align-items-center order-1 order-md-2" data-aos="fade-left">
                <img src="/assets/imgs/groupbooking-3.png" alt="groupbooking-3" width="100%">
            </div>
        </div>
    </div>
</section>
<section class="heading-section pb-2 pb-md-5">
    <div class="container">
        <h2 class="mb-3" data-aos="fade-right">Group Query Form</h2>
        <p data-aos="fade-right">With its world class rides and safety standards, Atlantic Water World is the perfect
            destination for group
            outings.
        </p>
        <p class="mb-3" data-aos="fade-right">With state-of-the-art facilities and multiple dining options, it's easy to
            turn school and
            corporate outings
            into unforgettable experiences.</p>
    </div>
</section>

<section class="third-section">
    <div class="container">

        <div class="rows">
            <h3 class="mb-4" data-aos="fade-right">Query Form</h3>
            <form id="groupBooking" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="exampleInputText">Name*</label>
                            <input type="text" class="form-control" id="exampleInputText" aria-describedby="emailHelp"
                                placeholder="Enter Your Full Name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputText">City*</label>
                            <input type="text" class="form-control" id="exampleInputText" aria-describedby="emailHelp"
                                placeholder="Enter Your City/Place" name="city">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputText">Guest*</label>
                            <input type="text" class="form-control" id="exampleInputText" aria-describedby="emailHelp"
                                placeholder="Please Enter No of Guest" name="guest">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputText">Phone</label>
                            <input type="text" class="form-control" id="exampleInputText" aria-describedby="emailHelp"
                                placeholder="Phone no." name="phone">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="exampleInputText">E-Mail*</label>
                            <input type="text" class="form-control" id="exampleInputText" aria-describedby="emailHelp"
                                placeholder="Enter Your Email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputText">Date*</label>
                            <input type="date" class="form-control" id="exampleInputText" aria-describedby="emailHelp"
                                placeholder="Please Enter Vist Date" name="vsdate">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputText">Company Name*</label>
                            <input type="text" class="form-control" id="exampleInputText" aria-describedby="emailHelp"
                                placeholder="Enter Institution / Company Name" name="companyname">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputText">Message</label>
                            <textarea name="message" id="" placeholder="Message"></textarea>
                        </div>
                    </div>
                </div>
                <div class="btn-div mt-4 d-flex justify-content-center">
                    <input class="btn btn-yellow btn-cts" type="Submit" value="Submit" style="width:18%">

                </div>
                <div class="d-flex justify-content-center mt-3">
                <img src="/assets/imgs/spinner.gif" alt="" width="26px" id="CtSpinner">
                <p id="messagehere">Thank you for your Submission.</p>
                </div>
            </form>
        </div>
    </div>
</section>
<x-footer />

<script>
$(document).ready(function() {
    $("#groupBooking").submit(function(event) {
        event.preventDefault();

        // Check if all required fields are filled
        let isValid = true;
        $("#groupBooking input, #groupBooking textarea, #groupBooking select").each(function() {
            if ($(this).prop("required") && $(this).val().trim() === "") {
                isValid = false;
                $(this).css("border", "2px solid red");
            } else {
                $(this).css("border", "");
            }
        });

        if (!isValid) {
            alert("Please fill in all required fields.");
            return;
        }

        // Show spinner
        document.querySelector("#CtSpinner").style.display = "block";

        var formData = new FormData(this);
        $.ajax({
            type: "POST",
            url: "/groupbooking-success",
            data: formData,
            contentType: false,
            processData: false,
            success: function(res) {
                document.querySelector("#CtSpinner").style.display = "none";
                if (res == true) {
                    $("#groupBooking")[0].reset();
                    document.querySelector("#messagehere").style.display = "block";
                    setTimeout(function() {
                        location.reload();
                    }, 3000);
                } else {
                    alert("Error! " + res);
                }
            }
        });
    });
});
</script>
@endsection