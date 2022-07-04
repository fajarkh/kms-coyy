<?php

namespace App\Http\Controllers;

use App\DataTables\RitualDataTable;
use App\Http\Requests\RitualRequest;
use App\Models\Ritual;

class RitualController extends Controller
{
    public function __construct()
    {
        $this->view = 'ritual';
        $this->route = 'ritual';
        $this->title = 'Ritual';
        $this->shareView();
    }

    public function index(RitualDataTable $dataTable)
    {
        return $dataTable->render($this->view . '.index');
    }

    public function create()
    {
        return view($this->view . '.create');
    }

    public function edit($id)
    {
        $item = Ritual::find($id);
        return view($this->view . '.edit', compact('item'));
    }

    public function store(RitualRequest $request)
    {
        $item = Ritual::create([
            'nama'     => $request->nama,
            'deskripsi'   => $request->deskripsi,
            'jenis'   => $request->jenis,
            'budaya_id'   => $request->budaya_id
        ]);
        return $this->redirectWith($item->wasRecentlyCreated ? 'insert' : 'error');
    }

    public function update(RitualRequest $request, $id)
    {
        $item = Ritual::findOrFail($id);
        $dataUpdate = [
            'nama'     => $request->nama,
            'deskripsi'   => $request->deskripsi,
            'jenis'   => $request->jenis,
            'budaya_id'   => $request->budaya_id
        ];
        return $this->redirectWith($item->update($dataUpdate)  ? 'update' : 'error');
    }

    public function destroy($id)
    {
        $item = Ritual::findOrFail($id);
        return $this->redirectWith($item->delete() ? 'delete' : 'error');
    }
}
