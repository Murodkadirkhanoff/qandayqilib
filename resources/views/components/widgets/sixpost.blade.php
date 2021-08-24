<section class="pt-4">
    <div class="container">
        <div class="row">
            <!-- Title -->
            <div class="col-md-12">
                <div class="mb-4 d-md-flex justify-content-between align-items-center">
                    <h2 class="m-0"><i class="bi bi-megaphone me-2"></i> {{trans('homePage.6')}}</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">

            @foreach(\App\Models\Post::take(3)->inRandomOrder()->get() as $post)
                <!-- Card item START -->
                    <div class="card mb-3 mb-sm-4">
                        <div class="row g-3">
                            <div class="col-4">
                                <img class="rounded-3" src="{{asset('/uploads/' . $post->image)}}" alt="">
                            </div>
                            <div class="col-8">
                                @include('components.widgets.category',['post'=> $post])
                                <h4><a href="{{ route('single.post', ['slug'=> $post->slug]) }}"
                                       class="btn-link stretched-link text-reset fw-bold">{{$post->title}}</a></h4>
                                <!-- Card info -->
                                <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                    <li class="nav-item">
                                        <div class="nav-link">
                                            <div class="d-flex align-items-center position-relative">
                                                <div class="avatar avatar-xs">
                                                    <img class="avatar-img rounded-circle"
                                                         src="{{asset('assets/images/avatar/default.jpg')}}"
                                                         alt="avatar">
                                                </div>
                                                <span class="ms-3">by <a href="#"
                                                                         class="stretched-link text-reset btn-link">{{$post->owner->name}}</a></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item">{{$post->created_at}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->
                @endforeach

            </div>
            <div class="col-lg-6">
            @foreach(\App\Models\Post::take(3)->inRandomOrder()->get() as $post)
                <!-- Card item START -->
                    <div class="card mb-3 mb-sm-4">
                        <div class="row g-3">
                            <div class="col-4">
                                <img class="rounded-3" src="{{asset('/uploads/' . $post->image)}}" alt="">
                            </div>
                            <div class="col-8">
                                @include('components.widgets.category',['post'=> $post])
                                <h4><a href="{{ route('single.post', ['slug'=> $post->slug]) }}"
                                       class="btn-link stretched-link text-reset fw-bold">{{$post->title}}</a></h4>
                                <!-- Card info -->
                                <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                    <li class="nav-item">
                                        <div class="nav-link">
                                            <div class="d-flex align-items-center position-relative">
                                                <div class="avatar avatar-xs">
                                                    <img class="avatar-img rounded-circle"
                                                         src="{{asset('assets/images/avatar/default.jpg')}}"
                                                         alt="avatar">
                                                </div>
                                                <span class="ms-3">by <a href="#"
                                                                         class="stretched-link text-reset btn-link">{{$post->owner->name}}</a></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item">{{$post->created_at}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->
                @endforeach
            </div>
        </div>
    </div>
</section>
