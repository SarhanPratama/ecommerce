@extends('user')

@section('content')

@include('layouts.shared/navbar')

@include('layouts.shared/mobile-nav')

@include('layouts.shared/page-title' ,['subtitle' => 'Pages', 'title' => 'Checkout'])

<section class="lg:py-10 py-3">
    <div class="container">
        <div class="grid xl:grid-cols-3 gap-10">
            <div class="xl:col-span-2">
                <div class="border border-default-200 p-10 rounded-2xl">
                    <nav class="flex flex-col sm:flex-row gap-2" aria-label="Tabs" role="tablist">
                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:text-white bg-primary/20 text-primary flex-auto py-3 px-4 inline-flex justify-center items-center gap-2 text-sm font-medium text-center rounded-md hover:text-primary active" id="personal-detail" data-hs-tab="#personal-detail-item" aria-controls="personal-detail-item" role="tab">
                            <i data-lucide="users" class="h-5 w-5"></i> Personal Detail
                        </button><!-- end tab btn -->
                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:text-white bg-primary/20 text-primary flex-auto py-3 px-4 inline-flex justify-center items-center gap-2 text-sm font-medium text-center rounded-md hover:text-primary" id="shipping-detail" data-hs-tab="#shipping-detail-item" aria-controls="shipping-detail-item" role="tab">
                            <i data-lucide="truck" class="h-5 w-5"></i> Shipping Detail
                        </button><!-- end tab btn -->
                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:text-white bg-primary/20 text-primary flex-auto py-3 px-4 inline-flex justify-center items-center gap-2 text-sm font-medium text-center rounded-md hover:text-primary" id="payment-detail" data-hs-tab="#payment-detail-item" aria-controls="payment-detail-item" role="tab">
                            <i data-lucide="badge-dollar-sign" class="h-5 w-5"></i> Payment Detail
                        </button><!-- end tab btn -->
                    </nav><!-- end nav -->

                    <div class="mt-10">
                        <div id="personal-detail-item" role="tabpanel" aria-labelledby="personal-detail">
                            <form id="form1" action="{{ url('checkout') }}" method="POST">
                                @csrf
                                <div class="grid md:grid-cols-12 gap-6">
                                    <div class="md:col-span-6">
                                        <label for="f_name" class="mb-2.5 block text-sm font-medium text-default-700">Full Name</label>
                                        <input name="name" type="text" value="{{ auth()->user()->name }}" id="nama" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" />
                                    </div>
                                    <div class="md:col-span-6">
                                        <label for="phone" class="mb-2.5 block text-sm font-medium text-default-700">Phone</label>
                                        <input name="phone" type="text" id="phone" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" placeholder="Phone No." />
                                    </div>
                                    {{-- <div class="md:col-span-6">
                                        <label for="l_name" class="mb-2.5 block text-sm font-medium text-default-700">Last Name</label>
                                        <input type="text" id="l_name" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" placeholder="Enter Last Name" />
                                    </div> --}}
                                    <div class="md:col-span-12">
                                        <label for="address" class="mb-2.5 block text-sm font-medium text-default-700">Address</label>
                                        <input name="address" type="text" id="address" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" placeholder="203 Miceses Ave. st. Mountain View, San Francisco" />
                                    </div>
                                    {{-- <div class="md:col-span-6">
                                        <label for="password" class="mb-2.5 block text-sm font-medium text-default-700">Password</label>
                                        <input type="password" id="password" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" />
                                    </div> --}}
                                    <div class="md:col-span-12">
                                        {{-- <div class="flex justify-end gap-2">
                                            <a href="" class="inline-flex items-center justify-center rounded-lg bg-primary px-6 py-2.5 text-center text-sm font-medium text-white shadow-sm transition-all duration-200 hover:bg-primary-600">Register</a>
                                            <a href="" class="inline-flex items-center justify-center rounded-lg bg-primary px-6 py-2.5 text-center text-sm font-medium text-white shadow-sm transition-all duration-200 hover:bg-primary-600">Login</a>
                                        </div> --}}

                                        <div class="flex justify-end gap-2 mt-6">
                                            <a href="{{ url('cart') }}" type="button" class="inline-flex items-center justify-center rounded-lg bg-primary/20 px-6 py-2.5 text-center text-sm font-medium text-primary shadow-sm transition-all duration-200 hover:text-white hover:bg-primary">Cancel Order</a>
                                            <button type="button" class="inline-flex items-center justify-center rounded-lg bg-primary px-6 py-2.5 text-center text-sm font-medium text-white shadow-sm transition-all duration-200 hover:bg-primary-600">Shipping Address</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div><!-- end personal detail -->

                        {{-- <div id="shipping-detail-item" class="hidden" role="tabpanel" aria-labelledby="shipping-detail">
                            <form action="">
                                <div class="grid md:grid-cols-12 gap-6">
                                    <div class="md:col-span-6">
                                        <label for="f_name" class="mb-2.5 block text-sm font-medium text-default-700">First Name</label>
                                        <input type="text" id="f_name" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" placeholder="Enter First Name" />
                                    </div>
                                    <div class="md:col-span-6">
                                        <label for="l_name" class="mb-2.5 block text-sm font-medium text-default-700">Last Name</label>
                                        <input type="text" id="l_name" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" placeholder="Enter Last Name" />
                                    </div>
                                    <div class="md:col-span-12">
                                        <label for="e_mail" class="mb-2.5 block text-sm font-medium text-default-700">Address</label>
                                        <input type="email" id="e_mail" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" placeholder="Address here" />
                                    </div>
                                    <div class="md:col-span-6 space-y-1">

                                        <!-- Select -->
                                        <label for="country-select" class="text-sm mb-1 text-default-900">Country/Region</label>
                                        <div class="relative">
                                            <select id="country-select" data-hs-select='{
                                                    "placeholder": "Select Country",
                                                    "toggleTag": "<button type=\"button\"></button>",
                                                    "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 form-input block w-full rounded-md py-2.5 ps-4 pe-10 text-default-800 text-start text-sm focus:ring-transparent border-default-200 overflow-hidden focus:border-primary dark:bg-default-50 before:absolute before:inset-0 before:z-[1]",
                                                    "dropdownClasses": "mt-2 z-50 w-full max-h-[300px] p-1.5 space-y-0.5 bg-white border border-default-200 rounded-md overflow-hidden overflow-y-auto dark:bg-default-50 [&::-webkit-scrollbar]:w-1 [&::-webkit-scrollbar-track]:bg-transparent [&::-webkit-scrollbar-thumb]:bg-default-300",
                                                    "optionClasses": "py-2 px-3 w-full text-sm text-default-800 cursor-pointer rounded-md hover:bg-default-100 focus:outline-none focus:bg-default-100",
                                                    "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><i class=\"ti ti-checks text-lg flex-shrink-0 text-primary\" /></i></span></div>"
                                                    }' class="hidden">
                                                <option></option>
                                                <option value="America US">America US</option>
                                                <option value="Australia">Australia</option>
                                                <option value="London">London</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Japan">Japan</option>
                                            </select>

                                            <div class="absolute -inset-y-0 end-3 flex items-center">
                                                <i class="ti ti-selector shrink text-base/none text-default-500"></i>
                                            </div>
                                        </div>
                                        <!-- End Select -->

                                    </div>
                                    <div class="md:col-span-6 space-y-1">

                                        <!-- Select -->
                                        <label for="state-select" class="text-sm mb-1 text-default-900">State</label>
                                        <div class="relative">
                                            <select id="state-select" data-hs-select='{
                                                    "placeholder": "Select State",
                                                    "toggleTag": "<button type=\"button\"></button>",
                                                    "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 form-input block w-full rounded-md py-2.5 ps-4 pe-10 text-default-800 text-start text-sm focus:ring-transparent border-default-200 overflow-hidden focus:border-primary dark:bg-default-50 before:absolute before:inset-0 before:z-[1]",
                                                    "dropdownClasses": "mt-2 z-50 w-full max-h-[300px] p-1.5 space-y-0.5 bg-white border border-default-200 rounded-md overflow-hidden overflow-y-auto dark:bg-default-50 [&::-webkit-scrollbar]:w-1 [&::-webkit-scrollbar-track]:bg-transparent [&::-webkit-scrollbar-thumb]:bg-default-300",
                                                    "optionClasses": "py-2 px-3 w-full text-sm text-default-800 cursor-pointer rounded-md hover:bg-default-100 focus:outline-none focus:bg-default-100",
                                                    "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><i class=\"ti ti-checks text-lg flex-shrink-0 text-primary\" /></i></span></div>"
                                                    }' class="hidden">
                                                <option></option>
                                                <option value="Texas">Texas</option>
                                                <option value="Florida">Florida</option>
                                                <option value="Hawaii">Hawaii</option>
                                                <option value="Alaska">Alaska</option>
                                                <option value="Washington">Washington</option>
                                                <option value="Arizona">Arizona</option>
                                                <option value="New York">New York</option>
                                            </select>
                                            <div class="absolute -inset-y-0 end-3 flex items-center">
                                                <i class="ti ti-selector shrink text-base/none text-default-500"></i>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="md:col-span-12 flex items-center space-x-2">
                                        <input type="checkbox" id="example6" class="form-checkbox rounded bg-transparent border-default-200 text-primary ring-0 focus:ring-transparent" />
                                        <label for="example6" class="text-sm font-medium text-default-700">Remember me</label>
                                    </div>
                                    <div class="md:col-span-12">
                                        <div class="flex justify-end gap-2">
                                            <button type="button" class="inline-flex items-center justify-center rounded-lg bg-primary/20 px-6 py-2.5 text-center text-sm font-medium text-primary shadow-sm transition-all duration-200 hover:bg-primary hover:text-white">Back</button>
                                            <button type="button" class="inline-flex items-center justify-center rounded-lg bg-primary px-6 py-2.5 text-center text-sm font-medium text-white shadow-sm transition-all duration-200 hover:bg-primary-600">Payment Method</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div><!-- end shipping detail --> --}}

                        {{-- <div id="payment-detail-item" class="hidden" role="tabpanel" aria-labelledby="payment-detail">
                            <form action="">
                                <div class="grid md:grid-cols-12 gap-6">
                                    <div class="md:col-span-6">
                                        <label for="f_name" class="mb-2.5 block text-sm font-medium text-default-700">Card Holder Name</label>
                                        <input type="text" id="f_name" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" placeholder="Enter Card Holder Name" />
                                    </div>
                                    <div class="md:col-span-6">
                                        <label for="l_name" class="mb-2.5 block text-sm font-medium text-default-700">Card Number</label>
                                        <input type="number" id="l_name" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" placeholder="Enter Card Holder Number" />
                                    </div>
                                    <div class="md:col-span-12">
                                        <label for="address" class="mb-2.5 block text-sm font-medium text-default-700">Address</label>
                                        <input type="email" id="address" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" placeholder="Enter Brief Address" />
                                    </div>
                                    <div class="md:col-span-6">
                                        <label for="expiration" class="mb-2.5 block text-sm font-medium text-default-700">Expiration</label>
                                        <input type="text" id="expiration" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" placeholder="Card Expire Date" />
                                    </div>
                                    <div class="md:col-span-6">
                                        <label for="CVV" class="mb-2.5 block text-sm font-medium text-default-700">CVV</label>
                                        <input type="text" id="CVV" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" placeholder="Enter Card CVV Number" />
                                    </div>
                                    <div class="md:col-span-12 flex items-center space-x-2">
                                        <input type="checkbox" id="address_confirm" class="form-checkbox rounded bg-transparent border-default-200 text-primary ring-0 focus:ring-transparent" />
                                        <label for="address_confirm" class="text-sm font-medium text-default-700">Ship to a different address</label>
                                    </div>
                                    <div class="md:col-span-12">
                                        <div class="flex justify-end gap-2">
                                            <button type="button" class="inline-flex items-center justify-center rounded-lg bg-primary/20 px-6 py-2.5 text-center text-sm font-medium text-primary shadow-sm transition-all duration-200 hover:text-white hover:bg-primary">Back</button>
                                            <button type="button" class="inline-flex items-center justify-center rounded-lg bg-primary px-6 py-2.5 text-center text-sm font-medium text-white shadow-sm transition-all duration-200 hover:bg-primary-600">Complete Order</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div><!-- end payment detail --> --}}
                    </div>
                </div>
            </div><!-- end grid-cols -->

            <div class="xl:col-span-1">
                <div class="border border-default-200 rounded-lg">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-default-800">Order Summery</h3>
                        <div class="my-6">
                            @foreach ($cartItems as $item)

                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-4">
                                    @if ($item->foto)
                                    @php
                                    $gambarPaths = explode(',', $item->foto);
                                    $gambar = $gambarPaths[0];
                                    @endphp
                                    <img src="{{ url('storage/'. $gambar) }}" alt="" class="h-16 w-16">
                                    @endif
                                    <a href="" class="text-base font-medium text-default-800">{{ $item->nama }} x{{ $item->qty }} {{ $item->namaSatuan }}</a>
                                </div>
                                <h3 class="text-base font-medium text-default-800">Rp. {{ number_format($item->harga, 0, ',', '.') }}</h3>
                            </div>
                            @endforeach
                            {{-- <div class="flex items-center justify-between">
                                <div class="flex items-center gap-4">
                                    <img src="/images/product/2.png" alt="" class="h-16 w-16">
                                    <a href="" class="text-base font-medium text-default-800">Shale Snacks x2 kg</a>
                                </div>
                                <h3 class="text-base font-medium text-default-800">$17.00</h3>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-4">
                                    <img src="/images/product/3.png" alt="" class="h-16 w-16">
                                    <a href="" class="text-base font-medium text-default-800">Grapes x6 kg</a>
                                </div>
                                <h3 class="text-base font-medium text-default-800">$24.00</h3>
                            </div> --}}
                        </div>

                        <div class="space-y-2">
                            <label for="coupon" class="text-base text-default-700">Coupon Code</label>
                            <div class="relative">
                                <input type="text" name="coupon" id="coupon" class="block w-full rounded-md py-3 ps-4 pe-12 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" placeholder="Enter code" autocomplete="off">
                                <button class="absolute top-1/2 -translate-y-1/2 end-1 py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-default-200 hover:bg-default-300 border-default-200 hover:border-default-300 text-default-900 rounded-md">
                                    Apply Coupon
                                </button>
                            </div>
                        </div><!-- end coupon input -->

                        <div class="flex flex-col gap-4 mt-6">
                            <div class="flex items-center space-x-2">
                                <input type="radio" id="debit_card" name="radioGroup1" class="h-4 w-4 rounded-full border-default-300 text-primary shadow-sm focus:ring-2 focus:ring-primary bg-transparent focus:ring-offset-default-50" />
                                <label for="debit_card" class="text-sm font-medium text-default-700">Debit Card</label>
                            </div>
                            <div class="flex items-center space-x-2">
                                <input type="radio" id="cash_on_delivery" checked name="radioGroup1" class="h-4 w-4 rounded-full border-default-300 text-primary shadow-sm focus:ring-2 focus:ring-primary bg-transparent focus:ring-offset-default-50" />
                                <label for="cash_on_delivery" class="text-sm font-medium text-default-700">Cash on Delivery</label>
                            </div>
                            <div class="flex items-center space-x-2">
                                <input type="radio" id="amazo_npay" checked name="radioGroup1" class="h-4 w-4 rounded-full border-default-300 text-primary shadow-sm focus:ring-2 focus:ring-primary bg-transparent focus:ring-offset-default-50" />
                                <label for="amazo_npay" class="text-sm font-medium text-default-700">Amazon Pay</label>
                            </div>
                        </div><!-- end flex -->
                    </div>

                    <div class="*:border-b *:border-default-200">
                        <div class="flex items-center justify-between p-3">
                            <h6 class="text-base text-default-800 font-medium">Subtotal :</h6>
                            <h6 class="text-base text-default-800 font-medium">Rp. {{ number_format($totalHarga, 0, ',', '.') }}</h6>
                        </div>
                        <div class="flex items-center justify-between p-3">
                            <h6 class="text-base text-default-800 font-medium">Shipping :</h6>
                            <h6 class="text-base text-default-800 font-medium">Free</h6>
                        </div>
                        <div class="flex items-center justify-between p-3">
                            <h6 class="text-base text-default-800 font-medium">Total :</h6>
                            <h4 class="text-xl text-default-800 font-medium">Rp. {{ number_format($totalHarga, 0, ',', '.') }}</h4>
                        </div>
                    </div>

                    <div class="px-4 py-3">

                        <button id="submitAllForms" type="button" class="inline-flex items-center justify-center rounded-lg bg-primary px-6 py-2.5 text-center text-sm font-medium text-white shadow-sm transition-all duration-200 hover:bg-primary-600">Place Order</button>
                    </div>
                </div>
            </div><!-- end grid-cols -->
        </div><!-- end grid -->
    </div><!--  end container -->
</section>

<script>
    document.getElementById('submitAllForms').addEventListener('click', function() {
    document.getElementById('form1').submit();
});
</script>

@include('layouts.shared/footer')

@endsection
