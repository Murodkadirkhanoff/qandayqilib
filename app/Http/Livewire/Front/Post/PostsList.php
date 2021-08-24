<?php

namespace App\Http\Livewire\Front\Post;

use App\Helpers\Status;
use App\Models\Category;
use App\Models\Post;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class PostsList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    public $categories;
    public $date_filter;
    public $category_filter;
    public $subcategory_filter;
    public $filter_category = [];
    public $_sub_category_filter;

    public function mount()
    {
        $this->categories = Category::doesntHave('parent')->get();
    }

    public function resetFields()
    {
        $this->reset('category_filter', 'date_filter', 'subcategory_filter', '_sub_category_filter');
    }

    public function setcat($id)
    {
        $this->category_filter = $id;
        $this->subcategory_filter = null;
        $this->_sub_category_filter = Category::where('parent_id', $id)->get();
    }

    public function setsubcat($id)
    {
        $subcategory = Category::find($id);

        $this->category_filter = $subcategory->parent->id;
        $this->subcategory_filter = $subcategory;
        $this->_sub_category_filter = Category::where('parent_id', $subcategory->parent->id)->get();
    }

    public function render()
    {
        $filters = null;
        $posts = Post::where('status', Status::CONFIRMED);

        if ($this->subcategory_filter != null) {
            $filters['subcategory_filter'] = $this->subcategory_filter;
            $filters['filter_category'] = $this->category_filter;
            $posts->where('subcategory_id', $this->subcategory_filter->id);
        } elseif ($this->category_filter != null) {
            $filters['filter_category'] = $this->filter_category;
            $filters['subcategory_filter'] = null;
            $posts->where('category_id', $this->category_filter);
        }

        if ($this->date_filter) {
            $filters['date_filter'] = $this->date_filter;
            $posts->whereDate('created_at', Carbon::parse($this->date_filter));
        }

        $result = $posts->paginate(10);

        return view('livewire.front.post.posts-list', [
            'posts' => $result,
            'filters' => $filters,
        ]);
    }
}
