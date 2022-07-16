<?php

namespace App\Http\Controllers;

use App\DataTables\CeritaRakyatDataTable;
use App\Http\Requests\CeritaRakyatRequest;
use App\Models\CeritaRakyat;
use App\Traits\UploadFileTrait;

class CeritaRakyatController extends Controller
{
    use UploadFileTrait;
    public function __construct()
    {
        $this->view = 'cerita_rakyat';
        $this->route = 'ceritarakyat';
        $this->title = 'Cerita Rakyat';
        $this->shareView();
    }

    public function index(CeritaRakyatDataTable $dataTable)
    {
        return $dataTable->render($this->view . '.index');
    }

    public function create()
    {
        return view($this->view . '.create');
    }

    public function edit($id)
    {
        $item = CeritaRakyat::find($id);
        return view($this->view . '.edit', compact('item'));
    }

    public function store(CeritaRakyatRequest $request)
    {
        $item = CeritaRakyat::create([
            'gambar'     => $this->upload('cerita_rakyat', $request->file('gambar')),
            'nama'     => $request->nama,
            'deskripsi'   => $request->deskripsi,
        ]);
        return $this->redirectWith($item->wasRecentlyCreated ? 'insert' : 'error');
    }

    public function update(CeritaRakyatRequest $request, $id)
    {
        $item = CeritaRakyat::findOrFail($id);
        $dataUpdate = [
            'nama'     => $request->nama,
            'deskripsi'   => $request->deskripsi,
        ];
        if ($request->file('gambar') != "") {
            $dataUpdate['gambar'] = $this->upload('cerita_rakyat', $request->file('gambar'), $item->gambar);
        }
        return $this->redirectWith($item->update($dataUpdate)  ? 'update' : 'error');
    }

    public function destroy($id)
    {
        $item = CeritaRakyat::findOrFail($id);
        $this->deleteFile('cerita_rakyat', $item->gambar);
        return $this->redirectWith($item->delete() ? 'delete' : 'error');
    }
}
