<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
//    种子
    public function run()
    {
         $this->call(UsersTableSeeder::class);
    }
}


//1.在database目录中添加$table->unsignedTinyInteger('is_admin')->default(0)->comment('是否管理员1是，0否');
//2.执行更新数据库的命令artisan migrate:refresh
//3.用命令生成UsersTableSeeder这个文件在database目录中的seeds中添加
// factory(\App\User::class,30)->create();
//        修改第一个数据为正式数据
//        $user = \App\User::find(1);
//        $user->name = '陈子祺';
//        $user->email = '1933304128@qq.com';
//        $user->password = bcrypt('000');
//        $user->is_admin = true;
//        $user->save();
//4.在本类中调用执行