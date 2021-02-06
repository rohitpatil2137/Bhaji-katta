
<?php
include("conn.php");
extract($_POST);

if(isset($submit))
{
	$rs=mysqli_query($conn,"select * from user where user_id='$user_id' and pass='$pass'");
	if(mysqli_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION["login"]=$user_id;
	}
}
if (isset($_SESSION["login"]))
{
    
    header("Location: index.html"); 
    echo "<script>alert('Login Successfully.........');</script>";
exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
<nav class="navbar background-sm hnav-resp" style="height: 48px;">
        <ul class="nav-list v-class-resp">
            <div class="logo"><a href="index.html"><img src="img/logo.png" alt="logo"></a></div>
            <li> <a href="index.html">Home</a></li>
            <li> <a href="cake-product.html">Cakes</a></li>
            <li> <a href="Vegetables.html">Vegetables</a></li>
            <li><a href="Contact_Us.php">Contact US</a></li>       
            <li><a href="login.php">Login</a></li>
            <li><a href="signup.php">Register</a></li>
           
            
        </ul>
        <div class="rightNav v-class-resp">
            <input type="text" name="search" id="search">
            <button class="btn btn-sm">Search</button>
        </div>
        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </nav>

<div class="floating-box" style=" text-align: center;
    margin-top: 101px;
    background-color: honeydew;
    padding: 30px;">

<form name="form1" method="post">
<h1 style="padding: 20px;">Login Form</h1>

   <label for="uname">User Name</label>
   <input type="text" id="loginid2" name="user_id"><br><br>

   <label for="pwd">Password</label>
   <input type="password" id="pass2" name="pass"><br><br>
   <input name="submit" type="submit" id="submit" value="Login"><br>

<p>New User <a href="signup.php">Register Here</a></p>
<?php
		  if(isset($found))
		  {
		  	echo '<p class="w3-center w3-text-red">Invalid user id or password<br><a href="login.php">Please try again</p>';
		  }
		  ?>

</form>

</div>

</body>
</html>