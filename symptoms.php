<?php
include 'header.php';
$symptoms = $db->select("symptoms", "*",['deleted'=>0]);
?>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Add New Symptoms</h4>



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

                                        foreach ($symptoms as $symptoms) {
                                            ?>
                                            <tr>

                                                <td class="user_name"><?php echo $count++; ?></td>
                                                <td class="user_name"><?php echo $symptoms['symptoms_name']; ?></td>
                                                <td class="user_name"><?php echo $symptoms['details']; ?></td>

                                                <td>
                                                    <a class="btn btn-sm btn-success remove-item-btn" onClick="location.href='symptoms-update.php?id=<?php echo $symptoms['symptoms_id']; ?>';">Edit</a>
                                                    <a class="btn btn-sm btn-danger remove-item-btn" onClick="return confirm('Are you sure want to delete Symptoms?');" href='symptoms-delete.php?id=<?php echo $symptoms['symptoms_id']; ?>'>Delete</a>

                                                </td> 

                                            </tr>
                                            <?php
                                        }
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

<?php
include 'footer.php';
?>

