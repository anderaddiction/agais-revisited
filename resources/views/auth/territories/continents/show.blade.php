<div class="table-responsive">
    <table class="table align-middle project-list-table table-nowrap data-table-show" style="width:100%"
        id="dataTableShow">
        <thead class="text-center" style="width: 100%;">
            <tr>
                <th style="font-size: 12px;font-weight: bold"></th>
                <th>{{ __('Name') }}</th>
                <th>{{ __('Code') }}</th>
                <th>{{ __('Slug') }}</th>
                <th>{{ __('Note') }}</th>
                <th class="col-3">{{ __('Created At') }}</th>
                <th>{{ __('Action') }}</th>
            </tr>
        </thead>
        <tbody class="text-center align-middle">
            <tr class="align-middle">
                <td>{{ $continent->id }}</td>
                <td>{{ $continent->present()->name() }}</td>
                <td>{{ $continent->present()->code() }}</td>
                <td>{{ $continent->present()->slug() }}</td>
                <td>{{ $continent->present()->note() }}</td>
                <td>{{ $continent->present()->created_at() }}</td>
                <td>{!! $continent->present()->showActionButton() !!}</td>
            </tr>
        </tbody>
    </table>
</div>