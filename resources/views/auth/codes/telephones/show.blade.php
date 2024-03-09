@extends('layouts.master')
@section('title')
    @lang('translation.Telephone')
@endsection
@section('css')
@endsection
@section('content')
@section('pagetitle')
    @lang('translation.Telephone')
@endsection
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">{{ __('Telephone_Table') }}</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <a href="{{ route('phone.index') }}">
                    <h5 class="font-size-14 mb-4">
                        <i class="mdi mdi-arrow-right text-primary me-1"></i>
                        @lang('Back to Telephone List')
                    </h5>
                </a>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="text-center" style="width: 100%;">
                            <tr>
                                <th>{{ __('Phone Code') }}</th>
                                <th>{{ __('Code') }}</th>
                                <th>{{ __('Country') }}</th>
                                <th>{{ __('Status') }}</th>
                                <th>{{ __('Note') }}</th>
                                <th>{{ __('Slug') }}</th>
                                <th>{{ __('Created At') }}</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr class="align-middle">
                                <td>{{ $phone_code->present()->phoneCode() }}</td>
                                <td>{{ $phone_code->present()->code() }}</td>
                                <td>{!! $phone_code->present()->flag() !!}</td>
                                <td>{!! $phone_code->present()->status() !!}</td>
                                <td>{{ $phone_code->present()->note() }}</td>
                                <td>{{ $phone_code->present()->slug() }}</td>
                                <td>{{ $phone_code->present()->created_at() }}</td>
                                <td>{!! $phone_code->present()->showActionButton() !!}</td>
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
