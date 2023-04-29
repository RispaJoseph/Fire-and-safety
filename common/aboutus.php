<?php
include("top.php");
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

		<div class="container py-4 mt-2">
			<h3 class="tittle text-center mb-3">About Us</h3>
			<div class="row about-tp pt-4 mt-md-4">
				<div class="col-lg-6 welcome-left">
					<h3>Welcome</h3>
					<h4>Our services are completely mobile, allowing customers to access services at their place of business, when it suits them. You can keep your business running efficiently without major disruption from our testing technicians. After we have completed testing, we provide customers with a detailed report, as well as a record for each device. Maintaining your fire protection compliance is easy when you have an ongoing relationship with our Fire Safety.</h4>
				</div>
				<div class="col-lg-6 welcome-right">
					<div class="welcome-right-top">
						<img src="images/ccc.jpg" alt="" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //about -->
	
	<!-- Footer -->
	<footer class="footer-section py-5">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-4 footer-grids">
					<h3>Get in touch</h3>
					<p>0926k 4th block building,Kalamassery, </p>
					<p class="my-2"> Ernakulam,INDIAN</p>
					<p class="phone">phone: 9037555222</p>
					<p class="phone my-2">Fax: 8127555222</p>
					<p class="phone">Mail:
						<a href="mailto:fireequipment@safety.com">fireequipment@safety.com</a>
					</p>
				</div>
				<div class="col-lg-4 footer-grids">
					<h2>Latest Works</h2>
					<div class="d-flex justify-content-around">
						<a href="#" class="col-4">
							<img src="../temp/images/aaaa.jpg" class="img-fluid" alt="Responsive image">
						</a>
						<a href="#" class="col-4">
							<img src="../temp/images/bbb.jpg" class="img-fluid" alt="Responsive image">
						</a>
						<a href="#" class="col-4">
							<img src="../temp/images/g1.jpg" class="img-fluid" alt="Responsive image">
						</a>
					</div>
					<div class="d-flex justify-content-around">
						<a href="#" class="col-4">
							<img src="../temp/images/g2.jpg" class="img-fluid" alt="Responsive image">
						</a>
						<a href="#" class="col-4">
							<img src="../temp/images/g1.jpg" class="img-fluid" alt="Responsive image">
						</a>
						<a href="#" class="col-4">
							<img src="../temp/images/g3.jpg" class="img-fluid" alt="Responsive image">
						</a>
					</div>
				</div>
				
			</div>
		</div>
	</footer>
	<!-- //Footer -->
	

    <!-- Required common Js -->
    <script src="js/jquery.min.js"></script>
    <!-- //Required common Js -->
	<!-- Responsiveslides -->
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