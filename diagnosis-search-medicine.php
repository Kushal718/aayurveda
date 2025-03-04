<?php
require_once '../vendor/autoload.php'; // Load the Medoo library

use Medoo\Medoo;

// Initialize Medoo with your database configuration
$db = new Medoo();

if (isset($_POST['medicine_id'])) {
    $medicineId = $_POST['medicine_id'];

    // Retrieve the comma-separated medicine IDs associated with the disease
    $medicineIds = explode(',', $medicineId);

    // Query the database to get medicine information
    $medicines = $db->select(
        'medicines',
        '*',
        ['medicine_id' => $medicineIds]
    );
    ?><section class="services-page">
    <div class="container">
        <div class="row"><?php
    foreach ($medicines as $medicine) { ?>
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
                <button type="button" class="thm-btn pricing-one__btn btn-next read-more-button" data-medicine-id="<?php echo $medicine['medicine_id']; ?>">Read More</button>

                </div>
            </div>
        </div>
        <!--Services One Single End-->
<?php }?>
</section><?php 
    // Prepare and send JSON response
//   print_r($medicines);
    exit;
} else {
  echo "NO Medicine is found";
}
