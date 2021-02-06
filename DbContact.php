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
$query1="insert into contact(name,phone,email,concern) values('$name','$phone','$email','$concern')";
$reults=mysqli_query($conn,$query1) ;
if($reults)
{
echo "<br><br><br><div class=head1>Your Login ID  $name Created Sucessfully</div>";
echo "<br><div class=head1>Please Login using your Login ID to take Quiz</div>";
echo "<br><div class=head1><a href=login.php>Login</a></div>";
}
else {
	echo "<script>alert('Please check all fields and enter again');</script>";
	  
    
}

?>
</body>
</html>