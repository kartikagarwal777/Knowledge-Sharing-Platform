<html>
<head>
<title>Edit</title>
</head>
<link rel="stylesheet" type="text/css" href="mystyle2.css">
<body>
<?php
include('session.php');
include('db.php');

if (isset($_SESSION['username'])){
$name1 = mysqli_query($con,"select name from author where username = '$user_check' ");
$row1 = mysqli_fetch_array($name1);
$name = $row1['name'];
$age1 = mysqli_query($con,"select age from author where username = '$user_check' ");
$row2 = mysqli_fetch_array($age1);
   
$age = $row2['age'];
$exp1 = mysqli_query($con,"select experience from author where username = '$user_check' ");
$row3 = mysqli_fetch_array($exp1);
   
$exp = $row3['experience'];
$insti1 = mysqli_query($con,"select institution from author where username = '$user_check' ");
$row4 = mysqli_fetch_array($insti1);
   
$insti = $row4['institution'];
$ph1 = mysqli_query($con,"select phone from author where username = '$user_check' ");
$row5 = mysqli_fetch_array($ph1);
   
$ph = $row5['phone'];
$em1 = mysqli_query($con,"select email_id from author where username = '$user_check' ");
$row6 = mysqli_fetch_array($em1);
   
$em = $row6['email_id'];
$sub1 = mysqli_query($con,"select subject_domain from author where username = '$user_check' ");
$row7 = mysqli_fetch_array($sub1);
   
$sub = $row7['subject_domain'];

$name1 = mysqli_query($con,"select password from author where username = '$user_check' ");
$row1 = mysqli_fetch_array($name1);
$pass = $row1['password'];
}
else{
	header("location: index.php");
}
// Fetching values from form
if(isset($_POST['signup'])){
$sql="update author set password='$_POST[pwd]',name='$_POST[aname]',age=$_POST[age],experience=$_POST[exp],institution='$_POST[insti]',phone=$_POST[phone],email_id='$_POST[email]',subject_domain='$_POST[domain]'' where username='$_POST[uname]'";
if (!mysqli_query($con,$sql))
{
die('Error: ' . mysql_error());
}

$message = "successful";
echo "<script type='text/javascript'>alert('$message');</script>";
?>


<ul>
<li><a>Learnify</a><li>
<li><a href="index.php">Home</a></li>
</ul>
<div id="container2">
<form method="post" action="">
<h1>Edit Details</h1>
<pre>
<fieldset>
<legend>Login Details</legend>
<?php
echo "Login:    <input type='text' pattern='^[a-zA-Z0-9]{3,15}$' title='Username must be between 3 and 15 characters and contain only alphanumeric characters' name='uname' required readonly='readonly' value='$user_check'><br>";

echo "Password: <input type='password' pattern='^[a-zA-Z0-9*_$]{8,20}$' title='Password must be between 8 and 20 characters and contain alphanumeric or *,_,$' name='pwd' required value='$pass'>";
?>
</fieldset>
<fieldset>
<legend>Personal Details</legend>
<?php
echo "Name:              <input type='text' name='aname' pattern='^[a-zA-z]{3,30}' title='Enter a valid name' required value='$name'><br>";

echo "Age:               <input type='number' name='age' min=1 max=200 required value='$age'><br>";

echo "Experience:        <input type='number' name='exp' min=0 max=99 required value='$exp'><br>";

echo "Institution:       <input type='text' name='insti' pattern='^[a-zA-z]{3,50}' title='Enter a valid name' required value='$insti'><br>";
 
echo "Phone Number:      <input type='text' name='phone' pattern='^[0-9]{6,10}' title='Enter a valid phone number' required value='$ph'><br>";

echo "Email id:          <input type='email' name='email' maxlength=50 required value='$em'><br>";

echo "Subject Expertise: <input type='text' name='domain'  title='Enter a valid field' required value='$sub'><br>";
?>
</fieldset>
<center><input type="Submit" value="Submit" name="signup"></center>
</pre>
</form>
</div>
</body>
</html>