<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class answers extends Model
{
    
    public static function getAll()
    {
        $data = DB::table('answers')->get();
        return $data;
    }

    public static function save($data)
    {
        $new_data = DB::table('answers')->insert($data);
        return $new_data;
    }

    public static function show($id)
    {
        $data = DB::table('answers')->where('question_id', $id)->get();
        return $data;
    }
}
