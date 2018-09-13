<?php
/**
 * Created by PhpStorm.
 * User: afif
 * Date: 12/09/2018
 * Time: 22:40
 */

namespace App\Http\Controllers;


use App\Kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{

    public function index(Request $request)
    {
        $data = new Kamar();
        $data->nama_kamar = $request->input('nama_kamar');
        $data->harga = $request->input('harga');
        if($request->hasFile('image')) {
            $image = $request->file('image');
            $name = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]" . "/" . "images" . "/" . md5(uniqid()) . '.' . $image->getClientOriginalExtension();
            $destination_path = public_path('images');
            $image->move($destination_path, $name);
            $data->foto_kamar = $name;
        }

        $data->save();

        $output = [
            'status' => true
        ];

        return response()->json($output);
    }

}