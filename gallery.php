<?php
session_start();
$uname=$_SESSION['userid'];
?>
<!DOCTYPE html>
<html>
<head>
<script>
function openForm() {
    document.getElementById("myForm").style.display = "block";
}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}
function openForm1() {
    document.getElementById("myForm1").style.display = "block";
}

function closeForm1() {
    document.getElementById("myForm1").style.display = "none";
}
</script>
<script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  
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
		Gallery
			</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  

	<style >
	body{
		background-image: url("bk8.jpg");
		background-size: cover;
		font-family:Trebuchet MS;
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
h1{
	margin-top: 30px;
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
input{
	margin-top: 210px;
	float:left;
    margin-left: 40px;
	height: 30px;
	border-radius: 4px;
	font-family: Trebuchet MS;
    outline:none;
}
hr{
	margin-top:-20px;
	margin-left: 40px;
	margin-right: 40px;
	background-color: #e6e6e6;
}
.btn1{
display:inline;
background-color: #8f1503 ;
font-family: Trebuchet MS;
border-color: #8f1503;
height:25px;
border-width: 1.2px;
border-style: unset;
color:white;
font-size: 15px;
border-radius: 6px;
cursor: pointer;
margin-left:0px;
}
.btn1:hover
{
    background-color:#C73720;
}
.btn1:focus
{
    outline: none;
}
.btn2{

height:500px;
margin-top:200px;}

.open-button {
	background-color:#8f1503; 
    border: none; 
    color: white; 
    padding: 5px 15px;
	height:60px;
    font-size: 17px; 
    cursor: pointer; 
    margin-left:70px;
    float:left;
    border-radius: 4px;
    font-family: Trebuchet MS;	
	width:85px;
}
.open-button1 {
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
    border-radius: 4px;
    font-family: Trebuchet MS;	
	width:85px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  top: 0;
  right: 375px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  width: 300px;
  height: 180px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 95%;
  padding: 6px;
  margin-bottom:20px;
  margin-top:5px;
  border: none;
  border-radius:4px;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btnx {
 background-color:#8f1503; 
  color: white;
  padding: 6px;
  border: none;
  border-radius:4px;
  cursor: pointer;
  width: 60%;
  margin-left:60px;
  margin-bottom:10px;
  font-family:Trebuchet MS;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: #8f1503;
}
.form-container .btnx:hover, .open-button:hover,.open-button1:hover {
  background-color:  #C73720;
}
#man{
	color:white;
}
#login{
	float:right;margin-right:10px;
}
#fx{
	margin-top:20px;margin-left:50px;margin-right:12px;border: 2px solid #8f1503;
}
@media screen and (max-width: 950px) {
	
#myTable
{
	float:left;
	margin-left:0px;
	overflow:auto;
}
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
  #login{
	  float:left;
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
width:20%;	
}
.open-button
{
	margin-left:-300px;
	margin-top:50px;
	float:left;
}
.open-button1
{
	margin-left:-200px;
	margin-bottom:70px;
	margin-top:50px;
	float:left;
}
#d1{
	width:80%;
}
#fx
{
margin-left:50px;	
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


<div id="d1"><button class="btn" onclick="location.href='index.php'"><i class="fa fa-home"></i></button> / Gallery</div>
	<h1>Gallery</h1><hr>

<div style="height:10px;"></div>

<form method="post" action="" enctype="multipart/form-data">
    <input style="margin-top:10px;margin-left:50px" type="file" name="image" id="image" > 
	<input style="margin-top:10px;" type="submit" name="insert" id="insert" value="Upload" class ="btn1">
	
</form>



<button class="open-button" title="View image" onclick="openForm()"><i class="fa fa-eye"></i> View</button>
<button class="open-button1" title="delete image" onclick="openForm1()"><i class="fa fa-trash"></i> Delete</button>
	<div class="form-popup" id="myForm" >
  <form action="g.php" class="form-container">

    <label for="id" style="font-family:Trebuchet MS;"><b>View image</b></label><br><br>
    <input type="text" placeholder="Enter the id of the image you want to view" name="id" required><br>
	
    <button type="submit"  class="btnx">Enter</button><br>
    <button type="button" class="btnx cancel" onclick="closeForm()">Close</button>
  </form>
  </div>

  
  
  <div class="form-popup" id="myForm1" >
  <form action="" class="form-container" method="POST">

    <label for="idx" style="font-family:Trebuchet MS;"><b>Delete image</b></label><br><br>
    <input type="text" placeholder="Enter the id of the record you want to delete" name="idx" required><br>
	
    <button type="submit"  class="btnx">Enter</button><br>
    <button type="button" class="btnx cancel" onclick="closeForm1()">Close</button>
  </form>
  </div>



<?php  
 $connect = mysqli_connect("localhost","root","","project");  
 if(isset($_POST["insert"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images(name,username) VALUES ('$file','$uname')";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      }  
 }  
 ?>  
 <div style="margin-top:100px;margin-left:20px;">
 
 <?php  
$query = "SELECT * FROM tbl_images where username='$uname' ORDER BY id DESC";  
$result = mysqli_query($connect, $query);  
while($row = mysqli_fetch_array($result))  
{  
$id = $row['id'];
echo '<img id="fx" src="data:image;base64,'.base64_encode($row['name'] ).'" height="155" width="210" class="img-thumnail">';  
echo $id;
}  
?>  

</div>
</body>
</html>


<?php

$con=mysqli_connect("localhost","root","","project"); 	 	
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
 if (isset($_POST['idx'])) {
      $idx = $_POST['idx']; 
$result2 = mysqli_query($con,"DELETE FROM tbl_images WHERE id='$idx'");	  
  

if (!$result2) {
        exit('<p>Error performing query: ' . mysql_error() . '</p>');
    }
 }
	mysqli_close($con);
	
?>
