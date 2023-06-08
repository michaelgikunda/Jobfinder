<?php
session_start();
   if(isset($_POST['continue'])){
      include 'dbcon.php';
      $email = $_POST['email'];
      $_SESSION['email'] = $email;

      $connect = "SELECT email FROM credentials";
      $query = mysqli_query($dbconn, $connect);

      while($row = mysqli_fetch_assoc($query)){ 
         if($row['email'] == $email){
            header("Location: login.php");
            exit();
         } else{
            header("Location: finishprofile.php");
            exit();
         }
      }
   }

?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Get Started - Sign Up</title>
<link href="icon.png" rel="icon" sizes="106x129" type="image/png">
<link href="css/jobfinder.css?v=11" rel="stylesheet">
<link href="css/signup.css?v=11" rel="stylesheet">
<script src="javascript/jquery-3.6.0.min.js"></script>
<script src="javascript/jquery-ui.min.js"></script>
<script src="javascript/popper.min.js"></script>
<script src="javascript/bootstrap.min.js"></script>
<script src="javascript/bootstrap.dropdown.min.js" defer></script>
<script src="javascript/affix.min.js"></script>
<script src="javascript/scrollspy.min.js"></script>
<script src="javascript/wwb18.min.js"></script>
<script src="javascript/signup.js?v=11"></script>
</head>
<form action="signup.php" method="post">
<body data-bs-spy="scroll">
   <div id="container">
      <div id="wb_Image1">
         <img src="images/a3508797091683ab55e1d0534c6ba97a.gif" id="Image1" alt="" width="1359" height="1359">
      </div>
<button type="submit" id="continue" name="continue" value="Continue" class="ui-button ui-corner-all">Continue</button>
<?php
      if(isset($_SESSION['email1'])){
         echo '<div id="wb_email">
         <input type="email" id="email" name="email" value="'.$_SESSION['email1'].'" maxlength="50" spellcheck="false" placeholder="Email">
         <label id="email-label" for="email">Email</label>
      </div>';
      echo '<div id="wb_Text1">
      <p>Get Started</p>
   </div>';
      }elseif(isset($_SESSION['email'])){
         echo '<div id="wb_email">
         <input type="email" id="email" name="email" value="'.$_SESSION['email'].'" maxlength="50" spellcheck="false" placeholder="Email">
         <label id="email-label" for="email">Email</label>
      </div>';
      echo '<div id="wb_Text1">
      <p>Get Started</p>
   </div>';
      }
      else{
         echo '<div id="wb_email">
         <input type="email" id="email" name="email" value="" maxlength="50" spellcheck="false" placeholder="Email">
         <label id="email-label" for="email-address">Email</label>
      </div>';
      echo '<div id="wb_Text1">
      <p style="margin-top: -10px;">Get Started</p> </div>';
      }
      ?>
      <div id="Progressbar1">
         <div class="progress-bar" role="progressbar" aria-valuenow="25" title="" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
      <div id="wb_Text4">
         <p>Already Have an Account?</p>
      </div>
      <div id="wb_Text2">
         <a href="login.php" id="wb_uid0"><p>Login</p></a>
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
                              <a href="./login.php" class="nav-link" itemprop="url">Login</a>
                           </li>
                           <li itemprop="name" class="nav-item dropdown-item">
                              <a href="./signup.php" class="nav-link active" itemprop="url">Sign Up</a>
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