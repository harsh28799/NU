<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>CA Registration</title>
  
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="https://mdbootstrap.com/previews/templates/landing-page/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://mdbootstrap.com/previews/templates/landing-page/css/mdb.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <style type="text/css">
.form-input{
  text-align: center;
}

iframe:hover{
      transform: scale(1.1);
    }
  </style>
</head>

<body>
  <!-- Navigation & Intro -->
    <header>
      
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4 col-sm-12">

    <h5 class="card-header indigo white-text text-center py-4">
        <strong>CAMPUS AMBASSADOR REGISTRATION</strong>
        <hr>
    </h5>

      <div class="">

      <?php include('ca_validate.php'); ?>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="myForm" name="myForm">
            <div class="md-form">
                <input type="text" id="name" name="name" class="form-control form-input" style="align-content: center;" value="<?php echo $name ?>">
                <label for="name">Name</label>
                <span class="error"><?php echo $nameErr; ?></span>
            </div>
            <div class="md-form">
                <input type="email" id="email" name="email" class="form-control form-input" style="align-content: center;" value="<?php echo $email ?>">
                <label for="email">Email</label>
                <span class="error"><?php echo $emailErr; ?></span>
            </div>
            <div class="md-form">
                <input type="text" id="contact" name="contact" class="form-control form-input" style="align-content: center;" value="<?php echo $contact ?>">
                <label for="contact">Contact</label>
                <span class="error"><?php echo $contactErr; ?></span>
            </div>
            <div class="md-form">
                <input type="text" id="college" name="college" class="form-control form-input" style="align-content: center;" value="<?php echo $college ?>">
                <label for="college">College</label>
                <span class="error"><?php echo $collegeErr; ?></span>
            </div>
            <div class="md-form">
                <input type="text" id="link" name="link" class="form-control form-input" style="align-content: center;" value="<?php echo $link ?>">
                <label for="Link">Link</label>
                <span class="error"><?php echo $linkErr; ?></span>
            </div>
            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" onclick="validateForm();" ><strong>Submit</strong></button>
        </form>
    </div>
</div>

    <div class="status" id="status" name="status"></div>

</div>
  
    <!--Footer-->
    <footer class="page-footer indigo text-center text-md-left pt-0">
      <!--Footer Links-->
      <div class="container">
          <!--Grid row-->
          <div class="row pt-5 mb-3 text-center d-flex justify-content-center">
        <!--Grid column-->
        <div class="col-md-2 mb-3">
          <h6 class="text-uppercase font-weight-bold">
            <a href="#!">About us</a>
          </h6>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-2 mb-3">
          <h6 class="text-uppercase font-weight-bold">
            <a href="#!">Gallery</a>
          </h6>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-2 mb-3">
          <h6 class="text-uppercase font-weight-bold">
            <a href="#!">Events</a>
          </h6>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-2 mb-3">
          <h6 class="text-uppercase font-weight-bold">
            <a href="#!">Help</a>
          </h6>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-2 mb-3">
          <h6 class="text-uppercase font-weight-bold">
            <a href="#!">Contact</a>
          </h6>
        </div>
        <!--Grid column-->
          </div>
          <!--Grid row-->

      <hr class="rgba-white-light" style="margin: 0 15%;">

      <!--Grid row-->
      <div class="row d-flex mb-md-0 mb-4">
        <!--Grid column-->
        <div class="col-md-8 col-12 mt-5">
          <p style="line-height: 1.7rem">NITRutsav, the official cultural festival of NIT Rourkela, brings to you the golden ticket to travel back in time and relive the days of flamboyant hairdos and classy suspenders. ‘Cause, what could be better than giving the expression of the cultural diversity of NIT Rourkela, a retro twist?</p>
        </div>
        <!--Grid column-->
          <div class="col-md-4 col-12 mt-5">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3692.6715355197002!2d84.89779931490501!3d22.25253798534833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a201e7f9588b543%3A0xfe2e998eb3ad35f8!2sSAC+NIT+Rourkela!5e0!3m2!1sen!2sin!4v1545460363170" width=auto height=auto frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
      </div>
          <hr class="clearfix d-md-none rgba-white-light" style="margin: 10% 15% 5%;">

      <!--Grid row-->
      <div class="row pb-3">
        <!--Grid column-->
        <div class="col-md-12">
          <div class="footer-socials mb-5 flex-center">
            <!--Facebook-->
            <a class="p-2 m-2 fa-lg fb-ic" href="https://www.facebook.com/nitrutsav.nitrkl/">
              <i class="fa fa-facebook fa-lg white-text mr-md-4"> </i>
            </a>
            <!--Twitter-->
            <a class="p-2 m-2 fa-lg tw-ic">
              <i class="fa fa-twitter fa-lg white-text mr-md-4"> </i>
            </a>
            <!--Google +-->
            <a class="p-2 m-2 fa-lg gplus-ic">
              <i class="fa fa-google-plus fa-lg white-text mr-md-4"> </i>
            </a>
            <!--Linkedin-->
            <a class="p-2 m-2 fa-lg li-ic">
              <i class="fa fa-linkedin fa-lg white-text mr-md-4"> </i>
            </a>
            <!--Instagram-->
            <a class="p-2 m-2 fa-lg ins-ic">
              <i class="fa fa-instagram fa-lg white-text mr-md-4"> </i>
            </a>
            <!--Pinterest-->
            <a class="p-2 m-2 fa-lg pin-ic">
              <i class="fa fa-pinterest fa-lg white-text"> </i>
            </a>
          </div>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
      <!--/Footer Links-->

    <!--Copyright-->
    <div class="footer-copyright py-3 text-center">
        <div class="">
        © 2018 Copyright: <a href="https://nitrutsav.com/" target="_blank"> NITR Utsav </a>
        </div>
    </div>
    <!--/Copyright-->
    </footer>
    <!--/Footer-->
  
  <!--  JQuery  -->
    <script type="text/javascript" src="https://mdbootstrap.com/previews/templates/landing-page/js/jquery-3.3.1.min.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.13.1/TweenMax.min.js'></script>
    <!--  Bootstrap tooltips  -->
    <script type="text/javascript" src="https://mdbootstrap.com/previews/templates/landing-page/js/popper.min.js"></script>
    <!--  Bootstrap core JavaScript  -->
    <script type="text/javascript" src="https://mdbootstrap.com/previews/templates/landing-page/js/bootstrap.min.js"></script>
    <!--  MDB core JavaScript  -->
    <script type="text/javascript" src="https://mdbootstrap.com/previews/templates/landing-page/js/mdb.min.js"></script>
  <script type="text/javascript" src="js/index.js"></script>

</body>

</html>
