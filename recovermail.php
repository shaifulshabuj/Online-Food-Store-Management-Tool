<?php
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_DATABASE', 'foodzone');

    $connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE) or die( mysqli_error($connection) );

 
 if(isset($_POST['send']) != "") {
      $email = $_POST['email'];
	  $findpass = mysqli_query($connection, "SELECT * FROM userinfo WHERE email='$email'");
	  while($row = mysqli_fetch_array($findpass)){
		if($findpass) {
			echo"Your Password is ".$row['pass'];
		  
         }else {
			 $errormsg="Something went wrong, Try again";
			  echo "<script type='text/javascript'>alert('$errormsg');</script>";
			  header('Location:index.php');
		  }
		  
	  }
  }
									  
mysqli_close($connection);
?>