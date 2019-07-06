<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class Tabla_Rol_Seader extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Rol = [
            'Administrador',
            'Editor',
            'Supervisor'
        ];
        foreach($Rol as $key => $value){
            DB::table('Rol')->insert([

                'Nombre' => $value,
                'Created_at' => Carbon::now()->format('Y-m-d H:i:s')

            ]);
            
  
        } 
    }
}
