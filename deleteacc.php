<?php session_start(); ?>

<?php /*
if(!isset($_SESSION['valid'])) {
	header('Location: loginsite.php');
}
*/
?>

<?php
include("connection.php");

$id = $_SESSION['id'];

$result=mysqli_query($conn, "DELETE FROM users WHERE id='$id';");

if(!isset($_SESSION['valid']) && !isset($_SESSION['password']))
            {
            header("location: Login/LoginSite.php");
        	}
            
    ?>

