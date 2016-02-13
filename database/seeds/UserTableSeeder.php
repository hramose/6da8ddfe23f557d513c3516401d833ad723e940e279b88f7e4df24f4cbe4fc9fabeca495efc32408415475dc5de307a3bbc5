<?php

use App\Data\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_users')->delete();

    	User::create(array(
	        'usr_firstName'	=> 'Daigo',
	        'usr_lastName'	=> 'Fernandez',
	        'usr_username'	=> 'dfernandez',
	        'usr_email'    	=> 'dfernandez@digitalgames.tk',
	        'usr_password' 	=> bcrypt('@Daigo@10#'), //Hash::make
    	));

    	User::create(array(
	        'usr_firstName'	=> 'Junior',
	        'usr_lastName'	=> 'Yauricasa',
	        'usr_username'	=> 'jyauricasa',
	        'usr_email'    	=> 'jyauricasa@digitalgames.tk',
	        'usr_password' 	=> bcrypt('@Junior@10#'), //Hash::make
    	));

    	User::create(array(
	        'usr_firstName'	=> 'Galia',
	        'usr_lastName'	=> 'Camayo',
	        'usr_username'	=> 'gcamayo',
	        'usr_email'    	=> 'gcamayo@digitalgames.tk',
	        'usr_password' 	=> bcrypt('@Galia@10#'), //Hash::make
    	));

    	/*
		DB::table('articles')->truncate();
  
          DB::table('articles')->insert([
              [
                  'title'      => 'Laozi',
                  'body'       => 'When there is no desire, all things are at peace.',
                  'created_at' => '2015-01-31 23:59:59',
                  'updated_at' => '2015-01-31 23:59:59',
              ],
              [
                  'title'      => 'Leonardo da Vinci',
                  'body'       => 'Simplicity is the ultimate sophistication.',
                  'created_at' => '2015-02-01 00:00:00',
                  'updated_at' => '2015-02-01 00:00:00',
              ],
              [
                  'title'      => 'Cedric Bledsoe',
                  'body'       => 'Simplicity is the essence of happiness.',
                  'created_at' => '2015-02-01 00:00:01',
                  'updated_at' => '2015-02-01 00:00:01',
              ],
          ]);
    	*/
    }
}
