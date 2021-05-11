@extends('layouts.main')

@section('head-title')
   La Molisana Products 
@endsection

@section('main')
<div class="products-main-container">
    <a href="{{route( 'single-product', ['id' => $prevId] )}}" class="fas fa-chevron-left prev"></a>
    <div class="container">
        <div class="product single-product">
            <h2>{{$prodId['titolo']}}</h2>
            <img src="{{$prodId['src-h']}}" alt="">
            <img src="{{$prodId['src-p']}}" alt="">
            <p>{!!$prodId['descrizione']!!}</p>
        </div>
    </div>
    <a href="{{route( 'single-product', ['id' => $nextId] )}}" class="fas fa-chevron-right next"></a>
</div>
@endsection