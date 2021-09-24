<div class="hero-top header-sticky">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light">
				<a class="navbar-brand" href="./"><img src="img/law_logo_2-01.png" alt="logo"></a>
				<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="./dashboard">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="./my-cases">My Cases</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Research</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Legal Drafting
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="./criminal">Criminal</a>
								<a class="dropdown-item" href="#">Civil</a>
								<a class="dropdown-item" href="#">Miscellaneous</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="./billing">Billing</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Online Tools
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#">Online Case Filling</a>
								<a class="dropdown-item" href="#">Online Court Fees Payment</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link calculator" href="#">
								<i class="fas fa-calculator d-block text-center"></i>
								<small>Calculator</small>
							</a>
						</li>
						<li class="nav-item" style="position: relative;">
							<a class="nav-link user-dash" href="#prop" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fas fa-user"></i></a>
							<div class="prop" id="prop">
								<i class="fas fa-user"></i>
								<a href="#"><i class="fas fa-cog"></i></a>
								<h4>Kapil Dev</h4>
								<span class="d-block">Lawyer</span>
								<a href="mailto:abc@gmail.com" class="d-block mb-2 text-white">abc@gmail.com</a>
								<a href="#" class="prop-out">Log out</a>
							</div>
						</li>
						<li><small><?php echo $lawyer_tend; ?></small></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>