<?php

namespace Database\Seeders;

use App\Models\Status_Peminjaman;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status_Peminjaman::create([
            'status_peminjaman' => 'di konfirmasi'
        ]);

        Status_Peminjaman::create([
            'status_peminjaman' => 'pending'
        ]);
        
        Status_Peminjaman::create([
            'status_peminjaman' => 'di kembalikan'
        ]);
    }
}
