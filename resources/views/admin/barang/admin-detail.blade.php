@extends('admin')

@section('content')

{{-- @include('layouts.shared/navbar') --}}

{{-- @include('layouts.shared/mobile-nav') --}}

<div class="p-6 space-y-6">
    @include('layouts.shared/admin-page-title' ,['subtitle' => 'Product', 'title' => 'Detail'])

    <section class="py-5">
        <div class="">
            <div class="grid lg:grid-cols-12 gap-10 ">
                <div class="lg:col-span-4">
                    <div class="grid grid-cols-1 gap-6">
                        <div class="col-span-1">
                            <div class="swiper product-swiper border border-default-200 rounded-xl">
                                <div class="swiper-wrapper">

                                    @if ($barang->foto)
                                    @foreach (explode(',', $barang->foto) as $foto)
                                    <div class="swiper-slide">
                                        <div class="h-full w-full flex items-center justify-center">
                                            <img src="{{ asset('storage/' . $foto) }}" alt="Foto Barang">
                                        </div>
                                    </div>  
                                    @endforeach
                                    @endif
                                    {{-- <div class="swiper-slide">
                                        <div class="h-full w-full flex items-center justify-center">
                                            <img src="{{ asset('storage/' . $barang->foto) }}" alt=""
                                                class="w-full h-full mx-auto">
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <!-- end swiper nav slide -->
                        </div><!-- end grid-cols -->

                        <div class="col-span-6">
                            <div class="swiper product-swiper-pagination justify-center py-2">
                                <div class="swiper-wrapper justify-center gap-2 w-full">
                                    @if ($barang->foto)
                                    @foreach (explode(',', $barang->foto) as $foto)
                                    <div
                                        class="swiper-slide cursor-pointer !w-16 !h-16 sm:!w-24 sm:!h-24 lg:!w-10 lg:!h-10 p-2 border border-default-200 rounded-lg ring-2 ring-transparent [&.swiper-slide-thumb-active]:border-primary [&.swiper-slide-thumb-active]:ring-primary">
                                        <img src="{{ asset('storage/' . $foto) }}" alt="Foto Barang">
                                    </div>
                                    @endforeach
                                    @endif
                                    {{-- <div
                                        class="swiper-slide cursor-pointer !w-16 !h-16 sm:!w-24 sm:!h-24 lg:!w-32 lg:!h-32 p-2 border border-default-200 rounded-lg ring-2 ring-transparent [&.swiper-slide-thumb-active]:border-primary [&.swiper-slide-thumb-active]:ring-primary">
                                        <img src="{{ asset('storage/' . $barang->foto) }}" alt=""
                                            class="w-full h-full rounded">
                                    </div> --}}
                                </div>
                            </div>
                            <!-- end swiper thumbnail slide -->
                        </div><!-- end grid-cols -->
                    </div><!-- end grid -->
                </div><!-- end grid-cols -->
                <div class="lg:col-span-8">
                    <div class="">
                        <div class="flex items-center gap-2 mb-2">
                            <span
                                class="inline-flex items-center gap-1.5 py-1 px-4 rounded-lg text-sm font-medium bg-primary/10 text-primary">Sale</span>
                            <span
                                class="inline-flex items-center gap-1.5 py-1 px-4 rounded-lg text-sm font-medium bg-red-500/10 text-red-500">Hot</span>
                        </div>
                        <h3 class="mb-4 font-semibold text-3xl text-default-800">
                            {{ $barang->nama }}
                            <span
                                class="inline-flex items-center justify-center align-middle bg-orange-600/20 text-orange-500 py-1 px-2 mb-4 md:mb-0 rounded text-xs font-normal">In
                                Stock</span>
                        </h3>
                        <div class="my-6">
                            <h6 class="text-base text-default-800 mb-2">
                                <span>Kode : </span>
                                <span class="text-default-400">{{ $barang->kode }}</span>
                            </h6>
                        </div>
                        <div class="my-6">
                            <h6 class="text-base text-default-800 mb-2">
                                <span>Harga Beli : </span>
                                <span class="text-default-400">{{ $barang->hb }}</span>
                            </h6>
                        </div>
                        <div class="my-6">
                            <h6 class="text-base text-default-800 mb-2">
                                <span>Harga jual : </span>
                                <span class="text-default-400">{{ $barang->hj }}</span>
                            </h6>
                        </div>
                        {{-- <p class="text-base text-default-700 mb-4">Bananas are a versatile and nutritious fruit that
                            offers
                            a multitude of health benefits. Packed with essential nutrients such as potassium, vitamin
                            C,
                            and vitamin B6, bananas contribute to overall well-being.
                        </p> --}}

                        {{-- <div class="flex items-center gap-2 my-4">
                            <div class="flex gap-1.5">
                                <i data-lucide="star" class="w-5 h-5 fill-yellow-400 stroke-yellow-400"></i>
                                <i data-lucide="star" class="w-5 h-5 fill-yellow-400 stroke-yellow-400"></i>
                                <i data-lucide="star" class="w-5 h-5 fill-yellow-400 stroke-yellow-400"></i>
                                <i data-lucide="star" class="w-5 h-5 fill-yellow-400 stroke-yellow-400"></i>
                                <i data-lucide="star" class="w-5 h-5 fill-yellow-400 stroke-yellow-400"></i>
                            </div>
                            <h6 class="text-sm font-medium text-default-600">(1.2k)</h6>
                        </div><!-- end ratings --> --}}

                        <div class="my-6">
                            <h6 class="text-base text-default-800 mb-2">
                                <span>Category : </span>
                                <span class="text-default-400">{{ $barang->kategori }}</span>
                            </h6>
                        </div><!-- end category && Tags -->

                        <div class="flex items-center gap-2">
                            <p class="text-sm font-medium">Quantity : </p>
                            <div class="relative z-10 inline-flex justify-between border border-default-200 px-3 rounded-full"
                                data-hs-input-number="">
                                <span class="text-default-400">{{ $barang->sawal }}</span>
                                {{-- <input value="" type="text"
                                    class="w-8 border-0 text-sm text-center text-default-800 focus:ring-0 p-0 bg-transparent"
                                    value="1" data-hs-input-number-input=""> --}}

                            </div>
                        </div>

                    </div>
                </div><!-- end grid-cols -->
            </div><!-- end grid -->
        </div><!-- end container -->
    </section>
    <section class="py-10">
        <div class="">
            <div class="border border-default-200 rounded-2xl p-10">
                <div class="flex flex-wrap items-center justify-between gap-6 mb-10">
                    <h1 class="inline-block text-2xl font-semibold text-default-800">Review & Information</h1>
                    <nav class="flex flex-wrap gap-x-4 gap-y-2 lg:mt-0 mt-4" aria-label="Tabs" role="tablist">
                        <button type="button"
                            class="hs-tab-active:border-primary/10 hs-tab-active:bg-primary/10 hs-tab-active:text-primary py-2.5 px-4 inline-flex items-center justify-center gap-2 border border-default-200 lg:text-base text-sm rounded-lg whitespace-nowrap text-default-800 hover:text-primary max-sm:w-full font-medium active"
                            id="descriptions-item" data-hs-tab="#descriptions" aria-controls="descriptions" role="tab">
                            Descriptions
                        </button>
                        <button type="button"
                            class="hs-tab-active:border-primary/10 hs-tab-active:bg-primary/10 hs-tab-active:text-primary py-2.5 px-4 inline-flex items-center justify-center gap-2 border border-default-200 lg:text-base text-sm rounded-lg whitespace-nowrap text-default-800 hover:text-primary max-sm:w-full font-medium"
                            id="additional-information-item" data-hs-tab="#additional-information"
                            aria-controls="additional-information" role="tab">
                            Additional Information
                        </button>
                        <button type="button"
                            class="hs-tab-active:border-primary/10 hs-tab-active:bg-primary/10 hs-tab-active:text-primary py-2.5 px-4 inline-flex items-center justify-center gap-2 border border-default-200 lg:text-base text-sm rounded-lg whitespace-nowrap text-default-800 hover:text-primary max-sm:w-full font-medium"
                            id="customer-feedback-item" data-hs-tab="#customer-feedback"
                            aria-controls="product-details-tab" role="tab">
                            Customer Feedback
                        </button>
                    </nav><!-- end nav -->
                </div>

                <div class="mt-6">
                    <div id="descriptions" role="tabpanel" aria-labelledby="descriptions-item">
                        <div class="">
                            <p class="text-base text-default-600 mb-10">{{ $barang->desc }}</p>
                        </div><!-- end grid -->
                    </div><!-- end descriptions -->

                    <div id="additional-information" class="hidden" role="tabpanel"
                        aria-labelledby="additional-information-item">
                        <div class="">
                            <div class="mb-10">
                                <table class="w-full">
                                    <tbody class="">
                                        <tr>
                                            <td class="text-base text-default-700 font-semibold py-2 w-36">Weight :</td>
                                            <td class="text-base text-default-600 py-2">03</td>
                                        </tr>
                                        <tr>
                                            <td class="text-base text-default-700 font-semibold py-2 w-36">Color :</td>
                                            <td class="text-base text-default-600 py-2">Green</td>
                                        </tr>
                                        <tr>
                                            <td class="text-base text-default-700 font-semibold py-2 w-36">Type :</td>
                                            <td class="text-base text-default-600 py-2">Organic</td>
                                        </tr>
                                        <tr>
                                            <td class="text-base text-default-700 font-semibold py-2 w-36">Category :
                                            </td>
                                            <td class="text-base text-default-600 py-2">Vegetables</td>
                                        </tr>
                                        <tr>
                                            <td class="text-base text-default-700 font-semibold py-2 w-36">Stock Status
                                                :
                                            </td>
                                            <td class="text-base text-default-600 py-2">Available</td>
                                        </tr>
                                        <tr>
                                            <td class="text-base text-default-700 font-semibold py-2 w-36">Tags :</td>
                                            <td class="text-base text-default-600 py-2">Vegetables, Healthy, Cabbage,
                                                Green
                                                Cabbage, Food, Salad</td>
                                        </tr>
                                        <tr>
                                            <td class="text-base text-default-700 font-semibold py-2 w-36">SKU :</td>
                                            <td class="text-base text-default-600 py-2">FWG15VFK</td>
                                        </tr>
                                        <tr>
                                            <td class="text-base text-default-700 font-semibold py-2 w-36">MFG :</td>
                                            <td class="text-base text-default-600 py-2">23 March, 2023</td>
                                        </tr>
                                        <tr>
                                            <td class="text-base text-default-700 font-semibold py-2 w-36">Stock Items :
                                            </td>
                                            <td class="text-base text-default-600 py-2">15 Items in Stock</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="max-w-3xl border border-default-200 rounded-lg p-6">
                                <div class="grid grid-cols-2">
                                    <div class="flex  items-center">
                                        <i data-lucide="tag" class="text-primary w-8 h-8 me-4"></i>
                                        <div class="">
                                            <h6 class="text-base font-semibold text-default-800 mb-2">50% Discount</h6>
                                            <p>Save your 50% money with us</p>
                                        </div>
                                    </div><!-- end grid-cols -->

                                    <div class="flex items-center">
                                        <i data-lucide="hop-off" class="text-primary w-8 h-8 me-4"></i>
                                        <div class="">
                                            <h6 class="text-base font-semibold text-default-800">100% Organic</h6>
                                            <p>100% Organic Vegetables</p>
                                        </div>
                                    </div><!-- end grid-cols -->
                                </div><!-- end grid -->
                            </div>
                        </div><!-- end grid -->
                    </div><!-- end additional-information -->

                    <div id="customer-feedback" class="hidden" role="tabpanel" aria-labelledby="customer-feedback-item">
                        <div class="grid lg:grid-cols-3 gap-10">
                            <div class="lg:col-span-2">
                                <div class="flex flex-col gap-4">
                                    <div class="flex flex-wrap sm:flex-nowrap items-start gap-3">
                                        <div class="h-10 w-10 rounded-full">
                                            <img alt="Charlotte Beam" src="/images/avatars/3.png"
                                                class="max-w-full h-full rounded-full">
                                        </div>
                                        <div class="flex items-start w-full bg-primary/10 p-3 rounded-md">
                                            <div class="">
                                                <h6 class="text-base/none font-medium text-default-900 mb-1">Charlotte
                                                    Beam
                                                </h6>
                                                <p class="text-sm text-default-600 mb-2">31 Oct 2022</p>

                                                <div class="flex items-center gap-2 mb-2">
                                                    <div class="flex gap-1">
                                                        <i data-lucide="star"
                                                            class="w-4 h-4 fill-yellow-400 stroke-yellow-400"></i>
                                                        <i data-lucide="star"
                                                            class="w-4 h-4 fill-yellow-400 stroke-yellow-400"></i>
                                                        <i data-lucide="star"
                                                            class="w-4 h-4 fill-yellow-400 stroke-yellow-400"></i>
                                                        <i data-lucide="star"
                                                            class="w-4 h-4 fill-yellow-400 stroke-yellow-400"></i>
                                                        <i data-lucide="star"
                                                            class="w-4 h-4 fill-yellow-400 stroke-yellow-400"></i>
                                                    </div>
                                                    <h6 class="text-sm font-medium text-default-600">(1.2k)</h6>
                                                </div>
                                                <p class="text-sm text-default-600">Teams consist of 15 players on each
                                                    side, divided into forwards and backs.</p>
                                            </div>
                                            <button
                                                class="py-1.5 px-4 inline-flex items-center justify-center gap-2 text-xs font-medium ms-auto rounded-full bg-primary-500 text-white transition-all duration-200 hover:bg-primary-600"
                                                tabindex="0" type="button">
                                                <i class="ti ti-pencil-minus text-sm/none"></i>
                                                Reply
                                            </button>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap sm:flex-nowrap items-start gap-3">
                                        <div class="h-10 w-10 rounded-full">
                                            <img alt="Charlotte Beam" src="/images/avatars/6.png"
                                                class="max-w-full h-full rounded-full">
                                        </div>
                                        <div class="flex items-start w-full bg-primary/10 p-3 rounded-md">
                                            <div class="">
                                                <h6 class="text-base/none font-medium text-default-900 mb-1">Omar
                                                    Thompson
                                                </h6>
                                                <p class="text-sm text-default-600 mb-2">1 Nov 2022</p>

                                                <div class="flex items-center gap-2 mb-2">
                                                    <div class="flex gap-1">
                                                        <i data-lucide="star"
                                                            class="w-4 h-4 fill-yellow-400 stroke-yellow-400"></i>
                                                        <i data-lucide="star"
                                                            class="w-4 h-4 fill-yellow-400 stroke-yellow-400"></i>
                                                        <i data-lucide="star"
                                                            class="w-4 h-4 fill-yellow-400 stroke-yellow-400"></i>
                                                        <i data-lucide="star"
                                                            class="w-4 h-4 fill-yellow-400 stroke-yellow-400"></i>
                                                        <i data-lucide="star"
                                                            class="w-4 h-4 fill-yellow-400 stroke-yellow-400"></i>
                                                    </div>
                                                    <h6 class="text-sm font-medium text-default-600">(2.9k)</h6>
                                                </div>
                                                <p class="text-sm text-default-600">The primary objective is to carry
                                                    the
                                                    ball over the opponent's goal line and touch it down for a try,
                                                    worth 5
                                                    points.</p>
                                            </div>
                                            <button
                                                class="py-1.5 px-4 inline-flex items-center justify-center gap-2 text-xs font-medium ms-auto rounded-full bg-primary-500 text-white transition-all duration-200 hover:bg-primary-600"
                                                tabindex="0" type="button">
                                                <i class="ti ti-pencil-minus text-sm/none"></i>
                                                Reply
                                            </button>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap sm:flex-nowrap items-start gap-3">
                                        <div class="h-10 w-10 rounded-full">
                                            <img alt="Charlotte Beam" src="/images/avatars/7.png"
                                                class="max-w-full h-full rounded-full">
                                        </div>
                                        <div class="flex items-start w-full bg-primary/10 p-3 rounded-md">
                                            <div class="">
                                                <h6 class="text-base/none font-medium text-default-900 mb-1">Kathleen
                                                    Russo
                                                </h6>
                                                <p class="text-sm text-default-600 mb-2">4 Nov 2022</p>

                                                <div class="flex items-center gap-2 mb-2">
                                                    <div class="flex gap-1">
                                                        <i data-lucide="star"
                                                            class="w-4 h-4 fill-yellow-400 stroke-yellow-400"></i>
                                                        <i data-lucide="star"
                                                            class="w-4 h-4 fill-yellow-400 stroke-yellow-400"></i>
                                                        <i data-lucide="star"
                                                            class="w-4 h-4 fill-yellow-400 stroke-yellow-400"></i>
                                                        <i data-lucide="star"
                                                            class="w-4 h-4 fill-yellow-400 stroke-yellow-400"></i>
                                                        <i data-lucide="star"
                                                            class="w-4 h-4 fill-yellow-400 stroke-yellow-400"></i>
                                                    </div>
                                                    <h6 class="text-sm font-medium text-default-600">(3.12k)</h6>
                                                </div>
                                                <p class="text-sm text-default-600">Teams can also score points through
                                                    penalty kicks (3 points) and conversions (2 points).</p>
                                            </div>
                                            <button
                                                class="py-1.5 px-4 inline-flex items-center justify-center gap-2 text-xs font-medium ms-auto rounded-full bg-primary-500 text-white transition-all duration-200 hover:bg-primary-600"
                                                tabindex="0" type="button">
                                                <i class="ti ti-pencil-minus text-sm/none"></i>
                                                Reply
                                            </button>
                                        </div>
                                    </div>
                                </div><!-- end card -->
                            </div><!-- end flex -->

                            <div class="">
                                <h3 class="text-xl font-semibold text-default-700 mb-2">Be the first review on “Fresh
                                    Lettuce”</h3>
                                <p class="text-base mb-4">Your email address will not be published, Required fields are
                                    marked*</p>

                                <div class="flex items-center gap-2 mb-10">
                                    <h4 class="text-lg font-medium text-default-800">Your Rating <span
                                            class="text-red-500">*</span></h4>
                                    <!-- Rating -->
                                    <div class="flex flex-row-reverse justify-end items-center">
                                        <input id="hs-ratings-readonly-1" type="radio"
                                            class="peer -ms-5 size-5 bg-transparent border-0 text-transparent cursor-pointer appearance-none checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
                                            name="hs-ratings-readonly" value="1" checked>
                                        <label for="hs-ratings-readonly-1"
                                            class="peer-checked:text-yellow-400 text-gray-300 pointer-events-none dark:peer-checked:text-yellow-600 dark:text-gray-600">
                                            <i data-lucide="star" class="flex-shrink-0 size-5 fill-current"></i>
                                        </label>
                                        <input id="hs-ratings-readonly-2" type="radio"
                                            class="peer -ms-5 size-5 bg-transparent border-0 text-transparent cursor-pointer appearance-none checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
                                            name="hs-ratings-readonly" value="2">
                                        <label for="hs-ratings-readonly-2"
                                            class="peer-checked:text-yellow-400 text-gray-300 pointer-events-none dark:peer-checked:text-yellow-600 dark:text-gray-600">
                                            <i data-lucide="star" class="flex-shrink-0 size-5 fill-current"></i>
                                        </label>
                                        <input id="hs-ratings-readonly-3" type="radio"
                                            class="peer -ms-5 size-5 bg-transparent border-0 text-transparent cursor-pointer appearance-none checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
                                            name="hs-ratings-readonly" value="3">
                                        <label for="hs-ratings-readonly-3"
                                            class="peer-checked:text-yellow-400 text-gray-300 pointer-events-none dark:peer-checked:text-yellow-600 dark:text-gray-600">
                                            <i data-lucide="star" class="flex-shrink-0 size-5 fill-current"></i>
                                        </label>
                                        <input id="hs-ratings-readonly-4" type="radio"
                                            class="peer -ms-5 size-5 bg-transparent border-0 text-transparent cursor-pointer appearance-none checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
                                            name="hs-ratings-readonly" value="4">
                                        <label for="hs-ratings-readonly-4"
                                            class="peer-checked:text-yellow-400 text-gray-300 pointer-events-none dark:peer-checked:text-yellow-600 dark:text-gray-600">
                                            <i data-lucide="star" class="flex-shrink-0 size-5 fill-current"></i>
                                        </label>
                                        <input id="hs-ratings-readonly-5" type="radio"
                                            class="peer -ms-5 size-5 bg-transparent border-0 text-transparent cursor-pointer appearance-none checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
                                            name="hs-ratings-readonly" value="5">
                                        <label for="hs-ratings-readonly-5"
                                            class="peer-checked:text-yellow-400 text-gray-300 pointer-events-none dark:peer-checked:text-yellow-600 dark:text-gray-600">
                                            <i data-lucide="star" class="flex-shrink-0 size-5 fill-current"></i>
                                        </label>
                                    </div>
                                    <!-- End Rating -->
                                </div>

                                <form action="">
                                    <div class="grid md:grid-cols-12 gap-6">
                                        <div class="md:col-span-6">
                                            <label for="name"
                                                class="mb-2.5 block text-sm font-medium text-default-700">Name
                                                <span class="text-red-500">*</span></label>
                                            <input type="text" id="name"
                                                class="py-2.5 text-sm block w-full rounded-md border-default-200 focus:ring-0 focus:border-primary dark:bg-default-50" />
                                        </div>
                                        <div class="md:col-span-6">
                                            <label for="e_mail"
                                                class="mb-2.5 block text-sm font-medium text-default-700">Email <span
                                                    class="text-red-500">*</span></label>
                                            <input type="text" id="e_mail"
                                                class="py-2.5 text-sm block w-full rounded-md border-default-200 focus:ring-0 focus:border-primary dark:bg-default-50" />
                                        </div>
                                        <div class="md:col-span-12">
                                            <label for="e_mail"
                                                class="mb-2.5 block text-sm font-medium text-default-700">Your Review
                                                <span class="text-red-500">*</span></label>
                                            <input type="email" id="e_mail"
                                                class="py-2.5 text-sm block w-full rounded-md border-default-200 focus:ring-0 focus:border-primary dark:bg-default-50" />
                                        </div>
                                        <div class="md:col-span-12">
                                            <div class="flex items-center gap-2 mb-6">
                                                <input type="checkbox"
                                                    class="shrink-0 mt-0.5 border-default-200 rounded text-primary pointer-events-none bg-transparent focus:ring-primary"
                                                    id="comment">
                                                <label for="comment" class="text-sm text-default-600">Save name, Email
                                                    in
                                                    this browser for the comment</label>
                                            </div>
                                            <a href="#"
                                                class="inline-flex items-center justify-center rounded-lg bg-primary px-6 py-2.5 text-center text-sm font-medium text-white shadow-sm transition-all duration-200 hover:bg-primary-600">Submit</a>
                                        </div>
                                    </div>
                                </form>
                            </div><!-- end grid-cols -->
                        </div><!-- end grid -->
                    </div><!-- end customer-feedback -->
                </div>
            </div>
        </div><!-- end container -->
    </section>



</div>
{{-- @include('layouts.shared/footer') --}}

@endsection

@section('script')
@vite(['resources/js/product-detail.js'])
@endsection