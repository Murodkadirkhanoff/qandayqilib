<section class=" position-relative pt-0 pb-0">
    <div class="container" data-sticky-container>
        <div class="row">
            <div class="col-12 mb-3">
                <div class="bg-light-soft pb-md-0 rounded-3 text-center">
                    <h2 class="text-dark-soft">{{trans('homePage.7')}}</h2>
                    <nav class="d-flex justify-content-center" aria-label="breadcrumb">
                        <ol class="breadcrumb fs-2 breadcrumb-dots m-0">
                            <li class="breadcrumb-item"><a href="{{ route('home.page') }}"><i
                                        class="bi bi-house me-1"></i>
                                    {{trans('menu.home')}}</a></li>
                            <li class="breadcrumb-item active">{{trans('homePage.7')}}</li>
                            @if($category_filter)
                                <li class="breadcrumb-item active">{{\App\Models\Category::find($category_filter)->name}}</li>@endif
                        </ol>
                    </nav>
                </div>
            </div>
            @if($_sub_category_filter != null)
                <nav class="d-flex justify-content-center" aria-label="breadcrumb"
                     style="margin-bottom: 15px; margin-top: 2px">
                    <ol class="breadcrumb breadcrumb-dots m-0">
                        @foreach($_sub_category_filter as $category)
                            <li class="breadcrumb-item active" style="font-size: 15px;"><a
                                    wire:click="setsubcat({{$category->id}})" href="#">{{$category->name}}</a></li>
                        @endforeach
                    </ol>
                </nav>
        @endif



        <!-- Main Post START -->
            <div class="col-lg-9">
                {{--                    @if($filters != null)--}}
                {{--                        <h3 class="text-center lead mb-5"><i class="bi bi-filter me-2"></i>{{trans('homePage.9')}}</h3>--}}
                {{--                    @endif--}}

                <div class="row gy-4">

                @include('components.post_list_grid',['posts'=>$posts])
                <!-- Card item END -->
                    <!-- Load more START -->
                {{ $posts->links('vendor.livewire.bootstrap') }}
                <!-- Load more END -->
                </div>
            </div>
            <!-- Main Post END -->

            <!-- Sidebar START -->
            <div class="col-lg-3 mt-5 mt-lg-0">
                <div data-sticky data-margin-top="80" data-sticky-for="767">

                    <div class="filter border p-2  border-gray-100">


                        <h2 class="text-reset"><i class="bi bi-filter me-2"></i>{{trans('homePage.12')}}</h2>


                        <div class="row mt-2 g-2">
                            @foreach($categories as $category)
                                @php
                                    $color = randomCategoryColor();
                                @endphp
                                <div
                                    class="d-flex justify-content-between align-items-center border-primary {{$color[0]}} rounded p-2 position-relative">
                                    <h6 class="m-0 {{$color[1]}}">{{$category->name}}</h6>
                                    <span href="#" wire:click="setcat({{$category->id}})"
                                          style="cursor: pointer"
                                          class="badge border-primary {{$color[2]}} {{$color[3]}} stretched-link">{{$category->posts->count()}}</span>
                                </div>
                            @endforeach

                        </div>


                        <div class="list-group list-group-flush my-3 border p-2 border-gray-300">
                            <form>
                                <div class="mb-3">
                                    <label for="date_filter" class="form-label"><i
                                            class="bi bi-calendar2-date me-2"></i>{{trans('homePage.13')}}</label>
                                    <input type="date" wire:model="date_filter" class="form-control"
                                           id="date_filter">
                                </div>
                            </form>
                        </div>

                        <div>
                            <button class="btn btn-link link-primary" wire:click="resetFields"><i
                                    class="bi bi-clipboard-x me-2"></i>{{trans('homePage.11')}}
                            </button>
                        </div>

                    </div>


                    @include('components.trending_topics')
                    @include('components.recent_posts')
                    @include('components.ads_widget')
                </div>
            </div>
            <!-- Sidebar END -->
        </div> <!-- Row end -->
    </div>
</section>
