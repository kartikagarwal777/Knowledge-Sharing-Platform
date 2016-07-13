<?php
include('session.php');
if (isset($_SESSION['username'])) {
	if(isset($_POST['bt1'])){
include('db.php');
// Fetching values from form
$sql="insert into post(author,title,domain,article)
VALUES('$login_session1','$_POST[title]','$_POST[domain]','$_POST[article]')";
if (!mysqli_query($con,$sql))
{
die('Error: ' . mysql_error());
}
else{
$message = "post successful";
echo "<script type='text/javascript'>alert('$message');</script>";
}
}
}
?>

<html>
<head>
<title>Learnify</title>
</head>
<link rel="stylesheet" type="text/css" href="mystyle2.css">
<body>
<ul>
<li><a>Learnify</a><li>
<li><a href="index.php">Home</a></li>
</ul>
<div id="container3">
<h1>Post</h1>
<form action="" method="post">
<pre>
Title:   <input type="text" name="title" maxlength=150 required>

Domain:  <input type="text" name="domain" maxlength=25 required>

Article: <textarea name="article" maxlength= 4294967295 required></textarea>

<button type="submit" value="Post" name="bt1">Submit</button>
</pre>
</form>
</body>
</div>
</html>
