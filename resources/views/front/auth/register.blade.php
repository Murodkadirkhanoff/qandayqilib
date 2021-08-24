<x-main>

    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- =======================
    Inner intro START -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-8 col-xl-6 mx-auto">
                        <div class="bg-primary-soft rounded p-4 p-sm-5">
                            <h2>Create your free account </h2>
                            <x-jet-validation-errors class="mb-4" />
                            <!-- Form START -->
                            <form class="mt-4" method="POST" action="{{ route('register') }}">
                                @csrf
                                <!-- Name -->
                                <div class="mb-3">
                                    <label class="form-label" for="name">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Name" name="name"
                                        :value="old('name')" required autofocus autocomplete="name">
                                </div>
                                <!-- Email -->
                                <div class="mb-3">
                                    <label class="form-label" for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                        placeholder="E-mail" name="email" :value="old('email')" required>
                                    <small id="emailHelp" class="form-text">We'll never share your email with anyone
                                        else.</small>
                                </div>
                                <!-- Password -->
                                <div class="mb-3">
                                    <label class="form-label" for="password">Password</label>
                                    <input type="password" class="form-control" id="password" placeholder="*********"
                                        name="password" required autocomplete="new-password">
                                </div>
                                <!-- Password -->
                                <div class="mb-3">
                                    <label class="form-label" for="password_confirmation">Confirm Password</label>
                                    <input type="password" class="form-control" id="password_confirmation"
                                        placeholder="*********" name="password_confirmation" required
                                        autocomplete="new-password">
                                </div>
                                <!-- Checkbox -->
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Yes i'd also like to sign up for
                                        additional subscription</label>
                                </div>


                                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                    <div class="mt-4">
                                        <x-jet-label for="terms">
                                            <div class="flex items-center">
                                                <x-jet-checkbox name="terms" id="terms" />

                                                <div class="ml-2">
                                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
    'terms_of_service' => '<a target="_blank" href="' . route('terms.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Terms of Service') . '</a>',
    'privacy_policy' => '<a target="_blank" href="' . route('policy.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Privacy Policy') . '</a>',
]) !!}
                                                </div>
                                            </div>
                                        </x-jet-label>
                                    </div>
                                @endif

                                <!-- Button -->
                                <div class="row align-items-center">
                                    <div class="col-sm-4">
                                        <button type="submit" class="btn btn-success">Sign me up</button>
                                    </div>
                                    <div class="col-sm-8 text-sm-end">
                                        <span>Have an account? <a href="signin.html"><u>Sign in</u></a></span>
                                    </div>
                                </div>
                            </form>
                            <!-- Form END -->
                            <hr>
                            <!-- Social-media btn -->
                            <div class="text-center">
                                <p>Sign up with your social network for quick access</p>
                                <ul class="list-unstyled d-sm-flex mt-3 justify-content-center">
                                    <li class="mx-2">
                                        <a href="#" class="btn bg-facebook d-inline-block"><i
                                                class="fab fa-facebook-f me-2"></i> Sign up with Facebook</a>
                                    </li>
                                    <li class="mx-2">
                                        <a href="#" class="btn bg-google d-inline-block"><i
                                                class="fab fa-google me-2"></i> Sign up with google</a>
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
