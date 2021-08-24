<div class="col-sm-6">
    <div class="card">
        <!-- Card img -->
        <div class="position-relative">

            @if ($item->image != null)
                <img class="card-img "
                     src="{{ url('uploads/' . $item->image) }}" alt="Card image">
            @else
                <img class="card-img post-grid-default"
                     src="{{ asset('/uploads/no_image.jpg') }}" alt="Card image">
            @endif
            <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                <!-- Card overlay bottom -->
                <div class="w-100 mt-auto">
                    <!-- Card category -->
                    @include('components.widgets.category', ['post'=> $item])
                </div>
            </div>
        </div>
        <div class="card-body px-0 pt-3">
            <h4 class="card-title"><a href="{{route('single.post',['slug'=> $item->slug])}}"
                                      class="btn-link text-reset fw-bold">{{ $item->title }}</a>
            </h4>
            <p class="card-text">{{ \Illuminate\Support\Str::limit($item->description, $limit = 200, $end = '...') }}</p>
            <!-- Card info -->
            <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                <li class="nav-item">
                    <div class="nav-link">
                        <div class="d-flex align-items-center position-relative">
                            <div class="avatar avatar-xs">
                                <img class="avatar-img rounded-circle"
                                     src="{{ asset('assets/images/avatar/default.jpg') }}" alt="avatar">
                            </div>
                            <span class="ms-3">автор: <a href="#"
                                                     class="stretched-link text-reset btn-link">{{$item->owner->name}}</a></span>
                        </div>
                    </div>
                </li>
                <li class="nav-item">{{$item->created_at->diffForHumans()}}</li>
            </ul>
        </div>
    </div>
</div>
