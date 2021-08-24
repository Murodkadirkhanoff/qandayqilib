<?php

namespace App\Http\Livewire\Front\Account;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $result = Post::paginate(10);

        return view('livewire.front.account.post-list', [
            'posts' => $result
        ]);
    }
}
