<?php
include 'header.php';
$medicines = $db->select('medicines', "*");
?>

<!--Faq Search Box Start-->
<section class="faq-search-box">
    <div class="container">
        <div class="faq-search-box__inner">
            <div class="faq-search-box__title-box">
                <div class="faq-search-box__shape-1 float-bob-y">
                    <img src="assets/images/shapes/faq-search-box-shape-1.png" alt="">
                </div>
                <div class="faq-search-box__shape-2 float-bob-x">
                    <img src="assets/images/shapes/faq-search-box-shape-2.png" alt="">
                </div>
                <div class="section-title text-center">
                    <div class="section-title__icon">
                        <img src="assets/images/icon/section-title-icon.png" alt="">
                    </div>
                    <span class="section-title__tagline">checkout our Medicine</span>
                    <h2 class="section-title__title">Search Medicines Here</h2>
                </div>
            </div>
            <form action="medicines.php" class="faq-search-box__form">
                        <div class="faq-search-box__form-input">
                            <input type="search" name="search" required placeholder="Search Medicine here">
                            <button name="submit" type="submit"><i class="icon-magnifying-glass"></i></button>
                        </div>
                        
                    </form>
<!--            <section class="faq-search-box">
                <div class="faq-search-box__inner">
                    <form action="medicines.php" class="faq-search-box__form">
                        <div class="faq-search-box__form-input">
                            <input type="search" name="search" required placeholder="Search Medicine here">
                            <button name="submit" type="submit"><i class="icon-magnifying-glass"></i></button>
                        </div>
                        
                    </form>

                </div>

            </section>-->
        </div>
    </div>
</section>
<!--Faq Search Box End-->




<!--Services Page Start-->
<section class="services-page">
    <div class="container">
        <div class="row">

<?php foreach ($medicines as $medicine) { ?>
                <!--Services One Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="services-one__single">
                        <div class="services-one__img-box">
                            <div class="services-one__img">
                                <img style="height:150px;width: 150px" src="../images/<?php echo $medicine['image']; ?>" alt="">
                            </div>
                        </div>
                        <div class="services-one__icon">
                            <span class="icon-medicine"></span>
                        </div>
                        <h3 class="services-one__title"><a href="medicine-details.php?medicine_id=<?php echo $medicine['medicine_id'] ?>"><?php echo $medicine['medicine_name']; ?></a></h3>

                        <div class="services-one__btn-box">
                            <a href="medicine-details.php?medicine_id=<?php echo $medicine['medicine_id'] ?>" class="services-one__btn">Read More<span
                                    class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
                <!--Services One Single End-->
<?php } ?> 
        </div>
    </div>
</section>
<!--Services Page End-->



<?php
include 'footer.php';
?>