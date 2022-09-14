<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogStoreRequest;
use App\Http\Resources\BlogResource;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class BlogController extends Controller
{
    public function index()
    {
/*       $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum <strong>dolor</strong> sit amet consectetur, adipisicing elit. Soluta, qui?',
            'category_id' => 1,
        ]; */
  // $post=Blog::first();
  // return response()->json($post);

 return BlogResource::collection(Blog::all());
    }

 /*    public function store()
    {
        return 'Страница создание поста';
    } */

    public function create(BlogStoreRequest $request, Blog $blog)
    {


       // return  $request->all();
       //  if ($request->ajax() || $request->wantsJson())

  //    return response()->json($request, 400);
$validated = $request->validated();

/*
$validated = helpersvalidate($request->all(), [
    'title' => ['required', 'string', 'max:100'],

]); */


        //dd($request);
$creat_post = Blog::create($validated);
return new BlogResource($creat_post);
      ///return response($validated. 'This a321321y');
       ///return 'Запрос создание поста';
    }

    public function show(Blog $blog)
    {
       // return new BlogResource(Blog::findOrFail($id));
      /// return new BlogResource(Blog::with('comments')->findOrFail($id));
       return new BlogResource($blog);
       /// return "Страница просмотр поста {$post}";
    }

    public function edit(Blog $blog)
    {

        $result = Blog::where('title', 'Унік')->first();
        $result->title = 'Paris to London';
        $result->save();
     /// return "Страница изменение поста {$post}";
    }

    public function update(BlogStoreRequest $request, Blog $blog)
    {

       $res= $blog->update($request->validated());
     // return $res;
     return new BlogResource($blog);

    }



    public function delete(Blog $blog)
    {

       $res= $blog->delete($blog);
       return $res;


    }


    public function like()
    {
        return 'запрос добавление лайк';
    }
}
