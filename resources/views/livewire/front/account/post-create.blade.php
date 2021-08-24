<div class="container">
    <form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
        @csrf
        <x-jet-validation-errors class="mb-4"/>
        <div class="row g-0">


            <div class="d-flex justify-content-between flex-row bd-highlight mb-3">
                <div class="p-2 bd-highlight fs-4">
                    {{trans('post.1')}}
                </div>
                <a href="{{ route('posts.index') }}" class="p-2 bd-highlight btn-link">{{trans('post.3')}}</a>
            </div>


            <div class="col-md-12 col-lg-8 col-sm-12 p-2 rounded">
                <div class="my-2">
                    <label class="form-label" for="mytextarea">{{trans('post.2')}}</label>
                    <textarea id="mytextarea" style="height: 115vh" name="body"></textarea>
                </div>
            </div>

            <div class="col-md-12 col-lg-4 col-sm-12  p-2 rounded">
                <div class="my-4">
                    <label class="form-label" for="title">{{trans('post.4')}}</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="{{trans('post.4')}}">
                </div>

                <div class="my-4">
                    <label class="form-label" for="description">{{trans('post.5')}}</label>
                    <textarea class="form-control" name="description" rows="5" id="description"
                              placeholder="{{trans('post.5')}}"></textarea>
                </div>

                {{--                <div class="my-4">--}}
                {{--                    <label class="form-label" for="category_id">Категория</label>--}}
                {{--                    <select name="category_id" class="form-select" id="category_id">--}}
                {{--                        @foreach (App\Models\Category::get() as $category)--}}
                {{--                            <option value="{{ $category->id }}">{{ $category->name }}</option>--}}
                {{--                        @endforeach--}}
                {{--                    </select>--}}
                {{--                </div>--}}




                <ul id="tree1" style="font-weight: 100;">
                    @foreach($categories as $category)
                        @if($category->children()->exists())
                            <li style="font-weight: 100;">{{$category->name}}</li>
                            @include('manageCheckbox',['childs' => $category->children])
                        @else
                            <li>
                                <input type="radio" id="{{ $category->id }}" name="subcategory_id" value="{{ $category->id  }}">
                                <label for="{{ $category->id }}" style="font-weight: 100;"> {{ $category->name }}</label>
                            </li>
                        @endif
                    @endforeach
                </ul>
                {{--                <div class="accordion" id="accordionExample">--}}
                {{--                    @foreach (App\Models\Category::whereNull('parent_id')->get() as $category)--}}
                {{--                        @if($category->children()->exists())--}}
                {{--                            <div class="accordion-item">--}}
                {{--                                <h2 class="accordion-header" id="headingThree">--}}
                {{--                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"--}}
                {{--                                            data-bs-target="#collapse{{$category->id}}" aria-expanded="false"--}}
                {{--                                            aria-controls="collapseThree">--}}
                {{--                                        {{$category->name}}--}}
                {{--                                    </button>--}}
                {{--                                </h2>--}}
                {{--                                <div id="collapse{{$category->id}}" class="accordion-collapse collapse"--}}
                {{--                                     aria-labelledby="headingThree"--}}
                {{--                                     data-bs-parent="#accordionExample">--}}
                {{--                                    <div class="accordion-body">--}}
                {{--                                        <strong>This is the third item's accordion body.</strong> It is hidden by--}}
                {{--                                        default,--}}
                {{--                                        until the collapse plugin adds the appropriate classes that we use to style each--}}
                {{--                                        element. These classes control the overall appearance, as well as the showing--}}
                {{--                                        and--}}
                {{--                                        hiding via CSS transitions. You can modify any of this with custom CSS or--}}
                {{--                                        overriding--}}
                {{--                                        our default variables. It's also worth noting that just about any HTML can go--}}
                {{--                                        within--}}
                {{--                                        the <code>.accordion-body</code>, though the transition does limit overflow.--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        @else--}}
                {{--                            <div class="accordion-item">--}}
                {{--                                    <h2 class="accordion-header clearafter" id="headingThree" style=":after ">--}}
                {{--                                        <a href="#" class="clearafter accordion-button collapsed" type="button" data-bs-toggle="collapse"--}}
                {{--                                                data-bs-target="#collapse{{$category->id}}" aria-expanded="false"--}}
                {{--                                                aria-controls="collapseThree">--}}
                {{--                                            {{$category->name}}--}}
                {{--                                        </a>--}}
                {{--                                    </h2>--}}


                {{--                            </div>--}}
                {{--                        @endif--}}


                {{--                    @endforeach--}}
                {{--                </div>--}}


                <div class="my-4">
                    <label class="form-label" for="tags">{{trans('post.6')}}</label>
                    <select class="form-control tags" name="tags[]" id="tags" multiple="multiple">

                    </select>
                    {{--                    <small id="emailHelp" class="form-text">Примеры: iphone icloudini ochish, covid19, IT--}}
                    {{--                    </small>--}}
                </div>


                <div class=" my-4">
                    <input class="form-control" type="file" name="image" id="image">
                </div>


                <a class="remove-image text-danger mt-4" href="#"><i class="bi bi-x-square fs-4"></i></a>
                <div class="mb-4">

                    <img id="preview-image-before-upload" class="pl-3"
                         src="https://www.riobeauty.co.uk/images/product_image_not_found.gif" alt="preview image"
                         style="max-height: 250px;">
                </div>


                {{-- <div class="my-4">
                    <label class="form-label" for="publish_date">Планировка публикации</label>
                    <input type="datetime-local" class="form-control" name="publish_date" id="publish_date" />
                    <small id="emailHelp" class="form-text">Оставьте поле пустым, чтобы опубликовать
                        сразу</small>
                </div> --}}
                <div class="form-check my-4">
                    <input class="form-check-input" type="checkbox" name="is_visible" id="visibility" checked>
                    <label class="form-check-label" for="visibility">
                        {{trans('post.7')}}
                    </label>
                </div>

                {{--                <div class="form-check my-4">--}}
                {{--                    <input class="form-check-input" type="checkbox" value="" id="draft">--}}
                {{--                    <label class="form-check-label" for="draft">--}}
                {{--                        Сохранить как черновик--}}
                {{--                    </label>--}}
                {{--                </div>--}}


                <button type="submit" class="my-4 btn btn-success">{{trans('post.8')}}</button>
                <a href="#" class="my-4  btn btn-info cilc ">{{trans('post.9')}}</a>
            </div>
        </div>
    </form>

</div>

@push('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
    <style>
        @media (min-width: 1200px) {
            .container {
                max-width: 1500px;
            }
        }
    </style>
@endpush

@push('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function (e) {
            $('#image').change(function () {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#preview-image-before-upload').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });

        });


        $('.remove-image').on('click', function () {
            $('#preview-image-before-upload').attr("src",
                "https://www.riobeauty.co.uk/images/product_image_not_found.gif")

            $('#image').val('');
        });


        $('.cilc').on('click', function () {
            $("button[aria-label='Preview']").click();
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $('.tags').select2({
            placeholder: '{{trans('post.6')}}',
            tags: true
        });
    </script>
@endpush
