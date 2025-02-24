@extends('includes.main')
@section('title')
Blogs
@endsection
@section('header')
<link rel="stylesheet" href="/assets/css/style.css" />
<link rel="stylesheet" href="/assets/css/home.css" />
<link rel="stylesheet" href="/assets/css/blogs.css" />
@endsection
@section('body')
<x-header />
<x-herosection hero="2" heroheading="Exploring Ideas, Inspiring Minds" heropara="Your Source for Insightful Blog Content" heading="Popular Topic" />

<?php
    
    $blogs = [
      [
        [
            'name' => 'Top 10 Water Park Activities for the Perfect Family Day',
            'date' => '1 March 2025',
            'slug' => 'top-10-water-park-activities-for-the-perfect-family-day', 
        ],
        [
          'name' => 'The Ultimate Water Park Challenge: Can You Conquer It All',
          'date' => '2 March 2025',
          'slug' => 'the-ultimate-water-park-challenge-can-you-conquer-it-all', 
        ],
      ],
      [
        [
          'name' => 'Making the Most of Your Visit with Young <br>Children',
          'date' => '3 March 2025',
          'slug' => 'making-the-most-of-your-visit-with-young-children', 
        ],
        [
        'name' => 'Top 10 Water Park Activities for the Perfect Family Day',
        'date' => '4 March 2025',
        'slug' => 'top-10-water-park-activities-for-the-perfect-family-day', 
        ],
      ],
      [
        [
        'name' => 'Making the Most of Your Visit with Young Children',
        'date' => '5 March 2025',
        'slug' => 'making-the-most-of-your-visit-with-young-children', 
        ],
        [
        'name' => 'Top 10 Water Park Activities for the Perfect Family Day',
        'date' => '6 March 2025',
        'slug' => 'top-10-water-park-activities-for-the-perfect-family-day', 
        ],
      ],
      [
        [
        'name' => 'Making the Most of Your Visit with Young Children',
        'date' => '7 March 2025',
        'slug' => 'making-the-most-of-your-visit-with-young-children', 
        ],
        [
        'name' => 'Top 10 Water Park Activities for the Perfect Family Day',
        'date' => '8 March 2025',
        'slug' => 'top-10-water-park-activities-for-the-perfect-family-day', 
        ],
      ],
      [
       [
        'name' => 'Making the Most of Your Visit with Young Children',
        'date' => '9 March 2025',
        'slug' => 'making-the-most-of-your-visit-with-young-children', 
       ],
       [
        'name' => 'Top 10 Water Park Activities for the Perfect Family Day',
        'date' => '10 March 2025',
        'slug' => 'top-10-water-park-activities-for-the-perfect-family-day', 
       ],
      ],
    ];
?>


<section class="maincard-section py-5">
    <div class="container-fluid">
        <div class="card-slider">
            @foreach($blogs as $blog)
            <div class="slide">
                @foreach($blog as $singleblog)
                <div class="inner-slide">
                    <h3>{{$singleblog['name']}}</h3>
                    <p>{{$singleblog['date']}}</p>
                    <div class="text-end">
                        <a href="{{route('blog')}}/{{$singleblog['slug']}}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>
    </div>
</section>

<x-footer />
<script>
$(document).ready(function() {
    $('.card-slider').slick({
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

@endsection