<div class="table-responsive">
    <table class="table align-middle project-list-table table-nowrap data-table-show" style="width:100%"
        id="dataTableShow">
        <thead class="text-center" style="width: 100%;">
            <tr>
                <th style="font-size: 12px;font-weight: bold"></th>
                <th class="col-2">{{ __('Name') }}</th>
                <th>{{ __('Code') }}</th>
                <th>{{ __('ISO2') }}</th>
                <th>{{ __('ISO3') }}</th>
                <th>{{ __('Flag') }}</th>
                <th>{{ __('Continent') }}</th>
                <th>{{ __('Slug') }}</th>
                <th>{{ __('Note') }}</th>
                <th class="col-3">{{ __('Created At') }}</th>
                <th>{{ __('Action') }}</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <tr class="align-middle">
                <td>{{ $country->id }}</td>
                <td>{{ $country->present()->name() }}</td>
                <td>{{ $country->present()->code() }}</td>
                <td>{{ $country->present()->iso2() }}</td>
                <td>{{ $country->present()->iso3() }}</td>
                <td>{!! $country->present()->flag() !!}</td>
                <td>{{ $country->present()->continent() }}</td>
                <td>{{ $country->present()->slug() }}</td>
                <td>{{ $country->present()->note() }}</td>
                <td>{{ $country->present()->created_at() }}</td>
                <td>{!! $country->present()->showActionButton() !!}</td>
            </tr>
        </tbody>
    </table>
</div>