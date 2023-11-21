@extends('layouts.master')
@section('title') @lang('translation.States') @endsection
@section('css')

@endsection
@section('content')
@section('pagetitle') @lang('translation.States') @endsection
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">@lang('translation.States_table')</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <a href="{{ route('state.index') }}">
                    <h5 class="font-size-14 mb-4">
                        <i class="mdi mdi-arrow-right text-primary me-1"></i>
                        @lang('Back to States List')
                    </h5>
                </a>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="text-center" style="width: 100%;">
                            <tr>
                                <th>{{ __('Name') }}</th>
                                <th>{{ __('Code') }}</th>
                                <th>{{ __('ISO3') }}</th>
                                <th>{{ __('Country') }}</th>
                                <th>{{ __('Continent') }}</th>
                                <th>{{ __('Slug') }}</th>
                                <th>{{ __('Note') }}</th>
                                <th class="col-3">{{ __('Created At') }}</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr class="align-middle">
                                <td>{{ $state->present()->name() }}</td>
                                <td>{{ $state->present()->code() }}</td>
                                <td>{{ $state->present()->iso() }}</td>
                                <td>{!! $state->present()->flag() !!}</td>
                                <td>{{ $state->present()->continent() }}</td>
                                <td>{{ $state->present()->slug() }}</td>
                                <td>{{ $state->present()->note() }}</td>
                                <td>{{ $state->present()->created_at() }}</td>
                                <td>{!! $state->present()->showActionButton() !!}</td>
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
