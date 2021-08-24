<x-main>
    <!-- **************** MAIN CONTENT START **************** -->
    <main>
        <!-- =======================
    Inner intro START -->
        <section class="pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="bg-light-soft p-md-5 rounded-3 text-center">
                            <h2 class="text-dark-soft">{{trans('post.10')}} ({{ $posts->count() }})</h2>
                            <nav class="d-flex justify-content-center" aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-dots m-0">
                                    <li class="breadcrumb-item"><a href="{{ route('home.page') }}"><i
                                                class="bi bi-house me-1"></i>
                                        {{trans('menu.home')}}</a></li>
                                    <li class="breadcrumb-item active">{{trans('menu.my_posts')}}</li>
                                </ol>
                            </nav>
                            <a class="btn mt-1 btn-info-soft" href="{{ route('posts.create') }}">{{trans('menu.create_post')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @livewire('front.account.post-list')
    </main>
</x-main>
