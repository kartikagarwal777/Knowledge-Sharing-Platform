<html>
<?php
if (isset($_SESSION['username'])) {
	header('Location: index.php');
	}
	else{
	}
	if(isset($_POST['login'])){
		session_start();
include('db.php');
$user=$_POST['uname'];
$pass=$_POST['pwd'];
$sql = "SELECT * FROM author WHERE username ='$user' and password ='$pass'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$count = mysqli_num_rows($result);
if($count == 1) {
    $_SESSION['username']=$_POST['uname'];
    header("location: index.php");
    }
	else{
	echo "<label id='er' >Note: Wrong Username and Password</label>";
	}

}

?>


<head>
<!--<title>Learnify</title>-->
</head>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<body>
<ul>
<li><a>Learnify</a><li>
<li><a href="index.php">Home</a></li>
</ul>
<center>
<div id="container1">
<form action="" method="post">
<h1>Login</h1><br>
<input type="text" pattern="^[a-zA-Z0-9]{3,15}$" title="Username must be between 3 and 15 characters and contain only alphanumeric characters" name="uname" placeholder="Username" required><br>
<input type="password" pattern="^[a-zA-Z0-9*_$]{8,20}$" title="Password must be between 8 and 20 characters and contain alphanumeric or *,_,$" name="pwd" placeholder="Password" required><br>
<button type="Submit" value="Login" name="login">Submit</button>
</form>
</div>
</center>
</body>
</html>