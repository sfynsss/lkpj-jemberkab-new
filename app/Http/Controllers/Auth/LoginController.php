<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Session;
use Cookie;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    protected function redirectTo()
    {
        // Session()->put('tahun_aktif', date('Y'));
        Cookie::queue('tahun_aktif', date('Y'), 60 * 60 * 60 * 60 * 2);
        // if (Auth::user()->hak_akses == 'BIDANG') {
        //     return RouteServiceProvider::BIDANG;
        // } else if (Auth::user()->hak_akses == 'OPD') {
        //     return RouteServiceProvider::OPD;
        // }
        return RouteServiceProvider::HOME;
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'username';
    }
}
