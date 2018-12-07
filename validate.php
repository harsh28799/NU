<?php

$name =$email =$contact =$college =$link="";
$nameErr=$emailErr=$contactErr=$collegeErr=$linkErr="";

$conn = new mysqli("localhost", "root", "", "nitrutsav");

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
        // Name validation
        if (empty($_POST["name"])) { $nameErr = "Name is empty!";  }
        else if(!preg_match("/^[a-zA-Z ]*$/",$_POST["name"])){  
          $name = test($_POST["name"]);
          $nameErr ="Only letters and white space allowed"; }
        else{ $name = test($_POST["name"]); }

        // Email Validation
        $val=$conn->query("SELECT email FROM ca WHERE email='".$_POST["email"]."'");
        if (empty($_POST["email"])) {    $emailErr = "Email is empty!";  }
        else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {   
          $email = test($_POST["email"]);
          $emailErr = "Enter a valid email.";  }
        else if ($val->num_rows>0) {  
          $email = test($_POST["email"]);
          $emailErr = "This email is already registered"; }
        else{ $email = test($_POST["email"]);  }
	

        // contact validation
        if (empty($_POST["contact"])) {    $contactErr = "contact number is empty!";  }
        else if (!preg_match("/^[0-9]{10}+$/", $_POST["contact"])) { 
          $contact = test($_POST["contact"]);
          $contactErr = "enter a valid contact number";  }
        else{ $contact = test($_POST["contact"]);    } 

        // Institute name validation
        if (empty($_POST["college"])) { $collegeErr = "institute name is empty!"; }
        else if (!preg_match("/^[a-zA-Z ]*$/",$_POST["college"])) {   
          $college = test($_POST["college"]);
          $collegeErr = "Only letters and white space allowed";    }
        else{ $college = test($_POST["college"]);    }

        // FB link Validation
        if (empty($_POST["link"])) { $linkErr = "FB Link name is empty!"; }
        else{ $link = test($_POST["link"]);    }

        if($nameErr==""&&$emailErr==""&&$contactErr==""&&$collegeErr==""&&$linkErr=="")
        {
  
          $conn->query("INSERT INTO ca (name, email, contact, college, link)
          VALUES ('$name', '$email', '$contact' , '$college' , '$link')");

          echo "Registration Successfull";

          header("location:success.php");
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


