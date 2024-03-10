<!--  Extra Large modal example -->
<div class="row">
    <div class="col-xl-3 col-sm-6">
        <div class="modal fade bs-example-modal-xl" id="client-modal">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="dropdown float-end">
                            <a class="text-muted dropdown-toggle font-size-16" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true">
                                <i class="bx bx-dots-horizontal-rounded"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item dropdown-edit" href="#">{{ __('Edit') }}</a>
                                <a class="dropdown-item dropdown-delete" href="#">{{ __('Remove') }}</a>
                                <a class="dropdown-item" data-bs-dismiss="modal" aria-label="Close"
                                    href="#">{{ __('Close') }}</a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div>
                                <img src="{{ URL::asset('assets/images/users/avatar-2.jpg') }}" alt=""
                                    class="avatar-md rounded-circle img-thumbnail" id="getAvatar">
                            </div>
                            <div class="flex-1 ms-3">
                                <h5 class="font-size-16 mb-1"><a href="#" class="text-dark getName"></a>
                                </h5>
                                <span class="mb-0" id="getStatus" title="{{ __('Status') }}"></span>
                                <span class="badge badge-soft-success mb-0" id="getCategory"
                                    title="{{ __('Category') }}"></span>
                                <span class="badge badge-soft-success mb-0" id="getGender"></span>
                                <span class=" mb-0" id="getCode"></span>
                            </div>
                        </div>
                        <div class="mt-3 pt-1">
                            <div class="row">
                                <div class="col-6">
                                    <p class="text-muted mb-0 mr-10"><i
                                            class="mdi mdi-phone-classic font-size-15 align-middle pe-2 text-primary"
                                            title="{{ __('Phone') }}"></i>
                                        <a href="#" id="getPhone"></a>
                                    </p>
                                    <p class="text-muted mb-0 mt-2"><i
                                            class ="mdi mdi-email font-size-15 align-middle pe-2 text-primary"
                                            title="{{ __('Email') }}">
                                        </i><a href="#" id="getMail"></a>
                                    </p>
                                    <p class="text-muted mb-0 mt-2"><i
                                            class ="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"
                                            title="{{ __('Country') }}">
                                        </i><span id="getCountry"></span>
                                    </p>
                                    <p class="text-muted mb-0 mt-2"><i
                                            class ="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"
                                            title="{{ __('Municipality') }}">
                                        </i><span id="getMunicipality"></span>
                                    </p>
                                    <p class="text-muted mb-0 mt-2"><i
                                            class ="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"
                                            title="{{ __('City') }}">
                                        </i><span id="getCity"></span>
                                    </p>
                                    <p class="text-muted mb-0 mt-2"><i
                                            class ="mdi mdi-human-capacity-decrease font-size-15 align-middle pe-2 text-primary"
                                            title="{{ __('Role') }}">
                                        </i><span id="getRole"></span>
                                    </p>
                                </div>
                                <div class="col-6">
                                    <p class="text-muted mb-0 ml-3 justify-content-end"><i
                                            class="mdi mdi-cellphone font-size-15 align-middle pe-2 text-primary"
                                            title="{{ __('Phone Alt.') }}"></i>
                                        <a href="#" id="getPhoneAlt"></a>
                                    </p>
                                    <p class="text-muted mb-0 mt-2"><i
                                            class ="mdi mdi-email font-size-15 align-middle pe-2 text-primary"
                                            title="{{ __('Email Alt.') }}">
                                        </i><a href="#" id="getMailAlt"></a>
                                    </p>
                                    <p class="text-muted mb-0 mt-2 ml-3 justify-content-end"><i
                                            class="mdi mdi-credit-card font-size-15 align-middle pe-2 text-primary"
                                            title="{{ __('Identification') }}"></i>
                                        <span id="getID"></span>
                                    </p>
                                    <p class="text-muted mb-0 mt-2"><i
                                            class ="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"
                                            title="{{ __('State') }}">
                                        </i><span id="getState"></span>
                                    </p>
                                    <p class="text-muted mb-0 mt-2"><i
                                            class ="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"
                                            title="{{ __('Parish') }}">
                                        </i><span id="getParish"></span>
                                    </p>
                                    <p class="text-muted mb-0 mt-2"><i
                                            class ="mdi mdi-cellphone-link font-size-15 align-middle pe-2 text-primary"
                                            title="{{ __('Social Media') }}">
                                        </i><span id="getSocialMedia"></span>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <p class="text-muted mb-0 mt-2"><i
                                            class="mdi mdi-map font-size-15 align-middle pe-2 text-primary"
                                            title="{{ __('Address') }}"></i>
                                        <span id="getAddress"></span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex gap-2 pt-4">
                            <button type="button" class="btn btn-soft-primary btn-sm w-50"><i
                                    class="bx bx-user me-1"></i>
                                Profile</button>
                            <button type="button" class="btn btn-primary btn-sm w-50"><i
                                    class="bx bx-message-square-dots me-1"></i> Contact</button>
                        </div>


                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </div>
</div>
