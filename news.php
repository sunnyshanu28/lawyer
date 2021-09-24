<!DOCTYPE html>
<html>
<?php include('head.php'); ?>
<body>
	<div class="hero-top">
	<?php include('menu.php'); ?>
	<?php include('database.php'); ?>
	</div>
	<?php 
	$news_id=$_GET['id'];
	$newsqry="select * from news_master where news_id='$news_id'";
	$newsres=mysqli_query($con,$newsqry);
	$newsdata=mysqli_fetch_assoc($newsres);
	?>
	<section class="term-page">
		<div class="container">
			<h1 class="text-center mb-5"><?php echo $newsdata['news_headline'];?></h1>
						
			<h2>Date : <?php echo $newsdata['news_date'];?></h2>	<br />		
			
			<?php echo $newsdata['news_body'];?>
			
		</div>
	</section>

	<?php include('footer.php'); ?>
</body>
</html>