@extends('includes.main')
@section('title')
Public Bus | Atlantic Water World
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
<x-herosection hero="1" heroheading="" heropara="" heading="Public Bus for Atlantic Water World" />

<section class="bus-section p-5">
    <div class="container fluid">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col" style="width:15%">Sl. No.</th>
                    <th scope="col" style="width:30%">Bus Route Name</th>
                    <th scope="col">From and To Details</th>
                </tr>
            </thead>
            <tbody>
                <tr style="display:none">
                    <th></th>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">01</th>
                    <td>34</td>
                    <td>Mehrauli to Noida Sector 32 Ntpc</td>
                </tr>
                <tr>
                    <th scope="row">02</th>
                    <td>34 EXT</td>
                    <td>Lado Sarai to Mayur Vihar Phase 2</td>
                    
                </tr>
                <tr>
                    <th scope="row">03</th>
                    <td>404 EXT</td>
                    <td>Old Delhi Railway Station to Madanpur Khadar Jj Colony</td>
                    
                </tr>
                <tr>
                    <th scope="row">04</th>
                    <td>443</td>
                    <td>Shahdara to Badarpur Mb Road</td>
                    
                </tr>
                <tr>
                    <th scope="row">05</th>
                    <td>454</td>
                    <td>New Delhi Railway Station Gate No 2 to Jaitpur Extension Phase 1</td>
                    
                </tr>
                <tr>
                    <th scope="row">06</th>
                    <td>458</td>
                    <td>New Delhi Railway Station Gate No 2 to Madanpur Khadar Jj Colony</td>
                    
                </tr>
                <tr>
                    <th scope="row">07</th>
                    <td>465</td>
                    <td>Safdarjung Terminal to Madanpur Khadar Jj Colony</td>
                    
                </tr>
                <tr>
                    <th scope="row">08</th>
                    <td>493</td>
                    <td>Nehru Place Terminal to Mayur Vihar Phase 3</td>
                    
                </tr>
                <tr>
                    <th scope="row">09</th>
                    <td>8</td>
                    <td>Badarpur Mb Road to Noida Phase 1</td>
                </tr>
            </tbody>

        </table>
    </div>
</section>
<x-footer />
@endsection