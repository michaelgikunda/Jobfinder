<?php
session_start();

   if(isset($_POST['login'])) {

      include 'dbcon.php';
      include 'alert.php';
   
      $email = $_POST["email"];
      $password = $_POST["password"];
   
      $connect = "SELECT id, email, password FROM credentials";
      $query = mysqli_query($dbconn, $connect);
   
      while($row = mysqli_fetch_assoc($query)){
         if($row['email'] == $email && $row['password'] == sha1($password)){
            $_SESSION['id'] = $row['id'];
            $_SESSION['loggedIn'] = true;

            if(isset($_SESSION['myprofile'])){
               header("Location: myprofile.php");
            }elseif(isset($_SESSION['finder'])){
               header("Location: finder.php");
            }else{
               header("Location: finder.php");
            }

            exit();
         }
      }
      invalid_credentials();
   }
   
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Login</title>
<link href="icon.png" rel="icon" sizes="106x129" type="image/png">
<link href="css/jobfinder.css?v=11" rel="stylesheet">
<link href="css/login.css?v=11" rel="stylesheet">
<script src="javascript/jquery-3.6.0.min.js"></script>
<script src="javascript/jquery-ui.min.js"></script>
<script src="javascript/popper.min.js"></script>
<script src="javascript/bootstrap.min.js"></script>
<script src="javascript/bootstrap.dropdown.min.js" defer></script>
<script src="javascript/affix.min.js"></script>
<script src="javascript/scrollspy.min.js"></script>
<script src="javascript/wwb18.min.js"></script>
<script src="javascript/login.js?v=11"></script>
</head>
<body data-bs-spy="scroll">
   <form action="login.php" method="post">
      <div id="container">
         <div id="wb_Image1">
            <img src="images/a3508797091683ab55e1d0534c6ba97a.gif" id="Image1" alt="" width="1359" height="1359">
         </div>
                  
         <button type="submit" id="loginBtn" name="login" value="Login" class="ui-button ui-corner-all">Login</button>
         <div id="wb_password">
            <input type="password" id="password" name="password" value="" spellcheck="false" placeholder="Enter your Password">
            <label id="password-label" for="password">Enter your Password</label>
         </div>
         <?php
         if(isset($_SESSION['email'])){
            echo '<div id="wb_email">
         <input type="text" id="email" name="email" value="'.$_SESSION['email'].'" spellcheck="false" placeholder="Enter Your Email">
         <label id="email-label" for="email">Enter Your Email</label>
      </div>';
         echo '<div id="wb_Text1">
         <p style="line-height: 1.1;">Enter Your Password</p>
      </div>';
         }elseif(isset($_SESSION['email1'])){
            echo '<div id="wb_email">
            <input type="text" id="email" name="email" value="'.$_SESSION['email1'].'" spellcheck="false" placeholder="Enter Your Email">
            <label id="email-label" for="email">Enter Your Email</label>
         </div>';
         echo '<div id="wb_Text1" style="z-index: 0;">
         <p style="line-height: 1.1;">Enter Your Password</p>
      </div>';
         }
         else{
            echo '<div id="wb_email">
            <input type="text" id="email" name="email" value="" spellcheck="false" placeholder="Enter Your Email">
            <label id="email-label" for="email">Enter Your Email</label>
         </div>';
         echo '<div id="wb_Text1">
      <p>Login</p></div><div id="wb_Text2"> <p style="font-family: Josefin Sans; font-size: 15px; color: gray;">Fill in Your Details Below</p>
   </div>';
         }
               
      ?>
         <div id="wb_Text4">
            <p>Dont Have an Account?</p>
         </div>
         <div id="wb_Sign_Up">
            <a href="signup.php" id="wb_uid0"><p>Sign Up</p></a>
         </div>
         <div id="wb_Icon1">
            <a href="javascript:history.back()"><div id="Icon1"><i class="Icon1"></i></div></a>
         </div>
         <nav id="wb_DropdownMenu1">
            <div id="DropdownMenu1" class="DropdownMenu1" style="width:100%;height:auto !important;">
               <div class="container">
                  <div class="navbar-header">
                     <button title="Dropdown Menu" type="button" class="navbar-toggle" data-bs-toggle="collapse" data-bs-target=".DropdownMenu1-navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                     </button>
                  </div>
                  <div class="DropdownMenu1-navbar-collapse collapse">
                     <ul class="nav navbar-nav" itemscope="itemscope" itemtype="https://schema.org/SiteNavigationElement">
                        <li itemprop="name" class="nav-item">
                           <a href="./index.php" class="nav-link" itemprop="url">Home</a>
                        </li>
                        <li itemprop="name" class="nav-item">
                           <a href="./myprofile.php" class="nav-link" itemprop="url">Find work</a>
                        </li>
                        <li itemprop="name" class="nav-item">
                           <a href="./finder.php" class="nav-link" itemprop="url">Find skill</a>
                        </li>
                        <li itemprop="name" class="nav-item">
                           <a href="./contact.php" class="nav-link" itemprop="url">Contact us</a>
                        </li>
                        <li itemprop="name" class="nav-item">
                           <a href="./about.php" class="nav-link" itemprop="url">About</a>
                        </li>
                        <li itemprop="name" class="nav-item dropdown-hover dropdown">
                           <a href="#" class="dropdown-toggle" data-bs-offset="0,1" data-bs-placement="bottom-start" data-bs-toggle="dropdown"> <b class="caret"></b></a>
                           <ul class="dropdown-menu">
                              <li itemprop="name" class="nav-item dropdown-item">
                                 <a href="./admin.php" class="nav-link" itemprop="url">Admin</a>
                              </li>
                              <li itemprop="name" class="nav-item dropdown-item">
                                 <a href="./login.php" class="nav-link active" itemprop="url">Login</a>
                              </li>
                              <li itemprop="name" class="nav-item dropdown-item">
                                 <a href="./signup.php" class="nav-link" itemprop="url">Sign Up</a>
                              </li>
                           </ul>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </nav>
         <div id="wb_Text3">
            <a href="index.php" id="wb_uid1">
   <p>Jf</p></a>
         </div>
      </div>
   </form>
</body>
</html>