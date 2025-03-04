<?php
include 'header.php';
$symptoms = $db->select("symptoms", "*");
?>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">ADD NEW EXPENSES</h4>



                    </div>
                </div>
            </div>


            <div class="card">
                <div class="card-body">
                    <div class="card-body bg-primary rounded-3 text-white">
                        <form action="symptoms-save.php" method="POST" class="needs-validation" novalidate>

                            <div class="live-preview">
                                <div class="row gy-4">

                                    
                                    
                                    <div class="col-xxl-5 col-md-4">
                                        <div>
                                            <label for="placeholderInput" class="form-label">Symptoms<span class="text-white fs-15 "> *</span></label>
                                            <input type="text" placeholder="Enter Symptoms" required class="form-control " id="amount" name="symptoms">
                                        </div>
                                    </div>

                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="placeholderInput" class="form-label">Details</label>
                                            <input type="text" placeholder="Enter Symptoms Description" class="form-control" id="details" name="details">
                                        </div>
                                    </div>
                                    <div class="col-xxl-1 col-md-2">
                                        <div>
                                            <button type="submit" class="btn btn-secondary  btn-block  mt-4" value="submit" name="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                                <!--end row-->
                            </div>
                        </form>


                    </div>
                    <br><br>

                    <div class="card border border-1 border-primary">

                        <div class="card-body">
                            <div class="row">

                                <div>
                                    <h4 class="mb-sm-0">Symptoms</h4>
                                </div>
                            </div>
                            <br>
                            <table class='table table-hover' style="margin-top: 0px;">
                                <tr class="">                                   
                                    <th>Sr No</th>
                                    <th>Symptoms Name</th>
                                    <th>Details</th>
                                    
                                     <th>Action</th>
                                </tr>
                                <tbody>
                                    <?php
                                    $count = 1;
                                    
                                    if (sizeof($symptoms)) {
                                        
                                        foreach ($symptoms as $symptoms) { ?>
                                            <tr>

                                                <td class="user_name"><?php echo show_date($expense['date']); ?></td>
                                                <td class="user_name"><?php echo $symptoms['symptoms_name']; ?></td>
                                                <td class="user_name"><?php echo $symptoms['description']; ?></td>
                                                
                                                 <td>
                                                    <a class="btn btn-sm btn-success remove-item-btn" onClick="location.href = 'receipt-update.php?receipt_id = <?php echo $receipt['receipt_id'];
                                            ?>';">Edit</a>
                                        <a class="btn btn-sm btn-danger remove-item-btn" onClick="return confirm('Are you sure want to delete mess?');" href='receipt-delete.php?receipt_id=<?php echo $receipt['receipt_id']; ?>&customer_id=<?php echo $customer_mess_id; ?>'>Delete</a>

                                        </td> 

                                            </tr>
                                            <?php
                                        }
                                        ?> <tr bgcolor="lightblue">
                                            <th colspan='3'>Total</th>
                                            <td colspan='' ><b><?php echo $total; ?></b></td>
                                            <th></th>
                                        </tr>
                                        <?php
                                    } else {
                                        echo "<tr><th colspan='7' class='text-center'>Nothing to display.</th></tr>";
                                    }
                                    ?>


                                </tbody>

                            </table>
                        </div>
                    </div>


                </div>
            </div>



        </div>
        <!--end row-->

    </div><!-- container-fluid -->
</div><!-- End Page-content -->

<script>
    $(document).ready(function () {
        // Hide/show options based on selection in the Supplier select tag
        $('#supplier_id').change(function () {
            var selectedValue = $(this).val();
            if (selectedValue === '0') {
                $('#type_id option[value="credit"]').hide();
            } else {
                $('#type_id option[value="credit"]').show();
            }
        });

        // Hide/show options based on selection in the Type select tag
        $('#type_id').change(function () {
            var selectedValue = $(this).val();
            if (selectedValue === 'credit') {
                $('#supplier_id option[value="0"]').hide();
            } else {
                $('#supplier_id option[value="0"]').show();
            }
        });

        // Trigger the change event on page load to initialize the visibility of options
        $('#supplier_id').trigger('change');
        $('#type_id').trigger('change');
    });

</script>
<?php
include 'footer.php';
?>
<script>
    $(document).ready(function () {
        $('a[data-bs-toggle="tab"]').on('show.bs.tab', function (e) {
            localStorage.setItem('activeTab', $(e.target).attr('href'));
        });
        var activeTab = localStorage.getItem('activeTab');
        if (activeTab) {
            $('#myTab a[href="' + activeTab + '"]').tab('show');
            set_focus(activeTab);
        }
        $('a[data-bs-toggle="tab"]').on('shown.bs.tab', function (e) {
            set_focus($(e.target).attr('href'));
        });

        function set_focus(type) {
            //alert(type);
            setTimeout(function () {
                if (type == "#mess") {
                    $('#start_date').focus().select();
                } else if (type == "#receipt") {
                    $('#date').select().focus();
                } else if (type == "#credit") {
                    $('#credit_date').focus().select();
                } else if (type == "#receipt") {
                    $('#start_date').focus();
                }


            }, 500);
        }

        $('body').hotKey({
            key: 'o',
            modifier: 'alt'
        }, function () {
            $('#myTab a[href="#overview"]').tab('show');

        });
        $('body').hotKey({
            key: 'm',
            modifier: 'alt'
        }, function () {
            $('#myTab a[href="#mess"]').tab('show');
        });
        $('body').hotKey({
            key: 'r',
            modifier: 'alt'
        }, function () {
            $('#myTab a[href="#receipt"]').tab('show');
        });
        $('body').hotKey({
            key: 'c',
            modifier: 'alt'
        }, function () {
            $('#myTab a[href="#credit"]').tab('show');
        });


    });
</script>
