@extends('layouts.home-page')

@section('title','Diningroom')

@section('content')
<main data-barba="container" data-barba-namespace="dining-room">
<div class="otherPagesNav">

</div>
<div class="dining-room-hero">

</div>
<div class="collection-hero-overlay"></div>
<div class="dining-room-hero-text">
  <h4>Transform your dining room with our dining chairs and tables</h4>
</div>
{{-- <h4 class="product-section-title">Dining Chairs</h4> --}}
<div class="display-product-grid">
    @foreach($diningChairs as $diningChair)
    <div>
     <div class="display-product-img-container">
        <a href="/{{$diningChair->title}}"><img src="{{$diningChair->image_url}}" class="display-product-image"></a>
     </div>
     <div class="display-product-text">
       <div class="product-button"> <a href="/{{$diningChair->title}}" class="product-link">{{$diningChair->title}}</a></div>
     </div>
    </div>
    @endforeach
</div>

{{-- <h4 class="product-section-title">Dining Tables</h4> --}}
<div class="display-product-grid">
    @foreach($diningTables as $diningTable)
    <div>
    <div class="display-product-img-container">
        <a href="/{{$diningTable->title}}"><img src="{{$diningTable->image_url}}" class="display-product-image"></a>
     </div>
     <div class="display-product-text">
       <div class="product-button"> <a href="/{{$diningTable->title}}" class="product-link">{{$diningTable->title}}</a></div>
     </div>
    </div>
    @endforeach
</div>
</main>
@endsection