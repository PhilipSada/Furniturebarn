@extends('layouts.home-page')

@section('title','Bedroom')

@section('content')
<main data-barba="container" data-barba-namespace="bedroom">
  <div class="otherPagesNav">

  </div>
  
  <div class="bedroom-hero">
      
  </div>
  <div class="collection-hero-overlay"></div>
  <div class="bedroom-hero-text">
    <h4>Transform your bedroom with our beds and dressers</h4>
  </div>
   {{-- <h4 class="product-section-title">Beds</h4> --}}
  <div class="display-product-grid">
        @foreach($beds as $bed)
        <div>
        <div class="display-product-img-container">
            <a href="/{{$bed->title}}"><img src="{{$bed->image_url}}" class="display-product-image"></a>
         </div>
         <div class="display-product-text">
           <div class="product-button"> <a href="/{{$bed->title}}" class="product-link">{{$bed->title}}</a></div>
         </div>
        </div>
        @endforeach
  </div>
{{--   
  <h4 class="product-section-title">Dressers</h4> --}}
  <div class="display-product-grid">
        @foreach($dressers as $dresser)
        <div>
        <div class="display-product-img-container">
            <a href="/{{$dresser->title}}"><img src="{{$dresser->image_url}}" class="display-product-image"></a>
         </div>
         <div class="display-product-text">
           <div class="product-button"> <a href="/{{$dresser->title}}" class="product-link">{{$dresser->title}}</a></div>
         </div>
        </div>
        @endforeach
  </div>
</main>
@endsection