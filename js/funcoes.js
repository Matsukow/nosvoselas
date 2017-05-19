// $(document).ready(function(){
//     function filterPath(string) {
//         return string
//         .replace(/^\//,'')
//         .replace(/(index|default).[a-zA-Z]{3,4}$/,'')
//         .replace(/\/$/,'');
//         }

//         $('a[href*=#]').each(function() {

//             if ( filterPath(location.pathname) == filterPath(this.pathname)

//                 && location.hostname == this.hostname
//                 && this.hash.replace(/#/,'') ) {

//                     var $targetId = $(this.hash), $targetAnchor = $('[name=' + this.hash.slice(1) +']');
//                     var $target = $targetId.length ? $targetId : $targetAnchor.length ? $targetAnchor : false;
                    
//                     if ($target) {
// 	                    var targetOffset = $target.offset().top;
// 	                    $(this).click(function() {
// 		                    $('html, body').animate({scrollTop: targetOffset}, 500);
// 		                    return false;
// 	                    });
//                     }
//                 }
//         });
// });

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
          // $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            // $target.focus();
          };
        });
      }
    }
  });

$(window).ready(function(){
	$('.redimensiona-modal').click(function(){
	    if ($(window).width() <= 750) {
			CentralizarModal();
		} else if ($(window).width() > 750){
			DescentralizarModal();
		}
	});

	if ($(window).width() <= 991) {
		// $('#pg2-img-10').attr('src','images/case2/foto-pequena/1-26-horizontal.jpg');
		$('#pg2-img-10').attr('src','images/case2/foto-pequena/2-novo.png');
	} else if ($(window).width() > 991) {
		$('#pg2-img-10').attr('src','images/case2/foto-pequena/1-26.png');
	}

	if ($(window).width() <= 768) {
		$('.pg2-img-11').attr('src','images/case2/foto-pequena/3-novo.png');
	} else if ($(window).width() > 768) {
		$('.pg2-img-11').attr('src','images/case2/foto-pequena/20.jpg');
	}
});

function CenterItem(theItem){
	var winWidth=$(window).width();
	var winHeight=$(window).height();
	var windowCenter=winWidth/2;
	var itemCenter=$(theItem).width()/2;
	var theCenter=windowCenter-itemCenter;
	var windowMiddle=winHeight/2;
	var itemMiddle=$(theItem).height()/2;
	var theMiddle=windowMiddle-itemMiddle;
	winWidth>$(theItem).width() ? $(theItem).animate({'left':theCenter},300) : $(theItem).animate({'left':'0'},300);
	winHeight>$(theItem).height() ? $(theItem).animate({'top':theMiddle},300) : $(theItem).animate({'top':'0'},300);
}

function CentralizarModal(){
	$(function() {

		$('.modal-content').css({
				'position' : 'absolute',
				'left' : '50%',
				'top' : '50%',
				'margin-left' : -$('.modal-content').outerWidth()/2,
				'margin-top' : -$('.modal-content').outerHeight()/2
			});
	});
}

function DescentralizarModal(){
	$(function() {
		$('.modal-content').css({
		    'position' : 'absolute',
		    'left' : '0',
		    'top' : '0',
		    'margin-left' : 40,
		    'margin-top' : 26.5,
		});
	});
}

$(window).resize(function() {
	if ($(window).width() <= 750) {
		CentralizarModal();
	} else if ($(window).width() > 750){
		DescentralizarModal();
	}
});

$(window).resize(function() {
	if ($(window).width() <= 991) {
		$('#pg2-img-10').attr('src','images/case2/foto-pequena/2-novo.png');
	} else if ($(window).width() > 991) {
		$('#pg2-img-10').attr('src','images/case2/foto-pequena/1-26.png');
	}
});

$(window).resize(function() {
	if ($(window).width() <= 768) {
		$('.pg2-img-11').attr('src','images/case2/foto-pequena/3-novo.png');
	} else if ($(window).width() > 768) {
		$('.pg2-img-11').attr('src','images/case2/foto-pequena/20.jpg');
	}
});

// MODAL DA GALERIA DE FOTOS DOS PORTFOLIOS
function openModal() {

    document.getElementById('myModal').style.display = "block";

    var scrollBarWidth = window.innerWidth - document.body.offsetWidth;


    // PRA RETIRAR O SCROLL VERTICAL DUPLO
    $('html').css({
		'overflow-y' : 'hidden',
	});

	$('body').css({
		'overflow-y' : 'hidden',
	});
}

function closeModal() {

    document.getElementById('myModal').style.display = "none";

    var scrollBarWidth = window.innerWidth + document.body.offsetWidth;

    $('body').css({
    // marginRight: scrollBarWidth,
    	marginRight: 0,
    	overflowY: 'auto'
    });

     $('html').css({
		'overflow-y' : 'auto',
	});

	$('body').css({
		'overflow-y' : 'auto',
	});
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");

    if (n > slides.length) {slideIndex = 1}

    if (n < 1) {slideIndex = slides.length}

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" ativo", "");
    }

    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " ativo";
    captionText.innerHTML = dots[slideIndex-1].alt;
}