<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function login(): View
    {
        return view('login');
    }

public function loginProcess(Request $request) {
    $email    = $request->input('email');
    $password = $request->input('password');

$user = DB::table('user')
    ->join('role', 'user.idrole', '=', 'role.idrole')
    ->where('user.email', $email)
    ->first();

if ($user && $user->password === $password) {
    session([
        'iduser'    => $user->iduser,
        'user_name' => $user->user_name,
        'role_name' => $user->role_name,
    ]);

    return redirect('/dashboard');
}

return back()->with('error', 'Email atau Password salah!');

}

public function dashboard () {
    if (!session()->has('iduser')) {
          return redirect('/login');
          }
    return view('dashboard');
}

public function logout() {
    session()->flush();
    return redirect('/login');
}
}
