<?php

namespace App\DataTables\Territories;


use Illuminate\Support\Str;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use App\Models\Territories\Continent;
use Yajra\DataTables\Html\SearchPane;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;

class ContinentDataTable extends DataTable
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
            ->addColumn('action', function ($continent) {
                return $continent->present()->actionButton();
            })
            ->addColumn('name', function ($continent) {
                return Str::limit($continent->present()->name(), 40, '...');
            })
            ->addColumn('created_at', function ($continent) {
                return $continent->present()->created_at();
            })
            ->setRowId('action', 'created_at');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Continent $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Continent $model): QueryBuilder
    {
        return $model->newQuery()->orderBy('name', 'ASC');
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
                'dom'          => 'Bfrtip',
                'buttons'      => ['add', 'export', 'print', 'reset', 'reload'],
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
                ->addClass('text-center col-4')
                ->style('background-color:#f8f9fa; border-top-left-radius:10px')
                ->startsWithSearch()
                ->with('10'),
            Column::make(__('code'))
                ->addClass('text-center')
                ->style('background-color:#f8f9fa'),
            Column::make(__('created_at'))
                ->addClass('text-center')
                ->style('background-color:#f8f9fa'),
            Column::computed(__('action'))
                ->exportable(false)
                ->printable(false)
                ->with('100')
                ->addClass('text-center col-3')
                ->style('background-color:#f8f9fa; border-top-right-radius:10px'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'Continent_' . date('YmdHis');
    }
}
