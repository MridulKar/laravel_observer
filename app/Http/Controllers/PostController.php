<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function index(){
        $post = Post::all();
        return view('welcome', compact('post'));
    }

    public function store(Post $post, Request $request){


            //=== validation ===
            $validator =  Validator::make(
                $request->all(),
                [
                    'title' => 'required',
                    'description'  => 'required',
                ],
            );
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator->getMessageBag())->withInput();
            }

            //=== data store ===
            $inputs = [
                'title'       => $request->input('title'),
                'description' => $request->input('description'),
            ];

            $post =  Post::create($inputs);

            return redirect()->url('/');


    }
}
