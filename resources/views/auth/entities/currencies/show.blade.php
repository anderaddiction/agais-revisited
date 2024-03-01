@extends('layouts.master')
@section('title')
    @lang('translation.Currencies')
@endsection
@section('css')
@endsection
@section('content')
@section('pagetitle')
    @lang('translation.Currencies')
@endsection
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">{{ __('Currencies_Table') }}</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <a href="{{ route('currency.index') }}">
                    <h5 class="font-size-14 mb-4">
                        <i class="mdi mdi-arrow-right text-primary me-1"></i>
                        @lang('Back to Currencies List')
                    </h5>
                </a>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="text-center" style="width: 100%;">
                            <tr>
                                <th class="col-2">{{ __('Name') }}</th>
                                <th>{{ __('Code') }}</th>
                                <th>{{ __('Symbol') }}</th>
                                <th>{{ __('ISO') }}</th>
                                <th class="col-2">{{ __('Country') }}</th>
                                <th class="col-1">{{ __('Slug') }}</th>
                                <th class="col-1">{{ __('Status') }}</th>
                                <th class="col-1">{{ __('Note') }}</th>
                                <th class="col-4">{{ __('Created At') }}</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr class="align-middle">
                                <td>{{ $currency->present()->name() }}</td>
                                <td>{{ $currency->present()->code() }}</td>
                                <td>{!! $currency->present()->symbol() !!}</td>
                                <td>{{ $currency->present()->iso() }}</td>
                                <td>{!! $currency->present()->flag() !!}</td>
                                <td>{{ $currency->present()->slug() }}</td>
                                <td>{!! $currency->present()->status() !!}</td>
                                <td>{{ $currency->present()->note() }}</td>
                                <td>{{ $currency->present()->created_at() }}</td>
                                <td>{!! $currency->present()->showActionButton() !!}</td>
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
