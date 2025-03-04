<?php
include 'header.php';
require_once '../vendor/autoload.php'; // Load the Medoo library

use Medoo\Medoo;

$db = new Medoo();

//$diseases = $db->select("diseases", "*");
$diseases = $db->select('diseases', "*", ['ORDER' => ['disease_id' => 'DESC', 'LIMIT' => 10]]);
//print_r($diseases);
?>

<section class="services-one">
    <div class="services-one__bg" style="background-image: url(assets/images/backgrounds/services-one-bg.jpg);">
    </div>
    <section class="faq-search-box">

        <div class="faq-search-box__inner">
            <form action="diseases.php" class="faq-search-box__form">
                <div class="faq-search-box__form-input">
                    <input type="search" name="search" required placeholder="Search Disease here">
                    <button name="submit" type="submit"><i class="icon-magnifying-glass"></i></button>
                </div>
                <br>
                <h1 class="text-white">Latest Diseases</h1>
            </form>

        </div>

    </section>

    <section class="services-page">
        <div class="container">
            <div class="row">

                <!--Services One Single Start-->
                <?php foreach ($diseases as $disease) { ?>
                    <div class="col-xl-4 col-lg-4">
                        <div class="pricing-one__single">
                            <div class="pricing-one__single-inner">
                                <!--                                <div class="pricing-one__price-box">
                                                                    <h3 class="pricing-one__price"> <span>$</span> 59.00</h3>
                                                                    <p class="pricing-one__valitidy">/ Monthly</p>
                                                                </div>-->
                                <div class="pricing-one__list-box">
                                    <h5 class="pricing-one__price"><?php echo $disease['disease_name']; ?></h5>
                                    <ul class="list-unstyled pricing-one__list">
                                        <?php
                                        $symptoms = $disease['symptoms_id'];
                                        // print_r($symptoms);
                                        $a = (explode(",", $symptoms));

                                        $sypt = $db->select('symptoms', "*", ["symptoms_id" => $a]);
                                        foreach ($sypt as $symptoms) {
                                            ?>
                                            <li>
                                                <div class="icon">
                                                    <i class="fa fa-leaf"></i>
                                                </div>
                                                <div class="text">
                                                    <p><?php echo $symptoms['symptoms_name']; ?></p>
                                                </div>
                                            </li>

                                        <?php } ?>


                                    </ul>
                                </div>
                                <div class="pricing-one__btn-box">
                                    <a href="disease-details.php?disease_id=<?php echo $disease['disease_id']; ?>"
                                       class="thm-btn pricing-one__btn">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--                    <div class="col-xl-4 col-lg-4 col-md-6">
                                            <div class="blog-one__single">
                                                                            <div class="blog-one__img-box">
                                                                                <div class="blog-one__img">
                                                                                    <img src="assets/images/blog/blog-1-1.jpg" alt="">
                                                                                    <a href="blog-details.html">
                                                                                        <span class="blog-one__plus"></span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                <div class="blog-one__content">
                    
                    
                                                    <h3 class="blog-one__title"><a href="disease-details.html"><?php echo $disease['disease_name']; ?></a></h3>
                                                    <p class="blog-one__text"><?php echo $disease['description']; ?></p>
                                                </div>
                                                <div class="blog-one__hover-content">
                    
                                                    <h3 class="blog-one__title"><a href="disease-details.html"><?php echo $disease['disease_name']; ?></a></h3>
                                                    <p class="blog-one__hover-text"><?php echo $disease['description']; ?></p>
                                                    <div class="blog-one__hover-btn-box">
                                                        <a href="disease-details.php" class="blog-one__hover-btn">Read More<span
                                                                class="icon-right-arrow-1"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>-->
                <?php } ?>


                <!--Services One Single End-->
            </div>
        </div>
    </section>
</section>
<!--Services One End-->
<br>
<?php
include 'footer.php';
?>