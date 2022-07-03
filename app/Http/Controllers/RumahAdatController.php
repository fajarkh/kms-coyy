<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use App\DataTables\RumahAdatDataTable;
use App\Http\Requests\RumahAdatRequest;
use App\Models\RumahAdat;

class RumahAdatController extends Controller
{

    public function __construct()
    {
        $this->view = 'rumah_adat';
        View::share(
            [
                'title' => 'Rumah Adat',
            ]
        );
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
            'deskripsi'   => $request->deskripsi,
            'budaya_id'   => $request->budaya_id
        ]);

        if ($item) {
            return redirect()->route('alatmusik.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            return redirect()->route('alatmusik.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function update(RumahAdatRequest $request, $id)
    {
        $item = RumahAdat::findOrFail($id);
        $dataUpdate = [
            'nama'     => $request->nama,
            'deskripsi'   => $request->deskripsi,
            'budaya_id'   => $request->budaya_id
        ];

        if ($item->update($dataUpdate)) {
            return redirect()->route('alatmusik.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            return redirect()->route('alatmusik.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id)
    {
        $item = RumahAdat::findOrFail($id);
        if ($item->delete()) {
            return redirect()->route('alatmusik.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            return redirect()->route('alatmusik.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
