<?php

namespace App\Http\Controllers;

use App\DataTables\AlatMusikDataTable;
use App\Http\Requests\AlatMusikRequest;
use App\Models\AlatMusik;
use App\Traits\UploadFileTrait;

class AlatMusikController extends Controller
{
    use UploadFileTrait;
    public function __construct()
    {
        $this->view = 'alat_musik';
        $this->route = 'alatmusik';
        $this->title = 'Alat Musik';
        $this->shareView();
    }

    public function index(AlatMusikDataTable $dataTable)
    {
        return $dataTable->render($this->view . '.index');
    }

    public function create()
    {
        return view($this->view . '.create');
    }

    public function edit($id)
    {
        $item = AlatMusik::find($id);
        return view($this->view . '.edit', compact('item'));
    }

    public function store(AlatMusikRequest $request)
    {
        $item = AlatMusik::create([
            'nama'     => $request->nama,
            'gambar'     => $this->upload('alat_musik', $request->file('gambar')),
            'deskripsi'   => $request->deskripsi,
            'budaya_id'   => $request->budaya_id
        ]);
        return $this->redirectWith($item->wasRecentlyCreated ? 'insert' : 'error');
    }

    public function update(AlatMusikRequest $request, $id)
    {
        $item = AlatMusik::findOrFail($id);
        $dataUpdate = [
            'nama'     => $request->nama,
            'deskripsi'   => $request->deskripsi,
            'budaya_id'   => $request->budaya_id
        ];
        if ($request->file('gambar') != "") {
            $dataUpdate['gambar'] = $this->upload('alat_musik', $request->file('gambar'), $item->gambar);
        }
        return $this->redirectWith($item->update($dataUpdate)  ? 'update' : 'error');
    }

    public function destroy($id)
    {
        $item = AlatMusik::findOrFail($id);
        $this->deleteFile('alat_musik', $item->gambar);
        return $this->redirectWith($item->delete() ? 'delete' : 'error');
    }
}
