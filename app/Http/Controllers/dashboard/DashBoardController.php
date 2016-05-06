<?php namespace App\Http\Controllers\dashboard;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class DashBoardController extends Controller {

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
    public function index(){

        $role = Auth::user()->role;
        if($role == 1){
            return view('panel.admin.index');
        }

    }

    public function client(){
        return view('panel.admin.client');
    }

}
