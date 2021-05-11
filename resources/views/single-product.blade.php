@extends('layouts.main')

@section('head-title')
   La Molisana Products 
@endsection

@section('main')
<div class="products-main-container">
    <div class="container">
        <div class="product">
            <h2>{{$prodId['titolo']}}</h2>
            <img src="{{$prodId['src-h']}}" alt="">
            <img src="{{$prodId['src-p']}}" alt="">
            <p>{!!$prodId['descrizione']!!}</p>
        </div>
    </div>
</div>
@endsection