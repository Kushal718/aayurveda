<?php
include 'header.php';

$medicines = $db->select('medicines', "*");
$symptoms = $db->select("symptoms", "*", ['deleted' => 0]);
?>
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

<!-- quill css -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="assets/libs/multi.js/multi.min.css" />
<link href="tags-assets/typehead.css"  rel="stylesheet" />
<link href="tags-assets/bt-tags.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
crossorigin="anonymous"></script>
<script src="tags-assets/jq.js"></script>
<script src="tags-assets/typehead.js"></script>
<script src="tags-assets/bt-tags.js" type="text/javascript"></script>
<div class="vertical-overlay"></div>

<!-- ============================================================== -->
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
                        <h4 class="mb-sm-0">Add New Disease</h4>

                    </div>
                </div>
            </div>


            <!-- end page title -->
            <form action="disease-save.php" method="POST" class="needs-validation" id=""
                  enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">

                            <div class="card-body">
                                <div class="live-preview">
                                    <div class="row gy-4">
                                        <div class="mb-3">
                                            <label for="medicineName" class="form-label">Disease Name</label>
                                            <input type="text" class="form-control" id="diseaseName" name="disease_name"
                                                   required>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mt-4 mt-lg-0">

                                                <label for="symptoms" class="form-label">Select Symptoms</label>
                                                <select required multiple="multiple" name="symptoms[]"
                                                        id="multiselect-header">

                                                    <?php foreach ($symptoms as $symptom) { ?>
                                                        <option value="<?php echo $symptom['symptoms_id']; ?>"><?php echo $symptom['symptoms_name']; ?></option>

                                                    <?php } ?>
                                                </select>


                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mt-4 mt-lg-0">
                                                <label for="" class="form-label">Select Medicines</label>


                                                <select multiple="multiple" name="medicine[]" id="multiselect-header1">
                                                    <?php foreach ($medicines as $medicine) { ?>
                                                        <option value="<?php echo $medicine['medicine_id']; ?>"><?php echo $medicine['medicine_name']; ?></option> <?php } ?>


                                                </select>

                                            </div>
                                        </div>
                                        
<!--                                        <div class="col-xxl-12 col-md-12">
                                            <div>
                                                <div class="card">
                                                    <label for="placeholderInput" class="form-label">Description<span class="text-danger fs-15 "> *</span></label>

                                                    <textarea name="description" hidden  id="data"></textarea>


                                                    <div class="news-editor" style="height: 300px;"></div>  end Snow-editor

                                                </div> end card 
                                            </div>

                                        </div>-->
                                        <div class="col-xxl-12 col-md-12">
                                            <div>
                                                <label for="" class="form-label">Description</label>
                                                <textarea name="description" id="" cols="150" rows="10"></textarea>
                                                 <div class="card-body">
                            <div class="news-editor" style="height: 300px;"></div>
                        </div> end card-body 
                                            </div> <!--

                                        </div>-->
                                        <div class="mb-3">
                                            <label for="do_s" class="form-label">Do's</label>
                                            <input type="text" name="do_s[]"  id="tags-input" data-role="tagsinput"  class="form-control"   >
                                        </div>

                                        <div class="mb-3">
                                            <label for="do_s" class="form-label">Don't</label>
                                            <input type="text" name="don_t[]"  id="tags-input" data-role="tagsinput"  class="form-control"   >
                                        </div>

                                        <input type="hidden" name="news" id="news">

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
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
    var toolbarOptions = [
        ['bold', 'italic', 'underline', 'strike'], // toggled buttons
        ['blockquote', 'code-block'],
        [{'header': 1}, {'header': 2}], // custom button values
        [{'list': 'ordered'}, {'list': 'bullet'}],
        [{'script': 'sub'}, {'script': 'super'}], // superscript/subscript
        [{'indent': '-1'}, {'indent': '+1'}], // outdent/indent
        [{'direction': 'rtl'}], // text direction
        [{'size': ['small', false, 'large', 'huge']}], // custom dropdown
        [{'header': [1, 2, 3, 4, 5, 6, false]}],
        [{'color': []}, {'background': []}], // dropdown with defaults from theme
        [{'font': []}],
        [{'align': []}],
        ["link", "image", "video"],
        ['clean'] // remove formatting button
    ];


    var quill = new Quill('.news-editor', {
        modules: {
            toolbar: toolbarOptions
        },
        placeholder: 'Compose an epic...',
        theme: 'snow'
    });

     function get_data() {
        var data = document.getElementById('data');
        data.innerHTML = quill.root.innerHTML;
    }
</script>



<?php
include 'footer.php';
?>
<script>
   

  
</script>