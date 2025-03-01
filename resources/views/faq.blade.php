@extends('includes.main')
@section('title')
FAQ | Atlantic Water World
@endsection
@section('header')
<link rel="stylesheet" href="/assets/css/style.css" />
<link rel="stylesheet" href="/assets/css/home.css" />
<link rel="stylesheet" href="/assets/css/global.css" />
<link rel="stylesheet" href="/assets/css/faq.css" />

@endsection
@section('body')
<x-header />
<x-herosection hero="1" heroheading="" heropara=""
    heading="Atlantic Water World <span>Frequently Asked Questions</span>" />

<section class="faq-section p-5">
    <div class="container faq-container">
        <div class="faq-item">
            <div class="faq-question">What Are The Rules And Regulations Of The Water Park? <span>+</span></div>
            <div class="faq-answer">Please refer to the Water park <a href="{{route('rulesregulations')}}">Rules and Regulations</a> for all information.</div>
        </div>
        <div class="faq-item">
            <div class="faq-question">Do I Need To Bring My Own Towel? <span>+</span></div>
            <div class="faq-answer">Towels are available on rent in the park.</div>
        </div>
        <div class="faq-item">
            <div class="faq-question">How Can I Pay For Entry Into The Water Park? <span>+</span></div>
            <div class="faq-answer">Payment by credit card, debit card or cash is accepted. No personal cheques accepted.</div>
        </div>
        <div class="faq-item">
            <div class="faq-question">What Age Does My Child Have To Be To Get In FREE? <span>+</span></div>
            <div class="faq-answer">Children below 3 feet in height are allowed free entry.</div>
        </div>
        <div class="faq-item">
            <div class="faq-question">Can I Bring My Own Food And Drinks? <span>+</span></div>
            <div class="faq-answer">No. We have a food court from where you can purchase food and drinks as per menu and prices listed.</div>
        </div>
        <div class="faq-item">
            <div class="faq-question">Do I Still Pay Even If I Don't Get Into The Water Or The Rides? <span>+</span></div>
            <div class="faq-answer">Yes. There is an admission ticket required for all to enter the park.</div>
        </div>
        <div class="faq-item">
            <div class="faq-question">Do You Have Locker Facility And Changing Rooms? <span>+</span></div>
            <div class="faq-answer">Yes, we do</div>
        </div>
        <div class="faq-item">
            <div class="faq-question">Do You Have Facility/Shop To Rent Swim Suits, Towels Etc? <span>+</span></div>
            <div class="faq-answer">Yes</div>
        </div>
        <div class="faq-item">
            <div class="faq-question">Do You Allow Smoking Or Alcoholic Beverages? <span>+</span></div>
            <div class="faq-answer">The water park is a non-smoking facility. We do not serve alcohol.</div>
        </div>
        <div class="faq-item">
            <div class="faq-question">Do You Have Trained Lifeguards Manning All Attractions? <span>+</span></div>
            <div class="faq-answer">Yes</div>
        </div>
        <div class="faq-item">
            <div class="faq-question">Are There Age /Height/Weight Restrictions For Certain Rides? <span>+</span></div>
            <div class="faq-answer">Yes, certain rides at Atlantic Water World have age / height / weight restrictions posted at the entry to the rides.</div>
        </div>
        <div class="faq-item">
            <div class="faq-question">What Is Your Chaperone Policy? <span>+</span></div>
            <div class="faq-answer">We strongly suggest that minors under the age of 18 be accompanied by a parent or adult guardian. The park does not assume any responsibility or liability for unattended minors.</div>
        </div>
        <div class="faq-item">
            <div class="faq-question">Do You Have A Dress Code? <span>+</span></div>
            <div class="faq-answer">Yes, it should be Nylon, Lycra or as per sports of authority of india Guidelines</div>
        </div>
        <div class="faq-item">
            <div class="faq-question">Do You Have CCTV Cameras In The Park? <span>+</span></div>
            <div class="faq-answer">Yes the entire park is covered by CCTV cameras.</div>
        </div>
        <div class="faq-item">
            <div class="faq-question">Will You Refund Our Money If Any Ride Is Not Operational? <span>+</span></div>
            <div class="faq-answer">It may be possible that 1 or more than 1 ride may not be operational due to reason beyond our control, please bare with us, under no such circumstances the tickets would be refunded.</div>
        </div>
    </div>
</section>
<script>
        document.querySelectorAll('.faq-question').forEach(item => {
            item.addEventListener('click', () => {
                const answer = item.nextElementSibling;
                const isVisible = answer.style.display === 'block';
                document.querySelectorAll('.faq-answer').forEach(ans => ans.style.display = 'none');
                document.querySelectorAll('.faq-question span').forEach(span => span.textContent = '+');
                answer.style.display = isVisible ? 'none' : 'block';
                item.querySelector('span').textContent = isVisible ? '+' : '-';
            });
        });
    </script>
<x-footer />
@endsection