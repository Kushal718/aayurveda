<?php
include 'header.php';
require_once '../vendor/autoload.php'; // Load the Medoo library

use Medoo\Medoo;

$db = new Medoo();
?>
<section class="services-one">
    <div class="services-one__bg" style="background-image: url(assets/images/backgrounds/services-one-bg.jpg);">
    </div>
    <?php
    if (isset($_REQUEST['submit'])) {
        if (!empty($_REQUEST['search'])) {
            $search = $_REQUEST['search'];
        }
        $results = $db->select("diseases", "*", ["disease_name[~]" => $search]);
        ?>
        <section class = "services-page">
            <div class = "container">
                <div class = "row">
                    
                    <br><br><br><br><br>
                    <br><br><br><br><br>
                    <!--Services One Single Start-->

                    <?php
                    if ($results) {
                        echo'<h1 class="text-white">Diseases</h1>';
                        foreach ($results as $disease) {
                            ?>
                            <div class = "col-xl-4 col-lg-4 col-md-6">
                                <div class = "blog-one__single">
                                    <!--<div class = "blog-one__img-box">
                                    <div class = "blog-one__img">
                                    <img src = "assets/images/blog/blog-1-1.jpg" alt = "">
                                    <a href = "blog-details.html">
                                    <span class = "blog-one__plus"></span>
                                    </a>
                                    </div>
                                    </div>-->
                                    <div class = "blog-one__content">


                                        <h3 class = "blog-one__title"><a href = "disease-details.html"><?php echo $disease['disease_name']; ?></a></h3>
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
                            </div>
                            <?php
                        }
                    }
                }
                ?>
                <!--Services One Single End-->
            </div>
        </div>
    </section>
</section>
<hr>
<?php
include 'footer.php';
?>