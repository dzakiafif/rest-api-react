<?php
/**
 * Created by PhpStorm.
 * User: afif
 * Date: 12/09/2018
 * Time: 22:42
 */

namespace App\Http\Controllers;


use App\Kamar;

class DetailkamarController extends Controller
{

    public function index($id)
    {
        $data = Kamar::find($id);

        $output = [
            'status' => true,
            'data' => $data
        ];

        return response()->json($output);
    }

}