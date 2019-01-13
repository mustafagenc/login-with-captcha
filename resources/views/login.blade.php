<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{config('admin.title')}} | {{ trans('admin.login') }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    
    <link rel="shortcut icon" href="{{ admin_asset('vendor/laravel-admin-ext/login-with-captcha/favicons/favicon.ico') }}" />
    <link rel="icon" type="image/x-icon" sizes="16x16 32x32" href="{{ admin_asset('vendor/laravel-admin-ext/login-with-captcha/favicons/favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ admin_asset('vendor/laravel-admin-ext/login-with-captcha/favicons/favicon-152-precomposed.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ admin_asset('vendor/laravel-admin-ext/login-with-captcha/favicons/favicon-144-precomposed.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ admin_asset('vendor/laravel-admin-ext/login-with-captcha/favicons/favicon-120-precomposed.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ admin_asset('vendor/laravel-admin-ext/login-with-captcha/favicons/favicon-114-precomposed.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ admin_asset('vendor/laravel-admin-ext/login-with-captcha/favicons/favicon-180-precomposed.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ admin_asset('vendor/laravel-admin-ext/login-with-captcha/favicons/favicon-72-precomposed.png') }}">
    <link rel="apple-touch-icon" href="{{ admin_asset('vendor/laravel-admin-ext/login-with-captcha/favicons/favicon-57.png') }}">
    <link rel="icon" href="{{ admin_asset('vendor/laravel-admin-ext/login-with-captcha/favicons/favicon-32.png') }}" sizes="32x32">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="{{ admin_asset('vendor/laravel-admin-ext/login-with-captcha/favicons/favicon-144.png') }}">
    <meta name="theme-color" content="#ffffff">
    <link rel="manifest" href="{{ admin_asset('vendor/laravel-admin-ext/login-with-captcha/favicons/manifest.json') }}">
    <link rel="icon" sizes="192x192" href="{{ admin_asset('vendor/laravel-admin-ext/login-with-captcha/favicons/favicon-192.png') }}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://unpkg.com/flickity@2.1.2/dist/flickity.css" rel="stylesheet">
    <link href="{{ admin_asset('/vendor/laravel-admin-ext/login-with-captcha/admin.css') }}" rel="stylesheet">

</head>
<body @if(config('admin.login_background_image'))style="background: url({{config('admin.login_background_image')}}) no-repeat;background-size: cover;"@endif>

    <section class="login_wrapper">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 align-self-center login_form-wrapper">


                    <div class="logo_wrapper">
                        <a href="{{ admin_base_path('/') }}" class="logo_text">{{config('admin.name')}}</a>
                    </div>

                    <form action="{{ admin_base_path('auth/login') }}" method="post" autocomplete="off" class="login_form" novalidate="">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <input type="text" name="username" id="username" class="form-control" value="{{ old('username') }}" placeholder="{{ trans('admin.username') }}"
                                autocomplete="new-username" required/> @if($errors->has('username'))
                            @foreach($errors->get('username') as $message)
                            <div class="form-text text-danger">{{$message}}</div>
                            @endforeach @endif
                        </div>

                        <div class="form-group">
                            <input type="password" name="password" id="password" class="form-control" value="" placeholder="{{ trans('admin.password') }}"
                                autocomplete="new-password" required/> @if($errors->has('password'))
                            @foreach($errors->get('password') as $message)
                            <div class="form-text text-danger">{{$message}}</div>
                            @endforeach @endif
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-5">
                                <img class="image img-thumbnail" src="{{ captcha_src('flat') }}" onclick="this.src='{{ captcha_src('flat') }}' + Math.random()"
                                    style="cursor: pointer">
                                    
                                <span class="glyphicon form-control-feedback captcha"></span>
                            </div>
                            <div class="form-group col-md-7">
                                <input type="text" name="captcha" id="captcha" class="form-control" placeholder="{{ trans('admin.captcha') }}" autocomplete="new-username"
                                    required/>
                            </div>
                            @if($errors->has('captcha')) 
                                @foreach($errors->get('captcha') as $message)
                                    <div class="form-text text-danger">{{$message}}</div>
                                @endforeach
                            @endif
                        </div>

                        <div class="form-row">
                            <div class="col-md-8 mb-3">
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-success btn-sm btn-block" type="submit">{{ trans('admin.login') }}</button>
                            </div>
                        </div>
                        
                    </form>
                    <div class="copy_right"><a href="http://www.ekipisi.com.tr" class="ekipisi" title="Ekipişi Yazılım ve Danışmanlık Hizmetleri">
                    <strong>EKİPİŞİ</strong> Yazılım ve Danışmanlık Hizmetleri.</a></div>
                </div>
                <div class="col d-none d-md-none d-lg-block d-xl-block slider_wrapper">

                    <div class="carousel-cell">

                        <img src="https://www.ekipisi.com.tr/warden/images/yeni.jpg" alt="Ekipişi Yazılım ve Danışmanlık Hizmetleri" title="Ekipişi Yazılım ve Danışmanlık Hizmetleri" />
                        
                    </div>

                </div>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/flickity@2.1.2/dist/flickity.pkgd.min.js"></script>
</body>
</html>