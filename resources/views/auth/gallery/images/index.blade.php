@extends('layouts.master')
@section('title')
    @lang('translation.Images')
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
    @lang('translation.Images')
@endsection
<div class="row align-items-center">
    <div class="col-md-6">
        <div class="mb-3">
            <h4 class="card-title">{{ __('Images_Table') }}</h4>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table align-middle project-list-table table-nowrap table-hover data-table" style="width:100%"
            id="dataTable">
            <thead class="text-center">
                <tr>
                    <th style="font-size: 12px;font-weight: bold"></th>
                    <th>{{ __('Image') }}</th>
                    <th>{{ __('Name') }}</th>
                    <th>{{ __('Code') }}</th>
                    <th>{{ __('Width') }}</th>
                    <th>{{ __('Height') }}</th>
                    <th>{{ __('Extension') }}</th>
                    <th>{{ __('Category') }}</th>
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

<!--  Large modal example -->
@include('auth.gallery.images.partials.show')
<!-- /.modal -->
@endsection
@section('script')
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
{{-- {{ $dataTable->scripts() }} --}}
<script type="text/javascript">
    $(function() {
        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            pageLength: 20,
            ajax: "{{ route('image.index') }}",
            dom: 'Bfrtip',
            columns: [{
                    data: 'id',
                    name: 'id',
                    'class': 'col-2'
                },
                {
                    data: null,
                    render: function(data) {
                        return `
                        <a href="javascript: void(0);" data-id="${data.id}" data-url="images/${data.id}" class="d-inline-block show-btn">
                            <img src="/storage/${data.image}" class="rounded-circle avatar-sm" title="${data.name}" alt="${data.name}">
                        </a>
                        `;
                    },
                    name: 'image'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'code',
                    name: 'code'
                },
                {
                    data: 'width',
                    name: 'width'
                },
                {
                    data: 'height',
                    name: 'height'
                },
                {
                    data: 'extension',
                    name: 'extension'
                },
                {
                    data: 'category',
                    name: 'category'
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
                        window.location = "{{ route('image.create') }}";
                    },
                    className: 'btn-info',
                },
                //Colocar la importacion aqui
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

                        var url = "{{ route('image.destroy', ':data') }}";
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
                        window.location = "{{ route('image.trashed') }}";
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
                        window.location = "{{ route('image.index') }}";
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
<script>
    $(document).on('click', '.show-btn', function() {
        var id = $(this).data(id);
        var url = $(this).data(url);
        $.ajax({
            type: "GET",
            url: url.url,
            data: id,
            success: function(data) {
                console.log(data.id);
                $('.bs-example-modal-lg').modal('show');
                $('.image-title').html(data.name);
                if ((data.width) && (data.height)) {
                    $('.image-show').html(
                        `<img src="/storage/${data.image}" width="${data.width}" height="${data.height}">`
                    )
                } else if (data.width) {
                    $('.image-show').html(
                        `<img src="/storage/${data.image}" width="${data.width}" height="500">`
                    )
                } else if (data.height) {
                    $('.image-show').html(
                        `<img src="/storage/${data.image}" width="500" height="${data.height}">`
                    )
                } else {
                    $('.image-show').html(
                        `<img src="/storage/${data.image}" width="500" height="500">`
                    )
                }


            }
        });
    });
</script>
@endsection
