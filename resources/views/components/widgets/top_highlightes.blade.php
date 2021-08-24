<section>
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- Title -->
                <div class="mb-4">
                    <h2 class="m-0"><i class="bi bi-bookmark-star me-2"></i>{{$heading}}</h2>
                </div>
                <div class="row gy-4">
                    <div class="col-lg-7">
                        @foreach(\App\Models\Post::take(1)->where('category_id',$category_id)->inRandomOrder()->get() as $post)
                            <div class="card card-overlay-bottom card-bg-scale h-400 h-lg-560"
                                 style="background-image:url({{asset('uploads/'. $post->image)}}); background-position: center left; background-size: cover;">
                                <!-- Card Image overlay -->
                                <div class="card-img-overlay d-flex align-items-center p-3 p-sm-5">
                                    <div class="w-100 mt-auto">
                                        <div class="col">
                                            <!-- Card category -->
                                        @include('components.widgets.category', ['post' =>$post])
                                            <!-- Card title -->
                                            <h2 class="text-white display-6"><a href="{{ route('single.post', ['slug'=> $post->slug]) }}"
                                                                                class="btn-link text-reset stretched-link fw-normal">{{$post->title}}</a></h2>
                                            <!-- Card info -->
                                            <ul
                                                class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
                                                <li class="nav-item">
                                                    <div class="nav-link">
                                                        <div
                                                            class="d-flex align-items-center text-white position-relative">
                                                            <div class="avatar avatar-sm">
                                                                <img class="avatar-img rounded-circle"
                                                                     src="{{asset('assets/images/avatar/default.jpg')  }}" alt="avatar">
                                                            </div>
                                                            <span class="ms-3">by <a href="#"
                                                                                     class="stretched-link text-reset btn-link">{{$post->owner->name}}</a></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item">{{$post->created_at->diffForHumans()}}</li>
                                                <li class="nav-item">{{minute_to_read($post)}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-lg-5">


                    @foreach(\App\Models\Post::take(4)->where('category_id',$category_id)->inRandomOrder()->get() as $post)
                        <!-- Card item START -->
                            <div class="card mb-2 mb-md-4">
                                <div class="row g-3">
                                    <div class="col-4">
                                        <img class="rounded-3" src="{{asset('/uploads/' . $post->image)}}" alt="">
                                    </div>
                                    <div class="col-8">
                                        @include('components.widgets.category', ['post' =>$post])
                                        <h5><a href="{{ route('single.post', ['slug'=> $post->slug]) }}"
                                               class="btn-link stretched-link text-reset fw-bold">{{$post->title}}</a>
                                        </h5>
                                        <!-- Card info -->
                                        <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                            <li class="nav-item">
                                                <div class="nav-link">
                                                    <div class="d-flex align-items-center position-relative">
                                                        <div class="avatar avatar-xs">
                                                            <img class="avatar-img rounded-circle"
                                                                 src="{{asset('/assets/images/avatar/default.jpg/')}}"
                                                                 alt="avatar">
                                                        </div>
                                                        <span class="ms-3">by <a
                                                                href="{{ route('single.post', ['slug'=> $post->slug]) }}"
                                                                class="stretched-link text-reset btn-link">{{$post->owner->name}}</a></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item">{{$post->created_at->diffForHumans()}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                    @endforeach

                    <!-- Card item END -->
                    </div>
                </div> <!-- Row END -->
            </div>
        </div> <!-- Row END -->
    </div>
</section>
