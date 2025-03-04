<?php
include 'header.php';
$blog_id = $_REQUEST['blog_id'];
$blogData = $db->get('blogs','*',['blog_id'=>$blog_id]);
?>

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
                        <h4 class="mb-sm-0">Update Blog</h4>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <form action="blog-update-save.php" method="POST" class="needs-validation" id="userupdate-form"
      enctype="multipart/form-data">
      <input type="hidden" class="form-control" id="blogName" name="blog_id"
                                       value="<?php echo $blogData['blog_id']; ?>" required>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="live-preview">
                        <div class="row gy-4">
                            <div class="mb-3">
                                <label for="blogName" class="form-label">Blog Name</label>
                                <input type="text" class="form-control" id="blogName" name="blog_name"
                                       value="<?php echo $blogData['blog_name']; ?>" required>
                            </div>
                            

                            <div class="col-xxl-3 col-md-4">
                                    <div>
                                        
                                        <label for="placeholderInput" class="form-label">Image</label>
                                        <input type="file" class="form-control" id="placeholderInput" placeholder="Blog image" name="blog_image" value="<?php echo $blogData['blog_image']; ?>">
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-md-4">
                                    <div>
                                        <img src="<?php echo"../images/".$blogData['blog_image']; ?>" alt="" height="100px" width="100px">
                                    </div>
                                </div>

                            
                            
                            <div class="col-xxl-3 col-md-12">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="blog_details" cols="4" rows="6"><?php echo htmlspecialchars($blogData['blog_details']); ?></textarea>
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