<?php



$username = $_POST['username'];
$password = $_POST['password'];


if (!empty($_POST["username"]) && !empty($_POST["password"]))

{
    if ($username =="Tridip" && $password =="iamtridip")
     {

	echo "<p>Login Successful</p>";
	
	header('Location:RegistrationForm.php');
     }

     else

     {
     	echo "Wrong User Name or Password";
	    header('Location:LoginFailed.php'); 
     }

}


else
{
	echo "<h1> Please Fill Up The User Name and Password To Login </h1>";
}

?>