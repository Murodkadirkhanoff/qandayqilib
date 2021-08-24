<div class="my-4">
    <h4 class="mb-3">{{trans('homePage.14')}}</h4>
    <!-- Category item -->
    @foreach(\App\Models\Post::take(4)->inRandomOrder()->get() as $post)
        <div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded"
             style="background-image:url({{'/uploads/' . $post->image}}); background-position: center left; background-size: cover;">
            <div class="bg-dark-overlay-4 p-3">
                <a href="{{route('single.post',['slug'=>$post->slug])}}"
                   class="stretched-link btn-link fw-bold text-white h5">{{$post->title}}</a>
            </div>
        </div>
@endforeach
<!-- View All Category button -->
    <div class="text-center mt-3">
        <a href="{{route('posts.list.page')}}" class="fw-bold text-muted text-primary-hover"><u>{{trans('homePage.4')}}</u></a>
    </div>
</div>
