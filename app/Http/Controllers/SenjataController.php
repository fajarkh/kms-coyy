<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use App\DataTables\SenjataDataTable;
use App\Http\Requests\SenjataRequest;
use App\Models\Senjata;
use App\Traits\UploadFileTrait;

class SenjataController extends Controller
{
use UploadFileTrait;
    public function __construct()
    {
        $this->view = 'senjata';
        $this->route = 'senjata';
        $this->title = 'Senjata';
        $this->shareView(['type' => 'admin']);
    }

    public function index(SenjataDataTable $dataTable)
    {
        return $dataTable->render($this->view . '.index');
    }

    public function create()
    {
        return view($this->view . '.create');
    }

    public function edit($id)
    {
        $item = Senjata::find($id);
        return view($this->view . '.edit', compact('item'));
    }

    public function store(SenjataRequest $request)
    {
        $item = Senjata::create([
            'nama'     => $request->nama,
            'gambar'     => $this->upload('senjata', $request->file('gambar')),
            'deskripsi'   => $request->deskripsi
        ]);
        return $this->redirectWith($item->wasRecentlyCreated ? 'insert' : 'error');
    }

    public function update(SenjataRequest $request, $id)
    {
        $item = Senjata::findOrFail($id);
        $dataUpdate = [
            'nama'     => $request->nama,
            'deskripsi'   => $request->deskripsi,
        ];
        if ($request->file('gambar') != "") {
            $dataUpdate['gambar'] = $this->upload('senjata', $request->file('gambar'), $item->gambar);
        }
        return $this->redirectWith($item->update($dataUpdate)  ? 'update' : 'error');
    }

    public function destroy($id)
    {
        $item = Senjata::findOrFail($id);
        $this->deleteFile('senjata', $item->gambar);
        return $this->redirectWith($item->delete() ? 'delete' : 'error');
    }
}
