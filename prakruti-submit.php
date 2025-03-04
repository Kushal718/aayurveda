<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.js"></script>

<head>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.js"></script>
</head>
<?php
include 'functions.php';
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve answers from the form (adjust the field names accordingly)
    $physique = $_POST["physique"];
    $weight = $_POST["weight"];
    $complexion = $_POST["complexion"];
    $hairColor = $_POST["hair_color"];
    $eyeCondition = $_POST["eye_condition"];
    $lipCondition = $_POST["lip_condition"];
    $teethCondition = $_POST["teeth_condition"];
    $nailCondition = $_POST["nail_condition"];
    $palmSoleCondition = $_POST["palm_sole_condition"];
    $skinCondition = $_POST["skin_condition"];
    $strength = $_POST["strength"];
    $bodyTemperature = $_POST["body_temperature"];
    $jointCondition = $_POST["joint_condition"];
    $bodyAboveStomach = $_POST["body_above_stomach"];
    $hunger = $_POST["hunger"];
    $digestiveCapacity = $_POST["digestive_capacity"];
    $foodIntake = $_POST["food_intake"];
    $preferredTaste = $_POST["preferred_taste"];
    $thirst = $_POST["thirst"];
    $foodPreference = $_POST["food_preference"];
    $beveragePreference = $_POST["beverage_preference"];
    $constipation = $_POST["constipation"];
    $excessSweating = $_POST["excess_sweating"];
    $speechPattern = $_POST["speech_pattern"];
    $walkingSpeed = $_POST["walking_speed"];
    $dailyPace = $_POST["daily_pace"];
    $reactionToIncident = $_POST["reaction_to_incident"];
    $dailyActivityPerformance = $_POST["daily_activity_performance"];
    $graspingPower = $_POST["grasping_power"];
    $memory = $_POST["memory"];

    // Initialize scores for Vata, Pitta, and Kapha
    $vataScore = 0;
    $pittaScore = 0;
    $kaphaScore = 0;

    // Calculate scores based on answers (simplified rules)
    // Adjust scoring rules according to your specific criteria
    // Question 1
    if ($physique === "Thin") {
        $vataScore++;
    } elseif ($physique === "Medium") {
        $pittaScore++;
    } elseif ($physique === "Obese") {
        $kaphaScore++;
    }

    // Question 2
    if ($weight === "Underweight") {
        $vataScore++;
    } elseif ($weight === "Overweight") {
        $kaphaScore++;
    } else {
        $pittaScore++;
    }

    // Question 3
    if ($complexion === "Dusky") {
        $vataScore++;
    } elseif ($complexion === "Wheatish") {
        $pittaScore++;
    } elseif ($complexion === "Fair") {
        $kaphaScore++;
    }
    if ($hairColor === "Jet Black") {
        $vataScore++;
    } elseif ($hairColor === "Golden/Brown") {
        $pittaScore++;
    } elseif ($hairColor === "Black") {
        $kaphaScore++;
    }

    // Question 5: Eye Condition
    if ($eyeCondition === "Small, dry, white part of eye is turbid") {
        $vataScore++;
    } elseif ($eyeCondition === "Small, white part of eye is yellow/red, Brown eyes (iris)") {
        $pittaScore++;
    } elseif ($eyeCondition === "Big, attractive, black eyes (iris), white part of eye is milky white") {
        $kaphaScore++;
    }

    // Question 6: Lip Condition
    if ($lipCondition === "Slightly thin") {
        $vataScore++;
    } elseif ($lipCondition === "Yellowish red (pink)") {
        $pittaScore++;
    } elseif ($lipCondition === "Reddish/pinkish, attractive, beautiful") {
        $kaphaScore++;
    }
    // Continue this pattern for all 30 questions...
    // Determine Prakriti based on scores (simplified logic)
     if ($lipCondition === "Slightly thin") {
        $vataScore++;
    } elseif ($lipCondition === "Yellowish red (pink)") {
        $pittaScore++;
    } elseif ($lipCondition === "Reddish/pinkish, attractive, beautiful") {
        $kaphaScore++;
    }

    // Question 8: Teeth Condition
    if ($teethCondition === "Very small/very big, teeth pushed forward, can be seen out of lips, broken, irregular in shape and size, dry") {
        $vataScore++;
    } elseif ($teethCondition === "Medium size, yellowish or yellow colored") {
        $pittaScore++;
    } elseif ($teethCondition === "Ivory white, attractive shape, even-sized") {
        $kaphaScore++;
    }

    // Question 9: Nail Condition
    if ($nailCondition === "Broken, uneven, dry, rough") {
        $vataScore++;
    } elseif ($nailCondition === "Small, beautiful, reddish/pinkish") {
        $pittaScore++;
    } elseif ($nailCondition === "Long, shiny, reddish-white") {
        $kaphaScore++;
    }

    // Question 10: Palm/Sole Condition
    if ($palmSoleCondition === "Rough, cracked") {
        $vataScore++;
    } elseif ($palmSoleCondition === "Reddish/pinkish in color") {
        $pittaScore++;
    } elseif ($palmSoleCondition === "Delicate/small") {
        $kaphaScore++;
    }

    // Question 11: Skin Condition
    if ($skinCondition === "Dry, rough, looks like dried twig") {
        $vataScore++;
    } elseif ($skinCondition === "Delicate") {
        $pittaScore++;
    } elseif ($skinCondition === "Soft, delicate, smooth, oily (unctuous)") {
        $kaphaScore++;
    }

    // Question 12: Strength
    if ($strength === "Weak, intolerant to strenuous activities, unable to lift heavy weight, easily tired by little work") {
        $vataScore++;
    } elseif ($strength === "Medium strength") {
        $pittaScore++;
    } elseif ($strength === "Good endurance, can easily perform strenuous activities, can carry heavy loads, does not experience fatigue easily, can work all day") {
        $kaphaScore++;
    }

    // Question 13: Body Temperature
    if ($bodyTemperature === "Low, hands and feet feel cold even in summers") {
        $vataScore++;
    } elseif ($bodyTemperature === "Body feels warm all the time") {
        $pittaScore++;
    } elseif ($bodyTemperature === "Normal temperature (neither cold nor hot)") {
        $kaphaScore++;
    }

    // Question 14: Joint Condition
    if ($jointCondition === "Crepitus is heard on movements of joints") {
        $vataScore++;
    } elseif ($jointCondition === "Joints, bones cannot be seen") {
        $pittaScore++;
    } elseif ($jointCondition === "Joints are strong, well covered with muscles, bony prominences cannot be seen") {
        $kaphaScore++;
    }

    // Question 15: Body Above Stomach (Umbilicus)
    if ($bodyAboveStomach === "Stomach is lean (lean belly)") {
        $vataScore++;
    } elseif ($bodyAboveStomach === "Size of stomach is medium/optimum (medium belly)") {
        $pittaScore++;
    } elseif ($bodyAboveStomach === "Abdominal obesity (large belly)") {
        $kaphaScore++;
    }

    // Question 16: Hunger
    if ($hunger === "Irregular (sometimes intense, sometimes low hunger)") {
        $vataScore++;
    } elseif ($hunger === "Intense hunger – cannot control hunger") {
        $pittaScore++;
    } elseif ($hunger === "Low hunger – can skip one meal") {
        $kaphaScore++;
    }

    // Question 17: Digestive Capacity
    if ($digestiveCapacity === "Digestive capacity is erratic – sometimes good, sometimes low. Sometimes ingestion leads to excess burping") {
        $vataScore++;
    } elseif ($digestiveCapacity === "Very good. Food taken as per hunger gets digested in 3-4 hours and after that there is manifestation of proper hunger again.") {
        $pittaScore++;
    } elseif ($digestiveCapacity === "Low digestive capacity. Sometimes there is no desire to have food in the evening.") {
        $kaphaScore++;
    }

    // Question 18: Quantitative Food Intake
    if ($foodIntake === "Sometimes too much in quantity, sometimes too less") {
        $vataScore++;
    } elseif ($foodIntake === "Always too much (voracious eater)") {
        $pittaScore++;
    } elseif ($foodIntake === "Moderate – not too much or too less") {
        $kaphaScore++;
    }

    // Question 19: Preferred Taste
    if ($preferredTaste === "Sweet, sour, salty") {
        $vataScore++;
    } elseif ($preferredTaste === "Sweet, bitter, astringent") {
        $pittaScore++;
    } elseif ($preferredTaste === "Spicy, bitter, astringent") {
        $kaphaScore++;
    }

    // Question 20: Thirst
    if ($thirst === "Not much") {
        $vataScore++;
    } elseif ($thirst === "Excess thirst. Needs to drink more water even in cold season") {
        $pittaScore++;
    } elseif ($thirst === "Moderate") {
        $kaphaScore++;
    }

    // Question 21: Food Preference (Warm or Cold)
    if ($foodPreference === "Sometimes warm, sometimes cold") {
        $vataScore++;
    } elseif ($foodPreference === "Cold") {
        $pittaScore++;
    } elseif ($foodPreference === "Warm") {
        $kaphaScore++;
    }

    // Question 22: Beverage Preference (Warm or Cold)
    if ($beveragePreference === "Sometimes warm, sometimes cold") {
        $vataScore++;
    } elseif ($beveragePreference === "Cold") {
        $pittaScore++;
    } elseif ($beveragePreference === "Warm") {
        $kaphaScore++;
    }

    // Question 23: Constipation
    if ($constipation === "Many times") {
        $vataScore++;
    } elseif ($constipation === "Always pass liquid stools") {
        $pittaScore++;
    } elseif ($constipation === "Not much") {
        $kaphaScore++;
    }

    // Question 24: Excess Sweating
    if ($excessSweating === "Sometimes too much, sometimes too less") {
        $vataScore++;
    } elseif ($excessSweating === "Excess – excess as compared to people around") {
        $pittaScore++;
    } elseif ($excessSweating === "Sometimes") {
        $kaphaScore++;
    }

    // Question 25: Speech Pattern
    if ($speechPattern === "Very fast. Some words are not clearly spoken. Few words are not audible to people around.") {
        $vataScore++;
    } elseif ($speechPattern === "Very fast") {
        $pittaScore++;
    } elseif ($speechPattern === "Slowly. Calmly. Emphasizing on each word while speaking") {
        $kaphaScore++;
    }

    // Question 26: Walking Speed
    if ($walkingSpeed === "Brisk/rapid. Walks like one’s running") {
        $vataScore++;
    } elseif ($walkingSpeed === "Fast") {
        $pittaScore++;
    } elseif ($walkingSpeed === "Slow. Walks like an elephant stepping foot properly on the ground") {
        $kaphaScore++;
    }

    // Question 27: Daily Pace
    if ($dailyPace === "Very fast") {
        $vataScore++;
    } elseif ($dailyPace === "Medium speed") {
        $pittaScore++;
    } elseif ($dailyPace === "Very slow") {
        $kaphaScore++;
    }

    // Question 28: Reaction to Incident
    if ($reactionToIncident === "Cannot tell. Sometimes react impulsively, sometimes give no reaction.") {
        $vataScore++;
    } elseif ($reactionToIncident === "Always impulsive") {
        $pittaScore++;
    } elseif ($reactionToIncident === "Depending on the incident. Thoughtful reaction. Reacts after due thinking") {
        $kaphaScore++;
    }

    // Question 29: Daily Activity Performance
    if ($dailyActivityPerformance === "With high energy") {
        $vataScore++;
    } elseif ($dailyActivityPerformance === "With moderate energy") {
        $pittaScore++;
    } elseif ($dailyActivityPerformance === "Sometimes with low energy/lethargy") {
        $kaphaScore++;
    }

    // Question 30: Grasping Power
    if ($graspingPower === "Very quick to grasp things") {
        $vataScore++;
    } elseif ($graspingPower === "Very easy to grasp things and understands properly") {
        $pittaScore++;
    } elseif ($graspingPower === "Slow to grasp things but understands completely") {
        $kaphaScore++;
    }

    $prakriti = "Balanced";

    if ($vataScore > $pittaScore && $vataScore > $kaphaScore) {
        $prakriti = "VATA";
    } elseif ($pittaScore > $vataScore && $pittaScore > $kaphaScore) {
        $prakriti = "PITTA";
    } elseif ($kaphaScore > $vataScore && $kaphaScore > $pittaScore) {
        $prakriti = "KAPHA";
    }
?>
    
<body style="background-image:url('back2.jpg')">  <?php
echo"<script>
        // JavaScript code for displaying the SweetAlert alert and redirection
        Swal.fire({
            title: 'Your Prakriti is:',
            text:'$prakriti', // Replace with the actual Prakriti result
            icon: 'success',
            confirmButtonText: 'OK'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'find-prakruti.php'; // Redirect after clicking OK
            }
        });
    </script>";?>
  </body>
  <?php
}
?>
