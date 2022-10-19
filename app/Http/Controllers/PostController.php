<?php

namespace App\Http\Controllers;

use App\Models\PostModel;
use Illuminate\Http\Request;

class PostController extends Controller
{
    private $data = [];

    public function index(){
        $model = new PostModel();
        $this->data['posts'] = $model->getPosts();
        return view('posts', $this->data);
    }

    public function show($id){
        $model = new PostModel();
        $result = $model->getPost($id);
        if($result == null)
            return abort(404);
        $this->data['post'] = $result;
        return view('post', $this->data);
    }
}
