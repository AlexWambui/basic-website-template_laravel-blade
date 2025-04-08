<x-guest-layout class="ServicesPage">
    <x-slot name="head">
        <meta name="description" content="At {{ config('app.name') }}, we offer a wide range of services with a specialization in ---replace_list of services you offer---.">
        <meta name="keywords" content="---replace_main service you offer--- {{ config('app.location') }}, ---replace_list of other services you provide---.">
        @vite(['resources/css/pages/ServicesPage.css'])
        <title>{{ config('app.name') }} - Services We Provide</title>



        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Service",
            "serviceType": "---replace_main service you offer---",
            "provider": {
                "@type": "Organization",
                "name": "{{ config('app.name') }}",
                "url": "{{ url('/services') }}",
                "logo": "{{ url('/images/logo.png') }}"
            },
            "description": "{{ config('app.name') }} provides professional ---replace_services you offer--- services, ensuring the highest quality standards.",
            "areaServed": {
                "@type": "Country",
                "name": "{{ config('app.country') }}"
            }
        }
        </script>
    </x-slot>

    <section class="Hero">
        <div class="container">
            <h1>Services Page</h1>
        </div>
    </section>
</x-guest-layout>
