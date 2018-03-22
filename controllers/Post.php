<?php
  include_once("../config/db/connect/db_connect.php");
  // DEBUG
  if(isset($_POST['Submit'])) {

    // MYSQL funs: mysql_query("INSERT INTO `table` (`dateposted`) VALUES (now())");
    // PHP: $date = date('Y-m-d H:i:s'); mysql_query("INSERT INTO `table` (`dateposted`) VALUES ('$date')");

    $description = mysqli_real_escape_string($connection, $_POST['description']);
    $purpose = mysqli_real_escape_string($connection, $_POST['purpose']);
    // $quantity = mysqli_real_escape_string($connection, $_POST['quantity']);
    // $cell_number = mysqli_real_escape_string($connection, $_POST['cell_number']);

    // DEBUG:
    echo "purpose: $purpose".'<br>';
    //echo "$author".'<br>';
    //echo "$quantity".'<br>';
    //echo "$cell_number".'<br>';

    $postTime = date('Y-m-d H:i:s');
    //insert data to database
    $query = "INSERT INTO `post` (`description`, `purpose`, `postTime`) VALUES ( '$description', '$purpose', '$postTime')";
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
