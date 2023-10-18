<?php

namespace App\DataTables\Territories;


use App\Models\Territories\State;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;

class StateDataTable extends DataTable
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
            ->addColumn('action', function ($state) {
                return $state->present()->actionButton();
            })
            ->addColumn('created_at', function ($state) {
                return $state->present()->created_at();
            })
            // ->addColumn('country', function ($state) {
            //     return $state->present()->country();
            // })
            ->addColumn('iso', function ($state) {
                return $state->present()->iso();
            })
            ->addColumn('flag', function ($state) {
                return $state->present()->flag();
            })
            ->setRowId('action', 'created_at', 'country', 'iso', 'flag');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\State $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(State $model): QueryBuilder
    {
        return $model->newQuery()->with('country')->orderby('created_at', 'DESC');
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
            Column::make(__('iso'))
                ->addClass('text-center'),
            Column::make(__('country'))
                ->addClass('text-center'),
            Column::make(__('created_at'))
                ->addClass('text-center'),
            Column::computed(__('action'))
                ->exportable(false)
                ->printable(false)
                ->addClass('text-center table-report__action w-56'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'State_' . date('YmdHis');
    }
}
