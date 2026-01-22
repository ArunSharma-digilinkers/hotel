'use strict';


$('.testimonials').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
	autoplay:true,
	autoplayTimeout:3000,
	autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})



function changeImage(imageElement) {
    var largeImage = document.getElementById("large-image");
    largeImage.src = imageElement.src;
}


//////// Change theme light-dark mode
//Toggle class dark on body
// Run script only on pages where theme button is given
const themeBtn = document.getElementById('theme-btn');
if(themeBtn) {
	const activeMode = document.querySelectorAll('.active-mode');
	const currentTheme = localStorage.getItem("theme");
	if (currentTheme == "dark") {
		document.body.classList.add("dark");
	}
	themeBtn.addEventListener('change', () => {
		document.body.classList.toggle('dark');
	
		activeMode.forEach(function(el) {
			el.classList.toggle('hidden');
		});
	
		let theme = "light";
		if(document.body.classList.contains("dark")) {
			theme = "dark";
		}
		localStorage.setItem("theme", theme);
	});
}


const faqItems = document.querySelectorAll('.faq-item');

faqItems.forEach((item) => {
  const question = item.querySelector('.faq-question');
  const icon = question.querySelector('.icon');

  question.addEventListener('click', () => {
    // Close all
    faqItems.forEach((el) => {
      if (el !== item) {
        el.classList.remove('active');
        el.querySelector('.icon').textContent = '+';
      }
    });

    // Toggle current
    item.classList.toggle('active');
    icon.textContent = item.classList.contains('active') ? '−' : '+';
  });
});

// Initialize Swiper
// Cube effect
var swiper = new Swiper(".mySwiper", {
	effect: "cube",
	grabCursor: true,
	pauseOnMouseEnter: true,
    speed: 2000,
	loop: true,
	autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
	cubeEffect: {
		shadow: false,
		slideShadows: true,
		shadowOffset: 20,
		shadowScale: 0.94,
	},
	pagination: {
		el: ".swiper-pagination",
	},
});
// Initialize Swiper
// Flip effect
var swiper = new Swiper(".flipSwiper", {
	effect: "flip",
	grabCursor: true,
	pauseOnMouseEnter: true,
    speed: 2000,
	loop: true,
	autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
	pagination: {
		el: ".swiper-pagination",
	},
	navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

//////// Sticky Navbar
$(window).scroll(function() {
	if ($(document).scrollTop() > 200	) {
		$(".navbar").addClass("customNav");
	} else {
		$(".navbar").removeClass("customNav");
	}
});

// Add class active
$(document).ready(function() {
	var url = window.location.href;
	$('.myNav-nav a[href="url"]').parent().addClass('active');
	$('.myNav-nav a').filter(function() {
		return this.href == url;
	}).parent().addClass('active');
});

// Dropdown menu
$(document).ready(function() {
    $(".hidden-menu").click(function() {
		$(this).parent('.dropdown-nav').children('.sub-drop').toggleClass("sub-menu sub-menu-small");
    });
	
	$(".menu-list-sm li").click(function() {
		$(this).children(".menu-sublist-sm").toggleClass("menu-sublist-sm-vis");
	});
});

// Toggle menu function
$(document).ready(function() {
    $('.menu-toggle').click(function() {
        $('.nav-container').toggleClass('mob-container');
    });
});



// PERCENTAGE JAVASCRIPT 

$(document).ready(function () {
	$('.line-progress').each(function () {
		var progressBar = $(this);
		var percentage = parseFloat(progressBar.data('percent'));
		var colorStops = getColorStops(percentage);
  
		// Initial styling
		progressBar.css({
			'background': 'linear-gradient(to right, ' + colorStops.join(', ') + ')',
			'width': '0%' // Set initial width to 0 for animation
		});
  
		// Intersection Observer to run animation when the element is in the viewport
		var observer = new IntersectionObserver(function (entries) {
			entries.forEach(function (entry) {
				if (entry.isIntersecting) {
					// Trigger the animation if the element is in the viewport
					if (!isNaN(percentage) && percentage > 0) {
						var displayPercentage = percentage % 1 === 0 ? Math.round(percentage) : percentage.toFixed(2);
						progressBar.append('<div class="progress-text">' + displayPercentage + '%</div>');
  
						// Update tooltip content with combined percentage text and quality description with color class
						var qualityDescription = getQualityDescription(percentage);
						var tooltipContent = 'Property Score:<br><span class="text-' + qualityDescription.colorClass + '">' + displayPercentage + '% - ' + qualityDescription.text + '</span>';
						progressBar.attr('title', tooltipContent);
  
						// Animate the width of the progress bar
						progressBar.animate({
							'width': percentage + '%'
						}, 1000); // Adjust the duration as needed
  
						// Unobserve the element after the animation has been triggered
						observer.unobserve(progressBar[0]);
					}
				}
			});
		}, {
			threshold: 0.1 // Trigger when 10% of the element is visible
		});
  
		// Start observing the progress bar element
		observer.observe(progressBar[0]);
	});
  
	function getColorStops(percentage) {
		if (percentage >= 0 && percentage <= 25) {
			return ['#EE324B', '#EE324B'];
		} else if (percentage > 25 && percentage <= 50) {
			return ['#EE324B', '#F66026'];
		} else if (percentage > 50 && percentage <= 75) {
			return ['#F66026', '#F3B407'];
		} else if (percentage > 75 && percentage <= 100) {
			return ['#F3B407', '#6FD913'];
		}
	}
  
	function getQualityDescription(percentage) {
		if (percentage <= 25) {
			return { text: 'Poor', colorClass: 'danger' };
		} else if (percentage <= 50) {
			return { text: 'Fair', colorClass: 'warning' };
		} else if (percentage <= 75) {
			return { text: 'Good', colorClass: 'info' };
		} else {
			return { text: 'Excellent', colorClass: 'success' };
		}
	}
});