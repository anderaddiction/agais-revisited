@extends('layouts.master')
@section('title') @lang('translation.Municipalities') @endsection
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
@section('pagetitle') @lang('translation.Municipalities') @endsection
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">@lang('translation.Municipalities_table')</h4>
            </div><!-- end card header -->
            <div class="card-body">
                @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
                @endif
                <div class="table-responsive">
                    <table class="table mb-0 data-table" style="width:100%" id="dataTable">
                        <thead class="text-center">
                            <tr>
                                <th>{{ __('Name') }}</th>
                                <th>{{ __('Code') }}</th>
                                <th>{{ __('State') }}</th>
                                <th>{{ __('Country') }}</th>
                                <th>{{ __('Created At') }}</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody class="text-center align-middle">
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->
@endsection
@section('script')
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
{{-- {{ $dataTable->scripts() }} --}}
<script type="text/javascript">
    $(function () {
        var table = $('.data-table').DataTable({
            processing: false,
            serverSide: true,
            responsive: true,
            ajax: "{{ route('municipality.index') }}",
            dom: 'Bfrtip',
            columns: [
                {data: 'name', name: 'name','class': 'col-2'},
                {data: 'code', name: 'code'},
                {data: 'state', name: 'state'},
                {data: 'country', name: 'country'},
                {data: 'created_at', name: 'created_at','class': 'col-2'},
                {data: 'action', name: 'action', orderable: true, searchable: true, 'class': 'col-3'},
            ],
            lengthChange: false,
            buttons: [
                {
                    text: '<i class="fas fa-plus" title="Agregar"></i>',
                    action: function ( e, dt, node, config ) {
                        window.location = "{{ route('municipality.create') }}";
                    },
                    className: 'btn-info',
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
                    text: '<i class="fas fa-undo-alt" title="Recargar"></i>',
                    action: function ( e, dt, node, config ) {
                        window.location = "{{ route('municipality.index') }}";
                    },
                    className: 'btn-primary',
                },
                'colvis'
            ],
            language: {
                url:'https://cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json',
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
