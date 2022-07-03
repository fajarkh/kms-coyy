<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use App\DataTables\PakaianDataTable;
use App\Http\Requests\PakaianRequest;
use App\Models\Pakaian;

class PakaianController extends Controller
{

    public function __construct()
    {
        $this->view = 'pakaian';
        View::share(
            [
                'title' => 'Pakaian',
            ]
        );
    }

    public function index(PakaianDataTable $dataTable)
    {
        return $dataTable->render($this->view . '.index');
    }

    public function create()
    {
        return view($this->view . '.create');
    }

    public function edit($id)
    {
        $item = Pakaian::find($id);
        return view($this->view . '.edit', compact('item'));
    }

    public function store(PakaianRequest $request)
    {
        $item = Pakaian::create([
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

    public function update(PakaianRequest $request, $id)
    {
        $item = Pakaian::findOrFail($id);
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
        $item = Pakaian::findOrFail($id);
        if ($item->delete()) {
            return redirect()->route('alatmusik.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            return redirect()->route('alatmusik.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
