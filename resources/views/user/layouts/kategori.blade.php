@extends('user')

@section('content')

@include('layouts.shared/navbar')

@include('layouts.shared/mobile-nav')

@include('layouts.shared/page-title' ,['subtitle' => 'Product', 'title' => 'Products Grid'])

<section class="py-6">
    <div class="container">
        <div class="">
            <div class="flex lg:flex-row flex-row-reverse items-center justify-between mb-6">
                <div class="flex items-center justify-center gap-2">
                    <span class="text-base text-default-950 me-3 hidden md:block">Sort By :</span>
                    <div class="relative">
                        <select id="all-select-categories" data-hs-select='{
                                "placeholder": "Select Category",
                                "toggleTag": "<button type=\"button\"></button>",
                                "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 block w-full rounded-md py-2 ps-4 pe-10 text-default-900 text-sm focus:ring-transparent border border-default-200 transition-all duration-300 hover:bg-default-100 before:absolute before:inset-0 before:z-[1]",
                                "dropdownClasses": "mt-2 z-50 min-w-[200px] max-h-[300px] p-1.5 space-y-0.5 bg-white border border-default-200 rounded-lg overflow-hidden overflow-y-auto end-0 dark:bg-default-50",
                                "optionClasses": "py-2 px-3 w-full text-sm text-default-800 cursor-pointer rounded-md hover:bg-default-100 focus:outline-none focus:bg-default-100",
                                "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><i class=\"ti ti-checks text-lg flex-shrink-0 text-primary\" /></i></span></div>"
                                }' class="hidden">
                            <option></option>
                            <option>Latest</option>
                            <option>Featured</option>
                            <option>Release Date</option>
                            <option>Avg. Rating</option>
                        </select>

                        <div class="absolute -inset-y-0 start-auto end-3 flex items-center">
                            <i class="ti ti-chevron-down shrink text-base/none"></i>
                        </div>
                    </div><!-- End Select -->
                </div>

                <div class="flex items-center gap-3">
                    <button data-hs-overlay="#filterSidebar"
                        class="xl:hidden relative flex items-center gap-2 font-medium text-default-950 text-sm py-2.5 px-4 xl:px-5 rounded-md border border-default-200 transition-all"
                        type="button">
                        <i class="ti ti-adjustments-horizontal text-xl"></i> Filter <span
                            class="px-2 py-0.5 ms-2 text-xs rounded bg-primary/30 text-primary-400">0</span>
                    </button>

                    <div class="2xl:flex relative menu-item hidden">
                        <input
                            class="ps-10 pe-4 py-2.5 block w-64 border border-default-200 rounded-md text-sm text-default-800 bg-transparent focus:ring-transparent"
                            placeholder="Search Here.." type="search">
                        <span class="absolute start-4 top-3">
                            <i class="ti ti-search"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative lg:flex gap-6">
            <div class="hs-overlay hs-overlay-open:translate-x-0 hidden max-w-sm xl:max-w-full xl:w-1/5 w-full -translate-x-full fixed top-0 start-0 transition-all transform h-full z-[60] xl:z-auto bg-white xl:!bg-transparent xl:translate-x-0 xl:block xl:static xl:start-auto dark:bg-default-50"
                id="filterSidebar" tabindex="-1">
                <div class="flex justify-between items-center py-3 px-4 border-b border-default-200 xl:hidden">
                    <h3 class="font-medium text-default-800">
                        Filter Options
                    </h3>

                    <button
                        class="inline-flex flex-shrink-0 justify-center items-center h-8 w-8 rounded-md text-default-500 hover:text-default-700 text-sm"
                        data-hs-overlay="#filterSidebar" type="button">
                        <i class="ti ti-x text-xl"></i>
                    </button>
                </div>

                <div class="space-y-4 custom-scroll h-[calc(100vh-128px)] overflow-y-auto lg:h-auto p-4 xl:p-0">
                    <form id="categoryForm" action="{{ route('filter.barang') }}" method="GET">
                        <div class="border border-default-200 bg-white dark:bg-default-50 rounded-lg">
                            <button
                                class="hs-collapse-toggle p-4 inline-flex justify-between items-center gap-2 transition-all uppercase font-medium text-base text-default-900 w-full open"
                                data-hs-collapse="#categoryfilter" id="hs-basic-collapse" type="button">
                                All Categories
                                <i class="ti ti-chevron-down text-xl/none hs-collapse-open:rotate-180 transition-all duration-500"></i>
                            </button>
                    
                            <div id="categoryfilter" class="hs-accordion-group w-full overflow-hidden transition-[height] duration-300 open">
                                <div class="relative px-5 py-3 border-t border-default-200 flex flex-col gap-4">
                                    @foreach($kategori as $category)
                                    <div class="flex items-center text-sm">
                                        <input
                                            class="form-checkbox text-primary border-default-200 bg-transparent rounded w-5 h-5 focus:ring-0 focus:ring-transparent focus:ring-offset-0 cursor-pointer"
                                            id="category_{{ $category->id }}" name="kategori[]" type="checkbox" value="{{ $category->id }}"
                                            onchange="document.getElementById('categoryForm').submit();">
                                        <label class="ps-2.5 sm:ps-3.5 inline-flex items-center gap-2 w-full text-default-600 text-sm select-none cursor-pointer"
                                            for="category_{{ $category->id }}">{{ $category->nama }} <span class="ms-auto">{{ $category->count }}</span></label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- end collapse -->

                    <div class="border border-default-200 bg-white dark:bg-default-50 rounded-lg">
                        <button
                            class="hs-collapse-toggle p-4 inline-flex justify-between items-center gap-2 transition-all uppercase font-medium text-base text-default-900 w-full open"
                            data-hs-collapse="#price" id="hs-basic-collapse" type="button">
                            Price
                            <i
                                class="ti ti-chevron-down text-xl/none hs-collapse-open:rotate-180 transition-all duration-500"></i>
                        </button>

                        <div aria-labelledby="hs-basic-collapse"
                            class="hs-collapse w-full overflow-hidden transition-[height] duration-300 open" id="price">
                            <div class="relative px-5 py-3 border-t border-default-200 flex flex-col space-y-3">
                                <div class="space-y-2 pt-4">
                                    <div id="product-price-range"></div>
                                    <!-- end product-range -->

                                    <div class="flex flex-wrap gap-2 items-center !mt-4">
                                        <div
                                            class="inline-flex items-center w-full gap-1 border border-default-200 py-2 px-4 rounded-md">
                                            Min price :
                                            <input class="border-none p-0 w-10 bg-transparent focus:ring-0" id="minCost"
                                                type="text" value="0">
                                        </div><!-- end min-price -->
                                        <div
                                            class="inline-flex items-center w-full gap-1 border border-default-200 py-2 px-4 rounded-md">
                                            Max price :
                                            <input class="border-none p-0 w-10 bg-transparent focus:ring-0" id="maxCost"
                                                type="text" value="1000">
                                        </div><!-- end max-price -->
                                    </div><!-- end flex -->
                                </div>
                            </div>
                        </div>
                    </div><!-- end collapse -->

                    <div class="border border-default-200 bg-white dark:bg-default-50 rounded-lg">
                        <button
                            class="hs-collapse-toggle p-4 inline-flex justify-between items-center gap-2 transition-all uppercase font-medium text-base text-default-900 w-full open"
                            data-hs-collapse="#rating" id="hs-basic-collapse" type="button">
                            Rating
                            <i
                                class="ti ti-chevron-down text-xl/none hs-collapse-open:rotate-180 transition-all duration-500"></i>
                        </button>

                        <div aria-labelledby="hs-basic-collapse"
                            class="hs-collapse w-full overflow-hidden transition-[height] duration-300 open"
                            id="rating">
                            <div class="relative px-5 py-3 border-t border-default-200 flex flex-col space-y-5">
                                <div class="flex flex-col gap-4">
                                    <div class="flex items-center text-sm">

                                        <input
                                            class="form-checkbox text-primary border-default-200 bg-transparent rounded w-5 h-5 focus:ring-0 focus:ring-transparent focus:ring-offset-0 cursor-pointer"
                                            id="5Star" name="5Star" type="checkbox">
                                        <label
                                            class="ps-2.5 sm:ps-3.5 inline-flex items-center gap-2 w-full text-default-600 text-sm select-none cursor-pointer"
                                            for="5Star">5 Star <span class="ms-auto">245</span></label>
                                    </div><!-- end checkbox -->
                                    <div class="flex items-center text-sm">
                                        <input
                                            class="form-checkbox text-primary border-default-200 bg-transparent rounded w-5 h-5 focus:ring-0 focus:ring-transparent focus:ring-offset-0 cursor-pointer"
                                            id="4StarUp" name="4StarUp" type="checkbox">
                                        <label
                                            class="ps-2.5 sm:ps-3.5 inline-flex items-center gap-2 w-full text-default-600 text-sm select-none cursor-pointer"
                                            for="4StarUp">4 Star &amp; up<span class="ms-auto">754</span></label>
                                    </div><!-- end checkbox -->
                                    <div class="flex items-center text-sm">
                                        <input checked=""
                                            class="form-checkbox text-primary border-default-200 bg-transparent rounded w-5 h-5 focus:ring-0 focus:ring-transparent focus:ring-offset-0 cursor-pointer"
                                            id="3StarUp" name="3StarUp" type="checkbox">
                                        <label
                                            class="ps-2.5 sm:ps-3.5 inline-flex items-center gap-2 w-full text-default-600 text-sm select-none cursor-pointer"
                                            for="3StarUp">3 Star &amp; up<span class="ms-auto">851</span></label>
                                    </div><!-- end checkbox -->
                                    <div class="flex items-center text-sm">
                                        <input
                                            class="form-checkbox text-primary border-default-200 bg-transparent rounded w-5 h-5 focus:ring-0 focus:ring-transparent focus:ring-offset-0 cursor-pointer"
                                            id="2StarUp" name="2StarUp" type="checkbox">
                                        <label
                                            class="ps-2.5 sm:ps-3.5 inline-flex items-center gap-2 w-full text-default-600 text-sm select-none cursor-pointer"
                                            for="2StarUp">2 Star &amp; up<span class="ms-auto">245</span></label>
                                    </div><!-- end checkbox -->
                                    <div class="flex items-center text-sm">
                                        <input
                                            class="form-checkbox text-primary border-default-200 bg-transparent rounded w-5 h-5 focus:ring-0 focus:ring-transparent focus:ring-offset-0 cursor-pointer"
                                            id="1StarUp" name="1StarUp" type="checkbox">
                                        <label
                                            class="ps-2.5 sm:ps-3.5 inline-flex items-center gap-2 w-full text-default-600 text-sm select-none cursor-pointer"
                                            for="1StarUp">1 Star &amp; up<span class="ms-auto">541</span></label>
                                    </div><!-- end checkbox -->
                                </div>
                            </div>
                        </div>
                    </div><!-- end collapse -->

                    <div class="border border-default-200 bg-white dark:bg-default-50 rounded-lg">
                        <button
                            class="hs-collapse-toggle p-4 inline-flex justify-between items-center gap-2 transition-all uppercase font-medium text-base text-default-900 w-full open"
                            data-hs-collapse="#allcategories" id="hs-basic-collapse" type="button">
                            Popular Tag
                            <i
                                class="ti ti-chevron-down text-xl/none hs-collapse-open:rotate-180 transition-all duration-500"></i>
                        </button>

                        <div id="allcategories"
                            class="hs-collapse w-full overflow-hidden transition-[height] duration-300 open">
                            <div class="border-t border-default-200 flex flex-wrap gap-2.5 px-5 py-3">
                                <div class="flex flex-wrap gap-2.5">
                                    <a href="#"
                                        class="bg-default-100 text-default-900 px-3 py-1 rounded-full hover:bg-primary hover:text-white transition-all">Healthy</a>
                                    <a href="#" class="px-3 py-1 rounded-full bg-primary text-white transition-all">Low
                                        fat</a>
                                    <a href="#"
                                        class="bg-default-100 text-default-900 px-3 py-1 rounded-full hover:bg-primary hover:text-white transition-all">Vegetarian</a>
                                    <a href="#"
                                        class="bg-default-100 text-default-900 px-3 py-1 rounded-full hover:bg-primary hover:text-white transition-all">Kid
                                        foods</a>
                                    <a href="#"
                                        class="bg-default-100 text-default-900 px-3 py-1 rounded-full hover:bg-primary hover:text-white transition-all">Vitamins</a>
                                    <a href="#"
                                        class="bg-default-100 text-default-900 px-3 py-1 rounded-full hover:bg-primary hover:text-white transition-all">Bread</a>
                                    <a href="#"
                                        class="bg-default-100 text-default-900 px-3 py-1 rounded-full hover:bg-primary hover:text-white transition-all">Meat</a>
                                    <a href="#"
                                        class="bg-default-100 text-default-900 px-3 py-1 rounded-full hover:bg-primary hover:text-white transition-all">Snacks</a>
                                    <a href="#"
                                        class="bg-default-100 text-default-900 px-3 py-1 rounded-full hover:bg-primary hover:text-white transition-all">Tiffin</a>
                                    <a href="#"
                                        class="bg-default-100 text-default-900 px-3 py-1 rounded-full hover:bg-primary hover:text-white transition-all">Lunch</a>
                                    <a href="#"
                                        class="bg-default-100 text-default-900 px-3 py-1 rounded-full hover:bg-primary hover:text-white transition-all">Dinner</a>
                                    <a href="#"
                                        class="bg-default-100 text-default-900 px-3 py-1 rounded-full hover:bg-primary hover:text-white transition-all">Fruit</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- end collapse -->

                    <div class="relative rounded-lg overflow-hidden h-72">
                        <img src="/images/banner/banner-10.png" alt=""
                            class="rounded-lg absolute inset-0 w-full h-full">
                        <div class="absolute inset-0 bg-black/20"></div>
                        <div class="relative z-10 p-8">
                            <h4 class="text-3xl text-yellow-500 font-medium mb-2">52% <span
                                    class="text-2xl">Discount</span></h4>
                            <p class="text-base text-zinc-100 mb-6">on your first order</p>
                            <a href=""
                                class="inline-flex items-center justify-center rounded border border-primary bg-primary px-4 py-1.5 text-center text-sm font-medium text-white shadow-sm transition-all hover:border-primary-600 hover:bg-primary-600">
                                Shop Now
                            </a>
                        </div>
                    </div>
                </div>

                <div class="block lg:hidden py-4 px-4 border-t border-default-200">
                    <a href="#"
                        class="w-full inline-flex items-center justify-center rounded border border-primary bg-primary px-6 py-2.5 text-center text-sm font-medium text-white shadow-sm transition-all hover:border-primary-700 hover:bg-primary focus:ring focus:ring-primary/50">Reset</a>
                </div><!-- end filter-sidebar-footer -->
            </div>

            <div class="xl:w-4/5">
                <div class="sticky top-20">
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 gap-6">

                        @foreach ($products as $product)
                        <div class="border border-default-200 rounded-xl overflow-hidden duration-500 hover:border-primary relative">
                            <div class="p-4">
                                <div class="relative">
                                    <div class="absolute top-0 start-0">
                                        <span
                                            class="inline-flex items-center gap-1.5 py-1 px-4 rounded-lg text-sm font-medium bg-primary/10 text-primary">{{ $product->kategori }}</span>
                                    </div>
                                    <div class="absolute top-0 end-0">
                                        <span
                                            class="inline-flex items-center gap-1.5 py-1 px-4 rounded-lg text-sm font-medium bg-red-500/10 text-red-500">Hot</span>
                                    </div>
                                    @if ($product->foto)
                                    @php
                                    $gambarPaths = explode(',', $product->foto);
                                    $gambar = $gambarPaths[0];
                                    @endphp
                                    <img src="{{ asset('storage/' . $gambar) }}" alt="" class="w-full h-full">
                                    @endif
                                </div>
                            </div>

                            <div class="border-t border-dashed border-default-200 p-4">
                                <div class="mb-4">
                                    <a href="{{ url('detail/'. $product->id) }}"
                                        class="text-default-600 text-xl font-semibold line-clamp-1 after:absolute after:inset-0 after:z-0">{{ $product->nama }}</a>
                                </div>

                                <div class="flex items-center justify-between gap-2 mb-4">
                                    <span class="flex items-center gap-2">
                                        <span
                                            class="h-5 w-5 inline-flex items-center justify-center bg-primary text-white rounded-full"><i
                                                class="ti ti-star-filled text-sm"></i></span>
                                        <span class="text-sm text-default-950 from-inherit">4.5</span>
                                    </span>

                                    <div class="relative z-10 inline-flex justify-between border border-default-200 p-1 rounded-full"
                                        data-hs-input-number="">
                                        <button
                                            class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center"
                                            type="button" data-hs-input-number-decrement="">
                                            <i class="ti ti-minus"></i>
                                        </button>
                                        <input type="number"
                                            class="w-8 border-0 text-sm text-center text-default-800 focus:ring-0 p-0 bg-transparent"
                                            value="1" data-hs-input-number-input="">
                                        <button
                                            class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center"
                                            type="button" data-hs-input-number-increment="">
                                            <i class="ti ti-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between gap-2">
                                    <h4 class="font-semibold text-xl text-primary">Rp. {{ $product->hj }}
                                        {{-- <span class="text-default-400 text-base line-through">$25</span>  --}}
                                        </h4>
                                    <a href=""
                                        class="shrink flex items-center justify-center rounded-lg bg-primary/20 text-primary px-6 py-2.5 text-center text-sm font-medium shadow-sm transition-all duration-200 hover:bg-primary hover:text-white relative z-10">
                                        <i class="ti ti-shopping-bag text-xl me-2"></i>
                                        <span>Add to cart</span>
                                    </a><!-- end btn -->
                                </div>
                            </div>
                        </div><!-- end card -->
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.shared/footer')

@endsection

@section('script')
@vite(['resources/js/product-categories.js'])
@endsection