<?php

namespace App\Http\Controllers\Api\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Api\Auth\RegisterRequest;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function handle(RegisterRequest $request)
    {
        if (Auth::check()) {
            return response('', 400);
        }
        //RegisterRequestでvalidateした内容を保存処理
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        //ログイン処理実行
        Auth::login($user);
        return response()->json($user);
    }
}
