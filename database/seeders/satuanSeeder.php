<?php

namespace Database\Seeders;

use App\Models\satuan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class satuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        satuan::create([
            'nama' => 'kg'
        ]);
        satuan::create([
            'nama' => 'Buah'
        ]);
        satuan::create([
            'nama' => 'Butir'
        ]);
        satuan::create([
            'nama' => 'kaleng'
        ]);
        satuan::create([
            'nama' => 'Botol'
        ]);
    }
}
