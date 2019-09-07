<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
</script>

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
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

<script>
function exportToExcel(tableID){
    var tab_text="<table border='2px'><tr style='height: 50px; text-align: center; '>";
    var textRange; var j=0;
    tab = document.getElementById(tableID);
    for(j = 0 ; j < tab.rows.length ; j++)
    {	
        tab_text=tab_text;
        tab_text=tab_text+tab.rows[j].innerHTML.toUpperCase()+"</tr>";
        //tab_text=tab_text+"</tr>";
    }
	
    tab_text= tab_text+"</table>";
    
    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE ");
    
       sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text));
    return (sa);
}
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
		Notes
	</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style >
	body{
		background-image: url("bk8.jpg");
		background-repeat: initial;
		background-size:cover;
		font-family:Trebuchet MS;
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
#cx3{
	float:right;
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
#b4{
	margin-top: 10px;
	float:right;
	height: 30px;
	border-radius: 4px;
	font-family: Trebuchet MS;
	padding:0 10px;
}

table{
	position: absolute;
	margin-top:30px;
	padding: 0px 30px;
	font-family: Trebuchet MS;	
	margin-left:30px;
	margin-right: 40px;
	margin-bottom:40px;
	width:95%;
	border-collapse: collapse;	
}
hr{
	margin-top:-20px;
	margin-left: 40px;
	margin-right: 40px;
	background-color: white;
}
td,th{
	height: 45px;
	text-align:center;

}
tr:nth-child(even){
background-color: #e6e6e6;
	margin-right: 40px;
	border-radius: 1em;
}
a{
   font-family: Trebuchet MS; 
   color:black;
   text-decoration:none;
}
#myInput{
	border-radius:20px;
	width:300px;
	background-color:white;
	font-size:16px;
	margin-right:20px;
	height:35px;
	margin-top:30px;
	float:right;
	padding:0px 10px;
}
#myInput:focus
{
	outline: none;
}
.open-button {
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
   margin-top:20px;
    border-radius: 4px;
    font-family: Trebuchet MS;	
	width:85px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  top: 0;
  right: 15%;
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
#cx2{
display:inline-block;
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

@media screen and (max-width: 500px) {
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
  #myTable
  {
	  margin-top:100px;
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
#cx1{
  width:70%;
  clear:both;
  float:left;
  }
  #cx3{
	  float:left;
	  margin-left: 5%;
  }
#d1{
width:80%;	
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


<div id="d1"><button class="btn" onclick="location.href='index.php'"><i class="fa fa-home"></i></button> / Notes</div>
	<h1>Notes</h1><hr>

<div style="height:10px;"></div>


<div id="cx1" style="display:inline-block;margin-left:30px;">
<button class="btn115" title="Add record"><i class="fa fa-plus"><a href="add notes.php" style="color:white;font-family:Trebuchet MS;"> Add</a></i></button>
<button class="btn115" title="Refresh"onclick="history.go(0)" ><i class="fa fa-refresh"> </i> Refresh </button>
<button class="btn115" title="Mail"><i class="fa fa-envelope"> </i><a id="man" href="mailto:someone@example.com?Subject=Hello%20again" target="_top"> Mail</button></a>
</div>

<div id="cx2">
<button class="btn115" title="Export" onclick="exportToExcel('myTable')"><i class="fa fa-share"> Export</i> </button>
<button class="btn115" title="Print" onclick="window.print()"><i class="fa fa-print"> </i> Print</button>
<button class="open-button" title="Edit record" onclick="openForm()"><i class="fa fa-pencil"></i> Edit</button>
<button class="open-button1" title="Delete record" onclick="openForm1()"><i class="fa fa-trash"></i> Delete</button>
</div>

<div id="cx3">
<input type="text" id="myInput" placeholder=" Quick search">
</div>

<div class="form-popup" id="myForm" >
  <form action="edit notes.php" class="form-container">

    <label for="id" style="font-family:Trebuchet MS;"><b>Edit record</b></label><br><br>
    <input id="b4" type="text" placeholder="Enter the nid of the record you want to edit" name="id" required><br>
	
    <button type="submit"  class="btnx">Enter</button><br>
    <button type="button" class="btnx cancel" onclick="closeForm()">Close</button>
  </form>
  </div>
  
  <div class="form-popup" id="myForm1" >
  <form action="" class="form-container" method="POST">

    <label for="idx" style="font-family:Trebuchet MS;"><b>Delete record</b></label><br><br>
    <input id="b4" type="text" placeholder="Enter the nid of the record you want to delete" name="idx" required><br>
	
    <button type="submit"  class="btnx">Enter</button><br>
    <button type="button" class="btnx cancel" onclick="closeForm1()">Close</button>
  </form>
  </div>

</body>
</html>

	





<?php
$con=mysqli_connect("localhost","root","","project"); 	 	
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if(isset($_GET['order'])) {
	$order = $_GET["order"];
}
else{
	$order = "nid";
}
if(isset($_GET['sort'])) {
	$sort = $_GET["sort"];
}
else{
	$sort = "ASC";
}
$uname=$_SESSION['userid'];

$result = mysqli_query($con,"SELECT * FROM notes where username='$uname' order by $order $sort");
if (!$result) {
        exit('<p>Error performing query: ' . mysql_error() . '</p>');
    }
	
$sort == 'DESC' ? $sort = 'ASC' : $sort = 'DESC';

echo "<table id='myTable' >
<tr>

<th><a href='?order=nid&&sort=$sort'>Nid</a></th>   
<th><a href='?order=notes&&sort=$sort'>Notes</a></th>
<th><a href='?order=date&&sort=$sort'>Date</a></th>
<th><a href='?order=time&&sort=$sort'>Time</a></th>
<th><a href='?order=username&&sort=$sort'>Username</a></th>
</tr>";
while($row = mysqli_fetch_array($result))
{
	$nid = $row['nid'];
	$notes = $row['notes'];
	$date = $row['date'];
	$time = $row['time'];
	$username = $row['username'];
echo "<tr>";
echo "<td>" . $row['nid'] . "</td>";
echo "<td>" . $row['notes'] . "</td>";
echo "<td>" . $row['date'] . "</td>";
echo "<td>" . $row['time'] . "</td>";
echo "<td>" . $row['username'] . "</td>";

echo "</tr>";
}
echo "</table>";

 
   if (isset($_POST['id'])) {
      $id = $_POST['id'];   
   }
   ?>
   
<?php
$con=mysqli_connect("localhost","root","","project"); 	 	
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
 if (isset($_POST['idx'])) {
      $idx = $_POST['idx']; 
$result2 = mysqli_query($con,"DELETE FROM notes WHERE nid='$idx'");	  
  

if (!$result2) {
        exit('<p>Error performing query: ' . mysql_error() . '</p>');
    }
 }
	mysqli_close($con);
	
?>
