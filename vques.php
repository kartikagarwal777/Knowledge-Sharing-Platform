<html>
<?php
include('session.php');
$id=$_GET["id"];
if (isset($_SESSION['username'])) {
	if(isset($_POST['bt1'])){
include('db.php');
$sql="insert into comments (q_no,author,comment) VALUES ('$id','$login_session1','$_POST[article]')";
if (!mysqli_query($con,$sql))
{
die('Error: ' . mysql_error());
}
echo "Post Successful";
}
}
?>
<head>
<title>Learnify</title>
<style type="text/css">
	.corners1 {
    border-radius: 25px;
    background: white;
    padding: 20px; 
    width: auto;
    height: auto;
    margin:20px;    
}
</style>
</head>
<link rel="stylesheet" type="text/css" href="mystyle3.css">
<body>
 <div id="cont">
	<h1>Learnify</h1>
	</div>
	
	
<div id="horizontalmenu">
        <ul> 
		<li class="dropdown">
		<a class="dropbtn" href="#">Posts</a>
		<div class="dropdown-content">
		<?php
		if (isset($_SESSION['username'])){
			?>
                <a href="post.php">Create</a>
				<?php
				}
				?>
					 <a href="pview.php">Latest</a>
					 </div>
            </li>
			<li class="dropdown">
			<a class="dropbtn" href="#">Questions</a>
			<div class="dropdown-content">
            <?php
			if (isset($_SESSION['username'])){
			?>
                <a href="question.php">Create</a>
				<?php
				}
				?>
				     <a href="qview.php">Latest</a>
					 </div>
			</li>
			<?php
			if (isset($_SESSION['username'])){
				?>
				<li style="float:right"><a href="logout.php">Logout</a></li>
				<li style="float:right"><a href="author.php"><?php echo"Welcome $login_session"; ?></a></li>
			<?php	
			}
			else{
				?>
			<li style="float:right"><a href="login.php">Login</a></li>
			<li style="float:right"><a href="signup.php">Signup</a></li>
			<?php
			}
			?>
		</ul>		
</div>
<br>

<?php

$id=$_GET["id"];

$res1 = mysqli_query($con,"select * FROM question where id=$id");

$rw = mysqli_fetch_array($res1);
	?>
<center>
<div id="container2">
<?php
echo "<h2> $rw[3] </h2>";
echo "<small>$rw[1]<br>" ;
echo "<a href=vauthor.php?user=$rw[2]> $rw[2] </a><br></small><br>";
echo "$rw[5]" ;
?>
</div>
<div id="container3">
<?php
			if (isset($_SESSION['username'])){
				?>
				<form name="f1" method="post" action="">
Write your Answer: <textarea maxlength= 4294967295 required name="article"></textarea><br><br>
<input type=submit name="bt1">
</form>
<?php
}
else
{
	echo "<a href=login.php>Login To Write Answer</a>";
}
?>
</div>

<?php
$res1 = mysqli_query($con,"select * FROM comments where q_no=$id");
?>
<?php	
while($rw = mysqli_fetch_array($res1))
{
	?>
	<div id="container2">
	<?php
	echo "<a href=vauthor.php?user=$rw[2]> $rw[2] </a><br><br>";
echo "$rw[3]";
?>
</div>
<?php
}
?>
</center>

</body>
</html>