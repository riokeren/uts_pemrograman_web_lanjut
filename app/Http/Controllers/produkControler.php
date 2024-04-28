<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class produkControler extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Halaman Produk
        $produk = produk::orderBy('kode_produk', 'asc')->get();
        return view('produk.produk')->with('produk', $produk);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Halaman Tambah
        return view('produk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Proses Simpan Tambah
        Session::flash('kode_produk', $request->kode_produk);
        Session::flash('nama_produk', $request->nama_produk);
        Session::flash('harga_produk', $request->harga_produk);

        $request->validate(
            [
                'kode_produk' => 'required|numeric|unique:produk,kode_produk',
                'nama_produk' => 'required',
                'jenis_produk' => 'required',
                'harga_produk' => 'required'
            ],
            [
                'kode_produk.required' => 'Kode Produk tidak boleh kosong!',
                'kode_produk.numeric' => 'Kode Produk harus diisi dalam bentuk angka!',
                'kode_produk.unique' => 'Kode Produk sudah ada sebelumnya!',
                'nama_produk.required' => 'Nama Produk tidak boleh kosong!',
                'jenis_produk.required' => 'Jenis Produk tidak boleh kosong!',
                'harga_produk.required' => 'harga Produk tidak boleh kosong!'
            ]
        );

        $data = [
            'kode_produk' => $request->kode_produk,
            'nama_produk' => $request->nama_produk,
            'jenis_produk' => $request->jenis_produk,
            'harga_produk' => $request->harga_produk
        ];
        produk::create($data);
        return redirect('/produk')->with('success', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Halaman Detail
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Halaman Edit
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Proses Simpan Edit
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Proses Hapus
    }
}
