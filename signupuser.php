<!DOCTYPE HTML>
<html>
<head>
<title>User Signup</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php

extract($_POST);
include("conn.php");
$rs=mysqli_query($conn,"select * from user where login='$user_id'");
if (mysqli_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1>Login Id Already Exists</div>";
	exit;
}
$query="insert into user(user_id,login,pass,name,email) values('$user_id','$login','$pass','$name','$email')";
$reults=mysqli_query($conn,$query) ;
if($reults)
{
echo "<br><br><br><div class=head1>Your Login ID  $user_id Created Sucessfully</div>";
echo "<br><div class=head1>Please Login using your Login ID to take Quiz</div>";
echo "<br><div class=head1><a href=login.php>Login</a></div>";
}
else {
	echo "<script>alert('Please check all fields and enter again');</script>";
	  
    
}

?>
</body>
</html>