@extends('user')

@section('content')

@include('layouts.shared/navbar')

@include('layouts.shared/mobile-nav')

@include('layouts.shared/page-title' ,['subtitle' => 'Pages', 'title' => 'Cart'])

<section class="lg:py-10 py-3">
    <div class="container">
        <div class="grid lg:grid-cols-12 gap-6">
            <div class="lg:col-span-8">
                <div class="flex justify-between items-center mb-3">
                    <h3 class="text-lg font-semibold text-default-800"> Items Added</h3>
                    <!--                        <h3 class="text-xl font-medium text-default-800">Total: $650</h3>-->
                </div><!-- end flex -->
                <div class="flex flex-col gap-6">

                    @foreach($cartItems as $item)
                    <div class="border border-default-200 rounded-lg hover:border-primary duration-500">
                        <div class="p-6">
                            <div class="flex flex-col md:flex-row gap-4">
                                <div class="flex-shrink">
                                    @if ($item->foto)
                                    @php
                                    $gambarPaths = explode(',', $item->foto);
                                    $gambar = $gambarPaths[0];
                                    @endphp
                                    <img class="h-40 w-40" src="{{ asset('storage/' . $gambar) }}" alt="Foto Barang">
                                    @endif
                                </div>
                                <div class="flex-grow flex">
                                    <div class="flex-grow flex flex-col">
                                        <div class="shrink mb-2">
                                            <p class="text-primary uppercase text-xs font-medium mb-0.5">{{
                                                $item->namaKategori }}</p>
                                            <h3 class="text-default-800 text-2xl font-semibold">{{ $item->nama
                                                }} <small class="text-sm text-default-600">x{{ $item->sawal }} {{
                                                    $item->namaSatuan }}</small></h3>
                                            <h5 class="font-semibold text-primary">Rp. {{
                                                number_format($item->hj, 0, ',', '.') }}</h5>
                                        </div>
                                        <div class="grow flex items-center gap-4">
                                            <div class="flex gap-1.5">
                                                <button><i class="ti ti-star-filled text-yellow-400"></i></button>
                                                <button><i class="ti ti-star-filled text-yellow-400"></i></button>
                                                <button><i class="ti ti-star-filled text-yellow-400"></i></button>
                                                <button><i class="ti ti-star-filled text-yellow-400"></i></button>
                                                <button><i class="ti ti-star-filled text-yellow-400"></i></button>
                                            </div>
                                            <h6 class="text-xs font-medium text-default-900">(98)</h6>
                                        </div>
                                        <div class="shrink flex items-center gap-2">
                                            <div class="relative z-10 inline-flex justify-between border border-default-200 p-1 rounded-full"
                                                data-hs-input-number="">
                                                <button
                                                    class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center"
                                                    type="button" data-hs-input-number-decrement="">
                                                    <i class="ti ti-minus"></i>
                                                </button>
                                                <input ttype="text"
                                                    class="w-8 border-0 text-sm text-center text-default-800 focus:ring-0 p-0 bg-transparent"
                                                    value="{{ $item->qty }}" data-hs-input-number-input="">
                                                <button
                                                    class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center"
                                                    type="button" data-hs-input-number-increment="">
                                                    <i class="ti ti-plus"></i>
                                                </button>
                                            </div>
                                            <div
                                                class="h-10 w-10 inline-flex items-center justify-center bg-transparent transition-all cursor-pointer rounded-full hover:bg-red-500/20">
                                                <form action="{{ route('delete.cart.product', $item->idbarang) }}"
                                                    method="POST" data-confirm-delete="true">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit">
                                                        <i class="h-5 w-5 stroke-red-500" data-lucide="trash"></i>
                                                    </button>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="text-end flex flex-col justify-between">
                                        <i class="h-6 w-6 ms-auto text-default-800 hover:fill-red-500 hover:stroke-red-500"
                                            data-lucide="heart"></i>
                                        <div class="mt-auto">
                                            <h5 class="text-lg font-medium text-default-800">Rp. {{ number_format($item->harga, 0, ',', '.') }}
                                            </h5>
                                            <p class="text-sm text-default-600">Delivery on Thursday, 23 March</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="flex justify-end gap-2">
                        <a class="rounded-md border border-primary px-6 py-2.5 text-center text-sm font-medium text-primary shadow-sm transition-all hover:text-white hover:bg-primary"
                            href="{{ url('') }}">Go To Back</a>
                        <a class="rounded-md border border-primary bg-primary px-6 py-2.5 text-center text-sm font-medium text-white shadow-sm transition-all duration-200 hover:bg-primary-600 hover:border-primary-600"
                            href="{{ url('checkout') }}">Checkout</a>
                    </div>
                </div>

            </div><!-- end grid-col -->

            <div class="lg:col-span-4">
                <h3 class="text-lg text-default-700 font-semibold mb-4">Checkout Details</h3>
                <div class="border border-default-200 rounded-lg">
                    <div class="divide-y divide-default-200">
                        <div class="flex items-center justify-between p-4">
                            <p class="text-base text-default-600">Total :</p>
                            <h5 class="text-lg font-medium text-default-800">$750.00</h5>
                        </div>
                        <div class="flex items-center justify-between p-4">
                            <p class="text-base text-default-600">Total Discount :</p>
                            <h5 class="text-lg font-medium text-default-800">$24.00</h5>
                        </div>
                        <div class="flex items-center justify-between p-4">
                            <p class="text-base text-default-600">Estimated GST/CST :</p>
                            <h5 class="text-lg font-medium text-default-800">$56.00</h5>
                        </div>
                        <div class="flex items-center justify-between p-4">
                            <p class="text-base font-medium text-default-600">Coupon Discount :</p>
                            <button class="text-sm font-medium text-white bg-primary px-3 py-1 rounded ">Apply</button>
                        </div>
                        <div class="p-4">
                            <div class="flex items-center justify-between">
                                <p class="text-base text-default-600">Delivery :</p>

                                <p class="inline-block text-sm text-default-600">*Free shipping over $150</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-between p-4">
                            <p class="text-base font-medium text-default-800">Order Total :</p>
                            <h5 class="text-lg font-semibold text-default-800">Rp. {{ number_format($totalHarga, 0, ',', '.') }}</h5>
                        </div>
                        <div class="p-4">
                            <a class="flex items-center justify-center w-full px-6 py-2.5 rounded-md text-base bg-primary text-white transition-all font-medium hover:bg-primary-600"
                                href="">Continue to Checkout</a>
                        </div>
                    </div>
                </div>
            </div><!-- end grid-col -->
        </div><!-- end grid -->
    </div><!--  end container -->
</section>

@include('layouts.shared/footer')

@endsection