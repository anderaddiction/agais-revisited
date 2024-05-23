@extends('layouts.master')
@section('title')
    @lang('translation.Countries')
@endsection
@section('css')
    <style>
        .dataTables_info {
            margin-top: 1%;
            margin-bottom: 1%;
        }

        #dataTable_filter {
            float: right;
        }
    </style>
@endsection
@section('content')
@section('pagetitle')
    @lang('translation.Countries')
@endsection
<div class="row align-items-center">
    <div class="col-md-6">
        <div class="mb-3">
            <h4 class="card-title">{{ __('Countries_Trashed_Table') }}</h4>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table align-middle project-list-table table-nowrap table-hover data-table" style="width:100%"
            id="dataTable">
            <thead class="text-center">
                <tr>
                    <th style="font-size: 12px;font-weight: bold"></th>
                    <th>{{ __('Code') }}</th>
                    <th>{{ __('Percent') }}</th>
                    <th>{{ __('Country') }}</th>
                    <th>{{ __('Status') }}</th>
                    <th>{{ __('Note') }}</th>
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
@endsection
@section('script')
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
{{-- {{ $dataTable->scripts() }} --}}
<script type="text/javascript">
    $(function() {
        var table = $('.data-table').DataTable({
            processing: false,
            serverSide: true,
            responsive: true,
            pageLength: 20,
            ajax: "{{ route('tax.trashed') }}",
            dom: 'Bfrtip',
            columns: [{
                    data: 'id',
                    name: 'id',
                    'class': 'col-2'
                },
                {
                    data: 'code',
                    name: 'code'
                },
                {
                    data: 'percent',
                    name: 'percent'
                },
                {
                    data: 'flag',
                    name: 'flag'
                },
                {
                    data: 'status',
                    name: 'status'
                },
                {
                    data: 'note',
                    name: 'note'
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
                        window.location = "{{ route('tax.create') }}";
                    },
                    className: 'btn-info',
                },
                {
                    text: '<i class="fas fa-trash-restore" title="Restore"></i>',
                    action: function(e, dt, node, config) {
                        e.preventDefault();
                        var token = $('meta[name="csrf-token"]').attr('content');
                        var rows = $('.data-table').DataTable().column(0).checkboxes.selected();
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

                        var url = "{{ route('tax.restore', ':data') }}";
                        url = url.replace(':data', data);

                        Swal.fire({
                            title: 'Are you sure?',
                            text: "You always be able to revert this!",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonText: 'Yes, restored it!',
                            cancelButtonText: 'No, cancel!',
                            confirmButtonClass: 'btn btn-success mt-2',
                            cancelButtonClass: 'btn btn-danger ms-2 mt-2',
                            buttonsStyling: false
                        }).then(function(result) {
                            if (result.value) {
                                $.ajax({
                                    type: "GET",
                                    url: url,
                                    headers: {
                                        'X-CSRF-Token': token
                                    },
                                    data: {
                                        data: data,
                                        _method: 'GET'
                                    },
                                    success: function(response) {
                                        $('.data-table').DataTable().ajax
                                            .reload();
                                        Swal.fire({
                                            title: 'Restored!',
                                            text: response.success,
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
                    className: 'btn-success btn-massive-delete',
                },
                {
                    extend: 'copyHtml5',
                    text: '<i class="fas fa-copy" title="Agregar"></i>',
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
                        window.location = "{{ route('tax.trashed') }}";
                    },
                    className: 'btn-primary',
                },
                {
                    text: '<i class="fas fa-backward " title="Volver al listado de países"></i>',
                    action: function(e, dt, node, config) {
                        window.location = "{{ route('tax.index') }}";
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
