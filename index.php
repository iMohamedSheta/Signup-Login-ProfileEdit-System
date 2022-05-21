<?php 

session_start();

if(!isset($_SESSION['valid']) && !isset($_SESSION['password']))
            {
            header("location: Login/LoginSite.php");
        	}
            
    else
        { 
         header("location: yes.php");
        }
?>