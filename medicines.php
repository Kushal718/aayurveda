<?php
include 'header.php';
require_once '../vendor/autoload.php'; // Load the Medoo library

use Medoo\Medoo;

$db = new Medoo();
?>
<section class="services-one">
    <div class="services-one__bg" style="background-image: url(assets/images/backgrounds/services-one-bg.jpg);">
    </div><br><br>
    <?php
    if (isset($_REQUEST['submit'])) {
        if (!empty($_REQUEST['search'])) {
            $search = $_REQUEST['search'];
        }
        $results = $db->select("medicines", "*", ["medicine_name[~]" => $search]);
        ?>
        <section class = "services-page">
            <div class = "container">
                <div class = "row">


                    <!--Services One Single Start-->
                    
                        <?php if ($results) { ?>
                            <h1 class="text-white">Diseases</h1><hr><hr>
                            <?php foreach ($results as $medicine) {
                                ?>
<!--                                <div class = "col-xl-4 col-lg-4 col-md-6">
                                    <div class = "blog-one__single">
                                        <div class = "blog-one__img-box">
                                            <div class = "blog-one__img">
                                                <img src="<?php
                                                if ($medicine['image'] != "") {
                                                    echo '../images/' . $medicine['image'];
                                                } else {
                                                    echo 'default.png';
                                                }
                                                ?>'>
                                                     <a href = "medicine-details.php?medicine_id=<?php echo $medicine['medicine_id']; ?>">
                                                     <span class = "blog-one__plus"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class = "blog-one__content">


                                            <h3 class = "blog-one__title"><a href="medicine-details.php?medicine_id=<?php echo $medicine['medicine_id']; ?>"><?php echo $medicine['medicine_name']; ?></a></h3>
                                            <p class="blog-one__text"><?php echo $medicine['description']; ?></p>
                                        </div>
                                        <div class="blog-one__hover-content">

                                            <h3 class = "blog-one__title"><a href="medicine-details.php?medicine_id=<?php echo $medicine['medicine_id']; ?>"><?php echo $medicine['medicine_name']; ?></a></h3>
                                            <p class="blog-one__hover-text"><?php echo $medicine['description']; ?></p>
                                            <div class="blog-one__hover-btn-box">
                                                <a href="medicine-details.php?medicine_id=<?php echo $medicine['medicine_id']; ?>" class="blog-one__hover-btn">Read More<span
                                                        class="icon-right-arrow-1"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->
                                <div class = "col-xl-4 col-lg-4 col-md-6">
                                    <div class = "blog-one__single">
                                        <div class = "blog-one__img-box">
                                            <div class = "blog-one__img">
                                                <img src="<?php if(file_exists('../images/'.$medicine['image'])) { echo '../images/'.$medicine['image'];}else{ echo 'default.jpg'; } ?> ">
                                                     <a href = "medicine-details.php?medicine_id=<?php echo $medicine['medicine_id']; ?>">
                                                     <span class = "blog-one__plus"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class = "blog-one__content">


                                            <h3 class = "blog-one__title"><a href="medicine-details.php?medicine_id=<?php echo $medicine['medicine_id']; ?>"><?php echo $medicine['medicine_name']; ?></a></h3>
                                            <p class="blog-one__text"><?php echo $medicine['description']; ?></p>
                                        </div>
                                        <div class="blog-one__hover-content">

                                            <h3 class = "blog-one__title"><a href="medicine-details.php?medicine_id=<?php echo $medicine['medicine_id']; ?>"><?php echo $medicine['medicine_name']; ?></a></h3>
                                            <p class="blog-one__hover-text"><?php echo $medicine['description']; ?></p>
                                            <div class="blog-one__hover-btn-box">
                                                <a href="medicine-details.php?medicine_id=<?php echo $medicine['medicine_id']; ?>" class="blog-one__hover-btn">Read More<span
                                                        class="icon-right-arrow-1"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        } else {
                            
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