@extends('layouts.master')
@section('title') @lang('translation.Client_Form') @endsection
@section('css')
    <link href="{{ URL::asset('assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/libs/choices.js/choices.js.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/libs/@simonwep/@simonwep.min.css') }}" rel="stylesheet">
@endsection
@section('content')


@section('pagetitle'){{ __('Client Form') }} @endsection


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">{{ __('Client Form') }}</h4>
                </div>
                <!-- end card header -->
                <div class="card-body">
                    <form action="{{ route('client.update', $client) }}" method="post" enctype='multipart/form-data' rol="form" id="form">
                        @csrf
                        @method('PUT')
                        @include('auth.users.clients._form')
                        <div class="d-flex align-items-start gap-3 mt-4">
                            <button type="button" class="btn btn-primary w-sm" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                            <button type="button" class="btn btn-primary w-sm ms-auto" id="nextBtn" onclick="nextPrev(1)">Next</button>
                            <button type="submit" class="btn btn-primary w-sm ms-auto btn-update" id="submitBtn"
                                style="display: none">Submit</button>
                        </div>
                    </form>
                    <!-- end form -->
                </div>
            </div>
        </div><!-- end col -->
    </div><!-- end row -->
@endsection
@section('script')
    <script src="{{ URL::asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/form-wizard.init.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/choices.js/choices.js.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/@simonwep/@simonwep.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/form-advanced.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
