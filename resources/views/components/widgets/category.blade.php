<div class="w-100 mt-auto text-white">
    <a href="{{route('posts.by.category', ['category_slug' => $post->subcategory->slug])}}" class="badge {{randomBg()}} mb-2"><i
            class="fas fa-circle me-2 small fw-bold"></i>{{$post->subcategory->name}}</a>
</div>
