<?php
   session_start();

   $_SESSION['finder'] = true;

   if(!isset($_SESSION['loggedIn'])){
      
      header("Location: login.php");
   }


?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Explore Uploaded Skills - Job Finder</title>
<link href="icon.png" rel="icon" sizes="106x129" type="image/png">
<link href="css/jobfinder.css?v=11" rel="stylesheet">
<link href="css/finder.css?v=11" rel="stylesheet">
<script src="javascript/jquery-3.6.0.min.js"></script>
<script src="javascript/popper.min.js"></script>
<script src="javascript/bootstrap.min.js"></script>
<script src="javascript/bootstrap.dropdown.min.js" defer></script>
<script src="javascript/affix.min.js"></script>
<script src="javascript/scrollspy.min.js"></script>
<script src="javascript/finder.js?v=11"></script>
</head>
<body data-bs-spy="scroll">
   <div id="container">
      <div id="wb_Image1" style="z-index: -1;">
         <img src="images/5c6b6fb51788673c229f6c6fa3ed65ab.gif"  id="Image1" alt="" width="1359" height="1359">
      </div>
      
      <div id="wb_Text1">
         <p style="line-height: 1.5; margin-left: -60px; width: 1000px;">Explore The Uploaded SKills</p>
      </div>
      <button type="submit" id="ThemeableButton2" name="" value="Feel Free" class="ui-button ui-corner-all">Feel Free</button>
      <input type="text" id="searchskill" name="searchskill" value="" spellcheck="false" placeholder="Search for a skill">
      <div id="wb_Text2">
         <p style="margin-top: 150px;">Kenya's 1st Skill Based Job search Platform</p>
      </div>
<button type="submit" id="search" name="search" value="Search" class="ui-button ui-corner-all">Search</button>
      
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
                        <a href="./finder.php" class="nav-link active" itemprop="url">Find skill</a>
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
         <a href="index.php" id="wb_uid4">
<p>Jf</p></a>
      </div>
   </div>
   <?php
      if (isset($_SESSION['id'])){
         include 'dbcon.php';
         include 'alert.php';

         $id_number = $_SESSION['id'];
         $_SESSION['employer'] = TRUE;
         $connect = "SELECT image FROM credentials WHERE id= $id_number";
         $query = mysqli_query($dbconn, $connect);
         $row = mysqli_fetch_assoc($query);

         $_SESSION['image'] = $row['image']; 

         if ($query && $query->num_rows > 0) {
            
            echo '<a href="profile.php" style="z-index: 1;"><img id="profile_pic" style="width: 40px; height: 40px; margin-left: 1121px; margin-top: 30px; border-radius: 50%; object-fit: cover;" src="user_images/'.$row['image'].'"></a>';
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

      include 'dbcon.php';
   

      $connect = "SELECT * FROM skills";
      $query = mysqli_query($dbconn, $connect);
      
      $sql = "SELECT * FROM skills";

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
                           <div class="blogthumb"><a href="./learnmore.php?title='.$row["title"].'&description='.$row["description"].'&video='.$row["video"].'&image='.$row["image"].'"><video alt="Michael" onmouseover="this.play()" onmouseleave="this.pause()" src="videos/'.$row['video'].'" loading="lazy"></a></div>
                           <div class="bloginfo">
                              <span class="blogsubject">'.$row['title'].'</span>
                              <p><span id="wb_uid">'.$description.'</span></p>
                              <a class="blogbutton" href="./learnmore.php?title='.$row["title"].'&description='.$row["description"].'&video='.$row["video"].'&image='.$row["image"].'">Learn more</a>
                           </div>
                           
                           
                           <div class="blogfooter"><span class="blogdate">Posted on '.$row['date'].'</span></div>
                        </div></div>';
      }
      echo '</div>';

   }
   ?>
</body>
</html>