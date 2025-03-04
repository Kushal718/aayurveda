<?php
include 'header.php';

$diseases = $db->select('diseases', "*");

//print_r($user);
?> 
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Diseases</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">

                                <li class="breadcrumb-item active">
                                    <a href='disease-add.php' class=" btn btn-sm btn-primary text-white">
                                        <i class="ri-add-line align-bottom me-1"></i> Add New Disease
                                    </a>
                                </li>
                            </ol>
                        </div>

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
                                            <th class="sort" data-sort="email">Disease Name</th>
                                            <!-- <th class="sort" data-sort="action">Action</th> -->

                                         <th class="sort" data-sort="type">Description</th>
                                          <th class="sort" data-sort="type">Do's</th>
                                           <th class="sort" data-sort="type">Don'ts</th>
                                            <th class="sort" data-sort="type">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody >
                                        <?php
                                        $c = 1;
                                        foreach ($diseases as $disease) {

                                            echo "<tr class='$c'>";
                                            echo '<th>' . $c++ . '</th>';
                                            ?>


                                        <td class=""><?php echo $disease['disease_name'] ?></td>
                                        

                                       
                                         
                                            <td class=""><?php echo $disease['description'] ?></td>
                                             <td class=""><?php echo $disease['do_s'] ?></td>
                                              <td class=""><?php echo $disease['don_t'] ?></td>
                                        <td>
                                            
                                        <div class="d-flex gap-2">
                                                        <div class="edit">
                                                            <button class="btn btn-sm btn-success edit-item-btn" onClick="location.href = 'disease-update.php?disease_id=<?php echo $disease['disease_id']; ?>';" data-bs-toggle="modal" data-bs-target="#showModal" >Edit</button>
                                                        </div>
                                                        <div class="remove">
                                                            <button class="btn btn-sm btn-danger remove-item-btn" onClick="location.href = 'disease-delete.php?disease_id=<?php echo $disease['disease_id']; ?>';"  >Remove</button>
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