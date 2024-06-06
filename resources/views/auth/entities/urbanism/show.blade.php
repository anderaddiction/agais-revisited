<div class="table-responsive">
    <table class="table align-middle project-list-table table-nowrap data-table-show" style="width:100%"
        id="dataTableShow">
        <thead class="text-center" style="width: 100%;">
            <tr>
                <th style="font-size: 12px;font-weight: bold"></th>
                <th>{{ __('Name') }}</th>
                <th>{{ __('Code') }}</th>
                <th>{{ __('Phone') }}</th>
                <th>{{ __('Phone Alt.') }}</th>
                <th>{{ __('Email') }}</th>
                <th>{{ __('Email Alt.') }}</th>
                <th>{{ __('Country') }}</th>
                <th>{{ __('State') }}</th>
                <th>{{ __('Municipality') }}</th>
                <th>{{ __('Parish') }}</th>
                <th>{{ __('City') }}</th>
                <th>{{ __('Address') }}</th>
                <th>{{ __('Type') }}</th>
                <th>{{ __('Status') }}</th>
                <th>{{ __('Sulg') }}</th>
                <th>{{ __('Note') }}</th>
                <th>{{ __('Created At') }}</th>
                <th>{{ __('Action') }}</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <tr class="align-middle">
                <td>{{ $urbanism->id }}</td>
                <td>{{ $urbanism->present()->name() }}</td>
                <td>{{ $urbanism->present()->code() }}</td>
                <td>{{ $urbanism->present()->phone() }}</td>
                <td>{{ $urbanism->present()->phoneAlt() }}</td>
                <td>{{ $urbanism->present()->email() }}</td>
                <td>{{ $urbanism->present()->emailAlt() }}</td>
                <td>{!! $urbanism->present()->flag() !!}</td>
                <td>{{ $urbanism->present()->state() }}</td>
                <td>{!! $urbanism->present()->Municipality() !!}</td>
                <td>{{ $urbanism->present()->parish() }}</td>
                <td>{{ $urbanism->present()->city() }}</td>
                <td>{{ $urbanism->present()->address() }}</td>
                <td>{{ $urbanism->present()->type() }}</td>
                <td>{!! $urbanism->present()->status() !!}</td>
                <td>{{ $urbanism->present()->slug() }}</td>
                <td>{{ $urbanism->present()->note() }}</td>
                <td>{{ $urbanism->present()->created_at() }}</td>
                <td>{!! $urbanism->present()->showActionButton() !!}</td>
            </tr>
        </tbody>
    </table>
</div>