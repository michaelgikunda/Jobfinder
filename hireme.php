<?php
   session_start();

   if(!isset($_SESSION['contact_user_email'])){
      header("Location: finder.php");
   }
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Hire Me</title>
<link href="icon.png" rel="icon" sizes="106x129" type="image/png">
<link href="css/jobfinder.css?v=11" rel="stylesheet">
<link href="css/hireme.css?v=11" rel="stylesheet">
<script src="javascript/jquery-3.6.0.min.js"></script>
<script src="javascript/popper.min.js"></script>
<script src="javascript/bootstrap.min.js"></script>
<script src="javascript/bootstrap.dropdown.min.js" defer></script>
<script src="javascript/affix.min.js"></script>
<script src="javascript/scrollspy.min.js"></script>
<script src="javascript/hireme.js?v=11"></script>
</head>
<body data-bs-spy="scroll">
   <div id="container">
      <div id="wb_Image1" style="z-index: -1;">
         <img src="images/a3508797091683ab55e1d0534c6ba97a.gif" id="Image1" alt="" width="1359" height="1359">
      </div>
      <?php
         echo '<div id="wb_name">
         <p>'.$_SESSION['contact_user_firstname'].'</p>
      </div>';
      ?>
      <?php
         echo '<div id="wb_email">
         <a class="ui-button ui-corner-all" id="email" href="mailto:'.$_SESSION['contact_user_email'].'">Email</a>
      </div>';
      ?>
      <?php
         echo '<div id="wb_profile">
         <img src="user_images/'.$_SESSION['contact_user_image'].'" id="profile" alt="" width="50" height="75">
      </div>';
      ?>
      <div id="wb_Text4">
         <p>How would you love to contact</p>
      </div>
      
      <?php
         echo '<div id="wb_phone">
         <a class="ui-button ui-corner-all" id="phone" href="tel:'.$_SESSION['contact_user_contact'].'">Phone</a>
               </div>';
      ?>
      <a href="viewprofile.php"><button type="button" id="viewprofile" name="profile" value="or View profile" class="ui-button ui-corner-all">or View profile</button></a>
<?php
      if (isset($_SESSION['id'])){
         include 'dbcon.php';
   
         $id_number = $_SESSION['id'];

         $connecting = "SELECT image FROM credentials WHERE id=$id_number";
         $querying = mysqli_query($dbconn, $connecting);
         $rowing = mysqli_fetch_assoc($querying);
   
         $_SESSION['image'] = $rowing['image'];
   
         if ($querying && $querying->num_rows > 0) {
            echo '<a href="profile.php"><img style="cursor: pointer; width: 40px; height: 40px; margin-left: 1121px; margin-top: 30px; border-radius: 50%; object-fit: cover;" src="user_images/'.$_SESSION['image'].'"></a>';
         } 
      }
     else {
         echo '<div id="wb_login">
         <a class="ui-button ui-corner-all" id="login" href="./login.php">Login</a>
               </div>
               <div id="wb_register">
         <a class="ui-button ui-corner-all" id="register" href="./signup.php">Register</a>
               </div>';
     }      
   ?>
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
         <a href="index.php" id="wb_uid0">
<p>Jf</p></a>
      </div>
   </div>
</body>
</html>