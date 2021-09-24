<!DOCTYPE html>
<html>
<?php include('head.php'); ?>
<?php include('database.php'); ?>
<body>
	<div class="hero-banner">
		<?php include('menu.php'); ?>
		<div class="container">
			<div class="row hero-banner-inner">
				<div class="col-md-12 text-center pt-5">
					<h1 class="pt-3">Lawyer E-Office helps tracking Daily Causelist</h1>
				</div>
				<div class="col-md-8">
					<img src="img/banner illustrator.svg" alt="Banner" class="img-fluid">
				</div>
				<div class="col-md-4 d-flex justify-content-center">
					
					<ul>
						<li>Live Case updates</li>
						<li>Perform legal research</li>
						<li>Manage your legal firm</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<section class="request-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2>Subscribe now to avail Pre-Launch OFFER</h2>
					</div>
				</div>
				<div class="col-md-12 text-center">
					<a href="./price" class="request-btn">Subscribe Now</a>
				</div>
			</div>
		</div>
	</section>
	<section class="dash-box-outer">
		<div class="container">
			<div class="dash-carousel owl-carousel owl-theme">
				<div class="item">
					<div class="dash-box">
						<img src="img/Services/Dashboard.png" alt="Dashboard">
						<h3>Case Management</h3>
						<p>Manage all your active cases at one place by using our Web and App.</p>
					</div>
				</div>
				<div class="item">
					<div class="dash-box">
						<img src="img/Services/Case aleart.png" alt="Case Alert">
						<h3>Case Alerts</h3>
						<p>Get timely alerts about all your upcoming cases.</p>
					</div>
				</div>
				<div class="item">
					<div class="dash-box">
						<img src="img/Services/Hearing.png" alt="Hearing">
						<h3>Calendar</h3>
						<p>Sync your favourite calendar with upcoming hearings and personal events.</p>
					</div>
				</div>
				<div class="item">
					<div class="dash-box">
						<img src="img/Services/Judgement.png" alt="Judgement">
						<h3>Display Board</h3>
						<p>Keep track of what's happening in the court in real time.</p>
					</div>
				</div>
				<div class="item">
					<div class="dash-box">
						<img src="img/Services/Manage Clients.png" alt="Manage Clients">
						<h3>Judgments</h3>
						<p>Explore millons of previous Judgements for your ready references. </p>
					</div>
				</div>
				<div class="item">
					<div class="dash-box">
						<img src="img/Services/Manage Clients.png" alt="Manage Clients">
						<h3>Bare Acts</h3>
						<p>All Bare Acts are availble on your dashboard with regular updates by E-Office team.</p>
					</div>
				</div>
				<div class="item">
					<div class="dash-box">
						<img src="img/Services/Manage Clients.png" alt="Manage Clients">
						<h3>Legal Drafting</h3>
						<p>Save time into drafting formats. Almost all type of formats and proformas are available.</p>
					</div>
				</div>
				<div class="item">
					<div class="dash-box">
						<img src="img/Services/Manage Clients.png" alt="Manage Clients">
						<h3>Court Fee Calculator</h3>
						<p>Say goodbye to your physical calculator. Fill details and get instant fee amount.</p>
					</div>
				</div>
				<div class="item">
					<div class="dash-box">
						<img src="img/Services/Manage Clients.png" alt="Manage Clients">
						<h3>Online Case Filing</h3>
						<p>File your cases online and make online fee payment.</p>
					</div>
				</div>
				<div class="item">
					<div class="dash-box">
						<img src="img/Services/Manage Clients.png" alt="Manage Clients">
						<h3>Manage Clients</h3>
						<p>Manage all your clients and create/followup on their invoices.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="dash-box-outer">
		<div class="container">
			<div class="section-title">
						<h2>Latest Legal News & Updates</h2>
						
					</div>
			<div class="dash-carousel owl-carousel owl-theme">
			<?php 
	$newsqry="select news_id, news_headline, news_date, news_court from news_master order by news_id desc";
	$newsres=mysqli_query($con,$newsqry);
	while ($newsdata=mysqli_fetch_assoc($newsres))
	{
	?>
				<div class="item">
					<div class="dash-box dash-box-news">
						
						<p><?php echo $newsdata['news_court']; ?><span  style="float:right; color:#f00;"><?php echo $newsdata['news_date']; ?></span></p>
						<a href="news?id=<?php echo $newsdata['news_id']; ?>"><h3><?php echo $newsdata['news_headline']; ?></h3></a>
						
						
					</div>
				</div>
	<?php } ?>			
			</div>
		</div>
	</section>
	
	<!-- <section class="video-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="text-white">E-Office helps to <br>handle your doc.</h2>
					</div>
				</div>
				<div class="col-md-12">
					<div class="video-section-inner">
						<img src="img/Services/Video play.png" alt="Video play">
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<section class="dash-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h2>Lawyer E-Office User Friendly - Dashboard</h2>
						<h4>The smart dashboard helps to track cases in real-time, manage schedules and clients all in one place.</h4>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<img src="img/15.jpg" alt="User friendly Dashboard" class="img-fluid" width="80%" style="border-radius:10px">
				</div>
				<div class="col-md-6">
					<div class="service-list">
						<div class="row">
							<div class="col-3">
								<img src="img/Service details/fluent_dock-row-24-filled.png" alt="fluent_dock-row-24-filled" class="img-fluid">
							</div>
							<div class="col-9">
								<h4>Have all your hearings, causelist, display board, clients at one place</h4>
							</div>
						</div>
					</div>
					<div class="service-list">
						<div class="row">
							<div class="col-3">
								<img src="img/Service details/el_eye-open.png" alt="el_eye-open" class="img-fluid">
							</div>
							<div class="col-9">
								<h4>Keep an eye on your current cases at ease</h4>
							</div>
						</div>
					</div>
					<div class="service-list">
						<div class="row">
							<div class="col-3">
								<img src="img/Service details/clarity_date-solid.png" alt="clarity_date-solid" class="img-fluid">
							</div>
							<div class="col-9">
								<h4>Calculate your court fee instantly</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-md-6">
					<div class="section-title">
						<h2 class="py-5">Manage all your cases digitally at Lawyer E-Office</h2>
						<h4 class="text-justify pb-5">Manage your all cases on a single platform whether it is listed in Supreme Court, High court or Lower Court, or any Tribunals, just one platform for all, Automated case updates. No need to carry Diary etc. Now have all your hearings daily orders, official reports, business details in your mobile and computer.</h4>
						<h4 class="text-justify pb-5">Able to search any case all over India by party name, Advocate name, CNR Number, FIR Number, Easily imports your all cases within seconds.</h4>
						<h4 class="text-justify pb-5">Easy to use which allows you to see all information regarding your cases within seconds, all orders, daily updates of each case, see all past and future hearing dates along with daily orders.</h4>
						<h4 class="text-justify pb-5">Keep all documents of every case digitally like your office case files, fully managed but accessible any time and everywhere on single click, makes notes, prepare arguments attach with your digital case file.</h4>
					</div>
				</div>
				<div class="col-md-6 text-center">
					<img src="img/17.jpg" alt="manage" class="img-fluid" style="border-radius:10px">
				</div>
			</div>
			
			
		</div>
	</section>
	
	<!-- <section class="client-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2>Our well experienced Advocate will helps you</h2>
					</div>
				</div>
			</div>
			<div class="client-carousel owl-carousel owl-theme">
			
				<div class="item">
					<div class="client-box">
						<div class="row">
							
							<div class="col-md-8">
								<h3><?php echo $newsdata['news_headline']; ?></h3>
								
							</div>
						</div>
					</div>
				</div>
	
			</div>
		</div>
	</section> -->
	<?php include('footer.php'); ?>
</body>
</html>