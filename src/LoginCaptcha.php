<?php

namespace Encore\LoginCaptcha;

use Encore\Admin\Extension;

class LoginCaptcha extends Extension
{
    public $name = 'login-with-captcha';
    public $views = __DIR__.'/../resources/views';
    public $assets = __DIR__.'/../resources/assets';
}