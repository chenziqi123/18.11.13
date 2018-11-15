<?php

namespace App\Http\Controllers;

use App\Http\Requests\PasswordRequest;
use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;
use Symfony\Component\HttpFoundation\Request;


class UserController extends Controller
            {

//              加载登录页面
          public function register(){

//                      加载登录页面
         return view ('user.register');

           }

//                  登录提交
           public function registerForm(Request $request)
          {
//                   dd ($request->all ());
//               验证
               $this->validate ($request,[
//                   当邮箱是邮箱格式
                   'email'=>'email',
//                   当密码不为空  不少于三位数
                   'password'=>'required|min:3'
               ],[
                   'email.email'=>'请输入邮箱',
                   'password.required'=>'请输入密码',
                   'password.min'=>'密码不能少于三位数'
               ]);
//               执行登录
//               手册：用户认证.手动用户认证
               $credentials = $request->only('email', 'password');

               if (Auth::attempt($credentials)) {
                   // 登录成功 跳转到页面
                   return redirect()->route ('home')->with('success','登录成功');
               }
               return redirect()->back()->with('danger','用户名密码不正确');

          }
//               5. 加载注册页面
                  public function login(){
//                      渲染login注册页面
                      return view ('user.login');
                  }

//                  用户提交注册
                   public function store(UserRequest $request){

//                    dd ($request->all());
                       //把用户点击表单的所有数据放到一个变量中去
                       $data = $request->all();
//                       把密码加密
                       $data['password'] = bcrypt($data['password']);
//                       把数据放到数据库中
                       User::create($data);
                       //提示并且跳转
//                       register  登录页面的别名
                       return redirect()->route('register')->with('success','注册成功');

                   }

//                   注销登录
                    public function logout(){
                        Auth::logout();
//                        redirect() 跳转
//                        route  路线
                        return redirect()->route ('home');

                    }

//                    修改密码
                    public function passwordReset(){
                        return view ('user.passwordReset');
                    }

//                    接收修改完密码的数据
                    public function passwordResetForm(PasswordRequest $request){
//                        dd ($request->all());
//                        去拿到邮箱email
//                        输入进来的数据有邮箱的话就拿出来
                        $user=User::where('email',$request->email)->first();
//                        dd ($user);
                        if ($user){
//                            更新密码
                            $user->password=bcrypt($request->password);
                            $user->save();
                            return redirect()->route('register')->with('success','密码重置成功');
                        }
                        return redirect()->back()->with('danger','该邮箱未注册');
                    }
            }
