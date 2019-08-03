<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Validator;
use DB;
use App\Shop\Entity\User;

DB::enableQueryLog();

class UserAuthController extends Controller{
    public function indexPage(){
        return view('welcome');
    }

    public function signUpPage(){
        $binding = [
            'title' => '註冊'
        ];
        return view('auth.signUp', $binding);
    }

    public function signInPage(){
        $binding = [
            'title' => '登入'
        ];
        return view('auth.signIn', $binding);
    }

    public function signInProcess(){
        $input = request()->all();
        $User = User::where('email', $input['email'])
                    ->where('password', $input['password'])
                    ->first();
/*         var_dump(DB::getQueryLog());
        exit; */
        if($User == null){
            $error_message = [
                'msg'=>[
                    '帳密有誤',
                ],
            ];
            return redirect('/user/auth/sign-in')->withErrors($error_message)->withInput();
        }
        session()->put('user_id', $User->id);
        return redirect()->intended('/');
    }

    public function signUpProcess(){
        $input=request()->all();
        $rules=[
            'nickname'=>[
                'required',
                'max:50',
            ],
            'email'=>[
                'required',
                'max:150',
                'email',
            ],            
            'password'=>[
                'required',
                'min:6',
                'same:password_confirmation',
            ],
            'password_confirmation'=>[
                'required',
                'min:6',
            ],
            'type'=>[
                'required',
                'in:G,A'
            ],
        ];
        $validator = Validator::make($input, $rules);
        if($validator->fails()){
            return redirect('/user/auth/sign-up')->withErrors($validator)->withInput();
        }else{
            $Users = User::create($input);
            $blinding = [
                'nickname'=>$input['nickname'],
            ];
            return redirect('/user/auth/sign-in');
        }
        /* var_dump($input);
        exit;*/
    }

    public function signOut(){
        session()->forget('user_id');
        return redirect('/');
    }
}
?>