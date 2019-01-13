<?php

use Encore\LoginCaptcha\Http\Controllers\LoginCaptchaController;

Route::get('auth/login', LoginCaptchaController::class.'@login');
Route::post('auth/login', LoginCaptchaController::class.'@postLogin');