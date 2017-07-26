<?php
  include_once("../config/db/connect/db_connect.php");

  if(isset($_POST['Submit'])) {

    $book_name = mysqli_real_escape_string($connection, $_POST['book_name']);
    $author = mysqli_real_escape_string($connection, $_POST['author']);
    $quantity = mysqli_real_escape_string($connection, $_POST['quantity']);
    $cell_number = mysqli_real_escape_string($connection, $_POST['cell_number']);

    // dibugging
    //echo "$book_name".'<br>';
    //echo "$author".'<br>';
    //echo "$quantity".'<br>';
    //echo "$cell_number".'<br>';

    //insert data to database
    $query = "INSERT INTO `order` (`book_name`, `author`, `quantity`, `cell_number`) VALUES ( '$book_name', '$author', '$quantity', '$cell_number')";
    //$query2 = "INSERT INTO order(book_name, author, quantity, cell_number) VALUES ('$book_name','$author','$quantity', '$cell_number')";
    $update = mysqli_query($connection, $query);

    //display success message
    if($update) {
      header("Location: orderResult.php");
		} else {
      echo mysqli_connect_errno();
    }
    echo mysqli_error($connection);
  }
 ?>
