@extends('includes.main')
@section('title')
DMRC | Atlantic Water World
@endsection
@section('header')
<link rel="stylesheet" href="/assets/css/style.css" />
<link rel="stylesheet" href="/assets/css/home.css" />
<link rel="stylesheet" href="/assets/css/global.css" />
<link rel="stylesheet" href="/assets/css/bus.css" />
<style>
        .image-container {
            position: relative;
        }

        .image-container img {
            width: 100%;
            display: block;
        }

        .magnifier {
            position: absolute;
            width: 140px;
            height: 140px;
            border-radius: 50%;
            border: 2px solid #000;
            background-repeat: no-repeat;
            background-size: 2500%; /* Adjust zoom level */
            pointer-events: none;
            display: none;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
    </style>

@endsection
@section('body')
<x-header />
<x-herosection hero="1" heroheading="" heropara="" heading="DMRC" />

<section class="bus-section p-2 pt-5 p-md-5">
   <!-- <div class="container-fluid">
    <img src="/assets/imgs/dmrc-img.jpg" alt="dmrc" width="100%">
   </div> -->
   <div class="image-container">
        <img src="http://127.0.0.1:8000/assets/imgs/dmrc-img.jpg" alt="Image" id="mainImage">
        <div class="magnifier" id="magnifier"></div>
    </div>
</section>
<x-footer />


<script>
        const mainImage = document.getElementById("mainImage");
        const magnifier = document.getElementById("magnifier");

        mainImage.addEventListener("mousemove", function (e) {
            let { left, top, width, height } = mainImage.getBoundingClientRect();
            let x = e.pageX - left - window.scrollX;
            let y = e.pageY - top - window.scrollY;

            let bgX = (x / width) * 100;
            let bgY = (y / height) * 100;

            magnifier.style.left = `${x - 50}px`;
            magnifier.style.top = `${y - 50}px`;
            magnifier.style.backgroundImage = `url(${mainImage.src})`;
            magnifier.style.backgroundPosition = `${bgX}% ${bgY}%`;
            magnifier.style.display = "block";
        });

        mainImage.addEventListener("mouseleave", function () {
            magnifier.style.display = "none";
        });
    </script>
@endsection