<?php

use App\Data\Models\Rol;
use Illuminate\Database\Seeder;

class RolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('tbl_rol')->truncate();
      	DB::table('tbl_rol')->insert([
            [
                'rol_strAbrebiatura'  => 'ROOT',
                'rol_strNombre'       => 'ROOT',
                'rol_strDescripcion'  => 'ROL PRINCIPAL, A CARGO DE CONTROLAR TODO EN EL PORTAL DE TELEMEDICINA',
            ],
            [
                'rol_strAbrebiatura'  => 'GUEST',
                'rol_strNombre'       => 'INVITADO',
                'rol_strDescripcion'  => 'INVITADO, SIN AUTENTICACION AL PORTAL DE TELEMEDICINA',
            ],
            [
                'rol_strAbrebiatura'  => 'ADM',
                'rol_strNombre'       => 'ADMINISTRATIVO',
                'rol_strDescripcion'  => 'PERSONAL A CARGO DE REGISTRO DE NUEVOS USUARIOS Y ADMINISTRACION DEL PORTAL WEB',
            ],
            [
                'rol_strAbrebiatura'  => 'MED',
                'rol_strNombre'       => 'MEDICO',
                'rol_strDescripcion'  => 'PERSONAL MEDICO DEL PORTAL DE TELEMEDICINA',
            ],
            [
                'rol_strAbrebiatura'  => 'PAC',
                'rol_strNombre'       => 'PACIENTE',
                'rol_strDescripcion'  => 'CLIENTE DE LA RED DE TELEMEDICINA',
            ],
        ]);
    }
}
