<?php

namespace App\Http\Controllers;

use App\DataTables\RumahAdatDataTable;
use App\Http\Requests\RumahAdatRequest;
use App\Models\RumahAdat;
use App\Traits\UploadFileTrait;

class RumahAdatController extends Controller
{

    use UploadFileTrait;
    public function __construct()
    {
        $this->view = 'rumah_adat';
        $this->route = 'rumahadat';
        $this->title = 'Rumah Adat';
        $this->shareView();
    }

    public function index(RumahAdatDataTable $dataTable)
    {
        return $dataTable->render($this->view . '.index');
    }

    public function create()
    {
        return view($this->view . '.create');
    }

    public function edit($id)
    {
        $item = RumahAdat::find($id);
        return view($this->view . '.edit', compact('item'));
    }

    public function store(RumahAdatRequest $request)
    {
        $item = RumahAdat::create([
            'nama'     => $request->nama,
            'gambar'     => $this->upload('rumah_adat', $request->file('gambar')),
            'deskripsi'   => $request->deskripsi,
            'budaya_id'   => $request->budaya_id
        ]);
        return $this->redirectWith($item->wasRecentlyCreated ? 'insert' : 'error');
    }

    public function update(RumahAdatRequest $request, $id)
    {
        $item = RumahAdat::findOrFail($id);
        $dataUpdate = [
            'nama'     => $request->nama,
            'deskripsi'   => $request->deskripsi,
            'budaya_id'   => $request->budaya_id
        ];
        if ($request->file('gambar') != "") {
            $dataUpdate['gambar'] = $this->upload('rumah_adat', $request->file('gambar'), $item->gambar);
        }
        return $this->redirectWith($item->update($dataUpdate)  ? 'update' : 'error');
    }

    public function destroy($id)
    {
        $item = RumahAdat::findOrFail($id);
        $this->deleteFile('rumah_adat', $item->gambar);
        return $this->redirectWith($item->delete() ? 'delete' : 'error');
    }
}
