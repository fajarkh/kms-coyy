<?php

namespace App\Http\Controllers;

use App\DataTables\AdatLahiranDataTable;
use App\Http\Requests\AdatLahiranRequest;
use App\Models\AdatLahiran;
use App\Traits\UploadFileTrait;

class AdatLahiranController extends Controller
{
    use UploadFileTrait;
    public function __construct()
    {
        $this->view = 'adat_lahiran';
        $this->route = 'adatlahiran';
        $this->title = 'Adat Lahiran';
        $this->shareView();
    }

    public function index(AdatLahiranDataTable $dataTable)
    {
        return $dataTable->render($this->view . '.index');
    }

    public function create()
    {
        return view($this->view . '.create');
    }

    public function edit($id)
    {
        $item = AdatLahiran::find($id);
        return view($this->view . '.edit', compact('item'));
    }

    public function store(AdatLahiranRequest $request)
    {
        $item = AdatLahiran::create([
            'nama'     => $request->nama,
            'gambar'     => $this->upload('adat_lahiran', $request->file('gambar')),
            'deskripsi'   => $request->deskripsi
        ]);
        return $this->redirectWith($item->wasRecentlyCreated ? 'insert' : 'error');
    }

    public function update(AdatLahiranRequest $request, $id)
    {
        $item = AdatLahiran::findOrFail($id);
        $dataUpdate = [
            'nama'     => $request->nama,
            'deskripsi'   => $request->deskripsi
        ];
        if ($request->file('gambar') != "") {
            $dataUpdate['gambar'] = $this->upload('adat_lahiran', $request->file('gambar'), $item->gambar);
        }
        return $this->redirectWith($item->update($dataUpdate)  ? 'update' : 'error');
    }

    public function destroy($id)
    {
        $item = AdatLahiran::findOrFail($id);
        $this->deleteFile('adat_lahiran', $item->gambar);
        return $this->redirectWith($item->delete() ? 'delete' : 'error');
    }
}
