<?php
   session_start();
   if(isset($_POST["upload"])){
      include 'alert.php';
      include 'dbcon.php';
   
      $title = $_POST["title"];
      $description = $_POST["description"];
      $video_name = $_FILES["video"]["name"];
      $video_tmp_name = $_FILES["video"]["tmp_name"];

      $id_number = $_SESSION['id'];
      $request = "SELECT * FROM credentials WHERE id=$id_number" ;
      $querying = mysqli_query($dbconn, $request);
      $final = mysqli_fetch_assoc($querying);

      $id_number = $_SESSION['id'];
      $requesters = "SELECT * FROM credentials WHERE id=$id_number" ;
      $queryin = mysqli_query($dbconn, $requesters);
      $finaly = mysqli_fetch_assoc($queryin);

   
      // Move the uploaded video to the videos folder
      $video_path = "videos/" . $video_name;
      if (move_uploaded_file($video_tmp_name, $video_path)) {
         $email_address = $final['email'];
         $image_name_user = $finaly['image'];
   
          // Insert the video details into the database
          $connect = "INSERT INTO skills(email, title, description, video, image) VALUES ('$email_address','$title','$description','$video_name','$image_name_user')";
   
          $query = mysqli_query($dbconn, $connect);
   
          if($query){
              header("Location: finder.php");
          }else{
              upload_failed();
          }
      } else {
          echo "Failed to move uploaded file.";
      }    
   }
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Upload Your Skills</title>
<link href="icon.png" rel="icon" sizes="106x129" type="image/png">
<link href="css/jobfinder.css?v=11" rel="stylesheet">
<link href="css/upload.css?v=11" rel="stylesheet">
<script src="javascript/jquery-3.6.0.min.js"></script>
<script src="javascript/jquery-ui.min.js"></script>
<script src="javascript/popper.min.js"></script>
<script src="javascript/bootstrap.min.js"></script>
<script src="javascript/bootstrap.dropdown.min.js" defer></script>
<script src="javascript/affix.min.js"></script>
<script src="javascript/scrollspy.min.js"></script>
<script src="javascript/wwb18.min.js"></script>
<script src="javascript/upload.js?v=11"></script>
</head>
<body data-bs-spy="scroll">
   <form action="upload.php" method="post" enctype="multipart/form-data">
      <div id="container">
         <div id="wb_Image1">
            <img src="images/a3508797091683ab55e1d0534c6ba97a.gif" id="Image1" alt="" width="1359" height="1359">
         </div>
         <div id="wb_Text1" style="line-height: 1.0; margin-top: 30px;">
            <p>Upload Your</p>
            <p>Skill</p>
         </div>
         <div id="wb_title">
            <input type="text" id="title" name="title" value="" spellcheck="false" placeholder="Skill Title">
            <label id="title-label" for="title">Skill Title</label>
         </div>
         <button type="submit" id="upload" name="upload" value="Upload" class="ui-button ui-corner-all">Upload</button>
         <div id="video" class="input-group">
            <input class="form-control" type="text" readonly id="video-input" placeholder="Choose Your Skill Video">
            <label class="input-group-btn">
               <input type="file" accept=".mp4" name="video" id="video-file"><span class="btn">Browse...</span>
            </label>
         </div>
         
         <div id="wb_description">
            <textarea name="description" id="description" rows="3" cols="32" spellcheck="false" placeholder="Skill Description"></textarea>
            <label id="description-label" for="description">Skill Description</label>
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
      </div>
   </form>
</body>
</html>