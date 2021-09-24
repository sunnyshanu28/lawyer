<?php include 'lock.php' ?>
<?php include 'head-internal.php' ?>
<body>
	<?php include 'nav-internal.php' ?>	

	<?php include 'search.php' ?>

	<section class="billing-page">
		<div class="container">
			<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="pills-overview-tab" data-toggle="pill" href="#pills-overview" role="tab" aria-controls="pills-overview" aria-selected="true">Overview</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="pills-invoices-tab" data-toggle="pill" href="#pills-invoices" role="tab" aria-controls="pills-invoices" aria-selected="false">Invoices</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="pills-payment-tab" data-toggle="pill" href="#pills-payment" role="tab" aria-controls="pills-payment" aria-selected="false">Payment</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="pills-overdues-tab" data-toggle="pill" href="#pills-overdues" role="tab" aria-controls="pills-overdues" aria-selected="false">Payment Overdues</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="pills-time-tab" data-toggle="pill" href="#pills-time" role="tab" aria-controls="pills-time" aria-selected="false">Time Entries</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="pills-expenses-tab" data-toggle="pill" href="#pills-expenses" role="tab" aria-controls="pills-expenses" aria-selected="false">Expenses</a>
				</li>
			</ul>
			<div class="tab-content" id="pills-tabContent">
				<div class="tab-pane fade show active" id="pills-overview" role="tabpanel" aria-labelledby="pills-overview-tab">
					<ul class="billing-list">
						<li>
							<h4>Period</h4>
							<select>
								<option>Last 7 days</option>
							</select>
						</li>
						<li>
							<h4>Period</h4>
							<span>0</span>
						</li>
						<li>
							<h4>Invoice Amount</h4>
							<span>0</span>
						</li>
						<li>
							<h4>Payment Received</h4>
							<span>0</span>
						</li>
						<li>
							<h4>Total Expenses</h4>
							<span>0</span>
						</li>
						<li>
							<h4>Payment Due</h4>
							<span>0</span>
						</li>
						<li>
							<h4>Payment overdue</h4>
							<span>0</span>
						</li>
					</ul>
					<table class="billing-table my-5">
						<tr>
							<th>Name</th>
							<th>No. of Cases</th>
							<th>No. of Appoitments</th>
							<th>Invoice Amount</th>
							<th>Invoice Received</th>
						</tr>
						<tr>
							<th colspan="5">No invoice found</th>
						</tr>
					</table>
				</div>
				<div class="tab-pane fade" id="pills-invoices" role="tabpanel" aria-labelledby="pills-invoices-tab">...</div>
				<div class="tab-pane fade" id="pills-payment" role="tabpanel" aria-labelledby="pills-payment-tab">...</div>
				<div class="tab-pane fade" id="pills-overdues" role="tabpanel" aria-labelledby="pills-overdues-tab">...</div>
				<div class="tab-pane fade" id="pills-time" role="tabpanel" aria-labelledby="pills-time-tab">...</div>
				<div class="tab-pane fade" id="pills-expenses" role="tabpanel" aria-labelledby="pills-expenses-tab">...</div>
			</div>
		</div>
	</section>

	<?php include 'footer-internal.php' ?>	