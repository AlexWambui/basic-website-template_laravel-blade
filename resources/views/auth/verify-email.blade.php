<x-guest-layout class="Authentication">
    <x-slot name="head">
        @vite(['resources/css/pages/compiled/Authentication.css'])
        <title>Verify Email</title>
    </x-slot>

    <section class="VerifyEmail">
        <div class="header">
            <p>Before getting started, kindly verify your email address by clicking on the link we just emailed you? If you didn't receive the email, we will gladly send you another.</p>
        </div>

        <div class="custom_form">
            @if (session('status') == 'verification-link-sent')
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                </div>
            @endif

            <div class="actions">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf

                    <button>Resend Verification Email</button>
                </form>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit" class="btn_danger">Logout</button>
                </form>
            </div>
        </div>
    </section>
</x-guest-layout>
