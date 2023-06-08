<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Admin Panel - Job Finder</title>
<link href="icon.png" rel="icon" sizes="106x129" type="image/png">
<link href="css/base/jquery-ui.min.css" rel="stylesheet">
<link href="css/jobfinder.css?v=12" rel="stylesheet">
<link href="css/adminpanel.css?v=12" rel="stylesheet">
<script src="javascript/jquery-3.6.0.min.js"></script>
<script src="javascript/jquery-ui.min.js"></script>
<script src="javascript/wwb18.min.js"></script>
<script src="javascript/adminpanel.js?v=12"></script>
</head>
<body>
   <div id="container">
      <div id="wb_Image1">
         <img src="images/a3508797091683ab55e1d0534c6ba97a.gif" id="Image1" alt="" width="1359" height="1359">
      </div>
      <div id="Tabs1" style="border: none;">
         <ul>
            <li role="presentation"><a href="#tabs1-page-1"><span>Skills</span></a></li>
            <li role="presentation"><a href="#tabs1-page-2"><span>Credentials</span></a></li>
            <li role="presentation"><a href="#tabs1-page-3"><span>Messages</span></a></li>
            <li role="presentation"><a href="#tabs1-page-4"><span>Admin's</span></a></li>
         </ul>
         <div id="tabs1-page-1">
            <table id="skills">
               <tr>
                  <td class="cell0"><p id="wb_uid0"><span id="wb_uid1">&nbsp;</span><span id="wb_uid2">Title</span></p></td>
                  <td class="cell1"><p id="wb_uid3"><span id="wb_uid4">&nbsp;</span><span id="wb_uid5">Description</span></p></td>
                  <td class="cell0"><p id="wb_uid6"><span id="wb_uid7">&nbsp;</span><span id="wb_uid8">Email</span></p></td>
                  <td class="cell0"><p id="wb_uid9"><span id="wb_uid10">Video</span></p></td>
                  <td class="cell2"><p id="wb_uid11"><span id="wb_uid12">&nbsp;</span><span id="wb_uid13">Edit</span></p></td>
                  <td class="cell2"><p id="wb_uid14"><span id="wb_uid15">&nbsp;</span><span id="wb_uid16">Delete</span></p></td>
               </tr>
               <?php
            include 'dbcon.php';
               $sql = "SELECT * FROM skills";
               $result = mysqli_query($dbconn, $sql);
               while($row = $result->fetch_assoc()) {
                  echo '<tr style="font-family: Josefin Sans; text-align: center;">
                  <td class="cell6" style="border: 1px solid black;"><p style="color: white;">'.$row['title'].'</p></td>
                  <td class="cell7"  style="border: 1px solid black;"><p style="color: white;">'.$row['description'].'</p></td>
                  <td class="cell8" style="border: 1px solid black;"><p style="color: white;">'.$row['email'].'</p></td>
                  <td class="cell9" style="border: 1px solid black;"><p style="color: white;">'.$row['video'].'</p></td>
                  <td class="cell10" style="border: 1px solid black;"><p style="color: white;"><button style="font-family: Josefin Sans;">Edit</button></p></td>
                  <td class="cell11" style="border: 1px solid black;"><p style="color: white;">
                  <a href="./edit.php?id='.$row['id'].'&skill=skill"><button style="font-family: Josefin Sans;">Delete</button></a>
                  </p></td>
               </tr>';
               }
            ?>
            </table>
         </div>
         <div id="tabs1-page-2">
            <table id="credentials">
               <tr>
                  <td class="cell0"><p id="wb_uid77"><span id="wb_uid78">&nbsp;</span><span id="wb_uid79">First Name</span></p></td>
                  <td class="cell0"><p id="wb_uid80"><span id="wb_uid81">&nbsp;</span><span id="wb_uid82">Last Name</span></p></td>
                  <td class="cell0"><p id="wb_uid83"><span id="wb_uid84">&nbsp;</span><span id="wb_uid85">Contact</span></p></td>
                  <td class="cell0"><p id="wb_uid86"><span id="wb_uid87">&nbsp;</span><span id="wb_uid88">Email</span></p></td>
                  <td class="cell0"><p id="wb_uid89"><span id="wb_uid90">&nbsp;</span><span id="wb_uid91">Password</span></p></td>
                  <td class="cell0"><p id="wb_uid92"><span id="wb_uid93">&nbsp;</span><span id="wb_uid94">Image</span></p></td>
                  <td class="cell0"><p id="wb_uid95"><span id="wb_uid96">&nbsp;</span><span id="wb_uid97">Edit</span></p></td>
                  <td class="cell1"><p id="wb_uid98"><span id="wb_uid99">&nbsp;</span><span id="wb_uid100">Delete</span></p></td>
               </tr>
               <?php
            include 'dbcon.php';
            $sql = "SELECT * FROM credentials";
            $result = mysqli_query($dbconn, $sql);
            while($row = $result->fetch_assoc()) {
               echo '<tr style="font-family: Josefin Sans; text-align: center;">
               <td class="cell9" style="border: 1px solid black;"><p style="color: white;">'.$row['firstname'].'</p></td>
               <td class="cell10" style="border: 1px solid black;"><p style="color: white;">'.$row['lastname'].'</p></td>
               <td class="cell11" style="border: 1px solid black;"><p style="color: white;">'.$row['contact'].'</p></td>
               <td class="cell12" style="border: 1px solid black;"><p style="color: white;">'.$row['email'].'</p></td>
               <td class="cell13" style="border: 1px solid black;"><p style="color: white;">'.$row['password'].'</p></td>
               <td class="cell14" style="border: 1px solid black;"><p style="color: white;"><img style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover;" src="user_images/'.$row['image'].'"></p></td>
               
               <td class="cell16"><p><button style="font-family: Josefin Sans;">Edit</button></p></td>
               <td class="cell17"><p>
               <a href="./edit.php?id='.$row['id'].'&credentials=credentials"><button style="font-family: Josefin Sans;">Delete</button></a>
               </p></td>
            </tr>';
            }
            ?>
            </table>
         </div>
         <div id="tabs1-page-3">
            <table id="messages">
               <tr>
                  <td class="cell0"><p id="wb_uid181"><span id="wb_uid182">&nbsp;</span><span id="wb_uid183">Email</span></p></td>
                  <td class="cell1"><p id="wb_uid184"><span id="wb_uid185">&nbsp;</span><span id="wb_uid186">Message</span></p></td>
                  <td class="cell2"><p id="wb_uid187"><span id="wb_uid188">&nbsp;</span><span id="wb_uid189">Delete</span></p></td>
               </tr>
               <?php
            include 'dbcon.php';
            $sql = "SELECT * FROM messages";
            $result = mysqli_query($dbconn, $sql);
            while($row = $result->fetch_assoc()) {
               
               echo '<tr style="text-align: center;">
               <td class="cell4"><p style="color: white;">'.$row['email'].'</p></td>
               <td class="cell5"><p style="color: white;">'.$row['message'].'</p></td>
               <td class="cell7"><p>
               
               <a href="./edit.php?id='.$row['id'].'&message=message" name="delete_message"><button type="submit" style="font-family: Josefin Sans;" name="delete_message">Delete</button></a>
               </p></td>
               
            </tr>';
            
            }
            ?>
            </table>
         </div>
         <div id="tabs1-page-4">
            <table id="admin">
               <tr>
                  <td class="cell0"><p id="wb_uid220"><span id="wb_uid221">&nbsp;</span><span id="wb_uid222">Email</span></p></td>
                  <td class="cell0"><p id="wb_uid223"><span id="wb_uid224">&nbsp;</span><span id="wb_uid225">Password</span></p></td>
                  <td class="cell1"><p id="wb_uid226"><span id="wb_uid227">&nbsp;</span><span id="wb_uid228">Edit</span></p></td>
                  <td class="cell1"><p id="wb_uid229"><span id="wb_uid230">&nbsp;</span><span id="wb_uid231">Delete</span></p></td>
               </tr>
               <?php
            include 'dbcon.php';
            $sql = "SELECT * FROM admin";
            $result = mysqli_query($dbconn, $sql);
            while($row = $result->fetch_assoc()) {
               $display_form = false;
      
               // Check if the Edit button was clicked for this row
               if (isset($_POST['edit'])) {
                  $display_form = true;
                  
               }
               echo '<tr style="font-family: Josefin Sans; text-align: center;">
               <td class="cell4" style="border: 1px solid black;"><p style="color: white;">'.$row['email'].'</p></td>
               <td class="cell5" style="border: 1px solid black;"><p style="color: white;">'.$row['password'].'</p></td>
               <form action="adminpanel.php" method="post">
               <td class="cell6" style="border: 1px solid black;"><p><button style="font-family: Josefin Sans;" name="edit">Edit</button></p></td>
               <td class="cell7" style="border: 1px solid black;"><p>
               <a href="./edit.php?id='.$row['id'].'&admin=admin"><button style="font-family: Josefin Sans;" name="delete">Delete</button></p></td></a>
               </form>
            </tr>';
            
            if ($display_form) {
               echo '<form method="post" action="adminpanel.php">';
               echo '<td><input type="text" name="email" value="'.$row['email'].'"><br>';
               echo '<input type="text" name="password" value="'.$row['password'].'"><br>';
               echo '<button type="submit" name="submit">Save</button><button type="button" onclick="location.reload();">Cancel</button></td><br>';
               echo '<td><button type="submit" name="delete">Delete</button></td>';
               echo '</form>';
           }
            }
            ?>
            </table>
         </div>
      </div>
      <div id="wb_Text1">
         <p>Admin Panel</p>
      </div>
      <div id="wb_Icon1">
         <a href="javascript:history.back()"><div id="Icon1"><i class="Icon1"></i></div></a>
      </div>
      <div id="wb_Text3">
         <a href="index.php" id="wb_uid272">
<p>Jf</p></a>
      </div>
   </div>
</body>
</html>