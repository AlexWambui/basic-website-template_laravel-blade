<x-guest-layout class="Authentication">
    <x-slot name="head">
        @vite(['resources/css/pages/compiled/Authentication.css'])
        <title>Forgot Password?</title>
    </x-slot>

    <section class="ForgotPassword">
        <div class="header">
            <p>Forgot your password? Enter your email address and we will email you a password reset link to set a new one.</p>
        </div>

        <div class="custom_form">
            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="custom_inputs">
                    <input type="email" name="email" id="email" placeholder="" value="{{ old('email') }}" autofocus>
                    <label for="email">Email Address</label>
                    <x-input-error field="email" />
                </div>

                <button type="submit" class="btn_block">Email Password Reset Link</button>
            </form>
        </div>
    </section>
</x-guest-layout>
