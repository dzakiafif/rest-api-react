<?php
/**
 * Created by PhpStorm.
 * User: afif
 * Date: 12/09/2018
 * Time: 17:16
 */

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function index(Request $request)
    {
        $user = User::where('username',$request->input('username'))
                ->where('password',md5($request->input('password')))
                ->first();

        if(isset($user)) {
            $output = [
                'status' => true,
                'message' => 'success login'
            ];
        }else{
            $output = [
                'status' => false,
                'message' => 'cant login'
            ];
        }

        return response()->json($output);
    }

}