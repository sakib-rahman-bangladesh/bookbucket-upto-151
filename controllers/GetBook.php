<!DOCTYPE html>
<html>
<head>
	<title>Book List</title>
</head>
<body>

  <div style="text-align:center;">
    <div style="border: 2px solid #a1a1a1; border-radius: 20px; display: inline-block;border: 1px solid #989fa5; text-align:center;background:#e8eef4;">

      <form action="" method="post" name="" style="padding: 10px;">
        <table>
					<tr>
            <td></td>
            <td style="text-align: right;"><button type="submit" name="submit" style="border: 2px solid #a1a1a1; border-radius: 20px;background: #dddddd;"><b>view book</b></button></td>
          </tr>
        </table>
      </form>
      </div>
</body>
</html>

<?php
session_start();
if($_POST) {
		include("../config/db/connect/DBConnect.php");

			$query = "SELECT * FROM book";
			$result = mysqli_query($connection, $query);
			$num_rows = mysqli_num_rows($result);

			if ($num_rows > 0) {
				    // output data of each row
						echo "<br>";
				    while($row = $result->fetch_assoc()) {
				        echo "isbn: " . $row["isbn"]. " - book: " . $row["book_name"]. " " . $row["writer"]. "<br>";
				    }
			} else {
			    echo "0 results";
			}
	}
?>
