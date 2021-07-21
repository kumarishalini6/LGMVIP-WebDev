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
			<p>Second Step- Add Exam mark</p>
			<br/>
            <form method="post" action="thirdstep.php">
            <td><input type="hidden" name="class" class="class" value="<?php  echo $_POST['class']; ?>" required/></td>
          
          <td><input type="hidden" name="rollno" class="rollno" value="<?php  echo $_POST['rollno']; ?>" required/></td>
			<table>
            <span> <h4 class="h_3">First Exam (A)</h4></span>
             <tr>
                <th>Hindi</th>   <th> English </th> <th>Math</th>  <th>Physics</th>   <th>Chemestry</th> 
             </tr>
             <tr>
                 <td><input type='text' name='hindi1' placeholder='Hindi' required/></td>
                 <td><input type='text' name='english1' placeholder='English' required/></td>
                 <td><input type='text' name='math1' placeholder='Math' required/></td>
                 <td><input type='text' name='physics1' placeholder='Physics' required/></td>
                 <td><input type='text' name='chemestry1' placeholder='Chemestry' required/></td>
             </tr>
             </table>
             
          <span> <h4 class="h3">Second Exam(B)</h4> </span>
         <table class="table4">
             <tr>
                <th>Hindi</th>   <th> English </th> <th>Math</th> <th>Physics</th>   <th>Chemestry</th>
             </tr>
             <tr>
                 <td><input type='text' name='hindi2' placeholder='Hindi' required/></td>
                 <td><input type='text' name='english2' placeholder='English' required/></td>
                 <td><input type='text' name='math2' placeholder='Math' required/></td>
                 <td><input type='text' name='physics2' placeholder='Physics' required/></td>
                 <td><input type='text' name='chemestry2' placeholder='Chemestry' required/></td>
             </tr>
         </table>
         <table class="table2">
             <tr>
             <td align="center" colspan="2"><button type="submit" name="submit" value="Submit" class="submit" ><a>Submit</a></button></td>   
             
             </tr>
             
         </table>

</form>
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
if(isset($_POST['submit1']))
{ 
    include('../database.php');
    $username=$_POST['name'];
    $class=$_POST['class'];
    $rollno=$_POST['rollno'];
    $father=$_POST['father'];
    $mother=$_POST['mother'];
    $mobile=$_POST['mobile'];
    $village=$_POST['village'];
    
    $imagename=$_FILES['img']['name'];
    $tempname=$_FILES['img']['tmp_name'];
    move_uploaded_file($tempname,"../dataimg/$imagename");
    
    $sql="INSERT INTO `Student_data`(`u_name`, `u_class`, `u_rollno`, `u_father`, `u_mother`, `u_mobile`, `u_village`, `u_image`) VALUES ('$username','$class','$rollno','$father','$mother','$mobile','$village','$imagename')";
    $run=mysqli_query($con,$sql);
    if($run)
    {
        ?>
        <script>
        alert('1step Complete and this is second  Step');
        </script>
        <?php
    }
    else
    {
       ?>
        <script>
        alert('Failed');
        </script>
        <?php 
    }
}

?>
