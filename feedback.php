<?php
include 'header.php';
?>

<!--Page Header Start-->
<section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Add Feedback</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.php">Home</a></li>
                        <li><span>></span></li>
                        <li>Add Feedback</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->


<!--Make Appointment Start-->
<section class="get-free-quote">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="get-free-quote__left">
                            <div class="section-title text-left">
                                <div class="section-title__icon">
                                    <img src="assets/images/icon/section-title-icon.png" alt="">
                                </div>
                                <span class="section-title__tagline">feedback</span>
                                <h2 class="section-title__title">Add feedback with us now</h2>
                            </div>
                            <div class="get-free-quote__form-box">
                                <form action="feedback-save.php"
                                    class="get-free-quote__form contact-form-validated" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="get-free-quote__form-input-box">
                                                <input type="text" placeholder="First name" name="firstname" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="get-free-quote__form-input-box">
                                                <input type="text" placeholder="Last name" name="lastname" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="get-free-quote__form-input-box">
                                                <input type="email" placeholder="Email address" name="email" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="get-free-quote__form-input-box">
                                                <input type="text" placeholder="Phone number" name="phone_no" required>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="get-free-quote__form-input-box text-message-box">
                                                <textarea name="message" required placeholder="Write  a Message"></textarea>
                                            </div>
                                            <div class="get-free-quote__form-btn-box">
                                                <button type="submit" class="thm-btn get-free-quote__form-btn">Submit
                                                    Feedback</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="result"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="get-free-quote__right">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="get-free-quote__single">
                                        <div class="get-free-quote__img">
                                            <img src="assets/images/resources/get-free-quote-1.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="get-free-quote__single get-free-quote__single--two">
                                        <div class="get-free-quote__img">
                                            <img src="assets/images/resources/get-free-quote-2.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Make Appointment End-->


<?php
include 'footer.php';
?>