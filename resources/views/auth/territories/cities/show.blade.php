<div class="table-responsive">
    <table class="table align-middle project-list-table table-nowrap data-table-show" style="width:100%"
        id="dataTableShow">
        <thead class="text-center" style="width: 100%;">
            <tr>
                <th style="font-size: 12px;font-weight: bold"></th>
                <th class="col-2">{{ __('Name') }}</th>
                <th>{{ __('Code') }}</th>
                <th>{{ __('State') }}</th>
                <th>{{ __('Country') }}</th>
                <th>{{ __('Continent') }}</th>
                <th class="col-3">{{ __('Slug') }}</th>
                <th>{{ __('Note') }}</th>
                <th class="col-3">{{ __('Created At') }}</th>
                <th>{{ __('Action') }}</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <tr class="align-middle">
                <td>{{ $city->id }}</td>
                <td>{{ $city->present()->name() }}</td>
                <td>{{ $city->present()->code() }}</td>
                <td>{{ $city->present()->state() }}</td>
                <td>{!! $city->present()->flag() !!}</td>
                <td>{{ $city->present()->continent() }}</td>
                <td>{{ $city->present()->slug() }}</td>
                <td>{{ $city->present()->note() }}</td>
                <td>{{ $city->present()->created_at() }}</td>
                <td>{!! $city->present()->showActionButton() !!}</td>
            </tr>
        </tbody>
    </table>
</div>