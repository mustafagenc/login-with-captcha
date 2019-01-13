<?php

namespace Encore\LoginCaptcha\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class LoginCaptchaController extends Controller
{
    public function login()
    {
        return view('login-with-captcha::login');
    }

    public function postLogin(Request $request)
    {
        $credentials = $request->only(['username', 'password','captcha']);

        $validator = Validator::make($credentials, [
            'username' => 'required',
            'password' => 'required',
            'captcha' => 'required|captcha'
        ]);

        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator);
        }

        unset($credentials['captcha']);

        if (Auth::guard('admin')->attempt($credentials)) {
            admin_toastr(trans('admin.login_successful'));

            return redirect()->intended(config('admin.route.prefix'));
        }

        return Redirect::back()->withInput()->withErrors(['username' => $this->getFailedLoginMessage()]);
    }
}