<?php
include 'header.php';
$db = new Database();
$id = $_REQUEST['blog_id'];
//echo $id;
//$project=$db->query("select * from projects where id=$id");
$blog = $db->get('blogs', '*', ['blog_id' => $id]);
//print_r($project);
//echo $project['id'];
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
                        <h4 class="mb-sm-0">View Blogs</h4>

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
                   <input type="hidden" name="blog_id" value="<?php echo $blog['blog_id']; ?>">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">

                            <div class="card-body">
                                <div class="live-preview">
                                    <div class="row gy-4">
                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label"> Blog Name <span class="text-danger fs-15 "> *</span></label>
                                                <input class="form-control" readonly id="placeholderInput" name="blog_name" required value='<?php echo $blog['blog_name']; ?>'>
                                            </div>
                                        </div>

                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label"> Blog Date <span class="text-danger fs-15 "> *</span></label>
                                                <input class="form-control" readonly id="placeholderInput" name="enquiry_date" required value='<?php echo $blog['blog_date']; ?>'>
                                            </div>
                                        </div>

                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label"> Blog Details <span class="text-danger fs-15 "> *</span></label>
                                                <input class="form-control" readonly id="placeholderInput" name="blog_details" required value='<?php echo $blog['blog_details']; ?>'>
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