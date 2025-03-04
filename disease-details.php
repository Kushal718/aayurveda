<?php
include 'header.php';
require_once '../vendor/autoload.php'; // Load the Medoo library

use Medoo\Medoo;

$db = new Medoo();
$disease_id = $_REQUEST['disease_id'];
//$diseases = $db->select("diseases", "*");
$disease = $db->get('diseases', "*", ["disease_id" => $disease_id]);
?>
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url(ttt.jpeg)">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>Disease Details</h2>

        </div>
    </div>
</section>
<!--Page Header End-->

<!--Blog Details Start-->
<section class="blog-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-7">
                <div class="blog-details__left">
                    <!--                    <div class="blog-details__img">
                                            <img src="assets/images/blog/blog-details-img-1.jpg" alt="">
                                            <div class="blog-details__date">
                                                <p>30 Mar, 2023</p>
                                            </div>
                                        </div>-->
                    <div class="blog-details__content">
                        <!--                        <ul class="blog-details__meta list-unstyled">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="fas fa-tags"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Gardening</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <span>/</span>
                                                        <div class="icon">
                                                            <span class="fas fa-comments"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>2 Comments</p>
                                                        </div>
                                                    </li>
                                                </ul>-->
                        <h3 class="blog-details__title-1"><?php echo $disease['disease_name']; ?></h3>
                        <p class="blog-details__text-1"><?php echo $disease['description']; ?></p>


                        <div class="sidebar__single sidebar__tags">
                            <h3 class="sidebar__title">Symptoms</h3>
                            <div class="sidebar__tags-list">

                                <?php
                                $symptoms = $disease['symptoms_id'];
                                // print_r($symptoms);
                                $a = (explode(",", $symptoms));

                                $sypt = $db->select('symptoms', "*", ["symptoms_id" => $a]);
                                foreach ($sypt as $symptoms) {
                                    ?>
                                    <a href="#"><?php echo $symptoms['symptoms_name']; ?></a>
                                <?php } ?>


                            </div>
                        </div>
                        <div class="sidebar__single sidebar__tags">
                            <h3 class="sidebar__title">Do's</h3>
                            <div class="sidebar__tags-list">

                                <?php
                                $do_S = $disease['do_s'];

                                $dos = (explode(",", $do_S));

//                                $sypt = $db->select('symptoms', "*", ["symptoms_id" => $a]);
                                foreach ($dos as $dos) {
                                    ?>
                                    <a href="#"><?php echo $dos; ?></a>
                                <?php } ?>


                            </div>
                        </div>
                        <div class="sidebar__single sidebar__tags">
                            <h3 class="sidebar__title">Don't</h3>
                            <div class="sidebar__tags-list">

                                <?php
                                $do_nt = $disease['don_t'];

                                $dont = (explode(",", $do_nt));

//                                $sypt = $db->select('symptoms', "*", ["symptoms_id" => $a]);
                                foreach ($dont as $dont) {
                                    ?>
                                    <a href="#"><?php echo $dont; ?></a>
                                <?php } ?>


                            </div>
                        </div>

                        <section class="services-one" >
                            <div class="services-one__bg"  style="background-image: url(assets/images/backgrounds/services-one-bg.jpg);">
                            </div>
                            <div class="container">
                                <div class="section-title text-left">
                                    <div class="section-title__icon">
                                        <img src="assets/images/icon/section-title-icon.png" alt="">
                                    </div>
                                    <span class="section-title__tagline">our seervices list</span>
                                    <h2 class="section-title__title">Medicines Of Disease
                                    </h2>
                                </div>
                                <div class="services-one__bottom">
                                    <div class="services-one__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                                         "loop": true,
                                         "autoplay": true,
                                         "margin": 30,
                                         "nav": true,
                                         "dots": false,
                                         "smartSpeed": 500,
                                         "autoplayTimeout": 10000,
                                         "navText": ["<span class=\"fas fa-angle-left\"></span>","<span class=\"fas fa-angle-right\"></span>"],
                                         "responsive": {
                                         "0": {
                                         "items": 1
                                         },
                                         "768": {
                                         "items": 2
                                         },
                                         "992": {
                                         "items": 3
                                         },
                                         "1200": {
                                         "items": 3
                                         }
                                         }
                                         }'>
                                        <!--Services One Single Start-->

                                        <?php
                                        $medicines_id = $disease['medicine_id'];

                                        $medicines = (explode(",", $medicines_id));
                                        $med = $db->select('medicines', "*", ["medicine_id" => $medicines]);
//                                $sypt = $db->select('symptoms', "*", ["symptoms_id" => $a]);
                                        foreach ($med as $medicine) {
                                            ?>
                                            <div class="item">
                                                <div class="services-one__single">
                                                    <div class="services-one__img-box">
                                                        <div class="services-one__img">
                                                            <img height="100" src="<?php if(file_exists('../images/'.$medicine['image'])) { echo '../images/'.$medicine['image'];}else{ echo 'default.jpg'; } ?>" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="services-one__icon">
                                                        <span class="icon-gardening"></span>
                                                    </div>
                                                    <h3 class="services-one__title"><a href="medicine-details.php?medicine_id=<?php echo $medicine['medicine_id']; ?>"><?php echo $medicine['medicine_name']; ?></a></h3>
<!--                                                    <p class="services-one__text">Sed eiusmod tempor incididunt dolore <br> sedik is magna
                                                        aliqua.
                                                    </p>-->
                                                    <div class="services-one__btn-box">
                                                        <a href="medicine-details.php?medicine_id=<?php echo $medicine['medicine_id']; ?>" class="services-one__btn">Read More<span
                                                                class="icon-right-arrow"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>


                                        
                                        <!--Services One Single End-->
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--Services One End-->

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--Blog Details End-->

<?php
include 'footer.php';
?>