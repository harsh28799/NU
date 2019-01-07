<?php

		$category=$name=$date=$time=$venue=$coordinator1=$number1=$coordinator2=$number2=$description=$rules=$criteria="";
		$categoryErr=$nameErr=$dateErr=$timeErr=$venueErr=$coordinatorErr=$numberErr=$imageErr="";

		$conn = new mysqli("localhost", "root", "", "nitrutsav");

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  			if (empty($_POST["category"])) { $categoryErr = "Category is required";  }
  			else{	$category = test($_POST["category"]);	}
  			
  			if (empty($_POST["name"])) { $nameErr = "Name is required";  }
  			else{	$name = test($_POST["name"]);	}	

  			if (empty($_POST["date"])) { $dateErr = "Date is required";  }
  			else{	$date = $_POST["date"];}	

  			if (empty($_POST["time"])) { $timeErr = "Time is required";  }
  			else{	$time = $_POST["time"];}	

			if (empty($_POST["venue"])) { $venueErr = "Venue is required";  }
  			else{	$venue = test($_POST["venue"]);	}	

  			if (empty($_POST["coordinator1"])&&empty($_POST["coordinator1"])) { $coordinatorErr = "Atleast one coordinator is required";  }
  			else{	$coordinator1 = test($_POST["coordinator1"]);
  					$coordinator2 = test($_POST["coordinator2"]);	}	

  			if (empty($_POST["number1"])&&empty($_POST["number2"])) { $numberErr = "Contact number is required";  }
  			else{	$number1 = test($_POST["number1"]);
  					$number2 = test($_POST["number2"]);	}

  			$description = test($_POST["description"]);

  			$rules = test($_POST["rules"]);

  			$criteria = test($_POST["criteria"]);	

  		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {}
		else {
		        $imageErr="Sorry, there was an error uploading your file.";
			}
					
		$imagepath=$_FILES["fileToUpload"]["name"];
			
  		if($categoryErr==""&&$nameErr==""&&$venueErr==""&&$coordinatorErr==""&&$numberErr==""&&$imageErr=="")
  		{
	
   			if($conn->query("INSERT INTO event (category, name, date, time, venue, coordinator1, coordinator2, number1, number2, description, rules, criteria, image)
    			VALUES ('$category','$name', '$date', '$time', '$venue', '$coordinator1' , '$coordinator2' , '$number1', '$number2', '$description', '$rules', '$criteria', '$imagepath')"))

    			echo "Inserted";

    			else
    				echo "Not Inserted";

   				header("location:event.php");
  				exit;
  		}
}

function test($data)
{
	$data=trim($data);
	$data=stripcslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}



																			

// $imagepath=$_FILES["fileToUpload"]["name"];
// echo "<br>",$imagepath,"<br>";
// $name=$_POST["name"];
// $conn->query("INSERT INTO event (name, image) VALUES ('$name', '$imagepath')");




?>