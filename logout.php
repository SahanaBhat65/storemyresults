<?php
   session_start();
   
   if(session_destroy()) {
        header("Location: signup.html");
        echo '<script language="javascript">';
        echo 'alert("Logout successful")';
        echo '</script>';

   }
?>