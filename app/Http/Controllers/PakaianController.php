<?php

namespace App\Http\Controllers;

use App\Traits\UploadFileTrait;
use App\DataTables\PakaianDataTable;
use App\Http\Requests\PakaianRequest;
use App\Models\Pakaian;

class PakaianController extends Controller
{
    use UploadFileTrait;
    public function __construct()
    {
        $this->view = 'pakaian';
        $this->route = 'pakaian';
        $this->title = 'Pakaian';
        $this->shareView(['type' => 'admin']);
    }

    public function index(PakaianDataTable $dataTable)
    {
        return $dataTable->render($this->view . '.index');
    }

    public function create()
    {
        return view($this->view . '.create');
    }

    public function edit($id)
    {
        $item = Pakaian::find($id);
        return view($this->view . '.edit', compact('item'));
    }

    public function store(PakaianRequest $request)
    {
        $item = Pakaian::create([
            'nama'     => $request->nama,
            'gambar'     => $this->upload('pakaian', $request->file('gambar')),
            'deskripsi'   => $request->deskripsi
        ]);
        return $this->redirectWith($item->wasRecentlyCreated ? 'insert' : 'error');
    }

    public function update(PakaianRequest $request, $id)
    {
        $item = Pakaian::findOrFail($id);
        $dataUpdate = [
            'nama'     => $request->nama,
            'deskripsi'   => $request->deskripsi
        ];
        if ($request->file('gambar') != "") {
            $dataUpdate['gambar'] = $this->upload('pakaian', $request->file('gambar'), $item->gambar);
        }
        return $this->redirectWith($item->update($dataUpdate)  ? 'update' : 'error');
    }

    public function destroy($id)
    {
        $item = Pakaian::findOrFail($id);
        $this->deleteFile('pakaian', $item->gambar);
        return $this->redirectWith($item->delete() ? 'delete' : 'error');
    }
}
