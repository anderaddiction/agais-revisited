<?php

namespace App\DataTables\Territories;

use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use App\Models\Territories\Country;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;

class CountryDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', function ($country) {
                return $country->present()->actionButton();
            })
            ->addColumn('created_at', function ($country) {
                return $country->present()->created_at();
            })
            ->addColumn('continent', function ($country) {
                return $country->present()->continent();
            })
            ->addColumn('iso2', function ($country) {
                return $country->present()->iso2();
            })
            ->addColumn('iso3', function ($country) {
                return $country->present()->iso3();
            })
            // ->addColumn('flag', function ($country) {
            //     return $country->present()->flag();
            // })
            ->setRowId('action', 'continent', 'created_at', 'iso2', 'iso3', 'flag');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Country $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Country $model): QueryBuilder
    {
        return $model->newQuery()->with('continent')->orderBy('name', 'ASC');
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('dataTable')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('Bfrtip')
            ->orderBy(1)
            //->selectStyleSingle()
            // ->selectStyleSingle()
            ->parameters([
                'responsive' => true,
                'language' => [
                    'url' => '//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json',
                    "buttons"           => [
                        "New"       => "Agregar",
                        "copy"      => "Copiar",
                        "colvis"    => "Visibilidad",
                        "create"    => "Crear",
                        "export"    => "Exportar",
                        "reset"     => "Recargar",
                        "print"     => "Imprimir"
                    ]
                ],
                'drawCallback' => 'function() {
                    $(document).ready(function () {
                        $("#dataTable").removeClass("table-bordered");
                        $("#dataTable").removeClass("table-hover");
                        $("#dataTable").removeClass("table-striped");
                        $("#dataTable").addClass("table");
                        $("#dataTable").addClass("table-responsive");
                        $("thead").addClass("bg-gray");
                        $(".buttons-add").removeClass("btn-secondary");
                        $(".buttons-add").removeClass("btn-success");
                    });
                 }',
            ])
            ->buttons([
                Button::make('add')
                    ->addClass('btn-primary')
                    ->removeClass('btn-success')
                    ->text(__('<i class="bx bxs-pencil"></i>')),
                Button::make('export')
                    ->text('<i class= "bx bx-dots-vertical"></i>')
                    ->addClass('btn-success'),
                Button::make('reset')
                    ->text(__('<i class="bx bx-reset"></i>'))
                    ->addClass('btn-success'),

            ]);
    }

    /**
     * Get the dataTable columns definition.
     *
     * @return array
     */
    public function getColumns(): array
    {
        return [
            Column::make(__('name'))
                ->addClass('text-center'),
            Column::make(__('code'))
                ->addClass('text-center'),
            Column::make(__('continent'))
                ->addClass('text-center'),
            Column::make(__('iso2'))
                ->addClass('text-center'),
            Column::make(__('iso3'))
                ->addClass('text-center'),
            // Column::make(__('flag'))
            //     ->addClass('text-center'),
            Column::make(__('created_at'))
                ->addClass('text-center'),

            Column::computed(__('action'))
                ->exportable(false)
                ->printable(false)
                ->addClass('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'Country_' . date('YmdHis');
    }
}
