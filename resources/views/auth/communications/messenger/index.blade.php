@extends('layouts.master')
@section('title') @lang('translation.Chat') @endsection
@section('css')
@endsection
@section('content')


@section('pagetitle')Chat @endsection


    <div class="d-lg-flex">
        <div class="chat-leftsidebar card">
            <div class="card-body">

                <div class="text-center bg-light rounded px-4 py-3">
                    <div class="text-end">
                        <div class="dropdown chat-noti-dropdown">
                            <button class="btn dropdown-toggle p-0" type="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-cog"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" href="#">Edit</a>
                                <a class="dropdown-item" href="#">Add Contact</a>
                                <a class="dropdown-item" href="#">Setting</a>
                            </div>
                        </div>
                    </div>
                    <div class="chat-user-status">
                        <img src="@if (Auth::user()->avatar != ''){{ URL::asset('images/' . Auth::user()->avatar) }}@else{{ URL::asset('assets/images/users/avatar-1.jpg') }}@endif" class="avatar-md rounded-circle" alt="">
                        <div class="">
                            <div class="status"></div>
                        </div>
                    </div>
                    <h5 class="font-size-16 mb-1 mt-3"><a href="#" class="text-dark">{{ Auth::user()->name }}</a></h5>
                    <p class="text-muted mb-0">{{ __('Available') }}</p>
                </div>
            </div>

            <div class="p-3">
                <div class="search-box position-relative">
                    <input type="text" class="form-control rounded border" placeholder="Search...">
                    <i class="search-icon" data-eva="search-outline" data-eva-height="26" data-eva-width="26"></i>
                </div>
            </div>

            <div class="chat-leftsidebar-nav">
                <ul class="nav nav-pills nav-justified bg-light p-1">
                    <li class="nav-item">
                        <a href="#chat" data-bs-toggle="tab" aria-expanded="true" class="nav-link active">
                            <i class="bx bx-chat font-size-20 d-sm-none"></i>
                            <span class="d-none d-sm-block">Chat</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#groups" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                            <i class="bx bx-group font-size-20 d-sm-none"></i>
                            <span class="d-none d-sm-block">Groups</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#contacts" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                            <i class="bx bx-book-content font-size-20 d-sm-none"></i>
                            <span class="d-none d-sm-block">Contacts</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane show active" id="chat">
                        <div class="chat-message-list" data-simplebar>
                            <div class="pt-3">
                                <div class="px-3">
                                    <h5 class="font-size-14 mb-3">Recent</h5>
                                </div>
                                <ul class="list-unstyled chat-list">
                                    <li class="active">
                                        <a href="#">
                                            <div class="d-flex align-items-start">
                                                <div class="flex-shrink-0 user-img online align-self-center me-3">
                                                    <img src="{{ URL::asset('assets/images/users/avatar-2.jpg') }}"
                                                        class="rounded-circle avatar-sm" alt="">
                                                    <span class="user-status"></span>
                                                </div>
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <h5 class="text-truncate font-size-13 mb-1">Jennie Sherlock</h5>
                                                    <p class="text-truncate mb-0">Hey! there I'm available</p>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <div class="font-size-11">02 min</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="unread">
                                        <a href="#">
                                            <div class="d-flex align-items-start">
                                                <div class="flex-shrink-0 user-img online align-self-center me-3">
                                                    <div class="avatar-sm align-self-center">
                                                        <span
                                                            class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                            S
                                                        </span>
                                                    </div>
                                                    <span class="user-status"></span>
                                                </div>

                                                <div class="flex-grow-1 overflow-hidden">
                                                    <h5 class="text-truncate font-size-13 mb-1">Stacie Dube</h5>
                                                    <p class="text-truncate mb-0">I've finished it! See you so</p>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <div class="font-size-11">10 min</div>
                                                </div>
                                                <div class="unread-message">
                                                    <span class="badge bg-danger rounded-pill">1</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="d-flex align-items-start">
                                                <div class="flex-shrink-0 user-img away align-self-center me-3">
                                                    <img src="{{ URL::asset('assets/images/users/avatar-3.jpg') }}"
                                                        class="rounded-circle avatar-sm" alt="">
                                                    <span class="user-status"></span>
                                                </div>

                                                <div class="flex-grow-1 overflow-hidden">
                                                    <h5 class="text-truncate font-size-13 mb-1">Katie Olson</h5>
                                                    <p class="text-truncate mb-0">This theme is awesome!</p>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <div class="font-size-11">22 min</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="d-flex align-items-start">

                                                <div class="flex-shrink-0 user-img align-self-center me-3">
                                                    <img src="{{ URL::asset('assets/images/users/avatar-4.jpg') }}"
                                                        class="rounded-circle avatar-sm" alt="">
                                                    <span class="user-status"></span>
                                                </div>

                                                <div class="flex-grow-1 overflow-hidden">
                                                    <h5 class="text-truncate font-size-13 mb-1">Marshall Wilson</h5>
                                                    <p class="text-truncate mb-0">Nice to meet you</p>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <div class="font-size-11">01 Hr</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="d-flex align-items-start">

                                                <div class="flex-shrink-0 user-img online align-self-center me-3">
                                                    <div class="avatar-sm align-self-center">
                                                        <span
                                                            class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                            J
                                                        </span>
                                                    </div>
                                                    <span class="user-status"></span>
                                                </div>

                                                <div class="flex-grow-1 overflow-hidden">
                                                    <h5 class="text-truncate font-size-13 mb-1">James Lee</h5>
                                                    <p class="text-truncate mb-0">Wow that's great</p>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <div class="font-size-11">04 Hrs</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="d-flex align-items-start">

                                                <div class="flex-shrink-0 user-img align-self-center me-3">
                                                    <img src="{{ URL::asset('assets/images/users/avatar-5.jpg') }}"
                                                        class="rounded-circle avatar-sm" alt="">
                                                    <span class="user-status"></span>
                                                </div>

                                                <div class="flex-grow-1 overflow-hidden">
                                                    <h5 class="text-truncate font-size-13 mb-1">Ronald Tucker</h5>
                                                    <p class="text-truncate mb-0">Nice to meet you</p>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <div class="font-size-11">22/04</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="d-flex align-items-start">

                                                <div class="flex-shrink-0 user-img align-self-center me-3">
                                                    <img src="{{ URL::asset('assets/images/users/avatar-6.jpg') }}"
                                                        class="rounded-circle avatar-sm" alt="">
                                                    <span class="user-status"></span>
                                                </div>

                                                <div class="flex-grow-1 overflow-hidden">
                                                    <h5 class="text-truncate font-size-13 mb-1">Dennis Stewart</h5>
                                                    <p class="text-truncate mb-0">Nice to meet you</p>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <div class="font-size-11">22/04</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="d-flex align-items-start">
                                                <div class="flex-shrink-0 user-img away align-self-center me-3">
                                                    <img src="{{ URL::asset('assets/images/users/avatar-3.jpg') }}"
                                                        class="rounded-circle avatar-sm" alt="">
                                                    <span class="user-status"></span>
                                                </div>

                                                <div class="flex-grow-1 overflow-hidden">
                                                    <h5 class="text-truncate font-size-13 mb-1">Katie Olson</h5>
                                                    <p class="text-truncate mb-0">This theme is awesome!</p>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <div class="font-size-11">22 min</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="d-flex align-items-start">

                                                <div class="flex-shrink-0 user-img align-self-center me-3">
                                                    <img src="{{ URL::asset('assets/images/users/avatar-4.jpg') }}"
                                                        class="rounded-circle avatar-sm" alt="">
                                                    <span class="user-status"></span>
                                                </div>

                                                <div class="flex-grow-1 overflow-hidden">
                                                    <h5 class="text-truncate font-size-13 mb-1">Marshall Wilson</h5>
                                                    <p class="text-truncate mb-0">Nice to meet you</p>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <div class="font-size-11">01 Hr</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="groups">
                        <div class="chat-message-list" data-simplebar>
                            <div class="pt-3">
                                <div class="px-3">
                                    <h5 class="font-size-14 mb-3">Groups</h5>
                                </div>
                                <ul class="list-unstyled chat-list">
                                    <li>
                                        <a href="#">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 avatar-sm me-3">
                                                    <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                        G
                                                    </span>
                                                </div>

                                                <div class="flex-grow-1">
                                                    <h5 class="font-size-13 mb-0">General</h5>
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 avatar-sm me-3">
                                                    <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                        R
                                                    </span>
                                                </div>

                                                <div class="flex-grow-1">
                                                    <h5 class="font-size-13 mb-0">Reporting</h5>
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 avatar-sm me-3">
                                                    <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                        M
                                                    </span>
                                                </div>

                                                <div class="flex-grow-1">
                                                    <h5 class="font-size-13 mb-0">Meeting</h5>
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 avatar-sm me-3">
                                                    <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                        A
                                                    </span>
                                                </div>

                                                <div class="flex-grow-1">
                                                    <h5 class="font-size-13 mb-0">Project A</h5>
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 avatar-sm me-3">
                                                    <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                        B
                                                    </span>
                                                </div>

                                                <div class="flex-grow-1">
                                                    <h5 class="font-size-13 mb-0">Project B</h5>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="contacts">
                        <div class="chat-message-list" data-simplebar>
                            <div class="pt-3">
                                <div class="px-3">
                                    <h5 class="font-size-14 mb-3">Contacts</h5>
                                </div>

                                <div>
                                    <div>
                                        {{-- <div class="px-3 contact-list">A</div> --}}

                                        <ul class="list-unstyled chat-list">
                                            @foreach ($users as $user)
                                            <li>
                                                <a href="#" class="contact_info"
                                                    data-id="{{ $user->id }}"
                                                    data-route="{{ route('find.user', $user) }}"
                                                >
                                                    <div class="d-flex align-items-start">
                                                        <div class="flex-shrink-0 user-img away align-self-center me-3">
                                                            <img class="rounded-circle header-profile-user"
                                                                src="@if ($user->avatar != ''){{ URL::asset('images/' . $user->avatar) }}@else{{ URL::asset('assets/images/users/avatar-1.jpg') }}@endif"
                                                                alt="Header Avatar">
                                                            <span class="user-status"></span>
                                                        </div>

                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <h5 class="text-truncate font-size-13 mb-1">{{ $user->name }}</h5>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            @endforeach
                                            {{-- <li>
                                                <a href="#">
                                                    <h5 class="font-size-13 mb-0">Adam Miller</h5>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <h5 class="font-size-13 mb-0">Alfonso Fisher</h5>
                                                </a>
                                            </li> --}}
                                        </ul>
                                    </div>

                                    <div class="mt-4">
                                        <div class="px-3 contact-list">B</div>

                                        <ul class="list-unstyled chat-list">
                                            <li>
                                                <a href="#">
                                                    <h5 class="font-size-13 mb-0">Bonnie Harney</h5>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="mt-4">
                                        <div class="px-3 contact-list">C</div>

                                        <ul class="list-unstyled chat-list">
                                            <li>
                                                <a href="#">
                                                    <h5 class="font-size-13 mb-0">Charles Brown</h5>
                                                </a>
                                                <a href="#">
                                                    <h5 class="font-size-13 mb-0">Carmella Jones</h5>
                                                </a>
                                                <a href="#">
                                                    <h5 class="font-size-13 mb-0">Carrie Williams</h5>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="mt-4">
                                        <div class="px-3 contact-list">D</div>

                                        <ul class="list-unstyled chat-list">
                                            <li>
                                                <a href="#">
                                                    <h5 class="font-size-13 mb-0">Dolores Minter</h5>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- end chat-leftsidebar -->

        <div class="w-100 user-chat mt-4 mt-sm-0 ms-lg-3">
            <div class="card">
                <div class="p-3 px-lg-4 border-bottom">
                    <div class="row">
                        <div class="col-xl-4 col-7">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 avatar-sm me-3 d-sm-block d-none">
                                    <img  src="{{ URL::asset('assets/images/users/avatar-2.jpg') }}" alt=""
                                        class="img-fluid d-block rounded-circle avatar-img">
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="font-size-16 mb-1 text-truncate"><a href="#" class="text-dark" id="contact-name">Jennie
                                            Sherlock</a></h5>
                                    <p class="text-muted text-truncate mb-0">Onlinessss</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-5">
                            <ul class="list-inline user-chat-nav text-end mb-0">
                                <li class="list-inline-item">
                                    <div class="dropdown">
                                        <button class="btn nav-btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-search"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-md p-2">
                                            <form class="px-2">
                                                <div>
                                                    <input type="text" class="form-control border bg-soft-light"
                                                        placeholder="Search...">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>

                                <li class="list-inline-item">
                                    <div class="dropdown">
                                        <button class="btn nav-btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Profile</a>
                                            <a class="dropdown-item" href="#">Archive</a>
                                            <a class="dropdown-item" href="#">Muted</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="chat-conversation p-3" data-simplebar>
                    <ul class="list-unstyled mb-0">
                        <li class="chat-day-title">
                            <span class="title">Today</span>
                        </li>
                        <li>
                            <div class="conversation-list">
                                <div class="d-flex">
                                    <img src="{{ URL::asset('assets/images/users/avatar-3.jpg') }}" class="rounded-circle avatar-sm" alt="">
                                    <div class="flex-1">
                                        <div class="ctext-wrap">
                                            <div class="ctext-wrap-content">
                                                <div class="conversation-name"><span class="time">10:00
                                                        AM</span></div>
                                                <p class="mb-0" class="sender">Good Morning</p>
                                            </div>
                                            <div class="dropdown align-self-start">
                                                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Copy</a>
                                                    <a class="dropdown-item" href="#">Save</a>
                                                    <a class="dropdown-item" href="#">Forward</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="right">
                            <div class="conversation-list">
                                <div class="d-flex">
                                    <div class="flex-1">
                                        <div class="ctext-wrap">
                                            <div class="ctext-wrap-content">
                                                <div class="conversation-name"><span class="time">10:02
                                                        AM</span></div>
                                                <p class="mb-0">Good morning</p>
                                            </div>
                                            <div class="dropdown align-self-start">
                                                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Copy</a>
                                                    <a class="dropdown-item" href="#">Save</a>
                                                    <a class="dropdown-item" href="#">Forward</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="{{ URL::asset('assets/images/users/avatar-6.jpg') }}" class="rounded-circle avatar-sm" alt="">
                                </div>

                            </div>

                        </li>

                        <li>
                            <div class="conversation-list">
                                <div class="d-flex">
                                    <img src="{{ URL::asset('assets/images/users/avatar-3.jpg') }}" class="rounded-circle avatar-sm" alt="">
                                    <div class="flex-1">
                                        <div class="ctext-wrap">
                                            <div class="ctext-wrap-content">
                                                <div class="conversation-name"><span class="time">10:04
                                                        AM</span></div>
                                                <p class="mb-0">
                                                    Hi there, How are you?
                                                </p>
                                            </div>
                                            <div class="dropdown align-self-start">
                                                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Copy</a>
                                                    <a class="dropdown-item" href="#">Save</a>
                                                    <a class="dropdown-item" href="#">Forward</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex">
                                    <img src="{{ URL::asset('assets/images/users/avatar-3.jpg') }}" class="rounded-circle avatar-sm" alt="">
                                    <div class="flex-1">
                                        <div class="ctext-wrap">
                                            <div class="ctext-wrap-content">
                                                <div class="conversation-name"><span class="time">10:04
                                                        AM</span></div>
                                                <p class="mb-0">
                                                    Waiting for your reply.As I heve to go back soon. i have to travel long
                                                    distance.
                                                </p>
                                            </div>
                                            <div class="dropdown align-self-start">
                                                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Copy</a>
                                                    <a class="dropdown-item" href="#">Save</a>
                                                    <a class="dropdown-item" href="#">Forward</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>

                        </li>

                        <li class="right">
                            <div class="conversation-list">
                                <div class="d-flex">
                                    <div class="flex-1">
                                        <div class="ctext-wrap">
                                            <div class="ctext-wrap-content">
                                                <div class="conversation-name"><span class="time">10:08
                                                        AM</span></div>
                                                <p class="mb-0">
                                                    Hi, I am coming there in few minutes. Please wait!! I am in taxi right
                                                    now.
                                                </p>
                                            </div>
                                            <div class="dropdown align-self-start">
                                                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Copy</a>
                                                    <a class="dropdown-item" href="#">Save</a>
                                                    <a class="dropdown-item" href="#">Forward</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="{{ URL::asset('assets/images/users/avatar-6.jpg') }}" class="rounded-circle avatar-sm" alt="">
                                </div>
                            </div>

                        </li>

                        <li>
                            <div class="conversation-list">
                                <div class="d-flex">
                                    <img src="{{ URL::asset('assets/images/users/avatar-3.jpg') }}" class="rounded-circle avatar-sm" alt="">
                                    <div class="flex-1">
                                        <div class="ctext-wrap">
                                            <div class="ctext-wrap-content">
                                                <div class="conversation-name"><span class="time">10:06
                                                        AM</span></div>
                                                <p class="mb-0">
                                                    Thank You very much, I am waiting here at StarBuck cafe.
                                                </p>
                                            </div>
                                            <div class="dropdown align-self-start">
                                                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Copy</a>
                                                    <a class="dropdown-item" href="#">Save</a>
                                                    <a class="dropdown-item" href="#">Forward</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </li>


                        <li>
                            <div class="conversation-list">
                                <div class="d-flex">
                                    <img src="{{ URL::asset('assets/images/users/avatar-3.jpg') }}" class="rounded-circle avatar-sm" alt="">
                                    <div class="flex-1">
                                        <div class="ctext-wrap">
                                            <div class="ctext-wrap-content">
                                                <div class="conversation-name"><span class="time">10:09
                                                        AM</span></div>
                                                <p class="mb-0">
                                                    img-1.jpg & img-2.jpg images for a New Projects
                                                </p>

                                                <ul class="list-inline message-img mt-3  mb-0">
                                                    <li class="list-inline-item message-img-list">
                                                        <a class="d-inline-block m-1" href="">
                                                            <img src="{{ URL::asset('assets/images/small/img-1.jpg') }}" alt=""
                                                                class="rounded img-thumbnail">
                                                        </a>
                                                    </li>

                                                    <li class="list-inline-item message-img-list">
                                                        <a class="d-inline-block m-1" href="">
                                                            <img src="{{ URL::asset('assets/images/small/img-2.jpg') }}" alt=""
                                                                class="rounded img-thumbnail">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="dropdown align-self-start">
                                                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Copy</a>
                                                    <a class="dropdown-item" href="#">Save</a>
                                                    <a class="dropdown-item" href="#">Forward</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="p-3 border-top">
                    <form action="{{ route('messenger.store') }}" method="POST" rol="form" id="messenger-form">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <input type="hidden" class="form-control required" name="user_id" id="user_id" value="{{ Auth::user()->id }}">
                            </div>
                            <div class="col">
                                <input type="hidden" class="form-control required" name="recipient_id" id="recipient_id" value="">
                            </div>
                        </div>


                        <div class="row">
                            <div class="col">
                                <div class="position-relative">
                                    <input type="text" class="form-control border bg-soft-light" name="body" id="body" placeholder="Enter Message...">
                                </div>
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary chat-send w-md waves-effect waves-light" id="send-message" name="send-message"><span
                                        class="d-none d-sm-inline-block me-2">Send</span> <i class="mdi mdi-send float-end"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end user chat -->
    </div>
    <!-- End d-lg-flex  -->
@endsection
@section('script')
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
    <script>
        var token = $('meta[name="csrf-token"]').attr('content');
        var route = $("#messenger-form").attr("action");
        $(".contact_info").click(function (e) {
            e.preventDefault();
            //Variables
            var id    = $(this).data('id');
            var route = $(this).data('route');
            $.ajax({
                type: "GET",
                url: route,
                headers: {'X-CSRF-Token': token},
                data: {id},
                cache: false,
                success: function (response) {
                    //Variables
                    var contactId   = response.data.id;
                    var contactName   = response.data.name;
                    var contactAvatar = response.data.avatar;

                    //Asignamos data a la ventana del chat
                    $("#contact-name").html(contactName);
                    if (contactAvatar != '') {
                        $(".avatar-img").attr("src", `http://localhost:8000/images/${contactAvatar}`);
                    } else {
                        $(".avatar-img").attr("src", `http://localhost:8000/assets/images/users/avatar-1.jpg`);
                    }
                    $("#recipient_id").val(contactId);
                }
            });
        });

        $("#send-message").click(function (e) {
            e.preventDefault();
            var user_id      = $("user_id").val();
            var body         = $("#body").val();
            var recipient_id = $("#recipient_id").val();

            //Enviamos data para almacenar el mensaje
            $.ajax({
                type: "POST",
                headers: {'X-CSRF-Token': token},
                url: route,
                data: {
                    "user_id"       :user_id,
                    "body"          :body,
                    "recipient_id"  :recipient_id
                },
                cache: false,
                success: function (response) {
                    $("#messenger-form")[0].reset();
                    var message = response.message.body;

                }
            });
        });
    </script>
@endsection
