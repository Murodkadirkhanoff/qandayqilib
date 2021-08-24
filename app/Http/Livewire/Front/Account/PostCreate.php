<?php

namespace App\Http\Livewire\Front\Account;

use App\Models\Category;
use Livewire\Component;

class PostCreate extends Component
{
    public $categories;

    public function mount()
    {
        $this->categories = Category::whereNull('parent_id')->get();
    }

    public function render()
    {
        return view('livewire.front.account.post-create');
    }
}
