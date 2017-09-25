<?php

use Illuminate\Database\Seeder;

class OauthTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('oauth_clients')->insert([
        	'name' => 'VBudgeter Password Client Token',
        	'secret' => 'vbudgeter',
        	'redirect' => 'http://localhost:8001',
        	'personal_access_client' => 0,
        	'password_client' => 1,
        	'revoked' => 0
        ]);
    }
}
