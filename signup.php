<?php
include "header.php";
if(!isset($_SESSION['user'])) {
?>

<br>
<br>
<br>
<br>
<br>
<br>
<div class="row">
    <div style="margin-left: 125px"class="col-lg-10">
        <div class="card">
            <div class="card-body">
                <main class="bg-grey pb-30">
                    <div class="entry-header entry-header-style-2 pb-80 pt-80 mb-50 text-white" style="background-image: url(assets/imgs/news/news-17.jpg)">
                        <div class="container entry-header-content">
                            <h1 style="color: green"class="entry-title mb-50 font-weight-900">
                               <b> SIGN UP !</b>
                            </h1>
                        </div>
                    </div>
                    <br><!-- comment -->
                    <br>
                    <div class="container single-content">
                        <div class="entry-wraper mt-50">

                            <form class="" action="signup-save.php" method="post" id="">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="get-free-quote__form-input-box">
                                            <input type="text" class="form-control" autofocus   name="first" placeholder="First Name" required >
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="get-free-quote__form-input-box">
                                            <input type="text" class="form-control" name="middle" placeholder="Middle Name" >
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="get-free-quote__form-input-box">
                                            <input type="text" class="form-control" name="last" placeholder="Last Name" required>
                                        </div>
                                    </div>

                                    <div style="margin-top: 15px" class="col-xl-6 col-lg-6">
                                        <div  class="get-free-quote__form-input-box">
                                            <label style="margin-left: 7px" for="css">Gender</label>

                                            <input style="margin-left: 15px" type="radio" id="male" name="gender" value="male">  
                                            <label style="margin-left: 15px" for="">Male</label>
                                            <input style="margin-left: 17px" type="radio" id="html" name="gender" value="female">

                                            <label style="margin-left: 17px" for="css">Female</label>
                                        </div>
                                    </div>


                                    <div class="col-xl-6 col-lg-6">
                                        <div class="get-free-quote__form-input-box">
                                            <input type="text" class="form-control" name="category" placeholder="Category" required>
                                        </div>
                                    </div>






                                    <div class="col-xl-6 col-lg-6">
                                        <div class="get-free-quote__form-input-box">
                                            <input type="text" class="form-control" name="mobile" maxlength="10" autofocus id="mobile"  placeholder="Mobile NO" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="get-free-quote__form-input-box">
                                            <input type="text" class="form-control" name="password1" id="pass"  placeholder="Password" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="get-free-quote__form-input-box">
                                            <input type="text" class="form-control" name="password2" id="pass2"  placeholder=" Confirm Password" required>
                                        </div>
                                    </div>




                                </div>
                              <center>  <div class="get-free-quote__form-btn-box">
                                    <button type="submit" class="thm-btn get-free-quote__form-btn">SUBMIT</button>
                                </div></center>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<!--container-->
</main>
<?php include "footer.php";}
else{
    echo "<script>window.location='index.php';</script>";
  
} ?>