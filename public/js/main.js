'use strict';

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