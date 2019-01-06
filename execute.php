<?php

		$category=$name=$date=$time=$venue=$coordinator1=$number1=$coordinator2=$number2=$description=$rules=$criteria="";
		$categoryErr=$nameErr=$dateErr=$timeErr=$venueErr=$coordinatorErr=$numberErr=$imageErr="";


$conn = new mysqli("localhost", "root", "", "nitrutsav");

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		if(isset($_POST["submit"])) {
	    		$check = getimagesize($_FILES["image"]["tmp_name"]);
	    		if($check !== false) {
		        		$uploadOk = 1;
	    		} else {
		        		$uploadOk = 0;
	    		}
		}
		if (file_exists($target_file)) {
			    $uploadOk = 0;
		}
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"&& $imageFileType != "gif" ) {
				$uploadOk = 0;
		}
		if ($uploadOk == 0) {
				$imageErr="Sorry, your file was not uploaded.";
		} else {
		    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		    	echo "Image Uploaded";
		    }
		    else {
		        $imageErr="Sorry, there was an error uploading your file.";
			}
		}


$imagepath=$_FILES["fileToUpload"]["name"];
$conn->query("INSERT INTO try (image) VALUES ('$imagepath')");

?>