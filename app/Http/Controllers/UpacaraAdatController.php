<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use App\DataTables\UpacaraAdatDataTable;
use App\Http\Requests\UpacaraAdatRequest;
use App\Models\UpacaraAdat;

class UpacaraAdatController extends Controller
{

    public function __construct()
    {
        $this->view = 'upacara_adat';
        View::share(
            [
                'title' => 'Upacara Adat',
            ]
        );
    }

    public function index(UpacaraAdatDataTable $dataTable)
    {
        return $dataTable->render($this->view . '.index');
    }

    public function create()
    {
        return view($this->view . '.create');
    }

    public function edit($id)
    {
        $item = UpacaraAdat::find($id);
        return view($this->view . '.edit', compact('item'));
    }

    public function store(UpacaraAdatRequest $request)
    {
        $item = UpacaraAdat::create([
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

    public function update(UpacaraAdatRequest $request, $id)
    {
        $item = UpacaraAdat::findOrFail($id);
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
        $item = UpacaraAdat::findOrFail($id);
        if ($item->delete()) {
            return redirect()->route('alatmusik.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            return redirect()->route('alatmusik.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}