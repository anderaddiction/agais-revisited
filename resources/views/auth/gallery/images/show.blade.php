@extends('layouts.master')
@section('title')
    @lang('translation.Taxes')
@endsection
@section('css')
@endsection
@section('content')
@section('pagetitle')
    @lang('translation.Taxes')
@endsection
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">{{ __('Taxes_Table') }}</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <a href="{{ route('country.index') }}">
                    <h5 class="font-size-14 mb-4">
                        <i class="mdi mdi-arrow-right text-primary me-1"></i>
                        @lang('Back to Taxes List')
                    </h5>
                </a>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="text-center" style="width: 100%;">
                            <tr>
                                <th>{{ __('Code') }}</th>
                                <th>{{ __('Name') }}</th>
                                <th>{{ __('Acronym') }}</th>
                                <th>{{ __('Percent') }}</th>
                                <th>{{ __('Country') }}</th>
                                <th>{{ __('Status') }}</th>
                                <th>{{ __('Note') }}</th>
                                <th>{{ __('Created At') }}</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr class="align-middle">
                                <td>{{ $tax->present()->code() }}</td>
                                <td>{{ $tax->present()->name() }}</td>
                                <td>{{ $tax->present()->acronym() }}</td>
                                <td>{{ $tax->present()->percent() }}</td>
                                <td>{!! $tax->present()->flag() !!}</td>
                                <td>{!! $tax->present()->status() !!}</td>
                                <td>{{ $tax->present()->note() }}</td>
                                <td>{{ $tax->present()->created_at() }}</td>
                                <td>{!! $tax->present()->showActionButton() !!}</td>
                            </tr>
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
@endsection
