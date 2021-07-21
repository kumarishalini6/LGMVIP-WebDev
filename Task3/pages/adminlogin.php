<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Transparent Login Form HTML CSS</title>
      <link rel="stylesheet" href="../stylesheet/adminlogin.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
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
                <select name="" id="search" onchange="location = this.value;">
                  <option  value="">LOGIN</option>
                  <option value="../pages/studentlogin.php">STUDENT</option>
                  <option value="../pages/adminlogin.php">ADMIN</option>
                </select>
        </ul>
    </nav>
      <div class="bg-img">
         <div class="content">
            <header>Login Form</header>
            <form method='post'>
               <div class="field">
                  <span class="fa fa-user"></span>
                  <input type="text" required placeholder="Username" name="name">
               </div>
               <div class="field space">
                  <span class="fa fa-lock"></span>
                  <input type="password" class="pass-key" required placeholder="Password" name="psw">
                  <span class="show">SHOW</span>
               </div>
               <div class="pass">
                  <a href="#">Forgot Password?</a>
               </div>
               <div class="field">
                  <input type="submit" value="LOGIN" name="submit">
               </div>
            </form>
         </div>
      </div>
      <script>
         const pass_field = document.querySelector('.pass-key');
         const showBtn = document.querySelector('.show');
         showBtn.addEventListener('click', function(){
          if(pass_field.type === "password"){
            pass_field.type = "text";
            showBtn.textContent = "HIDE";
            showBtn.style.color = "#3498db";
          }else{
            pass_field.type = "password";
            showBtn.textContent = "SHOW";
            showBtn.style.color = "#222";
          }
         });
      </script>
   </body>
</html>

<div>
<?php 
if(isset($_POST["submit"]))
{
   include('../database.php');
   $USERNAME = $_POST['name'];
   $PASSWORD = $_POST['psw'];
   $qry="SELECT * FROM `adminlogin` WHERE `user_name`='$USERNAME' AND `password`='$PASSWORD'";
   $run=mysqli_query($con,$qry);
   $row=mysqli_num_rows($run);
   if($row<1)
    {
      $_SESSION['name']=$USERNAME;
        ?>
        <script>
        alert('Username or Password Not Match');
        </script>
       <?php
    }
    else{
       echo 'Data Matched';
       ?>
       
       <script>
         window.open('../pages/admindeshboard.php','_self');
       </script>
       <?php
    }
}
?>
</div>