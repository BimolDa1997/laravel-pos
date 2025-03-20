
<?php 
 $manu ='single_dropdown';
 $sub_manu = 'input';
 $page = 'All Input Pages';
include('./assets/template/header.php');
?>


                            <div class="container p-3 page-start">
                                <h5 class="fw-bold text-center">This Is All Input Type in One Pages</h5>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Simple Select Entry Point</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option></option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Single Select Entry Point</label>
                                            <select class="form-select" aria-label="Default select example" id="single">
                                                <option></option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Multiple Select Entry Point</label>
                                            <select class="form-select" aria-label="Default select example" id="multiple" multiple>
                                                <option></option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>


                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Input type text</label>
                                            <input type="text" class="form-control" id=" " name=" ">
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Input type Date</label>
                                            <input type="date" class="form-control" id=" " name=" ">
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Input type Time</label>
                                            <input type="time" class="form-control" id="" name="">
                                        </div>
                                        
                                        
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Input type Month</label>
                                            <input type="month" class="form-control" id="" name="">
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Input type Number</label>
                                            <input type="number" class="form-control" id="" name="">
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Input type Color</label>
                                            <input type="color" class="form-control" id="" name="">
                                        </div> 

                      
                                    </div>


                                    <div class="col-sm-6">


                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Input type Password</label>
                                            <input type="password" class="form-control" id="" name="">
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Input type Email</label>
                                            <input type="email" class="form-control" id="" name="">
                                        </div>


                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Input type File</label>
                                            <input type="file" class="form-control" id="" name="">
                                        </div>


                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Input type Image</label>
                                            <input type="image" class="form-control" id="" name="">
                                        </div>

                                        

                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Input type Url</label>
                                            <input type="url" class="form-control" id="" name="">
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Input type Tel</label>
                                            <input type="tel" class="form-control" id="" name="">
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Input type Reset</label>
                                            <input type="reset" class="form-control" id="" name="">
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Input type Range</label>
                                            <input type="range" class="form-control" id="" name="">
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Default radio
                                            </label>
                                        </div>

                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                            <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
                                        </div>

                                    </div>
                                    
                                </div>

                            </div>

<?php include('./assets/template/footer.php')?>

<script>
      $("#single").select2({
          placeholder: "Please Select Single",
          allowClear: true
      });

      $("#multiple").select2({
          placeholder: "Please Select Multiple",
          allowClear: true
      });
</script>