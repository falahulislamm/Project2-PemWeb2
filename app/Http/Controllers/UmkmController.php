<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Umkm;
use App\Models\Kabkota;
use App\Models\Kategori_umkm;
use App\Models\Pembina;

class UmkmController extends Controller
{
    //
    public function show(){
        $list_umkm = Umkm::all();
        return view('umkm.show', ['list_umkm'=>$list_umkm]);
    }

    public function create()
    {
        $list_kabkota = Kabkota::all();
        $list_kategori_umkm = Kategori_umkm::all();
        $list_pembina = Pembina::all();
        $umkm = new Umkm();
        return view('umkm.form',['umkm'=>$umkm,'list_kabkota'=>$list_kabkota, 'list_kategori_umkm'=>$list_kategori_umkm, 'list_pembina'=>$list_pembina]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validasi data inputan
        $request->validate([
            'nama' => 'required',
            'modal' => 'required',
            'pemilik' => 'required',
            'alamat' => 'required',
            'website' => 'required',
            'email' => 'required',
            'kabkota_id' => 'required',
            'rating' => 'required',
            'kategori_umkm_id' => 'required',
            'pembina_id' => 'required',
        ]);

        if($request->id){  
            Umkm::find($request->id)->update($request->all());
            // Redirect to the index page with a success message
            return redirect(route('umkm.show'))->with('pesan', 'Data berhasil diupdate');
        }
        else{
            // Create a new umkm instance with the validated data
            Umkm::create($request->all());
            // Redirect to the index page with a success message
            return redirect(route('umkm.show'))->with('pesan', 'Data berhasil disimpan');
        }  
    }

    public function edit($id)
    {
        $umkm = Umkm::find($id);
        $list_kabkota = Kabkota::all();
        $list_kategori_umkm = Kategori_umkm::all();
        $list_pembina = Pembina::all();
        return view('umkm.form',['umkm'=>$umkm,'list_kabkota'=>$list_kabkota, 'list_kategori_umkm'=>$list_kategori_umkm, 'list_pembina'=>$list_pembina]);
    }
    public function view($id)
    {
        $umkm = Umkm::find($id);
        return view('umkm.view',['umkm'=>$umkm]);
    }
    public function destroy($id): RedirectResponse
    {
        Umkm::find($id)->delete();
        return redirect(route('umkm.show'))->with('pesan', 'Data berhasil dihapus');
    }
}
