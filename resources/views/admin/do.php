
<?php 
 $manu ='';
 $sub_manu = 'do';
 $page = 'DO Pages';
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

                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Text Name</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected="">--Please Select--</option>
                                                <option value="1">Bangladesh</option>
                                                <option value="2">India</option>
                                                <option value="3">USA</option>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Text Name</label>
                                            <input type="text" class="form-control" id="example1" name="example1">
                                        </div>


                                    </div>


                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Text Name</label>
                                            <select class="form-select" aria-label="Default select example"  id="new_single">
                                                <option> </option>
                                                <option value="1">Bangladesh</option>
                                                <option value="2">India</option>
                                                <option value="3">USA</option>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Date Of Arrival</label>
                                            <input type="date" class="form-control" id="example1" name="example1">
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Text Name</label>
                                            <input type="file" class="form-control" id="example1" name="example1">
                                        </div>


                                    </div>


                                    

                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Text Name</label>
                                            <select class="form-select" aria-label="Default select example"  id="multiple" multiple>
                                                <option> </option>
                                                <option value="1">Bangladesh</option>
                                                <option value="2">India</option>
                                                <option value="3">USA</option>
                                            </select>
                                            
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Date Of Arrival</label>
                                            <input type="date" class="form-control" id="example1" name="example1">
                                        </div>

                                        <div class="mb-3">
                                            <div class="form-floating">
                                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                                <label for="floatingTextarea2">Comments</label>
                                            </div>
                                        </div>


                                    </div>




                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-success me-1">SUBMIT</button>
                                        <button type="submit" class="btn btn-primary ms-1"> UPDATE </button>
                                    </div>
                                    
                                </div>

                            </div>
</form>



<form action="" method="get">



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
                                            <td>
                                                <select class="form-control" aria-label="Default select example" id="item">
                                                    <option> </option>
                                                    <option value="1">Item number 1</option>
                                                    <option value="2">Item number 2</option>
                                                    <option value="3">Item number 3</option>
                                                    <option value="4">Item number 4</option>
                                                    <option value="5">Item number 5</option>
                                                </select>
                                            </td>
                                            <td><input type="text" id="" name="" value="" class="form-control" /></td>
                                            <td><input type="text" id="" name="" value="" class="form-control" /></td>
                                            <td><input type="text" id="" name="" value="" class="form-control" /></td>
                                            <td><input type="text" id="" name="" value="" class="form-control" /></td>
                                            <th><input type="text" id="" name="" value="" class="form-control" /></th>
                                            <td><input type="text" id="" name="" value="" class="form-control" /></td>
                                            <td><button type="submit" class="btn btn-success"><i class="fa-regular fa-plus"></i></button></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- table 2nd start -->
                                <table class="table table-bordered table-success table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Product Name</th>
                                            <th scope="col">Unit</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Value</th>
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
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th colspan="5" class="text-end"> Total Tax Amount</th>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>





                                <div class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-primary ms-1">SUBMIT</button>
                                    <button type="button" class="btn btn-success ms-1">UPDATE</button>
                                    <button type="button" class="btn btn-danger ms-1">CANCEL</button>
                                </div>
                                    
                            </div>

</form>










<?php include('./assets/template/footer.php')?>

<script>
      $("#single").select2({
          placeholder: "Please Select Single",
          allowClear: true
      });

      $("#new_single").select2({
          placeholder: "Please Select Single",
          allowClear: true
      });

      $("#item").select2({
          placeholder: "Please Select item",
          allowClear: true
      });

      $("#multiple").select2({
          placeholder: "Please Select Multiple",
          allowClear: true
      });
</script>