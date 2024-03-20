@extends('layouts.master')
@section('title')
    @lang('translation.Categories')
@endsection
@section('css')
@endsection
@section('content')
@section('pagetitle')
    @lang('translation.Categories')
@endsection
<div class="row align-items-center">
    <div class="col-md-6">
        <div class="mb-3">
            <h4 class="card-title">@lang('Category') {{ $category->present()->name() }}</h4>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table align-middle project-list-table table-nowrap table-hover data-table" style="width:100%"
            id="dataTable">
            <thead class="text-center" style="width: 100%;">
                <tr>
                    <th class="col-3">{{ __('Name') }}</th>
                    <th>{{ __('Code') }}</th>
                    <th>{{ __('Status') }}</th>
                    <th>{{ __('Slug') }}</th>
                    <th>{{ __('Note') }}</th>
                    <th class="col-3">{{ __('Created At') }}</th>
                    <th>{{ __('Action') }}</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <tr class="align-middle">
                    <td>{{ $category->present()->name() }}</td>
                    <td>{{ $category->present()->code() }}</td>
                    <td>{!! $category->present()->status() !!}</td>
                    <td>{{ $category->present()->slug() }}</td>
                    <td>{{ $category->present()->note() }}</td>
                    <td>{{ $category->present()->created_at() }}</td>
                    <td>{!! $category->present()->showActionButton() !!}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
@section('script')
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
