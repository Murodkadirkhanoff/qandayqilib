<x-main>
    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- =======================
    Inner intro START -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-8 col-xl-6 mx-auto">
                        <div class="p-4 p-sm-5 bg-primary-soft rounded">
                            <h2>{{trans('login.1')}}</h2>

                            <x-jet-validation-errors class="mb-4"/>

                            <!-- Form START -->
                            <form class="mt-4" method="POST" action="{{ route('login') }}">
                            @csrf
                            <!-- Email -->
                                <div class="mb-3">
                                    <label class="form-label" for="email">{{trans('login.2')}}</label>
                                    <input type="email" class="form-control" name="email" :value="old('email')" required
                                           autofocus id="email" placeholder="{{trans('login.2')}}">
                                </div>
                                <!-- Password -->
                                <div class="mb-3">
                                    <label class="form-label" for="password">{{trans('login.3')}}</label>
                                    <input type="password" class="form-control" id="password" placeholder="*********"
                                           type="password" name="password" required autocomplete="current-password">
                                </div>
                                <!-- Checkbox -->
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" name="remember" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">{{trans('login.4')}}</label>
                                </div>

{{--                                <div class="mb-3 form-check" style="padding-left: 0 !important;">--}}
{{--                                    @if (Route::has('password.request'))--}}
{{--                                        <a class="underline text-sm text-gray-600 hover:text-gray-900"--}}
{{--                                           href="{{ route('password.request') }}">--}}
{{--                                            {{ trans('login.5') }}--}}
{{--                                        </a>--}}
{{--                                    @endif--}}
{{--                                </div>--}}


                                <!-- Button -->
                                <div class="row align-items-center">
                                    <div class="col-sm-4">
                                        <button type="submit" class="btn btn-success">{{trans('login.6')}}</button>
                                    </div>
{{--                                    <div class="col-sm-8 text-sm-end">--}}
{{--                                        <span>{{trans('login.7')}}<a href="#"><u> {{trans('login.8')}}</u></a></span>--}}
{{--                                    </div>--}}
                                </div>
                            </form>
                            <!-- Form END -->
                            <hr>
                            <!-- Social-media btn -->
                            <div class="text-center">
                                <p>{{trans('login.9')}}</p>
                                <ul class="list-unstyled d-sm-flex mt-3 justify-content-center">
                                    <li class="mx-2">
                                        <a href="#" class="btn bg-facebook d-inline-block"><i
                                                class="fab fa-facebook-f me-2"></i> {{trans('login.10')}}</a>
                                    </li>
                                    <li class="mx-2">
                                        <a href="#" class="btn bg-google d-inline-block"><i
                                                class="fab fa-google me-2"></i> {{trans('login.11')}}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
    Inner intro END -->

    </main>
    <!-- **************** MAIN CONTENT END **************** -->

</x-main>
