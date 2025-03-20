
<?php 
 $manu ='';
 $sub_manu = 'report';
 $page = 'Report Pages';
include('./assets/template/header.php');
?>




<form action="report_view.php" method="get">
                            <div class="d-flex justify-content-center align-items-center ">
                                <div class="page-start report-with p-3 mt-5">
                                    <div class="row">
                                        <div class="col-sm-6">
                                        <h5>Select Report </h5>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Report 1
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Report 2
                                            </label>
                                        </div>


                                        </div>


                                        

                                        <div class="col-sm-6">

                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Item </label>
                                                <select class="form-select" aria-label="Default select example" id="single">
                                                    <option></option>
                                                    <option value="">Item One</option>
                                                    <option value="">Item Two</option>
                                                    <option value="">Item Three</option>
                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Start Date</label>
                                                <input type="date" class="form-control" id="example1" name="example1">
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">End Date</label>
                                                <input type="date" class="form-control" id="example1" name="example1">
                                            </div>

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


                                        <div class="d-flex justify-content-center">
                                            <button type="submit" class="btn btn-success me-1">REPORT</button>
                                        </div>
                                        
                                    </div>
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