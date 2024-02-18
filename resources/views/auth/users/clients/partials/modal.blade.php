<!-- Modal -->
<div class="modal fade" id="addInvoiceModal" tabindex="-1" aria-labelledby="addInvoiceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addInvoiceModalLabel">Add Invoice</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <form>
                    <div>
                        <ul class="wizard-nav mb-5">
                            <li class="wizard-list-item">
                                <div class="list-item">
                                    <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="Customer Info">
                                        <i class="bx bx-user-circle"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="wizard-list-item">
                                <div class="list-item">
                                    <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="Invoice Details">
                                        <i class="bx bx-file"></i>
                                    </div>
                                </div>
                            </li>

                            <li class="wizard-list-item">
                                <div class="list-item">
                                    <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="Order Summery">
                                        <i class="bx bx-edit"></i>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!-- wizard-nav -->

                        <div class="wizard-tab">
                            <div class="text-center mb-4">
                                <h5>Customer Information</h5>
                                <p class="card-title-desc">Fill all information below</p>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="customerinfo-name-input" class="form-label">Customer Name
                                                :</label>
                                            <input type="text" class="form-control" placeholder="Enter Name"
                                                id="customerinfo-name-input">
                                        </div>

                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="customerinfo-email-input" class="form-label">Email :</label>
                                            <input type="email" class="form-control" placeholder="Enter Email"
                                                id="customerinfo-email-input">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">

                                        <div class="mb-3">
                                            <label for="customerinfo-phone-input" class="form-label">Phone :</label>
                                            <input type="text" class="form-control" placeholder="Enter Phone"
                                                id="customerinfo-phone-input">
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="customerinfo-address-input" class="form-label">Address :</label>
                                    <textarea class="form-control" placeholder="Enter Address"
                                        id="customerinfo-address-input" rows="2"></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- wizard-tab -->

                        <div class="wizard-tab">

                            <div class="text-center mb-4">
                                <h5>Invoice Details</h5>
                                <p class="card-title-desc">Fill Invoice Details.</p>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-lg-6">

                                        <div class="mb-3">
                                            <label for="invoicenumberinput" class="form-label">Invoice #</label>
                                            <input type="text" class="form-control" placeholder="Enter Invoice"
                                                id="invoicenumberinput">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Invoice Date</label>
                                            <input type="text" class="form-control" placeholder="Enter Date"
                                                id="datepicker-invoice">
                                        </div>
                                        <div class="mb-3">
                                            <label for="invoicedescriptioninput" class="form-label">Description
                                                (Optional)</label>
                                            <input type="text" class="form-control" placeholder="Enter Description"
                                                id="invoicedescriptioninput">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Payment method :</label>
                                            <select class="form-select">
                                                <option selected>Select Payment method</option>
                                                <option value="CR">Credit / Debit Card</option>
                                                <option value="PY">Paypal</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- wizard-tab -->

                        <div class="wizard-tab">
                            <div class="text-center mb-4">
                                <h5>Order Summery</h5>
                                <p class="card-title-desc">Fill Order Summery Details.</p>
                            </div>
                            <div>
                                <div class="table-responsive">
                                    <table class="table table-nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Item name</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Quantity</th>
                                                <th scope="col">Total</th>
                                                <th scope="col" class="text-center">Action</th>
                                            </tr>

                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>
                                                    <div>
                                                        <input class="form-control" placeholder="Enter Name"
                                                            type="text">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <textarea class="form-control" placeholder="Enter Description"
                                                            rows="2"></textarea>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input class="form-control" placeholder="Enter Price"
                                                            type="text">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input class="form-control" placeholder="Enter Quantity"
                                                            type="text">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input class="form-control" type="text" value="0.00" readonly>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="text-center">
                                                        <a href="#" class="text-danger p-2 d-inline-block"
                                                            data-toggle="tooltip" data-placement="top" title="Delete"><i
                                                                class="fas fa-trash-alt"></i></a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">2</th>
                                                <td>
                                                    <div>
                                                        <input class="form-control" placeholder="Enter Name"
                                                            type="text">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <textarea class="form-control" placeholder="Enter Description"
                                                            rows="2"></textarea>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input class="form-control" placeholder="Enter Price"
                                                            type="text">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input class="form-control" placeholder="Enter Quantity"
                                                            type="text">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input class="form-control" type="text" value="0.00" readonly>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="text-center">
                                                        <a href="#" class="text-danger p-2 d-inline-block"
                                                            data-toggle="tooltip" data-placement="top" title="Delete"><i
                                                                class="fas fa-trash-alt"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row justify-content-end">
                                    <div class="col-xl-3 col-md-4">
                                        <div>
                                            <div>
                                                <h5 class="font-size-14 py-2">Sub Total : <span
                                                        class="float-end fw-normal text-body">0.00</span></h5>
                                            </div>
                                            <div>
                                                <h5 class="font-size-14 py-2">Discount : <span
                                                        class="float-end fw-normal text-body"> - 0.00</span></h5>
                                            </div>
                                            <div>
                                                <h5 class="font-size-14 py-2">Shipping Charge : <span
                                                        class="float-end fw-normal text-body"> 0.00</span></h5>
                                            </div>
                                            <div>
                                                <h5 class="font-size-14 py-2">Tax : <span
                                                        class="float-end fw-normal text-body"> 0.00</span></h5>
                                            </div>
                                            <div>
                                                <h5 class="font-size-14 py-2">Total : <span class="float-end">
                                                        0.00</span></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- wizard-tab -->

                        <div class="d-flex align-items-start gap-3 mt-4">
                            <button type="button" class="btn btn-primary w-sm" id="prevBtn"
                                onclick="nextPrev(-1)">Previous</button>
                            <button type="button" class="btn btn-primary w-sm ms-auto" id="nextBtn"
                                onclick="nextPrev(1)">Next</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->
