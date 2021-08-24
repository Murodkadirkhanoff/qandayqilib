@foreach($subcategories as $subcategory)
    @if($subcategory->children()->exists())
        <li class="dropdown-submenu dropend">
            <a class="dropdown-item dropdown-toggle" href="#">{{$subcategory->name}}</a>
            <ul class="dropdown-menu " data-bs-popper="none">
                @include('vendor.category.sub_category',['subcategories' => $subcategory->children])
            </ul>
        </li>
    @else
        <li><a class="dropdown-item" href="{{route('posts.by.category',['category_slug'=>$subcategory->slug])}}">{{$subcategory->name}}</a></li>
    @endif
@endforeach


