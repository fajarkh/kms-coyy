<?php

namespace App\Http\Controllers;

use App\DataTables\TradisiDataTable;
use App\Http\Requests\TradisiRequest;
use App\Traits\UploadFileTrait;
use Illuminate\Support\Str;

class TradisiController extends Controller
{
    use UploadFileTrait;
    public function __construct()
    {
        $this->view = 'tradisi';
        $this->route = 'tradisi';
        $this->title = 'Tradisi';
        $this->model = $this->getFromQueryParam('model');
        $this->shareView(['type' => 'admin']);
    }

    public function index()
    {
        $dataTable = new TradisiDataTable($this->model);
        return $dataTable->render($this->view . '.index');
    }

    public function create()
    {
        return view($this->view . '.create');
    }

    public function edit($id)
    {
        $item = $this->model->find($id);
        return view($this->view . '.edit', compact('item'));
    }

    public function store(TradisiRequest $request)
    {
        $item = $this->model->create([
            'nama'     => $request->nama,
            'gambar'     => $this->upload($this->model->getTable(), $request->file('gambar')),
            'deskripsi'   => $request->deskripsi
        ]);
        return $this->redirectWith($item->wasRecentlyCreated ? 'insert' : 'error');
    }

    public function update(TradisiRequest $request, $id)
    {
        $item = $this->model->findOrFail($id);
        $dataUpdate = [
            'nama'     => $request->nama,
            'deskripsi'   => $request->deskripsi
        ];
        if ($request->file('gambar') != "") {
            $dataUpdate['gambar'] = $this->upload($this->model->getTable(), $request->file('gambar'), $item->gambar);
        }
        return $this->redirectWith($item->update($dataUpdate)  ? 'update' : 'error');
    }

    public function destroy($id)
    {
        $item = $this->model->findOrFail($id);
        $this->deleteFile($this->model->getTable(), $item->gambar);
        return $this->redirectWith($item->delete() ? 'delete' : 'error');
    }
}
