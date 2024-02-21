@extends('layouts.master')
@section('title') @lang('translation.Municipalities') @endsection
@section('css')

@endsection
@section('content')
@section('pagetitle') @lang('translation.Municipalities') @endsection
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">@lang('Municipalities_form')</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mt-4 mt-xl-0">
                            @if (session()->has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                            @endif
                            <a href="{{ route('municipality.index') }}">
                                <h5 class="font-size-14 mb-4">
                                <i class="mdi mdi-arrow-right text-primary me-1"></i>
                                @lang('Back to Municipalities List')
                            </h5>
                            </a>
                            <form action="{{ route('municipality.store') }}" method="POST" rol="form" id="form">
                                @include('auth.territories.municipalities._form')
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
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
