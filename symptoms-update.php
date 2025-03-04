<?php
include 'header.php';
$symptoms_id=$_REQUEST['id'];
$symptoms = $db->get("symptoms", "*",['symptoms_id'=>$symptoms_id]);
//print_r($symptoms);
?>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Update Symptoms</h4>



                    </div>
                </div>
            </div>


            <div class="card">
                <div class="card-body">
                    <div class="card-body bg-primary rounded-3 text-white">
                        <form action="symptoms-update-save.php" method="POST" class="needs-validation"  novalidate>
                            <input type="hidden" placeholder="Enter Symptoms" required class="form-control " id="symptoms_id" name="symptoms_id" value="<?php echo $symptoms['symptoms_id']; ?>">
                            <div class="live-preview">
                                <div class="row gy-4">



                                    <div class="col-xxl-5 col-md-4">
                                        <div>
                                            <label for="placeholderInput" class="form-label">Symptoms<span class="text-white fs-15 "> *</span></label>
                                            <input type="text" placeholder="Enter Symptoms" required class="form-control " id="amount" name="symptoms" value="<?php echo $symptoms['symptoms_name']; ?>">
                                        </div>
                                    </div>

                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="placeholderInput" class="form-label">Details</label>
                                            <input type="text" placeholder="Enter Symptoms Description" class="form-control" id="details" name="details" value="<?php echo $symptoms['details']; ?>">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-xxl-3 col-md-4">
                                            <div>
                                                <button type="button" class="btn btn-primary btn-next">Next</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end row-->
                            </div>
                        </form>


                    </div>
                    
                </div>
            </div>



        </div>
        <!--end row-->

    </div><!-- container-fluid -->
</div><!-- End Page-content -->

<?php
include 'footer.php';
?>

