 <?php
session_start();

include '../Connection.php';




if (isset($_POST['signupsubmit'])) {

//----------------------------------------------------------------------------------------------------------------------------------------   
//----------------------------------------------------------------------------------------------------------------------------------------   


/*                                              ***     كود اضافة الصور بأمان      ***                 */

    $FileNameNew = '_defaultUser.png';
    $file = $_FILES['profile_image'];

        $FileNameNew = '_defaultUser.png';
        $file = $_FILES['profile_image'];

        if (!empty($_FILES['profile_image']['name'])){

            $fileName = $_FILES['profile_image']['name'];
            $fileTmpName = $_FILES['profile_image']['tmp_name'];
            $fileSize = $_FILES['profile_image']['size'];
            $fileError = $_FILES['profile_image']['error'];
            $fileType = $_FILES['profile_image']['type']; 

            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));

            $allowed = array('jpg', 'jpeg', 'png', 'gif');
            if (in_array($fileActualExt, $allowed)){

                if ($fileError === 0){

                    if ($fileSize < 10000000){

                        $FileNameNew = uniqid('', true) . "." . $fileActualExt;
                        $fileDestination = '../assets/uploads/users/' . $FileNameNew;
                        move_uploaded_file($fileTmpName, $fileDestination);

                    }
                    else {

                        $_SESSION['ERRORS']['imageerror'] = 'image size should be less than 10MB';
                        header("Location: ../");
                        exit(); 
                    }
                }
                else {

                    $_SESSION['ERRORS']['imageerror'] = 'image upload failed, try again';
                    header("Location: ../");
                    exit();
                }
            }
            else {

                $_SESSION['ERRORS']['imageerror'] = 'invalid image type, try again';
                header("Location: ../");
                exit();
            }
        }

 //----------------------------------------------------------------------------------------------------------------------------------------   
 //----------------------------------------------------------------------------------------------------------------------------------------   

    
    $username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
    $FirstName=$_POST['FirstName'];
    $LastName=$_POST['LastName'];
    $Gender=$_POST['gender'];

    
    $sql = "INSERT INTO `users` (username, email, password, first_name, last_name, gender, profile_image)  VALUES ('$username','$email','$password','$FirstName', 
    '$LastName','$Gender','$FileNameNew')";
    
    if(mysqli_query($conn, $sql)){
        header('Location: ../Login/LoginSite.php');

    } else{
    echo "خطأ في الاتصال " 
        . mysqli_error($conn);
        }
}
mysqli_close($conn);
?>
