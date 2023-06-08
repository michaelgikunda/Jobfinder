<?php
   session_start();
   if(isset($_POST['getstarted'])){
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
            header("Location: signup.php");
            exit();
         }
      }
   }
   if(isset($_POST['trynow'])){
      include 'dbcon.php';
      $email1 = $_POST['emailaddress'];
      $_SESSION['email1'] = $email1;

      $connect = "SELECT email FROM credentials";
      $query = mysqli_query($dbconn, $connect);

      while($row = mysqli_fetch_assoc($query)){
         if($row['email'] == $email1){
            header("Location: login.php");
            exit();
         } else{
            header("Location: signup.php");
            exit();
         }
      }
   }

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Job Finder - Kenya's 1st Skill Based Job search Platform</title>
<link href="icon.png" rel="icon" sizes="106x129" type="image/png">
<link href="css/jobfinder.css?v=11" rel="stylesheet">
<link href="css/index.css?v=11" rel="stylesheet">
<script src="javascript/anime.min.js"></script>
<script src="javascript/polymorph.min.js"></script>
<script src="javascript/jquery-3.6.0.min.js"></script>
<script src="javascript/popper.min.js"></script>
<script src="javascript/bootstrap.min.js"></script>
<script src="javascript/bootstrap.dropdown.min.js" defer></script>
<script src="javascript/affix.min.js"></script>
<script src="javascript/scrollspy.min.js"></script>
<script src="javascript/index.js?v=11"></script>
</head>

<body data-bs-spy="scroll">
   
   <div id="container">
      <div id="wb_Shape3">
         <div id="Shape3"></div>
      </div>
      <div id="wb_Shape2">
         <div id="Shape2"></div>
      </div>
      <div id="wb_Shape1">
         <div id="Shape1"></div>
      </div>
      <div id="wb_Text6">
         <p>A+</p>
      </div>
      <div id="wb_Image1" style="z-index: -2;">
         <img src="images/5d892ee89d4f106f66a0c9eb27c2bc87.gif" id="Image1" alt="" width="1359" height="1359">
      </div>
      
      <div id="wb_Text1">
         <p>Job Finder</p>
      </div>
      
      <form action="index.php" method="post">
         <div id="wb_email">
         <input type="email" id="email" name="email" value="" spellcheck="false" placeholder="Enter your Email">
         <label id="email-label" for="email">Enter your Email</label>
         </div>
         <button type="submit" id="getstarted" name="getstarted" value="Get Started" class="ui-button ui-corner-all">Get Started</button>
      </form>
      <button type="submit" id="ThemeableButton2" name="" value="Hiring" class="ui-button ui-corner-all">Hiring</button>
      
      
      <div id="wb_Text3">
         <a href="index.php" id="wb_uid0">
<p>Jf</p></a>
      </div>
      <div id="wb_Text10">
         <p>Revolusionise the Job Market by</p>
         <p>showcasing your skills on Job Finders</p>
         <p>video based platform.</p>
      </div>
      <div id="wb_Image3">
         <img src="images/model4.png" id="Image3" alt="" width="637" height="634">
      </div>
      
      <hr id="Line1">
      <div id="wb_Text4">
         <p>Access top talent worldwide</p>
         <p>seamlessly.</p>
      </div>
      <div id="wb_Text5">
         <p>Hundreds of current active</p>
         <p>Users</p>
      </div>
      <div id="wb_Text7">
         <p>100+</p>
      </div>
      <div id="wb_Text8">
         <p>Jf</p>
      </div>
      <div id="wb_Text9">
         <p>How TO get Started</p>
      </div>
      <div id="wb_Text11">
         <p>Join Job Finder by </p>
         <p>Logging In or Signing Up</p>
      </div>
      
      <div id="wb_Text12">
         <p>Step 1</p>
      </div>
      <div id="wb_Text13">
         <p>Complete your profile </p>
         <p>to gain full priveledges</p>
      </div>
      <div id="wb_Text14">
         <p>Step 2</p>
      </div>
      <div id="wb_Text15">
         <p>Upload your skill to get</p>
         <p>a chance to gain a job</p>
      </div>
      <div id="wb_Text16">
         <p>Step 3</p>
      </div>
      
      <div id="wb_MorphingIcon1">
         <svg id="MorphingIcon1" height="100%" width="100%" viewBox="0 0 1411 641" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <defs>
               <path id="MorphingIcon1-shape" d="M52 441 C-14 356, -18 260, 47 174 C71 142, 130 107, 214 115 C334 120, 437 167, 563 156 C693 138, 769 83, 868 43 C924 16, 1015 -12, 1098 6 C1209 32, 1264 88, 1308 138 C1393 244, 1370 363, 1261 465 C1191 534, 1062 599, 889 612 C686 629, 484 592, 299 560 C196 541, 111 505, 71 460 C62 454, 56 447, 52 441" vector-effect="non-scaling-stroke"/>
            </defs>
            <use xlink:href="#MorphingIcon1-shape" data-href="#MorphingIcon1-shape" id="wb_uid1"/>
         </svg>
      </div>
      
      <div id="wb_Shape4">
         <div id="Shape4"></div>
      </div>
      <div id="wb_Text17">
         <p>Explore By Category</p>
      </div>
      <div id="wb_Card1" class="card">
         <div id="Card1-card-body">
            <div id="Card1-card-item0">Design</div>
            <div id="Card1-card-item1">100+ Available</div>
         </div>
      </div>
      <div id="wb_Card2" class="card">
         <div id="Card2-card-body">
            <div id="Card2-card-item0">Marketing</div>
            <div id="Card2-card-item1">100+ Available</div>
         </div>
      </div>
      <div id="wb_Card3" class="card">
         <div id="Card3-card-body">
            <div id="Card3-card-item0">Finance</div>
            <div id="Card3-card-item1">100+ Available</div>
         </div>
      </div>
      <div id="wb_Card4" class="card">
         <div id="Card4-card-body">
            <div id="Card4-card-item0">Business</div>
            <div id="Card4-card-item1">100+ Available</div>
         </div>
      </div>
      <div id="wb_Card5" class="card">
         <div id="Card5-card-body">
            <div id="Card5-card-item0">Engineering</div>
            <div id="Card5-card-item1">100+ Available</div>
         </div>
      </div>
      <div id="wb_Card6" class="card">
         <div id="Card6-card-body">
            <div id="Card6-card-item0">Technology</div>
            <div id="Card6-card-item1">100+ Available</div>
         </div>
      </div>
      <div id="wb_viewall">
<a class="ui-button ui-corner-all" id="viewall" href="./finder.php">View  All</a>
      </div>
      <div id="wb_Text18">
         <p>What Our Users</p>
         <p>Say About Us</p>
      </div>
      <div id="wb_Card7" class="card">
         <div id="Card7-card-body">
            <div id="Card7-card-item0">With zero school certification, and no prier work experience, i cant<br>believe i was able to land a gig at a top Tech Firm<br>just for my skill in Software Enginering.</div>
            <div id="Card7-card-item1"><br>Michael Muthomi</div>
         </div>
      </div>
      
      <div id="wb_Image2">
         <img src="images/ceo.png" id="Image2" alt="" width="352" height="528">
      </div>
      
      <div id="wb_Shape5">
         <div id="Shape5"></div>
      </div>
      <div id="wb_Shape6">
         <div id="Shape6"></div>
      </div>
      
      <div id="wb_Text19">
         <p>Feel Free </p>
         <p>To Join</p>
      </div>
      
      <div id="wb_Text20">
         <p>Its Absoluely Free</p>
         <p>why not give it a Try.</p>
      </div>
      
   <form action="index.php" method="post">
      <button type="submit" id="trynow" name="trynow" value="Try Now" class="ui-button ui-corner-all">Try Now</button>
         <div id="wb_emailaddress">
            <input type="text" id="emailaddress" name="emailaddress" value="" spellcheck="false" placeholder="Enter your Email">
            <label id="emailaddress-label" for="emailaddress">Enter your Email</label>
         </div>
         
   </form>
      <div id="wb_Text21">
         <p>Job FInder</p>
      </div>
      
      <div id="wb_Text22">
         <p>Kenya's First Skill Based</p>
         <p>Job search Platform</p>
      </div>
      
      <div id="wb_Text23">
         <p>Links</p>
      </div>
      
      <div id="wb_Text24">
         <a href="admin.php" id="wb_uid2"><p>Admin</p></a>
      </div>
      <div id="wb_Text25">
         <a href="contact.php" id="wb_uid3"><p>Contact</p></a>
      </div>
      <div id="wb_Text26">
         <a href="about.php" id="wb_uid4"><p>About</p></a>
      </div>
      <div id="wb_Text27">
         <a href="finder.php" id="wb_uid5"><p>Explore</p></a>
      </div>
      <div id="wb_Text28">
         <a href="login.php" id="wb_uid6"><p>Login</p></a>
      </div>
      <div id="wb_Text29">
         <a href="signup.php" id="wb_uid7"><p>Sign Up</p></a>
      </div>
      <div id="wb_Text30">
         <a href="profile.php" id="wb_uid8"><p>Profile</p></a>
      </div>
      
      <div id="wb_Icon1">
         <div id="Icon1"><i class="Icon1"></i></div>
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
                        <a href="./index.php" class="nav-link active" itemprop="url">Home</a>
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
      
      <div id="wb_Text2">
         <span id="wb_uid9">Kenya's <span id="wb_uid10">First</span> Skill<br>Based <br>Job search Platform</span>
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
   </div>
   
</body>
</html>