<?php
$con=mysqli_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysqli_select_db($con,"learnify");
session_start();
if(isset($_SESSION['username']))
{
   
$user_check = $_SESSION['username'];
   
$ses_sql = mysqli_query($con,"select name from author where username = '$user_check' ");
   
$row = mysqli_fetch_array($ses_sql);
   
$login_session = $row['name'];

$ses_sql1 = mysqli_query($con,"select username from author where username = '$user_check' ");
   
$row1 = mysqli_fetch_array($ses_sql1);
   
$login_session1 = $row1['username'];
}

?>