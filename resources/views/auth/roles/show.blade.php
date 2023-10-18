@extends('layouts.master')
@section('title') @lang('translation.Roles') @endsection
@section('css')

@endsection
@section('content')
@section('pagetitle') @lang('translation.Roles') @endsection
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">@lang('translation.Roles_table')</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <a href="{{ route('role.index') }}">
                    <h5 class="font-size-14 mb-4">
                        <i class="mdi mdi-arrow-right text-primary me-1"></i>
                        @lang('Back to Roles List')
                    </h5>
                </a>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="text-center" style="width: 100%;">
                            <tr>
                                <th class="col-3">{{ __('Name') }}</th>
                                <th>{{ __('Code') }}</th>
                                <th class="col-3">{{ __('Display Name') }}</th>
                                <th class="col-2">{{ __('Slug') }}</th>
                                <th>{{ __('Status') }}</th>
                                <th>{{ __('Note') }}</th>
                                <th class="col-3">{{ __('Created At') }}</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr class="align-middle">
                                <td>{{ $role->present()->name() }}</td>
                                <td>{{ $role->present()->code() }}</td>
                                <td>{{ $role->present()->diplayName() }}</td>
                                <td>{{ $role->present()->slug() }}</td>
                                <td>{!! $role->present()->status() !!}</td>
                                <td>{{ $role->present()->note() }}</td>
                                <td>{{ $role->present()->created_at() }}</td>
                                <td>{!! $role->present()->showActionButton() !!}</td>
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
