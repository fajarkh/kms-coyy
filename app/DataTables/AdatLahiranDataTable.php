<?php

namespace App\DataTables;

use App\Models\AdatLahiran;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class AdatLahiranDataTable extends DataTable
{
    private $route = 'adatlahiran';
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addIndexColumn()
            ->addColumn('action', function ($query) {
                return view('datatable._action', [
                    'model' => $query,
                    'route_show' => 'post.show',
                    'route_edit' => $this->route . '.edit',
                    'route_destroy' => $this->route . '.destroy'
                ]);
            });
    }

    public function query(AdatLahiran $model)
    {
        return $model->newQuery();
    }

    public function html()
    {
        $builder = $this->builder()
            ->setTableId('tabelAdatLahiran')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('Bfrtip')
            ->orderBy(1)
            ->buttons(
                Button::make('create')
                    ->text('Buat Baru')
                    ->addClass('btn btn-success')
                    ->action("window.location = '" . route($this->route . '.create') . "';"),
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
        return 'AdatLahiran_' . date('YmdHis');
    }
}
