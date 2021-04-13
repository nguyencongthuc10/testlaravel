

$('.js-nav-search-toggle').focus(function(){
	$(this).parents('.nav-search').addClass('is-open');
});
$('.js-nav-search-toggle').blur(function(){
	$(this).parents('.nav-search').removeClass('is-open');
});


$('ul.nav li.dropdown').hover(function() {
              $(this).find('.dropdown-menu').stop(true, true).delay(50).fadeIn(500);
            }, function() {
              $(this).find('.dropdown-menu').stop(true, true).delay(50).fadeOut(500);
            });

 var swiper = new Swiper('.swiper-container', {
      speed: 600,
      parallax: true,
       loop:true,
       autoplay:true,
      pagination: {
        el: '.swiper-pagination',

        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });

  $(".swiper-container").hover(function() {
        (this).swiper.autoplay.stop();
    }, function() {
        (this).swiper.autoplay.start();
    });

/* Navbar desktop sticky navbar
---------------------------------------------------------------------------*/

// //khi cuộn chuột menu fixed
$(window).scroll(function() {
	if ($(this).scrollTop() >= 44) {
		$('#st-navbar-desktop-wrapper').addClass('st-navbar-desktop-fixed');
	}
	else {
		$('#st-navbar-desktop-wrapper').removeClass('st-navbar-desktop-fixed');
	}
});



/* Navbar desktop superfish
---------------------------------------------------------------------------*/





/* Navbar mobile
-------------------------------------------------------*/

// Navbar mobile adds .dropdown-menu to ul.sub-menu
$('#st-navbar-mobile-wrapper ul.sub-menu').each(function() {
	$(this).addClass('st-navbar-mobile-dropdown-menu');
});


// Navbar mobile toggle
$('.st-navbar-mobile-toggle').click(function(){
	$(this).toggleClass('open');
	$('.st-navbar-mobile-nav-collapse').toggleClass('in').slideToggle(230);
	var $this = $('li.st-submenu-open');
	if ($this.length) {
		$this.removeClass('st-submenu-open').children('ul.sub-menu').slideUp(230);
	}
	return false;
});


// Navbar mobile dropdowns
$('#st-navbar-mobile-wrapper .st-navbar-mobile-nav > li > ul.sub-menu').each(function() {
	var parentWithUl = $(this).parent('li');
	parentWithUl.addClass('st-submenu-parent');
	parentWithUl.prepend('<a href="#" class="st-submenu-toggle"><i class="fa fa-caret-down fa-lg"></i></a>');
	parentWithUl.children('.st-submenu-toggle').click(function(e) {
		e.preventDefault();
		var $this = $(this).parent('.st-submenu-parent');
		$this.siblings('li.st-submenu-open').removeClass('st-submenu-open').children('.sub-menu').slideUp(230);
		$('.st-navbar-mobile-nav > li > ul.sub-menu li.st-submenu-open').removeClass('st-submenu-open').children('.sub-menu').slideUp(230);
		$this.toggleClass('st-submenu-open');
		if ($this.hasClass('st-submenu-open')) {
			$this.children('.sub-menu').slideDown(230);
		} else {
			$this.children('.sub-menu').slideUp(230);
		}
		return false;
	});
});

$('#st-navbar-mobile-wrapper .st-navbar-mobile-nav > li > ul.sub-menu > li > ul.sub-menu').each(function() {
	var parentWithUl = $(this).parent('li');
	parentWithUl.addClass('st-submenu-parent');
	parentWithUl.prepend('<a href="#" class="st-submenu-toggle"><i class="fa fa-caret-down fa-lg"></i></a>');
	parentWithUl.children('.st-submenu-toggle').click(function(e) {
		e.preventDefault();
		var $this = $(this).parent('.st-submenu-parent');
		$this.siblings('li.st-submenu-open').removeClass('st-submenu-open').children('.sub-menu').slideUp(230);
		$('.st-navbar-mobile-nav > li > ul.sub-menu > li > ul.sub-menu li.st-submenu-open').removeClass('st-submenu-open').children('.sub-menu').slideUp(230);
		$this.toggleClass('st-submenu-open');
		if ($this.hasClass('st-submenu-open')) {
			$this.children('.sub-menu').slideDown(230);
		} else {
			$this.children('.sub-menu').slideUp(230);
		}
		return false;
	});
});


$('#st-navbar-mobile-wrapper .st-navbar-mobile-nav > li > ul.sub-menu > li > ul.sub-menu > li > ul.sub-menu').each(function() {
	var parentWithUl = $(this).parent('li');
	parentWithUl.addClass('st-submenu-parent');
	parentWithUl.prepend('<a href="#" class="st-submenu-toggle"><i class="fa fa-caret-down fa-lg"></i></a>');
	parentWithUl.children('.st-submenu-toggle').click(function(e) {
		e.preventDefault();
		var $this = $(this).parent('.st-submenu-parent');
		$this.siblings('li.st-submenu-open').removeClass('st-submenu-open').children('.sub-menu').slideUp(230);
		$this.toggleClass('st-submenu-open');
		if ($this.hasClass('st-submenu-open')) {
			$this.children('.sub-menu').slideDown(230);
		} else {
			$this.children('.sub-menu').slideUp(230);
		}
		return false;
	});
});





/* Navbar mobile close menu click stage
-------------------------------------------------------*/

$(document).click(function() {
	
	$('.st-navbar-mobile-nav li.st-submenu-parent').removeClass('st-submenu-open');
	$('.st-navbar-mobile-nav li.st-submenu-parent ul.sub-menu').slideUp(230);
	$('.st-navbar-mobile-nav li.st-submenu-parent ul.sub-menu').css({'display': 'none'});
});




//cam ket auto text text typer

var currentText = 0;

var headerText = ["Bảo trì - sửa chữa", "Đúng tiến độ", "Không phát sinh chi phí", "Đồng hành cùng khách hàng"];

var divText = document.getElementById("text-to-toggle");

document.onload = setTimeout(function(){changeHeaderText();}, 200);

function changeHeaderText()
{
    
    if (currentText === headerText.length - 1) currentText = 0;
    else currentText += 1;
    
    deleteHeaderText();

}

function deleteHeaderText()
{
    
    if (divText.innerHTML.length === 0) setTimeout(function(){typeHeaderText();}, 100);
    
    else
    {
        
        divText.innerHTML = divText.innerHTML.substring(0, divText.innerHTML.length - 1);
        
        setTimeout(function(){deleteHeaderText();}, 100);
        
    }
    
}

function typeHeaderText()
{
    
    if (divText.innerHTML.length === headerText[currentText].length) setTimeout(function(){changeHeaderText();}, 2000);
    
    else
    {
        
        divText.innerHTML = headerText[currentText].substring(0, divText.innerHTML.length + 1);
        
        setTimeout(function(){typeHeaderText();}, 100);
        
    }
    
}
// end



// couter
/*!
* jquery.counterup.js 1.0
*
* Copyright 2013, Benjamin Intal http://gambit.ph @bfintal
* Released under the GPL v2 License
*
* Date: Nov 26, 2013
*/
$('.box').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: Number($(this).attr("data-duration")),
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
// end

// back-to-top=================
var btn = $('#button');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});
// end==============




$(document).ready(function() {
 
  $("#owl-demo").owlCarousel({
 
      autoPlay: 3000, //Set AutoPlay to 3 seconds
 
      items : 4,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]
 
  });
 
});

 $(function() {
        $(document).scroll(function() {
            var $nav = $("#mainNavbar");
            $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
        });
    });
