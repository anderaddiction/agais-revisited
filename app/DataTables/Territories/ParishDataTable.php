<?php

namespace App\DataTables\Territories;


use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use App\Models\Territories\Parish;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;

class ParishDataTable extends DataTable
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
            ->addColumn('action', function ($parish) {
                return $parish->present()->actionButton();
            })
            ->addColumn('created_at', function ($parish) {
                return $parish->present()->created_at();
            })
            ->addColumn('municipality', function ($parish) {
                return $parish->present()->municipality();
            })
            ->addColumn('state', function ($parish) {
                return $parish->present()->state();
            })
            ->addColumn('flag', function ($parish) {
                return $parish->present()->flag();
            })
            ->setRowId('action', 'created_at', 'state', 'flag', 'municipality');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Parish $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Parish $model): QueryBuilder
    {
        return $model->newQuery()->with('municipality')->orderBy('created_at', 'DESC');
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
                        $("#dataTable").addClass("table-report");
                        $("#dataTable").addClass("-mt-2")
                        $(".btn-export").removeClass("btn-success");
                        $(".btn-export").removeClass("btn-secondary");
                        $(".btn-export").addClass("btn-primary");
                    });
                 }',
            ])
            ->buttons([
                Button::make('add')
                    ->addClass('btn-export')
                    ->text(__('<i class="bi bi-pencil-fill"></i>')),
                Button::make('copy')
                    ->addClass('btn-export'),
                Button::make('excel')
                    ->addClass('btn-export'),
                Button::make('csv')
                    ->addClass('btn-export'),
                Button::make('pdf')
                    ->addClass('btn-export'),
                Button::make('print')
                    ->addClass('btn-export'),
                Button::make('reset')
                    ->addClass('btn-export'),
                Button::make('reload')
                    ->addClass('btn-export')
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
            Column::make(__('state'))
                ->addClass('text-center'),
            Column::make(__('municipality'))
                ->addClass('text-center'),
            Column::make(__('flag'))
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
        return 'Parish_' . date('YmdHis');
    }
}
