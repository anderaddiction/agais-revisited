@extends('layouts.master')
@section('title') @lang('translation.Inbox') @endsection
@section('css')
<link href="{{ URL::asset('assets/libs/choices.js/choices.js.min.css') }}" rel="stylesheet">
@endsection
@section('content')


@section('pagetitle')Inbox @endsection


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
                                    <input type="text" class="form-control required" placeholder="Search...">
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

                <div>
                    <h6 class="text-muted text-uppercase mb-3">Today</h6>
                    @foreach ($mails as $mail)
                        <div class="card mb-2">
                            <div class="message-list mb-0 p-1">
                                <div class="list">
                                    <div class="col-mail col-mail-1">
                                        <div class="checkbox-wrapper-mail">
                                            <input type="checkbox" id="chk1">
                                            <label for="chk1" class="toggle"></label>
                                        </div>
                                        <div class="d-flex title align-items-center">
                                            @foreach ($senders as $sender)
                                                <img class="avatar-sm rounded-circle"
                                                    src="@if ($sender->avatar != ''){{ URL::asset('images/' . $sender->avatar) }}@else{{ URL::asset('assets/images/users/avatar-1.jpg') }}@endif"
                                                    alt="Header Avatar">
                                                <div class="flex-1 ms-2 ps-1">
                                                    <h5 class="font-size-14 mb-0"><a href="" class="text-dark">{{ $sender->name }}</a></h5>
                                                    <a href="" class="text-muted text-uppercase font-size-12">23 Threads</a>
                                                </div>
                                            @endforeach
                                        </div>
                                        <span class="star-toggle far fa-star"></span>
                                    </div>
                                    <div class="col-mail col-mail-2">
                                        <a href="{{ route('mail.show', $mail->mail_id) }}" class="subject text-dark"> {!! $mail->subject !!}
                                            <span class="teaser text-muted fw-normal">{!! $mail->body !!}</span>
                                        </a>
                                        <div class="date"><i class="mdi mdi-link-variant me-2 font-size-15 align-middle"></i> {{ Carbon\Carbon::parse($mail->created_at)->format('H:m A') }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="card mb-2">
                        <div class="message-list mb-0 p-1">
                            <div class="list">
                                <div class="col-mail col-mail-1">
                                    <div class="checkbox-wrapper-mail">
                                        <input type="checkbox" id="chk2">
                                        <label for="chk2" class="toggle"></label>
                                    </div>
                                    <div class="d-flex title align-items-center">
                                        <img src="{{ URL::asset('assets/images/users/avatar-2.jpg') }}" class="avatar-sm rounded-circle"
                                            alt="">
                                        <div class="flex-1 ms-2 ps-1">
                                            <h5 class="font-size-14 mb-0"><a href="" class="text-dark">me,
                                                    Susanna</a></h5>
                                            <a href="" class="text-muted text-uppercase font-size-12">07 Threads</a>
                                        </div>
                                    </div>
                                    <span class="star-toggle far fa-star"></span>
                                </div>
                                <div class="col-mail col-mail-2">
                                    <a href="#" class="subject text-dark"><span
                                            class="bg-warning badge me-2">Freelance</span> Wolombo has been arranged, –
                                        <span class="teaser text-muted fw-normal">Alright thanks. I'll have to re-book that
                                            somehow, i'll get back to you.</span>
                                    </a>
                                    <div class="date"><i
                                            class="mdi mdi-link-variant me-2 font-size-15 align-middle"></i> 8:23 AM</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="message-list mb-0 p-1">
                            <div class="list">
                                <div class="col-mail col-mail-1">
                                    <div class="checkbox-wrapper-mail">
                                        <input type="checkbox" id="chk3">
                                        <label for="chk3" class="toggle"></label>
                                    </div>
                                    <div class="d-flex title align-items-center">
                                        <img src="{{ URL::asset('assets/images/users/avatar-4.jpg') }}" class="avatar-sm rounded-circle"
                                            alt="">
                                        <div class="flex-1 ms-2 ps-1">
                                            <h5 class="font-size-14 mb-0"><a href="" class="text-dark">Web
                                                    Support</a></h5>
                                            <a href="" class="text-muted text-uppercase font-size-12">14 Threads</a>
                                        </div>
                                    </div>
                                    <span class="star-toggle far fa-star"></span>
                                </div>
                                <div class="col-mail col-mail-2">
                                    <a href="#" class="subject text-dark"> Re: New mail settings – <span
                                            class="teaser text-muted fw-normal">Will you answer him asap?</span>
                                    </a>
                                    <div class="date"><i
                                            class="mdi mdi-link-variant me-2 font-size-15 align-middle"></i> 6:36 PM</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div>
                    <h6 class="text-muted text-uppercase mb-3">Yesterday</h6>
                    <div class="card mb-2">
                        <div class="message-list mb-0 p-1">
                            <div class="list">
                                <div class="col-mail col-mail-1">
                                    <div class="checkbox-wrapper-mail">
                                        <input type="checkbox" id="chk4">
                                        <label for="chk4" class="toggle"></label>
                                    </div>
                                    <div class="d-flex title align-items-center">
                                        <img src="{{ URL::asset('assets/images/users/avatar-1.jpg') }}" class="avatar-sm rounded-circle"
                                            alt="">
                                        <div class="flex-1 ms-2 ps-1">
                                            <h5 class="font-size-14 mb-0"><a href="" class="text-dark">Whitney
                                                    Peter</a></h5>
                                            <a href="" class="text-muted text-uppercase font-size-12">23 Threads</a>
                                        </div>
                                    </div>
                                    <span class="star-toggle far fa-star"></span>
                                </div>
                                <div class="col-mail col-mail-2">
                                    <a href="#" class="subject text-dark"> <span class="bg-info badge me-2">Support</span>
                                        Off on Thursday - <span class="teaser text-muted fw-normal">Eff that place, you
                                            might as well stay here with us instead! Sent from my iPhone 4 4 mar 2014 at
                                            5:55 pm</span>
                                    </a>
                                    <div class="date"><i
                                            class="mdi mdi-link-variant me-2 font-size-15 align-middle"></i> 3:26 AM</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="message-list mb-0 p-1">
                            <div class="list">
                                <div class="col-mail col-mail-1">
                                    <div class="checkbox-wrapper-mail">
                                        <input type="checkbox" id="chk5">
                                        <label for="chk5" class="toggle"></label>
                                    </div>
                                    <div class="d-flex title align-items-center">
                                        <img src="{{ URL::asset('assets/images/users/avatar-6.jpg') }}" class="avatar-sm rounded-circle"
                                            alt="">
                                        <div class="flex-1 ms-2 ps-1">
                                            <h5 class="font-size-14 mb-0"><a href="" class="text-dark">Death to
                                                    Stock</a></h5>
                                            <a href="" class="text-muted text-uppercase font-size-12">17 Threads</a>
                                        </div>
                                    </div>
                                    <span class="star-toggle far fa-star"></span>
                                </div>
                                <div class="col-mail col-mail-2">
                                    <a href="#" class="subject text-dark"> <span
                                            class="bg-primary badge me-2">Social</span> This Week's Top Stories – <span
                                            class="teaser text-muted fw-normal">Our top pick for you on Medium this week
                                            The Man Who Destroyed America’s Ego</span>
                                    </a>
                                    <div class="date"><i
                                            class="mdi mdi-link-variant me-2 font-size-15 align-middle"></i> 4:32 PM</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <h6 class="text-muted text-uppercase mb-3">27 March</h6>
                    <div class="card mb-2">
                        <div class="message-list mb-0 p-1">
                            <div class="list">
                                <div class="col-mail col-mail-1">
                                    <div class="checkbox-wrapper-mail">
                                        <input type="checkbox" id="chk6">
                                        <label for="chk6" class="toggle"></label>
                                    </div>
                                    <div class="d-flex title align-items-center">
                                        <img src="{{ URL::asset('assets/images/users/avatar-1.jpg') }}" class="avatar-sm rounded-circle"
                                            alt="">
                                        <div class="flex-1 ms-2 ps-1">
                                            <h5 class="font-size-14 mb-0"><a href="" class="text-dark">Andrew
                                                    Zimmer</a></h5>
                                            <a href="" class="text-muted text-uppercase font-size-12">02 Threads</a>
                                        </div>
                                    </div>
                                    <span class="star-toggle far fa-star"></span>
                                </div>
                                <div class="col-mail col-mail-2">
                                    <a href="#" class="subject text-dark"> Mochila Beta: Subscription Confirmed – <span
                                            class="teaser text-muted fw-normal">You've been confirmed! Welcome to the
                                            ruling class of the inbox. For your records, here is a copy of the information
                                            you submitted to us...</span>
                                    </a>
                                    <div class="date"><i
                                            class="mdi mdi-link-variant me-2 font-size-15 align-middle"></i> 4:24 PM</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="message-list mb-0 p-1">
                            <div class="list">
                                <div class="col-mail col-mail-1">
                                    <div class="checkbox-wrapper-mail">
                                        <input type="checkbox" id="chk7">
                                        <label for="chk7" class="toggle"></label>
                                    </div>
                                    <div class="d-flex title align-items-center">
                                        <img src="{{ URL::asset('assets/images/users/avatar-2.jpg') }}" class="avatar-sm rounded-circle"
                                            alt="">
                                        <div class="flex-1 ms-2 ps-1">
                                            <h5 class="font-size-14 mb-0"><a href="" class="text-dark">Randy, me
                                                    (5)</a></h5>
                                            <a href="" class="text-muted text-uppercase font-size-12">15 Threads</a>
                                        </div>
                                    </div>
                                    <span class="star-toggle far fa-star"></span>
                                </div>
                                <div class="col-mail col-mail-2">
                                    <a href="#" class="subject text-dark"><span
                                            class="bg-success badge me-2">Family</span> Weekend on Revibe – <span
                                            class="teaser text-muted fw-normal">Today's Friday and we thought maybe you
                                            want some music inspiration for the weekend. Here are some trending tracks and
                                            playlists we think you should give a listen!</span>
                                    </a>
                                    <div class="date"><i
                                            class="mdi mdi-link-variant me-2 font-size-15 align-middle"></i> 4:24 PM</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="message-list mb-0 p-1">
                            <div class="list">
                                <div class="col-mail col-mail-1">
                                    <div class="checkbox-wrapper-mail">
                                        <input type="checkbox" id="chk8">
                                        <label for="chk8" class="toggle"></label>
                                    </div>
                                    <div class="d-flex title align-items-center">
                                        <img src="{{ URL::asset('assets/images/users/avatar-7.jpg') }}" class="avatar-sm rounded-circle"
                                            alt="">
                                        <div class="flex-1 ms-2 ps-1">
                                            <h5 class="font-size-14 mb-0"><a href="" class="text-dark">KanbanFlow</a>
                                            </h5>
                                            <a href="" class="text-muted text-uppercase font-size-12">06 Threads</a>
                                        </div>
                                    </div>
                                    <span class="star-toggle far fa-star"></span>
                                </div>
                                <div class="col-mail col-mail-2">
                                    <a href="#" class="subject text-dark"> Task assigned: Clone ARP's website
                                        – <span class="teaser text-muted fw-normal">You have been assigned a task by
                                            Alex@Work on the board Web.</span>
                                    </a>
                                    <div class="date"><i
                                            class="mdi mdi-link-variant me-2 font-size-15 align-middle"></i> 7:36 AM</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="message-list mb-0 p-1">
                            <div class="list">
                                <div class="col-mail col-mail-1">
                                    <div class="checkbox-wrapper-mail">
                                        <input type="checkbox" id="chk9">
                                        <label for="chk9" class="toggle"></label>
                                    </div>
                                    <div class="d-flex title align-items-center">
                                        <img src="{{ URL::asset('assets/images/users/avatar-3.jpg') }}" class="avatar-sm rounded-circle"
                                            alt="">
                                        <div class="flex-1 ms-2 ps-1">
                                            <h5 class="font-size-14 mb-0"><a href="" class="text-dark">Revibe</a>
                                            </h5>
                                            <a href="" class="text-muted text-uppercase font-size-12">25 Threads</a>
                                        </div>
                                    </div>
                                    <span class="star-toggle far fa-star"></span>
                                </div>
                                <div class="col-mail col-mail-2">
                                    <a href="#" class="subject text-dark"> Last pic over my village – <span
                                            class="teaser text-muted fw-normal">Yeah i'd like that! Do you remember the
                                            video you showed me of your train ride between Colombo and Kandy? The one with
                                            the mountain view? I would love to see that one again!</span>
                                    </a>
                                    <div class="date"><i
                                            class="mdi mdi-link-variant me-2 font-size-15 align-middle"></i> 9:52 PM</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <h6 class="text-muted text-uppercase mb-3">26 March</h6>
                    <div class="card">
                        <div class="message-list mb-0 p-1">
                            <div class="list">
                                <div class="col-mail col-mail-1">
                                    <div class="checkbox-wrapper-mail">
                                        <input type="checkbox" id="chk10">
                                        <label for="chk10" class="toggle"></label>
                                    </div>
                                    <div class="d-flex title align-items-center">
                                        <img src="{{ URL::asset('assets/images/users/avatar-1.jpg') }}" class="avatar-sm rounded-circle"
                                            alt="">
                                        <div class="flex-1 ms-2 ps-1">
                                            <h5 class="font-size-14 mb-0"><a href="" class="text-dark">Erik, me
                                                    (5)</a></h5>
                                            <a href="" class="text-muted text-uppercase font-size-12">07 Threads</a>
                                        </div>
                                    </div>
                                    <span class="star-toggle far fa-star"></span>
                                </div>
                                <div class="col-mail col-mail-2">
                                    <a href="#" class="subject text-dark"> <span
                                            class="bg-danger badge me-2">Friends</span> Let's go fishing! – <span
                                            class="teaser text-muted fw-normal">Hey, You wanna join me and Fred at the lake
                                            tomorrow? It'll be awesome.</span>
                                    </a>
                                    <div class="date"><i
                                            class="mdi mdi-link-variant me-2 font-size-15 align-middle"></i> 5:05 PM</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <h6 class="text-muted text-uppercase mb-3">25 March</h6>
                    <div class="card mb-2">
                        <div class="message-list mb-0 p-1">
                            <div class="list">
                                <div class="col-mail col-mail-1">
                                    <div class="checkbox-wrapper-mail">
                                        <input type="checkbox" id="chk11">
                                        <label for="chk11" class="toggle"></label>
                                    </div>
                                    <div class="d-flex title align-items-center">
                                        <img src="{{ URL::asset('assets/images/users/avatar-1.jpg') }}" class="avatar-sm rounded-circle"
                                            alt="">
                                        <div class="flex-1 ms-2 ps-1">
                                            <h5 class="font-size-14 mb-0"><a href="" class="text-dark">Stack
                                                    Exchange</a></h5>
                                            <a href="" class="text-muted text-uppercase font-size-12">19 Threads</a>
                                        </div>
                                    </div>
                                    <span class="star-toggle far fa-star"></span>
                                </div>
                                <div class="col-mail col-mail-2">
                                    <a href="#" class="subject text-dark"> 1 new items in your Stackexchange inbox
                                        – <span class="teaser text-muted fw-normal"> The following items were added to your
                                            Stack Exchange global inbox since you last checked it.</span>
                                    </a>
                                    <div class="date"><i
                                            class="mdi mdi-link-variant me-2 font-size-15 align-middle"></i> 7:30 PM</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="message-list mb-0 p-1">
                            <div class="list">
                                <div class="col-mail col-mail-1">
                                    <div class="checkbox-wrapper-mail">
                                        <input type="checkbox" id="chk12">
                                        <label for="chk12" class="toggle"></label>
                                    </div>
                                    <div class="d-flex title align-items-center">
                                        <img src="{{ URL::asset('assets/images/users/avatar-7.jpg') }}" class="avatar-sm rounded-circle"
                                            alt="">
                                        <div class="flex-1 ms-2 ps-1">
                                            <h5 class="font-size-14 mb-0"><a href="" class="text-dark">Google Drive
                                                    Team</a></h5>
                                            <a href="" class="text-muted text-uppercase font-size-12">47 Threads</a>
                                        </div>
                                    </div>
                                    <span class="star-toggle far fa-star"></span>
                                </div>
                                <div class="col-mail col-mail-2">
                                    <a href="#" class="subject text-dark"> You can now use your storage in Google
                                        Drive – <span class="teaser text-muted fw-normal">Hey Nicklas Sandell! Thank you
                                            for purchasing extra storage space in Google Drive.</span>
                                    </a>
                                    <div class="date"><i
                                            class="mdi mdi-link-variant me-2 font-size-15 align-middle"></i> 9:14 AM</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="message-list mb-0 p-1">
                            <div class="list">
                                <div class="col-mail col-mail-1">
                                    <div class="checkbox-wrapper-mail">
                                        <input type="checkbox" id="chk13">
                                        <label for="chk13" class="toggle"></label>
                                    </div>
                                    <div class="d-flex title align-items-center">
                                        <img src="{{ URL::asset('assets/images/users/avatar-4.jpg') }}" class="avatar-sm rounded-circle"
                                            alt="">
                                        <div class="flex-1 ms-2 ps-1">
                                            <h5 class="font-size-14 mb-0"><a href="" class="text-dark">me, Peter
                                                    (5)</a></h5>
                                            <a href="" class="text-muted text-uppercase font-size-12">07 Threads</a>
                                        </div>
                                    </div>
                                    <span class="star-toggle far fa-star"></span>
                                </div>
                                <div class="col-mail col-mail-2">
                                    <a href="#" class="subject text-dark"> <span class="bg-info badge me-2">Support</span>
                                        Home again! – <span class="teaser text-muted fw-normal">That's just perfect! See
                                            you tomorrow.</span>
                                    </a>
                                    <div class="date"><i
                                            class="mdi mdi-link-variant me-2 font-size-15 align-middle"></i> 6:56 PM</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-7">
                        Showing 1 - 20 of 1,524
                    </div>
                    <div class="col-5">
                        <div class="btn-group float-end">
                            <button type="button" class="btn btn-sm btn-success waves-effect"><i
                                    class="fa fa-chevron-left"></i></button>
                            <button type="button" class="btn btn-sm btn-success waves-effect"><i
                                    class="fa fa-chevron-right"></i></button>
                        </div>
                    </div>
                </div>

            </div> <!-- end Col-9 -->

        </div>

    </div><!-- End row -->

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
