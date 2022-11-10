<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class PostModel
{
    public function getPosts(){
        return DB::table('posts')->whereNull('deleted_at')->get();
    }

    public function getPost($id){
        if($id == "a")
            return abort(404);

        return DB::table('posts')->where('id', $id)->first();
    }

    public function updatePost($id, $newTitle, $newBody){
        return DB::table('posts')->where('id', $id)->update(['title' => $newTitle, 'body' => $newBody, 'updated_at' => now()]);
    }

    public function deletePost($id){
        return DB::table('posts')->where('id', $id)->update(['deleted_at' => now()]);
    }
}
