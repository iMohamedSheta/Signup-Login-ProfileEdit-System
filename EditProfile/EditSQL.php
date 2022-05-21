<?php
session_start();

include "../Connection.php";
$id = $_SESSION['id'];

if(isset($_POST['update']))
{	

			//----------------------------------------------------------------------------------------------------------------------------------------   
			//----------------------------------------------------------------------------------------------------------------------------------------   


			/*                                              ***     كود اضافة الصور بأمان      ***                 */



			
		
		$FileNameNew = $_SESSION['profile_image'];
		$file = $_FILES['profile_image'];

		if (!empty($_FILES['profile_image']['name']))
		{
			$fileName = $_FILES['profile_image']['name'];
			$fileTmpName = $_FILES['profile_image']['tmp_name'];
			$fileSize = $_FILES['profile_image']['size'];
			$fileError = $_FILES['profile_image']['error'];
			$fileType = $_FILES['profile_image']['type']; 

			$fileExt = explode('.', $fileName);
			$fileActualExt = strtolower(end($fileExt));

			$allowed = array('jpg', 'jpeg', 'png', 'gif');
			if (in_array($fileActualExt, $allowed))
			{
				if ($fileError === 0)
				{
					if ($fileSize < 10000000)
					{
						$FileNameNew = uniqid('', true) . "." . $fileActualExt;
						$fileDestination = '../assets/uploads/users/' . $FileNameNew;
						move_uploaded_file($fileTmpName, $fileDestination);

						/*
						* -------------------------------------------------------------------------------
						*   Deleting old profile photo
						* -------------------------------------------------------------------------------
						*/
						if ( $_SESSION['profile_image'] != "_defaultUser.png" ) {
							if (!unlink('../assets/uploads/users/' . $_SESSION['profile_image'])) {  

								$_SESSION['ERRORS']['imageerror'] = 'old image could not be deleted';
								header("Location: ../");
								exit();
							} 
						}
					}
					else
					{
						$_SESSION['ERRORS']['imageerror'] = 'image size should be less than 10MB';
						header("Location: ../");
						exit(); 
					}
				}
				else
				{
					$_SESSION['ERRORS']['imageerror'] = 'image upload failed, try again';
					header("Location: ../");
					exit();
				}
			}
			else
			{
				$_SESSION['ERRORS']['imageerror'] = 'invalid image type, try again';
				header("Location: ../");
				exit();
			}
		}


			//----------------------------------------------------------------------------------------------------------------------------------------   
			//----------------------------------------------------------------------------------------------------------------------------------------   


		$id = $_SESSION['id'];
		$username = $_POST['username'];
		
		$FirstName = $_POST['FirstName'];
		$LastName = $_POST['LastName'];
		$email = $_POST['email'];	
		$password = $_POST['password'];	
		$gender = $_POST['gender'];


		
		if(empty($username) || empty($FirstName) || empty($LastName) || empty($email) || empty($password) || empty($gender) || empty($FileNameNew))
		{
					
			echo "لا يمكن ان تكون احد الخانات خالية برجاء اكمل البيانات";
		}

		else {	

			$result = mysqli_query($conn, "UPDATE `users` SET username='$username', first_name='$FirstName', last_name='$LastName', email='$email', password='$password', gender='$gender', profile_image='$FileNameNew' WHERE id='$id' ");
			
			header("Location: ../logout.php");

		}
    
}
?>
