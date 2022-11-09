<?php
    session_start();
    if(!isset($_SESSION['running'])){
        echo '<script type="text/javascript"> alert("Invalid Session."); window.location.href = "../login.php"; </script>';
    }
   
    

