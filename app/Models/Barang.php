<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Barang extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'barang';
    protected $fillable = ['nama_barang', 'kode_barang', 'gudang_id', 'status_id', 'jumlah'];
    protected $guarded = ['id'];

    /**
     * Get the gudang that owns th-e Barang
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function gudang()
    {
        return $this->belongsTo(Gudang::class);
    }

    /**
     * Get the status that owns the Barang
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    /**
     * Get all of the comments for the Barang
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pinjam()
    {
        return $this->hasMany(Pinjam::class);
    }
}
