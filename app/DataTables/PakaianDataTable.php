<?php

namespace App\DataTables;

use App\Models\Pakaian;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class PakaianDataTable extends DataTable
{
    private $route = 'pakaian';
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

    public function query(Pakaian $model)
    {
        return $model->newQuery();
    }

    public function html()
    {
        $builder = $this->builder()
            ->setTableId('tabelPakaian')
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
            Column::make('ringkasan')->title('Deskripsi')
                ->orderable(false)
                ->searchable(false),
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
        return 'Pakaian_' . date('YmdHis');
    }
}
