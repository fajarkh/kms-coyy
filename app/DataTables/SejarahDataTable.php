<?php

namespace App\DataTables;

use App\Models\Sejarah;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class SejarahDataTable extends DataTable
{
    private $route = 'sejarah';

    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addIndexColumn()
            ->addColumn('action', function ($query) {
                return view('datatable._action', [
                    'model' => $query,
                    'route_edit' => $this->route . '.edit',
                    'route_destroy' => $this->route . '.destroy'
                ]);
            });
    }

    public function query(Sejarah $model)
    {
        return $model->newQuery();
    }

    public function html()
    {
        $builder = $this->builder()
            ->setTableId('tabelSejerah')
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
            Column::make('deskripsi'),
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
        return 'Sejerah_' . date('YmdHis');
    }
}
