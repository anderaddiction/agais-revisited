@extends('layouts.master')
@section('title') @lang('translation.Countries') @endsection
@section('css')

@endsection
@section('content')
@section('pagetitle') @lang('translation.Countries') @endsection
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">@lang('translation.Countries_table')</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <a href="{{ route('country.index') }}">
                    <h5 class="font-size-14 mb-4">
                        <i class="mdi mdi-arrow-right text-primary me-1"></i>
                        @lang('Back to Countries List')
                    </h5>
                </a>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="text-center" style="width: 100%;">
                            <tr>
                                <th class="col-2">{{ __('Name') }}</th>
                                <th>{{ __('Code') }}</th>
                                <th>{{ __('ISO2') }}</th>
                                <th>{{ __('ISO3') }}</th>
                                <th>{{ __('Flag') }}</th>
                                <th>{{ __('Continent') }}</th>
                                <th>{{ __('Slug') }}</th>
                                <th>{{ __('Note') }}</th>
                                <th class="col-3">{{ __('Created At') }}</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr class="align-middle">
                                <td>{{ $country->present()->name() }}</td>
                                <td>{{ $country->present()->code() }}</td>
                                <td>{{ $country->present()->iso2() }}</td>
                                <td>{{ $country->present()->iso3() }}</td>
                                <td>{!! $country->present()->flag() !!}</td>
                                <td>{{ $country->present()->continent() }}</td>
                                <td>{{ $country->present()->slug() }}</td>
                                <td>{{ $country->present()->note() }}</td>
                                <td>{{ $country->present()->created_at() }}</td>
                                <td>{!! $country->present()->showActionButton() !!}</td>
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
