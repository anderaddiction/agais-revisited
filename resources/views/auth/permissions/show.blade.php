<div class="table-responsive">
    <table class="table align-middle project-list-table table-nowrap data-table-show" style="width:100%"
        id="dataTableShow">
        <thead class="text-center">
            <tr>
                <th style="font-size: 12px;font-weight: bold"></th>
                <th>{{ __('Code') }}</th>
                <th>{{ __('Name') }}</th>
                <th>{{ __('Level') }}</th>
                <th>{{ __('Role') }}</th>
                <th>{{ __('Status') }}</th>
                <th>{{ __('Note') }}</th>
                <th>{{ __('Created At') }}</th>
                <th>{{ __('Action') }}</th>
            </tr>
        </thead>
        <tbody class="text-center align-middle">
            <tr class="align-middle">
                <td>{{ $permission->id }}</td>
                <td>{{ $permission->present()->code() }}</td>
                <td>{{ $permission->present()->name() }}</td>
                <td>{{ $permission->present()->level() }}</td>
                <td>{{ $permission->present()->role() }}</td>
                <td>{!! $permission->present()->status() !!}</td>
                <td>{{ $permission->present()->note() }}</td>
                <td>{{ $permission->present()->created_at() }}</td>
                <td>{!! $permission->present()->showActionButton() !!}</td>
            </tr>
        </tbody>
    </table>
</div>