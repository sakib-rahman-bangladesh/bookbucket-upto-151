<?php
  include_once("../config/db/DBConnect.php");
  // DEBUG
  $msg = "";
  // If POST button is pressed
  if(isset($_POST['Submit'])) {
    // The path to store the uploaded image
    $target = "images/".basename($_FILES['image']['name']);

    // get all the submitted data from the form.
    // image
    $image = $_FILES['image']['name'];

    // MYSQL funs: mysql_query("INSERT INTO `table` (`dateposted`) VALUES (now())");
    // PHP: $date = date('Y-m-d H:i:s'); mysql_query("INSERT INTO `table` (`dateposted`) VALUES ('$date')");

    $description = mysqli_real_escape_string($connection, $_POST['description']);
    $purpose = mysqli_real_escape_string($connection, $_POST['purpose']);
    $price = mysqli_real_escape_string($connection, $_POST['price']);
    $location = mysqli_real_escape_string($connection, $_POST['location']);

    // DEBUG:
    // echo "purpose: $purpose".'<br>';
    //echo "$author".'<br>';
    //echo "$quantity".'<br>';
    //echo "$cell_number".'<br>';

    $postTime = date('Y-m-d H:i:s');
    //insert data to database
    $query = "INSERT INTO `post` (`description`, `purpose`, `price`, `location`, `postTime`, `image`) VALUES ( '$description', '$purpose', '$price', '$location', '$postTime', '$image')";
    //$query2 = "INSERT INTO order(book_name, author, quantity, cell_number) VALUES ('$book_name','$author','$quantity', '$cell_number')";
    $update = mysqli_query($connection, $query);

    //display success message
    if($update) {
      // TODO: show user update success, Route: Done";

      // Move the uploaded image into the folder: images
      if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully!";
      } else {
        $msg = "There was a problem uploading image";
      }

      header("Location: UserProfile.php");
		} else {
      echo mysqli_connect_errno();
    }
    echo mysqli_error($connection);
  }
 ?>
