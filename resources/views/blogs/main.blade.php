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
<x-herosection hero="2" heroheading="Exploring Ideas, Inspiring Minds"
    heropara="Your Source for Insightful Blog Content" heading="Recent Blogs" />

<?php
    
    $recentBlog = [
        [
            'img' => '/assets/imgs/2.png',
            'name' => 'Top 10 Water Park Activities for the Perfect Family Day',
            'para' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam dolor, necessitatibus aperiam earum esse impedit! Deleniti accusamus obcaecati eveniet ex eum aspernatur. Non eum, mollitia veniam possimus quod necessitatibus accusantium!',
            'date' => '1 March 2025',
            'slug' => 'top-10-water-park-activities-for-the-perfect-family-day', 
        ],
        [
            'img' => '/assets/imgs/2.png',
            'name' => 'The Ultimate Water Park Challenge: Can You Conquer It All',
            'para' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam dolor, necessitatibus aperiam earum esse impedit! Deleniti accusamus obcaecati eveniet ex eum aspernatur. Non eum, mollitia veniam possimus quod necessitatibus accusantium!',
            'date' => '2 March 2025',
            'slug' => 'the-ultimate-water-park-challenge-can-you-conquer-it-all', 
        ],
        [
            'img' => '/assets/imgs/2.png',
            'name' => 'Making the Most of Your Visit with Young Children',
            'para' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam dolor, necessitatibus aperiam earum esse impedit! Deleniti accusamus obcaecati eveniet ex eum aspernatur. Non eum, mollitia veniam possimus quod necessitatibus accusantium!',
            'date' => '3 March 2025',
            'slug' => 'making-the-most-of-your-visit-with-young-children', 
        ],
        [
            'img' => '/assets/imgs/2.png',
            'name' => 'Top 10 Water Park Activities for the Perfect Family Day',
            'para' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam dolor, necessitatibus aperiam earum esse impedit! Deleniti accusamus obcaecati eveniet ex eum aspernatur. Non eum, mollitia veniam possimus quod necessitatibus accusantium!',
            'date' => '4 March 2025',
            'slug' => 'top-10-water-park-activities-for-the-perfect-family-day', 
        ],
      
    ];
?>



<section class="recent-blog p-5">
    <div class="container">
        <div class="row">
            @foreach($recentBlog as $recentBlog)
            <div class="col-12 col-md-6 p-3">
                <div class="blog">
                    <a href="/blogs/{{$recentBlog['slug']}}">
                        <div class="img-card">
                            <img src="{{$recentBlog['img']}}" alt="{{$recentBlog['img']}}" width="100%">
                        </div>
                        <div class="content">
                            <h3>{{$recentBlog['name']}}</h3>
                            <p>{{$recentBlog['para']}}</p>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


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
          'name' => 'Making the Most of Your Visit with Young Children',
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
        
    <div class="heading-yellow">
         <h2 class="text-center mb-0 pb-5">Popular Topic</h2>
    </div>
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