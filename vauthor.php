<html>
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
<link rel="stylesheet" type="text/css" href="mystyle.css">
<body>
<ul>
<li><a>Learnify</a><li>
<li><a href="index.php">Home</a></li>
</ul>
<?php
include('db.php');
$user_check=$_GET["user"];
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
?>
<div class="corners1">
<?php
echo "Name: $name <br>";
echo "Age: $age <br>";
echo "Experience: $exp <br>";
echo "Institution: $insti <br>";
echo "Phone No: $ph <br>";
echo "Email Id: $em <br>";
echo "Subject Expertise: $sub <br>";
?>
</div>
</body>
</html>