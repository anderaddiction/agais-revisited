@extends('layouts.master')
@section('title') @lang('translation.Form_Mask') @endsection
@section('content')


@section('pagetitle')Form Mask @endsection


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Imask</h4>
                </div>
                <div class="card-body">
                    <p class="card-title-desc">vanilla javascript input mask</p>

                    <form>
                        <div class="row">
                            <div class="col-lg-6">
                                <div>
                                    <div>
                                        <label for="regexp-mask" class="form-label">RegExp (Russian postal code)</label>
                                        <input type="text" class="form-control required" id="regexp-mask">
                                        <div class="text-muted">/^[1-6]\d{0,5}$/</div>
                                    </div>

                                    <div class="mt-4">
                                        <label for="phone-mask" class="form-label">Pattern (Phone)</label>
                                        <input type="text" class="form-control required" id="phone-mask">
                                        <div class="text-muted">+{7}(000)000-00-00</div>
                                    </div>
                                    <div class="mt-4">
                                        <label for="number-mask" class="form-label">Number</label>
                                        <input type="text" class="form-control required" id="number-mask">
                                        <div class="text-muted">in range [-10000, 10000]</div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->

                            <div class="col-lg-6">
                                <div class="mt-4 mt-lg-0">
                                    <div>
                                        <label for="date-mask" class="form-label">Date</label>
                                        <input type="text" class="form-control required" id="date-mask">
                                        <div class="text-muted">'dd.mm.yyyy' in range [01.01.1990, 01.01.2020]</div>
                                    </div>

                                    <div class="mt-4">
                                        <label class="form-label">On-the-fly select</label>
                                        <input type="text" class="form-control required" id="dynamic-mask">
                                        <div class="text-muted">phone or email</div>
                                    </div>
                                    <div class="mt-4">
                                        <label class="form-label">Mask in mask</label>
                                        <input type="text" class="form-control required" id="currency-mask">
                                        <div class="text-muted">currency input</div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                    </form>
                    <!-- end form -->
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
    <script src="{{ URL::asset('assets/libs/imask/imask.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/form-mask.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
