@extends('user')

@section('content')

@include('layouts.shared/navbar')

@include('layouts.shared/mobile-nav')


<section class="md:bg-right-bottom bg-cover bg-[url(/images/other/hero.png)]">
    <div class="container">
        <div class="max-w-3xl py-20 lg:py-40">
            <h3 class="text-[40px] leading-snug font-semibold text-white mb-4">Delight in Fresh Fruits with Free
                Delivery to Your Doorstep!</h3>
            <p class="text-base/relaxed text-zinc-100">Savor the sweetness of our tasty fruits, and enjoy the added
                delight of free delivery on your order. Elevate your snacking experience with freshness brought right to
                your doorstep!</p>

            <div class="flex flex-wrap items-center gap-6 mt-8">
                <button type="button"
                    class="p-1 pe-4 flex items-center justify-center gap-2 rounded-2xl border border-b-2 border-primary-600 text-white bg-primary-600 backdrop-blur-xl hover:text-white hover:border-primary-700 hover:bg-primary-700 drop-shadow-lg transition-all duration-300 group">
                    <span
                        class="h-10 w-10 flex items-center justify-center bg-white/40 backdrop-blur-xl rounded-xl text-white group-hover:bg-white/20 transition-all duration-300">
                        <i class="ti ti-shopping-bag text-xl"></i>
                    </span>
                    <span class="text-base font-semibold">Discover Store</span>
                </button>

                <span
                    class="inline-flex items-center gap-2 text-base text-zinc-200 border-b border-dashed border-zinc-200"><i
                        class="ti ti-circle-filled text-[10px]"></i> Over 4800 Fresh Products Available</span>
            </div>
        </div>
    </div>
</section>

<section class="lg:py-10 py-3">
    <div class="container overflow-hidden">
        <div class="flex items-center justify-between">
            <h4 class="text-2xl font-semibold text-default-800">Featured Categories</h4>
        </div>

        <div class="relative mt-4">
            <div class="swiper featured-categories w-full overflow-y-visible p-2">
                <div class="swiper-wrapper">

                    @foreach ($kategori as $item)
                        
                    
                    <div class="swiper-slide">
                        <div
                            class="group border border-default-200 rounded-xl py-2 transition-all duration-500 overflow-hidden hover:border-primary">
                            <a href="{{ url('kategori/'. $item->id) }}" class="flex items-center justify-center py-4 gap-10 transition-all duration-500">
                                <img src="{{ url('storage/kategori/'. $item->foto) }}" alt=""
                                    class="h-28 mx-auto transition-all duration-500 group-hover:scale-125">
                            </a>
                            <h5 class="text-base font-semibold text-default-800 text-center mt-2">{{ $item->nama }}</h5>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div><!-- end swiper -->
            <button
                class="featured-categories-next absolute z-30 lg:inline-flex items-center justify-center hidden h-10 w-10 bg-primary-100 hover:bg-primary-200 rounded-full text-primary transition-all duration-200 -end-3 top-1/2 -translate-y-1/2 dark:bg-primary-900 dark:hover:bg-primary-800">
                <i class="ti ti-chevron-right text-lg"></i>
            </button><!-- end swiper-indicator -->
            <button
                class="featured-categories-prev absolute z-30 lg:inline-flex items-center justify-center hidden h-10 w-10 bg-primary-100 hover:bg-primary-200 rounded-full text-primary transition-all duration-200 -start-3 top-1/2 -translate-y-1/2 dark:bg-primary-900 dark:hover:bg-primary-800">
                <i class="ti ti-chevron-left text-lg"></i>
            </button><!-- end swiper-indicator -->
        </div>
    </div><!-- end container -->
</section>

<section class="lg:py-10 py-3">
    <div class="container overflow-hidden">
        <div class="flex items-center justify-between">
            <h4 class="text-2xl font-semibold text-default-800">Top Selling Products</h4>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 2xl:grid-cols-5 gap-6 mt-5">
            @foreach ($barang as $item)
            <div
                class="border border-default-200 rounded-xl overflow-hidden duration-500 hover:border-primary relative">
                <div class="p-4">
                    <div class="relative">
                        <div class="absolute top-0 start-0">
                            <span
                                class="inline-flex items-center gap-1.5 py-1 px-4 rounded-lg text-sm font-medium bg-primary/10 text-primary">{{ $item->kategori }}</span>
                        </div>
                        <div class="absolute top-0 end-0">
                            <span
                                class="inline-flex items-center gap-1.5 py-1 px-4 rounded-lg text-sm font-medium bg-red-500/10 text-red-500">Hot</span>
                        </div>
                        @if ($item->foto)
                        @php
                        $gambarPaths = explode(',', $item->foto);
                        $gambar = $gambarPaths[0];
                        // dd($gambar);
                        @endphp
                        <img src="{{ asset('storage/' . $gambar) }}" alt="Foto Barang">
                        @endif
                    </div>
                </div>

                <div class="border-t border-dashed border-default-200 p-4 whitespace-nowrap">
                    <div class="mb-4">
                        <a href="{{ route('detailProduct', $item->id) }}"
                            class="text-default-600 text-xl font-semibold line-clamp-1 after:absolute after:inset-0 after:z-0">{{
                            $item->nama }}</a>
                    </div>

                    <div class="flex items-center justify-between gap-2 mb-4">
                        <span class="flex items-center gap-2">
                            <span
                                class="h-5 w-5 inline-flex items-center justify-center bg-primary text-white rounded-full"><i
                                    class="ti ti-star-filled text-sm"></i></span>
                            <span class="text-sm text-default-950 from-inherit">4.5</span>
                        </span>
                    </div>
                    <div class="flex items-center justify-between gap-2">
                        <h4 class="font-semibold text-xl text-primary">Rp. {{
                            number_format($item->hj, 0, ',', '.') }}</h4>
                        <a href="{{ route('addToCart', ['id' => $item->id]) }}"
                            class="shrink flex items-center justify-center rounded-lg bg-primary/20 text-primary px-6 py-2.5 text-center text-sm font-medium shadow-sm transition-all duration-200 hover:bg-primary hover:text-white relative z-10">
                            <i class="ti ti-shopping-bag text-xl me-2"></i>
                            <span>Add to cart</span>
                        </a><!-- end btn -->
                    </div>
                </div>
            </div><!-- end card -->
            @endforeach
        </div><!-- end grid -->
    </div><!-- end container -->
</section>

<section class="lg:py-10 py-3">
    <div class="container">
        <div class="flex items-center justify-between">
            <h4 class="text-2xl font-semibold text-default-800">Curated collections</h4>
        </div>

        <div class="grid xl:grid-cols-4 md:grid-cols-2 gap-6 mt-4">
            <div class="flex flex-col group border border-default-200 rounded-xl duration-500 hover:border-primary">
                <div class="rounded-lg overflow-hidden mx-2 mt-2">
                    <img src="/images/collection/1.png"
                        class="object-cover transition duration-300 ease-in-out transform group-hover:opacity-90 group-hover:scale-105" />
                </div>
                <div class="flex flex-col items-start p-4">
                    <h2 class="text-lg font-semibold mb-2 line-clamp-1 text-default-900">Quench your summer thirst
                        anytime, anywhere.</h2>
                    <p class="text-base line-clamp-1 text-default-600 mb-4">Your body's way of telling you that it's
                        make strong</p>
                    <a href="#"
                        class="group relative inline-flex items-center gap-2 font-semibold tracking-wide align-middle text-base text-center border-none text-primary hover:text-primary duration-500"><span
                            class="absolute h-px w-7/12 group-hover:w-full transition-all duration-500 rounded bg-primary/80 -bottom-0"></span>Learn
                        More <i class="ti ti-arrow-narrow-right text-xl/none align-middle"></i></a>
                </div>
            </div>
            <div class="flex flex-col group border border-default-200 rounded-xl duration-500 hover:border-primary">
                <div class="rounded-lg overflow-hidden mx-2 mt-2">
                    <img src="/images/collection/2.png"
                        class="object-cover transition duration-300 ease-in-out transform group-hover:opacity-90 group-hover:scale-105" />
                </div>
                <div class="flex flex-col items-start p-4">
                    <h2 class="text-lg font-semibold mb-2 line-clamp-1 text-default-900">The top choice among fast food
                        favorites.</h2>
                    <p class="text-base line-clamp-1 text-default-600 mb-4">A crowd favorite, reigning supreme in the
                        realm of fast food delights.</p>
                    <a href="#"
                        class="group relative inline-flex items-center gap-2 font-semibold tracking-wide align-middle text-base text-center border-none text-primary hover:text-primary duration-500"><span
                            class="absolute h-px w-7/12 group-hover:w-full transition-all duration-500 rounded bg-primary/80 -bottom-0"></span>Learn
                        More <i class="ti ti-arrow-narrow-right text-xl/none align-middle"></i></a>
                </div>
            </div>
            <div class="flex flex-col group border border-default-200 rounded-xl duration-500 hover:border-primary">
                <div class="rounded-lg overflow-hidden mx-2 mt-2">
                    <img src="/images/collection/3.png"
                        class="object-cover transition duration-300 ease-in-out transform group-hover:opacity-90 group-hover:scale-105" />
                </div>
                <div class="flex flex-col items-start p-4">
                    <h2 class="text-lg font-semibold mb-2 line-clamp-1 text-default-900">The top choice among
                        vegetables.</h2>
                    <p class="text-base line-clamp-1 text-default-600 mb-4">Savor the true essence of Japanese cuisine
                        with our authentic flavors.</p>
                    <a href="#"
                        class="group relative inline-flex items-center gap-2 font-semibold tracking-wide align-middle text-base text-center border-none text-primary hover:text-primary duration-500"><span
                            class="absolute h-px w-7/12 group-hover:w-full transition-all duration-500 rounded bg-primary/80 -bottom-0"></span>Learn
                        More <i class="ti ti-arrow-narrow-right text-xl/none align-middle"></i></a>
                </div>
            </div>
            <div class="flex flex-col group border border-default-200 rounded-xl duration-500 hover:border-primary">
                <div class="rounded-lg overflow-hidden mx-2 mt-2">
                    <img src="/images/collection/5.png"
                        class="object-cover transition duration-300 ease-in-out transform group-hover:opacity-90 group-hover:scale-105" />
                </div>
                <div class="flex flex-col items-start p-4">
                    <h2 class="text-lg font-semibold mb-2 line-clamp-1 text-default-900">Discover our fresh family of
                        foods.</h2>
                    <p class="text-base line-clamp-1 text-default-600 mb-4">Indulge in freshness with our delectable
                        food selection.</p>
                    <a href="#"
                        class="group relative inline-flex items-center gap-2 font-semibold tracking-wide align-middle text-base text-center border-none text-primary hover:text-primary duration-500"><span
                            class="absolute h-px w-7/12 group-hover:w-full transition-all duration-500 rounded bg-primary/80 -bottom-0"></span>Learn
                        More <i class="ti ti-arrow-narrow-right text-xl/none align-middle"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="lg:py-10 py-3">
    <div class="container">
        <div class="relative">
            <div class="swiper" id="discount-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div
                            class="relative h-full bg-no-repeat bg-cover bg-[url(/images/banner/banner-11.jpg)] rounded-xl overflow-hidden p-10">
                            <div class="absolute inset-0 bg-black/60 md:bg-black/40"></div>
                            <div class="relative">
                                <h3 class="text-3xl/snug italic text-white font-semibold max-w-xl line-clamp-2">Enjoy a
                                    fantastic 40% discount for incredible savings!</h3>
                                <p class="text-base font-medium text-white/80 max-w-lg mt-4 mb-8">We meticulously source
                                    and offer premium-quality beef, lamb, and pork, carefully selected from dedicated
                                    farmers.</p>
                                <a href="#"
                                    class="py-2 px-5 inline-flex items-center justify-center gap-1 font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-zinc-100 hover:bg-zinc-200 border-zinc-100 hover:border-zinc-200 text-zinc-900 rounded-md">Explore
                                    More <i class="ti ti-arrow-narrow-right text-lg/none"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="relative h-full bg-no-repeat bg-cover bg-[url(/images/banner/banner-1.png)] rounded-xl overflow-hidden p-10">
                            <div class="absolute inset-0 bg-black/60 md:bg-black/40"></div>
                            <div class="relative">
                                <h3 class="text-3xl/snug italic text-white font-semibold max-w-xl line-clamp-2">Unlock a
                                    flat 20% discount on your inaugural purchase at our store.</h3>
                                <p class="text-base font-medium text-white/80 max-w-lg mt-4 mb-8">Begin your shopping
                                    adventure with an exclusive 20% discount on your first purchase!</p>
                                <a href="#"
                                    class="py-2 px-5 inline-flex items-center justify-center gap-1 font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-zinc-100 hover:bg-zinc-200 border-zinc-100 hover:border-zinc-200 text-zinc-900 rounded-md">Explore
                                    More <i class="ti ti-arrow-narrow-right text-lg/none"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="relative h-full bg-no-repeat bg-cover bg-[url(/images/banner/banner-2.png)] rounded-xl overflow-hidden p-10">
                            <div class="absolute inset-0 bg-black/60 md:bg-black/40"></div>
                            <div class="relative">
                                <h3 class="text-3xl/snug italic text-white font-semibold max-w-xl line-clamp-2">Summer
                                    10% Discounts at Your Grocery Store!</h3>
                                <p class="text-base font-medium text-white/80 max-w-lg mt-4 mb-8">We meticulously source
                                    and offer premium-quality beef, lamb, and pork, carefully selected from dedicated
                                    farmers.</p>
                                <a href="#"
                                    class="py-2 px-5 inline-flex items-center justify-center gap-1 font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-zinc-100 hover:bg-zinc-200 border-zinc-100 hover:border-zinc-200 text-zinc-900 rounded-md">Explore
                                    More <i class="ti ti-arrow-narrow-right text-lg/none"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="xl:flex hidden">
                <button
                    class="discount-swiper-next absolute z-30 inline-flex items-center justify-center h-10 w-10 bg-primary-100 hover:bg-primary-200 rounded-full text-primary transition-all duration-200 -end-0 top-1/2 translate-x-1/2 -translate-y-1/2 dark:bg-primary-900 dark:hover:bg-primary-800">
                    <i class="ti ti-chevron-right text-lg"></i>
                </button><!-- end swiper-indicator -->
                <button
                    class="discount-swiper-prev absolute z-30 inline-flex items-center justify-center h-10 w-10 bg-primary-100 hover:bg-primary-200 rounded-full text-primary transition-all duration-200 -start-0 top-1/2 -translate-x-1/2 -translate-y-1/2 dark:bg-primary-900 dark:hover:bg-primary-800">
                    <i class="ti ti-chevron-left text-lg"></i>
                </button><!-- end swiper-indicator -->
            </div>
        </div>
    </div>
</section>

<section class="lg:pt-10 pt-3">
    <div class="relative bg-primary/20 backdrop-blur-xl py-16">
        <div class="container">
            <div class="grid lg:grid-cols-2 items-center">
                <div class="">
                    <h2 class="text-lg sm:text-xl lg:text-3xl/normal font-bold text-default-900 max-w-xl">Simplify your
                        online shopping experience with our user-friendly mobile app.</h2>
                    <p class="text-base/normal text-default-600 md:font-medium max-w-xl mt-4">GreenCart streamlines your
                        online grocery experience, providing swift delivery and access to the finest seasonal farm-fresh
                        produce.</p>

                    <div class="flex flex-wrap items-center gap-2 mt-6">
                        <a href="#"
                            class="py-2 px-5 inline-flex items-center justify-center gap-2 font-semibold tracking-wide border align-middle duration-500 text-sm bg-zinc-700 hover:bg-zinc-800 border-zinc-700 hover:border-zinc-800 text-zinc-100 rounded-md">
                            <i class="ti ti-brand-apple-filled text-4xl"></i>
                            <span class="">
                                <span class="block text-xs">Download on</span>
                                <span class="block text-lg">App Store</span>
                            </span>
                        </a>
                        <a href="#"
                            class="py-2 px-5 inline-flex items-center justify-center gap-2 font-semibold tracking-wide border align-middle duration-500 text-sm bg-zinc-700 hover:bg-zinc-800 border-zinc-700 hover:border-zinc-800 text-zinc-100 rounded-md">
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

@include('layouts.shared/footer')

@endsection

@section('script')
@vite(['resources/js/home.js'])
@endsection