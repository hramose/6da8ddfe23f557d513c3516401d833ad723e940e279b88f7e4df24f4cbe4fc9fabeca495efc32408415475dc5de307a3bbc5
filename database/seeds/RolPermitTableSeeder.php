<?php

use App\Data\Models\Permit;
use Illuminate\Database\Seeder;

class RolPermitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('tbl_rol')->truncate();
      	DB::table('tbl_rolpermiso')->insert([
            [
                'rop_intCrud'   => 63,
                'rol_intId'     => 1,
                'per_intId'     => 1,
            ],
            [
                'rop_intCrud'   => 63,
                'rol_intId'     => 1,
                'per_intId'     => 2,
            ],
            [
                'rop_intCrud'   => 63,
                'rol_intId'     => 1,
                'per_intId'     => 3,
            ],
            [
                'rop_intCrud'   => 63,
                'rol_intId'     => 1,
                'per_intId'     => 4,
            ],
            [
                'rop_intCrud'   => 15,
                'rol_intId'     => 1,
                'per_intId'     => 5,
            ],
        ]);
    }
}