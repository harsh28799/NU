<!DOCTYPE html>
<html>
<head>
	<title>Events Registration</title>
	<link rel="stylesheet" type="text/css" href="signup.css">
	<style>
		.error{
			color: red;
		}
		.container{
			align-content: center;
		}
	</style>
</head>
<body>
	
	<?php include('upload.php'); ?>
	
	<h1>EVENT REGISTRATION FORM:</h1>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
		<fieldset>
		<legend><strong>FILL IN DETAILS:</strong></legend>
		<table>
			<tr>
				<td>Category:</td>
				<td><select name="category">
					<option value="">---------------Select---------------</option>
    				<option value="workshop">Workshop</option>
    				<option value="competition">Competition</option>
    				<option value="flagship">Flagship</option>
    				<option value="fun">Fun</option>
    				<option value="proshow">Proshows</option>
    				<option value="music">Musical Night</option>
  				</select></td>
				<td><span class="error">*<?php echo $categoryErr; ?></span></td>
			</tr>
			<tr>
				<td>Event Name:</td>
				<td><input type="text" name="name" value="<?php echo $name ?>" ></td>
				<td><span class="error">*<?php echo $nameErr; ?></span></td>
			</tr>
			<tr>
				<td>Date:</td>
				<td><input type="date" name="date" value="<?php echo $date ?>"></td>
				<td><span class="error">*<?php echo $dateErr; ?></span></td>
			</tr>
			<tr>
				<td>Time:</td>
				<td><input type="time" name="time" value="<?php echo $time ?>"></td>
				<td><span class="error">*<?php echo $timeErr; ?></span></td>
			</tr>
			<tr>
				<td>Venue:</td>
				<td><input type="text" name="venue" value="<?php echo $venue ?>"></td>
				<td><span class="error">*<?php echo $venueErr; ?></span></td>
			</tr>
			<tr>
				<td></td>
				<td>Co-ordinator 1</td>
				<td>Co-ordinator 2</td>
			</tr>
			<tr>
				<td>Name</td>
				<td><input type="text" name="coordinator1" value="<?php echo $coordinator1 ?>"></td>
				<td><input type="text" name="coordinator2" value="<?php echo $coordinator2 ?>"></td>
				<td><span class="error">*<?php echo $coordinatorErr; ?></span></td>
			</tr>
			<tr>
				<td>Contact No.</td>
				<td><input type="text" name="number1" value="<?php echo $number1 ?>"></td>
				<td><input type="text" name="number2" value="<?php echo $number2 ?>"></td>
				<td><span class="error">*<?php echo $numberErr; ?></span></td>
			</tr>
			<tr>
				<td>Description:</td>
				<td><input type="text" style="width: 360px; height: 60px;" name="description" value="<?php echo $description ?>"></td>
			</tr>
			<tr>
				<td>Rules:</td>
				<td><input type="text" style="width: 360px; height: 60px;" name="rules" value="<?php echo $rules ?>"></td>
			</tr>
			<tr>
				<td>Judging Criteria:</td>
				<td><input type="text" style="width: 360px; height: 60px;" name="criteria" value="<?php echo $criteria ?>"></td>
			</tr>
			<tr>
				<td>Upload Poster</td>
				<td><input type="file" name="fileToUpload" id="fileToUpload"></td>
				<td><span class="error">*<?php echo $imageErr ?></span></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="submit" name="submit"></td>
			</tr>
			</fieldset>
		</table>		
	</form>
</body>
</html>

<!-- <form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="text" name="name" id="name">
    <input type="submit" value="Upload Image" name="submit">
</form> -->