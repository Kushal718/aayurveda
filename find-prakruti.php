<?php
include 'header.php';
$symptoms = $db->select("symptoms", "*", ['deleted' => 0]);

?>
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

<!-- quill css -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="../admin/assets/libs/multi.js/multi.min.css" />

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
crossorigin="anonymous"></script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script src="sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 -->
<script src="//cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.js"></script>

<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">

<style>
body {
  font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif; 
}</style>

<section style="height:300px ;" class="page-header">
    <div class="page-header-bg" style="background-image: url(ttt.jpeg)">
    </div>
    <div class="container">
        <div class="page-header__inner">


        </div>
    </div>
</section>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <br><br>
            <form action="prakruti-submit.php" class='needs-validation' method="post" id="property-form" novalidate>
                <div class="row">
                    <div class="col-lg-12 mb-4">
                        <div class="card" style="border-color: greenyellow ;background-image:url('back2.jpg');">
                            <div class="card-body">
                                <h2 style="color: green;font-weight: bolder" class="card-title mt-3 mb-4"><b>FINDOUT YOUR PRAKRUTI !</b></h2>
                                <hr>
                                <div id="section-1" class="form-section">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <h3>1) How is your physique?</h3><br>
                                            <input  type="radio" name="physique" value="Thin" required><b> Thin</b><br>
                                            <input type="radio" name="physique" value="Medium"><b> Medium</b><br>
                                            <input type="radio" name="physique" value="Obese"><b> Obese</b><br>
                                        </div><br>
                                        <div class="col-xl-6">
                                            <h3>2) Your weight?</h3><br>
                                            <input type="radio" name="weight" value="Underweight"required><b> Underweight (in relation to height)</b><br>
                                            <input type="radio" name="weight" value="Optimum"><b> Optimum – as per age and height</b><br>
                                            <input type="radio" name="weight" value="Overweight"><b> Overweight</b><br>
                                        </div><br>
                                        <div class="col-xl-6 col-lg-6">
                                            <br> <h3>3) How is your complexion?</h3><br>
                                            <input type="radio" name="complexion" value="Dusky"required><b> Dusky</b><br>
                                            <input type="radio" name="complexion" value="Wheatish"><b> Wheatish</b><br>
                                            <input type="radio" name="complexion" value="Fair"><b> Fair</b><br>
                                        </div><br>
                                        <div class="col-xl-6 ">
                                            <br> <h3>4) What is the color of your hair?</h3><br>
                                            <input type="radio" name="hair_color" value="Jet Black"required><b> Jet Black</b><br>
                                            <input type="radio" name="hair_color" value="Golden/Brown"> <b>Golden/Brown</b><br>
                                            <input type="radio" name="hair_color" value="Black"><b> Black</b><br>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="get-free-quote__form-input-box">
                                                <br> <h3>5) How are your eyes?</h3><br>
                                                <input type="radio" name="eye_condition" value="Small, dry, white part of eye is turbid"required><b> Small, dry, white part of eye is turbid (not clear white)</b><br>
                                                <input type="radio" name="eye_condition" value="Small, white part of eye is yellow/red, Brown eyes (iris)"><b> Small, white part of eye is yellow/red, Brown eyes (iris)</b><br>
                                                <input type="radio" name="eye_condition" value="Big, attractive, black eyes (iris), white part of eye is milky white"><b> Big, attractive, black eyes (iris), white part of eye is milky white</b><br>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <br> <h3>6) How are your lips?</h3><br>
                                            <input type="radio" name="lip_condition" value="Slightly thin"required><b> Slightly thin</b><br>
                                            <input type="radio" name="lip_condition" value="Yellowish red (pink)"><b> Yellowish red (pink)</b><br>
                                            <input type="radio" name="lip_condition" value="Reddish/pinkish, attractive, beautiful"><b> Reddish/pinkish, attractive, beautiful</b><br>

                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-xxl-12 col-md-12">
                                                <div>

                                                    <button style="margin-left:90%" type="button"
                                                            class="thm-btn contact-page__form-btn btn-next">Next</button>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div id="section-2" class="form-section" style="display: none;">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6">
                                            <br><h3>7) How are your teeth?</h3><br>
                                            <input type="radio" name="teeth_condition" value="Very small/very big, teeth pushed forward, can be seen out of lips, broken, irregular in shape and size, dry"required><b> Very small/very big, teeth pushed forward, can be seen out of lips, broken, irregular in shape and size, dry</b><br>
                                            <input type="radio" name="teeth_condition" value="Medium size, yellowish or yellow colored"><b> Medium size, yellowish or yellow colored</b><br>
                                            <input type="radio" name="teeth_condition" value="Ivory white, attractive shape, even-sized"> <b>Ivory white, attractive shape, even-sized</b><br>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <br><h3>8) How are your nails?</h3><br>
                                            <input type="radio" name="nail_condition" value="Broken, uneven, dry, rough"required><b> Broken, uneven, dry, rough</b><br>
                                            <input type="radio" name="nail_condition" value="Small, beautiful, reddish/pinkish"><b> Small, beautiful, reddish/pinkish</b><br>
                                            <input type="radio" name="nail_condition" value="Long, shiny, reddish-white"><b> Long, shiny, reddish-white</b><br>

                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <br> <h3>9) How are your palms/soles?</h3><br>
                                            <input type="radio" name="palm_sole_condition" value="Rough, cracked"required><b> Rough, cracked</b><br>
                                            <input type="radio" name="palm_sole_condition" value="Reddish/pinkish in color"><b> Reddish/pinkish in color</b><br>
                                            <input type="radio" name="palm_sole_condition" value="Delicate/small"><b> Delicate/small</b><br>

                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <br> <h3>10) How is your skin?</h3><br>
                                            <input type="radio" name="skin_condition" value="Dry, rough, looks like dried twig"required><b> Dry, rough, looks like dried twig</b><br>
                                            <input type="radio" name="skin_condition" value="Delicate"><b> Delicate</b><br>
                                            <input type="radio" name="skin_condition" value="Soft, delicate, smooth, oily (unctuous)"><b> Soft, delicate, smooth, oily (unctuous)</b><br>

                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <br><h3>11) Your strength?</h3><br>
                                            <input type="radio" name="strength" value="Weak, intolerant to strenuous activities, unable to lift heavy weight, easily tired by little work"required><b> Weak, intolerant to strenuous activities, unable to lift heavy weight, easily tired by little work</b><br>
                                            <input type="radio" name="strength" value="Medium strength"><b> Medium strength</b><br>
                                            <input type="radio" name="strength" value="Good endurance, can easily perform strenuous activities, can carry heavy loads, does not experience fatigue easily, can work all day"><b> Good endurance, can easily perform strenuous activities, can carry heavy loads, does not experience fatigue easily, can work all day</b><br>

                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <br><h3>12) What is the temperature of your body?</h3><br>
                                            <input type="radio" name="body_temperature" value="Low, hands and feet feel cold even in summers"required><b> Low, hands and feet feel cold even in summers</b><br>
                                            <input type="radio" name="body_temperature" value="Body feels warm all the time"><b> Body feels warm all the time</b><br>
                                            <input type="radio" name="body_temperature" value="Normal temperature (neither cold nor hot)"><b> Normal temperature (neither cold nor hot)</b><br>

                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <button type="button"
                                                        class="btn-lg btn-warning btn-prev">Previous</button>


                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-md-6">
                                            <div>


                                                <button style="margin-left:70%" type="button"
                                                        class="thm-btn contact-page__form-btn btn-next">Next</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div id="section-3" class="form-section" style="display: none;">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6">
                                            <br> <h3>13) How are your joints?</h3><br>
                                            <input type="radio" name="joint_condition" value="Crepitus is heard on movements of joints"required><b> Crepitus is heard on movements of joints</b><br>
                                            <input type="radio" name="joint_condition" value="Joints, bones cannot be seen"><b> Joints, bones cannot be seen</b><br>
                                            <input type="radio" name="joint_condition" value="Joints are strong, well covered with muscles, bony prominences cannot be seen"><b> Joints are strong, well covered with muscles, bony prominences cannot be seen</b><br>

                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <br><h3>14) How is your body above the stomach (umbilicus)?</h3><br>
                                            <input type="radio" name="body_above_stomach" value="Stomach is lean (lean belly)"required><b> Stomach is lean (lean belly)</b><br>
                                            <input type="radio" name="body_above_stomach" value="Size of stomach is medium/optimum (medium belly)"><b> Size of stomach is medium/optimum (medium belly)</b><br>
                                            <input type="radio" name="body_above_stomach" value="Abdominal obesity (large belly)"><b> Abdominal obesity (large belly)</b><br>

                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <br><h3>15) How is your hunger?</h3><br>
                                            <input type="radio" name="hunger" value="Irregular (sometimes intense, sometimes low hunger)"required><b> Irregular (sometimes intense, sometimes low hunger)</b><br>
                                            <input type="radio" name="hunger" value="Intense hunger – cannot control hunger"><b> Intense hunger – cannot control hunger</b><br>
                                            <input type="radio" name="hunger" value="Low hunger – can skip one meal"><b> Low hunger – can skip one meal</b><br>

                                        </div>
                                        <div class="col-xl-6">
                                            <br><h3>16) How is your digestive capacity?</h3><br>
                                            <input type="radio" name="digestive_capacity" value="Digestive capacity is erratic – sometimes good, sometimes low. Sometimes ingestion leads to excess burping"required><b> Digestive capacity is erratic – sometimes good, sometimes low. Sometimes ingestion leads to excess burping</b><br>
                                            <input type="radio" name="digestive_capacity" value="Very good. Food taken as per hunger gets digested in 3-4 hours and after that there is manifestation of proper hunger again."><b> Very good. Food taken as per hunger gets digested in 3-4 hours and after that there is manifestation of proper hunger again.</b><br>
                                            <input type="radio" name="digestive_capacity" value="Low digestive capacity. Sometimes there is no desire to have food in the evening."><b> Low digestive capacity. Sometimes there is no desire to have food in the evening.</b><br>

                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <br> <h3>17) What is your quantitative food intake?</h3><br>
                                            <input type="radio" name="food_intake" value="Sometimes too much in quantity, sometimes too less"required><b> Sometimes too much in quantity, sometimes too less</b><br>
                                            <input type="radio" name="food_intake" value="Always too much (voracious eater)"> <b>Always too much (voracious eater)</b><br>
                                            <input type="radio" name="food_intake" value="Moderate – not too much or too less"><b> Moderate – not too much or too less</b><br>

                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <br> <h3>18) Which taste do you prefer the most?</h3><br>
                                            <input type="radio" name="preferred_taste" value="Sweet, sour, salty"required><b> Sweet, sour, salty</b><br>
                                            <input type="radio" name="preferred_taste" value="Sweet, bitter, astringent"> <b>Sweet, bitter, astringent</b><br>
                                            <input type="radio" name="preferred_taste" value="Spicy, bitter, astringent"><b> Spicy, bitter, astringent</b><br>

                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <button type="button"
                                                        class="btn-lg btn-primary btn-prev">Previous</button>


                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-md-6">
                                            <div>


                                                <button style="margin-left:70%" type="button"
                                                        class="thm-btn contact-page__form-btn btn-next">Next</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="section-4" class="form-section" style="display: none;">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6">
                                            <br> <h3>19) Do you feel thirsty?</h3><br>
                                            <input type="radio" name="thirst" value="Not much"required><b> Not much</b><br>
                                            <input type="radio" name="thirst" value="Excess thirst. Needs to drink more water even in cold season"><b> Excess thirst. Needs to drink more water even in cold season</b><br>
                                            <input type="radio" name="thirst" value="Moderate"><b> Moderate</b><br>

                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <br><h3>20) Do you prefer warm food or cold food?</h3><br>
                                            <input type="radio" name="food_preference" value="Sometimes warm, sometimes cold"required><b> Sometimes warm, sometimes cold</b><br>
                                            <input type="radio" name="food_preference" value="Cold"><b> Cold</b><br>
                                            <input type="radio" name="food_preference" value="Warm"><b> Warm</b><br>

                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <br> <h3>21) Do you prefer warm beverages or cold beverages?</h3><br>
                                            <input type="radio" name="beverage_preference" value="Sometimes warm, sometimes cold"required><b> Sometimes warm, sometimes cold</b><br>
                                            <input type="radio" name="beverage_preference" value="Cold"><b> Cold</b><br>
                                            <input type="radio" name="beverage_preference" value="Warm"><b> Warm</b><br>

                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <br> <h3>22) Do you experience constipation?</h3><br>
                                            <input type="radio" name="constipation" value="Many times"required><b> Many times</b><br>
                                            <input type="radio" name="constipation" value="Always pass liquid stools"><b> Always pass liquid stools</b><br>
                                            <input type="radio" name="constipation" value="Not much"><b> Not much</b><br>

                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <br><h3>23) Do you experience excess sweating?</h3><br>
                                            <input type="radio" name="excess_sweating" value="Sometimes too much, sometimes too less"required><b> Sometimes too much, sometimes too less</b><br>
                                            <input type="radio" name="excess_sweating" value="Excess – excess as compared to people around"><b> Excess – excess as compared to people around</b><br>
                                            <input type="radio" name="excess_sweating" value="Sometimes"><b> Sometimes</b><br>

                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <br> <h3>24) How do you speak?</h3><br>
                                            <input type="radio" name="speech_pattern" value="Very fast. Some words are not clearly spoken. Few words are not audible to people around."required><b> Very fast. Some words are not clearly spoken. Few words are not audible to people around.</b><br>
                                            <input type="radio" name="speech_pattern" value="Very fast"><b> Very fast</b><br>
                                            <input type="radio" name="speech_pattern" value="Slowly. Calmly. Emphasizing on each word while speaking"><b> Slowly. Calmly. Emphasizing on each word while speaking</b><br>

                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <button type="button"
                                                        class="btn-lg btn-primary btn-prev">Previous</button>


                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-md-6">
                                            <div>


                                                <button style="margin-left:70%" type="button"
                                                        class="thm-btn contact-page__form-btn btn-next">Next</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="section-5" class="form-section" style="display: none;">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6">
                                            <br><h3>25) What is the speed of your walking?</h3><br>
                                            <input type="radio" name="walking_speed" value="Brisk/rapid. Walks like one’s running"required><b> Brisk/rapid. Walks like one’s running</b><br>
                                            <input type="radio" name="walking_speed" value="Fast"><b> Fast</b><br>
                                            <input type="radio" name="walking_speed" value="Slow. Walks like an elephant stepping foot properly on the ground"><b> Slow. Walks like an elephant stepping foot properly on the ground</b><br>

                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <br><h3>26) What is the pace of your daily activities?</h3><br>
                                            <input type="radio" name="daily_pace" value="Very fast"required><b> Very fast</b><br>
                                            <input type="radio" name="daily_pace" value="Medium speed"><b> Medium speed</b><br>
                                            <input type="radio" name="daily_pace" value="Very slow"><b> Very slow</b><br>

                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <br><h3>27) How do you react to any incident? Do you react impulsively?</h3><br>
                                            <input type="radio" name="reaction_to_incident" value="Cannot tell. Sometimes react impulsively, sometimes give no reaction."required><b> Cannot tell. Sometimes react impulsively, sometimes give no reaction.</b><br>
                                            <input type="radio" name="reaction_to_incident" value="Always impulsive"><b> Always impulsive</b><br>
                                            <input type="radio" name="reaction_to_incident" value="Depending on the incident. Thoughtful reaction. Reacts after due thinking"><b> Depending on the incident. Thoughtful reaction. Reacts after due thinking</b><br>

                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <br><h3>28) How do you perform your daily activities?</h3><br>
                                            <input type="radio" name="daily_activity_performance" value="With high energy"required><b> With high energy</b><br>
                                            <input type="radio" name="daily_activity_performance" value="With moderate energy"><b> With moderate energy</b><br>
                                            <input type="radio" name="daily_activity_performance" value="Sometimes with low energy/lethargy"><b> Sometimes with low energy/lethargy</b><br>

                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <br> <h3>29) How is your grasping power?</h3><br>
                                            <input type="radio" name="grasping_power" value="Very quick to grasp things"required><b> Very quick to grasp things</b><br>
                                            <input type="radio" name="grasping_power" value="Very easy to grasp things and understands properly"><b> Very easy to grasp things and understands properly</b><br>
                                            <input type="radio" name="grasping_power" value="Slow to grasp things but understands completely"><b> Slow to grasp things but understands completely</b><br>

                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <br> <h3>30) How is your memory?</h3><br>
                                            <input type="radio" name="memory" value="Low memory – remembers for 2-3 months"required><b> Low memory – remembers for 2-3 months</b><br>
                                            <input type="radio" name="memory" value="Medium memory – can remember if revised frequently"><b> Medium memory – can remember if revised frequently</b><br>
                                            <input type="radio" name="memory" value="Long-term memory"><b> Long-term memory</b><br>

                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <button type="button"
                                                        class="btn-lg btn-primary btn-prev">Previous</button>


                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-md-6">
                                            <div>


                                                <button type="submit" style="margin-left:70%" type="button"
                                                        class="thm-btn contact-page__form-btn btn-next">SUBMIT</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>    
        </div>
    </div>
</div>



<script src="../admin/assets/libs/multi.js/multi.min.js"></script>
<!-- autocomplete js -->
<script src="../admin/assets/libs/%40tarekraafat/autocomplete.js/autoComplete.min.js"></script>

<!-- init js -->
<script src="../admin/assets/js/pages/form-advanced.init.js"></script>
<!-- input spin init -->
<script src="../admin/assets/js/pages/form-input-spin.init.js"></script>

<!-- App js -->
<script src="../admin/assets/js/app.js"></script>
<?php
include 'footer.php';
?>

<script>
    $(document).ready(function () {
        $(".btn-next").click(function () {
            var selectedSymptoms = window.confirm("Are you sure you want to proceed?"); // Get selected symptoms
            
            $.ajax({
                type: "",
                url: "", // PHP script to handle the request
                data: {symptoms: selectedSymptoms},

                success: function (response) {
                    $("#disease-results").html(response); // Display the results in a div
                }
            });
        });
    });

    $(document).ready(function () {
        var formSections = $(".form-section");
        var currentSection = 0;

        $(".btn-next").click(function () {
            if ($('#property-form').valid()) {
                formSections.eq(currentSection).hide();
                currentSection++;
                formSections.eq(currentSection).show();
            }
        });

        $(".btn-prev").click(function () {
            formSections.eq(currentSection).hide();
            currentSection--;
            formSections.eq(currentSection).show();
        });
    });
</script>