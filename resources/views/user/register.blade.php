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

    <title>登录</title>
</head>
<body class="d-flex align-items-center bg-white border-top-2 border-primary">

<!-- CONTENT
================================================== -->
<div class="container">
    <div class="row align-items-center">
        <div class="col-12 col-md-6 offset-xl-2 offset-md-1 order-md-2 mb-5 mb-md-0">

            <!-- Image -->
            <div class="text-center">
                <img src="{{asset ('org/assets')}}/img/illustrations/happiness.svg" alt="..." class="img-fluid">
            </div>

        </div>
        <div class="col-12 col-md-5 col-xl-4 order-md-1 my-5">

            <!-- Heading -->
            <h1 class="display-4 text-center mb-3">
                登录
            </h1>

            <!-- Subheading -->
            <p class="text-muted text-center mb-5">
                欢迎加入我们
            </p>

            <!-- Form -->
            <form method="post" action="{{route ('registerForm')}}">
               @csrf
                <!-- Email address -->
                <div class="form-group">

                    <!-- Label -->
                    <label>邮箱</label>

                    <!-- Input -->
                    <input type="email" name="email" class="form-control" placeholder="请输入邮箱">

                </div>

                <!-- Password -->
                <div class="form-group">

                    <div class="row">
                        <div class="col">

                            <!-- Label -->
                            <label>密码</label>

                        </div>
                        <div class="col-auto">

                            <!-- Help text -->
                            <a href="password-reset-illustration.html"  class="form-text small text-muted">

                            </a>

                        </div>
                    </div> <!-- / .row -->

                    <!-- Input group -->
                    <div class="input-group input-group-merge">

                        <!-- Input -->
                        <input type="password" name="password" class="form-control form-control-appended" placeholder="请输入密码">

                        <!-- Icon -->
                        <div class="input-group-append">
                  <span class="input-group-text">
                    <i class="fe fe-eye"></i>
                  </span>
                        </div>

                    </div>
                </div>

                <!-- Submit -->
                <button class="btn btn-lg btn-block btn-primary mb-3">
                    登录
                </button>

                <!-- Link -->
                <div class="text-center">
                    <small class="text-muted text-center">
                        没有账号? <a href="{{route ('user.login')}}">去注册</a>.
                        <a href="">重置密码</a>
                        <a href="{{route ('home')}}">返回首页</a>
                    </small>
                </div>

            </form>

        </div>
    </div> <!-- / .row -->
</div> <!-- / .container -->

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

@include('layouts.hdjs')
@include('layouts.message')
<script>
    require(['hdjs','bootstrap'], function (hdjs) {
        let option = {
            //按钮 验证码的按钮 所以在上面给验证码button一个id
            el: '#bt',
            //后台链接
            // code.send  加载Cond.Controller类中的send方法
            url: '{{route('code.send')}}',
            //验证码等待发送时间
            timeout: 10,
            //表单，手机号或邮箱的INPUT表单 加载name=email 也就是上面的邮箱
            input: '[name="email"]'
        };
        hdjs.validCode(option);
    })
</script>
</body>
</html>