<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>Contact Form</title>
  <link rel="stylesheet" href="../stylesheet/contact.css" />
  <script
    src="https://kit.fontawesome.com/64d58efce2.js"
    crossorigin="anonymous"
  ></script>
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
                    <a href="../pages/contact.php" class="active">CONTACT</a>
                </li>
                <select name="" id="search" onchange="location = this.value;">
                  <option  value="">LOGIN</option>
                  <option value="../pages/studentlogin.php">STUDENT</option>
                  <option value="../pages/adminlogin.php">ADMIN</option>
                </select>
        </ul>
    </nav>

  <div class="container" >
      <span class="big-circle"></span>
      <img src="img/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
            Message us if you have any type of problem or facing difficulties in results and certificate.
            <br>
            THANKS!!
          </p>

          <div class="info">
            <div class="information">
              <img src="../images/location.png" class="icon" alt="" />
              <p>92 Cherry Drive Uniondale, NY 11553</p>
            </div>
            <div class="information">
              <img src="../images/email.png" class="icon" alt="" />
              <p>lorem@ipsum.com</p>
            </div>
            <div class="information">
              <img src="../images/phone.png" class="icon" alt="" />
              <p>123-456-789</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form method="post" >
            <h2 class="title">Contact us</h2>
            <div class="input-container">
              <input type="text" name="name" class="input" required/>
              <label for="">Username</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="email"  class="input" required/>
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="number" name="phone" class="input" required/>
              <label for="">Phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea  name="message" class="input" required></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <input type="submit" value="Send" class="btn " name="submit" />
          </form>
        </div>
      </div>
    </div>


    
    <div class="alert">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "message";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>
<?php
if(isset($_POST['submit'])){
	//echo "user submitted";
	$Name    =$_POST['name'];
	$Email         =$_POST['email'];
	$PHONE = $_POST['phone'];
  $MESSAGE =$_POST['message'];
	//echo $First_Name .' '. $Phone_Number.'  '.$Email .'  '.$Password .'<br>' ; 
	$sql = "INSERT INTO contact (user_name,user_email,user_contact,user_message)
VALUES ('$Name','$Email','$PHONE', '$MESSAGE'  )";

if ($conn->query($sql) === TRUE) {
  echo "we found your message"  ;   
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}

?>

</div>

    <script src="../js/contact.js"></script>
</body>
</html>