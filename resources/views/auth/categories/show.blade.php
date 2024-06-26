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
                <th>{{ __('Slug') }}</th>
                <th>{{ __('Created At') }}</th>
                <th>{{ __('Action') }}</th>
            </tr>
        </thead>
        <tbody class="text-center align-middle">
            <td>{{ $category->id }}</td>
            <td>{{ $category->present()->name() }}</td>
            <td>{{ $category->present()->code() }}</td>
            <td>{{ $category->present()->subcategory() }}</td>
            <td>{!! $category->present()->status() !!}</td>
            <td>{{ $category->present()->note() }}</td>
            <td>{{ $category->present()->slug() }}</td>
            <td>{{ $category->present()->created_at() }}</td>
            <td>{!! $category->present()->showActionButton() !!}</td>
        </tbody>
    </table>
</div>