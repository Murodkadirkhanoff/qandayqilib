<div class="col-xxl-10 mx-auto rounded-3 overflow-hidden">
    <div class="tiny-slider arrow-hover arrow-blur arrow-round position-relative">
        <div class="tiny-slider-inner" data-autoplay="false" data-hoverpause="true" data-gutter="2"
             data-arrow="false" data-dots="true" data-items="1">
            <!-- Slide item -->
            @php
                $posts = \App\Models\Post::take(3)->inRandomOrder()->get()
            @endphp
            @foreach($posts as $post)
                <div class="card bg-dark-overlay-3 rounded-0 h-400 h-lg-500 h-xl-700 position-relative overflow-hidden"
                     style="background-image:url({{'/uploads/'. $post->image}}); background-position: center left; background-size: cover;">
                    <!-- Card Image overlay -->
                    <div class="card-img-overlay rounded-0 d-flex align-items-center">
                        <div class="container px-3 my-auto">
                            <div class="row">
                                <div class="col-lg-7">
                                    <!-- Card category -->
                                @include('components.widgets.category', ['post'=> $post])
                                    <!-- Card title -->
                                    <h2 class="text-white display-5"><a href="{{ route('single.post', ['slug'=> $post->slug]) }}"
                                                                        class="btn-link text-reset fw-normal">{{$post->title}}</a>
                                    </h2>
                                    <p class="text-white">{{ \Illuminate\Support\Str::limit($post->description, $limit = 100, $end = '...') }}</p>
                                    <!-- Card info -->
                                    <ul
                                        class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
                                        <li class="nav-item">
                                            <div class="nav-link">
                                                <div
                                                    class="d-flex align-items-center text-white position-relative">
                                                    <div class="avatar avatar-sm">
                                                        <img class="avatar-img rounded-circle"
                                                             src="{{asset('assets/images/avatar/default.jpg')}}"
                                                             alt="avatar">
                                                    </div>
                                                    <span class="ms-3">Автор: <a href="#"
                                                                                 class="stretched-link text-reset btn-link">{{$post->owner->name}}</a></span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item">{{$post->created_at}}</li>
                                        <li class="nav-item">{{minute_to_read($post)}} на чтение</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>

        <!-- Custom thumb START -->
        <div class="col-xl-4 custom-thumb pe-5 position-absolute top-50 end-0 translate-middle-y d-none d-xxl-block"
             id="custom-thumb">

            @foreach($posts as $post)
                <div class="row align-items-center g-3 py-2">
                    <div class="col-auto">
                        <div class="avatar avatar-lg">
                            <img class="avatar-img rounded-circle"
                                 src="{{'/uploads/' . $post->image}}" alt="avatar">
                        </div>
                    </div>
                    <div class="col-8">
                        <h4 class="fw-normal text-truncate mb-1">{{$post->title}}</h4>
                        <p class="text-truncate d-block col-11 small mb-0">{{$post->description}}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Custom thumb END -->
    </div>
</div>
