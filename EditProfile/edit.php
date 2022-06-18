<?php


session_start();

 if(!isset($_SESSION['valid']) && !isset($_SESSION['password']))
            {
          header("location: ../Login/LoginSite.php");
        	}
            
    else
    {  
               


include "../Connection.php";

$username=$_SESSION['valid'];
$password=$_SESSION['password'];


$sql = "SELECT * FROM `users` WHERE `username`='$username' AND `password`='$password'";
$result = mysqli_query($conn, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);  
//print_r($row);
$FirstName=$row['first_name'];
$LastName=$row['last_name'];
$email=$row['email'];
$bio=$row['bio'];
$profile_image=$row['profile_image'];
$gender=$row['gender'];
$headline=$row['headline'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>المتميزون - تعديل الملف الشخصي</title>
    <link rel="stylesheet" href="edit.css" />
</head>
<body dir="rtl">


<form action="EditSQL.php" method="post" class="Profile-card" enctype="multipart/form-data">

    <img style="border-radius:100px;" alt="My profile photo" src="../assets/uploads/users/<?php echo $profile_image;?>"  width="200" height="200"  />

        
    <h2>تعديل الملف الشخصي  <?php echo $FirstName;?> <?php echo $LastName;?></h2>

    <label for="username">  <b>اسم المستخدم</b> </label>
    <input type="text" placeholder="<?php echo $username;?>" value="<?php echo $username;?>" name="username"
    pattern="[A-Za-z0-9]+" >
    
    <label for= "Email">        <b>البريد الالكتروني</b>  </label>
    <input type="Email" placeholder="<?php echo $email;?>" value="<?php echo $email;?>"  name="email">

    <label for="FirstName">  <b>الاسم الاول</b> </label>
    <input type="text" placeholder="<?php echo $FirstName;?>" value="<?php echo $FirstName;?>" name="FirstName" 
        pattern="[A-Za-zأ-ي]{2,25}" title="الاسم يحتاج ان يكون من حرفين علي الاقل وبدون ارقام" >


    <label for="LastName">      <b>اسم العائلة</b>    </label>
    <input type="text" placeholder="<?php echo $LastName;?>"  value="<?php echo $LastName;?>"name="LastName"
        pattern="[A-Za-zأ-ي]{2,25}" title="الاسم يحتاج ان يكون من حرفين علي الاقل وبدون ارقام"  >


   


    <label for= "Password">        <b>الرقم السري</b>  </label>
    <input type="Password"  value="<?php echo $password;?>" name="password" 
        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  >


    <div>
                <label><b>الجنس</b></label>

    
                <?php 
                    if($gender == "m") 
                        { ?>
                        <div>
                            <input type="radio" id="male" name="gender" class="custom-control-input" value="m" checked>
                            <label  for="male">ذكر</label>
                        </div>
                        <div>
                            <input type="radio" id="female" name="gender" class="custom-control-input" value="f" >
                            <label for="female">انثي</label>
                        </div>
                <?php  } ?>
                    

                <?php 
                    if($gender == "f") 
                        { ?>
                        <div>
                            <input type="radio" id="male" name="gender" class="custom-control-input" value="m" >
                            <label  for="male">ذكر</label>
                        </div>
                        <div>
                            <input type="radio" id="female" name="gender" class="custom-control-input" value="f" checked>
                            <label for="female">انثي</label>
                        </div>
                <?php  } ?>
             <?php

                if(empty($gender))
                    { ?>
                    <div>
                        <input type="radio" id="male" name="gender" class="custom-control-input" value="m" >
                        <label  for="male">ذكر</label>
                    </div>
                    <div>
                        <input type="radio" id="female" name="gender" class="custom-control-input" value="f" >
                        <label for="female">انثي</label>
                    </div>
             <?php  } ?>


                 <div>
                     <br>
                      <label for="profile_image" class="lol">اضافة صورة شخصية</label>
                      <input name='profile_image' class="inputfile"  id='profile_image' type='file' />
                 </div>
    </div>

<!-- --------------------------------------------------------- Buttons ----------------------------------------------------------------------- -->

    <button type="update" name="update" ><b>تعديل الملف الشخصي</b></button>

    <button class="CancelButton" formaction="../yes.php" onclick="location.href='../yes.php';"><b>الرجوع</b></button>




 </form>


</body>
</html>
<?php  } ?>