<?php

namespace App\Http\Controllers;

use App\DataTables\ProfilDataTable;
use App\Http\Requests\ProfilRequest;
use App\Models\Profil;
use App\Traits\UploadFileTrait;

class ProfilController extends Controller
{
    use UploadFileTrait;
    public function __construct()
    {
        $this->view = 'profil';
        $this->route = 'profil';
        $this->title = 'Profil';
        $this->shareView(['type' => 'admin']);
    }

    public function index(ProfilDataTable $dataTable)
    {
        return $dataTable->render($this->view . '.index');
    }

    public function create()
    {
        return view($this->view . '.create');
    }

    public function edit($id)
    {
        $item = Profil::find($id);
        return view($this->view . '.edit', compact('item'));
    }

    public function store(ProfilRequest $request)
    {
        $item = Profil::create([
            'gambar'     => $this->upload('profil', $request->file('gambar')),
            'nama'     => $request->nama,
            'deskripsi'   => $request->deskripsi,
        ]);
        return $this->redirectWith($item->wasRecentlyCreated ? 'insert' : 'error');
    }

    public function update(ProfilRequest $request, $id)
    {
        $item = Profil::findOrFail($id);
        $dataUpdate = [
            'nama'     => $request->nama,
            'deskripsi'   => $request->deskripsi,
        ];
        if ($request->file('gambar') != "") {
            $dataUpdate['gambar'] = $this->upload('profil', $request->file('gambar'), $item->gambar);
        }
        return $this->redirectWith($item->update($dataUpdate)  ? 'update' : 'error');
    }

    public function destroy($id)
    {
        $item = Profil::findOrFail($id);
        $this->deleteFile('profil', $item->gambar);
        return $this->redirectWith($item->delete() ? 'delete' : 'error');
    }
}
