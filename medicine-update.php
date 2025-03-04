<?php
include 'header.php';
$medicine_id = $_REQUEST['medicine_id'];
$medicineData = $db->get('medicines','*',['medicine_id'=>$medicine_id]);
?>
<link href="tags-assets/typehead.css"  rel="stylesheet" />
<link href="tags-assets/bt-tags.css" rel="stylesheet">
<!-- ============================================================== -->
<script src="tags-assets/jq.js"></script>
<script src="tags-assets/typehead.js"></script>
<script src="tags-assets/bt-tags.js" type="text/javascript"></script>
<style>
    .twitter-typeahead {
        display:initial !important;
    }
    .bootstrap-tagsinput {
        line-height:40px;
        display:block !important;
    }
    .bootstrap-tagsinput .tag {
        background:#09F;
        padding:5px;
        border-radius:4px;
    }
    .tt-hint {
        top:2px !important;
    }
    .tt-input{
        vertical-align:baseline !important;
    }
    .typeahead {
        border: 1px solid #CCCCCC;
        border-radius: 4px;
        padding: 8px 12px;
        width: 300px;
        font-size:1.5em;
    }
    .tt-menu {
        width:300px;
    }
    span.twitter-typeahead .tt-suggestion {
        padding: 10px 20px;
        border-bottom:#CCC 1px solid;
        cursor:pointer;
    }
    span.twitter-typeahead .tt-suggestion:last-child {
        border-bottom:0px;
    }
    .demo-label {
        font-size:1.5em;
        color: #686868;
        font-weight: 500;
    }
    .bgcolor {
        max-width: 440px;
        height: 200px;
        background-color: #c3e8cb;
        padding: 40px 70px;
        border-radius:4px;
        margin:20px 0px;
    }

</style>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>

<div class="vertical-overlay"></div>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Update Medicine</h4>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <form action="medicine-update-save.php" method="POST" class="needs-validation" id="userupdate-form"
      enctype="multipart/form-data">
      <input type="hidden" class="form-control" id="medicineName" name="medicine_id"
                                       value="<?php echo $medicineData['medicine_id']; ?>" required>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="live-preview">
                        <div class="row gy-4">
                            <div class="mb-3">
                                <label for="medicineName" class="form-label">Medicine Name</label>
                                <input type="text" class="form-control" id="medicineName" name="medicine_name"
                                       value="<?php echo $medicineData['medicine_name']; ?>" required>
                            </div>
                            <div class="col-xxl-3 col-md-3">
                                <label for="prakriti" class="form-label">Prakriti</label>
                                <input type="text" class="form-control" id="prakriti" name="prakriti"
                                       value="<?php echo htmlspecialchars($medicineData['prakriti']); ?>">
                            </div>
                            <div class="col-xxl-3 col-md-3">
                                <label for="age" class="form-label">Age</label>
                                <input type="number" class="form-control" id="age" name="age"
                                       value="<?php echo $medicineData['age']; ?>">
                            </div>
                            <div class="col-xxl-3 col-md-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" accept="image/*" class="form-control" name="image">
                            </div>
                            <div class="col-xxl-3 col-md-3">
                            <?php if ($medicineData['image']!=null) { ?>
                                        <img src="../images/<?php echo $medicineData['image']; ?>" width="50px" height="50px">
                                    <?php } else { ?>
                                        <img src="assets/dfl.jfif" width="50px" height="50px">
                                    <?php } ?>  
                                    </div>   
                            <div class="col-xxl-3 col-md-3">
                                <label for="gender" class="form-label">Gender</label>
                                <select class="form-select" id="gender" name="gender">
                                    <option value="male" <?php if ($medicineData['gender'] === 'male') echo 'selected'; ?>>Male</option>
                                    <option value="female" <?php if ($medicineData['gender'] === 'female') echo 'selected'; ?>>Female</option>
                                    <option value="other" <?php if ($medicineData['gender'] === 'other') echo 'selected'; ?>>Other</option>
                                </select>
                            </div>
                            <div class="col-xxl-3 col-md-4">
                                <label for="season" class="form-label">Season</label>
                                <select class="form-select" id="season" name="season">
                                    <option value="spring" <?php if ($medicineData['season'] === 'spring') echo 'selected'; ?>>Spring</option>
                                    <option value="summer" <?php if ($medicineData['season'] === 'summer') echo 'selected'; ?>>Summer</option>
                                    <option value="autumn" <?php if ($medicineData['season'] === 'autumn') echo 'selected'; ?>>Autumn</option>
                                    <option value="winter" <?php if ($medicineData['season'] === 'winter') echo 'selected'; ?>>Winter</option>
                                </select>
                            </div>
                            <div class="col-xxl-3 col-md-4">
                                <label for="specialCondition" class="form-label">Special Condition</label>
                                <input type="text" class="form-control" id="specialCondition" name="special_condition"
                                       value="<?php echo htmlspecialchars($medicineData['special_condition']); ?>">
                            </div>
                            <div class="col-xxl-3 col-md-4">
                                <label for="dose" class="form-label">Dose</label>
                                <input type="text" class="form-control" id="dose" name="dose"
                                       value="<?php echo htmlspecialchars($medicineData['dose']); ?>">
                            </div>
                            <div class="col-xxl-3 col-md-12">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="4"><?php echo htmlspecialchars($medicineData['description']); ?></textarea>
                            </div>
                            <div class="mb-3">
                                            <label for="do_s" class="form-label">Ingredients</label>
                                           <input type="text" name="ingredients[]"  id="tags-input" data-role="tagsinput"  value=<?php echo $medicineData['ingredients'];?> class="form-control"   >
                                        </div>
                            <div class="col-xxl-3 col-md-4">
                                <div>
                                    <button type="submit" class="btn btn-primary pe-4 mt-4">Update</button>
                                </div>
                            </div>
                        </div>
                        <!--end row-->
                    </div>
                </div>
            </div>
        </div>
        <!--end col-->
    </div>
</form>
            <!--end row-->


            <!--end col-->
        </div>
        <!--end row-->

    </div> <!-- container-fluid -->
</div><!-- End Page-content -->
<?php
include 'footer.php';
?>
<script>
    $(document).ready(function () {

        $("#useradd-form").validate({
            rules: {
                name: {
                    required: true

                },
                mobile_number: {
                    required: true,
                    maxlength: 10,
                    minlength: 10,
                    remote: {
                        url: "user-check-mobile.php",
                        type: "post",
                        data:
                        {
                            mobile_number: function () {
                                return $("#mobile_number").val();
                            }
                        }

                    }
                },
                birth_date: {
                    required: true
                },
                can_login: {
                    required: true
                },
                type: {
                    required: true
                },
                salary: {
                    required: true
                }

            },
            // Specify validation error messages
            messages:
            {
                mobile_number:
                {
                    remote: "Phone number already exists."
                },
                type:
                {
                    remote: "You must define type of employee"
                },
                can_login:
                {
                    remote: "you must specify rights of an emplyee toi maintain security"
                }
            },
            // Make sure the form is submitted to the destination defined
            // In the "action" attribute of the form when valid
            submitHandler:
                function (form) {
                    form.submit();
                }
        });
    });
</script>