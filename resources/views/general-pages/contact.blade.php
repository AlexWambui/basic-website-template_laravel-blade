<x-guest-layout class="ContactPage">
    <x-slot name="head">
        <meta name="description" content="Contact {{ config('app.name') }} for inquiries, support, and business collaborations. Reach us via phone, email, or visit our office.">
        <meta name="keywords" content="contact {{ config('app.name') }}, customer support, business inquiries, reach us">
        <title>Contact {{ config('app.name') }} - Get in Touch</title>
        
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "ContactPage",
            "name": "Contact {{ config('app.name') }}",
            "url": "{{ url('/contact') }}",
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "{{ config('app.phone_number') }}",
                "email": "{{ config('app.email') }}",
                "contactType": "customer service"
            },
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "{{ config('app.address') }}",
                "postalCode": "{{ config('app.pobox') }}"
            }
        }
        </script>
    </x-slot>

    <section class="Hero">
        <div class="container">
            <h1>Contact Page</h1>
        </div>
    </section>
</x-guest-layout>
