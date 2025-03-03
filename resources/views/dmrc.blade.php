@extends('includes.main')
@section('title')
DMRC | Atlantic Water World
@endsection
@section('header')
<link rel="stylesheet" href="/assets/css/style.css" />
<link rel="stylesheet" href="/assets/css/home.css" />
<link rel="stylesheet" href="/assets/css/global.css" />
<link rel="stylesheet" href="/assets/css/isline.css" />
<link rel="stylesheet" href="/assets/css/bus.css" />

@endsection
@section('body')
<x-header />
<x-herosection hero="1" heroheading="" heropara="" heading="DMRC" />

<section class="bus-section p-5">
   <div class="container-fluid">
    <img src="/assets/imgs/dmrc.png" alt="dmrc" width="100%">
   </div>
</section>
<x-footer />
@endsection