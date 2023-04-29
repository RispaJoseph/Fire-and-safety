<!DOCTYPE html>
<html lang="en">

<head>
	<title>Exertion an Industrial Category Bootstrap Responsive Website Template | Home :: w3layouts</title>
	<!-- Meta Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Exertion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta Tags -->
	<!-- Style-sheets -->
	<link href="../temp/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="../temp/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="../temp/css/fontawesome-all.css" rel="stylesheet">
	<!--// Style-sheets -->
		<link rel="stylesheet" type="text/css" href="../temp/css/easy-responsive-tabs.css " />
	<!--web-fonts-->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700,800" rel="stylesheet">
	<!--//web-fonts-->
    </head>
    	<section class="banner">

            
       <div class="container">
		<!-- banner-text -->
			<div class="banner-text">
				<div class="callbacks_container">
					<ul class="rslides" id="slider3">
						<li>
							<div class="slider-info text-left">
								
								<h1 class="text-left">High Quality Materials In All Solutions</h1>
								<a href="about.html" class="text-left">Read More</a>
							</div>
						</li>
						<li>
							<div class="slider-info text-left">
								
								<h4 class="text-left">We Provide Extended Maintenance</h4>
								<a href="about.html" class="text-left">Read More</a>
							</div>
						</li>
						<li>
							<div class="slider-info text-left">
								
								<h4 class="text-left">High Quality Materials In All Solutions</h4>
								<a href="about.html" class="text-left">Read More</a>
							</div>
						</li>
					</ul>

				</div>
			</div>
		</div>
	</section>
	<!-- //banner -->
     <!-- Required common Js -->
     <script src="../temp/js/jquery.min.js"></script>
    <!-- //Required common Js -->
	<!-- Responsiveslides -->
	<script src="../temp/js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 4
			$("#slider3").responsiveSlides({
				auto: true,
				pager: true,
				nav: false,
				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
	<!-- // Responsiveslides -->
	<script src="../temp/js/easyResponsiveTabs.js"></script>
	<!--Plug-in Initialisation-->
	<script type="text/javascript">
		$(document).ready(function () {

			//Vertical Tab
			$('#parentVerticalTab').easyResponsiveTabs({
				type: 'vertical', //Types: default, vertical, accordion
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				tabidentify: 'hor_1', // The tab groups identifier
				activate: function (event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#nested-tabInfo2');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
		});
	</script>

	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- Js for bootstrap working-->
	<script src="js/bootstrap.min.js"></script>
	<!-- //Js for bootstrap working -->
</body>

</html>