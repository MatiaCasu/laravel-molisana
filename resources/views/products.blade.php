@extends('layouts.main')

@section('head-title')
   La Molisana Products 
@endsection

@section('main')
<div class="products-main-container">
    <div class="container">
        @foreach ($products as $pasta)
        <div class="product">
            <a href=" {{route('single-product', ['id' => $pasta['pastaId'] ]) }}">
                <h2>{{$pasta['titolo']}}</h2>
                <img src="{{$pasta['src-h']}}" alt="">
                <img src="{{$pasta['src-p']}}" alt="">
            </a>
            <p>{!!$pasta['descrizione']!!}</p>
        </div>
        @endforeach
    </div>
</div>
@endsection