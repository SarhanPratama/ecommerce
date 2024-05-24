@extends('layouts.base')

@section('content')

@include('layouts.shared/navbar')

@include('layouts.shared/mobile-nav')

<section class="bg-gradient-to-r from-cyan-700 via-cyan-500 to-cyan-700">
    <div class="py-10 sm:py-20">
        <div class="container">
            <div class="grid lg:grid-cols-5 items-center gap-10">
                <div class="lg:col-span-2 lg:order-2">
                    <div class="max-w-lg h-full">
                        <img src="/images/other/hero-2.png" alt="" class="max-w-full h-full">
                    </div>
                </div>
                {{-- <div class="lg:col-span-3 lg:order-1">
                    <div class="max-w-2xl">
                        <h3 class="text-[40px] leading-snug font-semibold text-white mb-4">Ensure You Catch Delectable Grocery Deals!</h3>
                        <p class="text-base/relaxed text-zinc-100">Discover irresistible deals on a variety of groceries. Don't miss out—treat yourself to tasty savings with our exclusive offers!</p>

                        <div class="mt-8">
                            <h6 class="text-lg font-semibold text-zinc-50 mb-4">Subscribe to our Daily Newsletter for the Latest Updates!</h6>
                            <div class="relative w-full lg:w-3/4">
                                <input type="email" id="subcribe" class="py-4 ps-4 pe-40 w-full h-12 text-zinc-900 rounded-lg bg-white/60 backdrop-blur-3xl border-white/10 focus:ring-0 focus:border-white/10 placeholder:text-zinc-800" placeholder="Enter your email :" name="email">
                                <button type="submit" class="inline-flex items-center justify-center gap-2 px-6 absolute top-[6px] end-[6px] h-9 transition-all bg-primary-500 hover:bg-primary-600 border-primary-500 hover:border-primary-600 text-white rounded-md duration-200">
                                    <span class="sm:block hidden">Subscribe</span><i data-lucide="move-right" class="ti ti-arrow-narrow-right text-2xl"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="lg:col-span-3 lg:order-1">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!-- Konten Slide 1 -->
                                <img src="gambar1.jpg" alt="Promo 1">
                            </div>
                            <div class="swiper-slide">
                                <!-- Konten Slide 2 -->
                                <img src="gambar2.jpg" alt="Promo 2">
                            </div>
                            <!-- Tambahkan lebih banyak swiper-slide sesuai dengan jumlah promosi yang ingin ditampilkan -->
                        </div>
                        <!-- Tombol navigasi -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

<section class="py-10">
    <div class="container">
        <div class="grid lg:grid-cols-3 gap-6">
            <div class="rounded-xl bg-cyan-600/20 relative lg:h-72 h-56 overflow-hidden">
                <div class="absolute end-0 bottom-0 h-full w-full flex items-end justify-end -z-10">
                    <img src="/images/other/bg-img-1.png" class="">
                </div>

                <div class="p-8">
                    <div class="flex flex-col items-start gap-2">
                        <span class="lg:text-base text-sm text-primary-700 font-medium">New Arrivals</span>
                        <h2 class="font-semibold text-default-700 text-2xl mb-1">Fresh Vegetables</h2>
                        <p class="text-sm font-medium text-default-800 mb-4">Crunch into freshness with our vibrant selection of vegetables.</p>
                        <a href="{{ route('second',['products','grid']) }}" class="inline-flex items-center justify-center gap-2 text-default-800 font-medium">
                            Shop Now
                            <span class="h-6 w-6 bg-primary text-white rounded-full inline-flex items-center justify-center">
                                <i class="ti ti-chevron-right text-lg"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div><!-- end grid-cols -->
            <div class="rounded-xl bg-teal-600/20 relative lg:h-72 h-56 overflow-hidden">
                <div class="absolute end-0 bottom-0 h-full w-full flex items-end justify-end -z-10">
                    <img src="/images/other/bg-img-2.png" class="">
                </div>
                <div class="p-8">
                    <div class="flex flex-col items-start gap-2">
                        <span class="text-base text-primary-700 font-medium">Season Sales</span>
                        <h2 class="font-semibold text-default-700 text-2xl mb-1">Daily Eating</h2>
                        <p class="text-sm font-medium text-default-800 mb-4">Fuel your day with our daily eating options – where flavor meets nourishment.</p>

                        <a href="{{ route('second',['products','grid']) }}" class="inline-flex items-center justify-center gap-2 text-default-800 font-medium">
                            Shop Now
                            <span class="h-6 w-6 bg-primary text-white rounded-full inline-flex items-center justify-center">
                                <i class="ti ti-chevron-right text-lg"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div><!-- end grid-cols -->
            <div class="rounded-xl bg-orange-600/20 relative lg:h-72 h-56 overflow-hidden">
                <div class="absolute end-0 bottom-0 h-full w-full flex items-end justify-end -z-10">
                    <img src="/images/other/bg-img-3.png" class="">
                </div>
                <div class="p-8">
                    <div class="flex flex-col items-start gap-2">
                        <span class="text-base text-primary-700 font-medium">100% Organics</span>
                        <h2 class="font-semibold text-default-700 text-2xl mb-1">Healthy Fruits</h2>
                        <p class="text-sm font-medium text-default-800 mb-4">Fuel your day with our daily eating options – where flavor meets nourishment.</p>

                        <a href="{{ route('second',['products','grid']) }}" class="inline-flex items-center justify-center gap-2 text-default-800 font-medium">
                            Shop Now
                            <span class="h-6 w-6 bg-primary text-white rounded-full inline-flex items-center justify-center">
                                <i class="ti ti-chevron-right text-lg"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div><!-- end grid-cols -->
        </div><!-- end grid -->
    </div>
</section>

<section class="lg:py-10 py-3">
    <div class="container">
        <div class="flex items-center justify-between">
            <h4 class="text-2xl font-semibold text-default-800">Top Selling Products</h4>
        </div>
        <div class="relative">
            <div id="home-product-swiper" class="swiper mt-5">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="border border-default-200 rounded-xl overflow-hidden duration-500 hover:border-primary relative">
                            <div class="p-4">
                                <div class="relative">
                                    <div class="absolute top-0 start-0">
                                        <span class="inline-flex items-center gap-1.5 py-1 px-4 rounded-lg text-sm font-medium bg-primary/10 text-primary">Sale</span>
                                    </div>
                                    <div class="absolute top-0 end-0">
                                        <span class="inline-flex items-center gap-1.5 py-1 px-4 rounded-lg text-sm font-medium bg-red-500/10 text-red-500">Hot</span>
                                    </div>
                                    <img src="/images/product/1.png" alt="" class="w-full h-full">
                                </div>
                            </div>

                            <div class="border-t border-dashed border-default-200 p-4">
                                <div class="mb-4">
                                    <a href="{{ route('second',['products','details']) }}" class="text-default-600 text-xl font-semibold line-clamp-1 after:absolute after:inset-0 after:z-0">Banana</a>
                                </div>

                                <div class="flex items-center justify-between gap-2 mb-4">
                                    <span class="flex items-center gap-2">
                                        <span class="h-5 w-5 inline-flex items-center justify-center bg-primary text-white rounded-full"><i class="ti ti-star-filled text-sm"></i></span>
                                        <span class="text-sm text-default-950 from-inherit">4.5</span>
                                    </span>

                                    <div class="relative z-10 inline-flex justify-between border border-default-200 p-1 rounded-full" data-hs-input-number>
                                        <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-decrement>
                                            –
                                        </button>
                                        <input type="number" class="w-8 border-0 text-sm text-center text-default-800 focus:ring-0 p-0 bg-transparent" value="1" data-hs-input-number-input>
                                        <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-increment>
                                            +
                                        </button>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between gap-2">
                                    <h4 class="font-semibold text-xl text-primary">$15 <span class="text-default-400 text-base line-through">$25</span> </h4>
                                    <a href="{{ route('second', ['pages', 'cart']) }}" class="shrink flex items-center justify-center rounded-lg bg-primary/20 text-primary px-6 py-2.5 text-center text-sm font-medium shadow-sm transition-all duration-200 hover:bg-primary hover:text-white relative z-10">
                                        <i class="ti ti-shopping-bag text-xl me-2"></i>
                                        <span>Add to cart</span>
                                    </a><!-- end btn -->
                                </div>
                            </div>
                        </div><!-- end card -->
                    </div>

                    <div class="swiper-slide">
                        <div class="border border-default-200 rounded-xl overflow-hidden duration-500 hover:border-primary relative">
                            <div class="p-4">
                                <div class="relative">
                                    <div class="absolute top-0 end-0">
                                        <span class="inline-flex items-center gap-1.5 py-1 px-4 rounded-lg text-sm font-medium bg-red-500/10 text-red-500">Hot</span>
                                    </div>
                                    <img src="/images/product/2.png" alt="" class="w-full h-full">
                                </div>
                            </div>

                            <div class="border-t border-dashed border-default-200 p-4">
                                <div class="mb-4">
                                    <a href="{{ route('second',['products','details']) }}" class="text-default-600 text-xl font-semibold line-clamp-1 after:absolute after:inset-0 after:z-0">Shale Snacks</a>
                                </div>

                                <div class="flex items-center justify-between gap-2 mb-4">
                                    <span class="flex items-center gap-2">
                                        <span class="h-5 w-5 inline-flex items-center justify-center bg-primary text-white rounded-full"><i class="ti ti-star-filled text-sm"></i></span>
                                        <span class="text-sm text-default-950 from-inherit">3.9</span>
                                    </span>

                                    <div class="relative z-10 inline-flex justify-between border border-default-200 p-1 rounded-full" data-hs-input-number>
                                        <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-decrement>
                                            –
                                        </button>
                                        <input type="number" class="w-8 border-0 text-sm text-center text-default-800 focus:ring-0 p-0 bg-transparent" value="1" data-hs-input-number-input>
                                        <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-increment>
                                            +
                                        </button>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between gap-2">
                                    <h4 class="font-semibold text-xl text-primary">$18</h4>
                                    <a href="{{ route('second', ['pages', 'cart']) }}" class="shrink flex items-center justify-center rounded-lg bg-primary/20 text-primary px-6 py-2.5 text-center text-sm font-medium shadow-sm transition-all duration-200 hover:bg-primary hover:text-white relative z-10">
                                        <i class="ti ti-shopping-bag text-xl me-2"></i>
                                        <span>Add to cart</span>
                                    </a><!-- end btn -->
                                </div>
                            </div>
                        </div><!-- end card -->
                    </div>

                    <div class="swiper-slide">
                        <div class="border border-default-200 rounded-xl overflow-hidden duration-500 hover:border-primary relative">
                            <div class="p-4">
                                <div class="relative">
                                    <div class="absolute top-0 start-0">
                                        <span class="inline-flex items-center gap-1.5 py-1 px-4 rounded-lg text-sm font-medium bg-primary/10 text-primary">Sale</span>
                                    </div>
                                    <img src="/images/product/3.png" alt="" class="w-full h-full">
                                </div>
                            </div>

                            <div class="border-t border-dashed border-default-200 p-4">
                                <div class="mb-4">
                                    <a href="{{ route('second',['products','details']) }}" class="text-default-600 text-xl font-semibold line-clamp-1 after:absolute after:inset-0 after:z-0">Grapes</a>
                                </div>

                                <div class="flex items-center justify-between gap-2 mb-4">
                                    <span class="flex items-center gap-2">
                                        <span class="h-5 w-5 inline-flex items-center justify-center bg-primary text-white rounded-full"><i class="ti ti-star-filled text-sm"></i></span>
                                        <span class="text-sm text-default-950 from-inherit">4.2</span>
                                    </span>

                                    <div class="relative z-10 inline-flex justify-between border border-default-200 p-1 rounded-full" data-hs-input-number>
                                        <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-decrement>
                                            –
                                        </button>
                                        <input type="number" class="w-8 border-0 text-sm text-center text-default-800 focus:ring-0 p-0 bg-transparent" value="1" data-hs-input-number-input>
                                        <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-increment>
                                            +
                                        </button>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between gap-2">
                                    <h4 class="font-semibold text-xl text-primary">$22 <span class="text-default-400 text-base line-through">$32</span> </h4>
                                    <a href="{{ route('second', ['pages', 'cart']) }}" class="shrink flex items-center justify-center rounded-lg bg-primary/20 text-primary px-6 py-2.5 text-center text-sm font-medium shadow-sm transition-all duration-200 hover:bg-primary hover:text-white relative z-10">
                                        <i class="ti ti-shopping-bag text-xl me-2"></i>
                                        <span>Add to cart</span>
                                    </a><!-- end btn -->
                                </div>
                            </div>
                        </div><!-- end card -->
                    </div>

                    <div class="swiper-slide">
                        <div class="border border-default-200 rounded-xl overflow-hidden duration-500 hover:border-primary relative">
                            <div class="p-4">
                                <div class="relative">
                                    <img src="/images/product/4.png" alt="" class="w-full h-full">
                                </div>
                            </div>

                            <div class="border-t border-dashed border-default-200 p-4">
                                <div class="mb-4">
                                    <a href="{{ route('second',['products','details']) }}" class="text-default-600 text-xl font-semibold line-clamp-1 after:absolute after:inset-0 after:z-0">Banana Chips</a>
                                </div>

                                <div class="flex items-center justify-between gap-2 mb-4">
                                    <span class="flex items-center gap-2">
                                        <span class="h-5 w-5 inline-flex items-center justify-center bg-primary text-white rounded-full"><i class="ti ti-star-filled text-sm"></i></span>
                                        <span class="text-sm text-default-950 from-inherit">3.7</span>
                                    </span>

                                    <div class="relative z-10 inline-flex justify-between border border-default-200 p-1 rounded-full" data-hs-input-number>
                                        <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-decrement>
                                            –
                                        </button>
                                        <input type="number" class="w-8 border-0 text-sm text-center text-default-800 focus:ring-0 p-0 bg-transparent" value="1" data-hs-input-number-input>
                                        <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-increment>
                                            +
                                        </button>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between gap-2">
                                    <h4 class="font-semibold text-xl text-primary">$8</h4>
                                    <a href="{{ route('second', ['pages', 'cart']) }}" class="shrink flex items-center justify-center rounded-lg bg-primary/20 text-primary px-6 py-2.5 text-center text-sm font-medium shadow-sm transition-all duration-200 hover:bg-primary hover:text-white relative z-10">
                                        <i class="ti ti-shopping-bag text-xl me-2"></i>
                                        <span>Add to cart</span>
                                    </a><!-- end btn -->
                                </div>
                            </div>
                        </div><!-- end card -->
                    </div>

                    <div class="swiper-slide">
                        <div class="border border-default-200 rounded-xl overflow-hidden duration-500 hover:border-primary relative">
                            <div class="p-4">
                                <div class="relative">
                                    <img src="/images/product/5.png" alt="" class="w-full h-full">
                                    <div class="absolute top-0 end-0">
                                        <span class="inline-flex items-center gap-1.5 py-1 px-4 rounded-lg text-sm font-medium bg-red-500/10 text-red-500">Hot</span>
                                    </div>
                                </div>
                            </div>

                            <div class="border-t border-dashed border-default-200 p-4">
                                <div class="mb-4">
                                    <a href="{{ route('second',['products','details']) }}" class="text-default-600 text-xl font-semibold line-clamp-1 after:absolute after:inset-0 after:z-0">ProtinX</a>
                                </div>

                                <div class="flex items-center justify-between gap-2 mb-4">
                                    <span class="flex items-center gap-2">
                                        <span class="h-5 w-5 inline-flex items-center justify-center bg-primary text-white rounded-full"><i class="ti ti-star-filled text-sm"></i></span>
                                        <span class="text-sm text-default-950 from-inherit">4.7</span>
                                    </span>

                                    <div class="relative z-10 inline-flex justify-between border border-default-200 p-1 rounded-full" data-hs-input-number>
                                        <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-decrement>
                                            –
                                        </button>
                                        <input type="number" class="w-8 border-0 text-sm text-center text-default-800 focus:ring-0 p-0 bg-transparent" value="1" data-hs-input-number-input>
                                        <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-increment>
                                            +
                                        </button>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between gap-2">
                                    <h4 class="font-semibold text-xl text-primary">$66 </h4>
                                    <a href="{{ route('second', ['pages', 'cart']) }}" class="shrink flex items-center justify-center rounded-lg bg-primary/20 text-primary px-6 py-2.5 text-center text-sm font-medium shadow-sm transition-all duration-200 hover:bg-primary hover:text-white relative z-10">
                                        <i class="ti ti-shopping-bag text-xl me-2"></i>
                                        <span>Add to cart</span>
                                    </a><!-- end btn -->
                                </div>
                            </div>
                        </div><!-- end card -->
                    </div>

                    <div class="swiper-slide">
                        <div class="border border-default-200 rounded-xl overflow-hidden duration-500 hover:border-primary relative">
                            <div class="p-4">
                                <div class="relative">
                                    <img src="/images/product/6.png" alt="" class="w-full h-full">
                                    <div class="absolute top-0 start-0">
                                        <span class="inline-flex items-center gap-1.5 py-1 px-4 rounded-lg text-sm font-medium bg-primary/10 text-primary">Sale</span>
                                    </div>
                                </div>
                            </div>

                            <div class="border-t border-dashed border-default-200 p-4">
                                <div class="mb-4">
                                    <a href="{{ route('second',['products','details']) }}" class="text-default-600 text-xl font-semibold line-clamp-1 after:absolute after:inset-0 after:z-0">Nuts & Berries</a>
                                </div>

                                <div class="flex items-center justify-between gap-2 mb-4">
                                    <span class="flex items-center gap-2">
                                        <span class="h-5 w-5 inline-flex items-center justify-center bg-primary text-white rounded-full"><i class="ti ti-star-filled text-sm"></i></span>
                                        <span class="text-sm text-default-950 from-inherit">4.9</span>
                                    </span>

                                    <div class="relative z-10 inline-flex justify-between border border-default-200 p-1 rounded-full" data-hs-input-number>
                                        <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-decrement>
                                            –
                                        </button>
                                        <input type="number" class="w-8 border-0 text-sm text-center text-default-800 focus:ring-0 p-0 bg-transparent" value="1" data-hs-input-number-input>
                                        <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-increment>
                                            +
                                        </button>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between gap-2">
                                    <h4 class="font-semibold text-xl text-primary">$74 <span class="text-default-400 text-base line-through">$89</span> </h4>
                                    <a href="{{ route('second', ['pages', 'cart']) }}" class="shrink flex items-center justify-center rounded-lg bg-primary/20 text-primary px-6 py-2.5 text-center text-sm font-medium shadow-sm transition-all duration-200 hover:bg-primary hover:text-white relative z-10">
                                        <i class="ti ti-shopping-bag text-xl me-2"></i>
                                        <span>Add to cart</span>
                                    </a><!-- end btn -->
                                </div>
                            </div>
                        </div><!-- end card -->
                    </div>

                    <div class="swiper-slide">
                        <div class="border border-default-200 rounded-xl overflow-hidden duration-500 hover:border-primary relative">
                            <div class="p-4">
                                <div class="relative">
                                    <img src="/images/product/7.png" alt="" class="w-full h-full">
                                    <div class="absolute top-0 start-0">
                                        <span class="inline-flex items-center gap-1.5 py-1 px-4 rounded-lg text-sm font-medium bg-primary/10 text-primary">Sale</span>
                                    </div>
                                    <div class="absolute top-0 end-0">
                                        <span class="inline-flex items-center gap-1.5 py-1 px-4 rounded-lg text-sm font-medium bg-red-500/10 text-red-500">Hot</span>
                                    </div>
                                </div>
                            </div>

                            <div class="border-t border-dashed border-default-200 p-4">
                                <div class="mb-4">
                                    <a href="{{ route('second',['products','details']) }}" class="text-default-600 text-xl font-semibold line-clamp-1 after:absolute after:inset-0 after:z-0">Avocado</a>
                                </div>

                                <div class="flex items-center justify-between gap-2 mb-4">
                                    <span class="flex items-center gap-2">
                                        <span class="h-5 w-5 inline-flex items-center justify-center bg-primary text-white rounded-full"><i class="ti ti-star-filled text-sm"></i></span>
                                        <span class="text-sm text-default-950 from-inherit">4.6</span>
                                    </span>

                                    <div class="relative z-10 inline-flex justify-between border border-default-200 p-1 rounded-full" data-hs-input-number>
                                        <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-decrement>
                                            –
                                        </button>
                                        <input type="number" class="w-8 border-0 text-sm text-center text-default-800 focus:ring-0 p-0 bg-transparent" value="1" data-hs-input-number-input>
                                        <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-increment>
                                            +
                                        </button>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between gap-2">
                                    <h4 class="font-semibold text-xl text-primary">$46 <span class="text-default-400 text-base line-through">$89</span> </h4>
                                    <a href="{{ route('second', ['pages', 'cart']) }}" class="shrink flex items-center justify-center rounded-lg bg-primary/20 text-primary px-6 py-2.5 text-center text-sm font-medium shadow-sm transition-all duration-200 hover:bg-primary hover:text-white relative z-10">
                                        <i class="ti ti-shopping-bag text-xl me-2"></i>
                                        <span>Add to cart</span>
                                    </a><!-- end btn -->
                                </div>
                            </div>
                        </div><!-- end card -->
                    </div>

                    <div class="swiper-slide">
                        <div class="border border-default-200 rounded-xl overflow-hidden duration-500 hover:border-primary relative">
                            <div class="p-4">
                                <div class="relative">
                                    <img src="/images/product/8.png" alt="" class="w-full h-full">
                                    <div class="absolute top-0 end-0">
                                        <span class="inline-flex items-center gap-1.5 py-1 px-4 rounded-lg text-sm font-medium bg-red-500/10 text-red-500">Hot</span>
                                    </div>
                                </div>
                            </div>

                            <div class="border-t border-dashed border-default-200 p-4">
                                <div class="mb-4">
                                    <a href="{{ route('second',['products','details']) }}" class="text-default-600 text-xl font-semibold line-clamp-1 after:absolute after:inset-0 after:z-0">Chicken Meat</a>
                                </div>

                                <div class="flex items-center justify-between gap-2 mb-4">
                                    <span class="flex items-center gap-2">
                                        <span class="h-5 w-5 inline-flex items-center justify-center bg-primary text-white rounded-full"><i class="ti ti-star-filled text-sm"></i></span>
                                        <span class="text-sm text-default-950 from-inherit">4.3</span>
                                    </span>

                                    <div class="relative z-10 inline-flex justify-between border border-default-200 p-1 rounded-full" data-hs-input-number>
                                        <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-decrement>
                                            –
                                        </button>
                                        <input type="number" class="w-8 border-0 text-sm text-center text-default-800 focus:ring-0 p-0 bg-transparent" value="1" data-hs-input-number-input>
                                        <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-increment>
                                            +
                                        </button>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between gap-2">
                                    <h4 class="font-semibold text-xl text-primary">$59</h4>
                                    <a href="{{ route('second', ['pages', 'cart']) }}" class="shrink flex items-center justify-center rounded-lg bg-primary/20 text-primary px-6 py-2.5 text-center text-sm font-medium shadow-sm transition-all duration-200 hover:bg-primary hover:text-white relative z-10">
                                        <i class="ti ti-shopping-bag text-xl me-2"></i>
                                        <span>Add to cart</span>
                                    </a><!-- end btn -->
                                </div>
                            </div>
                        </div><!-- end card -->
                    </div>

                    <div class="swiper-slide">
                        <div class="border border-default-200 rounded-xl overflow-hidden duration-500 hover:border-primary relative">
                            <div class="p-4">
                                <div class="relative">
                                    <img src="/images/product/9.png" alt="" class="w-full h-full">
                                </div>
                            </div>

                            <div class="border-t border-dashed border-default-200 p-4">
                                <div class="mb-4">
                                    <a href="{{ route('second',['products','details']) }}" class="text-default-600 text-xl font-semibold line-clamp-1 after:absolute after:inset-0 after:z-0">Watermelon</a>
                                </div>

                                <div class="flex items-center justify-between gap-2 mb-4">
                                    <span class="flex items-center gap-2">
                                        <span class="h-5 w-5 inline-flex items-center justify-center bg-primary text-white rounded-full"><i class="ti ti-star-filled text-sm"></i></span>
                                        <span class="text-sm text-default-950 from-inherit">4.3</span>
                                    </span>

                                    <div class="relative z-10 inline-flex justify-between border border-default-200 p-1 rounded-full" data-hs-input-number>
                                        <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-decrement>
                                            –
                                        </button>
                                        <input type="number" class="w-8 border-0 text-sm text-center text-default-800 focus:ring-0 p-0 bg-transparent" value="1" data-hs-input-number-input>
                                        <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-increment>
                                            +
                                        </button>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between gap-2">
                                    <h4 class="font-semibold text-xl text-primary">$42</h4>
                                    <a href="{{ route('second', ['pages', 'cart']) }}" class="shrink flex items-center justify-center rounded-lg bg-primary/20 text-primary px-6 py-2.5 text-center text-sm font-medium shadow-sm transition-all duration-200 hover:bg-primary hover:text-white relative z-10">
                                        <i class="ti ti-shopping-bag text-xl me-2"></i>
                                        <span>Add to cart</span>
                                    </a><!-- end btn -->
                                </div>
                            </div>
                        </div><!-- end card -->
                    </div>

                    <div class="swiper-slide">
                        <div class="border border-default-200 rounded-xl overflow-hidden duration-500 hover:border-primary relative">
                            <div class="p-4">
                                <div class="relative">
                                    <img src="/images/product/11.png" alt="" class="w-full h-full">
                                    <div class="absolute top-0 start-0">
                                        <span class="inline-flex items-center gap-1.5 py-1 px-4 rounded-lg text-sm font-medium bg-primary/10 text-primary">Sale</span>
                                    </div>
                                    <div class="absolute top-0 end-0">
                                        <span class="inline-flex items-center gap-1.5 py-1 px-4 rounded-lg text-sm font-medium bg-red-500/10 text-red-500">Hot</span>
                                    </div>
                                </div>
                            </div>

                            <div class="border-t border-dashed border-default-200 p-4">
                                <div class="mb-4">
                                    <a href="{{ route('second',['products','details']) }}" class="text-default-600 text-xl font-semibold line-clamp-1 after:absolute after:inset-0 after:z-0">Kiwi</a>
                                </div>

                                <div class="flex items-center justify-between gap-2 mb-4">
                                    <span class="flex items-center gap-2">
                                        <span class="h-5 w-5 inline-flex items-center justify-center bg-primary text-white rounded-full"><i class="ti ti-star-filled text-sm"></i></span>
                                        <span class="text-sm text-default-950 from-inherit">4.3</span>
                                    </span>

                                    <div class="relative z-10 inline-flex justify-between border border-default-200 p-1 rounded-full" data-hs-input-number>
                                        <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-decrement>
                                            –
                                        </button>
                                        <input type="number" class="w-8 border-0 text-sm text-center text-default-800 focus:ring-0 p-0 bg-transparent" value="1" data-hs-input-number-input>
                                        <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-increment>
                                            +
                                        </button>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between gap-2">
                                    <h4 class="font-semibold text-xl text-primary">$68 <span class="text-default-400 text-base line-through">$77</span> </h4>
                                    <a href="{{ route('second', ['pages', 'cart']) }}" class="shrink flex items-center justify-center rounded-lg bg-primary/20 text-primary px-6 py-2.5 text-center text-sm font-medium shadow-sm transition-all duration-200 hover:bg-primary hover:text-white relative z-10">
                                        <i class="ti ti-shopping-bag text-xl me-2"></i>
                                        <span>Add to cart</span>
                                    </a><!-- end btn -->
                                </div>
                            </div>
                        </div><!-- end card -->
                    </div>
                </div>
            </div><!-- end grid -->

            <button class="home-product-swiper-next absolute z-30 lg:inline-flex items-center justify-center hidden h-10 w-10 bg-primary-100 hover:bg-primary-200 rounded-full text-primary transition-all duration-200 -end-0 top-1/2 translate-x-1/2 -translate-y-1/2 dark:bg-primary-900 dark:hover:bg-primary-800">
                <i class="ti ti-chevron-right text-lg"></i>
            </button><!-- end swiper-indicator -->
            <button class="home-product-swiper-prev absolute z-30 lg:inline-flex items-center justify-center hidden h-10 w-10 bg-primary-100 hover:bg-primary-200 rounded-full text-primary transition-all duration-200 -start-0 top-1/2 -translate-x-1/2 -translate-y-1/2 dark:bg-primary-900 dark:hover:bg-primary-800">
                <i class="ti ti-chevron-left text-lg"></i>
            </button><!-- end swiper-indicator -->
        </div>
    </div><!-- end container -->
</section>

<section class="lg:py-10 py-3">
    <div class="container">
        <div class="bg-primary/10 rounded-2xl">
            <div class="p-10">
                <div class="grid lg:grid-cols-2 items-center gap-10">
                    <div class="">
                        <p class="inline-flex items-center gap-2 text-base font-medium text-default-800 mb-4"><i class="ti ti-circle-filled text-xs"></i> For orders beginning at $100.</p>
                        <h2 class="text-4xl/snug font-bold text-default-900">We offer next-day delivery between 10:00 AM and 08:00 PM</h2>
                        <p class="text-base text-default-700 mt-2">Experience the convenience of our next-day delivery service, available from 10:00 AM to 08:00 PM.</p>
                        <button type="button" class="mt-6 p-1 pe-4 flex items-center justify-center gap-2 rounded-2xl border border-b-2 border-primary-600 text-white bg-primary-600 backdrop-blur-xl hover:text-white hover:border-primary-700 hover:bg-primary-700 drop-shadow-lg transition-all duration-300 group">
                            <span class="h-10 w-10 flex items-center justify-center bg-white/20 backdrop-blur-xl rounded-xl text-white group-hover:bg-white/20 transition-all duration-300">
                                <i class="ti ti-arrow-move-right text-xl"></i>
                            </span>
                            <span class="text-base font-semibold">Read More</span>
                        </button>
                    </div>

                    <div class="h-auto md:h-80 mx-auto">
                        <img src="/images/other/delivery-boy.png" alt="" class="max-w-full h-full">
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end container -->
</section>

<section class="lg:py-10 py-3">
    <div class="container">
        <div class="flex items-center justify-between">
            <div class="">
                <h4 class="text-2xl font-semibold text-default-800">This Week Hottest Offer.</h4>
                <p class="text-base text-default-700 mb-4">Discover our hottest offer this week – don't miss out on unbeatable deals! 🔥 Limited time only.</p>
            </div>
        </div>
        <div class="grid lg:grid-cols-2 items-center gap-10 mt-6">
            <div class="">
                <img src="/images/other/juice.jpg" alt="" class="h-auto lg:h-[450px] rounded-xl">
            </div>
            <div class="">
                <h2 class="text-3xl font-bold text-default-800">Fresh Mix Fruits Juice</h2>
                <p class="text-base text-default-800 max-w-xl mt-2">Premium quality fresh potatoes, sourced for perfection. Elevate your culinary creations with our farm-fresh potatoes. Unparalleled in taste and texture.</p>

                <div class="flex items-center lg:gap-4 justify-around my-6 bg-default-100 rounded-xl p-2 lg:p-0 lg:justify-start lg:bg-transparent">
                    <div class="inline-flex flex-col items-center justify-center lg:text-5xl font-semibold lg:rounded-3xl lg:bg-default-100 text-default-900 lg:h-32 lg:w-32">
                        <span id="days" class="text-xl lg:text-3xl">0</span>
                        <span class="text-base mt-2 hidden sm:block">Days</span>
                    </div>

                    <div class="text-lg block md:hidden">:</div>

                    <div class="inline-flex flex-col items-center justify-center lg:text-5xl font-semibold lg:rounded-3xl lg:bg-default-100 text-default-900 lg:h-32 lg:w-32">
                        <span id="hours" class="text-xl lg:text-3xl">0</span>
                        <span class="text-base mt-2 hidden sm:block">Hours</span>
                    </div>

                    <div class="text-lg block md:hidden">:</div>

                    <div class="inline-flex flex-col items-center justify-center lg:text-5xl font-semibold lg:rounded-3xl lg:bg-default-100 text-default-900 lg:h-32 lg:w-32">
                        <span id="minutes" class="text-xl lg:text-3xl">0</span>
                        <span class="text-base mt-2 hidden sm:block">Minutes</span>
                    </div>

                    <div class="text-lg block md:hidden">:</div>

                    <div class="inline-flex flex-col items-center justify-center lg:text-5xl font-semibold lg:rounded-3xl lg:bg-default-100 text-default-900 lg:h-32 lg:w-32">
                        <span id="seconds" class="text-xl lg:text-3xl">0</span>
                        <span class="text-base mt-2 hidden sm:block">Seconds</span>
                    </div>
                </div>

                <h4 class="text-3xl font-semibold text-default-900">$20.00 <span class="text-xl line-through text-default-600">$55.00</span></h4>
                <button type="button" class="mt-6 p-1 pe-4 flex items-center justify-center gap-2 rounded-2xl border border-b-2 border-primary-600 text-white bg-primary-600 backdrop-blur-xl hover:text-white hover:border-primary-700 hover:bg-primary-700 drop-shadow-lg transition-all duration-300 group">
                    <span class="h-10 w-10 flex items-center justify-center bg-white/20 backdrop-blur-xl rounded-xl text-white group-hover:bg-white/20 transition-all duration-300">
                        <i class="ti ti-shopping-bag text-xl"></i>
                    </span>
                    <span class="text-base font-semibold">Add To Cart</span>
                </button>
            </div>
        </div>
    </div>
</section>

<section class="lg:pt-10 pt-3">
    <div class="relative bg-primary/20 backdrop-blur-xl py-16">
        <div class="container">
            <div class="grid lg:grid-cols-2 items-center">
                <div class="">
                    <h2 class="text-lg sm:text-xl lg:text-3xl/normal font-bold text-default-900 max-w-xl">Simplify your online shopping experience with our user-friendly mobile app.</h2>
                    <p class="text-base/normal text-default-600 md:font-medium max-w-xl mt-4">GreenCart streamlines your online grocery experience, providing swift delivery and access to the finest seasonal farm-fresh produce.</p>

                    <div class="flex flex-wrap items-center gap-2 mt-6">
                        <a href="#" class="py-2 px-5 inline-flex items-center justify-center gap-2 font-semibold tracking-wide border align-middle duration-500 text-sm bg-zinc-700 hover:bg-zinc-800 border-zinc-700 hover:border-zinc-800 text-zinc-100 rounded-md">
                            <i class="ti ti-brand-apple-filled text-4xl"></i>
                            <span class="">
                                <span class="block text-xs">Download on</span>
                                <span class="block text-lg">App Store</span>
                            </span>
                        </a>
                        <a href="#" class="py-2 px-5 inline-flex items-center justify-center gap-2 font-semibold tracking-wide border align-middle duration-500 text-sm bg-zinc-700 hover:bg-zinc-800 border-zinc-700 hover:border-zinc-800 text-zinc-100 rounded-md">
                            <i class="ti ti-brand-google-play text-4xl"></i>
                            <span class="">
                                <span class="block text-xs">Get it on</span>
                                <span class="block text-lg">Play Store</span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="hidden lg:block">
                    <img src="/images/other/online-shopping.png" alt="" class="h-80 mx-auto">
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>

@include('layouts.shared/footer')

@endsection

@section('script')
@vite(['resources/js/home.js'])
@endsection