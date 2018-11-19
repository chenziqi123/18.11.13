<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
//    种子
    public function run()
    {
        //DB::table('users')->insert([
        //	'name' => str_random(10),
        //	'email' => str_random(10).'@gmail.com',
        //	'password' => bcrypt('secret'),
        //]);
        //调用模型工厂一次性填充30个数据
        factory(\App\User::class,30)->create();
        //修改第一个数据为正式数据
        $user = \App\User::find(1);
        $user->name = '陈子祺';
        $user->email = '1933304128@qq.com';
        $user->password = bcrypt('000');
        $user->is_admin = true;
        $user->save();

    }
}
