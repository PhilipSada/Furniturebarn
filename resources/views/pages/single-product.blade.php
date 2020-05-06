@extends('layouts.home-page')

@section('title',"{{$product->title}}")

@section('content')
<main data-barba="container" data-barba-namespace="single-product">
  <div class="otherPagesNav">

  </div>
  <div class="single-product-grid">
      <div class="single-product-image-container">
        <img src="{{$product->image_url}}" class="single-product-image">
    </div>
    <div class="single-product-text">
      <h4>{{$product->title}}</h4>
      <p>{{$product->description}}</p>

      <p>If interested in making this furniture based on your specifications, please feel free to contact us</p>
      <a href="/contact" class="single-product-contact">Contact</a>
    </div>
  </div>
 
  <div class="similar-products">
    <h4 class="similar-products-section-title">You may also like</h4>
    <div class="similar-product-grid">
      @foreach($similarProducts as $similarProduct)
      <div>
      <div class="similar-product-img-container">
          <a href="/{{$similarProduct->title}}"><img src="{{$similarProduct->image_url}}" class="similar-product-image"></a>
       </div>
       <div class="similar-product-text">
         <div class="similar-product-button"> <a href="{{$similarProduct->title}}" class="similar-product-link">{{$similarProduct->title}}</a></div>
       </div>
      </div>
      @endforeach
  </div>
  </div>
  <div class="featured-collections-container">
    <div class="featured-text">
            <h1>Collections</h1>
    </div>
    <div class="featured-collections-grid">
        <div class="featured-content">
            <div class="featured-collections-image-container">
                <a href="/living-room"> <img src="/images/sectional.png" class="featured-collections-image"/></a>
             </div>
             <div class="featured-collections-text">
                 <a href="/living-room">Living Room</a>
             </div>
        </div>
       <div class="featured-content">
            <div class="featured-collections-image-container">
                <a href="/dining-room"><img src="/images/dining1.png" class="featured-collections-image"/></a>
            </div>
            <div class="featured-collections-text">
                <a href="/dining-room">Dining Room</a>
            </div>
       </div>
       <div class="featured-content">
            <div class="featured-collections-image-container">
                <a href="/bedroom"> <img src="/images/bed.png" class="featured-collections-image"/></a>
            </div>
            <div class="featured-collections-text">
                <a href="/bedroom">Bedroom</a>
            </div>
       </div>
        
    </div>
 </div>
</main>
@endsection