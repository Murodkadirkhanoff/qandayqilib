<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>{{ $title ?? 'Qanday qilib ?' }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <meta name="keywords" content="{{$keywords ?? 'qanday qilib'}}">
    <meta name="description" content="{{$description ?? 'qanday qilib'}}">


    <!-- Fonts -->


    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.svg') }}">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;700&amp;family=Rubik:wght@400;500;700&amp;display=swap"
        rel="stylesheet">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/tiny-slider/tiny-slider.css') }}">

    <!-- Theme CSS -->
    <link id="style-switch" rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


    <style>
        .post-image {
            width: 300px;
            height: 200px;
            object-fit: cover;
        }

        .post-image-default {
            width: 300px;
            height: 200px;
            object-fit: scale-down;
        }

        .post-image-mini {
            width: 100px;
            height: 100px;
            object-fit: scale-down;
        }

        .post-image-default-mini {
            width: 400px;
            height: 400px;
            object-fit: scale-down;
        }

        .post-grid {

            width: 400px;
            height: 400px;
            object-fit: scale-down;
        }

        .card-img {
            height: 230px;
            object-fit: cover;
        }

        .post-grid-default {
            height: 230px;
            object-fit: scale-down;
        }


        .clearafter:after {
            content: none !important;
        }


        .tree, .tree ul {

            margin: 0;

            padding: 0;

            list-style: none;
        }


        .tree ul {

            margin-left: 1em;

            position: relative

        }

        .tree ul ul {

            margin-left: .5em

        }

        .tree ul:before {

            content: "";

            display: block;

            width: 0;

            position: absolute;

            top: 0;

            bottom: 0;

            left: 0;

            border-left: 1px solid

        }

        .tree li {

            margin: 0;

            padding: 0 1em;

            line-height: 2em;

            color: #595d69;

            font-weight: 700;

            position: relative

        }

        .tree ul li:before {

            content: "";

            display: block;

            width: 10px;

            height: 0;

            border-top: 1px solid;

            margin-top: -1px;

            position: absolute;

            top: 1em;

            left: 0

        }

        .tree ul li:last-child:before {

            background: #fff;

            height: auto;

            top: 1em;

            bottom: 0

        }

        .indicator {

            margin-right: 5px;

        }

        .tree li a {

            text-decoration: none;

            color: #369;

        }

        .tree li button, .tree li button:active, .tree li button:focus {

            text-decoration: none;

            color: #369;

            border: none;

            background: transparent;

            margin: 0px 0px 0px 0px;

            padding: 0px 0px 0px 0px;

            outline: 0;

        }

        .tree {
            height: 400px;
            overflow: overlay;
            border: 1px solid;
        }


        .dropdown-menu .dropdown-toggle {

            margin-left: 4px !important;
        }


    </style>


    <script src='https://cdn.tiny.cloud/1/98we2akphhxpsn10gpb4vncmxpfsvgh9r5i4wcz3wcmhcafs/tinymce/5/tinymce.min.js'
            referrerpolicy="origin">
    </script>
    <script>
        // var useDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;

        // tinymce.init({
        //     selector: 'textarea',
        //     plugins: ' table image a11ycheck anchor restoredraft charmap',
        //     tinydrive_token_provider: 'URL_TO_YOUR_TOKEN_PROVIDER',
        //     tinydrive_dropbox_app_key: 'YOUR_DROPBOX_APP_KEY',
        //     tinydrive_google_drive_key: 'YOUR_GOOGLE_DRIVE_KEY',
        //     tinydrive_google_drive_client_id: 'YOUR_GOOGLE_DRIVE_CLIENT_ID',
        //     mobile: {
        //         plugins: 'print preview powerpaste casechange importcss tinydrive searchreplace autolink autosave save directionality advcode visualblocks visualchars fullscreen image link media mediaembed template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists checklist wordcount tinymcespellchecker a11ychecker textpattern noneditable help formatpainter pageembed charmap mentions quickbars linkchecker emoticons advtable'
        //     },
        //     menu: {
        //         tc: {
        //             title: 'Comments',
        //             items: 'addcomment showcomments deleteallconversations'
        //         }
        //     },
        //     menubar: 'file edit view insert format tools table tc help',
        //     toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist checklist | forecolor backcolor casechange permanentpen formatpainter removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media pageembed template link anchor codesample | a11ycheck ltr rtl | showcomments addcomment',
        //     autosave_ask_before_unload: true,
        //     autosave_interval: '30s',
        //     autosave_prefix: '{path}{query}-{id}-',
        //     autosave_restore_when_empty: false,
        //     autosave_retention: '2m',
        //     image_advtab: true,
        //     link_list: [{
        //             title: 'My page 1',
        //             value: 'https://www.tiny.cloud'
        //         },
        //         {
        //             title: 'My page 2',
        //             value: 'http://www.moxiecode.com'
        //         }
        //     ],
        //     image_list: [{
        //             title: 'My page 1',
        //             value: 'https://www.tiny.cloud'
        //         },
        //         {
        //             title: 'My page 2',
        //             value: 'http://www.moxiecode.com'
        //         }
        //     ],
        //     image_class_list: [{
        //             title: 'None',
        //             value: ''
        //         },
        //         {
        //             title: 'Some class',
        //             value: 'class-name'
        //         }
        //     ],
        //     importcss_append: true,
        //     templates: [{
        //             title: 'New Table',
        //             description: 'creates a new table',
        //             content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>'
        //         },
        //         {
        //             title: 'Starting my story',
        //             description: 'A cure for writers block',
        //             content: 'Once upon a time...'
        //         },
        //         {
        //             title: 'New list with dates',
        //             description: 'New List with dates',
        //             content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>'
        //         }
        //     ],
        //     template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
        //     template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
        //     height: 600,
        //     image_caption: true,
        //     quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
        //     noneditable_noneditable_class: 'mceNonEditable',
        //     toolbar_mode: 'sliding',
        //     spellchecker_ignore_list: ['Ephox', 'Moxiecode'],
        //     tinycomments_mode: 'embedded',
        //     content_style: '.mymention{ color: gray; }',
        //     contextmenu: 'link image imagetools table configurepermanentpen',
        //     a11y_advanced_options: true,
        //     skin: useDarkMode ? 'oxide-dark' : 'oxide',
        //     content_css: useDarkMode ? 'dark' : 'default',
        //     /*
        //     The following settings require more configuration than shown here.
        //     For information on configuring the mentions plugin, see:
        //     https://www.tiny.cloud/docs/plugins/premium/mentions/.
        //     */
        //     mentions_selector: '.mymention',
        //     mentions_item_type: 'profile'
        // });

        tinymce.init({
            selector: '#mytextarea',
            plugins: 'image code preview lists',
            //toolbar: 'undo redo | link image | code | backcolor',
            toolbar: 'numlist bullist preview undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist checklist | forecolor backcolor casechange permanentpen formatpainter removeformat | pagebreak | charmap emoticons | fullscreen  save print | insertfile image media pageembed template link anchor codesample | a11ycheck ltr rtl | showcomments addcomment',
            /* enable title field in the Image dialog*/
            image_title: true,
            /* enable automatic uploads of images represented by blob or data URIs*/
            automatic_uploads: true,
            /*
              URL of our upload handler (for more details check: https://www.tiny.cloud/docs/configure/file-image-upload/#images_upload_url)
              images_upload_url: 'postAcceptor.php',
              here we add custom filepicker only to Image dialog
            */
            images_upload_url: '{{ route('tinymce') }}',
            file_picker_types: 'image',


            /* and here's our custom image picker*/
            file_picker_callback: function (cb, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');

                /*
                  Note: In modern browsers input[type="file"] is functional without
                  even adding it to the DOM, but that might not be the case in some older
                  or quirky browsers like IE, so you might want to add it to the DOM
                  just in case, and visually hide it. And do not forget do remove it
                  once you do not need it anymore.
                */

                input.onchange = function () {
                    var file = this.files[0];

                    var reader = new FileReader();
                    reader.onload = function () {
                        /*
                          Note: Now we need to register the blob in TinyMCEs image blob
                          registry. In the next release this part hopefully won't be
                          necessary, as we are looking to handle it internally.
                        */
                        var id = 'blobid' + (new Date()).getTime();
                        var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                        var base64 = reader.result.split(',')[1];
                        var blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);

                        /* call the callback and populate the Title field with the file name */
                        cb(blobInfo.blobUri(), {
                            title: file.name
                        });
                    };
                    reader.readAsDataURL(file);
                };

                input.click();
            },
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
        });
    </script>
    @livewireStyles
@stack('css')
<!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body>


<!-- =======================
Header START -->
<header class="navbar-light navbar-sticky header-static ">


    <div class="navbar-top d-none d-lg-block small">
        <div class="container" style="background-color: #f7656e;">
            <div class="d-md-flex justify-content-between align-items-center p-2">
                <!-- Top bar left -->
                <ul class="nav">
                    @foreach(\App\Models\Category::whereNull('parent_id')->take(6)->inRandomOrder()->get() as $category)
                        <li class="nav-item pr-4 mr-4">
                            <a class="nav-link ps-0 mr-4 pr-4 text-white"
                               href="{{route('posts.by.category', ['category_slug'=> $category->slug ])}}">{{$category->name}}</a>
                        </li>
                    @endforeach
                </ul>
                <!-- Top bar right -->
                <div class="d-flex align-items-center">
                    <ul class="nav ">
                        <li class="nav-item"><a class="nav-link text-white px-2"
                                                href="{{route('change.locale',['locale'=>'ru'])}}">Ru</a></li>
                        <li class="nav-item"><a class="nav-link text-white px-2"
                                                href="{{route('change.locale',['locale'=>'uz'])}}">Uz</a></li>
                        {{--                        <li class="nav-item"><a class="nav-link text-white px-2"--}}
                        {{--                                                href="{{route('change.locale',['locale'=>'en'])}}">En</a></li>--}}
                    </ul>
                </div>
            </div>
            <!-- Divider -->
            <div class="border-bottom border-2 border-primary opacity-1"></div>
        </div>
        <div class="container"
             style="height: 20px; background-color: #ffbdbd; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px;"></div>
    </div>


    <!-- Logo Nav START -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Logo START -->
            <a class="navbar-brand" href="{{route('home.page')}}">
                <img class="navbar-brand-item light-mode-item" src="{{asset('assets/images/logo.svg')}}" alt="logo">
                <img class="navbar-brand-item dark-mode-item" src="{{asset('assets/images/logo.svg')}}" alt="logo">
            </a>
            <!-- Logo END -->

            <!-- Responsive navbar toggler -->
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="text-body h6 d-none d-sm-inline-block">Menu</span>
                <span class="navbar-toggler-icon"></span>
            </button>


            <!-- Main navbar START -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav navbar-nav-scroll ms-auto">

                    <!-- Nav item 1 Demos -->
                    <li class="nav-item"><a class="nav-link" href="{{ route('home.page') }}">{{trans('menu.home')}}</a>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="pagesMenu" data-bs-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">{{trans('menu.categories')}}</a>
                        @include('vendor.category.index', ['parentCategories'=> \App\Models\Category::whereNull('parent_id')->get()])
                    </li>


                    <li class="nav-item dropdown dropdown-fullwidth">
                        <a class="nav-link dropdown-toggle" href="#" id="megaMenu" data-bs-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">{{trans('menu.lovely_posts')}}</a>
                        <div class="dropdown-menu" aria-labelledby="megaMenu">
                            <div class="container">
                                <div class="row g-4 p-3 flex-fill">


                                    @foreach(\App\Models\Post::take(3)->inRandomOrder()->get() as $post)
                                        <div class="col-sm-6 col-lg-3">
                                            <div class="card bg-transparent">
                                                <!-- Card img -->
                                                <img class="card-img rounded" src="{{asset('uploads/' . $post->image)}}"
                                                     alt="Card image">
                                                <div class="card-body px-0 pt-3">
                                                    <h6 class="card-title mb-0"><a href="#"
                                                                                   class="btn-link text-reset fw-bold">
                                                            {{ \Illuminate\Support\Str::limit($post->title, $limit = 25, $end = '...') }}</a>
                                                    </h6>
                                                    <!-- Card info -->
                                                    <ul class="nav nav-divider align-items-center text-uppercase small mt-2">
                                                        <li class="nav-item">
                                                            @include('components.widgets.category', ['post'=> $post])
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                @endforeach


                                <!-- Card item START -->
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="bg-primary-soft p-4 text-center h-100 w-100 rounded">
                                            <span>qandayqilib.uz</span>
                                            <h3>Sizning Biznesingiz uchun joy</h3>
                                            <p>Xabar qoldiring!</p>
                                            <a href="#" class="btn btn-warning">qandayqilib@info.com</a>
                                        </div>
                                    </div>
                                    <!-- Card item END -->
                                </div> <!-- Row END -->
                                <!-- Trending tags -->
                                <div class="row px-3">
                                    <div class="col-12">
                                        <ul class="list-inline mt-3">
                                            <li class="list-inline-item">{{trans('menu.trending_tags')}}:</li>
                                            <li class="list-inline-item"><a href="#"
                                                                            class="btn btn-sm btn-primary-soft">Travel</a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"
                                                                            class="btn btn-sm btn-warning-soft">Business</a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"
                                                                            class="btn btn-sm btn-success-soft">Tech</a>
                                            </li>
                                            <li class="list-inline-item"><a href="#" class="btn btn-sm btn-danger-soft">Gadgets</a>
                                            </li>
                                            <li class="list-inline-item"><a href="#" class="btn btn-sm btn-info-soft">Lifestyle</a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"
                                                                            class="btn btn-sm btn-primary-soft">Vaccine</a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"
                                                                            class="btn btn-sm btn-success-soft">Sports</a>
                                            </li>
                                            <li class="list-inline-item"><a href="#" class="btn btn-sm btn-danger-soft">Covid-19</a>
                                            </li>
                                            <li class="list-inline-item"><a href="#" class="btn btn-sm btn-info-soft">Politics</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div> <!-- Row END -->
                            </div>
                        </div>
                    </li>


                    <!-- Nav item 3 Post -->
                    <li class="nav-item"><a class="nav-link"
                                            href="{{ route('posts.list.page') }}">{{trans('menu.posts')}}</a></li>

                </ul>
            </div>
            <!-- Main navbar END -->

            <!-- Nav right START -->
            <div class="nav ms-sm-3 flex-nowrap align-items-center">


            @if (Auth::check())
                <!-- Nav additional link -->
                    <div class="nav-item dropdown dropdown-toggle-icon-none d-none d-sm-block">
                        <a class="nav-link dropdown-toggle" role="button" href="#" id="navAdditionalLink"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person fs-4 pr-5"></i> (<i>{{ Auth::user()->name }}</i>)
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded text-end"
                            aria-labelledby="navAdditionalLink">
                            <li><a class="dropdown-item fw-normal"
                                   href="{{ route('account') }}">{{trans('menu.account')}}</a></li>
                            <li><a class="dropdown-item fw-normal"
                                   href="{{ route('posts.index') }}">{{trans('menu.my_posts')}}</a></li>

                            @role('moderator')
                            <li><a class="dropdown-item fw-normal"
                                   href="{{ route('posts.for.verification') }}">Публикации для
                                    проверки <span
                                        class="badge bg-danger me-2 align-middle">{{ App\Models\Post::where('status', App\Helpers\Status::MODERATOR)->count() }}</span></a>
                            </li>
                            @endrole
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-jet-dropdown-link href="{{ route('logout') }}"
                                                         class="dropdown-item fw-normal" onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{trans('menu.logout')}}
                                    </x-jet-dropdown-link>
                                </form>
                            </li>

                        </ul>
                    </div>
            @else
                <!-- Nav Button -->
                    <div class="nav-item d-none d-md-block">
                        <a href="{{ route('login.page') }}"
                           class="btn btn-sm btn-primary mb-0 mx-2">{{trans('menu.login')}}</a>
                    </div>
                    {{--                    <div class="nav-item d-none d-md-block">--}}
                    {{--                        <a href="{{ route('register.page') }}"--}}
                    {{--                           class="btn btn-sm btn-danger mb-0 mx-2">Register</a>--}}
                    {{--                    </div>--}}
                @endif

            </div>
            <!-- Nav right END -->
        </div>
    </nav>
    <!-- Logo Nav END -->
</header>
<!-- =======================
Header END -->


<!-- Page Content -->
<main>
    {{ $slot }}
</main>


<!-- =======================
Footer START -->
{{--<footer class="pb-0">--}}
{{--    <div class="container">--}}
{{--        <hr>--}}
{{--        <!-- Widgets START -->--}}
{{--        <div class="row pt-5">--}}
{{--            <!-- Footer Widget -->--}}
{{--            <div class="col-md-6 col-lg-4 mb-4">--}}
{{--                <img class="light-mode-item" src="assets/images/logo.svg" alt="logo">--}}
{{--                <img class="dark-mode-item" src="assets/images/logo-light.svg" alt="logo">--}}
{{--                <p class="mt-3">The next-generation blog, news, and magazine theme for you to start sharing your--}}
{{--                    stories today! This Bootstrap 5 based theme is ideal for all types of sites that deliver the--}}
{{--                    news.</p>--}}
{{--                <div class="mt-4">©2021 <a href="http://qandayqilib.uz" class="text-reset btn-link"--}}
{{--                                           target="_blank">qandayqilib.uz </a>. All rights reserved--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Footer Widget -->--}}
{{--            <div class="col-md-6 col-lg-3 mb-4">--}}
{{--                <h5 class="mb-4">Navigation</h5>--}}
{{--                <div class="row">--}}
{{--                    <div class="col-6">--}}
{{--                        <ul class="nav flex-column">--}}
{{--                            <li class="nav-item"><a class="nav-link pt-0" href="#">Features</a></li>--}}
{{--                            <li class="nav-item"><a class="nav-link" href="#">Style Guide</a></li>--}}
{{--                            <li class="nav-item"><a class="nav-link" href="#">Contact us</a></li>--}}
{{--                            <li class="nav-item"><a class="nav-link" href="#">Get Theme</a></li>--}}
{{--                            <li class="nav-item"><a class="nav-link" href="#">Support</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div class="col-6">--}}
{{--                        <ul class="nav flex-column">--}}
{{--                            <li class="nav-item"><a class="nav-link pt-0" href="#">News</a></li>--}}
{{--                            <li class="nav-item"><a class="nav-link" href="#">Career <span--}}
{{--                                        class="badge bg-danger ms-2">2 Job</span></a></li>--}}
{{--                            <li class="nav-item"><a class="nav-link" href="#">Technology</a></li>--}}
{{--                            <li class="nav-item"><a class="nav-link" href="#">Startups</a></li>--}}
{{--                            <li class="nav-item"><a class="nav-link" href="#">Gadgets</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Footer Widget -->--}}
{{--            <div class="col-sm-6 col-lg-3 mb-4">--}}
{{--                <h5 class="mb-4">Browse by Tag</h5>--}}
{{--                <ul class="list-inline">--}}
{{--                    <li class="list-inline-item"><a href="#" class="btn btn-sm btn-primary-soft">Travel</a></li>--}}
{{--                    <li class="list-inline-item"><a href="#" class="btn btn-sm btn-warning-soft">Business</a></li>--}}
{{--                    <li class="list-inline-item"><a href="#" class="btn btn-sm btn-success-soft">Tech</a></li>--}}
{{--                    <li class="list-inline-item"><a href="#" class="btn btn-sm btn-danger-soft">Gadgets</a></li>--}}
{{--                    <li class="list-inline-item"><a href="#" class="btn btn-sm btn-info-soft">Lifestyle</a></li>--}}
{{--                    <li class="list-inline-item"><a href="#" class="btn btn-sm btn-primary-soft">Vaccine</a></li>--}}
{{--                    <li class="list-inline-item"><a href="#" class="btn btn-sm btn-warning-soft">Marketing</a></li>--}}
{{--                    <li class="list-inline-item"><a href="#" class="btn btn-sm btn-success-soft">Sports</a></li>--}}
{{--                    <li class="list-inline-item"><a href="#" class="btn btn-sm btn-danger-soft">Covid-19</a></li>--}}
{{--                    <li class="list-inline-item"><a href="#" class="btn btn-sm btn-info-soft">Politics</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}

{{--            <!-- Footer Widget -->--}}
{{--            <div class="col-sm-6 col-lg-2 mb-4">--}}
{{--                <h5 class="mb-4">Our Social handles</h5>--}}
{{--                <ul class="nav flex-column">--}}
{{--                    <li class="nav-item"><a class="nav-link pt-0" href="#"><i--}}
{{--                                class="fab fa-facebook-square fa-fw me-2 text-facebook"></i>Facebook</a></li>--}}
{{--                    <li class="nav-item"><a class="nav-link" href="#"><i--}}
{{--                                class="fab fa-twitter-square fa-fw me-2 text-twitter"></i>Twitter</a></li>--}}
{{--                    <li class="nav-item"><a class="nav-link" href="#"><i--}}
{{--                                class="fab fa-linkedin fa-fw me-2 text-linkedin"></i>Linkedin</a></li>--}}
{{--                    <li class="nav-item"><a class="nav-link" href="#"><i--}}
{{--                                class="fab fa-youtube-square fa-fw me-2 text-youtube"></i>YouTube</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- Widgets END -->--}}
{{--    </div>--}}
{{--</footer>--}}

<footer class="pt-3 mt-4 text-muted border-top text-center my-5">
    © 2021
</footer>
<!-- =======================
Footer END -->

<!-- =======================
Cookies alert START -->
{{-- <div class="alert alert-light alert-dismissible fade show position-fixed bottom-0 start-50 translate-middle-x z-index-99 d-lg-flex justify-content-between align-items-center shadow p-4 col-9 col-md-5"
    role="alert">
    <p class="m-0 pe-3">This website stores cookies on your computer. To find out more about the cookies we use, see
        our <a class="text-reset" href="#"> <u>Privacy Policy</u></a></p>
    <div class="d-flex mt-3 mt-lg-0">
        <button type="button" class="btn btn-success-soft btn-sm mb-0 me-2" data-bs-dismiss="alert"
            aria-label="Close">
            <span aria-hidden="true">Accept</span>
        </button>
        <button type="button" class="btn btn-danger-soft btn-sm mb-0" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">Decline</span>
        </button>
    </div>
</div> --}}
<!-- =======================
Cookies alert END -->

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short"></i></div>


@livewireScripts


<script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('assets/vendor/tiny-slider/tiny-slider.js') }}"></script>


<script src="{{ asset('assets/js/functions.js') }}"></script>


@stack('js')


<script>
    $.fn.extend({
        treed: function (o) {

            var openedClass = 'glyphicon-minus-sign';
            var closedClass = 'glyphicon-plus-sign';

            if (typeof o != 'undefined') {
                if (typeof o.openedClass != 'undefined') {
                    openedClass = o.openedClass;
                }
                if (typeof o.closedClass != 'undefined') {
                    closedClass = o.closedClass;
                }
            }
            ;

            /* initialize each of the top levels */
            var tree = $(this);
            tree.addClass("tree");
            tree.find('li').has("ul").each(function () {
                var branch = $(this);
                branch.prepend("");
                branch.addClass('branch');
                branch.on('click', function (e) {
                    if (this == e.target) {
                        var icon = $(this).children('i:first');
                        icon.toggleClass(openedClass + " " + closedClass);
                        $(this).children().children().toggle();
                    }
                })
                branch.children().children().toggle();
            });
            /* fire event from the dynamically added icon */
            tree.find('.branch .indicator').each(function () {
                $(this).on('click', function () {
                    $(this).closest('li').click();
                });
            });
            /* fire event to open branch if the li contains an anchor instead of text */
            tree.find('.branch>a').each(function () {
                $(this).on('click', function (e) {
                    $(this).closest('li').click();
                    e.preventDefault();
                });
            });
            /* fire event to open branch if the li contains a button instead of text */
            tree.find('.branch>button').each(function () {
                $(this).on('click', function (e) {
                    $(this).closest('li').click();
                    e.preventDefault();
                });
            });
        }
    });
    /* Initialization of treeviews */
    $('#tree1').treed();
</script>


</body>

</html>
