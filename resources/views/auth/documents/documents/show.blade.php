<div class="table-responsive">
    <table class="table align-middle project-list-table table-nowrap data-table-show" style="width:100%"
        id="dataTableShow">
        <thead class="text-center" style="width: 100%;">
            <tr>
                <th style="font-size: 12px;font-weight: bold"></th>
                <th class="col-2">{{ __('Name') }}</th>
                <th>{{ __('Acronym') }}</th>
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
                <td>{{ $document->id }}</td>
                <td>{{ $document->present()->name() }}</td>
                <td>{{ $document->present()->acronym() }}</td>
                <td>{{ $document->present()->code() }}</td>
                <td>{!! $document->present()->flag() !!}</td>
                <td>{!! $document->present()->status() !!}</td>
                <td>{{ $document->present()->note() }}</td>
                <td>{{ $document->present()->slug() }}</td>
                <td>{{ $document->present()->created_at() }}</td>
                <td>{!! $document->present()->showActionButton() !!}</td>
            </tr>
        </tbody>
    </table>
</div>