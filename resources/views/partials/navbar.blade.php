<nav aria-label="Main Navigation">
    <div class="branding">
        <img src="./assets/images/default-image.webp" alt="Aaqil Softwares Logo" />
        <a href="{{ Route::has('home-page') ? route('home-page') : '#' }}">
            {{ config('app.name') }}
        </a>
    </div>

    <div class="nav_links" id="nav_links" role="navigation">
        @php
            $nav_links = [
                ['route' => 'about-page', 'text' => 'About'],
                ['route' => 'services-page', 'text' => 'Services'],
                ['route' => 'contact-page', 'text' => 'Contact'],
            ];
        @endphp

        <div class="links">
            @foreach($nav_links as $nav_link)
                <a 
                href="{{ Route::has($nav_link['route']) ? route($nav_link['route']) : '#' }}" 
                class="{{ Route::currentRouteName() === $nav_link['route'] ? 'active' : '' }}">
                    {{ $nav_link['text'] }}
                </a>
            @endforeach
        </div>

        <div class="actions">
            <a href="{{ Route::has('contact-page') ? route('contact-page') : '#' }}">Make an Inquiry</a>
        </div>
    </div>

    <button class="burger" id="burger_icon" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navLinks">
        <span class="line1"></span>
        <span class="line2"></span>
        <span class="line3"></span>
    </button>
</nav>
