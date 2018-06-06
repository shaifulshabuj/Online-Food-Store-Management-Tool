<?php
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_DATABASE', 'foodzone');

    $connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE) or die( mysqli_error($connection) );

 
 if(isset($_POST['send']) != "") {
      $com = mysqli_real_escape_string($connection, $_POST['comments']);
	  $update = mysqli_query($connection, "INSERT INTO comment(comment,commentTime)VALUES
									  ('$com',now())");
  
  if($update) {
	  $msg="Comment Submitted";
	  echo "<script type='text/javascript'>alert('$msg');</script>";
	  header('Location:index.php');
  } else {
	 $errormsg="Something went wrong, Try again";
	  echo "<script type='text/javascript'>alert('$errormsg');</script>";
	  header('Location:index.php');
  }
  }
									  
mysqli_close($connection);
?>