<!DOCTYPE html>
<html>
<?php include('head.php'); ?>
<body>
	<div class="hero-top header-sticky">
		<?php include('menu.php'); ?>
	</div>

	<section class="price-page">
		<div class="container">
			<h1 class="text-center mb-5">Pre-Launch Discounted Pricing Plan</h1>
			<div class="card-deck mb-3 text-center">
				<div class="card mb-4 box-shadow">
					<div class="card-header">
						<h4 class="my-0 font-weight-normal">Monthly</h4>
					</div>
					<div class="card-body">
						<h2 class="card-title pricing-card-title"><del>₹700</del> ₹600</h2>
						<!-- <ul class="list-unstyled mt-3 mb-4">
							<li>10 users included</li>
							<li>2 GB of storage</li>
							<li>Email support</li>
							<li>Help center access</li>
						</ul> -->
						<a href="./signup?p=1" type="button" class="btn btn-lg btn-block">Book Now</a>
					</div>
				</div>
				<div class="card mb-4 box-shadow">
					<div class="card-header">
						<h4 class="my-0 font-weight-normal">Yearly</h4>
					</div>
					<div class="card-body">
						<h2 class="card-title pricing-card-title"><del class="text-muted">₹7000</del> ₹6000</h2>
						<!-- <ul class="list-unstyled mt-3 mb-4">
							<li>20 users included</li>
							<li>10 GB of storage</li>
							<li>Priority email support</li>
							<li>Help center access</li>
						</ul> -->
						<a href="./signup?p=12" type="button" class="btn btn-lg btn-block">Book Now</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php include('footer.php'); ?>
</body>
</html>