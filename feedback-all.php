<?php
include 'header.php';

$feedback = $db->query('SELECT *
FROM feedback ORDER BY feedback_id DESC');

?>

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Feedback Details</h4>

                        

                    </div>
                </div>
            </div>
            <!-- end page title -->




            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped align-middle table-nowrap" id="customerTable">
                                    <thead class="bg-primary text-white">
                                        <tr>
                                            <th>Sr.No</th>

                                            <th class="sort" data-sort="email">First Name</th>
                                            <th class="sort" data-sort="email">Last Name</th>
                                            <th class="sort" data-sort="type">Date</th>
                                            <th class="sort" data-sort="type">Email</th>
                                            <th class="sort" data-sort="type">Phone No</th>
                                            <th class="sort" data-sort="action">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list form-check-all">
                                        <tr>
                                            <?php
                                            $c = 1;
                                            foreach ($feedback as $f) {
                                                echo '<th>' . $c++ . '</th>';
                                            ?>


                                                <td class="customer_name"><?php echo $f['firstname'] ?></td>
                                                <td class="customer_name"><?php echo $f['lastname'] ?></td>
                                                <td class="customer_name"><?php  echo date('d-M-Y', strtotime($f['date'])); ?></td>
                                                <td class="customer_name"><?php echo $f['email'] ?></td>
                                                <td class="customer_name"><?php echo $f['phone_no'] ?></td>
                                                
                                                

                                                <td>
                                                    <div class="d-flex gap-2">

                                                        <div class="edit">
                                                            
                                                            <button class="btn btn-sm btn-secondary edit-item-btn" onClick="location.href = 'feedback-view.php?id=<?php echo $f['feedback_id']; ?>';"><i class="ri-eye-fill"></i></button>
                                                            
                                                        </div>
                                                        <div class="edit">
                                                            <a class="btn btn-sm btn-danger edit-item-btn" onClick="return confirm('Are You Sure Want To Delete')" href='feedback-delete.php?id=<?php echo $f['feedback_id']; ?>' ;><i class="ri-delete-bin-fill"></i></a>
                                                        </div>
                                                       


                                                    </div>
                                                </td>

                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                                <div class="noresult" style="display: none">
                                    <div class="text-center">
                                        <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                        <h5 class="mt-2">Sorry! No Result Found</h5>
                                        <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any orders for you search.</p>
                                    </div>
                                </div>
                            </div>




                        </div>
                    </div><!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end col -->
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>
