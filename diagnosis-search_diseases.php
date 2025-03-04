
<?php
require_once '../vendor/autoload.php'; // Load the Medoo library


use Medoo\Medoo;

// Initialize Medoo with your database configuration
$db = new Medoo();

if (isset($_POST['symptoms'])) {
    // print_r($_REQUEST);
    $selectedSymptoms = $_REQUEST['symptoms'];

    // Convert the selected symptoms array into a comma-separated string
    $symptomsString = implode(',', $selectedSymptoms);

    // Query the database to find diseases based on selected symptoms
    $diseases = $db->select(
        'diseases',
        '*',
        ["symptoms_id[~]" => $selectedSymptoms]
    );
    //     print_r($symptomsString);

    // Display the results
    ?>
    <div class="row">
        <?php
        foreach ($diseases as $disease) {



            ?>


            <!--Pricing One Single Start-->
            <div class="col-xl-4 col-lg-4">
                <div class="pricing-one__single">
                <div class="pricing-one__single-inner" data-disease-id="<?php echo $disease['disease_id']; ?>">                        <div class="pricing-one__price-box">

                        </div>
                        <div class="pricing-one__list-box">
                            <h5 class="pricing-one__list-title">
                                <?php echo $disease['disease_name']; ?>
                            </h5>
                            <ul class="list-unstyled pricing-one__list">
    <?php
    $match_symptoms = explode(",", $disease['symptoms_id']);
    $count = count($match_symptoms);
    $requestedValues = explode(",", $symptomsString);

    foreach ($match_symptoms as $symptom) {
        $symp_name = $db->get('symptoms', 'symptoms_name', ['symptoms_id' => $symptom]);

        // Check if the current symptom is in the requested values
        if (in_array($symptom, $requestedValues)) {
            $icon = '<i class="fa fa-check-circle text-success"></i>';
        } else {
            $icon = '<i class="fa fa-times-circle text-danger"></i>';
        }

        echo '<li>';
        echo '<div class="icon">';
        echo $icon;
        echo '</div>';
        echo '<div class="text">';
        echo '<p>' . $symp_name . '</p>';
        echo '</div>';
        echo '</li>';
    }
    ?>
</ul>


                        </div>
                        <div class="pricing-one__btn-box">
                            <input  type="hidden"  >
                           <!-- Inside your loop -->
<button  type="button" class="thm-btn pricing-one__btn btn-next medicine-button" data-medicine-id="<?php echo $disease['medicine_id']; ?>">Find Medicine</button>
<!-- Repeat this button for each iteration, changing the data attribute's value accordingly -->
                       </div>
                    </div>
                </div>
            </div>

            <!--Pricing One Single End-->
            <!--Pricing One Single Start-->

            <!--Pricing One Single End-->
            <!--Pricing One Single Start-->

            <!--Pricing One Single End-->




            <?php
            // foreach ($diseases as $disease) {
            // echo "<option value=\"{$disease['disease_id']}\">{$disease['disease_name']}</option>";
    
            // echo "<p>" . $disease . "</p>";
        }
        ?>
        <!-- Add this container to your HTML -->

    </div>
    <?php
    // echo "</select>";
} else {
    echo "No symptoms selected.";
}
?>
