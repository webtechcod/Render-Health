<?php
$title = "Health Insurance Provider";
$page = 'HealthInsuranceProvider';
include('header.php');
?>

<div class="pages-conainer">
    <!-- Schdule demo -->
    <div class="about-us-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="shade-para">ALWAYS CARING <span class="shade-para"></span></p>
                    <h1 class="caring-heading">Schedule Demo</h1>
                    

                </div>

            </div>
        </div>
    </div>



    <!-- ---------------- Contact section start--------------------------------->
    <div class="contact-section">
        <div class="container">
            <div class="row d-flex justify-content-center ">
                <div class="col-md-10 col-12 col-sm-12 ">
                    <div class="form-body">
                        <h4 class="contact-section-heading-left-section">Complete This Form</h4>
                        <form id="contact-form" method="post" action="" role="form">
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="form_name" class="contact-section-label-name">First Name</label>
                                            <input id="form_name" type="text" name="name" class="form-control" placeholder="First Name" required="required" data-error="Firstname is required.">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="form_lastname" class="contact-section-label-name">SURNAME</label>
                                            <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Surname" required="required" data-error="Lastname is required.">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                           <div class="form-group">
                                            <label class="contact-section-label-name">PHONE NUMBER</label>
                                            <div class="form-control" >
                                              <span class="country-code-color"><img src="assets/images/flag-400.png" height="18"> +234</span>
                                              <input type="phone" name="email" class="border-0" placeholder="Your Phone Number" required="required" data-error="Valid phone number is required." style="outline: none;">
                                            </div>
                                          </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label class="contact-section-label-name">Email</label>
                                            <input type="email" name="email" class="form-control" placeholder="Your Email Adress" required="required" data-error="Valid email is required.">
                                        </div>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label class="contact-section-label-name">NAME OF HMO</label>
                                            <input type="text" name="email" class="form-control" placeholder="Name of HMO" required="required" data-error="Name of HMO is required.">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn form-control contact-submit-btn "> Submit <img src="assets/icons/bx-right-arrow.svg"></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>










    <?php include("footer.php"); ?>