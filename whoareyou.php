<?php
   session_start();
   if(isset($_POST['done'])){
      include 'dbcon.php';
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $contact = $_POST['contact'];
      $user = $_POST['user'];

      $email = $_SESSION['email'];
      $password = sha1($_SESSION['password']);
      $image_name = $_SESSION['image_name'];
      $image_tmp_name = $_SESSION['image_tmp_name'];

      
      $connect = "INSERT into credentials(firstname, lastname, contact, email, password, image, user) VALUES ('$firstname','$lastname','$contact','$email','$password','$image_name','$user')";
      $query = mysqli_query($dbconn, $connect);


      if($query){
         if($user == "jobseaker"){
            header("Location: myprofile.php");
         }elseif($user == "employer"){
            header("Location: finder.php");
         }
      }
   }
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Almost There - Sign Up</title>
<link href="icon.png" rel="icon" sizes="106x129" type="image/png">
<link href="css/jobfinder.css?v=11" rel="stylesheet">
<link href="css/whoareyou.css?v=11" rel="stylesheet">
<script src="javascript/jquery-3.6.0.min.js"></script>
<script src="javascript/popper.min.js"></script>
<script src="javascript/bootstrap.min.js"></script>
<script src="javascript/bootstrap.dropdown.min.js" defer></script>
<script src="javascript/affix.min.js"></script>
<script src="javascript/scrollspy.min.js"></script>
<script src="javascript/whoareyou.js?v=11"></script>
</head>
<body data-bs-spy="scroll">
   <form action="whoareyou.php" method="post" enctype="multipart/form-data">
   <div id="container">
      <div id="wb_Image1">
         <img src="images/a3508797091683ab55e1d0534c6ba97a.gif" id="Image1" alt="" width="1359" height="1359">
      </div>
      <div id="wb_Text1">
         <p>Almost There</p>
      </div>
<button type="submit" id="done" name="done" value="Done" class="ui-button ui-corner-all">Done</button>
      <div id="Progressbar1">
         <div class="progress-bar" role="progressbar" aria-valuenow="100" title="" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
      <div id="wb_firstname">
         <input type="text" id="firstname" name="firstname" value="" maxlength="15" autocomplete="off" spellcheck="false" placeholder="Enter Your First Name">
         <label id="firstname-label" for="firstname">Enter Your First Name</label>
      </div>
      <div id="wb_contact">
         <input type="text" id="contact" name="contact" value="" maxlength="10" spellcheck="false" placeholder="Enter your contact">
         <label id="contact-label" for="contact">Enter your contact</label>
      </div>
      <div id="wb_jobseaker">
         <input type="radio" id="jobseaker" name="user" value="jobseaker"><label for="jobseaker"></label>
      </div>
      <div id="wb_employer">
         <input type="radio" id="employer" name="user" value="onemployer"><label for="employer"></label>
      </div>
      <div id="wb_Text2">
         <p>Employer</p>
      </div>
      <div id="wb_Text4">
         <p>Job Seaker</p>
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
      <div id="wb_lastname">
         <input type="text" id="lastname" name="lastname" value="" maxlength="15" spellcheck="false" placeholder="Enter your Last Name">
         <label id="lastname-label" for="lastname">Enter your Last Name</label>
      </div>
   </div>
   </form>
</body>
</html>