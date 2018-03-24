<!Doctype HTML>

<html>
<head>
	<title>User List</title>
</head>
<body>
  <div style="text-align:center;">
    <div style="border: 2px solid #a1a1a1; border-radius: 20px; display: inline-block;border: 1px solid #989fa5; text-align:center;background:#e8eef4;">
      <form action="" method="post" name="" style="padding: 10px;">
        <button type="submit" name="submit" style="border: 2px solid #a1a1a1; border-radius: 20px;background: #dddddd;"><b>View User</b></button>
      </form>
			<a href="http://localhost/bookbucket/">Home</a>
    </div>
</body>
</html>




<?php
if($_POST) {
		  include("../config/db/connect/DBConnect.php");

			$query = "SELECT * FROM user";
			$result = mysqli_query($connection, $query);

      if(! ($result) ){
        echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
      } else {
?>
        <table border="2">
            <tr>
              <th>Name</th>
              <th>Surname</th>
              <th>Email</th>
              <th>Password</th>
              <th>Contact</th>
              <th>Update</th>
            </tr>

            <?php
                if( mysqli_num_rows( $result )==0 ){
                  echo '<tr><td colspan="4">No Rows Returned</td></tr>';
                } else {
                  while( $row = mysqli_fetch_array($result) ){
                    echo "<tr>";
                		echo "<td>"."{$row['first_name']}"."</td>";
                    echo "<td>"."{$row['surname']}"."</td>";
                		echo "<td>".$row['email']."</td>";
                		echo "<td>".$row['password']."</td>";
                    echo "<td>{$row['contact_no']}</td> <td><a href=\"EditUser.php?email=$row[2]\">Edit</a> | <a href=\"DeleteUser.php?email=$row[2]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
                    echo "</tr>";
                  }
                }
              ?>
        </table>
<?php
    }
  }
 ?>
