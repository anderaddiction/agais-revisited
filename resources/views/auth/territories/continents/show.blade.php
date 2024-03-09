@extends('layouts.master')
@section('title')
    @lang('translation.Continents')
@endsection
@section('css')
@endsection
@section('content')
@section('pagetitle')
    @lang('translation.Continents')
@endsection
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">{{ __('continents_Table') }}</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <a href="{{ route('continent.index') }}">
                    <h5 class="font-size-14 mb-4">
                        <i class="mdi mdi-arrow-right text-primary me-1"></i>
                        @lang('Back to Continents List')
                    </h5>
                </a>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="text-center" style="width: 100%;">
                            <tr>
                                <th>{{ __('Name') }}</th>
                                <th>{{ __('Code') }}</th>
                                <th>{{ __('Slug') }}</th>
                                <th>{{ __('Note') }}</th>
                                <th class="col-3">{{ __('Created At') }}</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr class="align-middle">
                                <td>{{ $continent->present()->name() }}</td>
                                <td>{{ $continent->present()->code() }}</td>
                                <td>{{ $continent->present()->slug() }}</td>
                                <td>{{ $continent->present()->note() }}</td>
                                <td>{{ $continent->present()->created_at() }}</td>
                                <td>{!! $continent->present()->showActionButton() !!}</td>
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
