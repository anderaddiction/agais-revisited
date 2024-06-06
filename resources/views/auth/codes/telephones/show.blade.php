<div class="table-responsive">
    <table class="table align-middle project-list-table table-nowrap data-table-show" style="width:100%"
        id="dataTableShow">
        <thead class="text-center" style="width: 100%;">
            <tr>
                <th style="font-size: 12px;font-weight: bold"></th>
                <th>{{ __('Phone Code') }}</th>
                <th>{{ __('Code') }}</th>
                <th>{{ __('Country') }}</th>
                <th>{{ __('Status') }}</th>
                <th>{{ __('Note') }}</th>
                <th>{{ __('Slug') }}</th>
                <th>{{ __('Created At') }}</th>
                <th>{{ __('Action') }}</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <tr class="align-middle">
                <td>{{ $phone_code->id }}</td>
                <td>{{ $phone_code->present()->phoneCode() }}</td>
                <td>{{ $phone_code->present()->code() }}</td>
                <td>{!! $phone_code->present()->flag() !!}</td>
                <td>{!! $phone_code->present()->status() !!}</td>
                <td>{{ $phone_code->present()->note() }}</td>
                <td>{{ $phone_code->present()->slug() }}</td>
                <td>{{ $phone_code->present()->created_at() }}</td>
                <td>{!! $phone_code->present()->showActionButton() !!}</td>
            </tr>
        </tbody>
    </table>
</div>