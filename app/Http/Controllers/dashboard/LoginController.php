<?php namespace App\Http\Controllers\dashboard;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller {

    /*
    |--------------------------------------------------------------------------
    | Welcome Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders the "marketing page" for the application and
    | is configured to only allow guests. Like most of the other sample
    | controllers, you are free to modify or remove it as you desire.
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function login(Request $request)
    {
        $email = $request->email;
        $password =$request->password;
        $remember = $request->remember;
        if(Auth::attempt(['email'=>$email, 'password'=>$password], $remember)){
            return redirect()->intended('/dashboard');
        }else{
            $error = 1;
            return view('panel.login', ['error' =>$error] );
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->intended('/dashboard');
    }

}
