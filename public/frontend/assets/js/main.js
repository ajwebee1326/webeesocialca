 // header
$(document).ready(function () {
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll >= 10) {
      $(".navbar").addClass("navbar_fixed");
    } else {
      $(".navbar").removeClass("navbar_fixed");
    }
  });
});
// scroll magic
$(function () {
  var controller = new ScrollMagic.Controller();

  var slides = new TimelineMax()

    // .to("#slideContainer", 0.5, {z: -150})

    .to("#slideContainer", 1, {
      x: "-25%",
    })

    .to("#slideContainer", 0.5, {
      z: 0,
    })

    // .to("#slideContainer", 0.5, {z: -150, delay: 1})

    .to("#slideContainer", 1, {
      x: "-50%",
    })

    .to("#slideContainer", 0.5, {
      z: 0,
    })

    // .to("#slideContainer", 0.5, {z: -150, delay: 1})

    .to("#slideContainer", 1, {
      x: "-75%",
    })

    .to("#slideContainer", 0.5, {
      z: 0,
    });

  var scene = new ScrollMagic.Scene({
    triggerElement: "#pinContainer",

    triggerHook: "onLeave",

    duration: "400%",
  })

    .setPin("#pinContainer")

    .setTween(slides)

    // .addIndicators()

    .addTo(controller);
});

$(".slider-single").slick({
  autoplay: false,

  adaptiveHeight: true,

  prevArrow:
    "<div class='arrow-left'><span><img src='images/arrow-left-thin.svg'></span></div>",

  nextArrow:
    "<div class='arrow-right'><span><img src='images/arrow-right-thin.svg'></span></div>",
});

$(".services-slider").slick({
  autoplay: true,

  adaptiveHeight: true,

  prevArrow:
    "<div class='arrow-left'><span><img src='images/arrow-left-thin.svg'></span></div>",

  nextArrow:
    "<div class='arrow-right'><span><img src='images/arrow-right-thin.svg'></span></div>",
});
$(".review-slider").slick({
  autoplay: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  infinite: false,
  arrows: true,
  responsive: [
    {
      breakpoint: 1199,

      settings: {
        slidesToShow: 3,

        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 991,

      settings: {
        slidesToShow: 2,

        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 768,

      settings: {
        slidesToShow: 1,

        slidesToScroll: 1,
        dots: true,
      },
    },
  ],
});
$(".client-list").slick({
  infinite: true,

  autoplay: true,

  slidesToShow: 4,

  slidesToScroll: 4,

  arrows: false,

  dots: true,

  responsive: [
    {
      breakpoint: 1199,

      settings: {
        slidesToShow: 3,

        slidesToScroll: 3,
      },
    },
  ],
});
$(document).ready(function () {
  $(".dropdown").click(function () {
    $(".dropdown-menu").toggle();
  });
 
  
});
// Type Text
const typedTextSpan = document.querySelector(".typed-text");
const cursorSpan = document.querySelector(".cursor");

const textArray = ["Social Media", "Ad Campaigns", "Web Development", "SEO", "Web Analytics", "Digital Marketing"];
const typingDelay = 100;
const erasingDelay = 100;
const newTextDelay = 1000; // Delay between current and next text
let textArrayIndex = 0;
let charIndex = 0;

function type() {
  if (charIndex < textArray[textArrayIndex].length) {
    if(!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
    typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
    charIndex++;
    setTimeout(type, typingDelay);
  } 
  else {
    cursorSpan.classList.remove("typing");
      setTimeout(erase, newTextDelay);
  }
}

function erase() {
    if (charIndex > 0) {
    if(!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
    typedTextSpan.textContent = textArray[textArrayIndex].substring(0, charIndex-1);
    charIndex--;
    setTimeout(erase, erasingDelay);
  } 
  else {
    cursorSpan.classList.remove("typing");
    textArrayIndex++;
    if(textArrayIndex>=textArray.length) textArrayIndex=0;
    setTimeout(type, typingDelay + 1100);
  }
}

document.addEventListener("DOMContentLoaded", function() {
  if(textArray.length) setTimeout(type, newTextDelay + 250);
});
// Our Work


