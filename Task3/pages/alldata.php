
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
			<p>All Students Data</p>
			<br/>
			<table>
  <tr>
  <th class="id_h1">Id </th>
           <th class="name_h1">Name </th> 
           <th class="contact_h1">Class </th> 
           <th class="contact_h1">Roll No</th>
           <th class="contact_h1">Father Name</th>
           <th class="massage_h1">Mother Name </th>
           <th class="contact_h1">Village</th>
           <th class="name_h1">Mobile No</th>
  </tr>
  <?php
include('../database.php');
  $sql="SELECT * FROM `student_data`";
  $run=mysqli_query($con,$sql);
  if(mysqli_num_rows($run)>0)
{
     while($row=mysqli_fetch_assoc($run))
     {
        ?>
        <tr>
            <th class="id_h"> <?php  echo $row['id'].'<br>'; ?></th>
            <th class="name_h"> <?php  echo $row['u_name'].'<br>'; ?></th> 
            <th class="email_h"> <?php  echo $row['u_class'].'<br>'; ?></th> 
            <th class="contact_h"> <?php  echo $row['u_rollno'].'<br>'; ?></th> 
            <th class="contact_h"> <?php  echo $row['u_father'].'<br>'; ?></th> 
            <th class="contact_h"> <?php  echo $row['u_mother'].'<br>'; ?></th>
            <th class="contact_h"> <?php  echo $row['u_village'].'<br>'; ?></th> 
            <th class="massage_h"><?php  echo $row['u_mobile'].'<br>'; ?></th> 
        </tr>     
        <?php    
        }
   
}
else{
    echo "No Record Found";
}

?>
  
</table>
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