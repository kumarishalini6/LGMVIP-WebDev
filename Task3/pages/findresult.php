<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../stylesheet/findresult.css">
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
                <li>
                    <a href="../pages/logout.php">LOGOUT</a>
                </li>
                
        </ul>
    </nav>

    
    <div class="bg-img">
         <div class="content">
         <marquee scrollamount="5" ><p>Result is Declared. Kindly check in case if you found error emediately contact to the admin. </p> </marquee>
            <header>Get Your Result From Here ! </header>
            <form method='post' action="../pages/result.php">
               <div class="field">
                  <span class="fa fa-user"></span>
                  <input type="text" required placeholder="Standerd" name="std">
               </div>
               <div class="field space">
                  <span class="fa fa-lock"></span>
                  <input type="text" class="pass-key" required placeholder="Roll No." name="roll">
               </div>
               <br>
               <div class="field">
                  <input type="submit" value="SUBMIT" name="submit">
               </div>
            </form>
         </div>
      </div>
</body>
</html>