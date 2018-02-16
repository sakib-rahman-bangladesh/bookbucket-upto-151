<?php
  include_once("../config/db/connect/db_connect.php");
  // DEBUG:
  if(isset($_POST['Submit'])) {

    $description = mysqli_real_escape_string($connection, $_POST['description']);
    // $author = mysqli_real_escape_string($connection, $_POST['author']);
    // $quantity = mysqli_real_escape_string($connection, $_POST['quantity']);
    // $cell_number = mysqli_real_escape_string($connection, $_POST['cell_number']);

    // DEBUG:
    // echo "$description".'<br>';
    //echo "$author".'<br>';
    //echo "$quantity".'<br>';
    //echo "$cell_number".'<br>';

    //insert data to database
    $query = "INSERT INTO `post` (`description`) VALUES ( '$description')";
    //$query2 = "INSERT INTO order(book_name, author, quantity, cell_number) VALUES ('$book_name','$author','$quantity', '$cell_number')";
    $update = mysqli_query($connection, $query);

    //display success message
    if($update) {
      // TODO: show user update success, Route: Done";
      header("Location: UserProfile.php");
		} else {
      echo mysqli_connect_errno();
    }
    echo mysqli_error($connection);
  }
 ?>
