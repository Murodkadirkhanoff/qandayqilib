<x-main>

    <x-slot name="keywords">
        @if($post->tags != null)
            {{ implode (", ", $post->tags) }} {{$post->title}} {{ ', qanday, qilib, uz, qandayqilib' }}
        @endif
    </x-slot>

    <x-slot name="description">
        {{$post->description}}
    </x-slot>
    <main>
        <!-- Divider -->
        <div class="border-bottom border-primary border-1 opacity-1"></div>

        <!-- =======================
        Inner intro START -->
        <section class="pb-3 pb-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        @include('components.widgets.category', ['post'=>$post])
                        <h1>{{$post->title}}</h1>
                    </div>
                    {{--                    <p class="lead">{{$post->description}}</p>--}}
                </div>
            </div>
        </section>
        <!-- =======================
        Inner intro END -->

        <!-- =======================
        Main START -->
        <section class="pt-0">
            <div class="container position-relative" data-sticky-container>
                <div class="row">
                    <!-- Left sidebar START -->
                    <div class="col-lg-2">
                        <div class="text-start text-lg-center mb-5" data-sticky data-margin-top="80"
                             data-sticky-for="991">
                            <!-- Author info -->
                            <div class="position-relative">
                                <div class="avatar avatar-xl">
                                    <img class="avatar-img rounded-circle"
                                         src="{{asset('assets/images/avatar/default.jpg')  }}" alt="avatar">
                                </div>
                                <a href="#" class="h5 stretched-link mt-2 mb-0 d-block"></a>
                                <p>{{trans('post.12')}}</p>
                            </div>
                            <hr class="d-none d-lg-block">
                            <!-- Card info -->
                            <ul class="list-inline list-unstyled">
                                <li class="list-inline-item d-lg-block my-lg-2">{{$post->created_at->format('m-d-Y H:i:s')}}</li>
                                <li class="list-inline-item d-lg-block my-lg-2">{{trans('post.15')}}
                                    : {{ minute_to_read($post) }} </li>
                                <li class="list-inline-item d-lg-block my-lg-2"><a href="#" class="text-body"><i
                                            class="far fa-heart me-1"></i></a> 266
                                </li>
                                <li class="list-inline-item d-lg-block my-lg-2"><i
                                        class="far fa-eye me-1"></i> {{$post->views}}
                                    {{trans('post.11')}}
                                </li>
                            </ul>
                            <!-- Tags -->
                            <ul class="list-inline text-primary-hover mt-0 mt-lg-3">
                                @if($post->tags != null)
                                    @foreach($post->tags as $tag)
                                        <li class="list-inline-item">
                                            <a class="text-body" href="#">#{{$tag}}</a>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                    <!-- Left sidebar END -->
                    <!-- Main Content START -->
                    <div class="col-lg-7 mb-5">


                        <p><span class="dropcap">{{mb_substr($post->description, 0, 1) }}</span>
                            {{mb_substr($post->description, 1) }}
                        </p>


                        <img src="{{asset('/uploads/' . $post->image)}}" alt="{{$post->title}}">

                        <p>{!! $post->body !!}</p>

                    {{--@dd(substr(strip_tags($post->body), 0, 1))--}}


                    <!-- Divider -->
                        <hr class="my-5">


                        <div class="row g-0">
                            <div
                                class="col-sm-6 bg-primary-soft p-4 position-relative border-end border-1 rounded-start">
                                <span><i class="bi bi-arrow-left me-3 rtl-flip"></i>Предыдущий пост</span>
                                <h5 class="m-0"><a href="{{route('single.post',['slug'=> $prev->slug])}}"
                                                   class="stretched-link btn-link text-reset">{{$prev->title}}</a></h5>
                            </div>
                            <div class="col-sm-6 bg-primary-soft p-4 position-relative text-sm-end rounded-end">
                                <span>Следующий пост
                                    <i class="bi bi-arrow-right ms-3 rtl-flip"></i></span>
                                <h5 class="m-0"><a href="{{route('single.post',['slug'=> $next->slug])}}"
                                                   class="stretched-link btn-link text-reset">{{$next->title}}</a></h5>
                            </div>
                        </div>

                        <!-- Related post START -->
                        <div class="mt-5">
                            <h2 class="my-3"><i class="bi bi-symmetry-vertical me-2"></i>Связанный пост</h2>
                            <div class="tiny-slider arrow-hover arrow-blur arrow-white arrow-round">
                                <div class="tiny-slider-inner"
                                     data-autoplay="true"
                                     data-hoverpause="true"
                                     data-gutter="24"
                                     data-arrow="true"
                                     data-dots="false"
                                     data-items-xl="2"
                                     data-items-xs="1">


                                @foreach(\App\Models\Post::where('category_id', $post->category_id)->take(4)->get() as $related_post)
                                    <!-- Card item START -->
                                        <div class="card">
                                            <!-- Card img -->
                                            <div class="position-relative">
                                                <img class="card-img" src="/uploads/{{$related_post->image}}"
                                                     alt="Card image">
                                                <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                                    <!-- Card overlay bottom -->
                                                    @include('components.widgets.category', ['post'=>$related_post])
                                                </div>
                                            </div>
                                            <div class="card-body px-0 pt-3">
                                                <h5 class="card-title"><a
                                                        href="{{route('single.post',['slug'=> $related_post->slug])}}"
                                                        class="btn-link text-reset stretched-link fw-bold">{{$related_post->title}}</a>
                                                </h5>
                                                <!-- Card info -->
                                                <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                                    <li class="nav-item">
                                                        <div class="nav-link">
                                                            <div class="d-flex align-items-center position-relative">
                                                                <div class="avatar avatar-xs">
                                                                    <img class="avatar-img rounded-circle"
                                                                         src="{{asset('assets/images/avatar/07.jpg')}}"
                                                                         alt="avatar">
                                                                </div>
                                                                <span class="ms-3">by <a href="#"
                                                                                         class="stretched-link text-reset btn-link">{{$related_post->owner->name}}</a></span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="nav-item">{{$related_post->created_at}}</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Card item END -->
                                    @endforeach
                                </div>
                            </div> <!-- Slider END -->
                        </div>
                        <!-- Related post END -->

                        <!-- Divider -->
                        <hr>


                        <!-- Divider -->
                        <hr>

                        <!-- Comments START -->
                    {{--                        <div>--}}
                    {{--                            <h3>5 comments</h3>--}}
                    {{--                            <!-- Comment level 1-->--}}
                    {{--                            <div class="my-4 d-flex">--}}
                    {{--                                <img class="avatar avatar-md rounded-circle float-start me-3"--}}
                    {{--                                     src="assets/images/avatar/01.jpg" alt="avatar">--}}
                    {{--                                <div>--}}
                    {{--                                    <div class="mb-2">--}}
                    {{--                                        <h5 class="m-0">Allen Smith</h5>--}}
                    {{--                                        <span class="me-3 small">June 11, 2021 at 6:01 am </span>--}}
                    {{--                                        <a href="#" class="text-body fw-normal">Reply</a>--}}
                    {{--                                    </div>--}}
                    {{--                                    <p>Satisfied conveying a dependent contented he gentleman agreeable do be. Warrant--}}
                    {{--                                        private blushes removed an in equally totally if. Delivered dejection necessary--}}
                    {{--                                        objection do Mr prevailed. Mr feeling does chiefly cordial in do. </p>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <!-- Comment children level 2 -->--}}
                    {{--                            <div class="my-4 d-flex ps-2 ps-md-3">--}}
                    {{--                                <img class="avatar avatar-md rounded-circle float-start me-3"--}}
                    {{--                                     src="assets/images/avatar/02.jpg" alt="avatar">--}}
                    {{--                                <div>--}}
                    {{--                                    <div class="mb-2">--}}
                    {{--                                        <h5 class="m-0">Louis Ferguson</h5>--}}
                    {{--                                        <span class="me-3 small">June 11, 2021 at 6:55 am </span>--}}
                    {{--                                        <a href="#" class="text-body fw-normal">Reply</a>--}}
                    {{--                                    </div>--}}
                    {{--                                    <p>Water timed folly right aware if oh truth. Imprudence attachment him his for--}}
                    {{--                                        sympathize. Large above be to means. Dashwood does provide stronger is. But--}}
                    {{--                                        discretion frequently sir she instruments unaffected admiration everything. </p>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <!-- Comment children level 3 -->--}}
                    {{--                            <div class="my-4 d-flex ps-3 ps-md-5">--}}
                    {{--                                <img class="avatar avatar-md rounded-circle float-start me-3"--}}
                    {{--                                     src="assets/images/avatar/01.jpg" alt="avatar">--}}
                    {{--                                <div>--}}
                    {{--                                    <div class="mb-2">--}}
                    {{--                                        <h5 class="m-0">Allen Smith</h5>--}}
                    {{--                                        <span class="me-3 small">June 11, 2021 at 7:10 am </span>--}}
                    {{--                                        <a href="#" class="text-body fw-normal">Reply</a>--}}
                    {{--                                    </div>--}}
                    {{--                                    <p>Meant balls it if up doubt small purse. </p>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <!-- Comment level 2 -->--}}
                    {{--                            <div class="my-4 d-flex ps-2 ps-md-3">--}}
                    {{--                                <img class="avatar avatar-md rounded-circle float-start me-3"--}}
                    {{--                                     src="assets/images/avatar/03.jpg" alt="avatar">--}}
                    {{--                                <div>--}}
                    {{--                                    <div class="mb-2">--}}
                    {{--                                        <h5 class="m-0">Frances Guerrero</h5>--}}
                    {{--                                        <span class="me-3 small">June 14, 2021 at 12:35 pm </span>--}}
                    {{--                                        <a href="#" class="text-body fw-normal">Reply</a>--}}
                    {{--                                    </div>--}}
                    {{--                                    <p>Required his you put the outlived answered position. A pleasure exertion if--}}
                    {{--                                        believed provided to. All led out world this music while asked. Paid mind even--}}
                    {{--                                        sons does he door no. Attended overcame repeated it is perceived Marianne in. I--}}
                    {{--                                        think on style child of. Servants moreover in sensible it ye possible. </p>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <!-- Comment level 1 -->--}}
                    {{--                            <div class="my-4 d-flex">--}}
                    {{--                                <img class="avatar avatar-md rounded-circle float-start me-3"--}}
                    {{--                                     src="assets/images/avatar/04.jpg" alt="avatar">--}}
                    {{--                                <div>--}}
                    {{--                                    <div class="mb-2">--}}
                    {{--                                        <h5 class="m-0">Judy Nguyen</h5>--}}
                    {{--                                        <span class="me-3 small">June 18, 2021 at 11:55 am </span>--}}
                    {{--                                        <a href="#" class="text-body fw-normal">Reply</a>--}}
                    {{--                                    </div>--}}
                    {{--                                    <p>Fulfilled direction use continual set him propriety continued. Saw met applauded--}}
                    {{--                                        favorite deficient engrossed concealed and her. Concluded boy perpetual old--}}
                    {{--                                        supposing. Farther related bed and passage comfort civilly. </p>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}

                    {{--                        </div>--}}
                    <!-- Comments END -->
                        <!-- Reply START -->
                        <div>
                            <h3>Оставьте ответ</h3>
                            <small>Ваш электронный адрес не будет опубликован. Обязательные поля помечены *</small>
                            <form class="row g-3 mt-2">
                                <div class="col-md-6">
                                    <label class="form-label">Имя *</label>
                                    <input type="text" class="form-control" aria-label="First name">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Email *</label>
                                    <input type="email" class="form-control">
                                </div>
                                <!-- custom checkbox -->
                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Сохраните мое имя и адрес
                                            электронной почты в
                                            этот браузер в следующий раз комментирую.</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Ваш комментарий *</label>
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Оставьте комментарий</button>
                                </div>
                            </form>
                        </div>
                        <!-- Reply END -->
                    </div>
                    <!-- Main Content END -->

                    <!-- Right sidebar START -->
                    <div class="col-lg-3">
                        <div data-sticky data-margin-top="80" data-sticky-for="991">
                            <h4>Поделиться</h4>
                            <ul class="nav text-white-force">
                                <li class="nav-item">
                                    <a class="nav-link icon-md rounded-circle me-2 mb-2 p-0 fs-5 bg-facebook" href="#">
                                        <i class="fab fa-facebook-square align-middle"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link icon-md rounded-circle me-2 mb-2 p-0 fs-5 bg-twitter" href="#">
                                        <i class="fab fa-twitter-square align-middle"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link icon-md rounded-circle me-2 mb-2 p-0 fs-5 bg-linkedin" href="#">
                                        <i class="fab fa-linkedin align-middle"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link icon-md rounded-circle me-2 mb-2 p-0 fs-5 bg-pinterest" href="#">
                                        <i class="fab fa-pinterest align-middle"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link icon-md rounded-circle me-2 mb-2 p-0 fs-5 bg-primary" href="#">
                                        <i class="far fa-envelope align-middle"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- Advertisement -->
                            <div class="mt-4">
                                <a href="#" class="d-block card-img-flash">
                                    <img src="assets/images/adv.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Right sidebar END -->
                </div>
            </div>
        </section>
        <!-- =======================
        Main END -->

        <!-- =======================
        Sticky post START -->
        <div class="sticky-post bg-light border p-4 mb-5 text-sm-end rounded d-none d-xxl-block">
            <div class="d-flex align-items-center">
                <!-- Title -->
                <div class="me-3">
                    <span>Next post<i class="bi bi-arrow-right ms-3 rtl-flip"></i></span>
                    <h6 class="m-0"><a href="javascript:void(0)" class="stretched-link btn-link text-reset">Bad habits
                            that people in the industry need to quit</a></h6>
                </div>
                <!-- image -->
                <div class="col-4 d-none d-md-block">
                    <img src="assets/images/blog/4by3/05.jpg" alt="Image">
                </div>
            </div>
        </div>
        <!-- =======================
        Sticky post END -->

    </main>
</x-main>


