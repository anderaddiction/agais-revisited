@extends('layouts.master')
@section('title') @lang('translation.Categories') @endsection
@section('css')
<link href="{{ URL::asset('assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/libs/choices.js/choices.js.min.css') }}" rel="stylesheet">
@endsection
@section('content')
@section('pagetitle') @lang('translation.Categories') @endsection
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">@lang('Categories_form')</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mt-4 mt-xl-0">
                            <a href="{{ route('category.index') }}">
                                <h5 class="font-size-14 mb-4">
                                <i class="mdi mdi-arrow-right text-primary me-1"></i>
                                @lang('Back to Categories List')
                            </h5>
                            </a>
                            <form action="{{ route('category.store') }}" method="POST" rol="form" id="form">
                                @include('auth.categories._form')
                                <div class="mt-4">
                                    <button type="submit" class="btn btn-primary w-md btn-save">{{ __('Send') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
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
<script src="{{ URL::asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/choices.js/choices.js.min.js') }}"></script>
<link href="{{ URL::asset('assets/libs/@simonwep/@simonwep.min.css') }}" rel="stylesheet">
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
