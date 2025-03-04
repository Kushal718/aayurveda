<?php
include 'header.php';
$id = $_REQUEST['id'];
$feedback = $db->get('feedback', '*', ['feedback_id' => $id]);
?>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

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
                        <h4 class="mb-sm-0">View Feedback</h4>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <script>
                function getNews() {
                    // $('#news').val($('.snow-editor').html());
                    var about = document.getElementById('data');
                    //about.value = JSON.stringify(quill.getContents());
                    about.innerHTML = quill.root.innerHTML;
                    
                    //return false;
                }
            </script>
            <form action="" onsubmit="getNews()" method="" id="projectadd-form" enctype="multipart/form-data">
                   <input type="hidden" name="feedback_id" value="<?php echo $feedback['feedback_id']; ?>">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">

                            <div class="card-body">
                                <div class="live-preview">
                                    <div class="row gy-4">
                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label"> First Name <span class="text-danger fs-15 "> *</span></label>
                                                <input class="form-control" readonly id="placeholderInput" name="firstname" required value='<?php echo $feedback['firstname']; ?>'>
                                            </div>
                                        </div>

                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label"> Last Name <span class="text-danger fs-15 "> *</span></label>
                                                <input class="form-control" readonly id="placeholderInput" name="lastname" required value='<?php echo $feedback['lastname']; ?>'>
                                            </div>
                                        </div>

                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label"> Email <span class="text-danger fs-15 "> *</span></label>
                                                <input class="form-control" readonly id="placeholderInput" name="email" required value='<?php echo $feedback['email']; ?>'>
                                            </div>
                                        </div>

                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label"> Phone-No <span class="text-danger fs-15 "> *</span></label>
                                                <input class="form-control" readonly id="placeholderInput" name="phone_no" required value='<?php echo $feedback['phone_no']; ?>'>
                                            </div>
                                        </div>

                                        
                                        <div class="col-lg-6">
                                                    <div class="input-group">
                                                        <label for="placeholderInput" class="form-label"> Message <span class="text-danger fs-15 "> *</span></label>&nbsp;&nbsp;
                                                        <textarea readonly class="form-control" id="placeholderInput" rows="4" name="message" ><?php echo $feedback['message']; ?></textarea>
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
    
    
</script>