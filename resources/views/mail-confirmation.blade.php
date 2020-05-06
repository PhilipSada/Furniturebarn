@extends('layouts.home-page')

@section('title','Enquiry Received')

@section('content')
<main data-barba="container" data-barba-namespace="mail-confirmation">
<div class="otherPagesNav">

</div>
<div class="mail-confirmation-heading">
    <h4>We have received your enquiry. We will get back to you within 2-3 working days</h4>
    <h4>Want to see more of our collections?</h4>
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