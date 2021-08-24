<section class="position-relative pt-0">
    <div class="container" data-sticky-container>
        <div class="row">
            <!-- Main Post START -->
            <div class="col-lg-12">
            @foreach ($posts as $item)
                <!-- Card item START -->
                    <div class="card mb-5">
                        <div class="row">
                            <div class="col-md-5">

                                @if ($item->image != null)
                                    <img class="rounded-3 post-image"
                                         src="{{ url('uploads/' . $item->image) }}" alt="Card image">
                                @else
                                    <img class="rounded-3  post-image-default"
                                         src="{{ asset('/uploads/no_image.jpg') }}" alt="Card image">
                                @endif
                            </div>
                            <div class="col-md-7 mt-3 mt-md-0">
                                @include('components.widgets.category', ['post'=> $item])
                                <h3><a href="post-single-2.html"
                                       class="btn-link stretched-link text-reset">{{ $item->title }}</a></h3>
                                <p>{{ \Illuminate\Support\Str::limit($item->description, $limit = 200, $end = '...') }} </p>
                                <!-- Card info -->

                                <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                    <li class="nav-item">
                                        <div class="nav-link">
                                            <div class="d-flex align-items-center position-relative">
                                                <div class="avatar avatar-xs">
                                                    <img class="avatar-img rounded-circle"
                                                         src="{{ asset('assets/images/avatar/01.jpg') }}"
                                                         alt="avatar">
                                                </div>
                                                <span class="ms-3">by <a href="#"
                                                                         class="stretched-link text-reset btn-link">{{ $item->owner->name }}</a></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item">{{ $item->created_at }}</li>

                                    <li class="nav-item">
                                        @php
                                            $status = getStatus($item->status)
                                        @endphp
                                        <a href="#" class=" mb-2 {{ $status['class'] }}"><i
                                                class="fas fa-circle me-2 small fw-bold"></i>{{ $status['text']  }}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->
                @endforeach
                {{ $posts->links() }}
            </div>
            <!-- Main Post END -->
        </div> <!-- Row end -->
    </div>
</section>

