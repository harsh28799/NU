<?php

$emailErr=$passwordErr="";
$email=$password="";
$ferror="";

$conn = new mysqli("localhost", "root", "", "nitrutsav");

if ($_SERVER["REQUEST_METHOD"] == "POST")
{  
        $val=$_POST["email"];
        $data=$conn->query("SELECT email FROM register WHERE email='".$val."'");  		

        if (empty($_POST["email"])) {    $emailErr = "Email is required";}
        else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {   $emailErr = "Invalid email format";}
        else if ($data->num_rows==0) { $emailErr = "This email is not registered";}
        else{ $email = test($_POST["email"]);  }

        $pass=md5($_POST["password"]);
        $cod=$conn->query("SELECT * FROM register WHERE email='".$val."' AND password='".$pass."'");

        if(empty($_POST["password"]))  { $passwordErr="password required";  }
        else if ($cod->num_rows==0)  { $passwordErr= "Invalid email-password combination"; }
        else
        {
            $adm=$conn->query("SELECT admin FROM register WHERE email='".$val."' AND password='".$pass."'AND admin=1");
            
            if($adm->num_rows==1)
                header("location:ca_admin.php");
            else
                $ferror="You are not allowed to the admin pannel";             
        }
}

function test($data)
{
	$data=trim($data);
	$data=stripcslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}
?>