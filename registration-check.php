<?php
    $msg = "";
	use PHPMailer\PHPMailer\PHPMailer;
 session_start();
 if (isset($_POST['submit'])) {
 include "assets/db_conn.php";

 // if (isset($_POST['fname']) && isset($_POST['lname'])
 //    && isset($_POST['Phone']) && isset($_POST['Email'])&& isset($_POST['C_Email'])&& isset($_POST['Password'])&& isset($_POST['C_password'])) {

 // 	function validate($data){
 //      $data = trim($data);
	//    $data = stripslashes($data);
	//    $data = htmlspecialchars($data);
	//    return $data;
 // 	}	

 	$f_name = $conn->real_escape_string($_POST['fname']);
 	$l_name = $conn->real_escape_string($_POST['lname']);
 	$Phonenumber = $conn->real_escape_string($_POST['Phone']);
 	$emailad = $conn->real_escape_string($_POST['Email']);
	$pass = $conn->real_escape_string($_POST['Password']);
	$re_pass = $conn->real_escape_string($_POST['C_password']);

if ($f_name == "" || $l_name == "" || $Phonenumber == "" || $emailad == "" ||   $pass =="" || $re_pass)
		$msg = "Please check your inputs!";
 	


	else{

		$sql = $conn->query ("SELECT * FROM users WHERE user_name='$f_name' AND password='$pass'");

		$result = mysqli_query($conn,  $sql);
		if ($result->num_rows > 0) {
				header("Location: registration.php?success=Email already exists in the database!");
	         exit();

             }else {
				$token = 'qwertzuiopasdfghjklyxcvbnmQWERTZUIOPASDFGHJKLYXCVBNM0123456789!$/()*';
				$token = str_shuffle($token);
				$token = substr($token, 0, 10);

				$hashedPassword = password_hash($pass, PASSWORD_BCRYPT);

				$conn->query("INSERT INTO users (user_name, password, LastName,EmailAdress,PHONE,isEmailConfirmed,token)
					VALUES ('$f_name', '$hashedPassword', '$l_name', '$email', '$Phonenumber',  '0', '$token');
				");

                include_once "PHPMailer/PHPMailer.php";

                $mail = new PHPMailer();
                $mail->setFrom('hello@codingpassiveincome.com');
                $mail->addAddress($email, $name);
                $mail->Subject = "Please verify email!";
                $mail->isHTML(true);
                $mail->Body = "
                    Please click on the link below:<br><br>
                    
                    <a href='http://codingpassiveincome.com/PHPEmailConfirmation/confirm.php?email=$email&token=$token'>Click Here</a>
                ";

                if ($mail->send())
                    $msg = "You have been registered! Please verify your email!";
                else
                    $msg = "Something wrong happened! Please try again!";
			}


           }
		
	}
 
?>