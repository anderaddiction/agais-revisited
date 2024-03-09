@extends('layouts.master')
@section('title')
    @lang('translation.Roles')
@endsection
@section('css')
    <link href="{{ URL::asset('assets/libs/choices.js/choices.js.min.css') }}" rel="stylesheet">
@endsection
@section('content')
@section('pagetitle')
    @lang('translation.Roles')
@endsection
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">{{ __('Roles_form') }}</h4>
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
                            <a href="{{ route('role.index') }}">
                                <h5 class="font-size-14 mb-4">
                                    <i class="mdi mdi-arrow-right text-primary me-1"></i>
                                    @lang('Back to Roles List')
                                </h5>
                            </a>
                            <form action="{{ route('role.update', $role) }}" method="POST" rol="form"
                                id="form">
                                @method('PUT')
                                @include('auth.roles._form')
                                <div class="mt-4">
                                    <button type="submit"
                                        class="btn btn-primary w-md btn-update">{{ __('Update') }}</button>
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
<script src="{{ URL::asset('assets/libs/choices.js/choices.js.min.js') }}"></script>
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@vite(['resources/js/choices.js'])
@endsection
