<?php

include 'header.php';
if(isset($_SESSION['user'])) {
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
            <form action="" class='needs-validation' id="property-form" novalidate>
                <div class="row">
                    <div class="col-lg-12 mb-4">
                        <div class="card">
                            <div class="card-body" style="background-image:url('back2.jpg');">
                                <h2 class="card-title mt-3 mb-4">Diagnosis Form</h2>
                                <hr>
                                <div id="section-1" class="form-section">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="contact-page__form-input-box">
                                                <input type="text" class="form-control"
                                                    placeholder="Enter Name of patient" name="name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="contact-page__form-input-box">
                                                <input type="text" class="form-control" placeholder="Enter Age"
                                                    name="age">
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="contact-page__form-input-box">
                                                <select class="selectpicker" id="gender" name="gender">
                                                    <option value="">Select Applicable Gender</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="contact-page__form-input-box">
                                                <select class="selectpicker" name="prakriti"
                                                    aria-label="Default select example">
                                                    <option selected>Select Prakriti</option>
                                                    <option value="vata">Vata</option>
                                                    <option value="pitta">Pitta</option>
                                                    <option value="kapha">Kapha</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="contact-page__form-input-box">
                                                <select class="selectpicker" name="season"
                                                    aria-label="Default select example">
                                                    <option value="">Select Season</option>
                                                    <option value="spring">Spring</option>
                                                    <option value="summer">Summer</option>
                                                    <option value="autumn">Autumn</option>
                                                    <option value="winter">Winter</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="contact-page__form-input-box">
                                                <input type="text" class="form-control" placeholder="Enter Height"
                                                    name="heignt">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="contact-page__form-input-box">
                                                <input type="text" class="form-control" placeholder="Enter Weight"
                                                    name="weight">
                                            </div>
                                        </div>


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
                                <div id="section-2" class="form-section" style="display: none;">
                                    <div class="row gy-4">
                                        <h5 class="card-title mt-3">Sympotms</h5>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="mt-4 mt-lg-0">

                                                    <label for="symptoms" class="form-label">Select Symptoms</label>
                                                    <select required multiple="multiple" name="symptoms[]"
                                                        id="multiselect-header">

                                                        <?php foreach ($symptoms as $symptom) { ?>
                                                        <option value="<?php echo $symptom['symptoms_id']; ?>">
                                                            <?php echo $symptom['symptoms_name']; ?></option>

                                                        <?php } ?>
                                                    </select>


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
                                                            class="thm-btn contact-page__form-btn btn-next btn-next1">Next</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="section-3" class="form-section" style="display: none;">
                                    <div class="row gy-4">

                                        <h5 class="card-title mt-3">Select Disease</h5>
                                        <div class="row">
                                            <div id="disease-results" class="contact-page__form-input-box">

                                                <!-- Results will be displayed here -->
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



                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="section-4" class="form-section" style="display: none;">
                                    <div class="row gy-4">

                                        <h5 class="card-title mt-3">Select Medicine</h5>

                                        <!-- Add this container to your HTML -->
                                        <div id="medicine-container"></div>

                                        <div class="row mt-3">
                                            <div class="col-xxl-6 col-md-6">
                                                <div>
                                                    <button type="button"
                                                        class="btn-lg btn-primary btn-prev">Previous</button>


                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-md-6">
                                                <div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="section-5" class="form-section" style="display: none;">
                                    <div class="row">
                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <button type="button"
                                                    class="btn-lg btn-primary btn-prev">Previous</button>


                                            </div>
                                        </div>
                                        <h5 class="card-title">Select Medicine</h5>

                                        <!-- Add this container to your HTML -->
                                        <div id="medicine-details-container"></div>

                                        <div class="row ">
                                            <div class="col-xxl-6 col-md-6">
                                                <div>
                                                    <button type="button"
                                                        class="btn-lg btn-primary btn-prev">Previous</button>


                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-md-6">
                                                <div>



                                                </div>
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
}
else{
    echo "<script>alert('Please Login And Try Again');</script>";

    echo "<script>window.location='index.php';</script>";
  
}
?>

<script>
$(document).ready(function() {
    $(".btn-next1").click(function() {
        var selectedSymptoms = $("#multiselect-header").val(); // Get selected symptoms
        $.ajax({
            type: "POST",
            url: "diagnosis-search_diseases.php", // PHP script to handle the request
            data: {
                symptoms: selectedSymptoms
            },

            success: function(response) {
                $("#disease-results").html(response); // Display the results in a div
            }
        });
    });
});
$(document).ready(function() {
    // Use event delegation to handle the click event for .medicine-button
    $(document).on("click", ".medicine-button", function() {
        var medicine_id = $(this).data(
            "medicine-id"); // Get the value from the clicked button's data attribute
        // alert(medicine_id);

        // Perform your AJAX request here
        $.ajax({
            type: "POST",
            url: "diagnosis-search-medicine.php", // PHP script to handle the request
            data: {
                medicine_id: medicine_id
            }, // Pass the medicine_id to the server

            success: function(response) {
                $("#medicine-container").html(response); // Display the results in a div
            },
            error: function() {
                // Handle AJAX error
                alert('Error: Unable to fetch data.');
            }
        });
    });
});
$(document).ready(function() {
    // Use event delegation to handle the click event for .medicine-button
    $(document).on("click", ".read-more-button", function() {
        var medicine_id = $(this).data(
            "medicine-id"); // Get the value from the clicked button's data attribute
        

        // Perform your AJAX request here
        $.ajax({
            type: "POST",
            url: "diagnosis-medicine-details.php", // PHP script to handle the request
            data: {
                medicine_id: medicine_id
            }, // Pass the medicine_id to the server

            success: function(response) {
                $("#medicine-details-container").html(
                response); // Display the results in a div
            },
            error: function() {
                // Handle AJAX error
                alert('Error: Unable to fetch data.');
            }
        });
    });
});


$(document).ready(function() {
    // Use event delegation to handle "Next" button clicks
    $(document).on("click", ".btn-next", function() {
        var formSections = $(".form-section");
        var currentSection = formSections.index($(this).closest(".form-section"));

        if ($('#property-form').valid()) {
            formSections.eq(currentSection).hide();
            currentSection++;
            formSections.eq(currentSection).show();
        }
    });

    // Use event delegation to handle "Previous" button clicks
    $(document).on("click", ".btn-prev", function() {
        var formSections = $(".form-section");
        var currentSection = formSections.index($(this).closest(".form-section"));

        formSections.eq(currentSection).hide();
        currentSection--;
        formSections.eq(currentSection).show();
    });
});

// for add data in session 
// $(document).ready(function () {
//     $(".btn-next").click(function () {
//         // Collect data from the form
//         var name = $("#name").val();
//         var age = $("#age").val();
//         // Add code to collect data from other form fields

//         // Send the data to the server using AJAX
//         $.ajax({
//             type: "POST",
//             url: "save_data_to_session.php", // Replace with the URL of your PHP script
//             data: {
//                 name: name,
//                 age: age,
//                 // Add other data fields here
//             },
//             success: function (response) {
//                 // Handle the server's response if needed
//                 alert("Data saved to session successfully!");
//                 // You can perform additional actions here, such as redirecting to the next page
//             },
//             error: function () {
//                 alert("Error saving data to session.");
//             }
//         });
//     });
// });
</script>