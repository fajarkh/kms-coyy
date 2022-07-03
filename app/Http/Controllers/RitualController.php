<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use App\DataTables\RitualDataTable;
use App\Http\Requests\RitualRequest;
use App\Models\Ritual;

class RitualController extends Controller
{
    public function __construct()
    {
        $this->view = 'ritual';
        $this->route = 'ritual';
        View::share(
            [
                'title' => 'Ritual',
                'route' => $this->route
            ]
        );
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

        if ($item) {
            return redirect()->route($this->route . '.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            return redirect()->route($this->route . '.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
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

        if ($item->update($dataUpdate)) {
            return redirect()->route($this->route . 'index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            return redirect()->route($this->route . 'index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id)
    {
        $item = Ritual::findOrFail($id);
        if ($item->delete()) {
            return redirect()->route($this->route . '.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            return redirect()->route($this->route . '.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
