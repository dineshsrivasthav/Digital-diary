<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Edit-user_info
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
#login{
	  float:right;
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
padding:20px;
font-family: Trebuchet MS;
}
#b1{
background-color:#8f1503;
color:white;
border:none;
width:100px;
height:30px;
margin-left:550px;
border-radius:10px;
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
<div class="d1"><button class="btn" onclick="location.href='index.php'"><i class="fa fa-home"></i></button> / <b style="color:#8f1503">User</b> / Edit</div>
	<h1>Edit</h1><hr id="hr1">








<?php
$con=mysqli_connect("localhost","root","","project"); 	 	
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$uname=$_SESSION['userid'];
		$result = mysqli_query($con,"SELECT * FROM user_info WHERE username='$uname' ");
if (!$result) {
        exit('<p>Error performing query: ' . mysql_error() . '</p>');
    }
        while($row = mysqli_fetch_array($result))
{
	$aid = $row['aid'];
	$name = $row['name'];
	$gender = $row['gender'];
	$dob = $row['dob'];
	$father_name = $row['father_name'];
	$mobile = $row['mobile'];
	$email = $row['email'];
	$address = $row['address'];
	$qualification = $row['qualification'];
	$designation = $row['designation'];
	$nationality = $row['nationality'];
	$other_details = $row['other_details'];
	$username = $row['username'];
	   
?>



<form name="myform1" id="f1" action="" method="POST">
<label for="aid">Aid<b style="color:red">*</b></label>
<input type="text" id="aid" name="aid" value="<?php echo $aid; ?>" required><br><br><br>
<label for="name">Name</label>
<input type="text" id="name" name="name" value="<?php echo $name; ?>"><br><br><br>
<label for="gender">Gender</label>
<select id="gender" name="gender" value="<?php echo $gender; ?>">
<option name="male" value="Male" >Male</option>
<option name="female" value="Female">Female</option>
<option name="other" value="Other">Other</option></select><br><br><br>
<label for="dob">DOB</label>
<input type="date" id="dob" name="dob" value="<?php echo $dob; ?>"><br><br><br>
<label for="father_name">Father's Name</label>
<input type="text" id="father_name" name="father_name" value="<?php echo $father_name; ?>"><br><br><br>
<label for="mobile">Phone number</label>
<input type="tel" id="mobile" name="mobile"  pattern=".{10}" value="<?php echo $mobile; ?>"><br><br><br>
<label for="email">Mail Id</label>
<input type="email" id="email" name="email" value="<?php echo $email; ?>"><br><br><br>
<label for="address">Address</label>
<input type="text" id="address" name="address" value="<?php echo $address; ?>" ><br><br><br>
<label for="qualification">Qualification</label>
<input type="text" id="qualification" name="qualification" value="<?php echo $qualification; ?>"><br><br><br>
<label for="designation">Designation</label>
<input type="text" id="designation" name="designation" value="<?php echo $designation; ?>" ><br><br><br>
<label for="nationality">Nationality</label>
<input type="text" id="nationality" name="nationality" value="<?php echo $nationality; ?>"><br><br><br>
<label for="other_details">Other details</label>
<input type="text" id="other_details" name="other_details" value="<?php echo $other_details; ?>" ><br><br><br>
<label for="username">Username</label>
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
$aid1=filter_input(INPUT_POST, 'aid');
$name1=filter_input(INPUT_POST, 'name');
$gender1=filter_input(INPUT_POST, 'gender');
$dob1=filter_input(INPUT_POST, 'dob');
$father_name1=filter_input(INPUT_POST, 'father_name');
$mobile1=filter_input(INPUT_POST, 'mobile');
$email1=filter_input(INPUT_POST, 'email');
$address1=filter_input(INPUT_POST, 'address');
$qualification1=filter_input(INPUT_POST, 'qualification');
$designation1=filter_input(INPUT_POST, 'designation');
$nationality1=filter_input(INPUT_POST, 'nationality');
$other_details1=filter_input(INPUT_POST, 'other_details');
$result1=mysqli_query($con,"UPDATE user_info SET name='$name1',gender='$gender1',dob='$dob1',father_name='$father_name1',mobile='$mobile1',email='$email1',address='$address1',qualification='$qualification1',designation='$designation1',nationality='$nationality1',other_details='$other_details1' where username='$uname'");
	
	

mysqli_close($con);
?>
</body>
</html>