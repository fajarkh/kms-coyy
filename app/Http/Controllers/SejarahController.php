<?php

namespace App\Http\Controllers;

use App\DataTables\SejarahDataTable;
use App\Http\Requests\SejarahRequest;
use App\Models\Sejarah;
use App\Traits\UploadFileTrait;

class SejarahController extends Controller
{
    use UploadFileTrait;
    public function __construct()
    {
        $this->view = 'sejarah';
        $this->route = 'sejarah';
        $this->title = 'Sejarah';
        $this->shareView(['type' => 'admin']);
    }

    public function index(SejarahDataTable $dataTable)
    {
        return $dataTable->render($this->view . '.index');
    }

    public function create()
    {
        return view($this->view . '.create');
    }

    public function edit($id)
    {
        $item = Sejarah::find($id);
        return view($this->view . '.edit', compact('item'));
    }

    public function store(SejarahRequest $request)
    {
        $item = Sejarah::create([
            'gambar'     => $this->upload('sejarah', $request->file('gambar')),
            'nama'     => $request->nama,
            'deskripsi'   => $request->deskripsi
        ]);
        return $this->redirectWith($item->wasRecentlyCreated ? 'insert' : 'error');
    }

    public function update(SejarahRequest $request, $id)
    {
        $item = Sejarah::findOrFail($id);
        $dataUpdate = [
            'nama'     => $request->nama,
            'deskripsi'   => $request->deskripsi
        ];
        if ($request->file('gambar') != "") {
            $dataUpdate['gambar'] = $this->upload('sejarah', $request->file('gambar'), $item->gambar);
        }
        return $this->redirectWith($item->update($dataUpdate)  ? 'update' : 'error');
    }

    public function destroy($id)
    {
        $item = Sejarah::findOrFail($id);
        $this->deleteFile('sejarah', $item->gambar);
        return $this->redirectWith($item->delete() ? 'delete' : 'error');
    }
}
