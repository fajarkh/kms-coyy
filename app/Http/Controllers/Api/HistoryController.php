<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\HistoryRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Models\History;
use App\Http\Resources\HistoryResource;

class HistoryController extends Controller
{
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
        $image = $request->file('gambar');
        $image->storeAs('public/history', $image->hashName());
        $data = History::create([
            'gambar' => $image->hashName(),
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

    public function update($id)
    {
        $request = request();
        if ($item = History::find($id)) {
            $validator = Validator::make($request->all(), [
                'judul' => 'required',
                'konten' => 'required',
            ]);
            if ($validator->fails()) {
                return response()->json($validator->errors(), 422);
            }
            if ($request->hasFile('gambar')) {
                $image = $request->file('gambar');
                $image->storeAs('public/history', $image->hashName());
                Storage::delete('public/history/' . $item->gambar);

                $item->update([
                    'gambar' => $image->hashName(),
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
            Storage::delete('public/history/' . $item->gambar);
            $item->delete();
            return new HistoryResource(200, 'Data Post Berhasil Dihapus!');
        } else {
            return new HistoryResource(201, 'Data Tidak Ada');
        }
    }
}
