<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Barang;
use App\Models\Status;
use App\Models\Gender;
use App\Models\Gudang;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gudang::create([
            'gudang' => 'gudang 1',
        ]);
        
        Gudang::create([
            'gudang' => 'gudang 2',
        ]);
        
        Gudang::create([
            'gudang' => 'gudang 3',
        ]);
        

        Status::create([
            'status' => 'Baru',
        ]);
    
        Status::create([
            'status' => 'Layak',
        ]);
    
        Status::create([
            'status' => 'Rusak',
        ]);

        Barang::create([
            'nama_barang' => 'meja',
            'gudang_id' => 1,
            'status_id' => 1,
            'kode_barang' => 'f1',
            'jumlah' => 30
        ]);

        Barang::create([
            'nama_barang' => 'meja',
            'gudang_id' => 2,
            'status_id' => 2,
            'kode_barang' => 'f2',
            'jumlah' => 20
        ]);
        
        Barang::create([
            'nama_barang' => 'meja',
            'gudang_id' => 3,
            'status_id' => 3,
            'kode_barang' => 'f3',
            'jumlah' => 10
        ]);
    }
}