<div class="table-responsive">
    <table class="table align-middle project-list-table table-nowrap data-table-show" style="width:100%"
        id="dataTableShow">
        <thead class="text-center" style="width: 100%;">
            <tr>
                <th style="font-size: 12px;font-weight: bold"></th>
                <th class="col-2">{{ __('Name') }}</th>
                <th>{{ __('Code') }}</th>
                <th>{{ __('Symbol') }}</th>
                <th>{{ __('ISO') }}</th>
                <th class="col-2">{{ __('Country') }}</th>
                <th class="col-1">{{ __('Slug') }}</th>
                <th class="col-1">{{ __('Status') }}</th>
                <th class="col-1">{{ __('Note') }}</th>
                <th class="col-4">{{ __('Created At') }}</th>
                <th>{{ __('Action') }}</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <tr class="align-middle">
                <td>{{ $currency->id }}</td>
                <td>{{ $currency->present()->name() }}</td>
                <td>{{ $currency->present()->code() }}</td>
                <td>{!! $currency->present()->symbol() !!}</td>
                <td>{{ $currency->present()->iso() }}</td>
                <td>{!! $currency->present()->flag() !!}</td>
                <td>{{ $currency->present()->slug() }}</td>
                <td>{!! $currency->present()->status() !!}</td>
                <td>{{ $currency->present()->note() }}</td>
                <td>{{ $currency->present()->created_at() }}</td>
                <td>{!! $currency->present()->showActionButton() !!}</td>
            </tr>
        </tbody>
    </table>
</div>