<?php

namespace App\Http\Controllers;

use App\DataTables\AdatPernikahanDataTable;
use App\Http\Requests\AdatPernikahanRequest;
use App\Models\AdatPernikahan;
use App\Traits\UploadFileTrait;

class AdatPernikahanController extends Controller
{
    use UploadFileTrait;
    public function __construct()
    {
        $this->view = 'adat_pernikahan';
        $this->route = 'adatpernikahan';
        $this->title = 'Adat Pernikahan';
        $this->shareView(['type' => 'admin']);
    }

    public function index(AdatPernikahanDataTable $dataTable)
    {
        return $dataTable->render($this->view . '.index');
    }

    public function create()
    {
        return view($this->view . '.create');
    }

    public function edit($id)
    {
        $item = AdatPernikahan::find($id);
        return view($this->view . '.edit', compact('item'));
    }

    public function store(AdatPernikahanRequest $request)
    {
        $item = AdatPernikahan::create([
            'nama'     => $request->nama,
            'gambar'     => $this->upload('adat_pernikahan', $request->file('gambar')),
            'deskripsi'   => $request->deskripsi
        ]);
        return $this->redirectWith($item->wasRecentlyCreated ? 'insert' : 'error');
    }

    public function update(AdatPernikahanRequest $request, $id)
    {
        $item = AdatPernikahan::findOrFail($id);
        $dataUpdate = [
            'nama'     => $request->nama,
            'deskripsi'   => $request->deskripsi
        ];
        if ($request->file('gambar') != "") {
            $dataUpdate['gambar'] = $this->upload('adat_pernikahan', $request->file('gambar'), $item->gambar);
        }
        return $this->redirectWith($item->update($dataUpdate)  ? 'update' : 'error');
    }

    public function destroy($id)
    {
        $item = AdatPernikahan::findOrFail($id);
        $this->deleteFile('adat_pernikahan', $item->gambar);
        return $this->redirectWith($item->delete() ? 'delete' : 'error');
    }
}
