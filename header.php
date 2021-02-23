<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- custom CSS -->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <!-- favicon -->
  <script src="https://kit.fontawesome.com/7161165795.js" crossorigin="anonymous"></script>
  <link rel="icon" href="assets/images/logo.svg" type="image/gif">
  <!-- owl carousel -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
  <!--Dynamic Title -->
  <title><?php echo $title; ?></title>
</head>

<body id="home">
  <?php
  include('alert.php');
  ?>
  <!-- topbar start -->
  <div class="">
    <header>
      <div class="top_header navbar-static-top">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
              <div class="content">
                <ul>
                  <li class="dropdown-toggle" data-toggle="dropdown"><a href="tell:1234 - 5678 - 9012"><span><i class="fa fa-mobile" aria-hidden="true"></i></span>Download App</a></li>
                  <ul class="dropdown-menu text-center rounded mobile-apps">
                    <li><a href=" https://play.google.com/store/apps/details?id=com.app.renderhealth">
                        <img src="assets/icons/andriod.svg">
                      </a>
                    </li>
                    <li><a href="https://itunes.apple.com/WebObjects/MZStore.woa/wa/viewSoftware?id=1546060903">
                        <img src="assets/icons/ios.svg">
                      </a>
                    </li>
                    <!-- download button -->
                    <!-- <div style="color: #2DBCB2;padding-top:10px;">Download Now!</div> -->
                  </ul>
                  <li><a href="https://medium.com/@renderhealth" target="_blank"><span><i class="" aria-hidden="true"></i></span>Blog</a></li>
                  <!-- <li><a href="#"><span><i class="" aria-hidden="true"></i></span>Help</a></li> -->
                </ul>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
              <div class="social">
                <ul>
                  <li><a href="tel:(+234) 703-242-1768" target="_blank"><span><i class="fas fa-phone-alt"></i></span> (+234) 703-242-1768</a></li>
                  <li><a href="mailto:contact@renderhealth.com"><span><i class="fa fa-envelope" aria-hidden="true"></i></span> contact@renderhealth.com</a></li>
                  <li class="hidden-sm">|</li>
                  <li><a href="https://www.facebook.com/Renderhealth/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <li><a href="https://twitter.com/renderhealth/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="https://www.instagram.com/renderhealth/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                  <li><a href="https://www.linkedin.com/company/render-health/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- topbar close -->
    <!-- navbar start -->
    <div class="container-fluid main">
      <nav class="navbar navbar-expand-lg navbar-light bg-light  ">
        <a class="navbar-brand" href="index.php">
          <img src="assets/images/logo.svg" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse second-nav" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item <?php if ($page == 'Home') {
                                  echo 'active';
                                } ?>">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item <?php if ($page == 'HealthCareProvider') {
                                  echo 'active';
                                } ?>">
              <a class="nav-link" href="health-care-provider.php">Health Care Provider</a>
            </li>
            <li class="nav-item <?php if ($page == 'HealthInsuranceProvider') {
                                  echo 'active';
                                } ?>">
              <a class="nav-link" href="health-insurance-provider.php">Health Insurance Provider</a>
            </li>
            <li class="nav-item <?php if ($page == 'Individuals') {
                                  echo 'active';
                                } ?>">
              <a class="nav-link" href="individuals.php">Individuals</a>
            </li>
            <li class="nav-item <?php if ($page == 'Aboutus') {
                                  echo 'active';
                                } ?>">
              <a class="nav-link" href="about-us.php">About us</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item <?php if ($page == 'Contact') {
                                    echo 'active';
                                  } ?>">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
              <li class="active">
                <a class="nav-link" href="https://portal.renderhealth.com/patient/login"><img src="assets/icons/login.svg"> Log in / Sign Up</a>
              </li>
            </ul>
          </form>
        </div>
      </nav>
    </div>
    <!-- navbar CLOSE -->
  </div>

  

  