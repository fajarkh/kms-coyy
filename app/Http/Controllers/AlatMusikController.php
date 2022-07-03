<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use App\DataTables\AlatMusikDataTable;
use App\Http\Requests\AlatMusikRequest;
use App\Models\AlatMusik;

class AlatMusikController extends Controller
{

    public function __construct()
    {
        $this->view = 'alat_musik';
        View::share(
            [
                'title' => 'Alat Musik',
            ]
        );
    }

    public function index(AlatMusikDataTable $dataTable)
    {
        return $dataTable->render($this->view . '.index');
    }

    public function create()
    {
        return view($this->view . '.create');
    }

    public function edit($id)
    {
        $item = AlatMusik::find($id);
        return view($this->view . '.edit', compact('item'));
    }

    public function store(AlatMusikRequest $request)
    {
        $item = AlatMusik::create([
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

    public function update(AlatMusikRequest $request, $id)
    {
        $item = AlatMusik::findOrFail($id);
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
        $item = AlatMusik::findOrFail($id);
        if ($item->delete()) {
            return redirect()->route('alatmusik.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            return redirect()->route('alatmusik.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
