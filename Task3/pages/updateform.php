<?php
include('../database.php');
$rollno=$_GET['sid'];

$sql="SELECT * FROM `student_data` WHERE `u_rollno`='$rollno'";
$run=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($run);

$class=$row['u_class'];

$sql2="SELECT * FROM `user_mark` WHERE `u_class`='$class'";
$run2=mysqli_query($con,$sql2);
$data=mysqli_fetch_assoc($run2);

//combine Table///


?>
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
<br>
<div class="col">
		<div class="box-8">
		<div class="content-box">
          <form method="post" action="updatedata.php">
              <table>
             <h4> 
                <tr>
                  <th>Student Name: </th>
                  <td><span class="span"><?php echo $row['u_name']; ?></span></td>
                </tr>
              </h4>
              <h4>
                <tr>
                  <th>Student Class: </th>
                  <td><span class="span"><?php echo $row['u_class']; ?></span></td>
                </tr>
              </h4>
              <h4>
                <tr>
                  <th>Student Rollno: </th>
                  <td><span class="span"><?php echo $row['u_rollno']; ?></span></td>
                </tr>
              </h4>
                  </table>
          <table class="table1">
              <span> <h4 class="h_3">First Exam (A)</h4></span>
             <tr>
                <th>Hindi</th>   <th> English </th> <th>Math</th>  <th>Physics</th>   <th>Chemestry</th> 
             </tr>
             <tr>
                 <td>
                <input type='text' name='hindi1' value="<?php echo $data['u_hindi1']; ?>" class="th" required/></td>
                 <td><input type='text' name='english1' value="<?php echo $data['u_english1']; ?>" class="th"/></td>
                 <td><input type='text' name='math1' value="<?php echo $data['u_math1']; ?> " class="th" required/></td>
                 <td><input type='text' name='physics1' value="<?php echo $data['u_physics1']; ?> " class="th" required/></td>
                 <td><input type='text' name='chemestry1' value="<?php echo $data['u_chemestry1']; ?> " class="th" required/></td>
             </tr>
             </table>
          <span> <h4 class="h3">Second Exam(B)</h4> </span>
         <table class="table4">
             <tr>
                <th>Hindi</th>   <th> English </th> <th>Math</th> <th>Physics</th>   <th>Chemestry</th> 
             </tr>
             <tr>
                 <td><input type='text' name='hindi2' value="<?php echo $data['u_hindi2']; ?> " class="th" required/></td>
                 <td><input type='text' name='english2' value="<?php echo $data['u_english2']; ?> " class="th" required/></td>
                 <td><input type='text' name='math2' value="<?php echo $data['u_math2']; ?> " class="th" required/></td>
                 <td><input type='text' name='physics2' value="<?php echo $data['u_physics2']; ?> " class="th" required/></td>
                 <td><input type='text' name='chemestry2' value="<?php echo $data['u_chemestry']; ?> " class="th" required/></td>
             </tr>
             <tr>
             <td><input type="hidden" name="rollno" value="<?php echo $row['u_rollno']; ?>"/></td>
             <td align="center" colspan="2"><button type="submit" name="submit" class="submit" ><a>Submit</a></button></td> 
               
             </tr>
             </table>
             
         
       
       </form>
      </div>
</div>
</div>
<div class="clearfix"></div>
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