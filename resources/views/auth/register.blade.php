<x-guest-layout class="Authentication">
    <x-slot name="head">
        @vite(['resources/css/pages/compiled/Authentication.css'])
        <title>Signup</title>
    </x-slot>
    <section class="Signup">
        <div class="custom_form">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="inputs_group">
                    <div class="custom_inputs">
                        <input type="text" name="first_name" id="last_name" placeholder="" value="{{ old('first_name') }}" autocomplete="first_name" autofocus>
                        <label for="first_name">First Name</label>
                        <x-input-error field="first_name" />
                    </div>

                    <div class="custom_inputs">
                        <input type="text" name="last_name" id="last_name" placeholder="" value="{{ old('last_name') }}" autocomplete="last_name">
                        <label for="last_name">Last Name</label>
                        <x-input-error field="last_name" />
                    </div>
                </div>

                <div class="custom_inputs">
                    <input type="email" name="email" id="email" placeholder="" value="{{ old('email') }}" autocomplete="username">
                    <label for="email">Email Address</label>
                    <x-input-error field="email" />
                </div>

                <div class="custom_inputs">
                    <input type="password" name="password" id="password" placeholder="" autocomplete="new-password">
                    <label for="password">Password</label>
                    <x-input-error field="password" />
                </div>

                <div class="custom_inputs">
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="" autocomplete="new-password">
                    <label for="password_confirmation" class="required">Confirm Password</label>
                    <x-input-error field="password_confirmation" />
                </div>

                <button type="submit" class="btn_block">Signup</button>
            </form>

            <div class="extras">
                <p>Already registered? <a href="{{ Route::has('login') ? route('login') : '#' }}">Login</a></p>
            </div>
        </div>
    </section>
</x-guest-layout>
