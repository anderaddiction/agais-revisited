@extends('layouts.master')
@section('title') @lang('translation.Documents') @endsection
@section('css')

@endsection
@section('content')
@section('pagetitle') @lang('translation.Documents') @endsection
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">@lang('translation.Documents_table')</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <a href="{{ route('document.index') }}">
                    <h5 class="font-size-14 mb-4">
                        <i class="mdi mdi-arrow-right text-primary me-1"></i>
                        @lang('Back to Documents List')
                    </h5>
                </a>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="text-center" style="width: 100%;">
                            <tr>
                                <th class="col-2">{{ __('Name') }}</th>
                                <th>{{ __('Acronym') }}</th>
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
                                <td>{{ $document->present()->name() }}</td>
                                <td>{{ $document->present()->acronym() }}</td>
                                <td>{{ $document->present()->code() }}</td>
                                <td>{!! $document->present()->flag() !!}</td>
                                <td>{!! $document->present()->status() !!}</td>
                                <td>{{ $document->present()->note() }}</td>
                                <td>{{ $document->present()->slug() }}</td>
                                <td>{{ $document->present()->created_at() }}</td>
                                <td>{!! $document->present()->showActionButton() !!}</td>
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
