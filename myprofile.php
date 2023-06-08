<?php
   session_start();
   $_SESSION['myprofile'] = true;

   if(!isset($_SESSION['loggedIn'])){
      header("Location: login.php");
   }
   include 'dbcon.php';
   $id_number = $_SESSION['id'];
   $connecting = "SELECT * FROM credentials WHERE id = $id_number";
   $querying = mysqli_query($dbconn, $connecting);
   $row = mysqli_fetch_assoc($querying);   

   

?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>My Profile - Job Finder</title>
<link href="icon.png" rel="icon" sizes="106x129" type="image/png">
<link href="css/jobfinder.css?v=11" rel="stylesheet">
<link href="css/myprofile.css?v=11" rel="stylesheet">
<script src="javascript/jquery-3.6.0.min.js"></script>
<script src="javascript/popper.min.js"></script>
<script src="javascript/bootstrap.min.js"></script>
<script src="javascript/bootstrap.dropdown.min.js" defer></script>
<script src="javascript/affix.min.js"></script>
<script src="javascript/scrollspy.min.js"></script>
<script src="javascript/myprofile.js?v=11"></script>
</head>
<body data-bs-spy="scroll">
   <div id="container">
      <div id="wb_Image1">
         <img src="images/a3508797091683ab55e1d0534c6ba97a.gif" id="Image1" alt="" width="1359" height="1359">
      </div>
      <div id="wb_Shape1">
         <div id="Shape1"></div>
      </div>
      <?php
         echo '<div id="wb_Text1">
         <p>Hello, '.$row['firstname'].' 👋</p>
      </div>';
      ?>
      <?php
         echo '<input type="text" id="firstname" name="firstname" value="" disabled spellcheck="false" placeholder="'.$row['firstname'].'">
         ';
      ?>
      <div id="wb_Text4">
         <p>First Name</p>
      </div>
      <?php
         echo '<input type="text" id="lastname" name="lastname" value="" disabled spellcheck="false" placeholder="'.$row['lastname'].'">';
      ?>
      <div id="wb_Text5">
         <p>Last Name</p>
      </div>
      <div id="wb_Text6">
         <p>Contact</p>
      </div>
      <?php
         echo '<input type="text" id="contact" name="contact" value="" disabled spellcheck="false" placeholder="'.$row['contact'].'">';
      ?>
      <?php
         echo '<div id="wb_profile">
         <img src="user_images/'.$row['image'].'" id="profile" alt="" width="40" height="60">
      </div>';
      ?>
      <div id="wb_Text7">
         <p>Profile</p>
      </div>
      <div id="wb_Text2">
         <p>Your Videos</p>
      </div>
      <div id="wb_uploadmore">
<a class="ui-button ui-corner-all" id="uploadmore" href="./upload.php">Upload More</a>
      </div>
      <div id="wb_edit">
<a class="ui-button ui-corner-all" id="edit" href="./profile.php">Edit - Logout</a>
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
                        <a href="./myprofile.php" class="nav-link active" itemprop="url">Find work</a>
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
   
      $emial_address = $row["email"];

      $sql = "SELECT * FROM skills WHERE email= '$emial_address'";
      $query = mysqli_query($dbconn, $sql);
      $rowing = mysqli_fetch_assoc($query);
      

      // Execute the query and store the results in a variable
      $result = $dbconn->query($sql);

      // Output the data in the cards
      if ($result->num_rows > 0) {
         // Loop through the results and output them in the cards
         $i = 1;
         
      echo'<div id="Blog1">';
      while($rowing = $result->fetch_assoc()) {
         $description = $rowing['description'];
            $words = explode(' ', $description);
            if (count($words) > 7) {
               $description = implode(' ', array_slice($words, 0, 7)) . '...';
            }
            echo'
            <div class="blogrow">
               <div class="blogcolumn">
                  <div class="blogitem">
                     <div class="blogthumb"><a href="./learnmore.php"><video alt="Michael" onmouseover="this.play()" onmouseleave="this.pause()" src="videos/'.$rowing['video'].'" loading="lazy"></a></div>
                     <div class="bloginfo">
                        <span class="blogsubject">'.$rowing['title'].'</span>
                        <p><span id="wb_uid">'.$description.'</span></p>
                        <a class="blogbutton" href="./learnmore.php?title='.$rowing["title"].'&description='.$rowing["description"].'&video='.$rowing["video"].'&image='.$rowing["video"].'">Learn More</a>
                        <a class="blogbutton" href="./delete_row.php?delete='.$rowing['id'].'">Delete</a>
                     </div>
                     <div class="blogfooter"><span class="blogdate">Posted on '.$rowing['date'].'</span></div>
                  </div></div>';
      }
      echo '</div>';
   }
   ?>
      </div>
   </div>
</body>
</html>