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
include('db.php');
$id=$_GET["id"];

$res1 = mysqli_query($con,"select * FROM post where id=$id");

$rw = mysqli_fetch_array($res1);
	?>
<div id="container2">
<?php
echo "<h2> $rw[3] </h2>";
echo "<small>$rw[1]<br>" ;
echo "<a href=vauthor.php?user=$rw[2]> $rw[2] </a><br></small><br>";
echo "$rw[5]" ;
?>
</div>

</body>
</html>