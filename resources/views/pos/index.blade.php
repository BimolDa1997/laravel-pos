<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/pos/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css"></link>
    <title>DShop</title>
</head>
<body>
    <div class="contaier"> 
        <div class="left-main">
            <nav class="leftMainNav">
                <div class="leftMainNavLeft">
                    <a id="holdSaleBtn"><img src="./assets/folder-open-solid.svg" alt=""> Open Hold Sales</a>
                    <select name="language" id="">
                        <option value="">English</option>
                        <option value="">Bangla</option>
                    </select>
                </div>
                <div class="leftMainNavRight">
                    <a id="calculatorModalBtn"><img src="./assets/calculator-solid.svg" alt=""> Calculator</a>
                </div>
            </nav>
            <div class="left-div">
                <div class="cart-form">
                    <select name="employee" id="">
                        <option value="">Select Employee</option>
                    </select>
                    <select name="customer" id="">
                        <option value="walkInCustomer">Walk-in Customer</option>
                        <option value="walkInCustomer">Regular Customer</option>
                    </select>
                    <a href="#"><img src="./assets/pencil-solid.svg" alt=""></a>
                    <a href="#"><img src="./assets/square-plus-solid.svg" alt=""></a>
                </div>
                <div class="item-list">
                    <table>
                        <tr>
                            <th>Item</th>
                            <th>Peice</th>
                            <th>Qty/Amt</th>
                            <th>Discount</th>
                            <th>Total</th>
                        </tr>
                        <tr>
                            <td><span><img src="./assets/pencil-solid.svg" alt=""></span> Civox-vet 100ml (00001046)</td>
                            <td>tk 230.00</td>
                            <td><span><img src="./assets/minus-solid.svg" alt="-"></span>1.00 <span><img src="./assets/plus-solid.svg" alt="+"></span> Pcs</td>
                            <td><input type="text"></td>
                            <td>tk 230.00 <span><img src="./assets/xmark.svg" alt=""></span></td>
                        </tr>
                        <tr>
                            <td><span><img src="./assets/pencil-solid.svg" alt=""> </span> Civox-vet 100ml (00001046)</td>
                            <td>tk 230.00</td>
                            <td><span><img src="./assets/minus-solid.svg" alt="-"></span>1.00 <span><img src="./assets/plus-solid.svg" alt="+"></span> Pcs</td>
                            <td><input type="text"></td>
                            <td>tk 230.00 <span><img src="./assets/xmark.svg" alt=""></span></td>
                        </tr>
                    </table>
                </div>
                <div class="details">
                    <div class="details-left">
                        Total Item: <span>1</span> <span><img src="./assets/calendar-days-solid.svg" alt=""></span> <span><img src="./assets/file-lines-solid.svg" alt=""></span>
                        <input type="text" value="21221">
                    </div>
                    <div class="details-right">
                        <p>Sub Total    <span>tk 230.00</span></p>
                        <p>Discount    <input type="text"></p>
                        <p><span></span><span>tk 230.00</span></p>
                        <p>Total Dicount    <span>tk 0.00</span></p>
                        <p>Shipping/Other    <input type="text"></p>
                        <p>Total Payable    <span>tk 230.00</span></p>
                    </div>
                </div>
                <div class="cart-action">
                    <a><img src="./assets/xmark.svg" alt=""> Cancel</a>
                    <a id="holdModalBtn"><img src="./assets/hand-back-fist-solid.svg" alt=""> Hold</a>
                    <a id="finalizeSaleBtn"><img src="./assets/money-bill-1-solid.svg" alt=""> Payment</a>
                </div>
            </div>
        </div>
        <div class="right-main">
            <nav class="rightMainNav">
                <a id="allSalesBtn"><img src="./assets/clock-rotate-left-solid.svg" alt=""> Your All Sales</a>
                <a href="#"><img src="./assets/square-caret-left-solid.svg" alt=""> Back</a>
                <a href="#"><img src="./assets/right-from-bracket-solid.svg" alt=""> Logout</a>
                <a href="superadmin"><img src="./assets/right-from-bracket-solid.svg" alt=""> Admin</a>
            </nav>
            <div class="right-div">
                <div class="filter-form">
                    <form action="">
                        <input type="text" name="search" id="" placeholder="Name or Code or Catagory">
                        <input type="text" name="barcode" id="" placeholder="Barcode">
                        <a id="addItemModalBtn"><img src="./assets/square-plus-solid.svg" alt=""></a>
                    </form>
                </div>
                <div class="right-div-content">
                    <div class="filters">
                        <a href="#">All</a>
                        <a href="#">Demo</a>
                        <a href="#">Chicks</a>
                        <a href="#">Medicin</a>
                        <a href="#">Cattle Medicin</a>
                        <a href="#">Feed</a>
                        <a href="#">Pot</a>
                        <a href="#">Morgi</a>
                        <a href="#">test</a>
                    </div>
                    <div class="products">
                        <div class="product-card">
                            <p class="price">tk 200</p>
                            <img src="./assets/product_img.jpg" alt="">
                            <h4>Civox-vet 100ml (0000104689589)</h4>
                        </div>
                        <div class="product-card">
                            <p class="price">tk 200</p>
                            <img src="./assets/product_img.jpg" alt="">
                            <h4>Civox-vet 100ml (0000104689589)  asadas sdsds sdsd</h4>
                        </div><div class="product-card">
                            <p class="price">tk 200</p>
                            <img src="./assets/product_img.jpg" alt="">
                            <h4>Civox-vet 100ml (0000104689589)</h4>
                        </div><div class="product-card">
                            <p class="price">tk 200</p>
                            <img src="./assets/product_img.jpg" alt="">
                            <h4>Civox-vet 100ml (0000104689589)</h4>
                        </div><div class="product-card">
                            <p class="price">tk 200</p>
                            <img src="./assets/product_img.jpg" alt="">
                            <h4>Civox-vet 100ml (0000104689589)</h4>
                        </div><div class="product-card">
                            <p class="price">tk 200</p>
                            <img src="./assets/product_img.jpg" alt="">
                            <h4>Civox-vet 100ml (0000104689589)</h4>
                        </div><div class="product-card">
                            <p class="price">tk 200</p>
                            <img src="./assets/product_img.jpg" alt="">
                            <h4>Civox-vet 100ml (0000104689589)</h4>
                        </div><div class="product-card">
                            <p class="price">tk 200</p>
                            <img src="./assets/product_img.jpg" alt="">
                            <h4>Civox-vet 100ml (0000104689589)</h4>
                        </div><div class="product-card">
                            <p class="price">tk 200</p>
                            <img src="./assets/product_img.jpg" alt="">
                            <h4>Civox-vet 100ml (0000104689589)</h4>
                        </div><div class="product-card">
                            <p class="price">tk 200</p>
                            <img src="./assets/product_img.jpg" alt="">
                            <h4>Civox-vet 100ml (0000104689589)</h4>
                        </div><div class="product-card">
                            <p class="price">tk 200</p>
                            <img src="./assets/product_img.jpg" alt="">
                            <h4>Civox-vet 100ml (0000104689589)</h4>
                        </div><div class="product-card">
                            <p class="price">tk 200</p>
                            <img src="./assets/product_img.jpg" alt="">
                            <h4>Civox-vet 100ml (0000104689589)</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modals -->
    <!-- "All Sales modal" -->
    <div class="all-sales-modal" id="allSalesModalId">
        <div class="allSalesModal">
            <div class="allSalesModalHeading">
                <h3>Your All Sales</h3> <span class="allSalesModalIdClose" id="allSalesModalIdClose"><img src="./assets/xmark.svg" alt="X"/></span>
            </div>
            <hr>
            <div class="allSalesModalContent">
                <div class="allSalesModalList">
                    <div class="allSalesModalListFilter">
                        <input type="text" placeholder="Date" onfocus="(this.type='date')">
                        <select name="customerType" id="">
                            <option value="walkInCustomer">Walk-in Customer</option>
                            <option value="walkInCustomer">Regular Customer</option>
                        </select>
                    </div>
                    <div class="allSalesModalListItems">
                        <table>
                            <tr>
                                <th>Sale No</th>
                                <th>Customer</th>
                                <th>Date Time</th>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="allSalesModalDetails">
                    <div class="allSalesModalDetailsFilter">
                        <form action="">
                            <input type="text" placeholder="Invoice No"> <input type="button" value="Search">
                        </form>
                    </div>
                    <div class="allSalesModalDetailsContent">
                        <h3>Sale Details</h3>
                        <p>Invouce No: <span></span></p>
                        <p>Customer: <span></span></p>
                        <div class="allSalesModalDetailsContentTable">
                            <table>
                                <tr>
                                    <th>Item</th>
                                    <th>Price</th>
                                    <th>Qty</th>
                                    <th>Discount</th>
                                    <th>Total</th>
                                </tr>
                            </table>
                        </div>
                        <div class="allSalesModalDetailsContentDetails">
                            <div class="allSalesModalDetailsContentDetailsTotal">
                                Total Items: <span>0</span>
                            </div>
                            <div class="allSalesModalDetailsContentDetailsInfo">
                                <p>Sub Total    <span>tk 0.00</span></p>
                                <p>Discount    <span></span></p>
                                <p><span></span><span>0.00</span></p>
                                <p>Total Dicount    <span>tk 0.00</span></p>
                                <p>Shipping/Other    <span>tk 0.00</span></p>
                                <p>Total Payable    <span>tk 0.00</span></p>
                                <p>Paid Amount    <span>tk 0.00</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="allSalesModalDetailsActions">
                        <a href="#">Print Invoice</a>
                        <a href="#">Delete</a>
                        <a id="allSalesModalIdCloseBtn">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- "Hold modal" -->
    <div class="hold-modal" id="holdModalId">
        <div class="holdModal">
            <h3>Hold</h3>
            <hr>
            <p>Hold Number <span style="color:red">*</span></p>
            <input type="text" value="2">
            <div class="holdModalActionBtns">
                <a href="#">Submit</a>
                <a id="holdModalIdCloseBtn">Cancel</a>
            </div>
        </div>
    </div>


    <!-- "FinalizeModal" -->
    <div class="finalize-sale-modal" id="finalizeSaleModalId">
        <div class="finalizeSaleModal">
            <h3>Finalize Sale</h3>
            <hr>
            <div class="finalizeSaleModalDetail">
                <div class="finalizeSaleModalDetailLeft">
                    <p>Previous Due</p>
                    <p>Grand Total</p>
                    <p>Total Payable</p>
                </div>
                <div class="finalizeSaleModalDetailRight">
                    <p>tk 0.00</p>
                    <p>tk 540.00</p>
                    <p>tk 540.00</p>
                </div>
            </div>
            <hr class="finalizeSaleModalHr">
            <div class="finalizeSaleModalAdjustments">
                <div class="finalizeSaleModalAdjustmentsTop">
                    <div class="finalizeSaleModalAdjustmentsTopPaid">
                        <p>Paid Amount</p>
                        <input type="text" value="540.00">
                    </div>
                    <div class="finalizeSaleModalAdjustmentsTopDue">
                        <p>Due Amount</p>
                        <input type="text">
                    </div>
                </div>
                <div class="finalizeSaleModalAdjustmentsMiddle">
                    This section just to help
                </div>
                <div class="finalizeSaleModalAdjustmentsBottom">
                    <div class="finalizeSaleModalAdjustmentsBottomLeft">
                        <p>Given Amount</p>
                        <input type="text">
                        <p>Account</p>
                    </div>
                    <div class="finalizeSaleModalAdjustmentsBottomRight">
                        <p>Change Amount</p>
                        <input type="text"><br>
                        <select name="" id="">
                            <option>Cash</option>
                        </select>
                    </div>
                </div>
            </div>
            <hr class="finalizeSaleModalHr">
            <div class="finalizeSaleModalCheckMarks">
                <div class="finalizeSaleModalCheckMarksLeft">
                    <input type="checkbox" name="" id=""> Send Invouce Via SMS
                </div>
                <div class="finalizeSaleModalCheckMarksRight">
                    <input type="checkbox" name="" id=""> Send Invouce Via Email
                </div>
            </div>
            <div class="finalizeSaleModalNote">
                <p>Account Note</p>
                <textarea id="" name=""></textarea>
            </div>
            <div class="finalizeSaleModalActionBtns">
                <a href="#">Submit</a>
                <a id="finalizeSaleModalCloseBtns">Cancel</a>
            </div>
        </div>
    </div>

    <!-- "Hold Sales modal" -->
    <div class="hold-sales-modal" id="holdSalesModalId">
        <div class="holdSalesModal">
            <div class="holdSalesModalHeading">
                <h3>Hold Sales</h3> <span class="holdSalesModalIdClose" id="holdSalesModalIdClose"><img src="./assets/xmark.svg" alt="X"/></span>
            </div>
            <hr>
            <div class="holdSalesModalContent">
                <div class="holdSalesModalListItems">
                    <table>
                        <tr>
                            <th>No</th>
                            <th>Customer</th>
                            <th>Date Time</th>
                        </tr>
                    </table>
                </div>
                <div class="holdSalesModalDetails">
                    <div class="holdSalesModalDetailsContent">
                        <h3>Sale Details</h3>
                        <p>Customer: <span></span></p>
                        <div class="holdSalesModalDetailsContentTable">
                            <table>
                                <tr>
                                    <th>Item</th>
                                    <th>Price</th>
                                    <th>Qty</th>
                                    <th>Discount</th>
                                    <th>Total</th>
                                </tr>
                            </table>
                        </div>
                        <div class="holdSalesModalDetailsContentDetails">
                            <div class="holdSalesModalDetailsContentDetailsTotal">
                                Total Items: <span>0</span>
                            </div>
                            <div class="holdSalesModalDetailsContentDetailsInfo">
                                <p>Sub Total    <span>tk 0.00</span></p>
                                <p>Discount    <span></span></p>
                                <p><span></span><span>0.00</span></p>
                                <p>Total Dicount    <span>tk 0.00</span></p>
                                <p>Total Payable    <span>tk 0.00</span></p>
                                <p>Paid Amount    <span>tk 0.00</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="holdSalesModalDetailsActions">
                        <a href="#">Print Invoice</a>
                        <a href="#">Delete</a>
                        <a id="holdSalesModalIdCloseBtn">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- "Calculator Modal" -->
    <div class="calculator-modal" id="calculatorModalId">
        <div class="calculatorModal">
            <!-- calculator -->
            <form action="">
                <input type="text" class="calculatorScreen">
                <input type="button" value="1" class="calculatorNumBtn">
                <input type="button" value="2" class="calculatorNumBtn">
                <input type="button" value="3" class="calculatorNumBtn">
                <input type="button" value="0" class="calculatorNumBtn">
                <input type="button" value="4" class="calculatorNumBtn">
                <input type="button" value="5" class="calculatorNumBtn">
                <input type="button" value="6" class="calculatorNumBtn">
                <input type="button" value="cl" class="calculatorActionBtn">
                <input type="button" value="7" class="calculatorNumBtn">
                <input type="button" value="8" class="calculatorNumBtn">
                <input type="button" value="9" class="calculatorNumBtn">
                <input type="button" value="=" class="calculatorActionBtn">
                <input type="button" value="+" class="calculatorActionBtn">
                <input type="button" value="-" class="calculatorActionBtn">
                <input type="button" value="x" class="calculatorActionBtn">
                <input type="button" value="/" class="calculatorActionBtn">
            </form>
        </div>
    </div>

    <!-- "Add Item modal" -->
    <div class="add-item-modal" id="addItemModalId">
        <div class="addItemModal">
            <h3>Add Item</h3>
            <hr>
            <form action="">
                <div class="addItemModalInputSet addItemModalItem1">
                    <label for="Type">Type</label>
                    <select name="" id="Type">
                        <option value="product">product</option>
                    </select>
                </div>
                <div class="addItemModalInputSet addItemModalItem2">
                    <label for="name">Name <span>*</span></label>
                    <input type="text" id="name">
                </div>
                <div class="addItemModalInputSet addItemModalItem3">
                    <label for="SalePrice">Sale Price <span>*</span></label>
                    <span>
                        <input type="text" id="SalePrice"> <img src="./assets/circle-info-solid.svg" alt="i">
                    </span>
                </div>
                <div class="addItemModalInputSet addItemModalItem4">
                    <label for="PurchagePrice">Purchage Price</label>
                    <input type="text" id="PurchagePrice"><img src="./assets/circle-info-solid.svg" alt="i">
                </div>
                <div class="addItemModalInputSet addItemModalItem5">
                    <label for="WholeSalePrice">Whole Sale Price</label>
                    <input type="text" id="WholeSalePrice">
                </div>
                <div class="addItemModalInputSet addItemModalItem6">
                    <label for="OpeningStock">OpeningStock</label>
                    <input type="text" id="OpeningStock"><img src="./assets/circle-info-solid.svg" alt="i">
                </div>
                <div class="addItemModalInputSet addItemModalItem7">
                    <label for="Category">Category</label>
                    <select name="" id="Category">
                        <option value="Category">Select</option>
                    </select>
                </div>
                <div class="addItemModalInputSet addItemModalItem8">
                    <label for="Code">Code</label>
                    <input type="text" id="Code">
                </div>
                <div class="addItemModalInputSet addItemModalItem9">
                    <label for="Supplier">Supplier</label>
                    <select name="" id="Supplier">
                        <option value="Supplier">Select</option>
                    </select>
                </div>
                <div class="addItemModalInputSet addItemModalItem10">
                    <label for="PurchaseUnit">Purchase Unit</label>
                    <select name="" id="PurchaseUnit">
                        <option value="PurchaseUnit">Select</option>
                    </select><img src="./assets/circle-info-solid.svg" alt="i">
                </div>
                <div class="addItemModalInputSet addItemModalItem11">
                    <label for="SaleUnit">Sale Unit</label>
                    <select name="" id="SaleUnit">
                        <option value="SaleUnit">Select</option>
                    </select><img src="./assets/circle-info-solid.svg" alt="i">
                </div>
                <div class="addItemModalInputSet addItemModalItem12">
                    <label for="ConversionRate">Conversion Rate</label>
                    <input type="text" id="ConversionRate"><img src="./assets/circle-info-solid.svg" alt="i">
                </div>
                <div class="addItemModalInputSet addItemModalItem13">
                    <label for="Brand">Brand</label>
                    <select name="" id="Brand">
                        <option value="Brand">Select</option>
                    </select>
                </div>
                <div class="addItemModalInputSet addItemModalItem14">
                    <label for="UsualSale">Usual Sale Qty/Amt</label>
                    <input type="text" id="UsualSale"><img src="./assets/circle-info-solid.svg" alt="i">
                </div>
                <div class="addItemModalInputSet addItemModalItem15">
                    <label for="lowSale">Low Qty/Amt</label>
                    <input type="text" id="lowSale"><img src="./assets/circle-info-solid.svg" alt="i">
                </div>
                <div class="addItemModalInputSet addItemModalItem16">
                    <label for="Warranty">Warranty</label>
                    <input type="text" id="Warranty"><img src="./assets/circle-info-solid.svg" alt="i">
                </div>
                <div class="addItemModalInputSet addItemModalItem17">
                    <label for="Guarantee">Guarantee</label>
                    <input type="text" id="Guarantee"><img src="./assets/circle-info-solid.svg" alt="i">
                </div>
                <div class="addItemModalInputSet addItemModalItem18">
                    <label for="Description">Description</label>
                    <input type="text" id="Description">
                </div>
                <div class="addItemModalInputSet addItemModalItem19">
                    <label for="VAT">VAT</label>
                    <input type="text" id="VAT">
                </div>
                <div class="addItemModalActionBtn addItemModalItem20">
                    <input type="submit" value="Submit">
                    <a id="addItemModalCloseBtn">Cancel</a>
                </div>
            </form>
        </div>
    </div>

    <script src="{{asset('js/pos/script.js')}}"></script>
</body>
</html>
