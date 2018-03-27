<?php
	// getting id from url
	$email = $_GET['email'];

	// including the database connection file
	include("../config/db/DBConnect.php");

	// selecting data associated with this particular email
	$query = "SELECT * FROM `user` WHERE email='$email'";
	$result = mysqli_query($connection, $query);
	if (!$result) {
	    die('Invalid query: ' . mysql_error());
	}

	$res = mysqli_fetch_array($result);
	if (!$res) {
			printf("Error: %s\n", mysqli_error($connection));
			exit();
	}


	$first_name = $res['first_name'];
	$surname = $res['surname'];
	$email = $res['email'];
	$password = $res['password'];
	$contact_no = $res['contact_no'];
	$city = $res['city'];
	$area = $res['area'];
	$gender = $res['gender'];
?>

<?php
	if ($_POST) {
		$errors = array();

		if (empty($_POST['first_name']))
			$errors['first_name'] = "Name cannot be empty";
		if (strlen($_POST['first_name']) < 3)
			$errors['first_name'] = "Name must be at least 3 characters long";
		if (empty($_POST['surname']))
			$errors['surname'] = "Name cannot be empty";
		if (strlen($_POST['surname']) < 3)
			$errors['surname'] = "Name must be at least 3 characters long";
		if(empty($_POST['email']))
			$errors['email1']= "Email can not be empty!";
		if (empty($_POST['gender']))
			$errors['gender']= "Please Select Your Gender";
		if(empty($_POST['city']))
			$errors['city'] = "Enter your city";
		if(empty($_POST['area']))
			$errors['area'] = "Enter your area";
		if(empty($_POST['contact_no']))
			$errors['contact_no'] = "Enter your contact no please";

		if(count($errors) == 0){
			if ($connection){
				$first_name = $_POST['first_name'];
				$surname = $_POST['surname'];
				$email =  $_POST['email'];
				$contact_no = $_POST['contact_no'];
				$city = $_POST['city'];
				$area = $_POST['area'];
				$gender = $_POST['gender'];

				$query = "UPDATE `user` SET `first_name`='$first_name',`surname`='$surname',`email`='$email',`password`='$password',`contact_no`='$contact_no',`city`='$city',`area`='$area',`gender`='$gender' WHERE `user`.`email`='$email'";
				$update = mysqli_query($connection, $query);
				if(! $update ) {
			       die('Could not update data: ' . mysqli_error());
			  }
				if(!empty($update)) {
					echo"$name's registration successful.";
					header("Location:GetUser.php");
				} else {
					echo "Update failure!";
				}
			}
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Update user</title>
		<link rel="stylesheet" type="text/css" href="..\css\registration.css">
	</head>

	<body>
		<div style="display: flex;align-items: center;justify-content: center;">
			<div style="border: 2px solid #a1a1a1; border-radius: 20px; display: inline-block;border: 1px solid #989fa5; background:#e8eef4;">
				<h3 style="text-align:center;color:#465360">Update Information</h3>
				<form action="" method="post" name="registration">
					<table style="padding:10px;">
						<tr>
							<td style="color:#465360"><b>First name</b></td>
							<td><input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo $_POST['first_name']; else echo $first_name?>">
							<span class="error"><?php if(isset($errors['first_name'])) echo "<br>".$errors['first_name'];?></span>
							<span class="error"><?php if(isset($errors['first_name'])) echo "<br>".$errors['first_name'];?></span></td>
						</tr>
						<tr>
							<td style="color:#465360"><b>Surname</b></td>
							<td>
								<input type="text" name="surname" value="<?php if(isset($_POST['surname'])) echo $_POST['surname']; else echo $surname?>">
								<span class="error"><?php if(isset($errors['surname'])) echo "<br>".$errors['surname'];?></span>
								<span class="error"><?php if(isset($errors['surname'])) echo "<br>".$errors['surname'];?></span>
							</td>
						</tr>
						<tr>
							<td style="color:#465360"><b>Email</b></td>
							<td><input type="email" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; else echo $email?>">
							<span class="error"><?php if(isset($errors['email1'])) echo "<br>".$errors['email1'];?></span></td>
						</tr>
						<tr>
							<td style="color:#465360"><b>Phone</b></td>
							<td><input type="text" name="contact_no" value="<?php if(isset($_POST['contact_no'])) echo $_POST['contact_no']; else echo $contact_no?>">
							<span class="error"><?php if(isset($errors['contact_no'])) echo "<br>".$errors['contact_no'];?></span></td>
						</tr>
						<tr>
							<td style="color:#465360"><b>City</b></td>
							<td><input type="text" name="city" value="<?php if(isset($_POST['city'])) echo $_POST['city']; else echo $city?>">
							<span class="error"><?php if(isset($errors['city'])) echo "<br>".$errors['city'];?></span></td>
						</tr>
						<tr>
							<td style="color:#465360"><b>Area</b></td>
							<td><input type="text" name="area" value="<?php if(isset($_POST['area'])) echo $_POST['area']; else echo $area?>">
							<span class="error"><?php if(isset($errors['area'])) echo "<br>".$errors['area'];?></span></td>
						</tr>
						<tr>
							<td style="color:#465360"><b>Gender</b></td>
							<td><input type="radio" name="gender" value="male">Male
									<input type="radio" name="gender" value="female">Female
									<span class="error"><?php if(isset($errors['gender'])) echo "<br>".$errors['gender'];?></span></td>
						</tr>
						<tr><td> </td><td> </td></tr>
						<tr><td> </td><td> </td></tr>
						<tr>
							<td></td>
							<td style="text-align: right;"><button type="submit" name="submit" style="border: 2px solid #a1a1a1; border-radius: 5px;background: #dddddd;"><b>Submit</b></button></td>
						</tr>
					</table>
				</form>
			</div>
		</div>

	</body>
</html>
