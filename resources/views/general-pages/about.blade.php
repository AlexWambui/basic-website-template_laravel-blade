<x-guest-layout class="AboutPage">
    <x-slot name="head">
        <meta name="description" content="Discover {{ config('app.name') }}, a leading ---replace_main service you offer and your location---. We specialize in ---replace_list services you special in--- delivering high-quality services in the global market.">
        <meta name="keywords" content="---replace_main service you offer--- {{ config('app.location') }}, ---replace_list of services you offer.---">
        <title>About {{ config('app.name') }} - Leading ---replace_main service you offer--- in {{ config('app.location') }}</title>



        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "{{ config('app.name') }}",
            "url": "{{ url('/about') }}",
            "logo": "{{ url('/images/logo.png') }}",
            "description": "A leading ---replace_main service provided--- in {{ config('app.country') }}, specializing in ---replace_list of service you specialize in---.",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "{{ config('app.address') }}",
                "addressLocality": "{{ config('app.locality') }}}",
                "addressCountry": "{{ config('app.country') }}}"
            },
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "{{ config('app.phone_number') }}",
                "contactType": "customer service"
            }
        }
        </script>
    </x-slot>

    <section class="Hero">
        <div class="container">
            <h1>About Page</h1>
        </div>
    </section>
</x-guest-layout>
