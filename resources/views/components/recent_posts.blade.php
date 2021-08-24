<div class="row">
    <!-- Recent post widget START -->
    <div class="col-12 col-sm-6 col-lg-12">
        <h4 class="mt-4 mb-3">{{trans('homePage.15')}}</h4>

    @foreach(\App\Models\Post::orderByDesc('created_at')->take(4)->get() as $post)
        <!-- Recent post item -->
            <div class="card mb-3">
                <div class="row g-3">
                    <div class="col-4">
                        <img class="rounded" src="/uploads/{{$post->image}}" alt="">
                    </div>
                    <div class="col-8">
                        <h6><a href="{{route('single.post',['slug'=>$post->slug])}}"
                               class="btn-link stretched-link text-reset fw-bold">{{$post->title}}</a></h6>
                        <div class="small mt-1">{{$post->created_at->diffForHumans()}}</div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <!-- Recent post widget END -->


</div>
