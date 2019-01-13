<?php

namespace Encore\LoginCaptcha;

use Illuminate\Support\ServiceProvider;

class LoginCaptchaServiceProvider extends ServiceProvider
{
    public function boot(LoginCaptcha $extension)
    {
        if (! LoginCaptcha::boot()) {
            return ;
        }

        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, 'login-with-captcha');
        }

        if ($this->app->runningInConsole() && $assets = $extension->assets()) {
            $this->publishes(
                [$assets => public_path('vendor/laravel-admin-ext/login-with-captcha')],
                'login-with-captcha'
            );
        }

        $this->app->booted(function () {
            LoginCaptcha::routes(__DIR__.'/../routes/web.php');
        });
    }
}