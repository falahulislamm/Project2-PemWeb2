<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Kategori_umkm;

class Kategori_umkmController extends Controller
{
    //
    public function show(){
        $list_kategori_umkm = Kategori_umkm::all();
        return view('kategori_umkm.show',['list_kategori_umkm'=>$list_kategori_umkm]);
    }

    public function create()
    {
        $kategori_umkm = new Kategori_umkm();
        return view('kategori_umkm.form',['kategori_umkm'=>$kategori_umkm]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validasi data inputan
        $request->validate([
            'nama' => 'required',
        ]);

        if($request->id){  
            Kategori_umkm::find($request->id)->update($request->all());
            // Redirect to the index page with a success message
            return redirect(route('kategori_umkm.show'))->with('pesan', 'Data berhasil diupdate');
        }
        else{
            // Create a new produk instance with the validated data
            Kategori_umkm::create($request->all());
            // Redirect to the index page with a success message
            return redirect(route('kategori_umkm.show'))->with('pesan', 'Data berhasil disimpan');
        }  
    }

    public function edit($id)
    {
        $kategori_umkm = Kategori_umkm::find($id);
        return view('kategori_umkm.form',['kategori_umkm'=>$kategori_umkm]);
    }
    public function view($id)
    {
        $kategori_umkm = Kategori_umkm::find($id);
        return view('kategori_umkm.view',['kategori_umkm'=>$kategori_umkm]);
    }
    public function destroy($id): RedirectResponse
    {
        Kategori_umkm::find($id)->delete();
        return redirect(route('kategori_umkm.show'))->with('pesan', 'Data berhasil dihapus');
    }
}
