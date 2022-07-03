<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use App\DataTables\HistoryDataTable;
use App\Http\Requests\HistoryRequest;
use App\Models\History;
use App\Traits\UploadFileTrait;

class HistoryController extends Controller
{
    use UploadFileTrait;

    public function __construct()
    {
        $this->view = 'history';
        $this->route = 'history';
        View::share(
            [
                'title' => 'History',
                'route' => $this->route
            ]
        );
    }

    public function index(HistoryDataTable $dataTable)
    {
        return $dataTable->render($this->view . '.index');
    }

    public function create()
    {
        return view($this->view . '.create');
    }

    public function edit($id)
    {
        $item = History::find($id);
        return view($this->view . '.edit', compact('item'));
    }

    public function store(HistoryRequest $request)
    {
        $item = History::create([
            'gambar'     => $this->upload('history', $request->file('gambar')),
            'judul'     => $request->judul,
            'konten'   => $request->konten
        ]);

        if ($item) {
            return redirect()->route($this->view . '.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            return redirect()->route($this->view . '.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function update(HistoryRequest $request, $id)
    {
        $item = History::findOrFail($id);
        $dataUpdate = [
            'judul'     => $request->judul,
            'konten'   => $request->konten
        ];
        if ($request->file('gambar') != "") {
            $dataUpdate['gambar'] = $this->upload('history', $request->file('gambar'), $item->gambar);
        }

        if ($item->update($dataUpdate)) {
            return redirect()->route($this->view . '.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            return redirect()->route($this->view . '.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id)
    {
        $item = History::findOrFail($id);
        $this->deleteFile('history', $item->gambar);

        if ($item->delete()) {
            return redirect()->route($this->view . '.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            return redirect()->route($this->view . '.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
