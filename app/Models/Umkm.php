<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    use HasFactory;

    protected $table = 'umkm';
    protected $fillable = ['id', 'nama', 'modal', 'pemilik', 'alamat', 'website', 'email','kabkota_id', 'rating', 'kategori_umkm_id', 'pembina_id'];
    
    //disable created_at and updated_at field
    public $timestamps = false;

    public function kabkota(){
        return $this->belongsTo(Kabkota::class); //belongsTo -> one to many
    }
    public function kategori_umkm(){
        return $this->belongsTo(Kategori_umkm::class); //belongsTo -> one to many
    }
    public function pembina(){
        return $this->belongsTo(Pembina::class); //belongsTo -> one to many
    }
}