<?php

use App\Data\Models\Permit;
use Illuminate\Database\Seeder;

class PermitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('tbl_rol')->truncate();
      	DB::table('tbl_permiso')->insert([
            [
                'per_strAbrebiatura'  => 'ADM_PER',
                'per_strNombre'       => 'ADMINISTRAR PERMISOS',
                'per_strDescripcion'  => 'EDITAR PERMISOS DE LOS DIFERENTES ROLES',
            ],
            [
                'per_strAbrebiatura'  => 'ADM_HC',
                'per_strNombre'       => 'ADMINISTRAR HISTORIALES CLINICOS',
                'per_strDescripcion'  => 'PERMISOS ACERCA DE HISTORIALES CLINICOS',
            ],
            [
                'per_strAbrebiatura'  => 'ADM_ADM',
                'per_strNombre'       => 'ADMINISTRAR PERSONAL ADMINISTRATIVO',
                'per_strDescripcion'  => 'PERMISOS ACERCA DE ADMINISTRACION DEL PERSONAL ADMINISTRATIVO',
            ],
            [
                'per_strAbrebiatura'  => 'ADM_MED',
                'per_strNombre'       => 'ADMINISTRAR PERSONAL MEDICO',
                'per_strDescripcion'  => 'PERMISOS ACERCA DE ADMINISTRACION DEL PERSONAL MEDICO',
            ],
            [
                'per_strAbrebiatura'  => 'ADM_PAC',
                'per_strNombre'       => 'ADMINISTRAR PACIENTES',
                'per_strDescripcion'  => 'PERMISOS ACERCA DE ADMINISTRACION DE LOS PACIENTES',
            ],
        ]);
    }
}