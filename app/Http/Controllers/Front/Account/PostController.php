<?php

namespace App\Http\Controllers\Front\Account;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        return view('front/account/posts/list', ['posts' => Post::where('owner_id', Auth::id())->paginate(10)]);
    }

    public function create()
    {
        return view('front/account/posts/create_post');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'subcategory_id' => 'required',
            'image' => 'mimes:jpg,jpeg,png'
        ]);

        $input = $request->all();
        $subcategory = Category::find($request->subcategory_id);
        $request->is_visible == "on" ? $is_visible = true : $is_visible = false;

        $path = null;
        if ($request->hasFile('image')) {
            $path = Storage::disk('public_uploads')->put('posts', $request->file('image'));
        }

        Post::create(['owner_id' => Auth::id(), 'image' => $path, 'is_visible' => $is_visible, 'category_id'=> $subcategory->parent->id] + $input);

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
