<?php
/**
 * Created by PhpStorm.
 * User: afif
 * Date: 12/09/2018
 * Time: 16:42
 */

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;


class RegisterController extends Controller
{

    public function index(Request $request)
    {
        $data = new User();
        $data->username = $request->input('username');
        $data->email = $request->input('email');
        $data->password = md5($request->input('password'));

        $data->save();

        $output = [
            'status' => true
        ];

        return response()->json($output);
    }

}