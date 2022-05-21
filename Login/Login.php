<?php
 
session_start();

include '../Connection.php';


 $username =  $_POST['username'];
 $password =  $_POST['password'];
 
    /*$username = stripcslashes($username);  
    $password = stripcslashes($password);
    $username = mysqli_real_escape_string($conn, $username);  
    $password = mysqli_real_escape_string($conn, $password);*/

    if(isset($_POST['submit'])){
         $sql = "SELECT * FROM `users` WHERE `username`='$username' AND `password`='$password'";
         $result = mysqli_query($conn, $sql);  
         $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
 
        if(is_array($row) && !empty($row)) {
			$validuser = $row['username'];
			$_SESSION['valid'] = $validuser;
			$_SESSION['password'] = $row['password'];
			$_SESSION['FirstName'] = $row['first_name'];
			$_SESSION['LastName'] = $row['last_name'];
			$_SESSION['gender'] = $row['gender'];
			$_SESSION['email'] = $row['email'];
			$_SESSION['profile_image'] = $row['profile_image'];
            $_SESSION['id'] = $row['id'];

            
		} 

		if(isset($_SESSION['valid']))
            {
            header('location:../yes.php');
        	}
        
        else{  
            echo "<h1>!!خطأ في البريد الالكتروني او الرقم السري </h1>";  
            echo "<a href='loginSite.php'>العودة لتسجيل الدخول</a>";
            }     

    }

/*
if(isset($_POST['submit'])) {
	$username = mysqli_real_escape_string($mysqli, $_POST['username']);
	$password = mysqli_real_escape_string($mysqli, $_POST['password']);

	if($username == "" || $password == "") {
		echo "Either username or password field is empty.";
		echo "<br/>";
		echo "<a href='login.php'>Go back</a>";
	} else {
		$sql = mysqli_query($mysqli, "SELECT * FROM user WHERE username='$username' AND password='$password'");
        $result= mysqli_query($conn, $sql);
        $data=mysqli_fetch_assoc($result);
        $count = mysqli_num_rows($result);  

                if($count == 1){  
                    header('../yes.php');  
                }  
                else{  
                    echo "<h1>خطأ في البريد الالكتروني او الرقم السري </h1>";  
                    header('../error.php');
                }     

            }

        }*/
        

?>



