<ul class="wizard-nav mb-5">
    <li class="wizard-list-item">
        <div class="list-item">
            <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ __('Client Details') }}">
                <i class="bx bx-user-circle"></i>
            </div>
        </div>
    </li>
    <li class="wizard-list-item">
        <div class="list-item">
            <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ __('Client Address') }}">
                <i class="bx bx-map"></i>
            </div>
        </div>
    </li>

    <li class="wizard-list-item">
        <div class="list-item">
            <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ __('Client Roles') }}">
                <i class="bx bx-purchase-tag-alt"></i>
            </div>
        </div>
    </li>
</ul>
<!-- wizard-nav -->

<div class="wizard-tab">
    <div class="text-center mb-4">
        <h5>{{ __('Client Details') }}</h5>
        <p class="card-title-desc">{{ __('All field with * is required') }}</p>
    </div>
    <div>
        <div class="row">
            <div class="col-lg-3">
                <div class="mb-3">
                    <label for="name" class="form-label">{{ __('First Name') }} <span
                            class="text-danger">*</span></label>
                    <input type="text" class="form-control required" placeholder="{{ __('Enter First Name') }}"
                        id="name" name="name" value="{{ old('name', $client->name) }}">
                    <div class="pristine-error text-danger" id="nameError">{{ $errors->first('name') }}</div>
                </div>
            </div>
            <!-- end col -->
            <div class="col-lg-3">
                <div class="mb-3">
                    <label for="second_name" class="form-label">{{ __('Second Name') }}</label>
                    <input type="text" class="form-control" placeholder="{{ __('Enter Second Name') }}"
                        id="second_name" name="second_name" value="{{ old('second_name', $client->second_name) }}">
                </div>
            </div>
            <!-- end col -->
            <div class="col-lg-3">
                <div class="mb-3">
                    <label for="last_name" class="form-label">{{ __('Last Name') }} <span
                            class="text-danger">*</span></label>
                    <input type="text" class="form-control required" placeholder="{{ __('Enter Last Name') }}"
                        id="last_name" name="last_name" value="{{ old('last_name', $client->last_name) }}">
                    <div class="pristine-error text-danger" id="last_nameError">{{ $errors->first('last_name') }}</div>
                </div>
            </div>
            <!-- end col -->
            <div class="col-lg-3">
                <div class="mb-3">
                    <label for="second_last_name" class="form-label">{{ __('Second Last Name') }}</label>
                    <input type="text" class="form-control" placeholder="{{ __('Enter Second Last Name') }}"
                        id="second_last_name" name="second_last_name"
                        value="{{ old('second_last_name', $client->second_last_name) }}">
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-4">
                <div class="row">
                    <label for="" class="form-label">{{ __('Identification') }} <span
                            class="text-danger">*</span></label>
                    <div class="col-lg-5">
                        <div class="mb-3">
                            <select class="form-control required" data-trigger name="document_id" id="document_id"
                                placeholder="{{ __('Select an option') }}">
                                @foreach ($documents as $id => $name)
                                    <option value="{{ $id }}"
                                        {{ $id == old('document_id', $client->document_id) ? 'selected' : '' }}>
                                        {{ $name }}</option>
                                @endforeach
                            </select>
                            <div class="pristine-error text-danger" id="document_idError">
                                {{ $errors->first('identification') }}</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <input type="text" class="form-control required"
                                placeholder="{{ __('Enter Identification') }}" id="id_number" name="id_number"
                                value="{{ old('id_number', $client->id_number) }}">
                            <div class="pristine-error text-danger" id="id_numberError">
                                {{ $errors->first('id_number') }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col -->
            <div class="col-lg-4">
                <div class="mb-3">
                    <label for="phone_one" class="form-label">{{ __('Phone') }} <span
                            class="text-danger">*</span></label>
                    <input type="tel" class="form-control required" placeholder="{{ __('Enter Phone') }}"
                        id="phone_one" name="phone_one" value="{{ old('phone_one', $client->phone_one) }}">
                    <div class="pristine-error text-danger" id="phone_oneError">{{ $errors->first('phone_one') }}
                    </div>
                </div>
            </div>
            <!-- end col -->
            <div class="col-lg-4">
                <div class="mb-3">
                    <label for="phone_alt" class="form-label">{{ __('Phone Alt') }}</label>
                    <input type="tel" class="form-control" placeholder="{{ __('Enter Phone Alt.') }}"
                        id="phone_alt" name="phone_alt" value="{{ old('', $client->phone_alt) }}">
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-3">
                <div class="mb-3">
                    <label for="email" class="form-label">{{ __('Email') }} <span
                            class="text-danger">*</span></label>
                    <input type="email" class="form-control required" placeholder="{{ __('Enter Email') }}"
                        id="email" name="email" value="{{ old('email', $client->email) }}">
                    <div class="pristine-error text-danger" id="emailError">{{ $errors->first('email') }}</div>
                </div>
            </div>
            <!-- end col -->
            <div class="col-lg-3">
                <div class="mb-3">
                    <label for="email_alt" class="form-label">{{ __('Email Alt.') }}</label>
                    <input type="email" class="form-control" placeholder="{{ __('Enter Email Alt.') }}"
                        id="email_alt" name="email_alt" value="{{ old('email_alt', $client->email_alt) }}">
                </div>
            </div>
            <!-- end col -->
            <div class="col-lg-3">
                <div class="mb-3">
                    <label class="form-label" for="gender">{{ __('Gender') }} <span
                            class="text-danger">*</span></label>
                    <select class="form-select required" data-trigger placeholder="{{ __('Select an option') }}"
                        name="gender" id="gender">
                        <option value="F" {{ old('gender', $client->gender) == 'F' ? 'selected' : '' }}>
                            @lang('Female')
                        </option>
                        <option value="M" {{ old('gender', $client->gender) == 'M' ? 'selected' : '' }}>
                            @lang('Male')
                        </option>
                    </select>
                    <div class="pristine-error text-danger" id="genderError">{{ $errors->first('gender') }}</div>
                </div>
            </div>
            <!-- end col -->
            <div class="col-lg-3">
                <div class="mb-3">
                    <label for="avatar" class="form-label">{{ __('Avatar') }}</label>
                    <input class="form-control" type="file" id="avatar" name="avatar"
                        value="{{ old('', $client->avatar) }}">
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
            <p class="card-title-desc">{{ __('All field with * is required') }}</p>
        </div>
        <div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="mb-3">
                        <label for="country_id" class="form-label">{{ __('Country') }} <span
                                class="text-danger">*</span></label>
                        <select class="form-control required" data-trigger name="country_id" id="country_id"
                            placeholder="{{ __('Select an option') }}">
                            <option value="">{{ 'Select an option' }}</option>
                            @foreach ($countries as $id => $name)
                                <option value="{{ $id }}"
                                    {{ $id == old('country_id', $client->country_id) ? 'selected' : '' }}>
                                    {{ $name }}</option>
                            @endforeach
                        </select>
                        <div class="pristine-error text-danger" id="country_idError">
                            {{ $errors->first('country_id') }}</div>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-lg-4">
                    <div class="mb-3">
                        <label for="state_id" class="form-label">{{ __('States') }} <span
                                class="text-danger">*</span></label>
                        <select type="select-one" class="form-control required" name="state_id" id="state_id"
                            placeholder="{{ __('Select an option') }}" data-route="{{ route('getStates') }}">

                            @foreach ($states as $id => $name)
                                <option value="{{ $id }}"
                                    {{ $id == old('state_id', $client->state_id) ? 'selected' : '' }}>
                                    {{ $name }}</option>
                            @endforeach
                        </select>
                        <div class="pristine-error text-danger" id="state_idError">{{ $errors->first('state_id') }}
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-4">
                    <div class="mb-3">
                        <label for="municipality_id" class="form-label">{{ __('Municipalities') }} <span
                                class="text-danger">*</span></label>
                        <select class="form-control required" name="municipality_id" id="municipality_id"
                            placeholder="{{ __('Select an option') }}"
                            data-route="{{ route('getMunicipalities') }}">
                            <option value="">{{ 'Select an option' }}</option>
                            @foreach ($municipalities as $id => $name)
                                <option value="{{ $id }}"
                                    {{ $id == old('municipality_id', $client->municipality_id) ? 'selected' : '' }}>
                                    {{ $name }}</option>
                            @endforeach
                        </select>
                        <div class="pristine-error text-danger" id="municipality_idError">
                            {{ $errors->first('municipality_id') }}</div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        {{-- data-trigger --}}
                        <label for="state_id" class="form-label">{{ __('Parishes') }} <span
                                class="text-danger">*</span></label>
                        <select class="form-control required" name="parish_id" id="parish_id"
                            placeholder="{{ __('Select an option') }}" data-route="{{ route('getParishes') }}">
                            <option id="id-option" value="">{{ 'Select an option' }}</option>
                            @foreach ($parishes as $id => $name)
                                <option value="{{ $id }}"
                                    {{ $id == old('parish_id', $client->parish_id) ? 'selected' : '' }}>
                                    {{ $name }}</option>
                            @endforeach
                        </select>
                        <div class="pristine-error text-danger" id="parish_idError">{{ $errors->first('parish_id') }}
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="state_id" class="form-label">{{ __('Cities') }} <span
                                class="text-danger">*</span></label>
                        <select class="form-control required" name="city_id" id="city_id"
                            placeholder="{{ __('Select an option') }}" data-route="{{ route('getCities') }}">
                            <option value="">{{ 'Select an option' }}</option>
                            @foreach ($cities as $id => $name)
                                <option value="{{ $id }}"
                                    {{ $id == old('city_id', $client->city_id) ? 'selected' : '' }}>
                                    {{ $name }}</option>
                            @endforeach
                        </select>
                        <div class="pristine-error text-danger" id="city_idError">{{ $errors->first('city_id') }}
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-3">
                        <label for="address" class="form-label">{{ __('Address') }} <span
                                class="text-danger">*</span></label>
                        <textarea id="address" name="address" class="form-control required" placeholder="{{ __('Enter Address') }}"
                            rows="2" value="{{ old('address', $client->address) }}">{{ $client->address }}</textarea>
                        <div class="pristine-error text-danger" id="addressError">{{ $errors->first('address') }}
                        </div>
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
            <p class="card-title-desc">{{ __('All field with * is required') }}</p>
        </div>
        <div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="mb-3">
                        <label for="role_id" class="form-label">{{ __('Roles') }} <span
                                class="text-danger">*</span></label>
                        <select class="form-control required" data-trigger name="role_id" id="role_id"
                            placeholder="{{ __('Select an option') }}">
                            <option value="">{{ 'Select an option' }}</option>
                            @foreach ($roles as $id => $name)
                                <option
                                    {{ collect(old('role_id', $client->roles->pluck('id')))->contains($id) ? 'selected' : '' }}
                                    value="{{ $id }}">{{ $name }}</option>
                            @endforeach
                        </select>
                        <div class="pristine-error text-danger" id="role_idError">
                            {{ $errors->first('category_id') }}
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-4">
                    <div class="mb-3">
                        <label for="category_id" class="form-label">{{ __('Categories') }} <span
                                class="text-danger">*</span></label>
                        <select class="form-select required" data-trigger name="category_id" id="category_id"
                            placeholder="{{ __('This is a search placeholder') }}">
                            <option value="">{{ 'Select an option' }}</option>
                            @foreach ($categories as $id => $name)
                                <option value="{{ $id }}"
                                    {{ $id == old('category_id', $client->category_id) ? 'selected' : '' }}>
                                    {{ $name }}</option>
                            @endforeach
                        </select>
                        <div class="pristine-error text-danger" id="category_idError">
                            {{ $errors->first('category_id') }}</div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-4">
                    <div class="mb-3">
                        <label for="password" class="form-label">{{ __('Password') }} <span
                                class="text-danger">*</span></label>
                        <input type="password" class="form-control required"
                            placeholder="{{ __('Enter Password') }}" id="password" name="password"
                            value="{{ old('password', $client->password) }}">
                        <div class="pristine-error text-danger" id="passwordError">{{ $errors->first('password') }}
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="mb-3">
                        <label class="form-label" for="status">{{ __('Status') }} <span
                                class="text-danger">*</span></label>
                        <select class="form-select required" name="status" id="status"
                            placeholder="{{ __('Select an option') }}">
                            <option value="1" {{ old('status', $client->status) == '1' ? 'selected' : '' }}>
                                @lang('Active')
                            </option>
                            <option value="0" {{ old('status', $client->status) == '0' ? 'selected' : '' }}>
                                @lang('Inactive')
                            </option>
                        </select>
                        <div class="pristine-error text-danger" id="statusError">{{ $errors->first('status') }}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mb-3">
                        <label for="urbanism_id" class="form-label">{{ __('Urbanism') }} <span
                                class="text-danger">*</span></label>
                        <select class="form-select required" data-trigger name="urbanism_id" id="urbanism_id"
                            placeholder="{{ __('This is a search placeholder') }}">
                            <option value="">{{ 'Select an option' }}</option>
                            @foreach ($urbanism as $id => $name)
                                <option value="{{ $id }}"
                                    {{ $id == old('urbanism_id', $client->urbanism_id) ? 'selected' : '' }}>
                                    {{ $name }}</option>
                            @endforeach
                        </select>
                        <div class="pristine-error text-danger" id="urbanism_idError">
                            {{ $errors->first('urbanism_id') }}</div>
                    </div>
                </div>
                <!-- end col -->
                <!-- end col -->
                <div class="col-lg-4">
                    <div class="mb-3">
                        <label for="social_media" class="form-label">{{ __('Social Media') }}</label>
                        <input type="text" class="form-control" placeholder="{{ __('Social Media') }}"
                            id="social_media" name="social_media"
                            value="{{ old('social_media', $client->social_media) }}">
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
