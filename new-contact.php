<?php include 'lock.php' ?>
<?php include 'head-internal.php' ?>
<body>
	<?php include 'nav-internal.php' ?>	

	<?php include 'search.php' ?>

	<section class="new-contact">
		<div style="background-color: #F2F2F2; padding: 10px 0;margin-bottom: 16px;">
			<div class="container">
				<ul class="nav nav-pills mb-0" id="pills-tab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="pills-all-tab" data-toggle="pill" href="#pills-all" role="tab" aria-controls="pills-all" aria-selected="true">All(2)</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="pills-people-tab" data-toggle="pill" href="#pills-people" role="tab" aria-controls="pills-people" aria-selected="false">People(2)</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="pills-companies-tab" data-toggle="pill" href="#pills-companies" role="tab" aria-controls="pills-companies" aria-selected="false">Companies(2)</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="container">
			<div class="tab-content" id="pills-tabContent">
				<div class="tab-pane fade active show" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
					<div class="row">
						<div class="col-md-7">
							<h4>All Contacts</h4>
						</div>
						<div class="col-md-5 add-person">
							<a href="#"><i class="fal fa-indent"></i></a>
							<a href="#">Add Person</a>
							<a href="#">Add Company</a>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="contact-details">
								<div class="contact-details-first">
									<p class="mb-0">
										<i class="fas fa-user"></i>
										<span>Adv Kapil</span>
									</p>
									<a href="#"><i class="fas fa-ellipsis-v"></i></a>
								</div>
								<div class="contact-details-second">
									<p class="mb-0">
										<i class="fas fa-phone-alt"></i>
										<span>4646532123</span>
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="contact-details">
								<div class="contact-details-first">
									<p class="mb-0">
										<i class="fas fa-user"></i>
										<span>Adv Kapil</span>
									</p>
									<a href="#"><i class="fas fa-ellipsis-v"></i></a>
								</div>
								<div class="contact-details-second">
									<p class="mb-0">
										<i class="fas fa-phone-alt"></i>
										<span>4646532123</span>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="pills-people" role="tabpanel" aria-labelledby="pills-people-tab">...</div>
				<div class="tab-pane fade" id="pills-companies" role="tabpanel" aria-labelledby="pills-companies-tab">...</div>
			</div>
		</div>
	</section>

	<?php include 'footer-internal.php' ?>