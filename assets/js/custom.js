$(function () {
    $(".toggle-menu").click(function () {
        $(this).parent().children('.dt-mobile').toggleClass('active');
        $('header').toggleClass('show-shadow');
    });
    $("ul.menu-head li a").on("click", function () {
        $(".dt-mobile.active").removeClass('active');
        $(".toggle-menu.active").removeClass('active');
        $("header").removeClass('show-shadow');
    });
});

$(document).ready(function () {
    $('ul.menu-head li').click(function () {
        $('ul.menu-head li').removeClass("active");
        $(this).addClass("active");
    });
});

$(document).ready(function () {
    $('.navbar-collapse li').click(function () {
        $('.navbar-collapse li').removeClass("active");
        $(this).addClass("active");
    });
});

$(document).ready(function () {
    $('.dropdown-menu a').click(function () {
        $('.dropdown-menu a').removeClass("active");
        $(this).addClass("active");
    });
});

$(function () {
    $(".sidemenu-nav-toggler, #cursor-follower").click(function () {
        $('.sidemenu-nav-toggler').toggleClass('active');
        $('.menu-animate').toggleClass('active');
        $('.hidden-sidebar').toggleClass('open-sidebar');
    });

    $(".desktopmenu-modal-overlay").click(function () {
        $('.sidemenu-nav-toggler.active').removeClass('active');
        $('.menu-animate.active').removeClass('active');
        $('.hidden-sidebar.open-sidebar').removeClass('open-sidebar');
        $('.misconcept-nav.is-visible').removeClass('is-visible');
    });
});

$(document).ready(function () {
    $('ul.menu-list li').click(function () {
        $('ul.menu-list li').removeClass("active");
        $(this).addClass("active");
    });
});

$(document).ready(function () {
    $("ul.navbar-nav li a").on("click", function () {
        $("ul.navbar-nav li").addClass('active');
        $(".navbar-toggler").addClass('collapsed');
        $(".navbar-collapse.collapse.show").removeClass('show');
    });
});

jQuery(function($) {
    $('.popup-gallery').each(function() {
        $(this).magnificPopup({
            delegate: 'a',
            type: 'image',
            mainClass: 'mfp-img-mobile mfp-no-margins mfp-with-zoom',
            gallery: {
                enabled: !0,
                navigateByImgClick: !0,
                preload: [0, 1]
            },
            image: {
                verticalFit: !0
            },
            zoom: {
                enabled: !0,
                duration: 300
            }
        })
    })
});

var wow = new WOW(
    {
      boxClass:     'wow',      // animated element css class (default is wow)
      animateClass: 'animated', // animation css class (default is animated)
      offset:       0,          // distance to the element when triggering the animation (default is 0)
      mobile:       true,       // trigger animations on mobile devices (default is true)
      live:         true,       // act on asynchronously loaded content (default is true)
      callback:     function(box) {
        // the callback is fired every time an animation is started
        // the argument that is passed in is the DOM node being animated
      },
      scrollContainer: null,    // optional scroll container selector, otherwise use window,
      resetAnimation: true,     // reset animation on end (default is true)
    }
);
wow.init();
  
// $('.showCount').countUp({
//     delay: 10,
//     time: 1800
// });

// Initial Animation
// setTimeout(function () {
//   od.update(num);
// }, 100);

$("header .logo-nav-bar .brand").click(function () {
    jQuery('html,body').animate({
        scrollTop: 0
    }, 1500);
})

jQuery(function($) {
    // const container = document.querySelector(".livechat-girl");
    // function onMouseDrag({ movementX, movementY }) {
    //     let getContainerStyle = window.getComputedStyle(container);
    //     let leftValue = parseInt(getContainerStyle.left);
    //     let topValue = parseInt(getContainerStyle.top);
    //     container.style.left = `${leftValue + movementX}px`;
    //     container.style.top = `${topValue + movementY}px`;
    // }
    // container.addEventListener("mousedown", () => {
    //     container.addEventListener("mousemove", onMouseDrag);
    // });
    // document.addEventListener("mouseup", () => {
    //     container.removeEventListener("mousemove", onMouseDrag);
    // });
    
    //Make the DIV element draggagle:
    dragElement(document.getElementById("MoveWhatsApp"));
    
    function dragElement(elmnt) {
      var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
      if (document.getElementById(elmnt.id + "header")) {
        /* if present, the header is where you move the DIV from:*/
        document.getElementById(elmnt.id + "header").onmousedown = dragMouseDown;
      } else {
        /* otherwise, move the DIV from anywhere inside the DIV:*/
        elmnt.onmousedown = dragMouseDown;
      }
    
      function dragMouseDown(e) {
        e = e || window.event;
        e.preventDefault();
        // get the mouse cursor position at startup:
        pos3 = e.clientX;
        pos4 = e.clientY;
        document.onmouseup = closeDragElement;
        // call a function whenever the cursor moves:
        document.onmousemove = elementDrag;
      }
    
      function elementDrag(e) {
        e = e || window.event;
        e.preventDefault();
        // calculate the new cursor position:
        pos1 = pos3 - e.clientX;
        pos2 = pos4 - e.clientY;
        pos3 = e.clientX;
        pos4 = e.clientY;
        // set the element's new position:
        elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
        elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
      }
    
      function closeDragElement() {
        /* stop moving when mouse button is released:*/
        document.onmouseup = null;
        document.onmousemove = null;
      }
    }
});

