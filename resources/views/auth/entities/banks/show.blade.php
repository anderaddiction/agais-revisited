<div class="table-responsive">
    <table class="table align-middle project-list-table table-nowrap data-table-show" style="width:100%"
        id="dataTableShow">
        <thead class="text-center" style="width: 100%;">
            <tr>
                <th style="font-size: 12px;font-weight: bold"></th>
                <th class="col-2">{{ __('Name') }}</th>
                <th>{{ __('Code') }}</th>
                <th class="col-2">{{ __('Bank Type') }}</th>
                <th class="col-2">{{ __('Capital type') }}</th>
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
                <td>{{ $bank->id }}</td>
                <td>{{ $bank->present()->name() }}</td>
                <td>{{ $bank->present()->code() }}</td>
                <td>{!! $bank->present()->bankType() !!}</td>
                <td>{{ $bank->present()->capitalType() }}</td>
                <td>{!! $bank->present()->flag() !!}</td>
                <td>{{ $bank->present()->slug() }}</td>
                <td>{!! $bank->present()->status() !!}</td>
                <td>{{ $bank->present()->note() }}</td>
                <td>{{ $bank->present()->created_at() }}</td>
                <td>{!! $bank->present()->showActionButton() !!}</td>
            </tr>
        </tbody>
    </table>
</div>