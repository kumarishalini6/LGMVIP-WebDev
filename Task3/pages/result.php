
<?php
if(isset($_POST['submit']))
{

	include('../database.php');
	
	$standerd=$_POST['std'];
	$rollno =$_POST['roll'];
	$sql="SELECT * FROM `student_data` WHERE `u_class`='$standerd' AND `u_rollno`='$rollno'";
  $sql2="SELECT * FROM `user_mark` WHERE `u_class`='$standerd' AND `u_rollno`='$rollno'";
$run=mysqli_query($con,$sql);
$run2=mysqli_query($con,$sql2);
   $row=mysqli_num_rows($run2);
   $data2=mysqli_fetch_assoc($run2);
       
if(mysqli_num_rows($run)>0)
{
$data=mysqli_fetch_assoc($run);
?>

<html>
<head>
    <title>Result</title>
<link rel="stylesheet" href="../stylesheet/result.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
    <header>
    <nav>
    <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">SHALINI</label>
            <ul>
                <li>
                    <a href="../index.php" >HOME</a>
                </li>
                <li>
                    <a href="../index.php #about">ABOUT</a>
                </li>
                <li>
                    <a href="../pages/contact.php">CONTACT</a>
                </li>
                <li>
                    <a href="../pages/logout.php">LOGOUT</a>
                </li>
        </ul>
    </nav>
      <div class="content">
        <form method="post" action="result.php">
          <table class="table">
              <img src="../dataimg/<?php  echo $data['u_image']; ?>" class="image2" /> 
              <tr>
              <th>Name :</th>
                <td><?php echo $data['u_name'] ?></td>
              </tr>
              <tr>
              <th>Class :</th>
              <td><?php echo $data2['u_class']; ?></td>
              </tr>
              <tr>
              <th>Roll No :</th>
              <td><?php echo $data['u_rollno']; ?></td>
              </tr>
              <tr>
              <th>Father Name :</th>
              <td><?php echo $data['u_father']; ?></td>
              </tr>
              <tr>
              <th>City Name :</th>
              <td><?php echo $data['u_village']; ?></td>
              </tr>
          </table>
          <br>
          <table class="table2">
              <tr>
               <th>Suject</th><th>half Yealy Exam </th><th>Annual Exami</th><th>Toatal</th><th>From</th>
              </tr>
              <tr>
                  
              <th>Hindi</th>
                <th><?php echo $data2['u_hindi1']; ?></th>
                <th><?php echo $data2['u_hindi2']; ?></th>
                <th><?php echo $total1=$data2['u_hindi1']+$data2['u_hindi2']; ?> </th>
                <th>200</th>
              </tr>
              <tr>  
              <th>English</th>
                <th><?php echo $data2['u_english1']; ?></th>
                <th><?php echo $data2['u_english2']; ?></th>
                <th><?php echo $total2=$data2['u_english1']+$data2['u_english2']; ?> </th>
                <th>200</th>
              </tr>
              <tr>
              <th>Math</th>
                  <th><?php echo $data2['u_math1']; ?></th>
                  <th><?php echo $data2['u_math2']; ?></th>
                  <th><?php echo $total3=$data2['u_math1']+$data2['u_math2']; ?> </th>
                  <th>200</th>
              </tr>
              <tr>
              <th>Physics</th>
                  <th><?php echo $data2['u_physics1']; ?></th>
                  <th><?php echo $data2['u_physics2']; ?></th>
                  <th><?php echo $total4=$data2['u_physics1']+$data2['u_physics2']; ?></th>
                  <th>200</th>
              </tr>
              <tr>
              <th>Chemestry</th>
                  <th><?php echo $data2['u_chemestry1']; ?></th>
                  <th><?php echo $data2['u_chemestry']; ?></th>
                  <th><?php echo $total5=$data2['u_chemestry1']+$data2['u_chemestry']; ?></th>
                  <th>200</th>
              </tr>
              <tr>
              <th>Total</th>
                  <th>
                   <?php echo $data2['u_hindi1']+$data2['u_english1']+$data2['u_math1']+$data2['u_physics1']+$data2['u_chemestry1']; ?>
                  </th>
                  <th>
                  <?php echo $data2['u_hindi2']+$data2['u_english2']+$data2['u_math2']+$data2['u_physics2']+$data2['u_chemestry']; ?>
                  </th>
                  
                  <th><span class="colorchange"><?php echo $all=$total1+$total2+$total3+$total3+$total4+$total5; ?></span></th>
                 
                  <th>1000</th>
                  
              </tr>    
             
          </table>
             <h1 class="h1tag">You Are <span class="colorchange1"><?php 
                        if($all<=500) 
                        {
                            echo "Fail";
                        }
                       else
                       {
                           echo"Paas";
                       }
                      ?></span> 
                    </h1>
            <h2>
            <div class="w3-right footer">
            <button onclick="window.print()">Get Your Certificate</button>
            </div> 
            </h2>
       </form>
       
      </div>
    </header>
    <scr
</body>
</html>
<?php
}
else
{
?>
<script>
alert('Record Not found');
window.open('../index.php','_self'); 
</script>
<?php
}

}

?>
