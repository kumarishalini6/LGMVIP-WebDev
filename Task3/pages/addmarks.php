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
			<p>First Step- Student Details</p>
			<br/>
            <form method="post" enctype="multipart/form-data" action="secondstep.php">
			<table>
            <tr>
  
           <th class="name_h1">Name </th> 
           <th class="contact_h1">Class </th> 
           <th class="contact_h1">Roll No</th>
          </tr>
          <tr>
                 <td><input type='text' name='name' placeholder='full Name' required/></td>
                 <td><input type='text' name='class' placeholder='Class' required/></td>
                 <td><input type='text' name='rollno' placeholder='Rollno' required/></td>
             </tr>
             <table class="table2">
             <tr>
                <th>father Name </th>   <th> Mother Name</th> <th>Mobile No</th><th>Village Name</th>
             </tr>
                 <tr>
                 <td><input type='text' name='father' placeholder='Father Name' required/></td>
                 <td><input type='text' name='mother' placeholder='Mother Name' required/></td>
                 <td><input type='text' name='mobile' placeholder='Mobile No' required/></td>
                 <td><input type='text' name='village' placeholder='Village Name' required/></td>
             </tr>
             
         </table>
         <table class="table3">
           <tr>
               <th>Select Image -</th>
               <td><input type="file" name="img" required/></td>

               <td><button type="submit" name="submit1" ><a>Next Step</a></button></td>
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