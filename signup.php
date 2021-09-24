<?php
include 'database.php';

$error="";
$lawyer_plan=$_GET['p'];
if ($lawyer_plan=='1')
{
	$lawyer_plan='Monthly';
}
else{
	$lawyer_plan="Yearly";
}
//select data
if(isset($_REQUEST['loginsubmit']))
{

$login_name= addslashes($_REQUEST['login_name']);
$login_email= addslashes($_REQUEST['login_email']);
$login_phone= addslashes($_REQUEST['login_phone']);
//$login_password= stripcslashes($_REQUEST['login_password']);
$lawyer_ctime=date('Y-m-d H:i:s');
$lawyer_tstart=date('Y-m-d');
$date = strtotime($lawyer_tstart);
$lawyer_tendget = strtotime("+7 day", $date);
$lawyer_tend=date('Y-m-d', $lawyer_tendget);

$lawyer_city= addslashes($_REQUEST['lawyer_city']);
$lawyer_court= addslashes($_REQUEST['lawyer_court']);

if($login_email!='' AND $login_phone!='')
{
$loginpassword=md5($login_password);
$admincqry="SELECT lawyer_id from lawyer_master where lawyer_mobile='$login_phone'";
$adminrcesult=mysqli_query($con,$admincqry);
echo $numrows=mysqli_num_rows($adminrcesult);
if ($numrows<=0)
{
$adminquery="INSERT INTO lawyer_master (lawyer_name, lawyer_email, lawyer_mobile, lawyer_tstart, lawyer_tend, lawyer_ctime, lawyer_city,lawyer_court, lawyer_plan) VALUES ('$login_name','$login_email','$login_phone','$lawyer_tstart','$lawyer_tend','$lawyer_ctime','$lawyer_city','$lawyer_court','$lawyer_plan')";
//exit;
$adminresult=mysqli_query($con,$adminquery);

echo '<script> window.location="thankyou"; </script>';
}
else
{
$error="You have already subscribed!";	
}
}
else{
$error="Unable to register, please try again";	
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
							<h2>Welcome to Digital World</h2>
						</div>
						<table>
							<tr>
								<td class="d-flex">
									<i class="fas fa-clone"></i>
								</td>
								<td>
									<h4>Case Management</h4>
									
								</td>
							</tr>
							<tr>
								<td class="d-flex">
									<i class="fas fa-user-edit"></i>
								</td>
								<td>
									<h4>Judgments, Laws and Acts</h4>
									
								</td>
							</tr>
							<tr>
								<td class="d-flex">
									<i class="far fa-clock"></i>
								</td>
								<td>
									<h4>Real-time Court Display Board</h4>
									
								</td>
							</tr>
							<tr>
								<td class="d-flex">
									<i class="fas fa-id-card"></i>
								</td>
								<td>
									<h4>Manage Your Schedules</h4>
									
								</td>
							</tr>
							<tr>
								<td class="d-flex">
									<i class="fas fa-file-download"></i>
								</td>
								<td>
									<h4>Billing and Invoices</h4>
									
								</td>
							</tr>
							<tr>
								<td class="d-flex">
									<i class="fas fa-calculator"></i>
								</td>
								<td>
									<h4>Court Fees Calculator</h4>
									
								</td>
							</tr>
							<tr>
								<td class="d-flex">
									<i class="fas fa-file"></i>
								</td>
								<td>
									<h4>Online Case Filing and Fee Payment</h4>
									
								</td>
							</tr>
						</table>
					</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="second-col">
					<div class="section-title pt-2">
							<h2>Signup</h2>
							<!-- <h4>Already an account? <a href="login">Login</a></h4> -->
						</div>
						
						
						<form method="post">
							<div class="form-group">
								<label for="exampleInputName">Full Name</label>
								<div class="input-group mb-2">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fas fa-user"></i></div>
									</div>
									<input type="text" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Enter Full Name" name="login_name" autofocus required>
								</div>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Email Id</label>
								<div class="input-group mb-2">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fas fa-envelope"></i></div>
									</div>
									<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email Id" name="login_email" autofocus required>
								</div>
							</div>
							<div class="form-group">
								<label for="exampleInputPhone">Phone No</label>
								<div class="input-group mb-2">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fas fa-phone-alt"></i></div>
									</div>
									<input type="tel" pattern="[0-9]{10}" class="form-control" id="exampleInputPhone" aria-describedby="emailHelp" placeholder="Enter Phone No" name="login_phone" autofocus required>
								</div>
							</div>
							
							<div class="form-group">
								<label for="exampleInputCity">City Name</label>
								<div class="input-group mb-2">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fas fa-city"></i></div>
									</div>
									<input type="text" class="form-control" id="exampleInputCity" aria-describedby="emailHelp" placeholder="Enter City Name" name="lawyer_city" required>
								</div>
							</div>
							
							<div class="form-group">
								<label for="exampleInputCourt">Court Name</label>
								<div class="input-group mb-2">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fas fa-balance-scale"></i></div>
									</div>
									<input type="text" class="form-control" id="exampleInputCourt" aria-describedby="emailHelp" placeholder="Enter Court Name" name="lawyer_court" required>
								</div>
							</div>
							
							<!-- <div class="form-group">
								<label for="exampleInputPassword1">Password</label>
								<div class="input-group mb-2">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fas fa-lock"></i></div>
									</div>
									<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="login_password" required>
								</div>
							</div> -->
							<!-- <div class="form-check mb-4">
								<input type="checkbox" class="form-check-input" id="exampleCheck1" required >
								<span class="form-check-label" for="exampleCheck1">I agree to Platform's <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>.</span>
							</div> -->
							
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
									
							<button type="submit" name="loginsubmit" class="login-btn mb-2">Sign Up</button>
							<!-- <a href="#" class="forget-btn">Forgot Password?</a> -->
						</form>
						</div>
				</div>
			</div>
		</div>
	</section>

	<?php include('footer.php'); ?>
</body>
</html>