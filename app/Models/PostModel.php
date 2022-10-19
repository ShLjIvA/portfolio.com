<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class PostModel
{
    public function getPosts(){
        return DB::table('posts')->get();
    }

    public function getPost($id){
        if($id == "a")
            return abort(404);

        return DB::table('posts')->where('id', $id)->first();
    }
}
