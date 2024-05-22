@extends('layouts.master')
@section('title')
    @lang('translation.Invoice_List')
@endsection
@section('css')
    <link href="{{ URL::asset('assets/libs/gridjs/gridjs.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet">
@endsection
@section('content')

@section('pagetitle')
    {{ __('Invoice List') }}
@endsection
<div class="row align-items-center">
    <div class="col-md-6">
        <div class="mb-3">
            <h4 class="card-title">{{ __('Invoice_Table') }}</h4>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table align-middle project-list-table table-nowrap table-hover data-table" style="width:100%"
            id="dataTable">
            <thead class="text-center">
                <tr>
                    <th style="font-size: 12px;font-weight: bold"></th>
                    <th>{{ __('Name') }}</th>
                    <th>{{ __('Code') }}</th>
                    <th>{{ __('ISO2') }}</th>
                    <th>{{ __('ISO3') }}</th>
                    <th>{{ __('Flag') }}</th>
                    <th>{{ __('Continent') }}</th>
                    <th>{{ __('Created At') }}</th>
                    <th>{{ __('Action') }}</th>
                </tr>
            </thead>
            <tbody class="text-center align-middle">
            </tbody>
        </table>
    </div>
</div>
<!-- end row -->

<!-- Modal -->
{{-- @include('auth.documents.invoices.partials.create-modal')
@include('auth.documents.invoices.partials.update-modal') --}}
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
                                            <input type="text" class="form-control required" placeholder="Enter Name"
                                                id="customerinfo-name-input">
                                        </div>

                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="customerinfo-email-input" class="form-label">Email :</label>
                                            <input type="email" class="form-control required"
                                                placeholder="Enter Email" id="customerinfo-email-input">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">

                                        <div class="mb-3">
                                            <label for="customerinfo-phone-input" class="form-label">Phone :</label>
                                            <input type="text" class="form-control required"
                                                placeholder="Enter Phone" id="customerinfo-phone-input">
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="customerinfo-address-input" class="form-label">Address :</label>
                                    <textarea class="form-control required" placeholder="Enter Address" id="customerinfo-address-input" rows="2"></textarea>
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
                                            <input type="text" class="form-control required"
                                                placeholder="Enter Invoice" id="invoicenumberinput">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Invoice Date</label>
                                            <input type="text" class="form-control required"
                                                placeholder="Enter Date" id="datepicker-invoice">
                                        </div>
                                        <div class="mb-3">
                                            <label for="invoicedescriptioninput" class="form-label">Description
                                                (Optional)</label>
                                            <input type="text" class="form-control required"
                                                placeholder="Enter Description" id="invoicedescriptioninput">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Payment method :</label>
                                            <select class="form-select required">
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
                                                        <input class="form-control required" placeholder="Enter Name"
                                                            type="text">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <textarea class="form-control required" placeholder="Enter Description" rows="2"></textarea>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input class="form-control required" placeholder="Enter Price"
                                                            type="text">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input class="form-control required"
                                                            placeholder="Enter Quantity" type="text">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input class="form-control required" type="text"
                                                            value="0.00" readonly>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="text-center">
                                                        <a href="#" class="text-danger p-2 d-inline-block"
                                                            data-toggle="tooltip" data-placement="top"
                                                            title="Delete"><i class="fas fa-trash-alt"></i></a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">2</th>
                                                <td>
                                                    <div>
                                                        <input class="form-control required" placeholder="Enter Name"
                                                            type="text">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <textarea class="form-control required" placeholder="Enter Description" rows="2"></textarea>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input class="form-control required" placeholder="Enter Price"
                                                            type="text">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input class="form-control required"
                                                            placeholder="Enter Quantity" type="text">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input class="form-control required" type="text"
                                                            value="0.00" readonly>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="text-center">
                                                        <a href="#" class="text-danger p-2 d-inline-block"
                                                            data-toggle="tooltip" data-placement="top"
                                                            title="Delete"><i class="fas fa-trash-alt"></i></a>
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

@endsection
@section('script')
<script src="{{ URL::asset('/assets/libs/gridjs/gridjs.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/pages/form-wizard-invoice.init.js') }}"></script>
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
<script type="text/javascript">
    $(function() {
        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            pageLength: 20,
            ajax: "{{ route('invoice.index') }}",
            dom: 'Bfrtip',
            columns: [{
                    data: 'id',
                    name: 'id',
                    'class': 'col-2'
                },
                {
                    data: 'name',
                    name: 'name',
                    'class': 'col-2'
                },
                {
                    data: 'code',
                    name: 'code'
                },
                {
                    data: 'iso2',
                    name: 'iso2'
                },
                {
                    data: 'iso3',
                    name: 'iso3'
                },
                {
                    data: 'flag',
                    name: 'flag'
                },
                {
                    data: 'continent',
                    name: 'continent'
                },
                {
                    data: 'created_at',
                    name: 'created_at',
                    'class': 'col-2'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    'class': 'col-3'
                },
            ],
            columnDefs: [{
                targets: 0,
                checkboxes: {
                    seletRow: true
                }
            }],
            lengthChange: false,
            buttons: [{
                    text: '<i class="fas fa-plus" title="Agregar"></i>',
                    action: function(e, dt, node, config) {
                        //window.location = "{{ route('invoice.create') }}";
                        $('#addInvoiceModal').modal('show')

                    },
                    className: 'btn-info',
                },
                // {
                //     text: '<i class="fa fa-upload" title="Importar"></i>',
                //     action: function() {
                //         var fileSelector = $(
                //             '<input type="file" name="file" data-route="{{ route('country.import') }}" title="Importar">'
                //         );
                //         fileSelector.click();

                //         fileSelector.change(function(e) {
                //             e.preventDefault();
                //             var data = new FormData();
                //             $.each($(this)[0].files, function(i, file) {
                //                 data.append('file', file);
                //             });
                //             var route = $(this).data('route');
                //             var token = $('meta[name="csrf-token"]').attr('content');
                //             $.ajax({
                //                 type: "POST",
                //                 url: route,
                //                 headers: {
                //                     'X-CSRF-TOKEN': token
                //                 },
                //                 data: data,
                //                 cache: false,
                //                 contentType: false,
                //                 processData: false,
                //                 success: function(response) {
                //                     $('.data-table').DataTable().ajax
                //                         .reload();
                //                     if (response.success) {
                //                         Swal.fire({
                //                             title: "Felicidades",
                //                             text: response.success,
                //                             icon: "success",
                //                             confirmButtonColor: "#038edc",
                //                         });
                //                     }

                //                 },
                //                 error: function(response) {
                //                     console.log(response);
                //                     Swal.fire({
                //                         title: "Advertencia",
                //                         text: 'Error ' + response
                //                             .status + ': ' +
                //                             response.statusText,
                //                         icon: "warning",
                //                         confirmButtonColor: "#038edc",
                //                     });
                //                 }
                //             });
                //         });
                //     },
                //     className: 'btn btn-warning'
                // },
                {
                    text: '<i class="fas fa-trash" title="Eliminar"></i>',
                    action: function(e, dt, node, config) {
                        e.preventDefault();
                        var token = $('meta[name="csrf-token"]').attr('content');
                        var rows = $('.data-table').DataTable().column(0).checkboxes
                            .selected();
                        var data = [];
                        if (rows.length == 0) {
                            Swal.fire({
                                type: 'warning',
                                title: 'Advertencia',
                                text: 'Debe seleccionar al menos un elemento',
                                footer: ''
                            });

                            return;
                        }

                        $.each(rows, function(index, rowId) {
                            data.push(rowId);
                        });

                        var url = "{{ route('invoice.destroy', ':data') }}";
                        url = url.replace(':data', data);

                        Swal.fire({
                            title: 'Are you sure?',
                            text: "You won't be able to revert this!",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonText: 'Yes, delete it!',
                            cancelButtonText: 'No, cancel!',
                            confirmButtonClass: 'btn btn-success mt-2',
                            cancelButtonClass: 'btn btn-danger ms-2 mt-2',
                            buttonsStyling: false
                        }).then(function(result) {
                            if (result.value) {
                                $.ajax({
                                    type: "POST",
                                    url: url,
                                    headers: {
                                        'X-CSRF-Token': token
                                    },
                                    data: {
                                        data: data,
                                        _method: 'DELETE'
                                    },
                                    success: function(response) {
                                        $('.data-table').DataTable()
                                            .ajax
                                            .reload();
                                        Swal.fire({
                                            title: 'Deleted!',
                                            text: response
                                                .success,
                                            icon: 'success',
                                            confirmButtonColor: '#038edc',
                                        })
                                    }
                                });
                            } else if (
                                // Read more about handling dismissals
                                result.dismiss === Swal.DismissReason.cancel
                            ) {
                                Swal.fire({
                                    title: 'Cancelled',
                                    text: 'Your imaginary file is safe :)',
                                    icon: 'error',
                                    confirmButtonColor: '#038edc',
                                })
                            }
                        });
                    },
                    className: 'btn-danger btn-massive-delete',
                },
                {
                    text: '<i class="fas fa-recycle" title="Papelera"></i>',
                    action: function(e, dt, node, config) {
                        window.location = "{{ route('country.trashed') }}";
                    },
                    className: 'btn-success',
                },
                {
                    extend: 'copyHtml5',
                    text: '<i class="fas fa-copy" title="Copiar"></i>',
                    titleAttr: 'Copy'
                },
                {
                    extend: 'csvHtml5',
                    text: '<i class="fas fa-file-csv" title="CSV"></i>',
                    titleAttr: 'Csv'
                },
                {
                    extend: 'excelHtml5',
                    text: '<i class="fas fa-file-excel" title="Excel"></i>',
                    titleAttr: 'Excel'
                },
                {
                    extend: 'pdfHtml5',
                    text: '<i class="fas fa-file-pdf" title="PDF"></i>',
                    titleAttr: 'Pdf'
                },
                {
                    text: '<i class="fas fa-undo" title="Recargar"></i>',
                    action: function(e, dt, node, config) {
                        window.location = "{{ route('country.index') }}";
                    },
                    className: 'btn-primary',
                },
                'colvis'
            ],
            language: {
                url: 'https://cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json',
                decimal: ',',
                thousands: '.'
            },
            initComplete: function() {
                $('.buttons-colvis').html('<i class="fas fa-eye" title="Visibilidad" /></div>')
            }
        });
    });
</script>
@endsection
