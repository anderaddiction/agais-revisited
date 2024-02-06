@extends('layouts.master')
@section('title') @lang('translation.Read_Email') @endsection
@section('css')
<link href="{{ URL::asset('assets/libs/choices.js/choices.js.min.css') }}" rel="stylesheet">
@endsection
@section('content')


@section('pagetitle')Read Email @endsection


    <div class="row">
        <div class="col-12">
            <!-- Left sidebar -->
            @include('auth.communications.partials.mail.left-sidebar')
            <!-- End Left sidebar -->

            <!-- Right Sidebar -->
            <div class="email-rightbar mb-3">

                <div class="row mb-4">
                    <div class="col-xl-3 col-md-12">
                        <div class="pb-3 pb-xl-0">
                            <form class="email-search">
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="bx bx-search font-size-18"></span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-9 col-md-12">
                        <div class="pb-3 pb-xl-0">
                            <div class="btn-toolbar float-end" role="toolbar">
                                <div class="btn-group me-2 mb-2 mb-sm-0">
                                    <button type="button" class="btn btn-primary waves-light waves-effect"><i
                                            class="fa fa-inbox"></i></button>
                                    <button type="button" class="btn btn-primary waves-light waves-effect"><i
                                            class="fa fa-exclamation-circle"></i></button>
                                    <button type="button" class="btn btn-primary waves-light waves-effect"><i
                                            class="far fa-trash-alt"></i></button>
                                </div>
                                <div class="btn-group me-2 mb-2 mb-sm-0">
                                    <button type="button" class="btn btn-primary waves-light waves-effect dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-folder"></i> <i class="mdi mdi-chevron-down ms-1"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Updates</a>
                                        <a class="dropdown-item" href="#">Social</a>
                                        <a class="dropdown-item" href="#">Team Manage</a>
                                    </div>
                                </div>
                                <div class="btn-group me-2 mb-2 mb-sm-0">
                                    <button type="button" class="btn btn-primary waves-light waves-effect dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-tag"></i> <i class="mdi mdi-chevron-down ms-1"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Updates</a>
                                        <a class="dropdown-item" href="#">Social</a>
                                        <a class="dropdown-item" href="#">Team Manage</a>
                                    </div>
                                </div>

                                <div class="btn-group me-2 mb-2 mb-sm-0">
                                    <button type="button" class="btn btn-primary waves-light waves-effect dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        More <i class="mdi mdi-dots-vertical ms-2"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Mark as Unread</a>
                                        <a class="dropdown-item" href="#">Mark as Important</a>
                                        <a class="dropdown-item" href="#">Add to Tasks</a>
                                        <a class="dropdown-item" href="#">Add Star</a>
                                        <a class="dropdown-item" href="#">Mute</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-4">
                            <div class="flex-shrink-0 me-3">
                                <img class="rounded-circle avatar-sm" src="@if ($sender->avatar != ''){{ URL::asset('images/' . $sender->avatar) }}@else{{ URL::asset('assets/images/users/avatar-1.jpg') }}@endif"
                                    alt="Generic placeholder image">
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="font-size-14 mb-0">{{ $sender->name }}</h5>
                                <small class="text-muted">{{ $sender->email }}</small>
                            </div>
                        </div>

                        <h4 class="font-size-16">{{ $mail->subject }}</h4>
                        <p>{!! $mail->body !!}</p>
                        <hr>

                        <div class="row">
                            <div class="col-xl-2 col-6">
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="{{ URL::asset('assets/images/small/img-3.jpg') }}"
                                        alt="Card image cap">
                                    <div class="py-2 text-center">
                                        <a href="javascript: void(0);" class="fw-medium">Download</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-6">
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="{{ URL::asset('assets/images/small/img-4.jpg') }}"
                                        alt="Card image cap">
                                    <div class="py-2 text-center">
                                        <a href="javascript: void(0);" class="fw-medium">Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="javascript: void(0);" class="btn btn-secondary waves-effect mt-4"><i
                                class="mdi mdi-reply me-1"></i> Reply</a>
                    </div>
                </div>



            </div> <!-- end Col-9 -->
        </div>
    </div>


    <!-- Modal -->
    @include('auth.communications.partials.mail.modal')
    <!-- End Modal -->

@endsection
@section('script')
    <script src="{{ URL::asset('assets/libs/@ckeditor/@ckeditor.min.js') }}"></script>
    {{-- <script src="{{ URL::asset('assets/js/pages/email-editor.init.js') }}"></script> --}}
    <script src="{{ URL::asset('assets/libs/choices.js/choices.js.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/form-advanced.init.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.min.js') }}"></script>
    <script>
        $(document).ready(function () {
                $("#send-email").click(function (e) {
                    e.preventDefault();
                    //Variables
                    var form        = document.querySelector('#mail-form');
                    var parameters  = new FormData(form);
                    var route       = form.action;

                    //Paso de parametros al backend
                    $.ajax({
                        type: "POST",
                        url: route,
                        data:parameters,
                        processData: false,
                        contentType: false,
                        success: function (data) {
                            Swal.fire({
                                    title: data.title,
                                    text: data.text,
                                    icon: "warning",
                                    showCancelButton: true,
                                    confirmButtonColor: "#51d28c",
                                    cancelButtonColor: "#f34e4e",
                                    confirmButtonText: "Yes!"
                                }).then(function (result) {
                                    if (result.value) {
                                        $('#mail-form')[0].reset();
                                    }else{
                                        $('#mail-form')[0].reset();
                                        $("#composemodal").modal('toggle');
                                    }
                            });
                        },
                        error:function(err){
                            let error = err.responseJSON;
                            $.each(error.errors, function (index, value) {
                                $('.pristine-error').append('<span>'+value+'<span>'+'<br>');
                            });
                        }
                    });
                });
            });
    </script>
@endsection
