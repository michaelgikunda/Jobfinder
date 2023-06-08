<?php
   include 'dbcon.php';
   include 'alert.php';
   session_start();

   if(!isset($_SESSION['id'])){
      header("Location: login.php");
   }

   $id_number = $_SESSION['id'];
   $connect = "SELECT * FROM credentials WHERE id = $id_number";
   $query = mysqli_query($dbconn, $connect);
   $row = mysqli_fetch_assoc($query);

   if (isset($_POST['save'])) {
      $id_location = $_SESSION['id'];
      $update_values = array();

      // Check each field individually and add to the update query if not empty
      if (!empty($_POST['_firstname'])) {
         $firstname = $_POST['_firstname'];
         $update_values[] = "firstname = '$firstname'";
      }
      if (!empty($_POST['_lastname'])) {
         $lastname = $_POST['_lastname'];
         $update_values[] = "lastname = '$lastname'";
      }
      if (!empty($_POST['_contact'])) {
         $contact = $_POST['_contact'];
         $update_values[] = "contact = '$contact'";
      }
      if (!empty($_POST['_email'])) {
         $email = $_POST['_email'];
         $update_values[] = "email = '$email'";
      }
      if (!empty($_POST['_password'])) {
         $password = sha1($_POST['_password']);
         $update_values[] = "password = '$password'";
      }
      if (!empty($_FILES["profilepic"]["name"])) {
         $image_name = $_FILES["profilepic"]["name"];
         $image_tmp_name = $_FILES["profilepic"]["tmp_name"];
         $image_path = "user_images/" . $image_name;
         move_uploaded_file($image_tmp_name, $image_path);
         $update_values[] = "image = '$image_name'";
         // Update the image in the "skills" table
         $update_skills_query = "UPDATE skills SET image = '$image_name' WHERE email = '".$row['email']."'";
         $skills_query = mysqli_query($dbconn, $update_skills_query);
      }

      // Construct the update query with the collected values
      if (!empty($update_values)) {
         $update_query = "UPDATE credentials SET " . implode(', ', $update_values) . " WHERE id = $id_location";
         $query = mysqli_query($dbconn, $update_query);

         if ($query) {
            header("Location: editprofile.php");
         }else{
            update_failed();
         }
      } else {
         // No fields were provided for update
         update_failed();
      }
   }
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Edit Profile - Job Finder</title>
<link href="icon.png" rel="icon" sizes="106x129" type="image/png">
<link href="css/jobfinder.css?v=11" rel="stylesheet">
<link href="css/editprofile.css?v=11" rel="stylesheet">
<script src="javascript/jquery-3.6.0.min.js"></script>
<script src="javascript/jquery-ui.min.js"></script>
<script src="javascript/popper.min.js"></script>
<script src="javascript/bootstrap.min.js"></script>
<script src="javascript/bootstrap.dropdown.min.js" defer></script>
<script src="javascript/affix.min.js"></script>
<script src="javascript/scrollspy.min.js"></script>
<script src="javascript/wwb18.min.js"></script>
<script src="javascript/editprofile.js?v=11"></script>
</head>
<body data-bs-spy="scroll">
   <form action="editprofile.php" method="post" enctype="multipart/form-data">
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
      <div id="wb_Text2">
         <p>Your Profile</p>
      </div>
      <?php
         echo '<input type="text" id="firstname" name="firstname" value="" disabled spellcheck="false" placeholder="'.$row['firstname'].'">';
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
         echo '<input type="text" id="password" name="password" style="height: 40px;" value="" disabled spellcheck="false" placeholder="'.$row['password'].'">';
      ?>
      <div id="wb_Text8">
         <p>Password</p>
      </div>
      <?php
         echo '<input type="text" id="email" name="email" value="" style="height: 40px; background-color: transparent;" disabled spellcheck="false" placeholder="'.$row['email'].'">';
      ?>
      <div id="wb_Text9">
         <p>Email</p>
      </div>
      <div id="wb_Text10">
         <p>Edit Profile</p>
      </div>
      <div id="wb__firstname">
         <input type="text" id="_firstname" name="_firstname" value="" spellcheck="false" placeholder="Enter First Name">
         <label id="_firstname-label" for="_firstname">Enter First Name</label>
      </div>
      <div id="_profilepic" class="input-group">
         <input class="form-control" type="text" readonly id="_profilepic-input" placeholder="Profile Pic">
         <label class="input-group-btn">
            <input type="file" accept=".gif,.jpeg,.jpg,.png" name="profilepic" id="_profilepic-file"><span class="btn">Browse...</span>
         </label>
      </div>
      <?php
         echo '<div id="wb_profile">
         <img src="user_images/'.$row['image'].'" id="profile" alt="" width="40" height="60">
      </div>';
      ?>
      <div id="wb_Text7">
         <p>Profile</p>
      </div>
      <div id="wb__lastname">
         <input type="text" id="_lastname" name="_lastname" value="" spellcheck="false" placeholder="Enter Last Name">
         <label id="_lastname-label" for="_lastname">Enter Last Name</label>
      </div>
      <div id="wb__contact">
         <input type="text" id="_contact" name="_contact" value="" spellcheck="false" placeholder="Enter Contact">
         <label id="_contact-label" for="_contact">Enter Contact</label>
      </div>
      <div id="wb__email">
         <input type="text" id="_email" name="_email" value="" spellcheck="false" placeholder="Enter Email">
         <label id="_email-label" for="_email">Enter Email</label>
      </div>
      <div id="wb__password">
         <input type="text" id="_password" name="_password" value="" spellcheck="false" placeholder="Enter Password">
         <label id="_password-label" for="_password">Enter Password</label>
      </div>
      <button type="submit" id="save" name="save" value="Save" class="ui-button ui-corner-all">Save</button>
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
   </div>
   </form>
</body>
</html>