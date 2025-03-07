@extends('includes.main')
@section('title')
News & Pr | Atlantic Water World
@endsection
@section('header')
<link rel="stylesheet" href="/assets/css/style.css" />
<link rel="stylesheet" href="/assets/css/home.css" />
<link rel="stylesheet" href="/assets/css/global.css" />
<link rel="stylesheet" href="/assets/css/newspr.css" />

@endsection
@section('body')
<x-header />
<x-herosection hero="1" heroheading="" heropara=""
    heading="News & Pr" />

<section class="news-section p-2 p-md-5">
    <div class="container-fluid">
         <div class="row justify-content-center">
            
            <div class="col-12 col-md-5">
                <img src="/assets/imgs/news/1.png" alt="" width="90%">
                <a href="https://www.youtube.com/@atlanticwaterworldwaterpar86" class="youtube-icon" target="_blank">
                <img src="/assets/imgs/news/8.png" alt="" width="19%" class="yt-img">
                </a>
            </div>
            <div class="col-12 col-md-2 p-1">
                <img src="/assets/imgs/news/2.png" alt="" width="100%" class="p-1 mb-3">
                <img src="/assets/imgs/news/7.png" alt="" width="100%" class="p-1">
            </div>
            <div class="col-12 col-md-2 p-1">
                <img src="/assets/imgs/news/3.png" alt="" width="100%" class="p-1 mb-3">
                <img src="/assets/imgs/news/6.png" alt="" width="100%" class="p-1">
            </div>
            <div class="col-12 col-md-2 p-1">
                <img src="/assets/imgs/news/4.png" alt="" width="100%" class="p-1 mb-3">
                <img src="/assets/imgs/news/5.png" alt="" width="100%" class="p-1">
            </div>
            
            
         </div>
    </div>
</section>
<x-footer />
@endsection