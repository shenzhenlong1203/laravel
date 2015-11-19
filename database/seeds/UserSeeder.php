<?php
/**
 * User: 沈振龙<shenzhenlong1203@gmail.com>
 * Time: 2015.11.19 上午11:28
 */
use Illuminate\Database\Seeder;
use App\Services\Registrar;

class UserSeeder extends Seeder{

    public function run(){
        $data = [
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' =>'123456',
            //'desc'=>'管理员'
        ];
        $register = new Registrar();
        $register->create($data);
    }
}