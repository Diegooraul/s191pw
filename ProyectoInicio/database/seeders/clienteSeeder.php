<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class clienteSeeder extends Seeder
{
    
    public function run(): void
    {
        DB::table('cliente')->insert([
        [
            'nombre'=>'Raul',
            'apellido'=>'Castillo',
            'correo'=>'d.rulocd@gmail.com',
            'telefono'=>'4421556635'
        ],
        [
            'nombre'=>'Diego',
            'apellido'=>'Duran',
            'correo'=>'d.locod@gmail.com',
            'telefono'=>'4421556636'
        ],
        [
            'nombre'=>'Khabib',
            'apellido'=>'Nurmagomedov',
            'correo'=>'ruso@gmail.com',
            'telefono'=>'4421556622'
        ]
]);
        //
    }
}
