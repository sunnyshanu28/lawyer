<?php
include('database.php');
@$user_check=$_SESSION['lawyer_id'];

$lockmasterqry=mysqli_query($con,"select * from lawyer_master where lawyer_id='$user_check' ");
$lockmasterdata=mysqli_fetch_array($lockmasterqry);

$lawyer_name=$lockmasterdata['lawyer_name'];
$lawyer_email=$lockmasterdata['lawyer_email'];
$lawyer_id=$lockmasterdata['lawyer_id'];
$lawyer_tend=$lockmasterdata['lawyer_tend'];
//$user_department=$lockmasterdata['user_department'];

if(!isset($lawyer_id))
{
echo '<script> window.location="login"; </script>';
}

?>