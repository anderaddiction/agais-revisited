<div class="table-responsive">
    <table class="table align-middle project-list-table table-nowrap data-table-show" style="width:100%"
        id="dataTableShow">
        <thead class="text-center" style="width: 100%;">
            <tr>
                <th style="font-size: 12px;font-weight: bold"></th>
                <th class="col-2">{{ __('Name') }}</th>
                <th>{{ __('Code') }}</th>
                <th>{{ __('State') }}</th>
                <th>{{ __('Municipality') }}</th>
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
                <td>{{ $parish->id }}</td>
                <td>{{ $parish->present()->name() }}</td>
                <td>{{ $parish->present()->code() }}</td>
                <td>{{ $parish->present()->state() }}</td>
                <td>{{ $parish->present()->municipality() }}</td>
                <td>{!! $parish->present()->flag() !!}</td>
                <td>{{ $parish->present()->continent() }}</td>
                <td>{{ $parish->present()->slug() }}</td>
                <td>{{ $parish->present()->note() }}</td>
                <td>{{ $parish->present()->created_at() }}</td>
                <td>{!! $parish->present()->showActionButton() !!}</td>
            </tr>
        </tbody>
    </table>
</div>