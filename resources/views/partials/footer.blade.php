<footer>
    <div class="container">
        <section class="branding">
            <p class="title">{{ config('app.name') }}</p>
            <p class="slogan">Better start for new projects.</p>
            <p class="address">{{ config('app.address') }}</p>
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
                    <img src="{{ asset('assets/images/whatsapp.webp') }}" alt="{{ config('app.name') }} Whatsapp" width="25" height="25">
                </a>

                <a href="#">
                    <img src="{{ asset('assets/images/instagram.webp') }}" alt="{{ config('app.name') }} Instagram" width="25" height="25">
                </a>
            </div>
        </section>
    </div>

    <p class="copyright">&copy; {{ date('Y') }} | {{ config('app.name') }} | All rights reserved</p>
</footer>
