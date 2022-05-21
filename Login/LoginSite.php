<?php 
session_start();

if(isset($_SESSION['valid']) && isset($_SESSION['password']))
            {
            header("location: ../yes.php");
        	}
            
    else
    {  
?>
<!DOCTYPE html>
<html lang="AR" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css2.css">
    <title>المتميزون - تسجيل الدخول</title>
</head>
<body>
<div class="DivNumber1">


        <form action="Login.php" method="post">

            <?//    Heading     ?>

            <h1>تسجيل الدخول</h1>


            <?//    username     ?>

             <label for="username"><b>اسم المستخدم</b></label>
             <input type="text" id="username" name="username"  placeholder="اسم المستخدم" required autofocus
             pattern="[A-Za-z0-9]+">

            <?//    Password      ?>

            <label for="password">      <b>كلمة السر</b>     </label>
                <input type="password" placeholder="ادخل كلمة السر" name="password" required 
                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                title=" يجب ان تحتوي كلمة السر علي الاقل علي رقم واحد 
                وحرف كبير وحرف صغير وان تكون كلمة السر
                مكونة من 8 خانات عل الاقل." >

            <?//    Buttons-(Sign_up-Cancel)       ?>

            <div class="Buttons">
                 <button type="submit" name="submit"><b>تسجيل الدخول</b></button>
            
                 <button class="CancelButton" onclick="location.href='../Signup/Site-AR.php';"><b>إنشاء حساب</b></button>

            </div>

        </form>
        
    </div>
</body>
</html>
<?php } ?>