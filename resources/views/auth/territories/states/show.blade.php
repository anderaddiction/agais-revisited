<div class="table-responsive">
    <table class="table align-middle project-list-table table-nowrap data-table-show" style="width:100%"
        id="dataTableShow">
        <thead class="text-center" style="width: 100%;">
            <tr>
                <th style="font-size: 12px;font-weight: bold"></th>
                <th>{{ __('Name') }}</th>
                <th>{{ __('Code') }}</th>
                <th>{{ __('ISO3') }}</th>
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
                <td>{{ $state->id }}</td>
                <td>{{ $state->present()->name() }}</td>
                <td>{{ $state->present()->code() }}</td>
                <td>{{ $state->present()->iso() }}</td>
                <td>{!! $state->present()->flag() !!}</td>
                <td>{{ $state->present()->continent() }}</td>
                <td>{{ $state->present()->slug() }}</td>
                <td>{{ $state->present()->note() }}</td>
                <td>{{ $state->present()->created_at() }}</td>
                <td>{!! $state->present()->showActionButton() !!}</td>
            </tr>
        </tbody>
    </table>
</div>