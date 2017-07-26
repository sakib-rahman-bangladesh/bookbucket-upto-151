<?php
  //getting id of the data from url
  $email = $_GET['email'];

  //including the database connection file
  include("../config/db/connect/db_connect.php");

  // delete query
  $query = "DELETE FROM `user` WHERE `user`.`email` = '$email'";
  //deleting the row from table
  $result = mysqli_query($connection, $query);

  //redirecting to the display page (index.php in our case)
  if(! $result ) {
       die('Could not Delete data: ' . mysqli_error());
  }
  if(!empty($result)) {
    header("Location:getUser.php");
  } else {
    echo "Delete failure!";
  }
?>
