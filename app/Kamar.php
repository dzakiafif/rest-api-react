<?php
/**
 * Created by PhpStorm.
 * User: afif
 * Date: 12/09/2018
 * Time: 21:46
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{

    protected $table = 'kamar';

    protected $fillable = [
        'nama_kamar','harga'
    ];

}