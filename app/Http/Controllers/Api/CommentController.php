<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentStoreRequest;
use App\Http\Resources\CommentResource;
use App\Models\Comment;
use Illuminate\Http\Request;


class CommentController extends Controller
{
    public function index()
    {
   ///     return 'sdfsdfs';
return CommentResource::collection(Comment::all());
    }


    public function create(CommentStoreRequest $request, Comment $comment)
    {

$validated = $request->validated();

$creat_comment = Comment::create($validated);
return new CommentResource($creat_comment);

    }

    public function show(Comment $comment)
    {

       return new CommentResource($comment);

    }

    public function edit(Comment $comment)
    {


    }

    public function update(CommentStoreRequest $request, Comment $comment)
    {

       $res= $comment->update($request->validated());
     // return $res;
     return new CommentResource($comment);

    }



    public function delete(Comment $comment)
    {

       $res= $comment->delete($comment);
       return $res;


    }


}
