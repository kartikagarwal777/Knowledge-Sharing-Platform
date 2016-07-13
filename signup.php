<?php

if(isset($_POST['signup'])){
include('db.php');
// Fetching values from form
$res=mysqli_query($con,"select * from author");
if(mysqli_num_rows($res)==1){
	$message = "Username Exists.";
echo "<script type='text/javascript'>alert('$message');</script>";
}
else{
$sql="insert into author(username,password,name,age,experience,institution,phone,email_id,subject_domain)
VALUES('$_POST[uname]','$_POST[pwd]','$_POST[aname]',$_POST[age],$_POST[exp],'$_POST[insti]',$_POST[phone],'$_POST[email]','$_POST[domain]')";
if (!mysqli_query($con,$sql))
{
die('Error: ' . mysql_error());
}

$message = "Signup successful";
echo "<script type='text/javascript'>alert('$message');</script>";
header("location:login.php");
}
}
?>

<html>
<head>
<title>Register</title>
</head>
<link rel="stylesheet" type="text/css" href="mystyle2.css">
<body>
<ul>
<li><a>Learnify</a><li>
<li><a href="index.php">Home</a></li>
</ul>
<div id="container2">
<form method="post" action="">
<h1>Signup</h1>
<pre>
<fieldset>
<legend>Login Details</legend>
Login:    <input type="text" pattern="^[a-zA-Z0-9]{3,15}$" title="Username must be between 3 and 15 characters and contain only alphanumeric characters" name="uname" required><br>

Password: <input type="password" pattern="^[a-zA-Z0-9*_$]{8,20}$" title="Password must be between 8 and 20 characters and contain alphanumeric or *,_,$" name="pwd" required>
</fieldset>
<fieldset>
<legend>Personal Details</legend>
Name:              <input type="text" name="aname" pattern="^[a-zA-z]{3,30}" title="Enter a valid name" required><br>

Age:               <input type="number" name="age" min=1 max=200 required><br>

Experience:        <input type="number" name="exp" min=0 max=99 required><br>

Institution:       <input type="text" name="insti" pattern="^[a-zA-z]{3,50}" title="Enter a valid name" required><br>

Phone Number:      <input type="text" name="phone" pattern="^[0-9]{6,10}" title="Enter a valid phone number" required><br>

Email id:          <input type="email" name="email" maxlength=50 required><br>

Subject Expertise: <input type="text" name="domain"  title="Enter a valid field" required><br>
</fieldset>
<center><button type="Submit" value="Signup" name="signup">Submit</button></center>
</pre>
</form>
</div>
</body>
</html>