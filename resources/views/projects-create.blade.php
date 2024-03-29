@extends('layouts.master')
@section('title') @lang('translation.Create_New') @endsection
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('assets/libs/flatpickr/flatpickr.min.css') }}">
    <link href="{{ URL::asset('assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet" type="text/css" />

@endsection
@section('content')


@section('pagetitle')Create New @endsection

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Create New Project</h4>
                </div>
                <div class="card-body">

                    <form>
                        <div class="row mb-4">
                            <label for="projectname" class="col-form-label col-lg-2">Project Name</label>
                            <div class="col-lg-10">
                                <input id="projectname" name="projectname" type="text" class="form-control required"
                                    placeholder="Enter Project Name...">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="projectdesc" class="col-form-label col-lg-2">Project Description</label>
                            <div class="col-lg-10">
                                <textarea class="form-control required" id="projectdesc" rows="3"
                                    placeholder="Enter Project Description..."></textarea>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label class="col-form-label col-lg-2">Project Date</label>
                            <div class="col-lg-10">
                                <div class="input-daterange input-group" id="project-date-inputgroup"
                                    data-provide="datepicker" data-date-format="dd M, yyyy"
                                    data-date-container='#project-date-inputgroup' data-date-autoclose="true">
                                    <input type="text" class="form-control required" id="datepicker-datetime-start"
                                        placeholder="Start Date" name="start" />
                                    <input type="text" class="form-control required" id="datepicker-datetime-end"
                                        placeholder="End Date" name="end" />
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="projectbudget" class="col-form-label col-lg-2">Budget</label>
                            <div class="col-lg-10">
                                <input id="projectbudget" name="projectbudget" type="text"
                                    placeholder="Enter Project Budget..." class="form-control required">
                            </div>
                        </div>
                    </form>
                    <div class="row mb-4">
                        <label class="col-form-label col-lg-2">Attached Files</label>
                        <div class="col-lg-10">
                            <form action="/" method="post" class="dropzone">
                                <div class="fallback">
                                    <input name="file" type="file" multiple />
                                </div>

                                <div class="dz-message needsclick">
                                    <div class="mb-3">
                                        <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                                    </div>

                                    <h4>Drop files here or click to upload.</h4>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-lg-10">
                            <button type="submit" class="btn btn-primary">Create Project</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

@endsection
@section('script')
    <!-- datepicker js -->
    <script src="{{ URL::asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>

    <!-- dropzone plugin -->
    <script src="{{ URL::asset('assets/libs/dropzone/dropzone.min.js') }}"></script>

    <!-- init js -->
    <script src="{{ URL::asset('assets/js/pages/task-creat.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
