<div class="email-leftbar">
    <div class="card">
        <div class="card-body">
            <button type="button" class="btn btn-danger waves-effect waves-light w-100" data-bs-toggle="modal"
                data-bs-target="#composemodal">
                Compose
            </button>

            <div class="card p-0 overflow-hidden mt-4">
                <div class="mail-list">
                    <a href={{ route('mail.index') }}" class="active bg-soft-primary">
                        <div class="d-flex align-items-center">
                            <i class="mdi mdi-email-outline font-size-20 align-middle me-3"></i>
                            <div class="flex-grow-1">
                                <h5 class="font-size-14 mb-0">{{ __('All Inbox') }}</h5>
                                <span class="text-muted font-size-13 text-truncate">How To Boost Website</span>
                            </div>
                            <div class="flex-shrink-0">
                                <div class="float-end">
                                    @if ($count = Auth::user()->unreadNotifications->count())
                                    <span class="bg-primary badge">{{ $count }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="border-bottom">
                        <div class="d-flex align-items-center">
                            <i class="mdi mdi-star-outline font-size-20 align-middle me-3"></i>
                            <div class="flex-grow-1">
                                <h5 class="font-size-14 mb-0">Starred</h5>
                                <span class="text-muted font-size-13 text-truncate">Selected messages</span>
                            </div>
                            <div class="flex-shrink-0">
                            </div>
                        </div>
                    </a>

                    <a href="#" class="border-bottom">
                        <div class="d-flex align-items-center">
                            <i class="mdi mdi-diamond-stone font-size-20 align-middle me-3"></i>
                            <div class="flex-grow-1">
                                <h5 class="font-size-14 mb-0">Important</h5>
                                <span class="text-muted font-size-13 text-truncate">Selected messages</span>
                            </div>
                            <div class="flex-shrink-0">
                            </div>
                        </div>
                    </a>

                    <a href="#" class="border-bottom">
                        <div class="d-flex align-items-center">
                            <i class="mdi mdi-file-outline font-size-20 align-middle me-3"></i>
                            <div class="flex-grow-1">
                                <h5 class="font-size-14 mb-0">Draft</h5>
                                <span class="text-muted font-size-13 text-truncate">Re-edit your messages</span>
                            </div>
                            <div class="flex-shrink-0">
                            </div>
                        </div>
                    </a>

                    <a href="#" class="border-bottom">
                        <div class="d-flex align-items-center">
                            <i class="mdi mdi-email-check-outline font-size-20 align-middle me-3"></i>
                            <div class="flex-grow-1">
                                <h5 class="font-size-14 mb-0">Sent Mail</h5>
                                <span class="text-muted font-size-13 text-truncate">Successfully messages</span>
                            </div>
                            <div class="flex-shrink-0">
                                <div class="float-end">
                                    <span class="bg-success badge">08</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="d-flex align-items-center">
                            <i class="mdi mdi-trash-can-outline font-size-20 align-middle me-3"></i>
                            <div class="flex-grow-1">
                                <h5 class="font-size-14 mb-0">Trash</h5>
                                <span class="text-muted font-size-13 text-truncate">Removed messages</span>
                            </div>
                            <div class="flex-shrink-0">
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <h5 class="mt-3 font-size-15 text-uppercase">Labels</h5>


            <div class="card p-0 overflow-hidden mt-3">
                <div class="mail-list">
                    <a href="#" class="border-bottom"><span
                            class="mdi mdi-arrow-right-drop-circle text-info float-end"></span>Theme Support</a>
                    <a href="#" class="border-bottom"><span
                            class="mdi mdi-arrow-right-drop-circle text-warning float-end"></span>Freelance</a>
                    <a href="#" class="border-bottom"><span
                            class="mdi mdi-arrow-right-drop-circle text-primary float-end"></span>Social</a>
                    <a href="#" class="border-bottom"><span
                            class="mdi mdi-arrow-right-drop-circle text-danger float-end"></span>Friends</a>
                    <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-success float-end"></span>Family</a>
                </div>
            </div>

            <h5 class="mt-3 font-size-15 text-uppercase">Chat</h5>


            <div class="card p-0 overflow-hidden mt-3 mb-1">
                <div class="mail-list">
                    <a href="javascript: void(0);" class="d-flex align-items-start border-bottom">
                        <img class="flex-shrink-0 me-3 rounded-circle"
                            src="{{ URL::asset('assets/images/users/avatar-2.jpg') }}" alt="Generic placeholder image"
                            height="36">
                        <div class="flex-grow-1 chat-user-box">
                            <p class="user-title m-0">Scott Median</p>
                            <p class="text-muted mb-0">Hello</p>
                        </div>
                    </a>

                    <a href="javascript: void(0);" class="d-flex align-items-start border-bottom">
                        <img class="flex-shrink-0 me-3 rounded-circle"
                            src="{{ URL::asset('assets/images/users/avatar-3.jpg') }}" alt="Generic placeholder image"
                            height="36">
                        <div class="flex-grow-1 chat-user-box">
                            <p class="user-title m-0">Julian Rosa</p>
                            <p class="text-muted mb-0">What about our next..</p>
                        </div>
                    </a>

                    <a href="javascript: void(0);" class="d-flex align-items-start border-bottom">
                        <img class="flex-shrink-0 me-3 rounded-circle"
                            src="{{ URL::asset('assets/images/users/avatar-4.jpg') }}" alt="Generic placeholder image"
                            height="36">
                        <div class="flex-grow-1 chat-user-box">
                            <p class="user-title m-0">David Medina</p>
                            <p class="text-muted mb-0">Yeah everything is fine</p>
                        </div>
                    </a>

                    <a href="javascript: void(0);" class="d-flex align-items-start border-bottom">
                        <img class="flex-shrink-0 me-3 rounded-circle"
                            src="{{ URL::asset('assets/images/users/avatar-6.jpg') }}" alt="Generic placeholder image"
                            height="36">
                        <div class="flex-grow-1 chat-user-box">
                            <p class="user-title m-0">Jay Baker</p>
                            <p class="text-muted mb-0">Wow that's great</p>
                        </div>
                    </a>
                </div>
            </div>


        </div>
    </div>
</div>
