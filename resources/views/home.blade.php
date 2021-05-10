@extends('layouts.main')

@section('head-title')
   La Molisana Home 
@endsection

@section('main')

<div class="home-main-container">
    <div class="container">
        <!-- Liste pasta -->
        <h2>LE LUNGHE</h2>
        <ul class="pasta-list">
            @foreach ($lunga as $pastaLunga)
            <li>
                <a href=""> <img src="{{$pastaLunga['src']}}" alt=""> </a>
            </li>
            @endforeach
        </ul>
        <h2>LE CORTE</h2>
        <ul class="pasta-list">
            @foreach ($corta as $pastaCorta)
            <li>
                <a href=""> <img src="{{$pastaCorta['src']}}" alt=""> </a>
            </li>
            @endforeach
        </ul>
        <h2>LE CORTISSIME</h2>
        <ul class="pasta-list">
            @foreach ($cortissima as $pastaCortissima)
            <li> 
                <a href=""> <img src="{{$pastaCortissima['src']}}" alt=""> </a>
            </li>
            @endforeach
        </ul>
        <!-- /Liste pasta -->
    </div>
</div>
@endsection
