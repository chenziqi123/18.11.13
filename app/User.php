<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
//    往表单中写入的数据
    protected $fillable = [
        'name', 'email', 'password','email_verified_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];
//       getAttribute 获取的所有数据
//      getIconAttribute  获取所有数据中叫Icon的数据
//        在任何地方都可以调用
//          在这里是在静态模版中调用了
    public function getIconAttribute( $key )
    {
//        去找图片的路径
//        三元判断 $key里面有值的时候就执行$key 没有值的时候就执行默认图片
        return $key?:asset('org/image/user.jpg');
    }
}
