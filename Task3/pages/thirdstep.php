<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../stylesheet/deshboard.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div id="mySidenav" class="sidenav">
	<p class="logo"><span>Shalini</span></p>
  <a href="admindeshboard.php" class="icon-a"> &nbsp;&nbsp;Dashboard</a>
  <select class="icon-a" name="" id="search" onchange="location = this.value;">
                  <option  value="">&nbsp;&nbsp;&nbsp;&nbsp;Students</option>
                  <option value="alldata.php">&nbsp;&nbsp;Student Data</option>
                  <option  value="addmarks.php">&nbsp;&nbsp;Add Marks</option>
                  <option value="updatemarks.php">&nbsp;&nbsp;Update Marks</option>
                  <option value="delete.php">&nbsp;&nbsp;Delete Marks</option>
                  <option value="message.php">&nbsp;&nbsp;Messages</option>
                </select>
  <a href="#"class="icon-a"> &nbsp;&nbsp;Projects</a>
  <a href="#"class="icon-a"> &nbsp;&nbsp;Orders</a>
  <a href="#"class="icon-a"> &nbsp;&nbsp;Inventory</a>
  <a href="#"class="icon-a"> &nbsp;&nbsp;Accounts</a>
  <a href="#"class="icon-a"> &nbsp;&nbsp;Tasks</a>

</div>
<div id="main">

	<div class="head">
		<div class="col-div-6">
<span style="font-size:30px;cursor:pointer; color: white;" class="nav"  >&#9776; Dashboard</span>
<span style="font-size:30px;cursor:pointer; color: white;" class="nav2"  >&#9776; Dashboard</span>
</div>
	
	<div class="col-div-6">
	<div class="profile">
		<button>
        <a href="logout.php">LOGOUT</a>
        </button>
	</div>
</div>
	<div class="clearfix"></div><br><br>
</div>

<div class="col">
		<div class="box-8">
		<div class="content-box">
<h2>First Step- Student Details</h2>
</div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

  $(".nav").click(function(){
    $("#mySidenav").css('width','70px');
    $("#main").css('margin-left','70px');
    $(".logo").css('visibility', 'hidden');
    $(".logo span").css('visibility', 'visible');
     $(".logo span").css('margin-left', '-10px');
     $(".icon-a").css('visibility', 'hidden');
     $(".icons").css('visibility', 'visible');
     $(".icons").css('margin-left', '-8px');
      $(".nav").css('display','none');
      $(".nav2").css('display','block');
  });

$(".nav2").click(function(){
    $("#mySidenav").css('width','300px');
    $("#main").css('margin-left','300px');
    $(".logo").css('visibility', 'visible');
     $(".icon-a").css('visibility', 'visible');
     $(".icons").css('visibility', 'visible');
     $(".nav").css('display','block');
      $(".nav2").css('display','none');
 });

</script>

</body>
</html>
<?php
if(isset($_POST['submit']))
{
include('../database.php');
    $class=$_POST['class'];
    $rollno=$_POST['rollno'];
    $hindi1=$_POST['hindi1'];
    $english1=$_POST['english1'];
    $math1=$_POST['math1'];
    $physics1=$_POST['physics1'];
    $chemestry1=$_POST['chemestry1'];
    
    $hindi2=$_POST['hindi2'];
    $english2=$_POST['english2'];
    $math2=$_POST['math2'];
    $physics2=$_POST['physics2'];
    $chemestry2=$_POST['chemestry2'];
    
    $sql="INSERT INTO `user_mark`(`u_rollno`,`u_class`,`u_hindi1`, `u_english1`, `u_math1`, `u_physics1`, `u_chemestry1`, `u_hindi2`, `u_english2`, `u_math2`, `u_physics2`, `u_chemestry`) VALUES ('$rollno','$class','$hindi1','$english1','$math1','$physics1','$chemestry1','$hindi2','$english2','$math2','$physics2','$chemestry2')";
    
    $run=mysqli_query($con,$sql);
    if($run)
    {
        ?>
        <script>
        alert('Data Inserted Succesfully');
        window.open('admindeshboard.php?sid=<?php echo $rollno; ?>', '_self');
        </script>
        <?php
    }
}
?>