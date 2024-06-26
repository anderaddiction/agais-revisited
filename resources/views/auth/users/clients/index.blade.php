@extends('layouts.master')
@section('title')
@lang('translation.Clients')
@endsection
@section('css')
<link href="{{ URL::asset('assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/libs/choices.js/choices.js.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/libs/@simonwep/@simonwep.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet">
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
@lang('translation.Clients')
@endsection
<div class="row align-items-center">
    <div class="col-md-6">
        <div class="mb-3">
            <h4 class="card-title">{{ __('Clients_Table') }}</h4>
        </div>
    </div>
    @include('auth.users.clients.partials.modal')
    <div class="table-responsive">
        <table class="table align-middle project-list-table table-nowrap table-hover data-table" style="width:100%"
            id="dataTable">
            <thead class="text-center">
                <tr>
                    <th scope="col" style="font-size: 12px;font-weight: bold "></th>
                    <th scope="col">{{ __('Avatar') }}</th>
                    <th scope="col">{{ __('Name') }}</th>
                    <th scope="col">{{ __('Document') }}</th>
                    <th scope="col">{{ __('Code') }}</th>
                    <th scope="col">{{ __('Phone') }}</th>
                    <th scope="col">{{ __('Email') }}</th>
                    <th scope="col">{{ __('Gender') }}</th>
                    <th scope="col">{{ __('Satus') }}</th>
                    <th scope="col">{{ __('Role') }}</th>
                    <th scope="col">{{ __('Category') }}</th>
                    <th scope="col">{{ __('Created At') }}</th>
                    <th scope="col">{{ __('Action') }}</th>
                </tr>
            </thead>
            <tbody class="text-center align-middle">
            </tbody>
        </table>
    </div>

</div>
<!-- end row -->
@include('partials.modal')
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
            ajax: "{{ route('client.index') }}",
            dom: 'Bfrtip',
            columns: [{
                    data: 'id',
                    'className': 'text-center style_td item-checkbox'
                },
                {
                    data: 'avatar',
                    name: 'avatar'
                },
                {
                    data: 'full_name',
                    name: 'full_name',
                },
                {
                    data: 'document',
                    name: 'document'
                },
                {
                    data: 'code',
                    name: 'code'
                },
                {
                    data: 'phone_one',
                    name: 'phone_one'
                },
                {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'gender',
                    name: 'gender'
                },
                {
                    data: 'status',
                    name: 'status'
                },
                {
                    data: 'role',
                    name: 'role'
                },
                {
                    data: 'category',
                    name: 'category'
                },
                {
                    data: 'created_at',
                    name: 'created_at',
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: true,
                    searchable: true,
                },
            ],
            "autoWidth": false,
            columnDefs: [{
                    targets: 0,
                    checkboxes: {
                        seletRow: true,
                    }
                },
                {
                    responsivePriority: 1,
                    targets: 0
                },
                {
                    responsivePriority: 2,
                    targets: -1
                }
            ],
            lengthChange: false,
            orderable: true,
            aaSorting: [
                [1, 'asc']
            ],
            buttons: [{
                    text: '<i class="fas fa-plus" title="Agregar"></i>',
                    action: function(e, dt, node, config) {
                        window.location = "{{ route('client.create') }}";
                    },
                    className: 'btn-info btn-add',
                },
                {
                    text: '<i class="fas fa-trash" title="Eliminar"></i>',
                    action: function(e, dt, node, config) {
                        e.preventDefault();
                        var token = $('meta[name="csrf-token"]').attr('content');
                        var rows = $('.data-table').DataTable().column(0).checkboxes.selected();
                        var data = [];
                        if (rows.length == 0) {
                            Swal.fire({
                                type: 'warning',
                                icon: 'warning',
                                title: 'Advertencia',
                                text: 'Debe seleccionar al menos un elemento',
                                footer: ''
                            });

                            return;
                        }

                        $.each(rows, function(index, rowId) {
                            data.push(rowId);
                        });

                        var url = "{{ route('client.destroy', ':data') }}";
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
                                        $('.data-table').DataTable().ajax
                                            .reload();
                                        Swal.fire({
                                            title: 'Deleted!',
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
                    className: 'btn-danger btn-massive-delete',
                },
                {
                    text: '<i class="fas fa-recycle" title="Papelera"></i>',
                    action: function(e, dt, node, config) {
                        window.location = "{{ route('client.trashed') }}";
                    },
                    className: 'btn-success',
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
                        window.location = "{{ route('client.index') }}";
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
            "destroy": true,
            "bAutoWidth": false,
            "deferRender": true,
            "iDisplayLength": 25,
            "bProcessing": true,
            initComplete: function() {
                $('.buttons-colvis').html('<i class="fas fa-eye" title="Visibilidad" /></div>')
            }
        });

        $('.data-table tbody').on('click', '.show-btn', function() {
            //var data = table.row($(this).parents('tr')).data();
            var route = $(this).data("route");
            $.ajax({
                type: "GET",
                url: route,
                //dataType: "json",
                success: function(response) {
                    var name = response.client.name + ' ' + response.client.second_name +
                        ' ' +
                        response.client.last_name + ' ' + response.client.second_last_name;

                    $(".getName").text(name);
                    if (response.client.status == 1) {
                        $("#getStatus").addClass('badge badge-soft-success');
                        $("#getStatus").text('Activo');
                    } else {
                        $("#getStatus").addClass('badge badge-soft-danger');
                        $("#getStatus").text('Inactivo');
                    }
                    $("#getCode").html('<small>Codigo: ' + response.client.code +
                        '</small>');
                    $("#getCategory").text(response.category);
                    if (response.client.gender == 'F') {
                        $("#getGender").html(
                            '<i class="bx bx-female-sign bx-xm text-danger" title="Femenino"></i>'
                        );
                    } else {
                        $("#getGender").html(
                            '<i class="bx bx-male-sign bx-xm text-info" title="Masculino"></i>'
                        );
                    }
                    $("#getPhone").text(response.client.phone_one);
                    $("#getPhone").attr('href', `Tel:${response.client.phone_one}`);
                    if (response.client.phone_alt) {
                        $("#getPhoneAlt").text(response.client.phone_alt);
                        $("#getPhoneAlt").attr('href', `Tel:${response.client.phone_alt}`);
                    } else {
                        $("#getPhoneAlt").text('N/A');
                        $("#getPhoneAlt").css('color', '#7f838b');
                    }

                    $("#getMail").text(response.client.email);
                    $("#getMail").attr('href', `mailto:${response.client.email}`);
                    if (response.client.email_alt) {
                        $("#getMailAlt").text(
                            jQuery.trim(response.client.email_alt).substring(0, 20)
                            .trim(this) + "..."
                        );
                        $("#getMailAlt").attr('href',
                            `mailto:${response.client.email_alt}`);
                    } else {
                        $("#getMailAlt").text('N/A');
                        $("#getMailAlt").css('color', '#7f838b');
                    }
                    $("#getAddress").text(response.client.address);
                    $("#getCountry").text(response.country);
                    $("#getState").text(response.state);
                    $("#getMunicipality").text(response.municipality);
                    $("#getParish").text(response.parish);
                    $("#getCity").text(response.city);
                    $("#getID").text(response.document.acronym + ' ' + response.client
                        .id_number);
                    $("#getAvatar").attr('src', '/storage/' + response.client.avatar);
                    if (response.client.social_media) {
                        $("#getSocialMedia").text(response.client.social_media);
                    } else {
                        $("#getSocialMedia").text('N/A');
                    }
                    $("#getRole").text(response.role);
                    $("#client-modal").modal('show');

                    //Para ir a editar desde la modal
                    $(".dropdown-edit").click(function(e) {
                        e.preventDefault();
                        var url = '{{ route('client.edit', ':client') }}';
                        url = url.replace(':client', response.client.id);
                        $.ajax({
                            type: "GET",
                            url: url,
                            data: response.client,
                            dataType: "json",
                            success: function(response) {
                                window.location.href = response.html;
                            }
                        });
                    });

                    //Para eliminar desde la modal
                    $(".dropdown-delete").click(function(e) {
                        e.preventDefault();
                        var token = $('meta[name="csrf-token"]').attr('content');
                        var url = '{{ route('client.destroy', ':client') }}';
                        url = url.replace(':client', response.client.id);
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
                                        data: response.client,
                                        _method: 'DELETE'
                                    },
                                    success: function(response) {
                                        $('.data-table')
                                            .DataTable().ajax
                                            .reload();
                                        $("#client-modal")
                                            .modal('hide');
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
                    });
                }
            });
            //alert(data[0] + "'s salary is: " + data[5]);
        });

    });
</script>
@endsection