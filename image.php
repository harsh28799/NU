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
	
	<?php include('execute.php'); ?>
	
	<h1>REGISTER HERE:</h1>
	<form method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
	
		<fieldset>
		<legend><strong>SIGN UP:</strong></legend>
		<table>
			<tr>
				<td>Upload Poster</td>
				<td><input type="file" name="image" id="image"></td>
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