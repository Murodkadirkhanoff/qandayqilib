<x-main>

    <!-- **************** MAIN CONTENT START **************** -->
    <main>


        <section class="py-2">
            <div class="container">
                <div class="row g-0">
                    <div class="col-12 bg-primary-soft p-2 rounded">
                        <div class="d-sm-flex align-items-center text-center text-sm-start">
                            <!-- Title -->
                            <div class="me-3">
                                <span class="badge bg-primary p-2 px-3">Trending:</span>
                            </div>
                            <!-- Slider -->
                            <div class="tiny-slider arrow-end arrow-xs arrow-white arrow-round arrow-md-none">
                                <div class="tiny-slider-inner"
                                     data-autoplay="true"
                                     data-hoverpause="true"
                                     data-gutter="0"
                                     data-arrow="true"
                                     data-dots="false"
                                     data-items="1">
                                    <!-- Slider items -->
                                    @foreach(\App\Models\Post::inRandomOrder()->take(4)->get() as $post)
                                        <div><a href="{{route('single.post',['slug'=> $post->slug])}}"
                                                class="text-reset btn-link">{{$post->title}}</a></div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Row END -->
            </div>
        </section>


        <!-- =======================
    Main hero START -->
        {{--        <section class="p-0">--}}
        {{--            <div class="container-fluid">--}}
        {{--                <div class="row g-0">--}}
        {{--                    @include('components.widgets.carousel')--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </section>--}}


        {{--        <section class="pt-0 card-grid">--}}
        {{--            <div class="container">--}}
        {{--                <div class="row">--}}
        {{--                    <div class="col-12">--}}
        {{--                        <div--}}
        {{--                            class="tiny-slider arrow-hover arrow-blur arrow-white arrow-round rounded-3 overflow-hidden">--}}
        {{--                            <div class="tiny-slider-inner"--}}
        {{--                                 data-autoplay="true"--}}
        {{--                                 data-hoverpause="true"--}}
        {{--                                 data-gutter="0"--}}
        {{--                                 data-arrow="true"--}}
        {{--                                 data-dots="false"--}}
        {{--                                 data-items="1">--}}
        {{--                                <!-- Slide 1 -->--}}
        {{--                                <div class="card card-overlay-bottom card-bg-scale h-400 h-sm-500 h-md-600 rounded-0"--}}
        {{--                                     style="background-image:url(assets/images/blog/16by9/04.jpg); background-position: center left; background-size: cover;">--}}
        {{--                                    <!-- Card Image overlay -->--}}
        {{--                                    <div class="card-img-overlay d-flex align-items-center p-3 p-sm-5">--}}
        {{--                                        <div class="w-100 mt-auto">--}}
        {{--                                            <div class="col-md-10 col-lg-7">--}}
        {{--                                                <!-- Card category -->--}}
        {{--                                                <a href="#" class="badge bg-primary mb-2"><i--}}
        {{--                                                        class="fas fa-circle me-2 small fw-bold"></i>Business</a>--}}
        {{--                                                <!-- Card title -->--}}
        {{--                                                <h2 class="text-white display-5"><a href="post-single-4.html"--}}
        {{--                                                                                    class="btn-link text-reset fw-normal">Never--}}
        {{--                                                        underestimate the influence of social media</a></h2>--}}
        {{--                                                <p class="text-white">For who thoroughly her boy estimating conviction.--}}
        {{--                                                    Removed demands expense account in outward tedious do.</p>--}}
        {{--                                                <!-- Card info -->--}}
        {{--                                                <ul class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">--}}
        {{--                                                    <li class="nav-item">--}}
        {{--                                                        <div class="nav-link">--}}
        {{--                                                            <div--}}
        {{--                                                                class="d-flex align-items-center text-white position-relative">--}}
        {{--                                                                <div class="avatar avatar-sm">--}}
        {{--                                                                    <img class="avatar-img rounded-circle"--}}
        {{--                                                                         src="assets/images/avatar/01.jpg" alt="avatar">--}}
        {{--                                                                </div>--}}
        {{--                                                                <span class="ms-3">by <a href="#"--}}
        {{--                                                                                         class="stretched-link text-reset btn-link">Carolyn</a></span>--}}
        {{--                                                            </div>--}}
        {{--                                                        </div>--}}
        {{--                                                    </li>--}}
        {{--                                                    <li class="nav-item">Jan 26, 2021</li>--}}
        {{--                                                    <li class="nav-item">3 min read</li>--}}
        {{--                                                </ul>--}}
        {{--                                            </div>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}
        {{--                                <!-- Slide 2 -->--}}
        {{--                                <div class="card card-overlay-bottom card-bg-scale h-400 h-sm-500 h-md-600 rounded-0"--}}
        {{--                                     style="background-image:url(assets/images/blog/16by9/03.jpg); background-position: center left; background-size: cover;">--}}
        {{--                                    <!-- Card Image overlay -->--}}
        {{--                                    <div class="card-img-overlay d-flex align-items-center p-3 p-sm-5">--}}
        {{--                                        <div class="w-100 mt-auto">--}}
        {{--                                            <div class="col-md-10 col-lg-7">--}}
        {{--                                                <!-- Card category -->--}}
        {{--                                                <a href="#" class="badge bg-danger mb-2"><i--}}
        {{--                                                        class="fas fa-circle me-2 small fw-bold"></i>Lifestyle</a>--}}
        {{--                                                <!-- Card title -->--}}
        {{--                                                <h2 class="text-white display-5"><a href="post-single-4.html"--}}
        {{--                                                                                    class="btn-link text-reset fw-normal">This--}}
        {{--                                                        is why this year will be the year of startups</a></h2>--}}
        {{--                                                <p class="text-white">Particular way thoroughly unaffected projection--}}
        {{--                                                    favorable Mrs can be projecting own. </p>--}}
        {{--                                                <!-- Card info -->--}}
        {{--                                                <ul class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">--}}
        {{--                                                    <li class="nav-item">--}}
        {{--                                                        <div class="nav-link">--}}
        {{--                                                            <div--}}
        {{--                                                                class="d-flex align-items-center text-white position-relative">--}}
        {{--                                                                <div class="avatar avatar-sm">--}}
        {{--                                                                    <img class="avatar-img rounded-circle"--}}
        {{--                                                                         src="assets/images/avatar/04.jpg" alt="avatar">--}}
        {{--                                                                </div>--}}
        {{--                                                                <span class="ms-3">by <a href="#"--}}
        {{--                                                                                         class="stretched-link text-reset btn-link">Louis</a></span>--}}
        {{--                                                            </div>--}}
        {{--                                                        </div>--}}
        {{--                                                    </li>--}}
        {{--                                                    <li class="nav-item">Nov 15, 2021</li>--}}
        {{--                                                    <li class="nav-item">5 min read</li>--}}
        {{--                                                </ul>--}}
        {{--                                            </div>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div> <!-- Row END -->--}}
        {{--            </div>--}}
        {{--        </section>--}}


        <section class="pt-0 card-grid">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div
                            class="tiny-slider arrow-hover arrow-blur arrow-white arrow-round rounded-3 overflow-hidden">
                            <div class="tiny-slider-inner"
                                 data-autoplay="true"
                                 data-hoverpause="true"
                                 data-gutter="0"
                                 data-arrow="true"
                                 data-dots="false"
                                 data-items="1">
                            @foreach(\App\Models\Post::inRandomOrder()->take(4)->get() as $post)
                                <!-- Slide 2 -->
                                    <div
                                        class="card card-overlay-bottom card-bg-scale h-400 h-sm-500 h-md-600 rounded-0"
                                        style="background-image:url({{url('uploads/' . $post->image)}}); background-position: center left; background-size: cover;">
                                        <!-- Card Image overlay -->
                                        <div class="card-img-overlay d-flex align-items-center p-3 p-sm-5">
                                            <div class="w-100 mt-auto">
                                                <div class="col-md-10 col-lg-7">
                                                    <!-- Card category -->
                                                @include('components.widgets.category', ['post'=> $post])
                                                <!-- Card title -->
                                                    <h2 class="text-white display-5"><a
                                                            href="{{route('single.post',['slug'=> $post->slug])}}"
                                                            class="btn-link text-reset fw-normal">{{$post->title}}</a>
                                                    </h2>
                                                    <p class="text-white">{{$post->description}}</p>
                                                    <!-- Card info -->
                                                    <ul class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
                                                        <li class="nav-item">
                                                            <div class="nav-link">
                                                                <div
                                                                    class="d-flex align-items-center text-white position-relative">
                                                                    <div class="avatar avatar-sm">
                                                                        <img class="avatar-img rounded-circle"
                                                                             src="{{url('uploads/' . $post->image)}}"
                                                                             alt="avatar">
                                                                    </div>
                                                                    <span class="ms-3">by <a href="#"
                                                                                             class="stretched-link text-reset btn-link">{{$post->owner->name}}</a></span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="nav-item">{{$post->created_at}}</li>
                                                        <li class="nav-item">{{minute_to_read($post)}}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div> <!-- Row END -->
            </div>
        </section>

        <!-- =======================
    Main hero END -->

        <!-- =======================
    Highlights START -->

        @include('components.widgets.highlightes')


        {{--    @include('components.widgets.advertisement')--}}

    <!-- =======================
    Top highlights START -->
        @include('components.widgets.top_highlightes',['category_id'=> 3, 'heading'=>trans('homePage.2')])
    <!-- =======================
    Top highlights END -->

        <!-- =======================
    Trending topics START -->
        <section class="p-0">
            <div class="container">
                <div class="row g-0">
                    <div class="col-12 bg-light p-2 p-sm-4 rounded-3">
                        <!-- Title -->
                        <div class="d-sm-flex justify-content-between align-items-center mb-4">
                            <h2 class="m-0">{{trans('homePage.3')}}</h2>
                            <a href="{{route('posts.list.page')}}" class="text-body text-primary-hover"><u>{{trans('homePage.4')}}</u></a>
                        </div>
                        <!-- Slider -->
                        <div class="tiny-slider arrow-hover arrow-dark arrow-blur arrow-round">
                            <div class="tiny-slider-inner" data-autoplay="false" data-hoverpause="true" data-gutter="24"
                                 data-arrow="true" data-dots="false" data-items-xl="5" data-items-lg="4"
                                 data-items-md="3" data-items-sm="2" data-items-xs="2">


                            @foreach(\App\Models\Post::take(5)->inRandomOrder()->get() as $post)
                                <!-- Category item -->
                                    <div>
                                        <div class="card card-overlay-bottom card-img-scale">
                                            <img class="card-img" src="{{asset('uploads/'. $post->image)}}"
                                                 alt="card image">
                                            <div class="card-img-overlay d-flex px-3 px-sm-5">
                                                <h5 class="mt-auto mx-auto">
                                                    <a href="{{ route('single.post', ['slug'=> $post->slug]) }}"
                                                       class="stretched-link btn-link fw-bold text-white">{{$post->subcategory->name}}</a>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach
                            </div>
                        </div> <!-- Slider END -->
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
    Trending topics END -->

        @include('components.widgets.top_highlightes',['category_id'=> 1, 'heading'=>trans('homePage.18')])


        @include('components.widgets.sixpost')

    </main>
</x-main>
