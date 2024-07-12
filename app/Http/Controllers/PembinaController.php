<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Pembina;

class PembinaController extends Controller
{
    //
    public function show(){
        $list_pembina = Pembina::all();
        return view('pembina.show',['list_pembina'=>$list_pembina]);
    }

    public function create()
    {
        $pembina = new Pembina();
        return view('pembina.form',['pembina'=>$pembina]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validasi data inputan
        $request->validate([
            'nama' => 'required',
            'gender' => 'required',
            'tgl_lahir' => 'required',
            'tmp_lahir' => 'required',
            'keahlian' => 'required',
        ]);

        if($request->id){  
            Pembina::find($request->id)->update($request->all());
            // Redirect to the index page with a success message
            return redirect(route('pembina.show'))->with('pesan', 'Data berhasil diupdate');
        }
        else{
            // Create a new produk instance with the validated data
            Pembina::create($request->all());
            // Redirect to the index page with a success message
            return redirect(route('pembina.show'))->with('pesan', 'Data berhasil disimpan');
        }  
    }

    public function edit($id)
    {
        $pembina = Pembina::find($id);
        return view('pembina.form',['pembina'=>$pembina]);
    }
    public function view($id)
    {
        $pembina = Pembina::find($id);
        return view('pembina.view',['pembina'=>$pembina]);
    }
    public function destroy($id): RedirectResponse
    {
        Pembina::find($id)->delete();
        return redirect(route('pembina.show'))->with('pesan', 'Data berhasil dihapus');
    }
}