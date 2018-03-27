// src: https://www.youtube.com/watch?v=Ipa9xAs_nTg
<?php

  $msg = "";
  // if upload button is pressed
  if (isset($_POST['upload'])) {
    // The path to store the uploaded image
    $target = "images/".basename($_FILES['image']['name']);

    // connect to the database
    $db = mysqli_connect("localhost", "root", "", "photos");

    // get all the submitted data from the form.
    $image = $_FILES['image']['name'];
    $text = $_POST['text'];

    $sql = "INSERT INTO images (image, text) VALUES ('$image', '$text')";
    mysqli_query($db, $sql);  // store submitted data on to db

    // Move the uploaded image into the folder: images
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully!";
    } else {
      $msg = "There was a problem uploading image";
    }
  }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Image Upload</title>
  </head>
  <body>
    <?php
      $db = mysqli_connect("localhost", "root", "", "photos");
      $sql = "Select * from images";
      $result = mysqli_query($db, $sql);

      while ($row = mysqli_fetch_array($result)) {
        echo "<div id='img_div'>";
          echo "<img src='images/".$row['image']."' alt='Smiley face' width='42' height='42'>";
          echo "<p>".$row['text']."</p>";
        echo "</div>";
      }

     ?>
    <div id="content">
      <form method="post" action="UploadImage.php" enctype="multipart/form-data">
        <input type="hidden" name="size" value="1000000">
        <div>
          <!--
          <div required>
            <label required for="files" class="btn" style="cursor: pointer; border: 1px solid red;">Select Image</label>
            <input id="files" style="visibility:hidden;" type="file">value</input>
          </div>

          <button style="display:block;width:120px; height:30px;" onclick="document.getElementById('getFile').click()">Upload image</button>
          <input type='file' name="image" id="getFile" style="display:none" required>
          -->

          <input type="file" name="image" required>
        </div>
        <div>
          <textarea name="text" cols="40" rows="4" placeholder="Say something about the image..."></textarea>
        </div>
        <div>
          <input type="submit" name="upload" value="Upload Image">
        </div>
      </form>
    </div>
  </body>
</html>
