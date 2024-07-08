@extends('layouts.base')

@section('content')

@include('layouts.shared/navbar')

@include('layouts.shared/mobile-nav')

@include('layouts.shared/page-title' ,['subtitle' => 'Pages', 'title' => 'My Address'])

<section class="lg:py-12 py-6">
    <div class="container">
        <div class="grid lg:grid-cols-5 gap-6">
            @include('layouts.shared/account-menu')

            <div class="lg:col-span-4">
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="border border-default-200 rounded-lg">
                        <div class="px-4 py-4">
                            <h1 class="text-lg font-medium text-default-800 mb-4">Billing Address</h1>
                            <h6 class="text-lg font-medium text-default-800 mb-2">Gustavo Schleifer</h6>
                            <p class="text-base mb-6">3042 Allentown Apartment, Parker Road. New York 311434 USA.</p>
                            <p class="text-base text-default-800 mb-4">dainne.ressell@gmail.com</p>
                            <p class="text-base text-default-800 mb-4">(123) 278-4567</p>

                            <a href="#" class="inline-flex items-center justify-center rounded-lg bg-primary px-6 py-2.5 text-center text-sm font-medium text-white shadow-sm transition-all duration-200 hover:bg-primary-600">Edit Address</a>
                        </div>
                    </div><!-- end card -->

                    <div class="border border-default-200 rounded-lg">
                        <div class="px-4 py-4">
                            <h1 class="text-lg font-medium text-default-800 mb-4">Shipping Address</h1>
                            <h6 class="text-lg font-medium text-default-800 mb-2">Jaydon Lubin</h6>
                            <p class="text-base mb-6">3042 Allentown Apartment, Parker Road. New York 311434 USA.</p>
                            <p class="text-base text-default-800 mb-4">dainne.ressell@gmail.com</p>
                            <p class="text-base text-default-800 mb-4">(123) 278-4567</p>

                            <a href="#" class="inline-flex items-center justify-center rounded-lg bg-primary px-6 py-2.5 text-center text-sm font-medium text-white shadow-sm transition-all duration-200 hover:bg-primary-600">Edit Address</a>
                        </div>
                    </div><!-- end card -->
                </div>

            </div>
        </div>
    </div>
</section>

@include('layouts.shared/footer')

@endsection