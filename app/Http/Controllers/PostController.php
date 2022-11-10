<?php

namespace App\Http\Controllers;

use App\Models\PostModel;
use Illuminate\Http\Request;

class PostController extends Controller
{
    private $data = [];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = new PostModel();
        $this->data['posts'] = $model->getPosts();
        return view('posts', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = new PostModel();
        $result = $model->getPost($id);
        if($result == null)
            return abort(404);
        $this->data['post'] = $result;
        return view('post', $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *gi
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = new PostModel();
        $result = $model->getPost($id);
        if($result == null)
            return abort(404);
        $this->data['post'] = $result;
        return view('edit', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $newTitle = $request->input('titleEdit');
        $newBody = $request->input('bodyEdit');
        $model = new PostModel();
        $result = $model->updatePost($id, $newTitle, $newBody);
        if($result){
            return redirect()->route('home');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = deletePost($id);
        dd($result);
    }
}
