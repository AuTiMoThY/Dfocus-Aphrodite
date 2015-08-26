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

function webLinkAlert1() {
	alert('連結至該分類頁面');
}

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
		viewPortW = viewPortWH.width;
		viewPortH = viewPortWH.height;
	var indexh1 = ((viewPortH - 67) / viewPortH) * 100;
	var bannerh = (768 / 904) * 100;
	var sloganh = (136 / 904) * 100;
	var bannerPaddingBottom = (768 / 1920) * 100;

	var bannerh1 = ((indexh1 - sloganh) / indexh1) * 100;
	var sloganh1 = indexh1 - bannerh1;

	
	
	
	// $slidesLi.css('height', viewPortH - 67 - );
	if (viewPortW<600) {
		$("#bannerSlider").css({
			height: '0',
			paddingBottom: bannerPaddingBottom + "%"
		});
		$("#bannerSlider li").css({
			height: '0',
			paddingBottom: bannerPaddingBottom + "%"
		});
		$("#indexSlogan").css('height', 110);
		$("#sec1").css('height', 'auto');
	}else {
		$("#bannerSlider").css({
			height: bannerh + "%",
			paddingBottom: ''
		});
		$("#bannerSlider li").css({
			height: '',
			paddingBottom: ''
		});
		$("#indexSlogan").css('height', sloganh + "%");
		$("#sec1").css('height', viewPortH - 67);
	};
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
	disableScroll();
	// $("html").css({'overflow-y': 'scroll'});
	console.log("fancyDFAuOpen = true")
}

function fancyDFAuClose() {
	$("#fancyDFAu").fadeOut(600);
	enableScroll();
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
		$("#fancyDFAu").width(winW);
		$("#fancyDFAu").height(winH);
		// fancyDFAu.style.top = fancyDFAuPosY / 2 + 'px';
		// fancyDFAu.style.left = fancyDFAuPosX / 2 + 'px';

		$(".fancyDFAu-bg, .js-openLine, #notifications-full-close").click(function() {
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
	enable Scroll or not
\*----------------------------------------------------------------------------*/
// left: 37, up: 38, right: 39, down: 40,
// spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
var keys = {37: 1, 38: 1, 39: 1, 40: 1};

function preventDefault(e) {
  e = e || window.event;
  if (e.preventDefault)
      e.preventDefault();
  e.returnValue = false;  
}

function preventDefaultForScrollKeys(e) {
    if (keys[e.keyCode]) {
        preventDefault(e);
        return false;
    }
}

function disableScroll() {
  if (window.addEventListener) // older FF
      window.addEventListener('DOMMouseScroll', preventDefault, false);
  window.onwheel = preventDefault; // modern standard
  window.onmousewheel = document.onmousewheel = preventDefault; // older browsers, IE
  window.ontouchmove  = preventDefault; // mobile
  document.onkeydown  = preventDefaultForScrollKeys;
}

function enableScroll() {
    if (window.removeEventListener)
        window.removeEventListener('DOMMouseScroll', preventDefault, false);
    window.onmousewheel = document.onmousewheel = null; 
    window.onwheel = null; 
    window.ontouchmove = null;  
    document.onkeydown = null;  
}

/*----------------------------------------------------------------------------*\
	
\*----------------------------------------------------------------------------*/


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


	// $.preload();

});
