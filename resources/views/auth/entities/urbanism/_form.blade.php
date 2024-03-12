@csrf
<div class="row">
    <div class="col-md-4">
        <div class="mb-3">
            <label for="name" class="form-label">{{ __('Name') }} <span class="text-danger">*</span></label>
            <input type="text" class="form-control required" placeholder="{{ __('Enter Name') }}" id="name"
                name="name" value="{{ old('name', $urbanism->name) }}">
            <div class="pristine-error text-danger" id="nameError">{{ $errors->first('name') }}</div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="mb-3">
            <label for="phone_one" class="form-label">{{ __('Phone') }} <span class="text-danger">*</span></label>
            <input type="tel" class="form-control required" placeholder="{{ __('Enter Phone') }}" id="phone_one"
                name="phone_one" value="{{ old('phone_one', $urbanism->phone_one) }}">
            <div class="pristine-error text-danger" id="phone_oneError">{{ $errors->first('phone_one') }}
            </div>
        </div>
    </div>
    <!-- end col -->
    <div class="col-lg-4">
        <div class="mb-3">
            <label for="phone_alt" class="form-label">{{ __('Phone Alt') }}</label>
            <input type="tel" class="form-control" placeholder="{{ __('Enter Phone Alt.') }}" id="phone_alt"
                name="phone_alt" value="{{ old('', $urbanism->phone_alt) }}">
        </div>
    </div>
    <!-- end col -->
</div>
<div class="row">
    <div class="col-md-4">
        <div class="mb-3">
            <label for="email" class="form-label">{{ __('Email') }} <span class="text-danger">*</span></label>
            <input type="email" class="form-control required" placeholder="{{ __('Enter Email') }}" id="email"
                name="email" value="{{ old('email', $urbanism->email) }}">
            <div class="pristine-error text-danger" id="emailError">{{ $errors->first('email') }}</div>
        </div>
    </div>
    <!-- end col -->
    <div class="col-md-4">
        <div class="mb-3">
            <label for="email_alt" class="form-label">{{ __('Email Alt.') }}</label>
            <input type="email" class="form-control" placeholder="{{ __('Enter Email Alt.') }}" id="email_alt"
                name="email_alt" value="{{ old('email_alt', $urbanism->email_alt) }}">
        </div>
    </div>
    <div class="col-md-4">
        <div class="mb-3">
            <label for="country_id" class="form-label">{{ __('Country') }} <span class="text-danger">*</span></label>
            <select class="form-control required" data-trigger name="country_id" id="country_id"
                placeholder="{{ __('Select an option') }}">
                <option value="">{{ 'Select an option' }}</option>
                @foreach ($countries as $id => $name)
                    <option value="{{ $id }}"
                        {{ $id == old('country_id', $urbanism->country_id) ? 'selected' : '' }}>
                        {{ $name }}</option>
                @endforeach
            </select>
            <div class="pristine-error text-danger" id="country_idError">
                {{ $errors->first('country_id') }}</div>
        </div>
    </div>
    <!-- end col -->
</div>
<div class="row">
    <div class="col-md-4">
        <div class="mb-3">
            <label for="state_id" class="form-label">{{ __('States') }} <span class="text-danger">*</span></label>
            <select type="select-one" class="form-control required" name="state_id" id="state_id"
                placeholder="{{ __('Select an option') }}" data-route="{{ route('getStates') }}">

                @foreach ($states as $id => $name)
                    <option value="{{ $id }}"
                        {{ $id == old('state_id', $urbanism->state_id) ? 'selected' : '' }}>
                        {{ $name }}</option>
                @endforeach
            </select>
            <div class="pristine-error text-danger" id="state_idError">{{ $errors->first('state_id') }}
            </div>
        </div>
    </div>
    <!-- end col -->
    <div class="col-md-4">
        <div class="mb-3">
            <label for="municipality_id" class="form-label">{{ __('Municipalities') }} <span
                    class="text-danger">*</span></label>
            <select class="form-control required" name="municipality_id" id="municipality_id"
                placeholder="{{ __('Select an option') }}" data-route="{{ route('getMunicipalities') }}">
                <option value="">{{ 'Select an option' }}</option>
                @foreach ($municipalities as $id => $name)
                    <option value="{{ $id }}"
                        {{ $id == old('municipality_id', $urbanism->municipality_id) ? 'selected' : '' }}>
                        {{ $name }}</option>
                @endforeach
            </select>
            <div class="pristine-error text-danger" id="municipality_idError">
                {{ $errors->first('municipality_id') }}</div>
        </div>
    </div>
    <!-- end col -->
    <div class="col-md-4">
        <div class="mb-3">
            {{-- data-trigger --}}
            <label for="state_id" class="form-label">{{ __('Parishes') }} <span class="text-danger">*</span></label>
            <select class="form-control required" name="parish_id" id="parish_id"
                placeholder="{{ __('Select an option') }}" data-route="{{ route('getParishes') }}">
                <option id="id-option" value="">{{ 'Select an option' }}</option>
                @foreach ($parishes as $id => $name)
                    <option value="{{ $id }}"
                        {{ $id == old('parish_id', $urbanism->parish_id) ? 'selected' : '' }}>
                        {{ $name }}</option>
                @endforeach
            </select>
            <div class="pristine-error text-danger" id="parish_idError">{{ $errors->first('parish_id') }}
            </div>
        </div>
    </div>
    <!-- end col -->
</div>
<div class="row">
    <div class="col-md-4">
        <div class="mb-3">
            <label for="city_id" class="form-label">{{ __('Cities') }} <span class="text-danger">*</span></label>
            <select class="form-control required" name="city_id" id="city_id"
                placeholder="{{ __('Select an option') }}" data-route="{{ route('getCities') }}">
                <option value="">{{ 'Select an option' }}</option>
                @foreach ($cities as $id => $name)
                    <option value="{{ $id }}"
                        {{ $id == old('city_id', $urbanism->city_id) ? 'selected' : '' }}>
                        {{ $name }}</option>
                @endforeach
            </select>
            <div class="pristine-error text-danger" id="city_idError">{{ $errors->first('city_id') }}
            </div>
        </div>
    </div>
    <!-- end col -->
    <div class="col-md-4">
        <div class="mb-3">
            <label for="address" class="form-label">{{ __('Address') }} <span class="text-danger">*</span></label>
            <input id="address" name="address" class="form-control required"
                placeholder="{{ __('Enter Address') }}" value="{{ old('address', $urbanism->address) }}">
            <div class="pristine-error text-danger" id="addressError">{{ $errors->first('address') }}
            </div>
        </div>
    </div>
    <!-- end col -->
    <div class="col-md-4">
        <div class="mb-3">
            <label for="category_id" class="form-label">{{ __('Categories') }} <span
                    class="text-danger">*</span></label>
            <select class="form-select required" data-trigger name="category_id" id="category_id"
                placeholder="{{ __('This is a search placeholder') }}">
                <option value="">{{ 'Select an option' }}</option>
                @foreach ($categories as $id => $name)
                    <option value="{{ $id }}"
                        {{ $id == old('category_id', $urbanism->category_id) ? 'selected' : '' }}>
                        {{ $name }}</option>
                @endforeach
            </select>
            <div class="pristine-error text-danger" id="category_idError">
                {{ $errors->first('category_id') }}</div>
        </div>
    </div>
    <!-- end col -->
</div>
<div class="row">
    <div class="col-md-4">
        <div class="mb-3">
            <label class="form-label" for="status">{{ __('Status') }} <span class="text-danger">*</span></label>
            <select class="form-select required" name="status" id="status"
                placeholder="{{ __('Select an option') }}">
                <option value="1" {{ old('status', $urbanism->status) == '1' ? 'selected' : '' }}>
                    @lang('Active')
                </option>
                <option value="0" {{ old('status', $urbanism->status) == '0' ? 'selected' : '' }}>
                    @lang('Inactive')
                </option>
            </select>
            <div class="pristine-error text-danger" id="statusError">{{ $errors->first('status') }}
            </div>
        </div>
    </div>
    <!-- end col -->
    <div class="col-md-4">
        <div class="mb-3">
            <label class="form-label" for="status">{{ __('Type') }} <span class="text-danger">*</span></label>
            <select class="form-select required" name="type" id="type"
                placeholder="{{ __('Select an option') }}">
                <option value="{{ __('Public') }}" {{ old('type', $urbanism->type) == 'Public' ? 'selected' : '' }}>
                    @lang('Public')
                </option>
                <option value="Private" {{ old('type', $urbanism->type) == 'Private' ? 'selected' : '' }}>
                    @lang('Private')
                </option>
            </select>
            <div class="pristine-error text-danger" id="typeError">{{ $errors->first('type') }}
            </div>
        </div>
    </div>
    <!-- end col -->
    <div class="col-md-4">
        <div class="mb-3">
            <label for="social_media" class="form-label">{{ __('Social Media') }}</label>
            <input type="text" class="form-control" placeholder="{{ __('Social Media') }}" id="social_media"
                name="social_media" value="{{ old('social_media', $urbanism->social_media) }}">
        </div>
    </div>
    <!-- end col -->
</div>
<div class="row">
    <div class="col-md-12">
        <div class="mb-3">
            <label class="form-label" for="note">{{ __('Note') }}</label>
            <textarea class="form-control" name="note" id="note" cols="30" rows="5">{{ old('note', $urbanism->note) }}</textarea>
        </div>
    </div>
</div>
