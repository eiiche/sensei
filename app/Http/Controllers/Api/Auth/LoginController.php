<?php

namespace App\Http\Controllers\Api\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function handle(LoginRequest $request)
    {
        if (Auth::check()) {
            //400..bad request
            return response('', 400);
        }
        //リクエストのemailと比較し該当した場合代入
        $user = User::where('email', $request->email)->first();
        //リクエストで入力されたパスワードと該当ユーザに紐づいたパスワードのハッシュ値が等しいかチェックする
        if (!$user || !password_verify($request->password, $user->password)) {
            //エラーを返却
            return response([
                'message' => 'These credentials do not match our records.',
                'errors' => [
                    'email' => ['These credentials do not match our records.']
                ]
            ], 422);
        }

        //ログインさせる
        Auth::login($user);

        //ユーザインスタンスを返却
        return response()->json($user);
    }
}
