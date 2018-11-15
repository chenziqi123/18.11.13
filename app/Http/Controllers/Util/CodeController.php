<?php

namespace App\Http\Controllers\Util;

use App\Notifications\RegisterNotify;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CodeController extends Controller
//          11.进来以后先执行下面的随机数代码
{
//     发送验证码
     public function send(Request $request){
//          dd ($request->all ());
//          12.随机四位验证码  由于上面的随机数返回给类 所以可以$this直接调用
         $code=$this->random ();
//           13.发送验证码  获取到用户在表单输入的所有内容
//           主要还是拿到用户输入的邮箱 因为要往用户邮箱里面输入随机数
         $user=User::firstOrNew(['email'=>$request->username]);
//         dd ($user);
         //14.需要创建通知类输入命令：php artisan make:notification  RegisterNotify、
//              会自动生成一个RegisterNotify的文件把随机到的四位数给这个类
//              notify  固定写法
//         15.在RegisterNotify类中
         $user->notify(new RegisterNotify($code));
         //将验证码的四位数存入到session中
         session()->put('code',$code);
         //16.返回数据 当数据库里面有了1的时候 就出现弹框显示message
//               返回出去
//         17在login.blade的静态模版中
//           不知道在哪里找到这个
         return ['code' => 1, 'message' => '验证码发送成功'];
     }

//     随机获取四位数字验证码
     public function random($len=4){
         $str='';
         for ($v=0;$v<$len;$v++){
             $str.=mt_rand (0,9);
         }
         return $str;
     }
}
