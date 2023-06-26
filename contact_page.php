<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="keywords" Content="">
  <link rel="canonical" href="">
  <meta name="keywords" itemprop="keywords" content="">
  <meta property="fb:app_id" content="" />
  <meta name="robots" content="index, follow">
  <meta name="robots" content="noodp">
  <meta property="og:locale" content="en_US">
  <meta property="og:type" content="website">
  <meta property="og:title" content="">
  <meta property="og:description" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <meta property="og:site_name" content="">
  <meta name="twitter:card" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:title" content="">
  <link rel="shortcut icon" type="image/x-icon" href="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="Distribution" content="Global" />
  <meta name="page-topic" content="">
  <meta name="Rating" content="General">
  <meta name="Revisit-after" content="7 Days" />
  <meta name="site" content="">
  <meta name="technologies" content="">
  <meta name="description" content="">
  <meta name="author" content="Nidheesh [UI/UX Designer & Developer]">
  <link rel="icon" href="#">
  <title>Welcome to Ehafiz</title>
  <!-- Core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="css/fontawesome-pro.css" rel="stylesheet">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.9.0/css/all.css">
  <link href="fonts/cerapro.css" rel="stylesheet" media="none" onload="if(media!='all')media='all'">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=devanagari" rel="stylesheet" media="none" onload="if(media!='all')media='all'">


  <link href="css/fullpage.min.css" rel="stylesheet">

  <link href="css/aos.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.1/css/flag-icon.min.css" rel="stylesheet">
  <link href="css/richa.css" rel="stylesheet">
  <link href="css/media-query.css">
  <link href="css/hover-min.css" rel="stylesheet" media="none" onload="if(media!='all')media='all'">
  <link href="css/animate.min.css" rel="stylesheet" media="none" onload="if(media!='all')media='all'">
</head>
<style type="text/css">
  #actions{
    position:fixed;
    top: 73px;
    left: 30px;
    z-index: 99999;
  }
  #actions a{
    background: rgba(0,0,0,0.8);
    padding: 7px;
    margin: 2px;
    color: #ccc;
    display: inline-block;
  }
  #actions a:hover{
    color: #fff;
    background: #81A140;
  }
</style>
<body>

<?php include 'header.php';?>
<!--<ul id="menu">
    <li data-menuanchor="firstPage" class="active"><a href="#firstPage">First slide</a></li>
    <li data-menuanchor="secondPage"><a href="#secondPage">Second slide</a></li>
    <li data-menuanchor="3rdPage"><a href="#3rdPage">Third slide</a></li>
  </ul>-->


<!--<div id="actions">
    <a id="moveSectionUp" href="#">moveSectionUp</a>
    <a id="moveSectionDown" href="#">moveSectionDown</a>
  </div>-->

  <div id="fullpage">
<?php include 'contact.php';?>
<?php include 'fullfooter.php';?>
    </div>



<!-- All JS Should be Placed at the end of the document so the pages load faster -->
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.1/jquery.flexslider.min.js"></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.1.0/masonry.pkgd.min.js"></script>-->
<script src="js/fullpage.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.19/jquery.touchSwipe.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.4/TweenMax.min.js"></script>
<script src="js/custom.js"></script>

<script>
     $('.center-item-slider').slick({
    /*centerMode: true,*/
    centerPadding: '60px',
    autoplay: true,
    arrows:false,
    autoplaySpeed: 4000,
    slidesToShow: 3,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 3
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });
  
</script>

<script>
    $('#myCarousel').carousel({
  interval: 4000
})

$('.carousel .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));
  
  for (var i=0;i<2;i++) {
    next=next.next();
    if (!next.length) {
    	next = $(this).siblings(':first');
  	}
    
    next.children(':first-child').clone().appendTo($(this));
  }
});
</script>

<script>
    jQuery(document).ready(function($) {
	//create the slider
	$('.cd-testimonials-wrapper').flexslider({
		selector: ".cd-testimonials > li",
		animation: "slide",
		controlNav: true,
		slideshow: true,
		smoothHeight: true,
		start: function() {
			$('.cd-testimonials').children('li').css({
				'opacity': 1,
				'position': 'relative'
			});
		}
	});
});
</script>

<script>
    jQuery(document).ready(function($) {

	var feedbackSlider = jQuery('.feedback-slider');
	feedbackSlider.owlCarousel({
		items: 1,
		nav: true,
		dots: true,
		autoplay: true,
		loop: true,
		mouseDrag: true,
		touchDrag: true,
		navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
		responsive:{

			// breakpoint from 767 up
			767:{
				nav: true,
				dots: false
			}
		}
	});

	feedbackSlider.on("translate.owl.carousel", function(){
		$(".feedback-slider-item h3").removeClass("animated fadeIn").css("opacity", "0");
		$(".feedback-slider-item img, .feedback-slider-thumb img, .customer-rating").removeClass("animated zoomIn").css("opacity", "0");
	});

	feedbackSlider.on("translated.owl.carousel", function(){
		$(".feedback-slider-item h3").addClass("animated fadeIn").css("opacity", "1");
		$(".feedback-slider-item img, .feedback-slider-thumb img, .customer-rating").addClass("animated zoomIn").css("opacity", "1");
	});
	feedbackSlider.on('changed.owl.carousel', function(property) {
		var current = property.item.index;
		var prevThumb = $(property.target).find(".owl-item").eq(current).prev().find("img").attr('src');
		var nextThumb = $(property.target).find(".owl-item").eq(current).next().find("img").attr('src');
		var prevRating = $(property.target).find(".owl-item").eq(current).prev().find('span').attr('data-rating');
		var nextRating = $(property.target).find(".owl-item").eq(current).next().find('span').attr('data-rating');
		$('.thumb-prev').find('img').attr('src', prevThumb);
		$('.thumb-next').find('img').attr('src', nextThumb);
		$('.thumb-prev').find('span').next().html(prevRating + '<i class="fa fa-star"></i>');
		$('.thumb-next').find('span').next().html(nextRating + '<i class="fa fa-star"></i>');
	});
	$('.thumb-next').on('click', function() {
		feedbackSlider.trigger('next.owl.carousel', [300]);
		return false;
	});
	$('.thumb-prev').on('click', function() {
		feedbackSlider.trigger('prev.owl.carousel', [300]);
		return false;
	});
	
}); //end ready
</script>

<script>
TweenLite.set(".cardWrapper", {perspective:800});
TweenLite.set(".card", {transformStyle:"preserve-3d"});
TweenLite.set(".back", {rotationY:-180});
TweenLite.set([".back", ".front"], {backfaceVisibility:"hidden"});

$(".cardWrapper").hover(
  function() {
    TweenLite.to($(this).find(".card"), 1.2, {rotationY:180, ease:Back.easeOut});
  },
  function() {
    TweenLite.to($(this).find(".card"), 1.2, {rotationY:0, ease:Back.easeOut});  
  }
);

TweenMax.staggerTo($(".card"), 1, {rotationY:-180, repeat:1, yoyo:true}, 0.1);
</script>


<script type="text/javascript">
        //using document ready...
        $(document).ready(function(){

            //initialising fullpage.js in the jQuery way
            $('#fullpage').fullpage({
                sectionsColor: ['#fff', '#F8F9F9', '#F4F6F6', '#F2F3F4', '#fff', '#F8F9F9'],
                navigation: true,
                slideSelector: '.horizontal-scrolling',
                slidesNavigation: true,
                navigationPosition: 'left',
                /*navigationTooltips: ['First page', 'Second page', 'Third and last page'],*/
                responsiveWidth: 900,
                afterResponsive: function(isResponsive){

        }
            });

            // calling fullpage.js methods using jQuery
            $('#moveSectionUp').click(function(e){
                e.preventDefault();
                $.fn.fullpage.moveSectionUp();
            });

            $('#moveSectionDown').click(function(e){
                e.preventDefault();
                $.fn.fullpage.moveSectionDown();
            });
        });
    </script>


<!--[if lt IE 9]><script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script><![endif]-->
</body>
</html>