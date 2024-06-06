<div class="table-responsive">
    <table class="table align-middle project-list-table table-nowrap data-table-show" style="width:100%"
        id="dataTableShow">
        <thead class="text-center" style="width: 100%;">
            <tr>
                <th style="font-size: 12px;font-weight: bold"></th>
                <th>{{ __('Code') }}</th>
                <th>{{ __('Name') }}</th>
                <th>{{ __('Acronym') }}</th>
                <th>{{ __('Percent') }}</th>
                <th>{{ __('Country') }}</th>
                <th>{{ __('Status') }}</th>
                <th>{{ __('Note') }}</th>
                <th>{{ __('Created At') }}</th>
                <th>{{ __('Action') }}</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <tr class="align-middle">
                <td>{{ $tax->id }}</td>
                <td>{{ $tax->present()->code() }}</td>
                <td>{{ $tax->present()->name() }}</td>
                <td>{{ $tax->present()->acronym() }}</td>
                <td>{{ $tax->present()->percent() }}</td>
                <td>{!! $tax->present()->flag() !!}</td>
                <td>{!! $tax->present()->status() !!}</td>
                <td>{{ $tax->present()->note() }}</td>
                <td>{{ $tax->present()->created_at() }}</td>
                <td>{!! $tax->present()->showActionButton() !!}</td>
            </tr>
        </tbody>
    </table>
</div>