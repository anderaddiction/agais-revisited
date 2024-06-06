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
                <th>{{ __('Slug') }}</th>
                <th>{{ __('Note') }}</th>
                <th class="col-3">{{ __('Created At') }}</th>
                <th>{{ __('Action') }}</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <tr class="align-middle">
                <td>{{ $municipality->id }}</td>
                <td>{{ $municipality->present()->name() }}</td>
                <td>{{ $municipality->present()->code() }}</td>
                <td>{{ $municipality->present()->state() }}</td>
                <td>{!! $municipality->present()->flag() !!}</td>
                <td>{{ $municipality->present()->continent() }}</td>
                <td>{{ $municipality->present()->slug() }}</td>
                <td>{{ $municipality->present()->note() }}</td>
                <td>{{ $municipality->present()->created_at() }}</td>
                <td>{!! $municipality->present()->showActionButton() !!}</td>
            </tr>
        </tbody>
    </table>
</div>