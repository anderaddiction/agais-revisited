<div class="table-responsive">
    <table class="table align-middle project-list-table table-nowrap data-table-show" style="width:100%"
        id="dataTableShow">
        <thead class="text-center" style="width: 100%;">
            <tr>
                <th style="font-size: 12px;font-weight: bold"></th>
                <th>{{ __('Name') }}</th>
                <th>{{ __('Code') }}</th>
                <th>{{ __('Platform') }}</th>
                <th>{{ __('Country') }}</th>
                <th>{{ __('Status') }}</th>
                <th>{{ __('Note') }}</th>
                <th>{{ __('Created At') }}</th>
                <th>{{ __('Action') }}</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <tr class="align-middle">
                <td>{{ $payment_gateway->id }}</td>
                <td>{{ $payment_gateway->present()->name() }}</td>
                <td>{{ $payment_gateway->present()->code() }}</td>
                <td>{{ $payment_gateway->present()->platform() }}</td>
                <td>{!! $payment_gateway->present()->flag() !!}</td>
                <td>{!! $payment_gateway->present()->status() !!}</td>
                <td>{{ $payment_gateway->present()->note() }}</td>
                <td>{{ $payment_gateway->present()->created_at() }}</td>
                <td>{!! $payment_gateway->present()->showActionButton() !!}</td>
            </tr>
        </tbody>
    </table>
</div>