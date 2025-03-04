<?php
require_once '../vendor/autoload.php'; // Load the Medoo library


use Medoo\Medoo;

// Initialize Medoo with your database configuration
$db = new Medoo();
$medicine_id = $_REQUEST['medicine_id'];

$medicine = $db->get('medicines', "*", ['medicine_id' => $medicine_id]);

?>
<section>
            <div class="container">
                <div class="row">
                <div class="col-xl-4 col-lg-4">
                <div class="services-details__img-1">
                                <img style="height: 200px;" width="80px" src="../images/<?php echo $medicine['image'];?>" alt="">
                            </div>
</div>

                    
                    <div class="col-xl-8 col-lg-7">
                        <div class="services-details__right">
                            
                            <h3 class="services-details__title-1"><?php  echo $medicine['medicine_name']; ?></h3>
                            
                            <p class="services-details__text-2">Medicine Description</p>
                            <p class="services-details__text-3"><?php echo $medicine['description']; ?></p>
                            
                            <div class="services-details__benefit">
                                <div class="row">
                                    
                                    <div class="col-xl-6">
                                        <div class="services-details__benefit-content">
                                            <p class="services-details__text-2">Basic Information</p>
                                            <ul class="services-details__benefit-points list-unstyled">
                                                <li>
                                                    <div class="icon">
                                                        <span style="font-size: large;" class="fas fa-leaf">&nbsp;&nbsp; Prakriti : </span>
                                                    </div>
                                                    <div class="text">
                                                        <p style="font-size: large;"><?php echo $medicine['prakriti']; ?> </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span style="font-size: large;" class="fas fa-leaf">&nbsp;&nbsp; Age : </span>
                                                    </div>
                                                    <div class="text">
                                                        <p style="font-size: large;"><?php echo $medicine['age'] ?></p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span style="font-size: large;" class="fas fa-leaf">&nbsp;&nbsp; Gender : </span>
                                                    </div>
                                                    <div class="text">
                                                        <p style="font-size: large;"><?php echo $medicine['gender'] ?></p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span style="font-size: large;" class="fas fa-leaf">&nbsp;&nbsp; Season : </span>
                                                    </div>
                                                    <div class="text">
                                                        <p style="font-size: large;"><?php echo $medicine['season'] ?></p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span style="font-size: large;" class="fas fa-leaf">&nbsp;&nbsp; Dose : </span>
                                                    </div>
                                                    <div class="text">
                                                        <p style="font-size: large;"><?php echo $medicine['dose'] ?></p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <p class="services-details__text-2">Special Condition</p>
                            <p class="services-details__text-3"><?php echo $medicine['special_condition']; ?></p>
                            
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>