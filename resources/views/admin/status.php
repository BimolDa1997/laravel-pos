
<?php 
 $manu ='';
 $sub_manu = 'status';
 $page = 'Status Pages';
include('./assets/template/header.php');
?>




<form action="" method="get">
                            <div class="container p-3 page-start">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Select Entry Point</label>
                                            <select class="form-select" aria-label="Default select example" id="single">
                                                <option></option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Date Of Arrival</label>
                                            <input type="date" class="form-control" id="example1" name="example1">
                                        </div>

                                    </div>


                                    

                                    <div class="col-sm-4">


                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Date Of Arrival</label>
                                            <input type="date" class="form-control" id="example1" name="example1">
                                        </div>

                                    </div>


                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-success me-1">SEARCH</button>
                                    </div>
                                    
                                </div>

                            </div>
</form>



                            <div class="container p-3 mt-3 page-start">
                                <!-- table 1nd start -->
                                <table class="table table-bordered w-100">
                                    <thead>
                                        <tr>
                                            <th scope="col">Product Name</th>
                                            <th scope="col">Unit</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Per Unit Value</th>
                                            <th scope="col">Total Value</th>
                                            <th scope="col">Tax(%)</th>
                                            <th scope="col">Tax Amount</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <th></th>
                                            <td></td>
                                            <td>
                                                <button type="submit" class="btn btn-primary"><i class="fa-light fa-pen-to-square"></i></button>
                                                <button type="submit" class="btn btn-danger"><i class="fa-light fa-trash"></i></button>
                                                <button type="submit" class="btn btn-success"><i class="fa-regular fa-plus"></i></button>
                                                <button type="submit" class="btn btn-warning"><i class="fa-light fa-list-dropdown"></i></button>
                                                <button type="submit" class="btn btn-info"><i class="fa-regular fa-eye"></i></button>
                                        
                                            </td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <th></th>
                                            <td></td>
                                            <td>
                                                <button type="submit" class="btn btn-primary"><i class="fa-light fa-pen-to-square"></i></button>
                                                <button type="submit" class="btn btn-danger"><i class="fa-light fa-trash"></i></button>
                                                <button type="submit" class="btn btn-success"><i class="fa-regular fa-plus"></i></button>
                                                <button type="submit" class="btn btn-warning"><i class="fa-light fa-list-dropdown"></i></button>
                                                <button type="submit" class="btn btn-info"><i class="fa-regular fa-eye"></i></button>
                                        
                                            </td>
                                        </tr>



                                    </tbody>
                                </table>


                            </div>











<?php include('./assets/template/footer.php')?>

<script>
      $("#single").select2({
          placeholder: "Please Select Single",
          allowClear: true
      });
</script>