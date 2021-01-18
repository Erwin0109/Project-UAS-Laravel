<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukResource extends Controller
{
    public function index()
    {
        return Produk::all();
    }

    public function store(Request $request)
    {
        if(request('nama') && request('deskripsi') && request('harga') && request('stock') && request('berat'))
        {
            $produk = new Produk;
            $produk->nama = request('nama');
            $produk->deskripsi = request('deskripsi');
            $produk->harga = request('harga');
            $produk->stock = request('stock');
            $produk->berat = request('berat');
            $produk->save();

            return collect([
                'respond' => 200,
                'data' => $produk
            ]);
        } else {
            return collect ([
                'respond' => 500,
                'message' => "Field Ada Yang Kosong"
            ]);
        }
    }

    public function show($id)
    {
        $produk = Produk ::find($id);
        if($produk)
        {
            return collect([
                'status' => 200,
                'data' => $produk
            ]);
        }
        return collect([
            'respond' => 500,
            'message' => "Data Tidak Ditemukan"
        ]);
    }
    
    public function update(Request $request, $id)
    {
        $produk = Produk ::find($id);
        if($produk) {

            $produk->nama = request('nama') ?? $produk->nama;
            $produk->deskripsi = request('deskripsi') ?? $produk->deskripsi;
            $produk->harga = request('harga') ?? $produk->harga;
            $produk->stock = request('stock') ?? $produk->stock;
            $produk->berat = request('berat') ?? $produk->berat;
            $produk->save();

            return collect([
                'status' => 200,
                'data' => $produk
            ]);
        }
        return collect([
            'respond' => 500,
            'message' => "Data Tidak Ditemukan"
        ]);
    }

    public function destroy($id)
    {
        $produk = Produk::find($id);
        if($produk){
            $produk->delete();
            return collect([
                'status' => 200,
                'data' => "Produk Berhasil Dihapus"
            ]);
        }
        return collect([
            'respond' => 500,
            'message' => "Produk Tidak Ditemukan"
        ]);
    }
}
