<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class questions extends Model
{
     public static function getAll()
    {
        $data = DB::table('questions')->get();
        return $data;
    }

    public static function save($data)
    {
        $new_data = DB::table('questions')->insert($data);
        return $new_data;
    }

    public static function show($id)
    {
        $data = DB::table('questions')->where('id', $id)->get()[0];
        return $data;
    }
}
