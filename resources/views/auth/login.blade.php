<x-guest-layout class="Authentication">
    <x-slot name="head">
        @vite(['resources/css/pages/compiled/Authentication.css'])
        <title>Login</title>
    </x-slot>

    <section class="Login">
        <div class="custom_form">    
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="custom_inputs">
                    <input type="email" name="email" id="email" placeholder="" value="{{ old('email') }}" autofocus autocomplete="username">
                    <label for="email" class="required">Email Address</label>
                    <x-input-error field="email" />
                </div>

                <div class="custom_inputs">
                    <input type="password" name="password" id="password" placeholder="">
                    <label for="password">Password</label>
                    <x-input-error field="password" />
                </div>

                {{-- <div class="remember_me">
                    <label for="remember_me">
                        <input type="checkbox" name="remember" id="remember_me">
                        <span>Remember me</span>
                    </label>
                </div> --}}

                <div class="forgot_password">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">Forgot your password?</a>
                    @endif
                </div>

                <button type="submit" class="btn_block">Login</button>
            </form>

            <div class="extras">
                <p>Don't have an account? <a href="{{ Route::has('register') ? route('register') : '#' }}">Signup</a></p>
            </div>
        </div>
    </section>
</x-guest-layout>
