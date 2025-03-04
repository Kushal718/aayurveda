<?php
include 'header.php';
$medicine_id = $_REQUEST['medicine_id'];
$medicine = $db->get('medicines', "*", ['medicine_id' => $medicine_id]);
$medicines = $db->select('medicines', "*");
?>

<!--Page Header Start-->
<section class="page-header">
            <div class="page-header-bg" style="background-image: url(ttt.jpeg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Medicine details</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.php">Home</a></li>
                        <li><span>></span></li>
                        <li>Medicine</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Product Details Start-->
        <section class="product-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-6">
                        <div class="product-details__img">
                            <img style="height:550px; " src="../images/<?php echo $medicine['image'];?>" alt="" />
                            <div class="product-details__img-search">
                                <a class="img-popup"  href="../images/<?php echo $medicine['image'];?>"><span
                                        class="icon-magnifying-glass"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6">
                        <div class="product-details__top">
                            <h3 class="product-details__title"><?php  echo $medicine['medicine_name']; ?> </h3>
                        </div>
                        <div class="product-details__reveiw">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <!-- chnage here -->

                        <div style="padding-top: 0px; padding-left:5px;" class="your_order">
                    <h2>Medicine Details</h2>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="order_table_box">
                                <table class="order_table_detail">
                                    <thead class="order_table_head">
                                        <tr>
                                            <th>Prakriti &nbsp;:-</th>
                                            <th class="right"><?php echo $medicine['prakriti']; ?></th>
                                        </tr>
                                    </thead>

                                    <thead class="order_table_head">
                                        <tr>
                                            <th>Age &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:-</th>
                                            <th class="right"><?php echo $medicine['age'] ?></th>
                                        </tr>
                                    </thead>

                                    <thead class="order_table_head">
                                        <tr>
                                            <th>Gender &nbsp;:-</th>
                                            <th class="right"><?php echo $medicine['gender'] ?></th>
                                        </tr>
                                    </thead>

                                    <thead class="order_table_head">
                                        <tr>
                                            <th>Season &nbsp;:-</th>
                                            <th class="right"><?php echo $medicine['season'] ?></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                    </div>
                </div>


                        
                    </div>
                </div>
            </div>
        </section>
        <!--Product Details End-->

        <!--Product Description Start-->
        <section class="product-description">
            <div class="container">
                <h3 class="product-description__title">Description</h3>
                <p class="product-description__text1"><?php echo $medicine['description']; ?></p>
                <div class="product-description__list">
                <h3 class="product-description__title">Ingredients</h3>
                    <ul class="list-unstyled">
                        <li>
                            <p><?php
                                                        $pre = explode(",", $medicine['ingredients']);
                                                        $nop = count($pre);
                                                        $divp = intdiv($nop, 2);
                                                        for ($i = $divp; $i < $nop; $i++) {
                                                            ?>                                                  
                                                <li><span style="font-size: 18px;" class="icon-right-arrow">&nbsp;<?php echo $pre[$i]; ?></span></li>
                                                            

                                                        <?php } ?></p> 
                        </li>
                        
                    </ul>
                </div>

                <div class="product-description__list">
                <h3 class="product-description__title">Doses</h3>
                    <ul class="list-unstyled">
                        <li>
                            <p><?php
                                                        $pre = explode(",", $medicine['dose']);
                                                        $nop = count($pre);
                                                        $divp = intdiv($nop, 2);
                                                        for ($i = $divp; $i < $nop; $i++) {
                                                            ?>                                                  
                                                <li><span style="font-size: 18px;" class="icon-right-arrow">&nbsp;<?php echo $pre[$i]; ?></span></li>
                                                            

                                                        <?php } ?></p> 
                        </li>
                        
                    </ul>
                </div>

                <div class="product-description__list">
                <h3 class="product-description__title">Special Conditions</h3>
                    <ul class="list-unstyled">
                        <li>
                            <p><?php
                                                        $pre = explode(",", $medicine['special_condition']);
                                                        $nop = count($pre);
                                                        $divp = intdiv($nop, 2);
                                                        for ($i = $divp; $i < $nop; $i++) {
                                                            ?>                                                  
                                                <li><span style="font-size: 18px;" class="icon-right-arrow">&nbsp;<?php echo $pre[$i]; ?></span></li>
                                                            

                                                        <?php } ?></p> 
                        </li>
                        
                    </ul>
                </div>
    
    
            </div>
        </section>
        <!--Product Description End-->

        <!--Review One Start-->
        <section class="review-one">
            <div class="container">
                <div class="comments-area">
                    
                </div>
            </div>
        </section>
        <!--Review One End-->

<!--Testimonial One Start-->
<section class="testimonial-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="testimonial-one__left">
                            <div class="section-title text-left">
                                <div class="section-title__icon">
                                    <img src="assets/images/icon/section-title-icon.png" alt="">
                                </div>
                                <span class="section-title__tagline">Our Medicines</span>
                                <h2 class="section-title__title">More Medicine For You</h2>
                            </div>
                            <p class="testimonial-one__text-1"> Unlock the Healing Power of Ayurvedic Medicines: Explore our Medicine for Natural Wellness Solutions.</p>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="testimonial-one__right">
                            <div class="testimonial-one__carousel thm-owl__carousel owl-theme owl-carousel"
                                 data-owl-options='{
                                 "items": 3,
                                 "margin": 30,
                                 "smartSpeed": 700,
                                 "loop":true,
                                 "autoplay": false,
                                 "nav":false,
                                 "dots":true,
                                 "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                                 "responsive":{
                                 "0":{
                                 "items":1
                                 },
                                 "768":{
                                 "items":2
                                 },
                                 "992":{
                                 "items": 2
                                 }
                                 }
                                 }'>
                                 <?php foreach ($medicines as $m) {  ?>
                                <!--Testimonial One Single Start-->
                                <div class="item">
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__single-inner">
                                            <div class="testimonial-one__shape-1"
                                                 style="background-image: url(assets/images/shapes/testimonial-one-shape-1.png);">
                                            </div>
                                            <div class="testimonial-one__review">
                                            <img style="height: 140px;" width="80px" src="../images/<?php echo $m['image'];?>" alt="">
                                            </div>
                                            <br><br>
                                            
                                            <div class="testimonial-one__client-info">
                                            <br><br>
                                            
                                                <div class="testimonial-one__client-content">
                                                    <a></a><h4 class="testimonial-one__client-name"><a style="color:green;" href="medicine-details.php?medicine_id=<?php echo $m['medicine_id'] ?>"><?php echo $m['medicine_name']; ?></a></h4>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial One Single End-->
                                <?php } ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial One End-->





        <!--CTA One Start-->
        <section class="cta-one">
            <div class="container">
                <div class="cta-one__inner">
                    <div class="cta-one__inner-content">
                        <div class="cta-one__img">
                            <img src="assets/images/resources/cta-one-img-1.jpg" alt="">
                        </div>
                        <div class="cta-one__shape-1 img-bounce">
                            <img src="assets/images/shapes/cta-one-shape-1.png" alt="">
                        </div>
                        <div class="cta-one__left">
                            <div class="cta-one__icon">
                                <span class="icon-farmer"></span>
                            </div>
                            <h4 class="cta-one__title">Your Ideas, Our Evolution<br> Let's Enhance Ayurveda Together.</h4>
                        </div>
                        <div class="cta-one__btn-box">
                            <a href="contact.php" class="thm-btn cta-one__btn">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--CTA One End-->

<br>
       

<?php

include 'footer.php';

?>