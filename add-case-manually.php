<?php include 'lock.php' ?>
<?php include 'head-internal.php' ?>
<body>
<?php include 'nav-internal.php' ?>	

	<section class="user-dashboard">
		<div class="container">
			<div class="row d-md-flex align-items-center">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<form class="search-input">
						<div class="input-group">
							<input type="text" class="form-control" id="casenummber" aria-describedby="casenummber" placeholder="Case number">
							<div class="input-group-append">
								<button class="form-control"><i class="fas fa-search"></i></button>
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-2 icon-group d-flex justify-content-md-start justify-content-center">
					<a href="#"><i class="fas fa-calendar"></i></a>
					<div class="notification">
						<a href="#" class="notify"><i class="fas fa-bell"></i></a>
						<div class="notification-menu">
							<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="pills-all-tab" data-toggle="pill" href="#pills-all" role="tab" aria-controls="pills-all" aria-selected="true">All</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="pills-hearing-tab" data-toggle="pill" href="#pills-hearing" role="tab" aria-controls="pills-hearing" aria-selected="false">Hearing</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="pills-orders-tab" data-toggle="pill" href="#pills-orders" role="tab" aria-controls="pills-orders" aria-selected="false">Orders</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="pills-practice-tab" data-toggle="pill" href="#pills-practice" role="tab" aria-controls="pills-practice" aria-selected="false">Practice</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="pills-updates-tab" data-toggle="pill" href="#pills-updates" role="tab" aria-controls="pills-updates" aria-selected="false">Updates</a>
								</li>
							</ul>
							<div class="tab-content" id="pills-tabContent">
								<div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
									<form>
										<div class="form-group">
											<input type="radio" name="all" value="Lorem ipsum dolor sit amet, consectetur adipisicing elit" id="all-1">
											<label for="all-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit</label>
										</div>
										<div class="form-group">
											<input type="radio" name="all" value="Lorem ipsum dolor sit amet, consectetur adipisicing elit" id="all-2">
											<label for="all-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit</label>
										</div>
										<div class="form-group">
											<input type="radio" name="all" value="Lorem ipsum dolor sit amet, consectetur adipisicing elit" id="all-3">
											<label for="all-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit</label>
										</div>
										<div class="form-group">
											<input type="radio" name="all" value="Lorem ipsum dolor sit amet, consectetur adipisicing elit" id="all-4">
											<label for="all-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit</label>
										</div>
										<div class="form-group">
											<input type="radio" name="all" value="Lorem ipsum dolor sit amet, consectetur adipisicing elit" id="all-5">
											<label for="all-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit</label>
										</div>
										<div class="form-group">
											<input type="radio" name="all" value="Lorem ipsum dolor sit amet, consectetur adipisicing elit" id="all-6">
											<label for="all-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit</label>
										</div>
									</form>
								</div>
								<div class="tab-pane fade" id="pills-hearing" role="tabpanel" aria-labelledby="pills-hearing-tab">
									<form>
										<div class="form-group">
											<input type="radio" name="hearing" value="Lorem ipsum dolor sit amet, consectetur adipisicing elit" id="hearing-1">
											<label for="hearing-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit</label>
										</div>
										<div class="form-group">
											<input type="radio" name="hearing" value="Lorem ipsum dolor sit amet, consectetur adipisicing elit" id="hearing-2">
											<label for="hearing-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit</label>
										</div>
										<div class="form-group">
											<input type="radio" name="hearing" value="Lorem ipsum dolor sit amet, consectetur adipisicing elit" id="hearing-3">
											<label for="hearing-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit</label>
										</div>
										<div class="form-group">
											<input type="radio" name="hearing" value="Lorem ipsum dolor sit amet, consectetur adipisicing elit" id="hearing-4">
											<label for="hearing-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit</label>
										</div>
										<div class="form-group">
											<input type="radio" name="hearing" value="Lorem ipsum dolor sit amet, consectetur adipisicing elit" id="hearing-5">
											<label for="hearing-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit</label>
										</div>
										<div class="form-group">
											<input type="radio" name="hearing" value="Lorem ipsum dolor sit amet, consectetur adipisicing elit" id="hearing-6">
											<label for="hearing-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit</label>
										</div>
									</form>
								</div>
								<div class="tab-pane fade" id="pills-orders" role="tabpanel" aria-labelledby="pills-orders-tab">
									<form>
										<div class="form-group">
											<input type="radio" name="all" value="Lorem ipsum dolor sit amet, consectetur adipisicing elit" id="all-1">
											<label for="all-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit</label>
										</div>
										<div class="form-group">
											<input type="radio" name="all" value="Lorem ipsum dolor sit amet, consectetur adipisicing elit" id="all-2">
											<label for="all-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit</label>
										</div>
										<div class="form-group">
											<input type="radio" name="all" value="Lorem ipsum dolor sit amet, consectetur adipisicing elit" id="all-3">
											<label for="all-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit</label>
										</div>
										<div class="form-group">
											<input type="radio" name="all" value="Lorem ipsum dolor sit amet, consectetur adipisicing elit" id="all-4">
											<label for="all-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit</label>
										</div>
										<div class="form-group">
											<input type="radio" name="all" value="Lorem ipsum dolor sit amet, consectetur adipisicing elit" id="all-5">
											<label for="all-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit</label>
										</div>
										<div class="form-group">
											<input type="radio" name="all" value="Lorem ipsum dolor sit amet, consectetur adipisicing elit" id="all-6">
											<label for="all-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit</label>
										</div>
									</form>
								</div>
								<div class="tab-pane fade" id="pills-practice" role="tabpanel" aria-labelledby="pills-practice-tab">
									<form>
										<div class="form-group">
											<input type="radio" name="all" value="Lorem ipsum dolor sit amet, consectetur adipisicing elit" id="all-1">
											<label for="all-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit</label>
										</div>
										<div class="form-group">
											<input type="radio" name="all" value="Lorem ipsum dolor sit amet, consectetur adipisicing elit" id="all-2">
											<label for="all-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit</label>
										</div>
										<div class="form-group">
											<input type="radio" name="all" value="Lorem ipsum dolor sit amet, consectetur adipisicing elit" id="all-3">
											<label for="all-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit</label>
										</div>
										<div class="form-group">
											<input type="radio" name="all" value="Lorem ipsum dolor sit amet, consectetur adipisicing elit" id="all-4">
											<label for="all-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit</label>
										</div>
										<div class="form-group">
											<input type="radio" name="all" value="Lorem ipsum dolor sit amet, consectetur adipisicing elit" id="all-5">
											<label for="all-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit</label>
										</div>
										<div class="form-group">
											<input type="radio" name="all" value="Lorem ipsum dolor sit amet, consectetur adipisicing elit" id="all-6">
											<label for="all-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit</label>
										</div>
									</form>
								</div>
								<div class="tab-pane fade" id="pills-updates" role="tabpanel" aria-labelledby="pills-updates-tab">
									<form>
										<div class="form-group">
											<input type="radio" name="all" value="Lorem ipsum dolor sit amet, consectetur adipisicing elit" id="all-1">
											<label for="all-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit</label>
										</div>
										<div class="form-group">
											<input type="radio" name="all" value="Lorem ipsum dolor sit amet, consectetur adipisicing elit" id="all-2">
											<label for="all-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit</label>
										</div>
										<div class="form-group">
											<input type="radio" name="all" value="Lorem ipsum dolor sit amet, consectetur adipisicing elit" id="all-3">
											<label for="all-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit</label>
										</div>
										<div class="form-group">
											<input type="radio" name="all" value="Lorem ipsum dolor sit amet, consectetur adipisicing elit" id="all-4">
											<label for="all-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit</label>
										</div>
										<div class="form-group">
											<input type="radio" name="all" value="Lorem ipsum dolor sit amet, consectetur adipisicing elit" id="all-5">
											<label for="all-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit</label>
										</div>
										<div class="form-group">
											<input type="radio" name="all" value="Lorem ipsum dolor sit amet, consectetur adipisicing elit" id="all-6">
											<label for="all-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit</label>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="manually-tab">
		<div class="container">
			<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="case-detail-tab" data-toggle="pill" href="#case-detail" role="tab" aria-controls="case-detail" aria-selected="true">Case Detail</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="lawyer-detail-tab" data-toggle="pill" href="#lawyer-detail" role="tab" aria-controls="lawyer-detail" aria-selected="false">Lawyer Detail</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="party-detail-tab" data-toggle="pill" href="#party-detail" role="tab" aria-controls="party-detail" aria-selected="false">Party Detail</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="billing-detail-tab" data-toggle="pill" href="#billing-detail" role="tab" aria-controls="billing-detail" aria-selected="false">Billing Detail</a>
				</li>
			</ul>
			<div class="tab-content" id="pills-tabContent">
				<div class="tab-pane fade show active" id="case-detail" role="tabpanel" aria-labelledby="case-detail-tab">
					<form>
						<div class="form-radio">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
								<label class="form-check-label" for="exampleRadios1">
									Litigation
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
								<label class="form-check-label" for="exampleRadios2">
									Non Litigation
								</label>
							</div>
						</div>
						<div class="form-group">
							<label for="case-title">Case Title</label>
							<input type="text" class="form-control" id="case-title" placeholder="Enter case title">
						</div>
						<div class="form-group">
							<label for="case-title" class="d-block">Case Type</label>
							<div class="d-block">
								<div class="form-radio-second">
									<div class="form-check">
										<input class="form-check-input" type="radio" name="exampleRadios" id="litigation1">
										<label class="form-check-label" for="litigation1">
											Litigation
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="exampleRadios" id="litigation2">
										<label class="form-check-label" for="litigation2">
											Litigation
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="exampleRadios" id="litigation3">
										<label class="form-check-label" for="litigation3">
											Litigation
										</label>
									</div>
								</div>
							</div>
							<div class="form-radio-second">
								<div class="form-check">
									<input class="form-check-input" type="radio" name="exampleRadios" id="litigation4">
									<label class="form-check-label" for="litigation4">
										Litigation
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="exampleRadios" id="litigation5">
									<label class="form-check-label" for="litigation5">
										Litigation
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="exampleRadios" id="litigation6">
									<label class="form-check-label" for="litigation6">
										Litigation
									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="case-tags">Case Tags</label>
							<input type="text" class="form-control" id="case-tags" placeholder="Select case tags">
						</div>
						<div class="form-group">
							<label for="filling-date">Filling Date</label>
							<input type="date" class="form-control" id="filling-date" placeholder="Select date">
						</div>
						<div class="form-group">
							<label for="batch-number">Batch Number</label>
							<input type="text" class="form-control" id="batch-number" placeholder="Enter batch number">
						</div>
						<div class="form-group">
							<label for="batch-number">Practice Area</label>
							<select class="d-block form-control">
								<option>Select practice area</option>
							</select>
						</div>
						<div class="form-group">
							<label for="case-description">Prayer</label>
							<textarea class="form-control" id="case-description" rows="5" placeholder="Enter case description"></textarea>
						</div>
						<button class="form-control next-btn">Next</button>
					</form>
				</div>
				<div class="tab-pane fade" id="lawyer-detail" role="tabpanel" aria-labelledby="lawyer-detail-tab">...</div>
				<div class="tab-pane fade" id="party-detail" role="tabpanel" aria-labelledby="party-detail-tab">...</div>
				<div class="tab-pane fade" id="billing-detail" role="tabpanel" aria-labelledby="billing-detail-tab">...</div>
			</div>
		</div>
	</section>

	<?php include 'footer-internal.php' ?>