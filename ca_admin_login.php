<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Campus Ambassadors</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/mdb.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <style>
      .table{
        color: white;
        text-align: left;
      }
  </style>
</head>

<body>

<?php include('ca_admin_login_validate.php'); ?>

<div class="card">

  <h5 class="card-header info-color white-text text-center py-4">
    <strong>Sign in</strong>
  </h5>

  <div class="card-body px-lg-5 pt-0">

    <form class="text-center" style="color: #757575;" action="ca_admin_login.php" method="post">

      <div class="md-form">
                <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="<?php echo $email ?>">
                <span class="error"><?php echo $emailErr; ?></span>
      </div>

      <div class="md-form">
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" value="<?php echo $password ?>">
                <span class="error"><?php echo $passwordErr; ?></span>
      </div>

      <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign in</button>
      <span class="error"><?php echo $ferror; ?></span>
    </form>

  </div>

</div>

</body>

</html>