<?php include 'lock.php' ?>
<?php include 'head-internal.php' ?>
<body>
	<?php include 'nav-internal.php' ?>	

	<?php include 'search.php' ?>

	<section class="case-details pb-5">
		<div class="container">
			<div class="title">
				<h2 class="mb-0">My Cases</h2>
			</div>
			<div class="case-details-inner">
				<div class="detail-box">
					<div class="row">
						<div class="col-md-10">
							<h4>Pooja Rani vs St of PUNJ</h4>
						</div>
						<div class="col-md-2 d-flex justify-content-end">
							<a href="#"><i class="fas fa-edit"></i></a>
							<a href="#"><i class="fas fa-print"></i></a>
						</div>
						<div class="col-md-12 d-flex justify-content-start align-items-center py-2">
							<p class="mb-0">File No.</p>
							<span class="ml-1"></span>
						</div>
						<div class="col-md-12 d-flex justify-content-between">
							<p style="padding: 0.5rem 0.5rem 0.5rem 0;">Crm/201/2021</p>
							<p class="p-2">Chief Judicial Magistrate</p>
							<p class="p-2">Taluka Court</p>
						</div>
						<div class="col-md-12 d-md-flex justify-content-between">
							<p>CNR Number:PBF2e10002007021</p>
							<p>Stage:CONSIDERATION</p>
						</div>
						<div class="col-md-12">
							<p>Filing Date : May 07, 2021</p>
							<p>Petitioner & Respondent Advocates (View)</p>
						</div>
						<div class="col-md-12 d-flex justify-content-between">
							<p>Next Hearing : Jun 04, 2021</p>
							<p><b>Pending</b></p>
						</div>
					</div>
				</div>
				<div class="detail-tab">
					<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="pills-timeline-tab" data-toggle="pill" href="#pills-timeline" role="tab" aria-controls="pills-timeline" aria-selected="true">Timeline</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pills-document-tab" data-toggle="pill" href="#pills-document" role="tab" aria-controls="pills-document" aria-selected="false">Document</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pills-notes-tab" data-toggle="pill" href="#pills-notes" role="tab" aria-controls="pills-notes" aria-selected="false">Notes</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pills-notify-tab" data-toggle="pill" href="#pills-notify" role="tab" aria-controls="pills-notify" aria-selected="false">Notify</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pills-releted-tab" data-toggle="pill" href="#pills-releted" role="tab" aria-controls="pills-releted" aria-selected="false">Related Judgment</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pills-tasks-tab" data-toggle="pill" href="#pills-tasks" role="tab" aria-controls="pills-tasks" aria-selected="false">Tasks</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pills-appointment-tab" data-toggle="pill" href="#pills-appointment" role="tab" aria-controls="pills-appointment" aria-selected="false">Appointment</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pills-invoice-tab" data-toggle="pill" href="#pills-invoice" role="tab" aria-controls="pills-invoice" aria-selected="false">Invoice Expenses</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pills-time-tab" data-toggle="pill" href="#pills-time" role="tab" aria-controls="pills-time" aria-selected="false">Time Entries</a>
						</li>
					</ul>
					<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade show active" id="pills-timeline" role="tabpanel" aria-labelledby="pills-timeline-tab">
							<h4 class="mb-5">Filter by</h4>
							<div class="row">
								<div class="col-md-6">
									<div class="d-flex justify-content-center">
										<ul>
											<li>Hearings</li>
											<li>Daily Orders</li>
										</ul>
									</div>
								</div>
								<div class="col-md-6">
									<div class="d-flex justify-content-md-start justify-content-center">
									<div class="social-dev">
										<div><span class="circle-dev"></span>
										<span class="content">June 2021</span></div>
										
										<span class="line-dev"></span>
										<span class="content-new">4th Friday</span>
										<div><span class="circle-dev"></span>
										<span class="content-1">Hearing</span></div>
										
										<span class="line-dev"></span>
										<span class="content-new-1">26 Wednesday</span>
										<div><span class="circle-dev"></span>
										<span class="content-2">Daily Order <a href="#"><i class="fas fa-file-pdf"></i></a></span></div>
									</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="pills-document" role="tabpanel" aria-labelledby="pills-document-tab">
							<div class="row text-center">
								<div class="col-md-4 col-6">
									<a href="#">
										<img src="img/folder.png" alt="file">
									<p>Petitioner/plaintiff<br>/Accused</p>
									</a>
								</div>
								<div class="col-md-4 col-6">
									<a href="#">
										<img src="img/folder.png" alt="file">
									<p>Respondent/State</p>
									</a>
								</div>
								<div class="col-md-4 col-6">
									<a href="#">
										<img src="img/folder.png" alt="file">
									<p>Evidence</p>
									</a>
								</div>
								<div class="col-md-4 col-6">
									<a href="#">
										<img src="img/folder.png" alt="file">
									<p>Miscellaneous</p>
									</a>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="pills-notes" role="tabpanel" aria-labelledby="pills-notes-tab">...</div>
						<div class="tab-pane fade" id="pills-notify" role="tabpanel" aria-labelledby="pills-notify-tab">...</div>
						<div class="tab-pane fade" id="pills-releted" role="tabpanel" aria-labelledby="pills-releted-tab">...</div>
						<div class="tab-pane fade" id="pills-tasks" role="tabpanel" aria-labelledby="pills-tasks-tab">...</div>
						<div class="tab-pane fade" id="pills-appointment" role="tabpanel" aria-labelledby="pills-appointment-tab">...</div>
						<div class="tab-pane fade" id="pills-invoice" role="tabpanel" aria-labelledby="pills-invoice-tab">...</div>
						<div class="tab-pane fade" id="pills-time" role="tabpanel" aria-labelledby="pills-time-tab">...</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php include 'footer-internal.php' ?>