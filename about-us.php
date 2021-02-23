<?php
$title = "About Us";
$page = 'Aboutus';
include('header.php');
?>

<div class="pages-conainer">
    <!-- About-us -->
    <div class="about-us-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="shade-para">ALWAYS CARING <span class="shade-para"></span></p>
                    <h1 class="caring-heading">About Render Health</h1>
                    <p class="caring-para">Facilitating the transition of healthcare management processes in Africa to the digital age</p>
                    <!-- <a href="#" class="btn btn-1 my-5"><img src="assets/icons/about-us/play.svg"> Get Started</a> -->
                </div>

            </div>
        </div>
    </div>

    <!-- -------icons-section------ -->
    <div class="icons-div">
        <div class="container-fluid">
            <div class="row my-5 text-center">
                <div class="col-md">
                    <img src="assets/icons/about-us/transparency.svg" alt="">
                    <h6 class="icon-heading">Transparency (Typo)</h6>

                </div>
                <div class="col-md">
                    <img src="assets/icons/about-us/calculation.svg" alt="">
                    <h6 class="icon-heading">Accountability</h6>

                </div>
                <div class="col-md">
                    <img src="assets/icons/about-us/verified.svg" alt="">
                    <h6 class="icon-heading">Security</h6>

                </div>
                <div class="col-md">
                    <img src="assets/icons/about-us/empty.svg" alt="">
                    <h6 class="icon-heading">Affordability</h6>

                </div>
            </div>

        </div>

    </div>


    <!-- aboout-heading-section -->

    <div class="aboout-heading-section">
        <div class="container-fluid">
            <div class="heading-padding">
                <div class="row">
                    <div class="col text-center">
                        <h5>Render Health aims to be at the forefront of transitioning healthcare<br> operations in emerging markets to the digital age. With our methods &<br> their infrastructure, no matter how limiting, Render Health guarantees a<br> seamless transition.</h5>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container-fluid">
        <div class="row ">
            <div class="col-md-10">
            </div>
            <div class="col-md-2">
                <img src="assets/icons/health-care-provider/shadow-bg.svg" alt="" class="img-fluid">
            </div>
        </div>
    </div>


    <!-- ---------------- Contact section start--------------------------------->
    <div class="contact-section">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center ">
                <div class="col-md-6 col-12 col-sm-12 order-2 order-md-1">
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
                                            <label class="contact-section-label-name">TYPE OF FACILITY</label>
                                            <select class="form-select form-control" aria-label="Default select example">
                                                <option selected>Select Facility</option>
                                                 <option value="1">Healthcare</option>
                                                  <option value="2">Fitness & Wellness</option>
                                                  <option value="3">Diagnostics</option>
                                            </select>
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
                <div class="col-md-5 col-12 order-1 order-md-2 d-flex justify-content-center align-content-center flex-column">
                    <div class="right-side-section">
                        <h1 class="contact-section-heading-right-section">Ready to get started our products?</h1>
                        <p class="contact-section-para-right-section"></p>
                        <h3 class="contact-section-small-heading">Would you like to?</h3>
                        <p class="contact-section-mark-para"><img src="assets/icons/bx-check.svg"> Reach millions of potential customers around you faster?</p>
                        <p class="contact-section-mark-para"><img src="assets/icons/bx-check.svg"> Create an online presence for your facility?</p>
                        <p class="contact-section-mark-para"><img src="assets/icons/bx-check.svg">Intergrate organization in your facility?</p>
                        <p class="contact-section-mark-para"><img src="assets/icons/bx-check.svg"> Have access to all Render Health Modules?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>










    <?php include("footer.php"); ?>