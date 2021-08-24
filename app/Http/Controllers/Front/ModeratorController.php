<?php

namespace App\Http\Controllers\Front;

use App\Helpers\Status;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class ModeratorController extends Controller
{
    public function forVerification()
    {
        $posts = Post::where('status', Status::MODERATOR)->paginate(10);
        return view('front/moderator/posts_for_verification', ['posts' => $posts]);
    }

    public function verify(Request $request)
    {
        $this->validate($request, [
            'status' => 'required',
            'post_id' => 'required'
        ]);

        Post::find($request->post_id)->update([
            'status' => $request->status
        ]);

        return redirect()->back();
    }
}
