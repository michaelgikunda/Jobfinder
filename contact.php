<?php
   session_start();  
   if(isset($_POST['send'])){
      include 'dbcon.php';
      include 'alert.php';

      $email = $_POST['email'];
      $message = $_POST['message'];

      $connect = "INSERT into messages(email, message) VALUES ('$email','$message')";
      $query = mysqli_query($dbconn, $connect);

      if($query){
         message_sent();
      }else{
         message_notsent();
      }
   }

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Contact - Job Finder</title>
<link href="icon.png" rel="icon" sizes="106x129" type="image/png">
<link href="css/jobfinder.css?v=11" rel="stylesheet">
<link href="css/contact.css?v=11" rel="stylesheet">
<script src="javascript/jquery-3.6.0.min.js"></script>
<script src="javascript/popper.min.js"></script>
<script src="javascript/bootstrap.min.js"></script>
<script src="javascript/bootstrap.dropdown.min.js" defer></script>
<script src="javascript/affix.min.js"></script>
<script src="javascript/scrollspy.min.js"></script>
<script src="javascript/jquery-ui.min.js"></script>
<script src="javascript/wwb18.min.js"></script>
<script src="javascript/contact.js?v=11"></script>
</head>
<body data-bs-spy="scroll">
   <form action="contact.php" method="post">
   <div id="container">
      <div id="wb_Image1" style="z-index: -1;">
         <img src="images/a3508797091683ab55e1d0534c6ba97a.gif" style="z-index: 0;" id="Image1" alt="" width="1359" height="1359">
      </div>
      <?php
         if(isset($_SESSION['email1'])){
            echo '<div id="wb_email">
            <input type="email" id="email" name="email" value="'.$_SESSION['email1'].'" maxlength="50" spellcheck="false" placeholder="Email">
            <label id="email-label" for="email">Email</label>
         </div>';
         
         }elseif(isset($_SESSION['email'])){
            echo '<div id="wb_email">
            <input type="email" id="email" name="email" value="'.$_SESSION['email'].'" maxlength="50" spellcheck="false" placeholder="Email">
            <label id="email-label" for="email">Email</label>
         </div>';
        
         }
         else{
            echo '<div id="wb_email">
            <input type="email" id="email" name="email" value="" maxlength="50" spellcheck="false" placeholder="Email">
            <label id="email-label" for="email-address">Email</label>
         </div>';
         
         }
      ?>
      <div id="wb_Text1">
         <p>Say Hi !</p>
      </div>
      <div id="wb_message">
         <textarea name="message" id="message" rows="6" cols="32" spellcheck="false" placeholder="Enter Your Message"></textarea>
         <label id="message-label" for="message">Enter Your Message</label>
      </div>
<button type="submit" id="facebook" name="" value="Facebook" class="ui-button ui-corner-all">Facebook</button>
<button type="submit" id="instagram" name="instagram" value="Instagram" class="ui-button ui-corner-all">Instagram</button>
<button type="submit" id="twitter" name="twitter" value="Twitter" class="ui-button ui-corner-all">Twitter</button>
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
                        <a href="./contact.php" class="nav-link active" itemprop="url">Contact us</a>
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
<button type="submit" id="send" name="send" value="Send" class="ui-button ui-corner-all">Send</button>
   </div>
   </form>
</body>
</html>