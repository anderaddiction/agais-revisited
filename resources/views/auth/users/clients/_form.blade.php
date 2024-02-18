<ul class="wizard-nav mb-5">
    <li class="wizard-list-item">
        <div class="list-item">
            <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                title="{{ ('Client Details') }}">
                <i class="bx bx-user-circle"></i>
            </div>
        </div>
    </li>
    <li class="wizard-list-item">
        <div class="list-item">
            <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Client Address">
                <i class="bx bx-map"></i>
            </div>
        </div>
    </li>

    <li class="wizard-list-item">
        <div class="list-item">
            <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Client Roles">
                <i class="bx bx-purchase-tag-alt"></i>
            </div>
        </div>
    </li>
</ul>
<!-- wizard-nav -->

<div class="wizard-tab">
    <div class="text-center mb-4">
        <h5>{{ __('Client Details') }}</h5>
        <p class="card-title-desc">{{ __('Fill all information below') }}</p>
    </div>
    <div>
        <div class="row">
            <div class="col-lg-3">
                <div class="mb-3">
                    <label for="name" class="form-label">{{ __('First Name') }}</label>
                    <input type="text" class="form-control" placeholder="{{ __('Enter First Name') }}" id="name" name="name" value="{{ old('name', $client->name) }}">
                    <div class="pristine-error text-danger">{{ $errors->first('name') }}</div>
                </div>
            </div>
            <!-- end col -->
            <div class="col-lg-3">
                <div class="mb-3">
                    <label for="second_name" class="form-label">{{ __('Second Name') }}</label>
                    <input type="text" class="form-control" placeholder="{{ __('Enter Second Name') }}" id="second_name" name="second_name" value="{{ old('second_name'. $client->second_name) }}">
                </div>
            </div>
            <!-- end col -->
            <div class="col-lg-3">
                <div class="mb-3">
                    <label for="last_name" class="form-label">{{ __('Last Name') }}</label>
                    <input type="text" class="form-control" placeholder="{{ __('Enter Last Name') }}" id="last_name" name="last_name" value="{{ old('last_name', $client->last_name) }}">
                    <div class="pristine-error text-danger">{{ $errors->first('last_name') }}</div>
                </div>
            </div>
            <!-- end col -->
            <div class="col-lg-3">
                <div class="mb-3">
                    <label for="second_last_name" class="form-label">{{ __('Second Last Name') }}</label>
                    <input type="text" class="form-control" placeholder="{{ __('Enter Second Last Name') }}" id="second_last_name" name="second_last_name" value="{{ old('second_last_name', $client->second_last_name) }}">
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-4">
                <div class="row">
                    <label for="" class="form-label">{{ __('Identification') }}</label>
                    <div class="col-lg-5">
                        <div class="mb-3">
                            <select class="form-control" data-trigger name="document_id" id="document_id" placeholder="This is a search placeholder">
                                @foreach ($documents as $id => $name)
                                <option value="{{ $id }}" {{ $id==old('document_id',$client->document_id) ? 'selected' :
                                    '' }}
                                    >{{ $name }}</option>
                                @endforeach
                            </select>
                            <div class="pristine-error text-danger">{{ $errors->first('identification') }}</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="{{ __('Enter Identification') }}" id="id_number" name="id_number" value="{{ old('id_number', $client->id_number) }}">
                            <div class="pristine-error text-danger">{{ $errors->first('id_number') }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col -->
            <div class="col-lg-4">
                <div class="mb-3">
                    <label for="phone_one" class="form-label">{{ __('Phone') }}</label>
                    <input type="tel" class="form-control" placeholder="Enter Phone" id="phone_one" name="phone_one" value="{{ old('phone_one', $client->phone_one) }}">
                    <div class="pristine-error text-danger">{{ $errors->first('phone_one') }}</div>
                </div>
            </div>
            <!-- end col -->
            <div class="col-lg-4">
                <div class="mb-3">
                    <label for="phone_alt" class="form-label">{{ __('Phone Alt') }}</label>
                    <input type="tel" class="form-control" placeholder="Enter Phone" id="phone_alt" name="phone_alt" value="{{ old('', $client->phone_alt) }}">
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-4">
                <div class="mb-3">
                    <label for="email" class="form-label">{{ __('Email') }}</label>
                    <input type="email" class="form-control" placeholder="{{ __('Enter Email') }}" id="email" name="email" value="{{ old('email', $client->email) }}">
                    <div class="pristine-error text-danger">{{ $errors->first('email') }}</div>
                </div>
            </div>
            <!-- end col -->
            <div class="col-lg-4">
                <div class="mb-3">
                    <label for="email_alt" class="form-label">{{ __('Email Alt.') }}</label>
                    <input type="email" class="form-control" placeholder="{{ __('Enter Email Alt.') }}" id="email_alt" name="email_alt" value="{{ old('email_alt', $client->email_alt) }}">
                </div>
            </div>
            <!-- end col -->
            <div class="col-lg-4">
                <div class="mb-3">
                    <label for="avatar" class="form-label">{{ ('Avatar') }}</label>
                    <input class="form-control" type="file" id="avatar" name="avatar" value="{{ old('', $client->avatar) }}">
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>

</div>
<!-- wizard-tab -->

<div class="wizard-tab">
    <div>
        <div class="text-center mb-4">
            <h5>{{ __('Client Address') }}</h5>
            <p class="card-title-desc">Fill all information below</p>
        </div>
        <div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="mb-3">
                        <label for="country_id"
                            class="form-label">{{ __('Country') }}</label>
                        <select class="form-control" data-trigger name="country_id"
                            id="country_id" placeholder="This is a search placeholder">
                            <option value="">{{ ('Select an option') }}</option>
                            @foreach ($countries as $id => $name)
                            <option value="{{ $id }}" {{ $id==old('country_id',$client->country_id) ? 'selected' :
                                '' }}
                                >{{ $name }}</option>
                            @endforeach
                        </select>
                        <div class="pristine-error text-danger">{{ $errors->first('country_id') }}</div>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-lg-4">
                    <div class="mb-3">
                        <label for="state_id" class="form-label">{{ __('States') }}</label>
                        <select class="form-control" data-trigger name="state_id" id="state_id" placeholder="This is a search placeholder">
                            <option value="">{{ ('Select an option') }}</option>
                            @foreach ($states as $id => $name)
                            <option value="{{ $id }}" {{ $id==old('state_id',$client->state_id) ? 'selected' :
                                '' }}
                                >{{ $name }}</option>
                            @endforeach
                        </select>
                        <div class="pristine-error text-danger">{{ $errors->first('state_id') }}</div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-4">
                    <div class="mb-3">
                        <label for="state_id" class="form-label">{{ __('Municipalities') }}</label>
                        <select class="form-control" data-trigger name="municipality_id" id="municipality_id"
                            placeholder="This is a search placeholder">
                            <option value="">{{ ('Select an option') }}</option>
                            @foreach ($municipalities as $id => $name)
                            <option value="{{ $id }}" {{ $id==old('municipality_id',$client->municipality_id) ? 'selected' :
                                '' }}
                                >{{ $name }}</option>
                            @endforeach
                        </select>
                        <div class="pristine-error text-danger">{{ $errors->first('municipality_id') }}</div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="state_id" class="form-label">{{ __('Parishes') }}</label>
                        <select class="form-control" data-trigger name="parish_id" id="parish_id"
                            placeholder="This is a search placeholder">
                            <option value="">{{ ('Select an option') }}</option>
                            @foreach ($parishes as $id => $name)
                            <option value="{{ $id }}" {{ $id==old('parish_id',$client->parish_id) ? 'selected' :
                                '' }}
                                >{{ $name }}</option>
                            @endforeach
                        </select>
                        <div class="pristine-error text-danger">{{ $errors->first('parish_id') }}</div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="state_id" class="form-label">{{ __('Cities') }}</label>
                        <select class="form-control" data-trigger name="city_id" id="city_id"
                            placeholder="This is a search placeholder">
                            <option value="">{{ ('Select an option') }}</option>
                            @foreach ($cities as $id => $name)
                            <option value="{{ $id }}" {{ $id==old('city_id',$client->city_id) ? 'selected' :
                                '' }}
                                >{{ $name }}</option>
                            @endforeach
                        </select>
                        <div class="pristine-error text-danger">{{ $errors->first('city_id') }}</div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-3">
                        <label for="address" class="form-label">{{ __('Address') }}</label>
                        <textarea id="address" name="address" class="form-control" placeholder="{{ __('Enter Address') }}" rows="2" value="{{ old('address', $client->address) }}">{{ $client->address }}</textarea>
                        <div class="pristine-error text-danger">{{ $errors->first('address') }}</div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div><!-- end form -->
    </div>
</div>
<!-- wizard-tab -->

<div class="wizard-tab">
    <div>
        <div class="text-center mb-4">
            <h5>{{ __('Client Roles') }}</h5>
            <p class="card-title-desc">{{ __('Fill all information below') }}</p>
        </div>
        <div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="mb-3">
                        <label for="role_id" class="form-label">{{ __('Roles') }}</label>
                        <select class="form-control" data-trigger name="role_id" id="role_id"
                            placeholder="This is a search placeholder">
                            <option value="">{{ ('Select an option') }}</option>
                            @foreach ($roles as $id => $name)
                            <option {{ collect(old('role_id', $client->roles->pluck('id')))->contains($id) ?
                                'selected' : '' }} value="{{ $id }}">{{ $name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-4">
                    <div class="mb-3">
                        <label for="category_id" class="form-label">{{ __('Categories') }}</label>
                        <select class="form-control" data-trigger name="category_id" id="category_id"
                            placeholder="{{ __('This is a search placeholder') }}">
                            <option value="">{{ ('Select an option') }}</option>
                            @foreach ($categories as $id => $name)
                            <option {{ collect(old('category_id', $client->roles->pluck('id')))->contains($id) ?
                                'selected' : '' }} value="{{ $id }}">{{ $name }}</option>
                            @endforeach
                        </select>
                        <div class="pristine-error text-danger">{{ $errors->first('category_id') }}</div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-4">
                    <div class="mb-3">
                        <label for="password" class="form-label">{{ __('Password') }}</label>
                        <input type="password" class="form-control" placeholder="{{ __('Enter Password') }}" id="password"
                            name="password" value="{{ old('password', $client->password) }}">
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label" for="status">{{ __('Status') }}</label>
                        <select class="form-select" data-trigger name="status" id="status">
                            <option value=" ">{{ __('Select an option') }}</option>
                            <option value="1" {{ old('status', $client->status) == '1' ? 'selected' : '' }}>@lang('Active')
                            </option>
                            <option value="0" {{ old('status', $client->status) == '0' ? 'selected' : '' }}>@lang('Inactive')
                            </option>
                        </select>
                        <div class="pristine-error text-danger">{{ $errors->first('status') }}</div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="social_media" class="form-label">{{ __('Social Media') }}</label>
                        <input type="text" class="form-control" placeholder="{{ __('Social Media') }}" id="social_media" name="social_media" value="{{ old('social_media', $client->social_media) }}">
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-3">
                        <label for="note" class="form-label">{{ __('Note') }}</label>
                        <textarea id="note" name="note" class="form-control" placeholder="{{ __('Enter Note') }}" rows="2"
                            value="{{ old('note', $client->address) }}">{{ old('note', $client->note) }}</textarea>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
    </div>
</div>
<!-- wizard-tab -->

<div class="d-flex align-items-start gap-3 mt-4">
    <button type="button" class="btn btn-primary w-sm" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
    <button type="button" class="btn btn-primary w-sm ms-auto" id="nextBtn" onclick="nextPrev(1)">Next</button>
    <button type="submit" class="btn btn-primary w-sm ms-auto" id="submitBtn" style="display: none">Submit</button>
</div>

