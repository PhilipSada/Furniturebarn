// const runHomeScrollAnimation = ()=>{
//     const aboutImageContainer = document.querySelector('.about-image-container');
//     const featuredCollections = document.querySelector('.featured-collections-container');
//     const socialMediaGrid = document.querySelector('.social-media-grid');
//     const tlAboutScroll = new gsap.timeline({onUpdate: debugPercentage});
//     //this function is optional as it is just for debugging purposes
//     const debugPercentage = ()=>{
//         console.log(tlServicesScroll.progress())
//     }
//     tlAboutScroll.fromTo('.about-image-container', {opacity:0}, {opacity:1, duration:4});
//     let homeController = new ScrollMagic.Controller();
//     let aboutScene = new ScrollMagic.Scene({
//         triggerElement:'.about-image-container',
//         triggerHook:1,
//         duration:aboutImageContainer.offsetHeight
//     })
//     .setTween(tlAboutScroll)
//     .addTo(homeController);
//     //featured Scroll animation
//     const tlFeaturedScroll = new gsap.timeline();
//     tlFeaturedScroll.fromTo('.featured-collections-container', {opacity:0}, {opacity:1, duration:4});
//     let featuredScene = new ScrollMagic.Scene({
//         triggerElement:'.featured-collections-container',
//         triggerHook:1,
//         duration:featuredCollections.offsetHeight
//     })
//     .setTween(tlFeaturedScroll)
//     .addTo(homeController);
//     //social media scroll animation
//     const tlSocialMediaScroll = new gsap.timeline();
//     tlSocialMediaScroll.fromTo('.left-media', {x:'-200%'}, {x:0,ease: Expo.easeOut,duration:2}).fromTo('.right-media', {x:'200%'}, {x:0, ease: Expo.easeOut,duration:2}, '>-1.8');
//     let socialMediaScene = new ScrollMagic.Scene({
//         triggerElement:'.social-media-grid',
//         triggerHook:1,
//         duration:socialMediaGrid.offsetHeight
//     })
//     .setTween(tlSocialMediaScroll)
//     .addTo(homeController);
//     //.addIndicators can be added after the setTween for debugging purposes
// }
"use strict";