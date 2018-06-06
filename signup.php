<?php
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_DATABASE', 'foodzone');

    $connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE) or die( mysqli_error($connection) );

 
 if(isset($_POST['send']) != "") {
      $firstname = mysqli_real_escape_string($connection, $_POST['firstName']);
      $lastname = mysqli_real_escape_string($connection, $_POST['lastName']);
      $email = mysqli_real_escape_string($connection, $_POST['email']);
      $password = mysqli_real_escape_string($connection, $_POST['pass']);
	  $update = mysqli_query($connection, "INSERT INTO userinfo(firstName,lastName,email,pass,creationTime)VALUES
									  ('$firstname','$lastname','$email','$password',now())");
  
  if($update) {
	  $msg="Sign Up Complete";
	  echo "<script type='text/javascript'>alert('$msg');</script>";
	  //header('Location:form.html');
  } else {
	 $errormsg="Something went wrong, Try again";
	  echo "<script type='text/javascript'>alert('$errormsg');</script>";
	  //header('Location:form.html');
  }
  }
									  
mysqli_close($connection);
?>