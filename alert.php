<link href="css/login.css?v=6" rel="stylesheet">

<?php
    function invalid_credentials(){
        echo '<link href="css/login.css?v=6" rel="stylesheet">';
            ?>
            <script>
                function popup(){
                    ShowObjectWithEffect('wb_popup', 1, 'slideright', 500);ShowObjectWithEffect('wb_errorMessage', 1, 'slideright', 500);ShowObjectWithEffect('wb_close', 1, 'slideleft', 500);return false;
                }
                popup();
            </script>
            
        <?php
        invalid();
    }
    function invalid(){
        ?>
        <div id="wb_popup">
            <div id="popup"></div>
        </div>
        <div id="wb_errorMessage">
            <p>Invalid Credentials</p>
        </div>
        <div id="wb_close">
            <a href="#" onclick="ShowObjectWithEffect('wb_popup', 0, 'slideright', 500);ShowObjectWithEffect('wb_errorMessage', 0, 'slideright', 500);ShowObjectWithEffect('wb_close', 0, 'slideright', 500);return false;"><div id="close"><i class="close"></i></div></a>
        </div>
        <?php
    }
    function email_exists(){
        ?>
        <div id="wb_popup">
         <div id="popup"></div>
      </div>
      <div id="wb_errorMessage">
         <p>Email Exists: Plz Login</p>
      </div>
      <div id="wb_close">
         <a href="#" onclick="ShowObjectWithEffect('wb_popup', 0, 'slideright', 500);ShowObjectWithEffect('wb_errorMessage', 0, 'slideright', 500);ShowObjectWithEffect('wb_close', 0, 'slideright', 500);return false;"><div id="close"><i class="close"></i></div></a>
      </div>
      <?php
    }
    function message_sent(){
        ?>
        <link href="css/login.css?v=6" rel="stylesheet">
        <div id="wb_popup">
         <div id="popup"></div>
      </div>
      <div id="wb_errorMessage">
         <p>Message Sent</p>
      </div>
      <div id="wb_close">
         <a href="#" onclick="ShowObjectWithEffect('wb_popup', 0, 'slideright', 500);ShowObjectWithEffect('wb_errorMessage', 0, 'slideright', 500);ShowObjectWithEffect('wb_close', 0, 'slideright', 500);return false;"><div id="close"><i class="close"></i></div></a>
      </div>
      <?php
    }
    function message_notsent() {
        ?>
            <link href="css/login.css?v=6" rel="stylesheet">
            <div id="wb_popup">
                <div id="popup"></div>
            </div>
            <div id="wb_errorMessage">
                <p>Message Not Sent!</p>
            </div>
            <div id="wb_close">
                <a href="#" onclick="showPopup(); return false;">
                    <div id="close"><i class="close"></i></div>
                </a>
            </div>
            <style>
                @keyframes slideInRight {
                    0% {
                        transform: translateX(100%);
                        opacity: 0;
                    }
                    100% {
                        transform: translateX(0);
                        opacity: 1;
                    }
                }
        
                #wb_popup,
                #wb_errorMessage,
                #wb_close {
                    animation: slideInRight 0.5s forwards;
                }
            </style>
            <script>
                function showPopup() {
                    var popup = document.getElementById('wb_popup');
                    var errorMessage = document.getElementById('wb_errorMessage');
                    var closeButton = document.getElementById('wb_close');
        
                    popup.style.display = 'block';
                    errorMessage.style.display = 'block';
                    closeButton.style.display = 'block';
                }
            </script>
        <?php
        }
        
    function upload_failed(){
        ?>
        <link href="css/login.css?v=6" rel="stylesheet">
        <div id="wb_popup">
         <div id="popup"></div>
      </div>
      <div id="wb_errorMessage">
         <p>Upload Failed!</p>
      </div>
      <div id="wb_close">
         <a href="#" onclick="ShowObjectWithEffect('wb_popup', 0, 'slideright', 500);ShowObjectWithEffect('wb_errorMessage', 0, 'slideright', 500);ShowObjectWithEffect('wb_close', 0, 'slideright', 500);return false;"><div id="close"><i class="close"></i></div></a>
      </div>
      <?php
    } 
    function operation_succesfull(){
        ?>
        <div id="wb_popup">
         <div id="popup"></div>
      </div>
      <div id="wb_errorMessage">
         <p>Operation Successfull</p>
      </div>
      <div id="wb_close">
         <a href="#" onclick="ShowObjectWithEffect('wb_popup', 0, 'slideright', 500);ShowObjectWithEffect('wb_errorMessage', 0, 'slideright', 500);ShowObjectWithEffect('wb_close', 0, 'slideright', 500);return false;"><div id="close"><i class="close"></i></div></a>
      </div>
      <?php
    }
    
?>