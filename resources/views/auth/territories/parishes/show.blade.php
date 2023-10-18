@extends('layouts.master')
@section('title') @lang('translation.Parishes') @endsection
@section('css')

@endsection
@section('content')
@section('pagetitle') @lang('translation.Parishes') @endsection
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">@lang('translation.Parishes_table')</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <a href="{{ route('parish.index') }}">
                    <h5 class="font-size-14 mb-4">
                        <i class="mdi mdi-arrow-right text-primary me-1"></i>
                        @lang('Back to Parishes List')
                    </h5>
                </a>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="text-center" style="width: 100%;">
                            <tr>
                                <th class="col-2">{{ __('Name') }}</th>
                                <th>{{ __('Code') }}</th>
                                <th>{{ __('State') }}</th>
                                <th>{{ __('Municipality') }}</th>
                                <th>{{ __('Country') }}</th>
                                <th>{{ __('Continent') }}</th>
                                <th class="col-3">{{ __('Slug') }}</th>
                                <th>{{ __('Note') }}</th>
                                <th class="col-3">{{ __('Created At') }}</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr class="align-middle">
                                <td>{{ $parish->present()->name() }}</td>
                                <td>{{ $parish->present()->code() }}</td>
                                <td>{{ $parish->present()->state() }}</td>
                                <td>{{ $parish->present()->municipality() }}</td>
                                <td>{!! $parish->present()->flag() !!}</td>
                                <td>{{ $parish->present()->continent() }}</td>
                                <td>{{ $parish->present()->slug() }}</td>
                                <td>{{ $parish->present()->note() }}</td>
                                <td>{{ $parish->present()->created_at() }}</td>
                                <td>{!! $parish->present()->showActionButton() !!}</td>
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
