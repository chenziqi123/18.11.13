<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{asset ('org/assets')}}/fonts/feather/feather.min.css">
    <link rel="stylesheet" href="{{asset ('org/assets')}}/libs/highlight/styles/vs2015.min.css">
    <link rel="stylesheet" href="{{asset ('org/assets')}}/libs/quill/dist/quill.core.css">
    <link rel="stylesheet" href="{{asset ('org/assets')}}/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="{{asset ('org/assets')}}/libs/flatpickr/dist/flatpickr.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset ('org/assets')}}/css/theme.min.css">

    {{--如果在HDPHP、Laravel等框架中使用组件，需要在标签中添加以下代码，这样可以实现框架的CSRF表单令牌验证。--}}
    <meta name="csrf-token" content="{{csrf_token()}}">

    <title>注册</title>
</head>
<body class="d-flex align-items-center bg-white border-top-2 border-primary">

<!-- CONTENT
================================================== -->
<div class="container-fluid">
    <div class="row align-items-center justify-content-center">
        <div class="col-12 col-md-5 col-lg-6 col-xl-4 px-lg-6 my-5">

            <!-- Heading -->
            <h1 class="display-4 text-center mb-3">
                欢迎光临英雄联盟
            </h1>

            <!-- Subheading -->
            <p class="text-muted text-center mb-5">
                加入我们  让我们一起并肩战斗
            </p>

            <!-- Form -->
            {{--19.当用户点击了发送验证码以后去执行User.Controller类中的store方法--}}
            <form method="post" action="{{route ('user.store')}}">
                @csrf
                {{--邮箱--}}
                <div class="form-group">
                    <!-- Label -->
                    <label>
                        昵称
                    </label>
                    <!-- Input -->
                    {{--old  把就的名字保存在输入条里面--}}
                    <input type="text" name="name" value="{{old ('name')}}" class="form-control" placeholder="请输入个性昵称">
                </div>

                <!-- 用户名 -->
                <div class="form-group">

                    <!-- Label -->
                    <label>
                        电子邮箱
                    </label>

                    <!-- Input -->
                    <input type="email" name="email" class="form-control" placeholder="请输入电子邮箱">

                </div>
                <!-- 密码 -->
                <div class="form-group">

                    <!-- Label -->
                    <label>
                        密码
                    </label>

                    <!-- Input -->
                    <input type="password" name="password" class="form-control" placeholder="请输入密码">

                </div>
                <!-- 确认密码 -->
                <div class="form-group">

                    <!-- Label -->
                    <label>
                        确认密码
                    </label>

                    <!-- Input -->
                    <input type="password" name="password_confirmation" class="form-control" placeholder="请确认密码">

                </div>
                <!-- 验证码-->
                <div class="form-group">
                    <!-- Label -->
                    <label>
                        验证码
                    </label>
                    <!-- Input -->
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="请输入验证码" name="code" value="" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="bt">发送验证码</button>
                        </div>
                    </div>
                </div>



                <!-- 注册按钮 -->
                <button class="btn btn-lg btn-block btn-primary mb-3">
                    注册
                </button>

                <!-- Link -->
                <div class="text-center">
                    <small class="text-muted text-center">
                        已有账号？ <a href="{{route ('register')}}">去登录</a>.
                    </small>
                </div>

            </form>

        </div>
        <div class="col-12 col-md-7 col-lg-6 col-xl-8 d-none d-lg-block">

            <!-- Image -->
            <div class="bg-cover vh-100 mt--1 mr--3" style="background-image: url({{asset ('org/assets')}}/img/covers/auth-side-cover.jpg);"></div>

        </div>
    </div> <!-- / .row -->
</div>

<!-- JAVASCRIPT
================================================== -->

<!-- Libs JS -->
<script src="{{asset ('org/assets')}}/libs/jquery/dist/jquery.min.js"></script>
<script src="{{asset ('org/assets')}}/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset ('org/assets')}}/libs/chart.js/dist/Chart.min.js"></script>
<script src="{{asset ('org/assets')}}/libs/chart.js/Chart.extension.min.js"></script>
<script src="{{asset ('org/assets')}}/libs/highlight/highlight.pack.min.js"></script>
<script src="{{asset ('org/assets')}}/libs/flatpickr/dist/flatpickr.min.js"></script>
<script src="{{asset ('org/assets')}}/libs/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
<script src="{{asset ('org/assets')}}/libs/list.js/dist/list.min.js"></script>
<script src="{{asset ('org/assets')}}/libs/quill/dist/quill.min.js"></script>
<script src="{{asset ('org/assets')}}/libs/dropzone/dist/min/dropzone.min.js"></script>
<script src="{{asset ('org/assets')}}/libs/select2/dist/js/select2.min.js"></script>

<!-- Theme JS -->
<script src="{{asset ('org/assets')}}/js/theme.min.js"></script>

<meta name="csrf-token" content="{{csrf_token()}}">
<link href="https://cdn.bootcss.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">

{{--7.输入命令git clone https://github.com/houdunwang/hdjs来加载hdjs目录--}}
{{--8.把命令下面的代码拿到页面上来 因为别的页面也要使用hdjs  所以给他封装成函数 引入进来--}}
@include('layouts.hdjs')
{{--<script>--}}
    {{--window.hdjs={--}}
        {{--//组件目录必须绝对路径  找hdjs目录--}}
        {{--base : '{{asset ('org/hdjs')}}',--}}
        {{--//上传文件后台地址--}}
        {{--uploader :'/uploader.php?',--}}
        {{--//获取文件列表的后台地址--}}
        {{--filesLists : '/filesLists.php?',--}}

        {{--//require.js配置项（可为空）--}}
        {{--requireJs:{paths:{},shim:{}},--}}
    {{--};--}}
{{--</script>--}}
{{--<script src="{{asset ('org/hdjs')}}/require.js"></script>--}}
{{--<script src="{{asset ('org/hdjs')}}/config.js"></script>--}}


{{--引入弹框的封装函数--}}
@include('layouts.message')


{{--9.开始写验证码--}}
{{--问题：验证码代码不知道在哪里找--}}
<script>
    require(['hdjs','bootstrap'], function (hdjs) {
        let option = {
            //按钮 验证码的按钮 所以在上面给验证码button一个id
            el: '#bt',
            //后台链接  第10在wed类中
            // code.send  17.加载Cond.Controller类中的send方法
            url: '{{route('code.send')}}',
            //验证码等待发送时间
            timeout: 10,
            //表单，手机号或邮箱的INPUT表单 加载name=email 也就是上面的邮箱
            input: '[name="email"]'
        };
        hdjs.validCode(option);
    })
</script>

{{--// 18.在env文件中改变邮箱 (就相当于公司的邮箱)--}}
{{--举个例子 用户在注册的时候已经把邮箱给了我们
但是我们要有一个地址邮箱去给用户邮箱里面发送验证码
所以这里要改成给用户发验证码的邮箱--}}
{{--// MAIL_DRIVER=smtp--}}
{{--// MAIL_HOST=smtp.qq.com--}}
{{--// MAIL_PORT=25--}}
{{--// MAIL_USERNAME=1933304128@qq.com--}}
{{--// MAIL_PASSWORD=asbhtsgnjomzcfhb--}}
{{--// MAIL_ENCRYPTION=null--}}
{{--// MAIL_FROM_ADDRESS=1933304128@qq.com--}}
{{--// MAIL_FROM_NAME=欢迎注册--}}
{{--url: '{{route('code.send'、)}}',--}}
</body>
{{--19.在上面的验证码的form表单--}}

</html>