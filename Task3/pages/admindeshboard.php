<!Doctype HTML>
<html>
<head>
	<title></title>
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
	<div class="clearfix"></div>
</div>

	<div class="clearfix"></div>
	<br/><br/><br/>
	
	<div class="col-div-4">
		<div class="box">
			<p>100+<br/><span>Students Data</span></p>
			<i class="fa fa-users box-icon"></i>
		</div>
	</div>
	<div class="col-div-4">
		<div class="box">
			<p>50+<br/><span>Messages</span></p>
			<i class="fa fa-list box-icon"></i>
		</div>
	</div>
    <div class="col-div-4">
		<div class="box">
			<p>20+<br/><span>Updated Data</span></p>
			<i class="fa fa-list box-icon"></i>
		</div>
	</div>
    <div class="clearfix"></div>
	<br/><br/><br/>
    <div class="col-div-4">
		<div class="box">
			<p>10+<br/><span>Added Data</span></p>
			<i class="fa fa-list box-icon"></i>
		</div>
	</div>
    <div class="col-div-4">
		<div class="box">
			<p>5+<br/><span>Deleted Data</span></p>
			<i class="fa fa-list box-icon"></i>
		</div>
	</div>

    <div class="col-div-4">
		<div class="box">
			<p>90%<br/><span>Passed</span></p>
			<i class="fa fa-list box-icon"></i>
		</div>
	</div>
    <div class="clearfix"></div>
	<br/><br/><br/>
    <div class="col-div-4">
		<div class="box">
			<p>10%<br/><span>Failed</span></p>
			<i class="fa fa-list box-icon"></i>
		</div>
	</div>


		</div>
	</div>
	</div>

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
