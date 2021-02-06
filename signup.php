<!DOCTYPE HTML>
<html>
<head>
<title>New user signup </title>
<script language="javascript">
function check()
{

 if(document.form1.lid.value=="")
  {
    alert("Plese Enter Login Id");
	document.form1.lid.focus();
	return false;

  }
 
 if(document.form1.pass.value=="")
  {
    alert("Plese Enter Your Password");
	document.form1.pass.focus();
	return false;
  } 
  if(document.form1.cpass.value=="")
  {
    alert("Plese Enter Confirm Password");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.pass.value!=document.form1.cpass.value)
  {
    alert("Confirm Password does not matched");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.name.value=="")
  {
    alert("Plese Enter Your Name");
	document.form1.name.focus();
	return false;
  }
  if(document.form1.address.value=="")
  {
    alert("Plese Enter Address");
	document.form1.address.focus();
	return false;
  }
  if(document.form1.city.value=="")
  {
    alert("Plese Enter City Name");
	document.form1.city.focus();
	return false;
  }
  if(document.form1.phone.value=="")
  {
    alert("Plese Enter Contact No");
	document.form1.phone.focus();
	return false;
  }
  if(document.form1.email.value=="")
  {
    alert("Plese Enter your Email Address");
	document.form1.email.focus();
	return false;
  }
  e=document.form1.email.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email");
			document.form1.email.focus();
			return false;
		}
  return true;
  }
  
</script>
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

<div class="register" style="text-align: center;
    margin-top: 101px;
    background-color: honeydew;
    padding: 30px;">
<form name="form1" method="post" action="signupuser.php" onSubmit="return check();" >

<h1 style="padding: 20px;">Registeration</h1>
   <label for="pwd"> User Id</label>
   <input type="text" id="name" name="user_id"><br><br>
   <label for="pwd">Password</label>
   <input type="password" id="login" name="login"><br><br>
     
   <label for="pwd"> Confirm   </label>
   <input type="password" id="pass" name="pass"><br><br>
   <label for="uname">Name</label>
   <input type="text" id="name" name="name"><br><br>
       
   
   <label for="uname">Email id</label>
   <input type="text" id="email" name="email"><br><br>
    
   <input type="submit" name="submit" value="Signup">
	<p>Already Register <a href="login.php" >Login here</a></p>
                              

</form>
</div>

 
 
</body>
</html>