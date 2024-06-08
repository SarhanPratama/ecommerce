@extends('user')

@section('content')

@include('layouts.shared/navbar')

@include('layouts.shared/mobile-nav')

@include('layouts.shared/page-title' ,['subtitle' => 'Pages', 'title' => '404 Error'])

<section class="lg:py-10 py-3">
    <div class="container">
        <div class="grid md:grid-cols-2 items-center gap-10">
            <div class="text-center md:text-start order-2 md:order-1">
                <h1 class="text-5xl font-semibold text-default-800 mb-4">Ooops...</h1>
                <h3 class="text-2xl font-medium text-default-800 mb-4">It looks like you're lost...</h3>
                <p class="text-base text-default-600 mb-8">The page you are looking for was moved, removed, renamed <br> or might no longer exist!</p>
                <a href="{{ url('/') }}" class="px-6 py-2.5 rounded-md text-base bg-primary text-white capitalize transition-all hover:bg-primary-600">
                    Back to Home Page
                </a>
            </div><!-- end grid-col -->
            <div class="flex items-center justify-center md:justify-start order-1 md:order-2">
                <img src="/images/other/error-404.png" alt="faq-img" class="max-w-full h-full">
            </div><!-- end grid-col -->
        </div><!-- end grid -->
    </div><!-- end container -->
</section>

@include('layouts.shared/footer')

@endsection