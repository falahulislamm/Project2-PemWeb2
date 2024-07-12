<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Kabkota;
use App\Models\Provinsi;

class KabkotaController extends Controller
{
    //
    public function show(){
        $list_kabkota = Kabkota::all();
        return view('kabkota.show', ['list_kabkota'=>$list_kabkota]);
    }

    public function create()
    {
        
        $list_provinsi = Provinsi::all();
        $kabkota = new Kabkota();
        return view('kabkota.form',['list_provinsi'=>$list_provinsi,'kabkota'=>$kabkota]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validasi data inputan
        $request->validate([
            'nama' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'provinsi_id' => 'required',
        ]);

        if($request->id){  
            Kabkota::find($request->id)->update($request->all());
            // Redirect to the index page with a success message
            return redirect(route('kabkota.show'))->with('pesan', 'Data berhasil diupdate');
        }
        else{
            // Create a new produk instance with the validated data
            Kabkota::create($request->all());
            // Redirect to the index page with a success message
            return redirect(route('kabkota.show'))->with('pesan', 'Data berhasil disimpan');
        }  
    }

    public function edit($id)
    {
        $kabkota = Kabkota::find($id);
        $list_provinsi = Provinsi::all();
        return view('kabkota.form',['kabkota'=>$kabkota,'list_provinsi'=>$list_provinsi]);
    }
    public function view($id)
    {
        $kabkota = Kabkota::find($id);
        return view('kabkota.view',['kabkota'=>$kabkota]);
    }
    public function destroy($id): RedirectResponse
    {
        Kabkota::find($id)->delete();
        return redirect(route('kabkota.show'))->with('pesan', 'Data berhasil dihapus');
    }
}
