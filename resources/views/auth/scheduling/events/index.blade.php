@extends('layouts.master')
@section('title') @lang('translation.Calendars') @endsection
@section('css')
    <link href="{{ URL::asset('/assets/libs/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/assets/libs/choices.js/choices.js.min.css') }}" rel="stylesheet">
@endsection
@section('content')
@section('pagetitle')Calendar @endsection
<div class="row">
    <div class="col-12">
        <div class="row">
            <div class="col-xl-3">
                <div class="card card-h-100">
                    <div class="card-body">
                        <button class="btn btn-primary w-100" id="btn-new-event"><i class="mdi mdi-plus"></i> Create New
                            Event</button>

                        <div id="external-events">
                            <br>
                            <p class="text-muted">{{ __('Drag and drop your event or click in the calendar') }}</p>

                            @foreach ($categories as $category)
                                <div class="external-event fc-event bg-success" data-class="bg-success">
                                    <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>{{ $category->name }}
                                </div>
                            @endforeach
                            <div class="external-event fc-event bg-info" data-class="bg-info">
                                <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Meeting
                            </div>
                            <div class="external-event fc-event bg-warning" data-class="bg-warning">
                                <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Generating Reports
                            </div>
                            <div class="external-event fc-event bg-danger" data-class="bg-danger">
                                <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Create New theme
                            </div>
                        </div>

                    </div>
                </div>
            </div> <!-- end col-->

            <div class="col-xl-9">
                <div class="card card-h-100">
                    <div class="card-body">
                        <div id="calendar"></div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>

        <div style='clear:both'></div>

        <!-- Add New Event MODAL -->
        <div class="modal fade" id="event-modal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header py-3 px-4 border-bottom-0">
                        <h5 class="modal-title" id="modal-title">Event</h5>

                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-hidden="true"></button>

                    </div>
                    <div class="modal-body p-4">
                        <form class="needs-validation" name="event-form" id="form-event" novalidate>
                            <div class="row">
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('Event Name') }}</label>
                                        <input class="form-control" placeholder="Insert Event Name" type="text"
                                            name="name" id="name" required value="" />
                                        <div class="pristine-error text-danger">{{ $errors->first('name') }}</div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('Event Start At') }}</label>
                                        <input class="form-control" placeholder="Insert Event Date Start" type="text" name="event_start"
                                            id="event_start" required value="" />
                                        <div class="pristine-error text-danger">{{ $errors->first('event_start') }}</div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('Event Ends At') }}</label>
                                        <input class="form-control" placeholder="{{ __('Insert Event Name') }}" type="text" name="event_end" id="event_end"
                                            required value="{{ old('event_end', $event->event_end) }}" />
                                        <div class="pristine-error text-danger">{{ $errors->first('event_end') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="category_id">{{ __('Category') }}</label>
                                        <select class="form-select" name="category_id" id="category_id">
                                            <option value="">{{ __('Select an option') }}</option>
                                            @foreach ($categories as $category)
                                            <option {{ collect(old('category_id', $event->categories->pluck('id')))->contains($category->id) ?
                                                'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        <div class="pristine-error text-danger" style="margin-top: -6%">{{ $errors->first('category_id') }}</div>
                                    </div>
                                </div>
                                {{-- <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="category_id">{{ __('Category') }}</label>
                                        <select class="form-select choices-multiple" data-trigger name="category_id[]" multiple>
                                            <option value="">{{ __('Select an option') }}</option>
                                            @foreach ($categories as $id => $name)
                                            <option {{ collect(old('category_id', $event->categories->pluck('id')))->contains($id) ?
                                                'selected' : '' }} value="{{ $id }}">{{ $name }}</option>
                                            @endforeach
                                        </select>
                                        <div class="pristine-error text-danger" style="margin-top: -6%">{{ $errors->first('category_id') }}</div>
                                    </div>
                                </div> --}}
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="status">{{ __('Status') }}</label>
                                        <select class="form-select" name="status">
                                            <option value=" ">{{ __('Select an option') }}</option>
                                            <option value="1" {{ old('status', $event->status) == '1' ? 'selected' : '' }}>@lang('Active')
                                            </option>
                                            <option value="0" {{ old('status', $event->status) == '0' ? 'selected' : '' }}>@lang('Inactive')
                                            </option>
                                        </select>
                                        <div class="pristine-error text-danger">{{ $errors->first('status') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="note">{{ __('Note') }}</label>
                                        <textarea class="form-control" name="note" id="note" cols="30"
                                            rows="5">{{ old('note', $event->note) }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-6">
                                    <button type="button" class="btn btn-danger" id="btn-delete-event">Delete</button>
                                </div>
                                <div class="col-6 text-end">
                                    <button type="button" class="btn btn-light me-1"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success" id="btn-save-event">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> <!-- end modal-content-->
            </div> <!-- end modal dialog-->
        </div>
        <!-- end modal-->
    </div>
</div>
@endsection
@section('script')
    <script src="{{ URL::asset('/assets/libs/choices.js/choices.js.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/pages/form-advanced.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/fullcalendar/fullcalendar.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/pages/calendar.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
