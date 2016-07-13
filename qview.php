<html>
<?php
include('session.php');
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
<link rel="stylesheet" type="text/css" href="mainstyle.css">
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
include('db.php');

$res1 = mysqli_query($con,"select * FROM question");
?>
<div class="corners1">
<?php	
while($rw = mysqli_fetch_array($res1))
{
echo "<a href=vques.php?id=$rw[0]> $rw[3] </a><br><br>";
}
?>

</body>
</html>