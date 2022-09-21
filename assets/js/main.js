const body = document.body;
const select = (e) => document.querySelector(e);
const selectAll = (e) => document.querySelectorAll(e);

//intro

const tl = gsap.timeline({defaults: {ease: "power1.out"}});

window.onload = (event) => {
  tl.to(".img-intro", {y: "0%", duration: 1, stagger:0.25});
  tl.to(".bar", {width: "100%", duration: 2.5, stagger:0.25});


  tl.to(".intro", {
      duration: .8,
      top: "-100%",
      ease: "Power4.easeInOut",
  delay: 0.5
  });

  // tl.fromTo('.menuatas', { opacity: 0, y:-50  }, {opacity:1, duration:1, y:0, }, '-=0.5');
  // tl.fromTo('.logo img', { opacity: 0, y:60  }, {opacity:1, duration:1, y:0, }, '-=1');
  // tl.fromTo('.item-header', { opacity: 0, y:60  }, {opacity:0.8, duration:0.8, y:0, }, '-=1');
  // tl.fromTo('.whatapp', { opacity: 0, x: "100%"  }, {opacity:1, duration:1, x:"0%", }, '+=0');
};

function owlfasilitas() {
  $(document).ready(function() {
    var owl2 = $('.slider');
    owl2.owlCarousel({
      items:1,
      loop: true,
      autoplay:false,
      navs: true,
      autoplaySpeed:1000,
      smartSpeed:1500,
      margin : 12,
      dots:false,
      touchDrag  : false,
 mouseDrag  : false

      
     
    });
    $('.cusNext').click(function() {
        owl2.trigger('next.owl.carousel');
    })
    // Go to the previous item
    $('.cusPrev').click(function() {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        owl2.trigger('prev.owl.carousel', [600]);
    })

  });
}


function initSmoothScroll() {

  scroll = new LocomotiveScroll({
    el: document.querySelector('[data-scroll-container]'),
    smooth: true,
    tablet: {
      smooth: true,
      breakpoint: 0,
  },
    mobile: {
      smooth: true,
    },
    
  });

  window.onresize = scroll.update();

  scroll.on("scroll", () => ScrollTrigger.update());
  
  

  ScrollTrigger.scrollerProxy('[data-scroll-container]', {
    scrollTop(value) {
      return arguments.length ? scroll.scrollTo(value, 0, 0) : scroll.scroll.instance.scroll.y;
    }, // we don't have to define a scrollLeft because we're only scrolling vertically.
    getBoundingClientRect() {
      return {top: 0, left: 0, width: window.innerWidth, height: window.innerHeight};
    },
    // LocomotiveScroll handles things completely differently on mobile devices - it doesn't even transform the container at all! So to get the correct behavior and avoid jitters, we should pin things with position: fixed on mobile. We sense it by checking to see if there's a transform applied to the container (the LocomotiveScroll-controlled element).
    pinType: document.querySelector('[data-scroll-container]').style.transform ? "transform" : "fixed"
  });

  ScrollTrigger.defaults({
    scroller: document.querySelector('[data-scroll-container]'),
  });

  /**
   * Remove Old Locomotive Scrollbar
   */

  const scrollbar = selectAll('.c-scrollbar');

  if(scrollbar.length > 1) {
    scrollbar[0].remove();
  }

  // each time the window updates, we should refresh ScrollTrigger and then update LocomotiveScroll. 
  ScrollTrigger.addEventListener('refresh', () => scroll.update());

  // after everything is set up, refresh() ScrollTrigger and update LocomotiveScroll because padding may have been added for pinning, etc.
  ScrollTrigger.refresh();

};


  



window.addEventListener("load", function () {

  initSmoothScroll();
  owlfasilitas();
  
  
  
  
    
  
  });