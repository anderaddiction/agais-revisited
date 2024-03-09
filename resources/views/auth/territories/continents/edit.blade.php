@extends('layouts.master')
@section('title') @lang('translation.Continents') @endsection
@section('css')

@endsection
@section('content')
@section('pagetitle') @lang('translation.Continents') @endsection
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">{{ __('continents_form') }}</h4>
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
                            <a href="{{ route('continent.index') }}">
                                <h5 class="font-size-14 mb-4">
                                <i class="mdi mdi-arrow-right text-primary me-1"></i>
                                @lang('Back to Continents List')
                            </h5>
                            </a>
                            <form action="{{ route('continent.update', $continent) }}" method="POST" rol="form" id="form">
                                @method('PUT')
                                @include('auth.territories.continents._form')
                                <div class="mt-4">
                                    <button type="submit" class="btn btn-primary w-md btn-update">{{ __('Update') }}</button>
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
