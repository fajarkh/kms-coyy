<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use App\DataTables\SenjataDataTable;
use App\Http\Requests\SenjataRequest;
use App\Models\Senjata;

class SenjataController extends Controller
{

    public function __construct()
    {
        $this->view = 'senjata';
        View::share(
            [
                'title' => 'Senjata',
            ]
        );
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
            'deskripsi'   => $request->deskripsi,
            'budaya_id'   => $request->budaya_id
        ]);

        if ($item) {
            return redirect()->route('alatmusik.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            return redirect()->route('alatmusik.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function update(SenjataRequest $request, $id)
    {
        $item = Senjata::findOrFail($id);
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
        $item = Senjata::findOrFail($id);
        if ($item->delete()) {
            return redirect()->route('alatmusik.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            return redirect()->route('alatmusik.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
