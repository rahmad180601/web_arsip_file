<?php

namespace App\Http\Controllers;

use App\Imports\DataImport;
use App\Models\DaftarArsip;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class DaftarArsipController extends Controller
{
    public function index()
    {
        return view('admin.page.arsip.index');
    }

    public function data()
    {
        $query = DaftarArsip::latest();
        // $query->orderBy('tanggal_penjualan', 'desc');
        return DataTables::of($query)->make(true);
    }

    public function store(Request $request)
    {
        // return $request;
        $data = new DaftarArsip;
        $data->rak = $request->rak;
        $data->boks = $request->boks;
        $data->indeks = $request->indeks;
        $data->masalah = $request->masalah;
        $data->kecamatan = $request->kecamatan;
        $data->tahun = $request->tahun;
        $data->keterangan = $request->keterangan;
        if ($request->hasFile('file_arsip')) {
            $imageName = uniqid('arsip_') . '.' . $request->file_arsip->getClientOriginalExtension();
            $path = $request->file_arsip->storeAs('file/arsip', $imageName, 'public');
            if (!$path) {
                return response()->json(['error' => 'Failed to upload image'], 500);
            }
            $data->file_arsip = $path;
        }

        $data->save();
        return redirect()->back()->with('success', 'Data Arsip berhasil ditambah!');
    }

    public function edit()
    {

    }

    public function update(Request $request)
    {
        $id = $request->id;
        $data = DaftarArsip::findOrFail($id);
        if ($request->hasFile('file_arsip')) {
            $imageName = uniqid('arsip_') . '.' . $request->file('file_arsip')->getClientOriginalExtension();
            $path = $request->file('file_arsip')->storeAs('file/arsip', $imageName, 'public');
            if (!$path) {
                return response()->json(['error' => 'Failed to upload image'], 500);
            }
            if ($data->file_arsip) {
                Storage::disk('public')->delete($data->file_arsip);
            }
            $data->file_arsip = $path;
        }
        $data->update([
            'rak' => $request->rak,
            'boks' => $request->boks,
            'indeks' => $request->indeks,
            'masalah' => $request->masalah,
            'kecamatan' => $request->kecamatan,
            'tahun' => $request->tahun,
            'keterangan' => $request->keterangan,
        ]);
        return redirect()->back()->with('success', 'Data Arsip berhasil diupdate!');
    }

    public function delete($id)
    {
        $item = DaftarArsip::findOrFail($id);
        Storage::disk('public')->delete($item->file_arsip);
        $item->delete();
        return redirect()->back()->with('success', 'Data Arsip berhasil didelete!');
    }

    public function detail($id)
    {
        $item = DaftarArsip::findOrFail($id);
        return view('admin.page.arsip.detail',[
            'data' => $item
        ]);
    }

    public function import(Request $request)
    {
        $file = $request->file('file');
        $namafile = $file->getClientOriginalName();
        $file->move(public_path('DataArsip'), $namafile);
    
        Excel::import(new DataImport, public_path('DataArsip/'.$namafile));
        return redirect()->back()->with('success', 'Data Arsip berhasil diimport!');
    }
}
