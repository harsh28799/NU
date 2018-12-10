<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>CA Registration</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/mdb.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

<div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>CAMPUS AMBASSADOR REGISTRATION</strong>
        <hr>
    </h5>

      <div class="card-body px-lg-5 pt-0">

      <?php include('ca_validate.php'); ?>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="myForm" name="myForm">
            <div class="md-form">
                <input type="text" id="name" name="name" class="form-control" placeholder="Name" value="<?php echo $name ?>">
                <span class="error"><?php echo $nameErr; ?></span>
            </div>
            <div class="md-form">
                <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="<?php echo $email ?>">
                <span class="error"><?php echo $emailErr; ?></span>
            </div>
            <div class="md-form">
                <input type="text" id="contact" name="contact" class="form-control" placeholder="Contact No." value="<?php echo $contact ?>">
                <span class="error"><?php echo $contactErr; ?></span>
            </div>
            <div class="md-form">
                <input type="text" id="college" name="college" class="form-control" placeholder="College" value="<?php echo $college ?>">
                <span class="error"><?php echo $collegeErr; ?></span>
            </div>
            <div class="md-form">
                <input type="text" id="link" name="link" class="form-control" placeholder="FB Link" value="<?php echo $link ?>">
                <span class="error"><?php echo $linkErr; ?></span>
            </div>
            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" onclick="validateForm();" ><strong>Submit</strong></button>
        </form>

    </div>

    <div class="status" id="status" name="status"></div>

</div>

  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/mdb.min.js"></script>

</body>

</html>
