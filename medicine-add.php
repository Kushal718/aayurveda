<?php

include 'header.php';
?>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
crossorigin="anonymous"></script>

<div class="vertical-overlay"></div>
<link href="tags-assets/typehead.css"  rel="stylesheet" />
<link href="tags-assets/bt-tags.css" rel="stylesheet">
<!-- ============================================================== -->
<script src="tags-assets/jq.js"></script>
<script src="tags-assets/typehead.js"></script>
<script src="tags-assets/bt-tags.js" type="text/javascript"></script>
<!-- Start right Content here -->
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

<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Add New Medicine</h4>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <form action="medicine-save.php" method="POST" class="needs-validation" id="useradd-form"
                  enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">

                            <div class="card-body">
                                <div class="live-preview">
                                    <div class="row gy-4">
                                        <div class="mb-3">
                                            <label for="medicineName" class="form-label">Medicine Name<span class="text-danger fs-15 "> *</span></label>
                                            <input type="text" class="form-control" id="medicineName" name="medicine_name" required>
                                        </div>
                                        <!--                                        <div class="col-xxl-3 col-md-3">
                                                                                    <label for="prakriti" class="form-label">Prakriti</label>
                                                                                    <input type="text" class="form-control" id="prakriti" name="prakriti">
                                                                                </div>-->
                                        <div class="col-xxl-3 col-md-4">
                                            <label for="season" class="form-label">Prakriti<span class="text-danger fs-15 "> *</span></label>
                                            <select class="form-select" id="prakriti" required name="prakriti">
                                                <option value="">Select</option>
                                                <option value="vata">Vata</option>
                                                <option value="pitta">Pitta</option>
                                                <option value="kapha">Kapha</option>
                                                <option value="vata/pitta">Vata/Pitta</option>
                                                <option value="vata/kapha">Vata/Kapha</option>
                                                <option value="kapha/pitta">Kapha/Pitta</option>
                                               
                                                <option value="all">All</option>
                                            </select>
                                        </div>
                                        <div class="col-xxl-3 col-md-3">
                                            <label for="age" class="form-label">Age<span class="text-danger fs-15 "> *</span></label>
                                            <input type="text" class="form-control" required id="age" name="age">
                                        </div>
                                        <div class="col-xxl-3 col-md-3">
                                            <label for="image" class="form-label">Image</label>
                                            <input type="file" accept="image/*"   class="form-control"  name="image">
                                        </div>
                                        <div class="col-xxl-3 col-md-3">
                                            <label for="gender" class="form-label">Gender<span class="text-danger fs-15 "> *</span></label>
                                            <select class="form-select" id="gender" required name="gender">
                                                <option value="">Select Applicable Gender</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                                <option value="both">Both</option>
                                            </select>
                                        </div>
                                        <div class="col-xxl-3 col-md-4">
                                            <label for="season" class="form-label">Season<span class="text-danger fs-15 "> *</span></label>
                                            <select class="form-select" id="season" required name="season">
                                                <option value="">Select</option>
                                                <option value="spring">Spring</option>
                                                <option value="summer">Summer</option>
                                                <option value="autumn">Autumn</option>
                                                <option value="winter">Winter</option>
                                                <option value="monsoon">Monsoon</option>
                                                <option value="all">All</option>
                                            </select>
                                        </div>
                                        
                                         <div class="mb-3">
                                            <label for="do_s" class="form-label">Ingredients</label>
                                           <input type="text" name="ingredients[]"  id="tags-input" data-role="tagsinput"  class="form-control"   >
                                        </div>
                                        
                                        <div class="col-xxl-3 col-md-4">
                                            <label for="dose" class="form-label">Doses<span class="text-danger fs-15 "> *</span></label>
                                            <input type="text" class="form-control" required id="dose" name="dose">
                                        </div>
                                        <!--                                        <div class="col-xxl-3 col-md-4">
                                                                                    <label for="specialCondition" class="form-label">Special Condition</label>
                                                                                    <input type="text" class="form-control" id="specialCondition" name="special_condition">
                                                                                </div>-->
                                        <div class="col-xxl-3 col-md-12">
                                            <label for="specialCondition" class="form-label">Special Condition</label>
                                            <textarea class="form-control" id="specialCondition" name="special_condition" rows="2"></textarea>
                                        </div>
                                        <div class="col-xxl-3 col-md-12">
                                            <label for="description" class="form-label">Description</label>
                                            <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                                        </div>

                                        <div class="col-xxl-3 col-md-4">
                                            <div>
                                                <button type="submit" class="btn btn-primary pe-4 mt-4">Submit</button>
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
