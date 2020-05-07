"use strict";

// page animations
var initialPageAnimation = function initialPageAnimation() {
  var tl = gsap.timeline();
  tl.fromTo(".hamburger", {
    x: -200,
    opacity: 0
  }, {
    x: 0,
    opacity: 1,
    delay: 0.5,
    duration: 1.3
  }).fromTo(".navContact", {
    x: 200,
    opacity: 0
  }, {
    x: 0,
    opacity: 1,
    delay: 0.5,
    duration: 1.3
  }, ">-1.8").fromTo(".hero-text", {
    x: 0,
    y: 100,
    opacity: 0
  }, {
    x: 0,
    y: 0,
    opacity: 1,
    duration: 1.2
  }).fromTo(".additional-hero-text", {
    x: 0,
    y: 100,
    opacity: 0
  }, {
    x: 0,
    y: 0,
    opacity: 1,
    duration: 1.2
  }).fromTo(".social-icons", {
    x: 0,
    y: 100,
    opacity: 0
  }, {
    x: 0,
    y: 0,
    opacity: 1,
    duration: 1.2
  });
};

var delay = function delay(n) {
  return new Promise(function (done) {
    setTimeout(function () {
      done();
    }, n);
  });
};

var loadingEnter = function loadingEnter() {
  var timeline = gsap.timeline();
  timeline.fromTo('.loading-bg', {
    y: 0
  }, {
    y: '100%',
    duration: 2
  });
};

var loadingLeave = function loadingLeave() {
  var timeline = gsap.timeline();
  timeline.fromTo('.loading-bg', {
    y: '100%'
  }, {
    y: 0,
    duration: 2
  });
};

var livingRoomEnter = function livingRoomEnter() {
  var timeline = gsap.timeline();
  timeline.fromTo(".hamburger", {
    x: -200,
    opacity: 0
  }, {
    x: 0,
    opacity: 1,
    delay: 0.5,
    duration: 1.3
  }).fromTo(".navContact", {
    x: 200,
    opacity: 0
  }, {
    x: 0,
    opacity: 1,
    delay: 0.5,
    duration: 1.3
  }, ">-1.8").fromTo('.living-room-hero-text h4', {
    opacity: 0,
    y: 20
  }, {
    y: 0,
    opacity: 1,
    duration: .4,
    // stagger:.2,
    ease: 'power0.easeNone'
  });
};

var contactEnter = function contactEnter() {
  var timeline = gsap.timeline();
  timeline.fromTo(".hamburger", {
    x: -200,
    opacity: 0
  }, {
    x: 0,
    opacity: 1,
    delay: 0.5,
    duration: 1.3
  }).fromTo(".navContact", {
    x: 200,
    opacity: 0
  }, {
    x: 0,
    opacity: 1,
    delay: 0.5,
    duration: 1.3
  }, ">-1.8");
};

var diningRoomEnter = function diningRoomEnter() {
  var timeline = gsap.timeline();
  timeline.fromTo(".hamburger", {
    x: -200,
    opacity: 0
  }, {
    x: 0,
    opacity: 1,
    delay: 0.5,
    duration: 1.3
  }).fromTo(".navContact", {
    x: 200,
    opacity: 0
  }, {
    x: 0,
    opacity: 1,
    delay: 0.5,
    duration: 1.3
  }, ">-1.8").fromTo('.dining-room-hero-text h4', {
    opacity: 0,
    y: 20
  }, {
    y: 0,
    opacity: 1,
    duration: .4,
    // stagger:.2,
    ease: 'power0.easeNone'
  });
};

var bedroomEnter = function bedroomEnter() {
  var timeline = gsap.timeline();
  timeline.fromTo(".hamburger", {
    x: -200,
    opacity: 0
  }, {
    x: 0,
    opacity: 1,
    delay: 0.5,
    duration: 1.3
  }).fromTo(".navContact", {
    x: 200,
    opacity: 0
  }, {
    x: 0,
    opacity: 1,
    delay: 0.5,
    duration: 1.3
  }, ">-1.8").fromTo('.bedroom-hero-text h4', {
    opacity: 0,
    y: 20
  }, {
    y: 0,
    opacity: 1,
    duration: .4,
    // stagger:.2,
    ease: 'power0.easeNone'
  });
};

var singleProductEnter = function singleProductEnter() {
  var timeline = gsap.timeline();
  timeline.fromTo(".hamburger", {
    x: -200,
    opacity: 0
  }, {
    x: 0,
    opacity: 1,
    delay: 0.5,
    duration: 1.3
  }).fromTo(".navContact", {
    x: 200,
    opacity: 0
  }, {
    x: 0,
    opacity: 1,
    delay: 0.5,
    duration: 1.3
  }, ">-1.8");
};

var emailConfirmationEnter = function emailConfirmationEnter() {
  var timeline = gsap.timeline();
  timeline.fromTo(".hamburger", {
    x: -200,
    opacity: 0
  }, {
    x: 0,
    opacity: 1,
    delay: 0.5,
    duration: 1.3
  }).fromTo(".navContact", {
    x: 200,
    opacity: 0
  }, {
    x: 0,
    opacity: 1,
    delay: 0.5,
    duration: 1.3
  }, ">-1.8");
};

var faqsEnter = function faqsEnter() {
  var timeline = gsap.timeline();
  timeline.fromTo(".hamburger", {
    x: -200,
    opacity: 0
  }, {
    x: 0,
    opacity: 1,
    delay: 0.5,
    duration: 1.3
  }).fromTo(".navContact", {
    x: 200,
    opacity: 0
  }, {
    x: 0,
    opacity: 1,
    delay: 0.5,
    duration: 1.3
  }, ">-1.8");
}; //Scroll Magic Animation


var runHomeScrollAnimation = function runHomeScrollAnimation() {
  var aboutImageContainer = document.querySelector('.about-image-container');
  var featuredCollections = document.querySelector('.index-featured-container');
  var socialMediaGrid = document.querySelector('.social-media-grid');
  var tlAboutScroll = new gsap.timeline({
    onUpdate: debugPercentage
  }); //this function is optional as it is just for debugging purposes

  var debugPercentage = function debugPercentage() {
    console.log(tlServicesScroll.progress());
  };

  tlAboutScroll.fromTo('.about-image-container', {
    opacity: 0
  }, {
    opacity: 1,
    duration: 4
  });
  var homeController = new ScrollMagic.Controller();
  var aboutScene = new ScrollMagic.Scene({
    triggerElement: '.about-image-container',
    triggerHook: 1,
    duration: aboutImageContainer.offsetHeight
  }).setTween(tlAboutScroll).addTo(homeController); //featured Scroll animation

  var tlFeaturedScroll = new gsap.timeline();

  if (window.screen.width > 1200) {
    tlFeaturedScroll.fromTo('.index-featured-container', {
      opacity: 0
    }, {
      opacity: 1,
      duration: 4
    });
    var featuredScene = new ScrollMagic.Scene({
      triggerElement: '.index-featured-container',
      triggerHook: 1,
      duration: featuredCollections.offsetHeight
    }).setTween(tlFeaturedScroll).addTo(homeController);
  } else {
    tlFeaturedScroll.kill();
  } //social media scroll animation


  var tlSocialMediaScroll = new gsap.timeline();

  if (window.screen.width > 1200) {
    tlSocialMediaScroll.fromTo('.left-media', {
      x: '-200%'
    }, {
      x: 0,
      ease: Expo.easeOut,
      duration: 2
    }).fromTo('.right-media', {
      x: '200%'
    }, {
      x: 0,
      ease: Expo.easeOut,
      duration: 2
    }, '>-1.8');
    var socialMediaScene = new ScrollMagic.Scene({
      triggerElement: '.social-media-grid',
      triggerHook: 1,
      duration: socialMediaGrid.offsetHeight
    }).setTween(tlSocialMediaScroll).addTo(homeController);
  } else {
    tlSocialMediaScroll.kill();
  } //.addIndicators can be added after the setTween for debugging purposes 

};

barba.init({
  sync: true,
  transitions: [{
    name: 'home-transition',
    from: {
      namespace: ['contact', 'living-room', 'dining-room', 'bedroom', 'faqs', 'single-product', 'mail-confirmation']
    },
    to: {
      namespace: ['home']
    },
    leave: function leave(data) {
      var done;
      return regeneratorRuntime.async(function leave$(_context) {
        while (1) {
          switch (_context.prev = _context.next) {
            case 0:
              done = this.async();
              console.log('leaving-page-animations');
              loadingLeave();
              _context.next = 5;
              return regeneratorRuntime.awrap(delay(1500));

            case 5:
              done();

            case 6:
            case "end":
              return _context.stop();
          }
        }
      }, null, this);
    },
    enter: function enter(data) {
      return regeneratorRuntime.async(function enter$(_context2) {
        while (1) {
          switch (_context2.prev = _context2.next) {
            case 0:
              console.log('entering-page-animations');
              loadingEnter();
              initialPageAnimation();
              runHomeScrollAnimation();

            case 4:
            case "end":
              return _context2.stop();
          }
        }
      });
    },
    once: function once(data) {
      return regeneratorRuntime.async(function once$(_context3) {
        while (1) {
          switch (_context3.prev = _context3.next) {
            case 0:
              initialPageAnimation();
              runHomeScrollAnimation();

            case 2:
            case "end":
              return _context3.stop();
          }
        }
      });
    }
  }, {
    name: 'living-room-transition',
    from: {
      namespace: ['home', 'contact', 'dining-room', 'bedroom', 'faqs', 'single-product', 'mail-confirmation']
    },
    to: {
      namespace: ['living-room']
    },
    leave: function leave(data) {
      var done;
      return regeneratorRuntime.async(function leave$(_context4) {
        while (1) {
          switch (_context4.prev = _context4.next) {
            case 0:
              done = this.async();
              console.log('leaving-page-animations');
              loadingLeave();
              _context4.next = 5;
              return regeneratorRuntime.awrap(delay(1500));

            case 5:
              done();

            case 6:
            case "end":
              return _context4.stop();
          }
        }
      }, null, this);
    },
    enter: function enter(data) {
      return regeneratorRuntime.async(function enter$(_context5) {
        while (1) {
          switch (_context5.prev = _context5.next) {
            case 0:
              console.log('entering-page-animations');
              loadingEnter();
              livingRoomEnter();

            case 3:
            case "end":
              return _context5.stop();
          }
        }
      });
    }
  }, {
    name: 'contact-transition',
    from: {
      namespace: ['home', 'living-room', 'dining-room', 'bedroom', 'faqs', 'single-product', 'mail-confirmation']
    },
    to: {
      namespace: ['contact']
    },
    leave: function leave(data) {
      var done;
      return regeneratorRuntime.async(function leave$(_context6) {
        while (1) {
          switch (_context6.prev = _context6.next) {
            case 0:
              done = this.async();
              console.log('leaving-page-animations');
              loadingLeave();
              _context6.next = 5;
              return regeneratorRuntime.awrap(delay(1500));

            case 5:
              done();

            case 6:
            case "end":
              return _context6.stop();
          }
        }
      }, null, this);
    },
    enter: function enter(data) {
      return regeneratorRuntime.async(function enter$(_context7) {
        while (1) {
          switch (_context7.prev = _context7.next) {
            case 0:
              console.log('entering-page-animations');
              loadingEnter();
              contactEnter();

            case 3:
            case "end":
              return _context7.stop();
          }
        }
      });
    }
  }, {
    name: 'dining-room-transition',
    from: {
      namespace: ['home', 'living-room', 'contact', 'bedroom', 'faqs', 'single-product', 'mail-confirmation']
    },
    to: {
      namespace: ['dining-room']
    },
    leave: function leave(data) {
      var done;
      return regeneratorRuntime.async(function leave$(_context8) {
        while (1) {
          switch (_context8.prev = _context8.next) {
            case 0:
              done = this.async();
              console.log('leaving-page-animations');
              loadingLeave();
              _context8.next = 5;
              return regeneratorRuntime.awrap(delay(1500));

            case 5:
              done();

            case 6:
            case "end":
              return _context8.stop();
          }
        }
      }, null, this);
    },
    enter: function enter(data) {
      return regeneratorRuntime.async(function enter$(_context9) {
        while (1) {
          switch (_context9.prev = _context9.next) {
            case 0:
              console.log('entering-page-animations');
              loadingEnter();
              diningRoomEnter();

            case 3:
            case "end":
              return _context9.stop();
          }
        }
      });
    }
  }, {
    name: 'bedroom-transition',
    from: {
      namespace: ['home', 'living-room', 'contact', 'dining-room', 'faqs', 'single-product', 'mail-confirmation']
    },
    to: {
      namespace: ['bedroom']
    },
    leave: function leave(data) {
      var done;
      return regeneratorRuntime.async(function leave$(_context10) {
        while (1) {
          switch (_context10.prev = _context10.next) {
            case 0:
              done = this.async();
              console.log('leaving-page-animations');
              loadingLeave();
              _context10.next = 5;
              return regeneratorRuntime.awrap(delay(1500));

            case 5:
              done();

            case 6:
            case "end":
              return _context10.stop();
          }
        }
      }, null, this);
    },
    enter: function enter(data) {
      return regeneratorRuntime.async(function enter$(_context11) {
        while (1) {
          switch (_context11.prev = _context11.next) {
            case 0:
              console.log('entering-page-animations');
              loadingEnter();
              bedroomEnter();

            case 3:
            case "end":
              return _context11.stop();
          }
        }
      });
    }
  }, {
    name: 'single-product-transition',
    from: {
      namespace: ['home', 'living-room', 'contact', 'dining-room', 'faqs', 'bedroom', 'mail-confirmation']
    },
    to: {
      namespace: ['single-product']
    },
    leave: function leave(data) {
      var done;
      return regeneratorRuntime.async(function leave$(_context12) {
        while (1) {
          switch (_context12.prev = _context12.next) {
            case 0:
              done = this.async();
              console.log('leaving-page-animations');
              loadingLeave();
              _context12.next = 5;
              return regeneratorRuntime.awrap(delay(1500));

            case 5:
              done();

            case 6:
            case "end":
              return _context12.stop();
          }
        }
      }, null, this);
    },
    enter: function enter(data) {
      return regeneratorRuntime.async(function enter$(_context13) {
        while (1) {
          switch (_context13.prev = _context13.next) {
            case 0:
              console.log('entering-page-animations');
              loadingEnter();
              singleProductEnter();

            case 3:
            case "end":
              return _context13.stop();
          }
        }
      });
    }
  }, {
    name: 'faqs-transition',
    from: {
      namespace: ['home', 'living-room', 'contact', 'dining-room', 'single-product', 'bedroom', 'mail-confirmation']
    },
    to: {
      namespace: ['faqs']
    },
    leave: function leave(data) {
      var done;
      return regeneratorRuntime.async(function leave$(_context14) {
        while (1) {
          switch (_context14.prev = _context14.next) {
            case 0:
              done = this.async();
              console.log('leaving-page-animations');
              loadingLeave();
              _context14.next = 5;
              return regeneratorRuntime.awrap(delay(1500));

            case 5:
              done();

            case 6:
            case "end":
              return _context14.stop();
          }
        }
      }, null, this);
    },
    enter: function enter(data) {
      return regeneratorRuntime.async(function enter$(_context15) {
        while (1) {
          switch (_context15.prev = _context15.next) {
            case 0:
              console.log('entering-page-animations');
              loadingEnter();
              faqsEnter();

            case 3:
            case "end":
              return _context15.stop();
          }
        }
      });
    }
  }, {
    name: 'mail-confirmation-transition',
    from: {
      namespace: ['home', 'living-room', 'contact', 'dining-room', 'single-product', 'bedroom', 'faqs']
    },
    to: {
      namespace: ['mail-confirmation']
    },
    leave: function leave(data) {
      var done;
      return regeneratorRuntime.async(function leave$(_context16) {
        while (1) {
          switch (_context16.prev = _context16.next) {
            case 0:
              done = this.async();
              console.log('leaving-page-animations');
              loadingLeave();
              _context16.next = 5;
              return regeneratorRuntime.awrap(delay(1500));

            case 5:
              done();

            case 6:
            case "end":
              return _context16.stop();
          }
        }
      }, null, this);
    },
    enter: function enter(data) {
      return regeneratorRuntime.async(function enter$(_context17) {
        while (1) {
          switch (_context17.prev = _context17.next) {
            case 0:
              console.log('entering-page-animations');
              loadingEnter();
              emailConfirmationEnter();

            case 3:
            case "end":
              return _context17.stop();
          }
        }
      });
    }
  }],
  views: [// {
  //     namespace: 'index',
  //     beforeLeave(data) {
  //       // do something before leaving the current `index` namespace
  //     }
  //   }, 
  {
    namespace: 'living-room',
    afterEnter: function afterEnter(data) {
      loadingEnter();
      livingRoomEnter();
    },
    beforeEnter: function beforeEnter(data) {
      window.scrollTo(0, 0);
    }
  }, {
    namespace: 'dining-room',
    afterEnter: function afterEnter(data) {
      loadingEnter();
      diningRoomEnter();
    },
    beforeEnter: function beforeEnter(data) {
      window.scrollTo(0, 0);
    }
  }, {
    namespace: 'bedroom',
    afterEnter: function afterEnter(data) {
      loadingEnter();
      bedroomEnter();
    },
    beforeEnter: function beforeEnter(data) {
      window.scrollTo(0, 0);
    }
  }, {
    namespace: 'single-product',
    afterEnter: function afterEnter(data) {
      loadingEnter();
      singleProductEnter();
    },
    beforeEnter: function beforeEnter(data) {
      window.scrollTo(0, 0);
    }
  }, {
    namespace: 'faqs',
    afterEnter: function afterEnter(data) {
      loadingEnter();
      faqsEnter();
    },
    beforeEnter: function beforeEnter(data) {
      window.scrollTo(0, 0);
    }
  }, {
    namespace: 'mail-confirmation',
    afterEnter: function afterEnter(data) {
      loadingEnter();
      emailConfirmationEnter();
    },
    beforeEnter: function beforeEnter(data) {
      window.scrollTo(0, 0);
    }
  }, {
    namespace: 'contact',
    afterEnter: function afterEnter(data) {
      loadingEnter();
      contactEnter();
    },
    beforeEnter: function beforeEnter(data) {
      window.scrollTo(0, 0);
    }
  }, {
    namespace: 'home',
    beforeEnter: function beforeEnter(data) {
      initialPageAnimation();
      runHomeScrollAnimation();
      window.scrollTo(0, 0);
    }
  }]
});