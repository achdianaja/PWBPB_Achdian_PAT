<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status_Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'status_peminjaman';


    /**
     * Get all of the comments for the Status_Peminjaman
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pinjam()
    {
        return $this->hasMany(Pinjam::class);
    }
}
