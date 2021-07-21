<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!---bootstrap links -->
    <link rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script
        src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>       
    <!---js-->
    <script src="./js/all.js"></script>
    <!---stylesheet-->
    <link rel="stylesheet" href="./stylesheet/index.css" type="text/css"/>
    <title>Document</title>

</head>
<body>
    <header class="header">

        <div class="alert  alert-dismissible fade show" role="alert" >
            <div class="notice">Result   Announcement</div>
            <strong>Importent Notice!</strong> <br>
            Result are decleadred ,<br>
            <strong>(i)</strong> ALL the students are requested to checkout their results and collect their respective certificates by LOGIN panel. <br> 
            <strong>(ii)</strong> In case if they found any difficulty or any  query regarding  login or facing problem in results please send as query immediately througn CONTACT panel. 
            <br>
            <strong>Thank You !!</strong><br>
            <a href="./pages/studentlogin.php"> LOGIN</a><br>
            <a href="./pages/contact.php">CONTACT</a><br>
            <hr style="background-color: white;">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="banner">
            <h1 class="banner_title font" >Student Result Management System
            </h1>
            <div class="banner_icons" >
                <a href="#" class="banner_social-icon">
                    <i class="fab fa-facebook fa-fw"></i>
                </a>
                <a href="#" class="banner_social-icon">
                    <i class="fab fa-twitter fa-fw"></i>
                </a>
                <a href="#" class="banner_social-icon">
                    <i class="fab fa-instagram fa-fw"></i>
                </a>
                <a href="#" class="banner_social-icon">
                    <i class="fab fa-google-plus fa-fw"></i>
                </a>
            </div>
            </div>
            <article class="video_container">
                <video class="video_item" autoplay muted loop>
                    <source src="./video/video.mp4" type="video/mp4">
                </video>
            </article>

            <nav>
                <input type="checkbox" id="check">
                <label for="check" class="checkbtn">
                    <i class="fas fa-bars"></i>
                </label>
                <label class="logo">SHALINI</label>
                <ul>
                    <li>
                        <a href="./index.php" class="active">HOME</a>
                    </li>
                    <li>
                        <a href="#about">ABOUT</a>
                    </li>
                    <li>
                        <a href="./pages/contact.php">CONTACT</a>
                    </li>
                    <li>
                <select name="" id="search" onchange="location = this.value;">
                  <option  value="">LOGIN</option>
                  <option  value="./pages/studentlogin.php">STUDENT</option>
                  <option value="./pages/adminlogin.php">ADMIN</option>
                </select>
            </nav>
        </header>
        
        <!----About us section --->
        <header class="header2" id="about">
        <div class="about-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="about-img">
                            <img
                                src="./images/college.jpeg">
                        </div>
                    </div>
                    <div class="col-lg-6"style="margin-left: 70px; margin-top:
                        30px;">
                        <div class="about-text" style="margin-left: 30px;
                            margin-top: 30px;">
                            <h1>We Are Providing Best Education </h1>
                            <p class="para">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati magnam ipsa pariatur, dignissimos assumenda nesciunt labore corporis officiis, minima fugit alias nisi voluptatem harum voluptatum quidem inventore quia, porro repellat.</p>
                            <p class="para">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta aliquam, adipisci quod veritatis praesentium aliquid, maiores quis eligendi ducimus officia optio quo vitae doloribus alias culpa commodi. Quod, ipsam est.</p>
                            <button class="btn">
                                <a >Read More ...</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </header>
        <!----end of About us section --->
        <!----footer --->
        <br><br><br>
        <div class="container-fluid footer" style="background-color: lightblue;">
      <div class="container" style="padding-top:3%;bottom:0">
        <div class="row footer-add">
          <div class="col">
            <h4>OFFICE ADDRESS</h4>
            
            <div class="address">
              <p>Lorem lpsum goa,234<br>
              1200 lorem lpsum<br>
              appartment</p>
            </div>
          </div>
          <div class="col" >
            <h4>FOLLOW US</h4>
            <div class="social1">
            <i class="fab fa-facebook fa-fw"></i>
              <i class="fab fa-twitter fa-fw"></i>
              <i class="fab fa-linkedin fa-fw"></i>
            </div>
            <div class="social1">
              <i class="fab fa-telegram fa-fw"></i>
              <i class="fab fa-instagram fa-fw"></i>
              <i class="fab fa-youtube fa-fw"></i>
            </div>
          </div>
          <div class="col">
            <h4>CONTACT US</h4> 
           
            <div class="address">
              <p>+232 345 455 <br>
              shalini@gmail.com<br>
              shalini@resort.com</p>
            </div>         
          </div>
        </div>
      </div>
    </div>
    <!---end of footer --->
        
</body>
</html>