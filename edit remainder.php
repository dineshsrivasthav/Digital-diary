<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Edit-remainder
	</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
	<style >
	body{
		background-image: url("bk8.jpg");
		background-size: cover;
		font-family:Trebuchet MS;
		margin-bottom:5%;
	}

.button{
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
.button:hover
{
	background-color:#C73720;
}
.button:focus
{
	outline: none;
}
.button1{
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
.button1:hover
{
    background-color:#C73720;
}
.button1:focus
{
    outline: none;
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
.d1{
	
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

h1{
	margin-top: 30px;
	margin-left: 40px;
	font-family: Trebuchet MS;
	font-size:30px;
	color:#373737 ;
}
#hr1{
	margin-top:-20px;
	margin-left: 40px;
	margin-right: 40px;
	background-color: #e6e6e6;
}
label{
margin-left:180px;
}
input,select,textarea{
border-radius:10px;
height:30px;
border-style:inset;
border-color:#e6e6e6;
width:60%;
float:right;
margin-right:180px;
outline:none;
}
.d2{
background-color: #e6e6e6;
margin-left: 20px;
margin-right: 20px;
margin-top:25px;
height:35px;
padding-top: 7px;
padding-left: 15px;
padding-bottom:3px;
font-family: Trebuchet MS;
border-radius: 8px;
}
#f1{
margin-top:40px;
padding:20px;
font-family: Trebuchet MS;
}
#b1{
background-color:#8f1503;
color:white;
border:none;
width:100px;
height:35px;
margin-left:550px;
border-radius:10px;
font-size:20px;
font-family: Trebuchet MS;
}
#b1:hover{
background-color: #C73720;
}
#b2{
background-color:grey;
color:white;
border:none;
width:100px;
height:30px;
margin-right:250px;
border-radius:10px;
}
#b2:hover{
background-color: #55514F;
}
#login{
	float:right;
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

@media screen and (max-width: 1000px) {
  .topnav a, .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: left;
    display: block;
	border:none;
  }
}

@media screen and (max-width: 1000px) {
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
  #login{
	  float:left;
  }
#d1{
width:80%;	
}
input{
	float:right;
}
}
@media screen and (max-width: 500px) {
	.d2
	{
		margin-top:15%;
		width:80%;
	}
	#btn2{
		margin-top:-25%;
	}
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
<div class="d1"><button class="btn" onclick="location.href='index.php'"><i class="fa fa-home"></i></button> / <b style="color:#8f1503">Remainder system</b> / Edit</div>
	<h1>Edit</h1><hr id="hr1">
	
	
	<?php
$con=mysqli_connect("localhost","root","","project"); 	 	
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$id = $_GET['id'];
$rid=$id;
$uname=$_SESSION['userid'];
		$result = mysqli_query($con,"SELECT * FROM remainder_system WHERE username='$uname' and rid=$id");
if (!$result) {
        exit('<p>Error performing query: ' . mysql_error() . '</p>');
    }
        while($row = mysqli_fetch_array($result))
{
	$rid = $row['rid'];
	$start_date = $row['start_date'];
	$start_time = $row['start_time'];
	$message = $row['message'];
	$username = $row['username'];
	   
?>

	
	
<form name="myform1" id="f1" action="" method="POST">
<label for="rid">Rid<b style="color:red">*</b></label>
<input type="text" id="aid" name="aid" value="<?php echo $rid; ?>" required><br><br><br>
<label for="start_date">Date</label>
<input type="date" id="start_date" name="start_date" value="<?php echo $start_date; ?>"><br><br><br>
<label for="start_time">Time</label>
<input type="time" id="start_time" name="start_time" value="<?php echo date('h:i',strtotime($start_time)); ?>"><br><br><br>
<label for="message">Message</label>
<input type="text" id="message" name="message" value="<?php echo $message; ?>"><br><br><br>
<label for="uname">Username</label>
<input type="text" name="username" value="<?php echo $username; ?>" disabled="disabled"><br><br><br>
<p style="text-align:right;margin-right:200px"><b style="color:red"><b style="color:red">*</b></b>- Required field</p>
<input style="margin-right:45%;" type="submit" id="b1" value="Save">
</form>

<?php
        }
		?>
<?php
		$con=mysqli_connect("localhost","root","","project"); 	 	
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$rid1=filter_input(INPUT_POST, 'rid');
$start_date1=filter_input(INPUT_POST, 'start_date');
$start_time1=filter_input(INPUT_POST, 'start_time');
$message1=filter_input(INPUT_POST, 'message');
	$result1=mysqli_query($con,"UPDATE remainder_system SET start_date='$start_date1',start_time='$start_time1',message='$message1' where rid=$id ");
	
	
if (!$result1)
  {
  die(' ' . mysql_error());
  }
mysqli_close($con);
?>
</body>
</html>