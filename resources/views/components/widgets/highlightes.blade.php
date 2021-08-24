<section class="pt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Title -->
                <div class="mb-4">
                    <h2 class="m-0"><i class="bi bi-megaphone"></i> {{ trans('homePage.1') }}</h2>
{{--                    <p class="m-0">Latest breaking news, pictures, videos, and special reports</p>--}}
                </div>
                <div class="tiny-slider arrow-hover arrow-blur arrow-dark arrow-round mt-3">
                    <div class="tiny-slider-inner" data-autoplay="true" data-hoverpause="true" data-gutter="24"
                         data-arrow="true" data-dots="false" data-items-xl="4" data-items-lg="3"
                         data-items-md="3" data-items-sm="2" data-items-xs="1">


                    @foreach(\App\Models\Post::take(6)->orderByDesc('created_at')->get() as $post)
                        <!-- Card item START -->
                            <div class="card">
                                <!-- Card img -->
                                <div class="position-relative">
                                    <img class="card-img" src="{{'/uploads/' . $post->image}}" alt="Card image">
                                    <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                        <!-- Card overlay bottom -->
                                        @include('components.widgets.category', ['post'=> $post])
                                    </div>
                                </div>
                                <div class="card-body px-0 pt-3">
                                    <h5 class="card-title"><a href="{{ route('single.post', ['slug'=> $post->slug]) }}"
                                                              class="btn-link text-reset fw-bold">
                                            {{ \Illuminate\Support\Str::limit($post->title, $limit = 45, $end = '...') }}</a>
                                    </h5>
                                    <!-- Card info -->
                                    <ul class="nav nav-divider align-items-center">
                                        <li class="nav-item">
                                            <div class="nav-link">
                                                <div class="d-flex align-items-center position-relative">
                                                    <div class="avatar avatar-xs">
                                                        <img class="avatar-img rounded-circle"
                                                             src="{{asset('/assets/images/avatar/default.jpg')}}"
                                                             alt="avatar">
                                                    </div>
                                                    <span class="ms-3">by <a href="#"
                                                                             class="stretched-link text-reset btn-link">{{$post->owner->name}}</a></span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item">{{$post->created_at->diffForHumans()}}</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Card item END -->
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
