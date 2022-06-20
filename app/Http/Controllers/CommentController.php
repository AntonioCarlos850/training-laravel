<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(CommentRequest $request, Product $product)
    {
        $attributes = $request->validated();

        $product->comments()->create([
            'user_id' => auth()->user()->id,
            'body' => $attributes['body'],
            'title' => $attributes['title']
        ]);

        return back();
    }
}
