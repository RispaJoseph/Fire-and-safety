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
		<h3 class="tittle text-center mb-3">Get in Touch</h3>
			<p class="tit text-center mx-auto">A working environment should always be a safe one. Ensure your business is protected with our comprehensive range of fire protection services.</p>
			<form action="#" method="post">
			<div class="row mail_grid_w3l pt-4 mt-md-5">
				
					<div class="col-md-6 contact_left_grid">
						<div class="contact-fields-w3ls">
							<input type="text" name="Name" placeholder="Name" required="">
						</div>
						<div class="contact-fields-w3ls">
							<input type="email" name="Email" placeholder="Email" required="">
						</div>
						<div class="contact-fields-w3ls">
							<input type="text" name="Telephone" placeholder="Telephone" required="">
						</div>
						<div class="contact-fields-w3ls">
							<input type="text" name="Subject" placeholder="Subject" required="">
						</div>
					</div>
					<div class="col-md-6 contact_left_grid rgt_gd">
						<div class="contact-fields-w3ls">
							<textarea name="Message" placeholder="Message..." required=""></textarea>
						</div>
						<input type="submit" value="Submit">
					</div>
				
			</div>
			</form>
		</div>
	</section>
	<!-- //contact -->
	<!-- footer-w3 -->
	<section class="map-section">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.30591910525!2d-74.25986432970718!3d40.697149422113014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1521710297542"></iframe>
	</section>
	<!-- Footer -->
	<footer class="footer-section py-5">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-4 footer-grids">
					<h3>Get in touch</h3>
					<p>0926k 4th block building,Kalamassery, </p>
					<p class="my-2"> Ernakulam,INDIA</p>
					<p class="phone">phone: 9031555222</p>
					<p class="phone my-2">Fax: 8127555222</p>
					<p class="phone">Mail:
						<a href="mailto:fireequipment@safety.com">fireequipment@safety.com</a>
					</p>
				</div>
				<div class="col-lg-4 footer-grids">
					<h2>Latest Works</h2>
					<div class="d-flex justify-content-around">
						
						<a href="#" class="col-4">
							<img src="../temp/images/ppp.jpg" class="img-fluid" alt="Responsive image">
						</a>
						<a href="#" class="col-4">
							<img src="../temp/images/ccc.jpg" class="img-fluid" alt="Responsive image">
						</a>
                        <a href="#" class="col-4">
							<img src="../temp/images/zzz.jpg" class="img-fluid" alt="Responsive image">
						</a>
					</div>
					<div class="d-flex justify-content-around">
						<a href="#" class="col-4">
							<img src="../temp/images/download.jpg" class="img-fluid" alt="Responsive image">
						</a>
						<a href="#" class="col-4">
							<img src="../temp/images/jjj.jpg" class="img-fluid" alt="Responsive image">
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