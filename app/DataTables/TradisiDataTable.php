<?php

namespace App\DataTables;

use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class TradisiDataTable extends DataTable
{
    private $route = 'tradisi';
    private $model;
    public function __construct($model)
    {
        $this->model = $model;
    }

    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addIndexColumn()
            ->addColumn('action', function ($query) {
                return view('datatable._action', [
                    'model' => $query,
                    'route_edit' => ['custom' => $this->generateRoute('edit', $query)],
                    'route_destroy' => ['custom' => $this->generateRoute('destroy', $query)]
                ]);
            });
    }

    public function query()
    {
        return $this->model->newQuery();
    }

    public function html()
    {
        $builder = $this->builder()
            ->setTableId('tabelTradisi')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('Bfrtip')
            ->orderBy(1)
            ->buttons(
                Button::make('create')
                    ->text('Buat Baru')
                    ->addClass('btn btn-success')
                    ->action("window.location = '" . $this->generateRoute('create') . "';"),
            );
        return $builder;
    }

    protected function getColumns()
    {
        return [
            Column::make('DT_RowIndex')
                ->title('No')
                ->orderable(false)
                ->searchable(false),
            Column::make('nama'),
            Column::make('ringkasan')->title('Deskripsi'),
            Column::computed('action')
                ->title('Aksi')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
        ];
    }

    protected function filename()
    {
        return 'Tradisi_' . date('YmdHis');
    }

    private function generateRoute($type, $model = null)
    {
        if ($type == 'create') {
            return route($this->route . '.create', ['model' => class_basename($this->model)]);
        }
        if ($type == 'edit') {
            return route($this->route . '.edit', [$this->route => $model->id, 'model' => class_basename($this->model)]);
        }
        if ($type == 'destroy') {
            return route($this->route . '.destroy', [$this->route => $model->id, 'model' => class_basename($this->model)]);
        }
    }
}
