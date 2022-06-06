<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
    use HasFactory;

    protected $table = 'pinjam';
    protected $fillable = ['user_id', 'barang_id', 'status_peminjaman_id', 'kode_peminjam'];

    public function Status_peminjaman()
    {
        return $this->belongsTo(Status_Peminjaman::class);
    }
    
    public function Barang()
    {
        return $this->belongsTo(Barang::class);
    }
}
