@extends('includes.main')
@section('title')
Attractions Gallery | Atlantic Water World
@endsection
@section('header')
<link rel="stylesheet" href="/assets/css/style.css" />
<link rel="stylesheet" href="/assets/css/home.css" />
<link rel="stylesheet" href="/assets/css/global.css" />
<link rel="stylesheet" href="/assets/css/gallery.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.2.0/magnific-popup.css" integrity="sha512-UhvuUthI9VM4N3ZJ5o1lZgj2zNtANzr3zyucuZZDy67BO6Ep5+rJN2PST7kPj+fOI7M/7wVeYaSaaAICmIQ4sQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>

@media (min-width: 1300px) and (max-width: 2560px) {
  .popup-gallery {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
  }
}

@media (min-width: 700px) and (max-width: 1299px) {
  .popup-gallery {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
  }
}

@media (min-width: 300px) and (max-width: 699px) {
  .popup-gallery {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 5px;
  }
}

.gallery_item {
  margin-bottom: 5px;
  overflow: hidden;
}

.popup-gallery a {
  display: block;
  width: 100%;
  border: 1px solid #fff;
  overflow: hidden;
  transition: transform 0.3s ease, border-color 0.3s ease;
}

.popup-gallery a:hover {
  transform: scale(1.05);
  border-color: #fff;
}

.popup-gallery img {
  display: block;
  width: 100%;
  object-fit: cover;
  min-height: 350px;
  max-height: 350px;
}

@media only screen and (max-width: 1200px) {
  .popup-gallery img {
    min-height: 200px;
    max-height: 200px;
  }
}
@media only screen and (max-width: 1000px) {
  .popup-gallery img {
    min-height: 150px;
    max-height: 150px;
  }
}

/* END  */

.singicon_btn_nlf {
  position: absolute;
  top: 44%;
  bottom: 56%;
  left: 44%;
  right: 56%;
  opacity: 0;
}

.singicon_btn_nlf svg {
  color: #fff;
}

.popup-gallery a:hover .singicon_btn_nlf {
  opacity: 1;
}

.hover_affect_nlf:hover img {
  opacity: 0.5;
}

</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@endsection
@section('body')
<x-header />
<x-herosection hero="1" heroheading="" heropara="" heading="Water World Attractions" />

<svg class="blue-second-last-line" width="100%" height="150" viewBox="0 0 1200 150" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
    <path d="M 0 75 
       Q 300 0, 600 75 
       T 1200 75 
       V 150 H 0 Z" fill="#0BE8F9E5" stroke="none" />
    <path d="M 0 75 
       Q 300 0, 600 75 
       T 1200 75" fill="none" stroke="white" stroke-width="2" />
</svg>


<?php
$ridesimg = [
      [
        'img' => '/assets/imgs/rides/1.png', 
      ],
      [
        'img' => '/assets/imgs/rides/2.png', 
      ],
      [
        'img' => '/assets/imgs/rides/3.png', 
      ],
      [
        'img' => '/assets/imgs/rides/4.png', 
      ],
      [
        'img' => '/assets/imgs/rides/5.png', 
      ],
      [
        'img' => '/assets/imgs/rides/6.png', 
      ],
      [
        'img' => '/assets/imgs/rides/7.png', 
      ],     
      [
        'img' => '/assets/imgs/rides/8.png', 
      ],
      [
        'img' => '/assets/imgs/rides/9.png', 
      ],
      ];
?>



<section class="gallery-section p-2 p-md-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-5">
                <h2 class="pt-5" data-aos="fade-right">Storm Eye</h2>
                <p data-aos="fade-right">Drop down an elevated chute and spin like a fusilli before splashing into a giant splash pool below.
                    Not for the faint hearted. Are you in the mood for a cyclone?</p>
            </div>
            <div class="col-12 col-md-1"></div>
            <div class="col-12 col-md-6">
                <div class="rides">
                    @foreach($ridesimg as $ridesimg)
                    <img src="{{$ridesimg['img']}}" alt="{{$ridesimg['img']}}" width="100%">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <hr class="white-overlay">
    <svg class="last-svg" style="background:#0BE8F9E5" width="100%" height="150" viewBox="0 0 1200 150"
        xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
        <path d="M 0 75 
       Q 300 0, 600 75 
       T 1200 75 
       V 150 H 0 Z" fill="white" stroke="none" />
        <path d="M 0 75 
       Q 300 0, 600 75 
       T 1200 75" fill="none" stroke="white" stroke-width="2" />
    </svg>
    
</section>


<?php
$galleryimg = [
      [
        'img' => '/assets/imgs/gallery/1.jpg', 
      ],
      [
        'img' => '/assets/imgs/gallery/2.jpg', 
      ],
      [
        'img' => '/assets/imgs/gallery/3.jpg', 
      ],
      [
        'img' => '/assets/imgs/gallery/4.jpg', 
      ],
      [
        'img' => '/assets/imgs/gallery/5.jpg', 
      ],
      
      [
        'img' => '/assets/imgs/gallery/6.jpg', 
      ],
      [
        'img' => '/assets/imgs/gallery/7.jpg', 
      ],     
      [
        'img' => '/assets/imgs/gallery/8.jpg', 
      ],
      [
        'img' => '/assets/imgs/gallery/9.jpg', 
      ],
      [
        'img' => '/assets/imgs/gallery/10.jpg', 
      ],
      [
        'img' => '/assets/imgs/gallery/11.jpg', 
      ],
      [
        'img' => '/assets/imgs/gallery/12.jpg', 
      ],
      ];
?>

<section class="mt-5 main-gallery p-1 pt-5 p-md-5">
 <!-- gallery section  -->
<div class="gallery_container mt-5 px-3">
  <div class="popup-gallery">
    @foreach($galleryimg as $galleryimg)
    <div class="gallery_item">
      <a class="hover_affect_nlf position-relative" href="{{$galleryimg['img']}}" title="Gallery">
        <img src="{{$galleryimg['img']}}" alt="Thumbnail 1">
        <span class="singicon_btn_nlf">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z" />
          </svg>
        </span>
      </a>
    </div>
    @endforeach
  </div>
</div>
</section>

<?php
$allrides = [
      [
        'img' => '/assets/imgs/2.png', 
        'heading' => 'Storm Eye',
        'para'=>'Drop down an elevated chute and spin like a fusilli before splashing into a giant splash pool
                            below. Not for the faint hearted. Are you in the mood for a cyclone?',

      ],
      [
        'img' => '/assets/imgs/3.png', 
        'heading' => 'Tornado',
        'para'=>'Experience thrills & chills in this funnel shaped slide as you zoom down 60 feet while
                            sitting on a rubber tube, swinging side to side.',
      ],
      [
        'img' => '/assets/imgs/4.png', 
        'heading' => 'Gravity',
        'para'=>"Ready to see who's the fastest wave rider in your gang? Hop on the Racer with two of your
                            friends and show them who's the master of speed as you race them down the slide.",
      ],
      [
        'img' => '/assets/imgs/5.png', 
        'heading' => 'Baby Cool',
        'para'=>'Why should adults have all the fun? Let your little tots enjoy their day in the sun (and the
                            much-needed Vitamin D) as they splash about and have a gala time.',
      ],
      [
        'img' => '/assets/imgs/6.png', 
        'heading' => 'Family Pool',
        'para'=>'The family pool is the best attraction in the park for the entire family. Be it an adult or a
                            child, swimmer or non-swimmer, you can gambol in the shallows and bond over smiles and
                            squeals.',
      ],
      [
        'img' => '/assets/imgs/7.png', 
        'heading' => 'Racer',
        'para'=>"Ready to see who's the fastest wave rider in your gang? Hop on the Racer with two of your
                            friends
                            and show them who's the master of speed as you race them down the slide.",
      ],
      [
        'img' => '/assets/imgs/8.png', 
        'heading' => 'Loopy',
        'para'=>"This one's seriously twisted! Drop down and zoom through the various twists and turns of this
                            very loopy ride.",
      ],     
      [
        'img' => '/assets/imgs/9.png', 
        'heading' => 'Water Wave',
        'para'=>"Catch the waves and recreate the ambience of the blue waters of the Indian Ocean. Paddle in
                            the
                            shallows or ride the wow inspiring waves with flotation devices. At the end, you come away
                            feeling refreshed.",
      ],
      [
        'img' => '/assets/imgs/10.png', 
        'heading' => 'Slow Flow',
        'para'=>"Tired from all the fun you're having? Need a break? Then how about you hop on a rubber tube
                            and
                            chill out while you go around our lazy river? You can be lazy without missing out on the
                            fun.",
      ],
      [
        'img' => '/assets/imgs/11.png', 
        'heading' => 'Yippee Land',
        'para'=>"Missing Goa and Phuket? Now you can enjoy the pleasures of your very own beach in the heart
                            of
                            Delhi. Yes, you read it correctly - Delhi. Soak in the sun or laze around in our beautiful
                            artificial beach.",
      ],
      ];
?>


<section class="more-rides-section p-2 pt-5 p-md-5">
    <div class="container-fluid">
        <h2 class="text-center">More Rides</h2>
        <div class="more-rides">
            @foreach($allrides as $allrides)
            <div class="cards">
                <div class="img-card">
                    <img src="{{$allrides['img']}}" alt="{{$allrides['img']}}" width="100%">
                </div>
                <div class="info">
                    <h3>{{$allrides['heading']}}</h3>
                    <p>{{$allrides['para']}}</p>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</section>




<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script>
$(document).ready(function() {
    $('.rides').slick({
        dots: true,
        arrows: false,
        infinite: false,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
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
    $('.more-rides').slick({
        dots: true,
        arrows: false,
        infinite: false,
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
  // popup-gallery
jQuery(document).ready(function ($) {
  $(".popup-gallery").magnificPopup({
    delegate: "a",
    type: "image",
    tLoading: "Loading image #%curr%...",
    mainClass: "mfp-img-mobile",
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0, 1] // Preload previous and next images
    },
    image: {
      tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
      titleSrc: function (item) {
        return item.el.attr("title") || "";
      }
    }
  });
});

</script>

<x-footer />
@endsection