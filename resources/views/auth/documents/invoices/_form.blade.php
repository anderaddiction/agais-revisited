<ul class="wizard-nav mb-5">
    <li class="wizard-list-item">
        <div class="list-item">
            <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Seller Details">
                <i class="bx bx-user-circle"></i>
            </div>
        </div>
    </li>
    <li class="wizard-list-item">
        <div class="list-item">
            <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Company Document">
                <i class="bx bx-file"></i>
            </div>
        </div>
    </li>

    <li class="wizard-list-item">
        <div class="list-item">
            <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Bank Details">
                <i class="bx bx-edit"></i>
            </div>
        </div>
    </li>
</ul>
<div class="wizard-tab">
    <div class="text-center mb-4">
        <h5>Seller Details</h5>
        <p class="card-title-desc">Fill all information below</p>
    </div>
    <div>
        <div class="row">
            <div class="col-lg-4">
                <div class="mb-3">
                    <label for="client" class="form-label">{{ __('Client') }} <span class="text-danger">*</span></label>
                    <input type="text" class="form-control required" placeholder="{{ __('Enter Client') }}" id="client"
                        client="client" value="{{ old('client', $invoice->client) }}">
                    <div class="pristine-error text-danger" id="clientError">{{ $errors->first('client') }}</div>
                </div>
            </div>
            <!-- end col -->
            <div class="col-lg-4">
                <div class="mb-3">
                    <label class="form-label" for="document_type">{{ __('Document Type') }} <span
                            class="text-danger">*</span></label>
                    <select class="form-select required" data-trigger placeholder="{{ __('Select an option') }}"
                        name="document_type" id="document_type">
                        <option value="Venezolano" {{ old('document_type', $invoice->document_type) == 'V' ?
                            'selected'
                            : '' }}>
                            @lang('Venezuela')
                        </option>
                        <option value="F" {{ old('document_type', $invoice->document_type) == 'F' ? 'selected'
                            : '' }}>
                            @lang('Foreign')
                        </option>
                        <option value="P" {{ old('document_type', $invoice->document_type) == 'P' ? 'selected' : '' }}>
                            @lang('Passport')
                        </option>
                        <option value="RIF-N" {{ old('document_type', $invoice->document_type) == 'RIF-N' ? 'selected' :
                            ''
                            }}>
                            @lang('RIF-N')
                        </option>
                        <option value="RIF-J" {{ old('document_type', $invoice->document_type) == 'RIF-J' ? 'selected' :
                            '' }}>
                            @lang('RIF-J')
                        </option>
                    </select>
                    <div class="pristine-error text-danger" id="document_typeError">{{ $errors->first('document_type')
                        }}</div>
                </div>
            </div>
            <!-- end col -->
            <div class="col-lg-4">
                <div class="mb-3">
                    <label for="id_number" class="form-label">{{ __('ID Number') }} <span
                            class="text-danger">*</span></label>
                    <input type="text" class="form-control required" placeholder="{{ __('Enter ID Number') }}"
                        id="id_number" id_number="id_number" value="{{ old('id_number', $invoice->id_number) }}">
                    <div class="pristine-error text-danger" id="id_numberError">{{ $errors->first('id_number') }}</div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-4">
                <div class="mb-3">
                    <label for="phone" class="form-label">{{ __('Phone') }} <span class="text-danger">*</span></label>
                    <input type="text" class="form-control required" placeholder="{{ __('Enter Phone') }}" id="phone"
                        phone="phone" value="{{ old('phone', $invoice->phone) }}">
                    <div class="pristine-error text-danger" id="phoneError">{{ $errors->first('phone') }}</div>
                </div>
            </div>
            <!-- end col -->
            <div class="col-lg-4">
                <div class="mb-3">
                    <label for="phone_alt" class="form-label">{{ __('Phone Alt.') }}</label>
                    <input type="text" class="form-control" placeholder="{{ __('Enter Phone Alt.') }}" id="phone_alt"
                        phone="phone_alt" value="{{ old('phone', $invoice->phone) }}">
                    <div class="pristine-error text-danger" id="phone_altError">{{ $errors->first('phone_alt') }}</div>
                </div>
            </div>
            <!-- end col -->
            <div class="col-lg-4">
                <div class="mb-3">
                    <label for="email" class="form-label">{{ __('Email') }} <span class="text-danger">*</span></label>
                    <input type="text" class="form-control required" placeholder="{{ __('Enter Email') }}" id="email"
                        email="email" value="{{ old('email', $invoice->email) }}">
                    <div class="pristine-error text-danger" id="emailError">{{ $errors->first('email') }}</div>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="mb-3">
                    <label for="address" class="form-label">{{ __('Address') }} <span
                            class="text-danger">*</span></label>
                    <textarea id="address" name="address" class="form-control required"
                        placeholder="{{ __('Enter Address') }}" rows="2"
                        value="{{ old('address', $invoice->address) }}">{{ $invoice->address }}</textarea>
                    <div class="pristine-error text-danger" id="addressError">{{ $errors->first('address') }}
                    </div>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->
    </div>

</div>
<!-- wizard-tab -->

<div class="wizard-tab">
    <div>
        <div class="text-center mb-4">
            <h5>Company Document</h5>
            <p class="card-title-desc">Fill all information below</p>
        </div>
        <div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="basicpill-pancard-input" class="form-label">PAN
                            Card</label>
                        <input type="text" class="form-control required" placeholder="Enter Pan Card"
                            id="basicpill-pancard-input">
                    </div>
                </div><!-- end col -->

                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="basicpill-vatno-input" class="form-label">VAT/TIN
                            No.</label>
                        <input type="text" class="form-control required" placeholder="Enter VAT/TIN No."
                            id="basicpill-vatno-input">
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="basicpill-cstno-input" class="form-label">CST
                            No.</label>
                        <input type="text" class="form-control required" placeholder="Enter CST No."
                            id="basicpill-cstno-input">
                    </div>
                </div><!-- end col -->

                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="basicpill-servicetax-input" class="form-label">Service Tax
                            No.</label>
                        <input type="text" class="form-control required" placeholder="Enter Service Tax No."
                            id="basicpill-servicetax-input">
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="basicpill-companyuin-input" class="form-label">Company
                            UIN</label>
                        <input type="text" class="form-control required" placeholder="Enter Company UIN"
                            id="basicpill-companyuin-input">
                    </div>
                </div><!-- end col -->

                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="basicpill-declaration-input" class="form-label">Declaration</label>
                        <input type="text" class="form-control required" placeholder="Enter Declaration"
                            id="basicpill-declaration-input">
                    </div>
                </div><!-- end col -->
            </div><!-- end row-->
        </div><!-- end form -->
    </div>
</div>
<!-- wizard-tab -->

<div class="wizard-tab">
    <div>
        <div class="text-center mb-4">
            <h5>Bank Details</h5>
            <p class="card-title-desc">Fill all information below</p>
        </div>
        <div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="basicpill-namecard-input" class="form-label">Name On
                            Card</label>
                        <input type="text" class="form-control required" placeholder="Enter Name On Card"
                            id="basicpill-namecard-input">
                    </div>
                </div><!-- end col -->
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Credit Card Type</label>
                        <select class="form-select required">
                            <option selected>Select Card Type</option>
                            <option value="AE">American Express</option>
                            <option value="VI">Visa</option>
                            <option value="MC">MasterCard</option>
                            <option value="DI">Discover</option>
                        </select>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="basicpill-cardno-input" class="form-label">Credit Card
                            Number</label>
                        <input type="text" class="form-control required" placeholder="Enter Credit Card Number"
                            id="basicpill-cardno-input">
                    </div>
                </div><!-- end col -->

                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="basicpill-card-verification-input" class="form-label">Card
                            Verification Number</label>
                        <input type="text" class="form-control required" placeholder="Enter Card Verification Number"
                            id="basicpill-card-verification-input">
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="datepicker-basic" class="form-label">Expiration Date</label>
                        <input type="text" class="form-control required" placeholder="Enter Expiration Date"
                            id="datepicker-basic">
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end form -->

    </div>
</div>
<!-- wizard-tab -->

<div class="d-flex align-items-start gap-3 mt-4">
    <button type="button" class="btn btn-primary w-sm" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
    <button type="button" class="btn btn-primary w-sm ms-auto" id="nextBtn" onclick="nextPrev(1)">Next</button>
</div>