<?php
   session_start();

   if(!isset($_SESSION['contact_user_firstname'])){
      header("Location: finder.php");
   }
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>View My Profile</title>
<link href="icon.png" rel="icon" sizes="106x129" type="image/png">
<link href="css/jobfinder.css?v=11" rel="stylesheet">
<link href="css/viewprofile.css?v=11" rel="stylesheet">
<script src="javascript/jquery-3.6.0.min.js"></script>
<script src="javascript/popper.min.js"></script>
<script src="javascript/bootstrap.min.js"></script>
<script src="javascript/bootstrap.dropdown.min.js" defer></script>
<script src="javascript/affix.min.js"></script>
<script src="javascript/scrollspy.min.js"></script>
<script src="javascript/viewprofile.js?v=11"></script>
</head>
<body data-bs-spy="scroll">
   <div id="container">
      <div id="wb_Image1" style="z-index: -1;">
         <img src="images/a3508797091683ab55e1d0534c6ba97a.gif" id="Image1" alt="" width="1359" height="1359">
      </div>
      <div id="wb_Shape1">
         <div id="Shape1"></div>
      </div>
      <?php
         echo '<div id="wb_Text1">
         <p>Hello, Am '.$_SESSION['contact_user_firstname'].' 👋</p>
      </div>';
      ?>
      <?php
         echo '<input type="text" id="firstname" name="firstname" value="" disabled spellcheck="false" placeholder="'.$_SESSION['contact_user_firstname'].'">
         ';
      ?>
      <div id="wb_Text4">
         <p>First Name</p>
      </div>
      <?php
         echo '<input type="text" id="lastname" name="lastname" value="" disabled spellcheck="false" placeholder="'.$_SESSION['contact_user_lastname'].'">
         ';
      ?>
      <div id="wb_Text5">
         <p>Last Name</p>
      </div>
      <div id="wb_Text6">
         <p>Contact</p>
      </div>
      <?php
         echo '<input type="text" id="contact" name="contact" value="" disabled spellcheck="false" placeholder="'.$_SESSION['contact_user_contact'].'">
         ';
      ?>
      <?php
         echo '<div id="wb_Image2">
         <img src="user_images/'.$_SESSION['contact_user_image'].'" id="Image2" alt="" width="40" height="60">
      </div>';
      ?>
      <div id="wb_Text7">
         <p>Profile</p>
      </div>
      <div id="wb_Text2">
         <p>My Uploaded Skills</p>
      </div>
      <?php
      if (isset($_SESSION['id'])){
         
         include 'dbcon.php';
   
         $id_number = $_SESSION['id'];

         $connecting = "SELECT image FROM credentials WHERE id=$id_number";
         $querying = mysqli_query($dbconn, $connecting);
         $rowing = mysqli_fetch_assoc($querying);
   
         $_SESSION['image'] = $rowing['image'];
   
         if ($querying && $querying->num_rows > 0) {
            echo '<a href="profile.php"><img style="cursor: pointer; width: 40px; height: 40px; margin-left: 1221px; margin-top: 30px; border-radius: 50%; object-fit: cover;" src="user_images/'.$_SESSION['image'].'"></a>';
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
      <?php
      include 'dbcon.php';

      $user_email = $_SESSION['contact_user_email'];

      $connect = "SELECT * FROM skills WHERE email='$user_email'";
      $query = mysqli_query($dbconn, $connect);
      
      $sql = "SELECT * FROM skills WHERE email='$user_email'";

      // Execute the query and store the results in a variable
      $result = $dbconn->query($sql);

      // Output the data in the cards
      if ($result->num_rows > 0) {
         // Loop through the results and output them in the cards
         $i = 1;
         
      echo'<div id="Blog1">';
      while($row = $result->fetch_assoc()) {
         $description = $row['description'];
            $words = explode(' ', $description);
            if (count($words) > 7) {
               $description = implode(' ', array_slice($words, 0, 7)) . '...';
            }
                  echo'
                  <div class="blogrow">
                     <div class="blogcolumn">
                        <div class="blogitem">
                           <div class="blogthumb"><a href="./learnmore.php?title='.$row["title"].'&description='.$row["description"].'&video='.$row["video"].'&image='.$_SESSION['image'].'"><video alt="Michael" onmouseover="this.play()" onmouseleave="this.pause()" src="videos/'.$row['video'].'" loading="lazy"></a></div>
                           <div class="bloginfo">
                              <span class="blogsubject">'.$row['title'].'</span>
                              <p><span id="wb_uid">'.$description.'</span></p>
                              <a class="blogbutton" href="./learnmore.php?title='.$row["title"].'&description='.$row["description"].'&video='.$row["video"].'&image='.$_SESSION['image'].'">Learn more</a>
                           </div>
                           
                           
                           <div class="blogfooter"><span class="blogdate">Posted on '.$row['date'].'</span></div>
                        </div></div>';
      }
      echo '</div>';

   }
   ?>
   </div>
</body>
</html>