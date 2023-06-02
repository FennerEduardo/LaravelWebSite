<x-app-layout>
    <section class="w-full bg-section1 space-y-0"
        style="background-image: url('{{ asset('img/section-1.jpg') }}'); background-position: bottom center;  background-size: cover;">
        @include('layouts.section1')
    </section>
    <section class="w-full bg-white space-y-0">
        @include('layouts.section2')
    </section>
    <section class="w-full bg-white space-y-0">
        @include('layouts.section3')
    </section>
    @include('layouts.footer')
</x-app-layout>
