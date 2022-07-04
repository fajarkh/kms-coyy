<?php

namespace App\Http\Controllers;

use App\DataTables\UpacaraAdatDataTable;
use App\Http\Requests\UpacaraAdatRequest;
use App\Models\UpacaraAdat;
use App\Traits\UploadFileTrait;

class UpacaraAdatController extends Controller
{
    use UploadFileTrait;
    public function __construct()
    {
        $this->view = 'upacara_adat';
        $this->route = 'upacaraadat';
        $this->title = 'Upacata Adat';
        $this->shareView();
    }

    public function index(UpacaraAdatDataTable $dataTable)
    {
        return $dataTable->render($this->view . '.index');
    }

    public function create()
    {
        return view($this->view . '.create');
    }

    public function edit($id)
    {
        $item = UpacaraAdat::find($id);
        return view($this->view . '.edit', compact('item'));
    }

    public function store(UpacaraAdatRequest $request)
    {
        $item = UpacaraAdat::create([
            'nama'     => $request->nama,
            'gambar'     => $this->upload('upacara_adat', $request->file('gambar')),
            'deskripsi'   => $request->deskripsi,
            'budaya_id'   => $request->budaya_id
        ]);
        return $this->redirectWith($item->wasRecentlyCreated ? 'insert' : 'error');
    }

    public function update(UpacaraAdatRequest $request, $id)
    {
        $item = UpacaraAdat::findOrFail($id);
        $dataUpdate = [
            'nama'     => $request->nama,
            'deskripsi'   => $request->deskripsi,
            'budaya_id'   => $request->budaya_id
        ];
        if ($request->file('gambar') != "") {
            $dataUpdate['gambar'] = $this->upload('upacara_adat', $request->file('gambar'), $item->gambar);
        }
        return $this->redirectWith($item->update($dataUpdate)  ? 'update' : 'error');
    }

    public function destroy($id)
    {
        $item = UpacaraAdat::findOrFail($id);
        $this->deleteFile('upacara_adat', $item->gambar);
        return $this->redirectWith($item->delete() ? 'delete' : 'error');
    }
}
