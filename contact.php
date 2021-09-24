<!DOCTYPE html>
<html>
<?php include('head.php'); ?>
<body>
	<div class="hero-top header-sticky">
		<?php include('menu.php'); ?>
	</div>

	<section class="contact-page">
		<div class="container">
			<h1 class="text-center mb-5">Get in Touch</h1>
			<div class="row d-md-flex align-items-center color-box pt-3">
				<div class="col-md-6">
					<img src="img/16.jpg" alt="lawer contact" class="img-fluid">
				</div>
				<div class="col-md-6">
					<form>
						<input type="text" name="name" placeholder="Name" class="form-control mb-2">
						<input type="text" name="number" placeholder="Mobile No." class="form-control mb-2">
						<input type="email" name="email" placeholder="Email ID" class="form-control mb-2">
						<input type="text" name="subject" placeholder="Subject" class="form-control mb-2">
						<textarea placeholder="Enter Your Message" class="form-control mb-2"></textarea>
						<button class="btn">Submit</button>
					</form>
				</div>
				<div class="col-md-12 contact-box">
					<div class="row text-center">
						<div class="col-md-4">
							<i class="fas fa-map-marker-alt"></i>
							<address class="mb-0">Main Bazar No.4, Opp. SBI Main Branch, Abohar (PB) 152116</address>
						</div>
						<div class="col-md-4">
							<i class="fas fa-phone-alt"></i>
							<a href="tel:+919497300083">+91 9497300083</a>
						</div>
						<div class="col-md-4">
							<i class="fas fa-envelope"></i>
							<a href="mailto:support@lawyereoffice.com">support@lawyereoffice.com</a>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		<div class="container-fluid">
			<div class="row mt-5">
				<div class="col-md-12">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3450.281495441187!2d74.19085271444578!3d30.14336702084903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3917a7bd732bd431%3A0x88de7e4975fdcc68!2sStreet%20No.%204%2C%20Main%20Bazar%2C%20Abohar%2C%20Punjab%20152116!5e0!3m2!1sen!2sin!4v1629367632907!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
			</div>
		</div>
	</section>

	<?php include('footer.php'); ?>
</body>
</html>