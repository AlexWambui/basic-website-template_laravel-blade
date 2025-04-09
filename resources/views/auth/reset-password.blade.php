<x-guest-layout class="Authentication">
    <x-slot name="head">
        @vite(['resources/css/pages/compiled/Authentication.css'])
        <title>Reset Password</title>
    </x-slot>

    <section class="ResetPassword">
        <div class="custom_form">
            <form method="POST" action="{{ route('password.store') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <div class="custom_inputs">
                    <input type="email" name="email" id="email" placeholder="" value="{{ old('email', $request->email) }}" autocomplet="username">
                    <label for="email">Email Address</label>
                    <x-input-error field="email" />
                </div>

                <div class="custom_inputs">
                    <input type="password" name="password" id="password" placeholder="">
                    <label for="password">Password</label>
                    <x-input-error field="password" />
                </div>

                <div class="custom_inputs">
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="">
                    <label for="password_confirmation">Password</label>
                    <x-input-error field="password_confirmation" />
                </div>

                <button type="submit" class="btn_block">Reset Password</button>
            </form>
        </div>
    </section>
</x-guest-layout>
