$(document).ready(function() {
  //PRELOADER
  setTimeout(function(){
		$('body').addClass('loaded');
	}, 800);
  // fade in header text
  $('nav, body').fadeIn(3000);
  $('#header-effect1').fadeIn(6000);
  $('#header-effect2').fadeIn(10000);
  //modal code
  $('#resModal').on('shown.bs.modal', function () {
    $('#modalTrig').trigger('focus')
  })
    //gridder
    // REMOVE AND ADD CLICK EVENT
    $('.doAddItem').on('click', function() {
      $(".gridder").data('gridderExpander').gridderAddItem('TEST');
    });
    // Call Gridder
    $(".gridder").gridderExpander({
      scrollOffset: 60,
      scrollTo: "panel", // "panel" or "listitem"
      animationSpeed: 400,
      animationEasing: "easeInOutExpo",
      showNav: true, // Show Navigation
      nextText: "", // Next button text
      prevText: "", // Previous button text
      closeText: "", // Close button text
      onStart: function() {
        console.log("Gridder Inititialized");
      },
      onExpanded: function(object) {
        console.log("Gridder Expanded");
      },
      onChanged: function(object) {
        console.log("Gridder Changed");
      },
      onClosed: function() {
        console.log("Gridder Closed");
      }
    });
    // Select all links with hashes
    $('a[href*="#"]')
      // Remove links that don't actually link to anything
      .not('[href="#"]')
      .not('[href="#0"]')
      .click(function(event) {
        // On-page links
        if (
          location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
          &&
          location.hostname == this.hostname
        ) {
          // Figure out element to scroll to
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          // Does a scroll target exist?
          if (target.length) {
            // Only prevent default if animation is actually gonna happen
            event.preventDefault();
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000, function() {
              // Callback after animation
              // Must change focus!
              var $target = $(target);
              $target.focus();
              if ($target.is(":focus")) { // Checking if the target was focused
                return false;
              } else {
                $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                $target.focus(); // Set focus again
              }
            });
          }
        }
      });
});

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if ($(document).width() > 600) {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("topBtn").style.display = "block";
    } else {
        document.getElementById("topBtn").style.display = "none";
    }
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
