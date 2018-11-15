<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize ()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules ()
    {
        return [
//            required 不为空
            'name' => 'required',
            'email' => 'email|unique:users',
            'password' => 'required|min:3|confirmed',
            'code' => [
                'required',
                //使用表单验证--自定义验证规则--使用闭包
                //$value 表单提交过来的code对应的值
                function ($attribute, $value, $fail) {
//            当用户写的验证码和储存在session的验证码不一样时
//                    提示验证码不正确
                    if ($value != session ('code')) {
                        $fail('验证码不正确');
                    }
                },
            ]
        ];
    }


//自定义错误消息提示内容
    public function messages ()
    {
//        这里的错误信息没有反出去  所以给他封装成了函数 message.blade文件
        return [
            'name.required' => '请输入昵称',
//            当name为空是显示
            'email.email' => '请输入正确邮箱',
            'email.unique' => '该邮箱已注册',
//            当输入的邮箱不是唯一时
            'password.required' => '请输入密码',
//            当密码为空时
            'password.min' => '密码不得少于3位',
//            当密码小于三位时
            'password.confirmed' => '两次输入密码不一致',
            'code.required' => '请输入验证码'
//            当验证码为空时
        ];

    }
}