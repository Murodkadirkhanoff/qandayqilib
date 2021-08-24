<ul class="dropdown-menu" aria-labelledby="pagesMenu">
    @foreach($parentCategories as $category)
        @if($category->children()->exists())
            <li class="dropdown-submenu dropend">
                <a class="dropdown-item dropdown-toggle" href="#">{{$category->name}}</a>
                <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
            @include('vendor.category.sub_category',['subcategories' => $category->children])
                </ul>
            </li>
        @else
            <li><a class="dropdown-item" href="{{route('posts.by.category',['category_slug'=>$category->slug])}}">{{$category->name}}</a></li>
        @endif
    @endforeach
</ul>




{{--<ul class="dropdown-menu" aria-labelledby="pagesMenu">--}}
{{--    <li><a class="dropdown-item" href="about-us.html">About</a></li>--}}
{{--    <li><a class="dropdown-item" href="contact-us.html">Contact</a></li>--}}
{{--    <!-- Dropdown submenu -->--}}
{{--    <li class="dropdown-submenu dropend">--}}
{{--        <a class="dropdown-item dropdown-toggle" href="#">Other Archives</a>--}}
{{--        <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">--}}
{{--            <li><a class="dropdown-item" href="author.html">Author Page</a></li>--}}
{{--            <li><a class="dropdown-item" href="categories.html">Category page 1</a></li>--}}
{{--            <li><a class="dropdown-item" href="categories-2.html">Category page 2</a></li>--}}
{{--            <li><a class="dropdown-item" href="tag.html"># tag</a></li>--}}
{{--            <li><a class="dropdown-item" href="search-result.html">Search result</a></li>--}}
{{--        </ul>--}}
{{--    </li>--}}
{{--    <li><a class="dropdown-item" href="404.html">Error 404</a></li>--}}
{{--    <li><a class="dropdown-item" href="signin.html">signin</a></li>--}}
{{--    <li><a class="dropdown-item" href="signup.html">signup</a></li>--}}
{{--    <!-- Dropdown submenu levels -->--}}
{{--    <li class="dropdown-divider"></li>--}}
{{--    <li class="dropdown-submenu dropend">--}}
{{--        <a class="dropdown-item dropdown-toggle" href="#">Dropdown levels</a>--}}
{{--        <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">--}}
{{--            <!-- dropdown submenu open right -->--}}
{{--            <li class="dropdown-submenu dropend">--}}
{{--                <a class="dropdown-item dropdown-toggle" href="#">Dropdown (end)</a>--}}
{{--                <ul class="dropdown-menu" data-bs-popper="none">--}}
{{--                    <li><a class="dropdown-item" href="#">Dropdown item</a></li>--}}
{{--                    <li><a class="dropdown-item" href="#">Dropdown item</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li><a class="dropdown-item" href="#">Dropdown item</a></li>--}}
{{--            <!-- dropdown submenu open left -->--}}
{{--            <li class="dropdown-submenu dropstart">--}}
{{--                <a class="dropdown-item dropdown-toggle" href="#">Dropdown (start)</a>--}}
{{--                <ul class="dropdown-menu dropdown-menu-end" data-bs-popper="none">--}}
{{--                    <li><a class="dropdown-item" href="#">Dropdown item</a></li>--}}
{{--                    <li><a class="dropdown-item" href="#">Dropdown item</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li><a class="dropdown-item" href="#">Dropdown item</a></li>--}}
{{--        </ul>--}}
{{--    </li>--}}
{{--    <li class="dropdown-divider"></li>--}}
{{--    <li>--}}
{{--        <a class="dropdown-item" href="https://support.webestica.com/" target="_blank">--}}
{{--            <i class="text-warning fa-fw bi bi-life-preserver me-2"></i>Support--}}
{{--        </a>--}}
{{--    </li>--}}
{{--    <li>--}}
{{--        <a class="dropdown-item" href="docs/index.html" target="_blank">--}}
{{--            <i class="text-danger fa-fw bi bi-card-text me-2"></i>Documentation--}}
{{--        </a>--}}
{{--    </li>--}}
{{--    <li class="dropdown-divider"></li>--}}
{{--    <li>--}}
{{--        <a class="dropdown-item" href="rtl/index.html" target="_blank">--}}
{{--            <i class="text-info fa-fw bi bi-toggle-off me-2"></i>RTL demo--}}
{{--        </a>--}}
{{--    </li>--}}
{{--    <li>--}}
{{--        <a class="dropdown-item" href="https://themes.getbootstrap.com/store/webestica/"--}}
{{--           target="_blank">--}}
{{--            <i class="text-success fa-fw bi bi-cloud-download-fill me-2"></i>Buy blogzine!--}}
{{--        </a>--}}
{{--    </li>--}}
{{--</ul>--}}
