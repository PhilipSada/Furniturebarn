@extends('layouts.home-page')

@section('title', 'FurnitureBarn')
@section('content')

<main data-barba="container" data-barba-namespace="home">
<div class='hero-container'>

    <div class="hero">
        <div class="hero-text">
            <h2>Every home has the <br/> potential to inspire</h2>
        </div>
        <div class="additional-hero-text">
            <h4>We can help to unlock that potential</h4>
        </div>
    </div>
    <div class="overlay">

    </div>
  
   
    <div class="social-icons">
        <div><i class="fa fa-facebook social-icon-white"></i></div>
        <div><i class="fa fa-instagram social-icon-white"></i></div>
        <div><i class="fa fa-twitter social-icon-white"></i></div>
    </div>
</div>
 <div class="about-container">
     <p class="about-title">HOW CAN WE HELP?</p>
    <div class="about-grid">
            <div class="about-text">
                <p class="about-first-p">At Furniturebarn, we believe that every home deserves to be transformed
                and with our contemporary bespoke furniture that can be achieved</p>
                <p class="about-second-p">
                We are a family-owned business and a Lagos based B2B and B2C that specializes in home
                interior designing and the manufacturing of contemporary bespoke furniture. We have been in
                business for over 10 years and each year we become more dedicated in manufacturing higher quality furniture
                for our clients to ensure that they are always satisfied with our products.No compromise is one of our core values as we
                never use raw materials of lower quality to make higher profits. Furthermore, paying attention to details is
                another core value of the company and this value has made our clients very loyal to us as they
                admit that this value is missing in many furniture companies in Nigeria today.
                </p>
            </div>
            <div class="about-image-container">
                <img src="/images/dining.jpg" class="about-image"/>
            </div>
    </div>
    <div class="about-heading">
        <h1>About</h1>
    </div>
</div>
 <div class="featured-collections-container index-featured-container">
    <div class="featured-text">
            <h1>Collections</h1>
    </div>
    <div class="featured-collections-grid">
        <div class="featured-content">
            <div class="featured-collections-image-container">
                <a href="/living-room"> <img src="/images/sectional.jpg" class="featured-collections-image"/></a>
             </div>
             <div class="featured-collections-text">
                 <a href="/living-room">Living Room</a>
             </div>
        </div>
       <div class="featured-content">
            <div class="featured-collections-image-container">
                <a href="/dining-room"><img src="/images/dining1.jpg" class="featured-collections-image"/></a>
            </div>
            <div class="featured-collections-text">
                <a href="/dining-room">Dining Room</a>
            </div>
       </div>
       <div class="featured-content">
            <div class="featured-collections-image-container">
                <a href="/bedroom"> <img src="/images/bed.jpg" class="featured-collections-image"/></a>
            </div>
            <div class="featured-collections-text">
                <a href="/bedroom">Bedroom</a>
            </div>
       </div>
        
    </div>
 </div>
 <div class="social-media-container">
    <div class="social-media-text">
            <div><i class="fa fa-instagram social-icon-black"></i></div>
            <h1>Instagram</h1>
            <p>See the latest furniture from @furniturebarn</p>
    </div>
    <div class="social-media-grid">
        <div class="social-media-image-container left-media">
            <img src="/images/lroom2.jpg" class="social-media-image">
        </div>
        <div class="social-media-image-container">
            <img src="/images/lroom3.jpg" class="social-media-image">
        </div>
        <div class="social-media-image-container right-media">
            <img src="/images/lroom4.jpg" class="social-media-image">
        </div>
    </div>
    
</div>
<div class="social-media-button">
    <a href="/" class="social-media-link">@furniturebarn</a>
</div>

</main>
@endsection


