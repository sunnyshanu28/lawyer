<?php
include 'database.php';

$error="";
//select data
if(isset($_REQUEST['loginsubmit']))
{
$login_email= stripcslashes($_REQUEST['login_email']);
$login_password= stripcslashes($_REQUEST['login_password']);

if($login_email!='' AND $login_password!='')
{
$loginpassword=md5($login_password);

$adminquery="select lawyer_id, lawyer_tend from lawyer_master where (lawyer_email='$login_email' OR lawyer_mobile='$login_email') AND lawyer_pass='$loginpassword'";


$adminresult=mysqli_query($con,$adminquery);
$admindata  = mysqli_fetch_array($adminresult);
$lawyer_id=$admindata['lawyer_id'];
$lawyer_tend=$admindata['lawyer_tend'];
$lawyer_curdate=date('Y-m-d');
$count=mysqli_num_rows($adminresult);
if($count==1)
{
	if ($lawyer_tend>$lawyer_curdate){

	
	$_SESSION['lawyer_id'] = $lawyer_id;
	echo '<script> window.location="dashboard"; </script>';
	}
	else
	{
		$error="Your Trial has been expired";
	}
}
else
{
$error="Your Username or Password is invalid";
}	
}
else
{
$error="Please Enter Username and Password";	
}
	
}
?>

<!DOCTYPE html>
<html>
<?php include('head.php'); ?>
<body>
	<div class="hero-top header-sticky">
	<?php include('menu.php'); ?>
	</div>

	<section class="login-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="first-col">
					<div class="log-col-1">
						<div class="section-title text-center">
							<h2>Lorem ipsum dolor sit</h2>
						</div>
						<table>
							<tr>
								<td class="d-flex">
									<i class="fas fa-clone"></i>
								</td>
								<td>
									<h4>Case Management</h4>
									<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam</span>
								</td>
							</tr>
							<tr>
								<td class="d-flex">
									<i class="fas fa-user-edit"></i>
								</td>
								<td>
									<h4>Judgments, Laws and Acts</h4>
									<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam</span>
								</td>
							</tr>
							<tr>
								<td class="d-flex">
									<i class="far fa-clock"></i>
								</td>
								<td>
									<h4>Real-time Court Display Board</h4>
									<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam</span>
								</td>
							</tr>
							<tr>
								<td class="d-flex">
									<i class="fas fa-id-card"></i>
								</td>
								<td>
									<h4>Manage Your Schedules</h4>
									<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam</span>
								</td>
							</tr>
							<tr>
								<td class="d-flex">
									<i class="fas fa-file-download"></i>
								</td>
								<td>
									<h4>Billing and Invoices</h4>
									<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam</span>
								</td>
							</tr>
						</table>
					</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="second-col">
					<div class="section-title pt-2">
							<h2>Get’s started.</h2>
							<h4>Already an account? <a href="signup">Sign up</a></h4>
						</div>
						<a href="#" class="sign-up-btn">Sign up with OTP</a>
						<div class="line">
							<span class="line-dev"></span>
							<span class="content">or</span>
							<span class="line-dev"></span>
							<hr>
						</div>
						<form method="post">
							<div class="form-group">
								<label for="exampleInputEmail1">Email or Phone No/Enrollment No</label>
								<div class="input-group mb-2">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fas fa-envelope"></i></div>
									</div>
									<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email or Phone" name="login_email" autofocus>
								</div>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Password</label>
								<div class="input-group mb-2">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fas fa-lock"></i></div>
									</div>
									<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="login_password">
								</div>
							</div>
							<div class="form-check mb-4">
								<input type="checkbox" class="form-check-input" id="exampleCheck1" required >
								<span class="form-check-label" for="exampleCheck1">I agree to Platform’s <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>.</span>
							</div>
							
							<?php
							if($error)
							{
							?>
							<div class="form-check mb-4">
							<p class="text-danger"><?php echo $error; ?></p>
							</div>
							<?php
							}
							?>
									
							<button type="submit" name="loginsubmit" class="login-btn mb-2">Log in</button>
							<a href="#" class="forget-btn">Forgot Password?</a>
						</form>
						</div>
				</div>
			</div>
		</div>
	</section>

	<?php include('footer.php'); ?>
</body>
</html>