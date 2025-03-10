<?php
include 'header.php';
$id = $_REQUEST['id'];
$feedback = $db->select("feedback", "*", ['feedback_id' => $id])[0];
?>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="../assets/js/jquery.validate.min.js" type="text/javascript"></script>


<div class="vertical-overlay"></div>


<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <form action="feedback-verify-save.php" method="POST" enctype="multipart/form-data" class="needs-validation" id="signup-form">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card p-2">

                            <div class="card-body">
                                <div class="live-preview">
                                    <div class="row gy-4">

                                        <div class="col-xxl-12 col-md-12">
                                            <h4 class="text-primary">Feedback Details</h4>
                                            <div class="border border-dashed">
                                            </div>
                                        </div>
                                        <input type="hidden" class="form-control" name="feedback_id" id="feedback_id" value="<?php echo $id; ?>" required>

                                        <div class="col-xxl-4 col-md-4">
                                            <div>
                                                <label for="placeholderInput" class="form-label">First Name</label>
                                                <input type="text" readonly class="form-control" name="firstname" value="<?php echo $feedback['firstname']; ?>" required>
                                            </div>
                                        </div>

                                        <div class="col-xxl-4 col-md-4">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Last Name</label>
                                                <input type="text" readonly class="form-control" name="lastname" value="<?php echo $feedback['lastname']; ?>" required>
                                            </div>
                                        </div>

                                        <div class="col-xxl-4 col-md-4">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Email</label>
                                                <input type="text" readonly class="form-control" name="email" value="<?php echo $feedback['email']; ?>" required>
                                            </div>
                                        </div>

                                        <div class="col-xxl-4 col-md-4">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Phone No</label>
                                                <input type="number" readonly class="form-control" name="phone_no" value="<?php echo $feedback['phone_no']; ?>" required>
                                            </div>
                                        </div>

                                        <div class="col-xxl-4 col-md-4">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Date</label>
                                                <input type="text" readonly class="form-control" name="date" value="<?php echo $feedback['date']; ?>" required>
                                            </div>
                                        </div>


                                        <div class="col-xxl-4 col-md-4">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Message</label>
                                                <input type="text" readonly class="form-control" name="message" value="<?php echo $feedback['message']; ?>" required>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        
                                        <div class='card-footer'>

                                            <button type="submit" class="btn btn-primary" style="margin-left: 45%;padding: 10px 25px;border-radius: 10px">Verify</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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

<script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/libs/simplebar/simplebar.min.js"></script>
        <script src="../assets/libs/node-waves/waves.min.js"></script>
        <script src="../assets/libs/feather-icons/feather.min.js"></script>
        <script src="../assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
        <script src="../assets/js/plugins.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

        <script src="../assets/js/jquery.validate.min.js" type="text/javascript"></script>
        <!-- password-addon init -->
        <script src="../assets/js/pages/password-addon.init.js"></script>
        <style>
            .error{

                color:Red;
            }
        </style>


<script>
     $(document).keyup(function() {
        $("#signup-form").validate({
            errorClass: 'error',
            rules: {
                
                    mobile_number: {
                        required: true,
                        maxlength: 10,
                        minlength: 10,
                        remote: {
                            url: "customer-verify-check-mobile.php",
                            type: "post",
                            data: {
                                mobile_number: function() {
                                    return $("#mobile_number").val();
                                }
                            }

                        }
                    },
                fname:{
                    required:true,

                },
                
                lname:{
                    required:true,   
                },
                permanent_address:{

                },
                email_id:{
                    
                    email: true

                }
            },
            // Specify validation error messages
            messages: {
                mobile_number: {
                    remote: "Phone number already exists, Please contact mess owner"
                }
            },
            // Make sure the form is submitted to the destination defined
            // in the "action" attribute of the form when valid
            submitHandler: function(form) {
                //alert();
                form.submit();
            }
        });

    });

    $(document).ready(function() {
        // $("#reference_id").val('1529');
        $("#reference_id").change(function() {
            if ($(this).val() == 0) {
                $('#reference_details').val('');
                $('#reference_details').focus();
            } else {
                $('#reference_details').val($("#reference_id option:selected").html());
            }

        });


    });
</script>