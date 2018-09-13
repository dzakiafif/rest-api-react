<?php
/**
 * Created by PhpStorm.
 * User: afif
 * Date: 13/09/2018
 * Time: 7:02
 */

namespace App\Http\Controllers;


use App\Kamar;

class ListKamarController extends Controller
{

    public function index()
    {
        $data = Kamar::all();

        $output = [
            'status' => true,
            'data' => $data
        ];

        return response()->json($output);
    }

}