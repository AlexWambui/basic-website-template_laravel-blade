<x-guest-layout class="HomePage">
    <x-slot name="head">
        <meta name="description" content="{{ config('app.name') }} is a leading ---replace_service provided--- based in {{ config('app.address') }}, specializing in ---replace_list services you special in---.">
        <meta name="keywords" content="---replace_list-keywords-associated-to-your-company---">
        @vite(['resources/css/pages/HomePage.css'])
        <title>{{ config('app.name') }} - Aaqil Softwares</title>



        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "{{ config('app.name') }}",
            "url": "{{ url('/') }}",
            "logo": "{{ url('/images/logo.png') }}",
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "{{ config('app.phone_number') }}",
                "contactType": "customer service"
            },
            "sameAs": [
                "{{ config('app.facebook') }}",
                "{{ config('app.twitter') }}",
                "{{ config('app.linkedin') }}"
            ]
        }
        </script>
    </x-slot>

    <section class="Hero">
        <div class="container">
            <i class="fa fa-home"></i>
            <h1>Home Page</h1>
        </div>
    </section>
</x-guest-layout>
