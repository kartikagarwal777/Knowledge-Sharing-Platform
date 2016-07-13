<html>
<?php
include('session.php');
?>
<link rel="shortcut icon" href="favicon.ico">
<head>
<title>Learnify</title>
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

//$sql= "select * from post order by number desc limit 3";
//$result=mysql_query($sql);
 //if ($result==false)
//{
//    die(mysql_error());
//}
//$i= 0;
 //while($row=mysql_fetch_row($result))
 //{$b = $i;
//	echo' <a href="descriptionq/'.$b.'.php" >'.$row[2].'<br>'.$row[4].'<br><br> </a>';
//	$i= $i + 1;
 //}

//?>
</body>
</html>