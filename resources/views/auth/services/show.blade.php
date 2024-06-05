<div class="table-responsive">
    <table class="table align-middle project-list-table table-nowrap data-table-show" style="width:100%"
        id="dataTableShow">
        <thead class="text-center">
            <tr>
                <th style="font-size: 12px;font-weight: bold"></th>
                <th>{{ __('Code') }}</th>
                <th>{{ __('Name') }}</th>
                <th>{{ __('Subcategory') }}</th>
                <th>{{ __('Status') }}</th>
                <th>{{ __('Note') }}</th>
                <th>{{ __('Created At') }}</th>
                <th>{{ __('Action') }}</th>
            </tr>
        </thead>
        <tbody class="text-center align-middle">
            <tr class="align-middle">
                <td>{{ $service->id }}</td>
                <td>{{ $service->present()->code() }}</td>
                <td>{{ $service->present()->name() }}</td>
                <td>{{ $service->present()->categories() }}</td>
                <td>{!! $service->present()->status() !!}</td>
                <td>{{ $service->present()->note() }}</td>
                <td>{{ $service->present()->created_at() }}</td>
                <td>{!! $service->present()->showActionButton() !!}</td>
            </tr>
        </tbody>
    </table>
</div>