<footer>
    <div class="container">
        <section class="branding">
            <p class="title">{{ config('app.name') }}</p>
            <p>Better start for new projects.</p>
            <p>{{ config('app.address') }}</p>
        </section>

        <section class="links">
            <a href="{{ Route::has('home-page') ? route('home-page') : '#' }}">Home</a>
            <a href="{{ Route::has('about-page') ? route('about-page') : '#' }}">About</a>
            <a href="{{ Route::has('services-page') ? route('services-page') : '#' }}">Services</a>
            <a href="{{ Route::has('contact-page') ? route('contact-page') : '#' }}">Contact</a>
        </section>

        <section class="contacts">
            <div class="details">
                <p>
                    {{ config('app.phone_number') }}
                    @if(!empty(config('app.secondary_phone_number')))
                        / {{ config('app.secondary_phone_number') }}
                    @endif
                </p>
                <p>{{ config('app.email') }}</p>
            </div>

            <div class="socials">
                <a href="{{ config('app.whatsapp') }}">
                    <img src="{{ asset('assets/images/whatsapp.png') }}" alt="{{ config('app.name') }} Whatsapp" width="30px" height="30px">
                </a>

                <a href="#">
                    <img src="{{ asset('assets/images/instagram.png') }}" alt="{{ config('app.name') }} Instagram" width="30px" height="30px">
                </a>
            </div>
        </section>
    </div>

    <p class="copyright">&copy; {{ date('Y') }} | {{ config('app.name') }} | All rights reserved</p>
</footer>
