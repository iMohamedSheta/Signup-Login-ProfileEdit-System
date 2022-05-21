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
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>المتميزون - التسجيل</title>
    <link rel="Stylesheet" href="Css1.css"/>
</head>
<body>
    <div class="DivNumber1">
        <form action="Form.php" method="post" enctype="multipart/form-data">
              <?//    Heading     ?>

              <h1>إنشاء حساب جديد</h1>

                        

                <label for="username"><b>اسم المستخدم</b></label>
                <input type="text" id="username" name="username"  placeholder="اسم المستخدم" required autofocus
                pattern="[A-Za-z0-9]+" >
                
                <?//    Email     ?>

                 <label for= "email">        <b>البريد الالكتروني</b>  </label>
                 <input type="email" placeholder="ادخل البريد الالكتروني" name="email"  required >


                 <?//    Password      ?>

                <label for="password">      <b>كلمة السر</b>     </label>
                <input type="password" placeholder="ادخل كلمة السر" name="password" required 
                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                title=" يجب ان تحتوي كلمة السر علي الاقل علي رقم واحد 
                وحرف كبير وحرف صغير وان تكون كلمة السر
                مكونة من 8 خانات عل الاقل." >



            <?//    First-Name     ?>

            <label for="FirstName">    <b>الاسم الاول</b>   </label>
            <input type="text" placeholder="ادخل الاسم الاول" name="FirstName" required 
            pattern="[A-Za-zأ-ي]{2,25}" title="الاسم يحتاج ان يكون من حرفين علي الاقل وبدون ارقام">

            <?//    Last-Name     ?>

            <label for="LastName">      <b>اسم العائلة</b>    </label>
            <input type="text" placeholder="ادخل اسم العائلة" name="LastName" required 
            pattern="[A-Za-zأ-ي]{2,25}" title="الاسم يحتاج ان يكون من حرفين علي الاقل وبدون ارقام">

           


                 <div>
                    <label><b>الجنس</b></label>

                    <div>
                        <input type="radio" id="male" name="gender" class="custom-control-input" value="m">
                        <label  for="male">ذكر</label>
                    </div>
                    <div>
                        <input type="radio" id="female" name="gender" class="custom-control-input" value="f">
                        <label for="female">انثي</label>
                 </div>

                 <div>
                     <br>
                      <label class="lol" for="profile_image" class="lol">اضافة صورة شخصية</label>
                      <input name='profile_image' class="inputfile"  id='profile_image' type='file' />
                 </div>

            <?//    Buttons-(Sign_up-Cancel)       ?>

            <div class="Buttons">
                 <button type="submit" name="signupsubmit"><b>تسجيل</b></button>
            
                 <button class="CancelButton" onclick="location.href='../Login/LoginSite.php';"><b>تسجيل الدخول</b></button>

            </div>

        </form>
        
    </div>



   
    
</body>
</html>
<?php } ?>