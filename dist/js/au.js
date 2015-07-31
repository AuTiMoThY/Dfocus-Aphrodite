/*--------------------------------------*\
	outthere
			by DFocus AuTiMoThY
\*--------------------------------------*/
var oldIE = false;
if ($("html").hasClass('.ie-lt9')) {
	oldIE = true;
};
if (ie<=8) {
	oldIE = true;
};

console.log(oldIE);



function viewPortWidthHeight() {
  var wh = {};
  if(window.innerWidth) {
      wh.width = window.innerWidth;
      wh.height = window.innerHeight;
  }
  else if(document.documentElement.clientWidth) {
      wh.width = document.documentElement.clientWidth;
      wh.height = document.documentElement.clientHeight;
  }
  else if(document.body.clientWidth) {
      wh.width = document.body.clientWidth;
      wh.height = document.body.clientHeight;
  }
  return wh;
}

function resizeBlock (){
	var $body = $("body"),
		$slidesLi = $(".flexslider .slides > li"),
		$indexPage = $("body.index_page"),
		viewPortWH = viewPortWidthHeight(),
		viewPortH = viewPortWH.height;
	var indexh1 = ((viewPortH - 67) / viewPortH) * 100;
	var bannerh = (768 / 904) * 100;
	var sloganh = (136 / 904) * 100;

	var bannerh1 = ((indexh1 - sloganh) / indexh1) * 100;
	var sloganh1 = indexh1 - bannerh1;

	$("#sec1").css('height', viewPortH - 67);
	$("#bannerSlider").css('height', bannerh + "%");
	$("#indexSlogan").css('height', sloganh + "%");
	// $slidesLi.css('height', viewPortH - 67 - );
}

var fancyDFAuWidthHeight = function() {
	var wh = {};
	var fancyDFAu = document.getElementById('fancyDFAu');


	if (fancyDFAu) {
		wh.width = fancyDFAu.offsetWidth;
		wh.height = fancyDFAu.offsetHeight;
	}

	return wh;
}

/*----------------------------------------------------------------------------*\
	
\*----------------------------------------------------------------------------*/
function isOpen($this, $thisClass) {
	if (!($this.hasClass('open'))) {
		$this.addClass('open');
	} else{
		$thisClass.removeClass('open');
	};
}
function fancyDFAuisOpen($this, $thisClass) {
	if (!($this.hasClass('open'))) {
		$this.addClass('open');
		fancyDFAuOpen();
	} else{
		$thisClass.removeClass('open');
		fancyDFAuClose();
	};
}

function fancyDFAuOpen() {
	$("#fancyDFAu").fadeIn(600);
	// $("html").css({'overflow-y': 'scroll'});
	console.log("fancyDFAuOpen = true")
}

function fancyDFAuClose() {
	$("#fancyDFAu").fadeOut(600);
	// $("html").css({'overflow-y': 'auto'});
	console.log("fancyDFAuOpen = false")
}

function fancyDFAuCtrl() {
	var winW = $(window).width();
	var winH = $(window).height();

	var fancyDFAu = document.getElementById('fancyDFAu');

	var fancyDFAuWH = fancyDFAuWidthHeight(),
		fancyDFAuW = fancyDFAuWH.width,
		fancyDFAuH = fancyDFAuWH.height;

	var viewPortWH = viewPortWidthHeight(),
		viewPortW = viewPortWH.width,
		viewPortH = viewPortWH.height;

	var fancyDFAuPosX = viewPortW - fancyDFAuW;
	var fancyDFAuPosY = viewPortH - fancyDFAuH;

	if(fancyDFAu) {
		$("#fancyDFAu").hide();
		// fancyDFAu.style.top = fancyDFAuPosY / 2 + 'px';
		// fancyDFAu.style.left = fancyDFAuPosX / 2 + 'px';

		$(".fancyDFAu-bg, .plan-remark, #notifications-full-close").click(function() {
			fancyDFAuisOpen($("#fancyDFAu"), $("#fancyDFAu.open"))
		});

		if ($("#fancyDFAu").hasClass('open')) {
			fancyDFAuOpen();
		}else {
			fancyDFAuClose();
		}

		$("#notifications-full").addClass('animated bounce');


	}

}

/*----------------------------------------------------------------------------*\
	
\*----------------------------------------------------------------------------*/
$(window).load(function(){
	var bannerSlider = $('#bannerSlider');
	if (bannerSlider.length) {

		$('#bannerSlider').flexslider({
			animation      : "fade",
			controlNav     : true,
			directionNav   : true,
			slideshowSpeed : 5000,
			easing: "easeInOutElastic",
			animationLoop: true,
			// initDelay: 1000,
			minItems: 1,
			maxItems: 5,
			// itemMargin: 2,
	        // move:1102,
	        // controlsContainer: $('#hcarouselcontrols .well'),
			init: function(){
				// (function () {

					var support = { animations : Modernizr.cssanimations },
						container = document.getElementById( 'ip-container' ),
						header = container.querySelector( 'header.ip-header' ),
						loader = new PathLoader( document.getElementById( 'ip-loader-circle' ) ),
						animEndEventNames = { 'WebkitAnimation' : 'webkitAnimationEnd', 'OAnimation' : 'oAnimationEnd', 'msAnimation' : 'MSAnimationEnd', 'animation' : 'animationend' },
						// animation end event name
						animEndEventName = animEndEventNames[ Modernizr.prefixed( 'animation' ) ];

					function init() {
						var onEndInitialAnimation = function() {
							if( support.animations ) {
								this.removeEventListener( animEndEventName, onEndInitialAnimation );
							}

							startLoading();
						};

						// disable scrolling
						window.addEventListener( 'scroll', noscroll );

						// initial animation
						classie.add( container, 'loading' );

						if( support.animations ) {
							container.addEventListener( animEndEventName, onEndInitialAnimation );
						}
						else {
							onEndInitialAnimation();
						}
					}

					function startLoading() {
						// simulate loading something..
						var simulationFn = function(instance) {
							var progress = 0,
								interval = setInterval( function() {
									progress = Math.min( progress + Math.random() * 0.1, 1 );

									instance.setProgress( progress );

									// reached the end
									if( progress === 1 ) {
										classie.remove( container, 'loading' );
										classie.add( container, 'loaded' );
										clearInterval( interval );

										var onEndHeaderAnimation = function(ev) {
											if( support.animations ) {
												if( ev.target !== header ) return;
												this.removeEventListener( animEndEventName, onEndHeaderAnimation );
											}

											classie.add( document.body, 'layout-switch' );
											window.removeEventListener( 'scroll', noscroll );
										};

										if( support.animations ) {
											header.addEventListener( animEndEventName, onEndHeaderAnimation );
										}
										else {
											onEndHeaderAnimation();
										}
									}
								}, 80 );
						};

						loader.setProgressFn( simulationFn );
					}
					
					function noscroll() {
						window.scrollTo( 0, 0 );
					}

					init();

				// })();

			}
		});
	};



});




$(window).on('resize', function () {
	resizeBlock();
	fancyDFAuCtrl();
});

$(function () {
	resizeBlock();
	fancyDFAuCtrl();

	$("#contactForm").validationEngine('attach', {
		promptPosition : "CenterRight: -80, 25",
		// autoPositionUpdate: true ,
		// focusFirstField: false ,
		scroll: false
	});
	$("img#justfont-badge").css({
		display: 'none',
		opacity: '0'
	});
	// if (!/*@cc_on!@*/false) {
	// 	console.log('ie?');
	// 	$.material.init('#ftCtrl');
	// }else {

	// }
	if( userAgent.match(/(msie|MSIE)/) || userAgent.match(/(T|t)rident/)  ) {
		$(".loading .ip-loader .ip-inner").append('LOADING');
	}else {
		// console.log('not ie');
		$.material.init();
	}


	$.preload();

	$('#cntWra').css('height', $('#mainPage').height);

	$(".sitemap-seg a").each(function() {
		$(this).hover(function() {
			$(this).parent().css('border-bottom', '1px solid #51a506')
		}, function() {
			$(this).parent().css('border-bottom', '1px solid #6b6b6b')
		});
	});

	var ftCtrl = 0;
	$('#ftCtrl').click(function() {
		if( userAgent.match(/(msie|MSIE)/) || userAgent.match(/(T|t)rident/)  ) {
			// console.log(' ie')
		}else {
			// console.log('not ie');
			$.material.init();
		}
		footerCtrler();
	});

	$(".sitemap-seg a").click(function(event) {
		ftCtrl = 1;
		footerCtrler();
	});

	function footerCtrler() {

		if (ftCtrl==0) {
			//  footer open
			$('footer#footerWrap').animate({bottom: '400%'}, 300, 'easeInOutQuart');
			$('#ftCtrl').animate({top: '-315px'}, 0)
			ftCtrl++
		}else {
			//  footer close
			$('footer#footerWrap').animate({bottom: '0'}, 300, 'easeInOutQuart');
			$('#ftCtrl').animate({top: '-30px'}, 0)
			ftCtrl=0
		};
	}

	function MainNavActive(){
        var nav         = $(".main_nav"),
            about       = $(".about_page"),
            product     = $(".product_page"),
            productLi     = $(".productList_page"),
            news        = $(".news_page"),
            contact        = $(".contact_page");

		if (about.length) {nav.find('.navItem1').addClass('active'); };
		if (product.length) {nav.find('.navItem2').addClass('active'); };
		if (productLi.length) {nav.find('.navItem2').addClass('active'); };
		if (news.length) {nav.find('.navItem3').addClass('active'); };
		if (contact.length) {nav.find('.navItem5').addClass('active'); };
	};
	MainNavActive();

	$(window).bind('scroll resize', function() {
		var $this = $(this),
			scroll = $this.scrollTop();

		if (scroll>=200) {

		}else {

		};
	});

})
/*
	// change color of SVG image using CSS (jQuery SVG image replacement)
	$('img.svg').each(function(){
		var $img = $(this);
		var imgID = $img.attr('id');
		var imgClass = $img.attr('class');
		var imgURL = $img.attr('src');

		$.get(imgURL, function(data) {
			// Get the SVG tag, ignore the rest
			var $svg = $(data).find('svg');
			// Add replaced image's ID to the new SVG
			if(typeof imgID !== 'undefined') {
				$svg = $svg.attr('id', imgID);
			}
			// Add replaced image's classes to the new SVG
			if(typeof imgClass !== 'undefined') {
				$svg = $svg.attr('class', imgClass+' replaced-svg');
			}
			// Remove any invalid XML tags as per http://validator.w3.org
			$svg = $svg.removeAttr('xmlns:a');
			// Replace image with new SVG
			$img.replaceWith($svg);
		}, 'xml');

	});


var $win = $(window),
	$leftAside = $('#leftAside'),
	$wsLeftAside = $('#leftAsideDontScroll'),
	_moveSpeed = 1000,	// 移動的速度
	number = 100;

$win.bind('scroll resize', function(){
	var $this = $(this);
	var MM = $this.scrollTop();

	if(MM>=150){
		$leftAside.stop().animate({
			top: 50
		}, _moveSpeed, 'easeOutQuint');
	}else {
		$leftAside.stop().animate({
			top: 290
		}, _moveSpeed, 'easeOutQuint');
	};
	

}).scroll();

$(function () {
	//#main 最小高度
	var $asideH = $('#leftAside').outerHeight(),
		$asideH2 = $wsLeftAside.outerHeight();
	$('#main').css('min-height', $asideH + 60 + 'px');
	$('#main.workshop_cnt_page').css('min-height', $asideH2 + 60 + 'px');
	$('#main.faq_page').css('min-height', $asideH2 + 60 + 'px');

	//首頁 下方 List
	$('#newsPic2').css('opacity', '0');
	$('#newsList2').hover(function() {
		$(this).css('background-color', 'rgba(255, 255, 255, 0.2)');
		$('#newsPic1').stop().animate({opacity: 0}, 500);
		$('#newsPic2').stop().animate({opacity: 1}, 500);
	}, function() {
		$(this).css('background-color', 'transparent)');
	});
	$('#newsList1').hover(function() {
		$(this).css('background-color', 'rgba(255, 255, 255, 0.2)');
		$('#newsPic2').stop().animate({opacity: 0}, 500);
		$('#newsPic1').stop().animate({opacity: 1}, 500);
	}, function() {
		$(this).css('background-color', 'transparent)');
	});

	$('#news2Pic2').css('opacity', '0');
	$('#news2List2').hover(function() {
		$(this).css('background-color', 'rgba(255, 255, 255, 0.2)');
		$('#news2Pic1').stop().animate({opacity: 0}, 500);
		$('#news2Pic2').stop().animate({opacity: 1}, 500);
	}, function() {
		$(this).css('background-color', 'transparent)');
	});
	$('#news2List1').hover(function() {
		$(this).css('background-color', 'rgba(255, 255, 255, 0.2)');
		$('#news2Pic2').stop().animate({opacity: 0}, 500);
		$('#news2Pic1').stop().animate({opacity: 1}, 500);
	}, function() {
		$(this).css('background-color', 'transparent)');
	});

	// 控制 loginBlock 顯示與否
	$('#login').stop().hover(function() {
		$(this).toggleClass('open').children('#loginBlock').stop().animate({opacity: 1}, 500);
	}, function() {
		$(this).toggleClass('open').children('#loginBlock').stop().animate({opacity: 0}, 500);
	});




	$('a.fancybox2').fancybox({
		width	    : 700,
		// minHeight	: 600,
		padding     : 0,
		margin      : 0,
		wrapCSS     : 'fancybox_style2'
	});

});
*/

