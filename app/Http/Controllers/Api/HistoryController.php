<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\HistoryRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Models\History;
use App\Http\Resources\HistoryResource;
use App\Traits\UploadFileTrait;

class HistoryController extends Controller
{
    use UploadFileTrait;
    public function index()
    {
        $item = History::latest()->paginate(10);
        if (!$item->isEmpty()) {
            return new HistoryResource(200, 'Sukses', $item);
        } else {
            return new HistoryResource(201, 'Data Tidak Ada');
        }
    }

    public function store(HistoryRequest $request)
    {
        $data = History::create([
            'gambar' => $this->upload('history', $request->file('gambar')),
            'judul' => $request->judul,
            'konten' => $request->konten,
        ]);
        return new HistoryResource(200, 'Data Berhasil Ditambahkan!', $data);
    }

    public function show($id)
    {
        if ($item = History::find($id)) {
            return new HistoryResource(200, 'Data Ditemukan!', $item);
        } else {
            return new HistoryResource(201, 'Data Tidak Ditemukan');
        }
    }

    public function update(HistoryRequest $request, $id)
    {
        if ($item = History::find($id)) {
            if ($request->hasFile('gambar')) {
                $item->update([
                    'gambar' => $this->upload('history', $request->file('gambar'), $item->gambar),
                    'judul' => $request->judul,
                    'konten' => $request->konten,
                ]);
            } else {
                $item->update([
                    'judul' => $request->judul,
                    'konten' => $request->konten,
                ]);
            }
            return new HistoryResource(200, 'Data Berhasil Diubah!', $item->id);
        } else {
            return new HistoryResource(201, 'Data Tidak Ada');
        }
    }

    public function destroy($id)
    {
        if ($item = History::find($id)) {
            $this->deleteFile('history', $item->gambar);
            $item->delete();
            return new HistoryResource(200, 'Data Post Berhasil Dihapus!');
        } else {
            return new HistoryResource(201, 'Data Tidak Ada');
        }
    }
}
