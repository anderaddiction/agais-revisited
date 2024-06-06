<div class="table-responsive">
    <table class="table align-middle project-list-table table-nowrap data-table-show" style="width:100%"
        id="dataTableShow">
        <thead class="text-center" style="width: 100%;">
            <tr>
                <th style="font-size: 12px;font-weight: bold"></th>
                <th class="col-3">{{ __('Name') }}</th>
                <th>{{ __('Code') }}</th>
                <th class="col-3">{{ __('Display Name') }}</th>
                <th class="col-2">{{ __('Slug') }}</th>
                <th>{{ __('Status') }}</th>
                <th>{{ __('Note') }}</th>
                <th class="col-3">{{ __('Created At') }}</th>
                <th>{{ __('Action') }}</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <tr class="align-middle">
                <td>{{ $role->id }}</td>
                <td>{{ $role->present()->name() }}</td>
                <td>{{ $role->present()->code() }}</td>
                <td>{{ $role->present()->diplayName() }}</td>
                <td>{{ $role->present()->slug() }}</td>
                <td>{!! $role->present()->status() !!}</td>
                <td>{{ $role->present()->note() }}</td>
                <td>{{ $role->present()->created_at() }}</td>
                <td>{!! $role->present()->showActionButton() !!}</td>
            </tr>
        </tbody>
    </table>
</div>