@extends('layouts.master')
@section('title')
    @lang('translation.Banks')
@endsection
@section('css')
@endsection
@section('content')
@section('pagetitle')
    @lang('translation.Banks')
@endsection
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">{{ __('Banks_Table') }}</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <a href="{{ route('bank.index') }}">
                    <h5 class="font-size-14 mb-4">
                        <i class="mdi mdi-arrow-right text-primary me-1"></i>
                        @lang('Back to Banks List')
                    </h5>
                </a>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="text-center" style="width: 100%;">
                            <tr>
                                <th class="col-2">{{ __('Name') }}</th>
                                <th>{{ __('Code') }}</th>
                                <th class="col-2">{{ __('Bank Type') }}</th>
                                <th class="col-2">{{ __('Capital type') }}</th>
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
                                <td>{{ $bank->present()->name() }}</td>
                                <td>{{ $bank->present()->code() }}</td>
                                <td>{!! $bank->present()->bankType() !!}</td>
                                <td>{{ $bank->present()->capitalType() }}</td>
                                <td>{!! $bank->present()->flag() !!}</td>
                                <td>{{ $bank->present()->slug() }}</td>
                                <td>{!! $bank->present()->status() !!}</td>
                                <td>{{ $bank->present()->note() }}</td>
                                <td>{{ $bank->present()->created_at() }}</td>
                                <td>{!! $bank->present()->showActionButton() !!}</td>
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
