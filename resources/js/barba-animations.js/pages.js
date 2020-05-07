// page animations
const initialPageAnimation = ()=>{
    let tl = gsap.timeline()
  
    tl.fromTo(
        ".hamburger",
        {
          x: -200,
          opacity: 0,
        },
        {
          x: 0,
          opacity: 1,
          delay: 0.5,
          duration: 1.3,
        }
    )
        .fromTo(
          ".navContact",
          {
            x: 200,
            opacity: 0,
          },
          {
            x: 0,
            opacity: 1,
            delay: 0.5,
            duration: 1.3,
          },
          ">-1.8"
    )
    .fromTo(
      ".hero-text",
      {
        x: 0,
        y: 100,
        opacity: 0,
      },
      {
        x: 0,
        y: 0,
        opacity: 1,
        duration: 1.2,
      }
    ).fromTo(
        ".additional-hero-text",
        {
            x: 0,
            y: 100,
           opacity: 0,
        },
        {
            x: 0,
            y: 0,
            opacity: 1,
            duration: 1.2,
        }
        
    ).fromTo(
        ".social-icons",
        {
            x: 0,
            y: 100,
           opacity: 0,
        },
        {
            x: 0,
            y: 0,
            opacity: 1,
            duration: 1.2,
        }
        
    )
  }
const delay = (n)=>{
  return new Promise((done)=>{
      setTimeout(()=>{
       done();
      }, n)
  })
}
 const loadingEnter = ()=>{
     let timeline = gsap.timeline();
     timeline.fromTo('.loading-bg',
     {
        y:0,

     }, {
        y:'100%',
        duration:2
     })
 }
 const loadingLeave = ()=>{
     let timeline = gsap.timeline();
     timeline.fromTo('.loading-bg',
     {
        y:'100%',

     }, {
        y:0,
        duration:2
     })
}
 const livingRoomEnter = ()=>{
     let timeline = gsap.timeline();
     timeline.fromTo(
        ".hamburger",
        {
          x: -200,
          opacity: 0,
        },
        {
          x: 0,
          opacity: 1,
          delay: 0.5,
          duration: 1.3,
        }
    )
        .fromTo(
          ".navContact",
          {
            x: 200,
            opacity: 0,
          },
          {
            x: 0,
            opacity: 1,
            delay: 0.5,
            duration: 1.3,
          },
          ">-1.8"
    )
    .fromTo('.living-room-hero-text h4', {
        opacity:0,
        y:20
     },
     {  
        y:0,
        opacity:1,
        duration:.4,
        // stagger:.2,
        ease:'power0.easeNone'


     })
 }
 const contactEnter = ()=>{
    let timeline = gsap.timeline();
    timeline.fromTo(
       ".hamburger",
       {
         x: -200,
         opacity: 0,
       },
       {
         x: 0,
         opacity: 1,
         delay: 0.5,
         duration: 1.3,
       }
   )
       .fromTo(
         ".navContact",
         {
           x: 200,
           opacity: 0,
         },
         {
           x: 0,
           opacity: 1,
           delay: 0.5,
           duration: 1.3,
         },
         ">-1.8"
   )
 }
 const diningRoomEnter = ()=>{
    let timeline = gsap.timeline();
    timeline.fromTo(
       ".hamburger",
       {
         x: -200,
         opacity: 0,
       },
       {
         x: 0,
         opacity: 1,
         delay: 0.5,
         duration: 1.3,
       }
   )
       .fromTo(
         ".navContact",
         {
           x: 200,
           opacity: 0,
         },
         {
           x: 0,
           opacity: 1,
           delay: 0.5,
           duration: 1.3,
         },
         ">-1.8"
   ).fromTo('.dining-room-hero-text h4', {
    opacity:0,
    y:20
 },
 {  
    y:0,
    opacity:1,
    duration:.4,
    // stagger:.2,
    ease:'power0.easeNone'


 })
 }
 const bedroomEnter = ()=>{
    let timeline = gsap.timeline();
    timeline.fromTo(
       ".hamburger",
       {
         x: -200,
         opacity: 0,
       },
       {
         x: 0,
         opacity: 1,
         delay: 0.5,
         duration: 1.3,
       }
   )
       .fromTo(
         ".navContact",
         {
           x: 200,
           opacity: 0,
         },
         {
           x: 0,
           opacity: 1,
           delay: 0.5,
           duration: 1.3,
         },
         ">-1.8"
   ).fromTo('.bedroom-hero-text h4', {
    opacity:0,
    y:20
 },
 {  
    y:0,
    opacity:1,
    duration:.4,
    // stagger:.2,
    ease:'power0.easeNone'


 })
 }
 const singleProductEnter = ()=>{
    let timeline = gsap.timeline();
    timeline.fromTo(
       ".hamburger",
       {
         x: -200,
         opacity: 0,
       },
       {
         x: 0,
         opacity: 1,
         delay: 0.5,
         duration: 1.3,
       }
   )
       .fromTo(
         ".navContact",
         {
           x: 200,
           opacity: 0,
         },
         {
           x: 0,
           opacity: 1,
           delay: 0.5,
           duration: 1.3,
         },
         ">-1.8"
   )
 }
 const emailConfirmationEnter = ()=>{
    let timeline = gsap.timeline();
    timeline.fromTo(
       ".hamburger",
       {
         x: -200,
         opacity: 0,
       },
       {
         x: 0,
         opacity: 1,
         delay: 0.5,
         duration: 1.3,
       }
   )
       .fromTo(
         ".navContact",
         {
           x: 200,
           opacity: 0,
         },
         {
           x: 0,
           opacity: 1,
           delay: 0.5,
           duration: 1.3,
         },
         ">-1.8"
   )
 }
 const faqsEnter = ()=>{
    let timeline = gsap.timeline();
    timeline.fromTo(
       ".hamburger",
       {
         x: -200,
         opacity: 0,
       },
       {
         x: 0,
         opacity: 1,
         delay: 0.5,
         duration: 1.3,
       }
   )
       .fromTo(
         ".navContact",
         {
           x: 200,
           opacity: 0,
         },
         {
           x: 0,
           opacity: 1,
           delay: 0.5,
           duration: 1.3,
         },
         ">-1.8"
   )
 }
 //Scroll Magic Animation
 const runHomeScrollAnimation = ()=>{
  
    const aboutImageContainer = document.querySelector('.about-image-container');
    const featuredCollections = document.querySelector('.index-featured-container');
    const socialMediaGrid = document.querySelector('.social-media-grid');
    const tlAboutScroll = new gsap.timeline({onUpdate: debugPercentage});
  
    //this function is optional as it is just for debugging purposes
    const debugPercentage = ()=>{
        console.log(tlServicesScroll.progress())
    }
  
    tlAboutScroll.fromTo('.about-image-container', {opacity:0}, {opacity:1, duration:4});
  
    let homeController = new ScrollMagic.Controller();
    let aboutScene = new ScrollMagic.Scene({
        triggerElement:'.about-image-container',
        triggerHook:1,
        duration:aboutImageContainer.offsetHeight
    })
    .setTween(tlAboutScroll)
    .addTo(homeController);
  
    //featured Scroll animation
  
    const tlFeaturedScroll = new gsap.timeline();
    if(window.screen.width > 1200){
      tlFeaturedScroll.fromTo('.index-featured-container', {opacity:0}, {opacity:1, duration:4});
      let featuredScene = new ScrollMagic.Scene({
          triggerElement:'.index-featured-container',
          triggerHook:1,
          duration:featuredCollections.offsetHeight
      })
      .setTween(tlFeaturedScroll)
      .addTo(homeController);
    } else{
      tlFeaturedScroll.kill();
    }
   
  
  
    //social media scroll animation
    const tlSocialMediaScroll = new gsap.timeline();
    if(window.screen.width > 1200){
      tlSocialMediaScroll.fromTo('.left-media', {x:'-200%'}, {x:0,ease: Expo.easeOut,duration:2}).fromTo('.right-media', {x:'200%'}, {x:0, ease: Expo.easeOut,duration:2}, '>-1.8');
      let socialMediaScene = new ScrollMagic.Scene({
          triggerElement:'.social-media-grid',
          triggerHook:1,
          duration:socialMediaGrid.offsetHeight
      })
      .setTween(tlSocialMediaScroll)
      .addTo(homeController);
    }else{
      tlSocialMediaScroll.kill();
    }
   
  
    //.addIndicators can be added after the setTween for debugging purposes 
   
 
}
barba.init({
    sync:true,
    transitions:[
        {
            name:'home-transition',
            from:{
                namespace:['contact', 'living-room', 'dining-room', 'bedroom', 'faqs','single-product', 'mail-confirmation']
            },
            to:{
                namespace:['home']
            },
            async leave(data){
                const done = this.async();
                console.log('leaving-page-animations');
                loadingLeave();
                await delay(1500);
                done();
            },
            async enter(data){
                console.log('entering-page-animations');
                loadingEnter();
                initialPageAnimation();
                runHomeScrollAnimation();
            },
            async once(data){
                initialPageAnimation();
                runHomeScrollAnimation();
            }
           
        },
        {
            name:'living-room-transition',
            from:{
                namespace:['home', 'contact', 'dining-room', 'bedroom', 'faqs','single-product', 'mail-confirmation']
            },
            to:{
                namespace:['living-room']
            },
            async leave(data){
                const done = this.async();
                console.log('leaving-page-animations');
                loadingLeave();
                await delay(1500);
                done();
            },
            async enter(data){
                console.log('entering-page-animations');
                loadingEnter();
                livingRoomEnter();
            },
           
        },
        {
            name:'contact-transition',
            from:{
                namespace:['home', 'living-room', 'dining-room', 'bedroom', 'faqs','single-product', 'mail-confirmation']
            },
            to:{
                namespace:['contact']
            },
            async leave(data){
                const done = this.async();
                console.log('leaving-page-animations');
                loadingLeave();
                await delay(1500);
                done();
            },
            async enter(data){
                console.log('entering-page-animations');
                loadingEnter();
                contactEnter();
            },
           
        },
        {
            name:'dining-room-transition',
            from:{
                namespace:['home', 'living-room', 'contact', 'bedroom', 'faqs','single-product', 'mail-confirmation']
            },
            to:{
                namespace:['dining-room']
            },
            async leave(data){
                const done = this.async();
                console.log('leaving-page-animations');
                loadingLeave();
                await delay(1500);
                done();
            },
            async enter(data){
                console.log('entering-page-animations');
                loadingEnter();
                diningRoomEnter();
            },
           
        },
        {
            name:'bedroom-transition',
            from:{
                namespace:['home', 'living-room', 'contact', 'dining-room', 'faqs','single-product', 'mail-confirmation']
            },
            to:{
                namespace:['bedroom']
            },
            async leave(data){
                const done = this.async();
                console.log('leaving-page-animations');
                loadingLeave();
                await delay(1500);
                done();
            },
            async enter(data){
                console.log('entering-page-animations');
                loadingEnter();
                bedroomEnter();
            },
           
        },
        {
            name:'single-product-transition',
            from:{
                namespace:['home', 'living-room', 'contact', 'dining-room', 'faqs','bedroom', 'mail-confirmation']
            },
            to:{
                namespace:['single-product']
            },
            async leave(data){
                const done = this.async();
                console.log('leaving-page-animations');
                loadingLeave();
                await delay(1500);
                done();
            },
            async enter(data){
                console.log('entering-page-animations');
                loadingEnter();
               singleProductEnter();
            },
           
        },
        {
            name:'faqs-transition',
            from:{
                namespace:['home', 'living-room', 'contact', 'dining-room', 'single-product','bedroom', 'mail-confirmation']
            },
            to:{
                namespace:['faqs']
            },
            async leave(data){
                const done = this.async();
                console.log('leaving-page-animations');
                loadingLeave();
                await delay(1500);
                done();
            },
            async enter(data){
                console.log('entering-page-animations');
                loadingEnter();
                faqsEnter();
            },
           
        },
        {
            name:'mail-confirmation-transition',
            from:{
                namespace:['home', 'living-room', 'contact', 'dining-room', 'single-product','bedroom', 'faqs']
            },
            to:{
                namespace:['mail-confirmation']
            },
            async leave(data){
                const done = this.async();
                console.log('leaving-page-animations');
                loadingLeave();
                await delay(1500);
                done();
            },
            async enter(data){
                console.log('entering-page-animations');
                loadingEnter();
                emailConfirmationEnter();
            },
           
        },
       
    ],
    views: [
            // {
            //     namespace: 'index',
            //     beforeLeave(data) {
            //       // do something before leaving the current `index` namespace
            //     }
            //   }, 
            {
                namespace: 'living-room',
                afterEnter(data) {
                    loadingEnter();
                    livingRoomEnter();
             },
             beforeEnter(data){
                 window.scrollTo(0,0);
             }
               
           },
            {
                namespace: 'dining-room',
                afterEnter(data) {
                    loadingEnter();
                    diningRoomEnter();
             },
             beforeEnter(data){
                 window.scrollTo(0,0);
             }
               
           },
            {
                namespace: 'bedroom',
                afterEnter(data) {
                    loadingEnter();
                    bedroomEnter();
             },
             beforeEnter(data){
                 window.scrollTo(0,0);
             }
               
           },
            {
                namespace: 'single-product',
                afterEnter(data) {
                    loadingEnter();
                    singleProductEnter();
             },
             beforeEnter(data){
                 window.scrollTo(0,0);
             }
               
           },
            {
                namespace: 'faqs',
                afterEnter(data) {
                    loadingEnter();
                  faqsEnter();
             },
             beforeEnter(data){
                 window.scrollTo(0,0);
             }
               
           },
            {
                namespace: 'mail-confirmation',
                afterEnter(data) {
                    loadingEnter();
                 emailConfirmationEnter();
             },
             beforeEnter(data){
                 window.scrollTo(0,0);
             }
               
           },
            {
                namespace: 'contact',
                afterEnter(data) {
                    loadingEnter();
                    contactEnter();
             }, 
             beforeEnter(data){
              window.scrollTo(0,0);
              }
               
           },
            {
                namespace: 'home',
                beforeEnter(data) {
                    initialPageAnimation();
                    runHomeScrollAnimation();
                    window.scrollTo(0,0);
             },
               
           },
    ]        
});