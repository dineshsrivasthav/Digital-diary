<?php
session_start();
$uname=$_SESSION['userid'];
$pw=$_SESSION['pass'];
?>
<!DOCTYPE html>
<html>
<head>
 <script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
	<title>
		User
	</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style >
	body{
		background-image: url("bk8.jpg");
		background-size: cover;
		font-family:Trebuchet MS;
	}
.button{
display:inline;
background-color: #8f1503  ;
font-family: Trebuchet MS;
border-color:#8f1503;
height:8vh;
border-width: 1.2px;
border-style: unset;
color:white;
font-size: 15px;
margin-left:40px;
border-radius: 6px;
cursor: pointer;
}
.button:hover
{
	background-color:#C73720;
}
.button:focus
{
	outline: none;
}
.button9{
    float: right;
    margin-right: 20px;
display:inline;
background-color: #8f1503 ;
font-family: Trebuchet MS;
border-color: #8f1503;
height:8vh;
border-width: 1.2px;
border-style: unset;
color:white;
font-size: 15px;
margin-left:40px;
border-radius: 6px;
cursor: pointer;
}
.button9:hover
{
    background-color:#C73720;
}
.button9:focus
{
    outline: none;
}
#login{
	  float:left;
  }

h1{
	margin-top: 20px;
	margin-left: 40px;
	font-family: Trebuchet MS;
	font-size:30px;
	color:#373737 ;
}
.btn {
    background-color:#e6e6e6 ; 
    border: none; 
    color: #8f1503; 
    padding: 8px 16px; 
    font-size: 19px; 
    cursor: pointer; 
    margin-top:-15px;
}
.btn:hover {
    background-color: #d6d6d6;
}
hr{
	margin-top: -20px;
	margin-left: 40px;
	margin-right: 40px;
	background-color: #e6e6e6;
}
#d1{
	background-color: #e6e6e6;
	margin-left: 40px;
	margin-right: 40px;
	margin-top:25px;
	height:28px;
	padding-top: 10px;
	padding-left: 15px;
	font-family: Trebuchet MS;
	border-radius: 8px;
}
.c1
{
  border-radius:4px;
  width:250px;
  height:28px;
  font-family: Trebuchet MS;
  padding-left: 10px;
  background:transparent;
  outline:none;
  outline-style: none;
  border-top:none;
  border-left: none;
  border-right: none;
  border-bottom: 2px solid #8f1503;
  color:black;
}
.button1
{background-color: #8f1503 ; 
  margin:38px 2px ;
  padding:12px;
  padding-bottom: 8px;
  padding-top: 8px;
  color:white;
  border-color:#8f1503 ;
  font-family: Trebuchet MS;
  border-radius:5px;}
.button1:hover
  {
    background-color: #C73720;
  }
 p{
 	font-family: Trebuchet MS;
 }
 #p1{
 	margin-top: 30px;
 	margin-left:580px;
 	font-size:20px;
 }
 

	.topnav {
  overflow: hidden;
  background-color: #8f1503;
  margin-top:-10px;
   margin-right:-10px;
    margin-left:-10px;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 25px 10px;
  text-decoration: none;
  font-size: 17px;
  margin-left:2%;
}

.topnav .icon {
  display: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 17px;    
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  margin: 0;
  margin-left:15px;
background-color:#8f1503;
font-family: Trebuchet MS;
border-color: #8f1503;
height:8vh;
border-width: 1.2px;
cursor: pointer;
margin-top:10px;
}
.dropdown .dropbtn:hover
{
	border-bottom:5px solid #C73720;
	border-radius: 60px;
}
.dropdown .dropbtn:focus
{
	outline: none;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.topnav a:hover,  .dropbtn {
  color: white;
  border-bottom: 5px solid #C73720;
  border-radius:60px;
}

.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
  border:none;
  margin:0px;
  border-radius:0px;
}

.dropdown:hover .dropdown-content {
  display: block;
}

@media screen and (max-width: 600px) {
  .topnav a, .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: left;
    display: block;
	border:none;
  }
}
#login{
	  float:left;
  }

@media screen and (max-width: 600px) {
.dropdown .dropbtn {
		margin-left:6px;
	} 
 .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
  
  
  .btn115{
	margin-left:5px;
    float:left;
   margin-top:20px;
}
 .btn116{
	 clear:both;
	margin-left:5px;
    float:left;
   margin-top:20px;
}
#cx1,#cx2{
  width:50%;
  }
#cx3{
	float:left;
clear:right;
}
#d1{
width:80%;	
}
#fx{
	display:none;
}
.c1
{
margin-left:-40px;	
}
}

.btn115, .btn116{
	display:inline-block;
	background-color:#8f1503; 
    border: none; 
    color: white; 
    padding: 5px 20px;
	height:60px;
    font-size: 17px; 
    cursor: pointer; 
    margin-left:10px;
    float:left;
   margin-top:20px;
    border-radius: 4px;
    font-family: Trebuchet MS;	
	width:85px;
}
.btn115:hover {
    background-color:  #C73720;
}
#ab{
	text-align:left;
	margin-left:10%;
	margin-top:5%;
}
#f1{

	margin-left:35%;
	margin-top:5%;	
}
</style>
</head>
<body>
<div class="topnav" id="myTopnav">
  <a href="address book.php">Address Book</a>
  <a href="notes.php">Notes</a>
  <a href="remainder system.php">Remanider System</a>
  <a href="gallery.php">Gallery</a>
  <div class="dropdown">
    <button class="dropbtn">User <i class="fa fa-caret-down"></i></button>
    <div class="dropdown-content">
      <a href="user-info.php"><b>User information</b></a>
      <a href="change password.php"><b>Change password</b></a>
    </div>
  </div> 
  <a href="login page.php" id="login">Logout</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>


<div id="d1"><button class="btn" onclick="location.href='index.php'"><i class="fa fa-home"></i></button> / Change password</div>
	<h1>Change password</h1><hr>

<div style="height:10px;"></div>

<form name="myform1" id="f1" action="" method="POST">
<div id="ab" >
    <img src="final.png" width:"100px" height="90px" radius:"4px">
<br>

<p style="margin-left:3%;"><b><?php echo $uname ?></b></p></div><br>
<input class="c1" type="password" name="password" placeholder="Current password"><br><br>
<input class="c1" type="password" name="new_password" placeholder="Enter new password"><br><br>
<input class="c1" type="password" name="confirm_password" placeholder="Re-enter password"><br>
<input type="submit" value="Update" class="button1"></form>
	</body>
</html>




<?php
		$con=mysqli_connect("localhost","root","","project"); 	 	
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$pass0=filter_input(INPUT_POST, 'password');
$pass1=filter_input(INPUT_POST, 'new_password');
$confirm1=filter_input(INPUT_POST, 'confirm_password');
if(($pass0==$pw) && ($pass1==$confirm1)){
	$result1=mysqli_query($con,"UPDATE `sign_up` SET pass='$pass1',confirm='$confirm1' where userid='$uname' ");
	echo "<p id='fx' style='margin-left:10px;margin-top:-420px;'>" . "Password updated sucessfully."."<br>" ."Please re-login." . "</p>";
}
else{
	echo "<p id='fx' style='margin-left:50px;margin-top:-420px;color:red'>" . "*Enter correct password to change it." . "</p>";
}
mysqli_close($con);
?>