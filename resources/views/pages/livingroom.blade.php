@extends('layouts.home-page')

@section('title','Livingroom')

@section('content')
<main data-barba="container" data-barba-namespace="living-room">
<div class="otherPagesNav">

</div>
<div class="living-room-hero">

</div>
<div class="collection-hero-overlay"></div>
<div class="living-room-hero-text">
    <h4>Transform your living room with our sofas, sectionals, ottomans and coffee table</h4>
</div>
{{-- <h4 class="product-section-title">Sofas</h4> --}}
<div class="display-product-grid">
    @foreach($sofas as $sofa)
    <div>
     <div class="display-product-img-container">
        <a href="/{{$sofa->title}}"><img src="{{$sofa->image_url}}" class="display-product-image"></a>
     </div>
     <div class="display-product-text">
       <div class="product-button"> <a href="/{{$sofa->title}}" class="product-link">{{$sofa->title}}</a></div>
     </div>
    </div>
    @endforeach
</div>
{{-- <h4 class="product-section-title">Sectionals</h4> --}}
<div class="display-product-grid">
    @foreach($sectionals as $sectional)
    <div>
    <div class="display-product-img-container">
        <a href="/{{$sectional->title}}"><img src="{{$sectional->image_url}}" class="display-product-image"></a>
     </div>
     <div class="display-product-text">
       <div class="product-button"> <a href="/{{$sectional->title}}" class="product-link">{{$sectional->title}}</a></div>
     </div>
    </div>
    @endforeach
</div>
{{-- <h4 class="product-section-title">Coffee Tables</h4> --}}
<div class="display-product-grid">
    @foreach($coffeeTables as $coffeeTable)
    <div>
    <div class="display-product-img-container">
        <a href="/{{$coffeeTable->title}}"><img src="{{$coffeeTable->image_url}}" class="display-product-image"></a>
     </div>
     <div class="display-product-text">
       <div class="product-button"> <a href="/{{$coffeeTable->title}}" class="product-link">{{$coffeeTable->title}}</a></div>
     </div>
    </div>
    @endforeach
</div>
{{-- <h4 class="product-section-title">Ottomans</h4> --}}
<div class="display-product-grid">
    @foreach($ottomans as $ottoman)
    <div>
    <div class="display-product-img-container">
        <a href="/{{$ottoman->title}}"><img src="{{$ottoman->image_url}}" class="display-product-image"></a>
     </div>
     <div class="display-product-text">
       <div class="product-button"> <a href="/{{$ottoman->title}}" class="product-link">{{$ottoman->title}}</a></div>
     </div>
    </div>
    @endforeach
</div>
</main> 
@endsection