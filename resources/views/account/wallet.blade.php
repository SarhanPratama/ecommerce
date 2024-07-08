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
                <h3 class="text-xl font-semibold text-default-900 mb-6"><i class="ti ti-wallet"></i> My Wallet</h3>

                <div class="space-y-6">
                    <div class="grid xl:grid-cols-2 gap-6">
                        <div class="border border-default-200 rounded-lg">
                            <div class="p-6 flex items-center gap-4">
                                <div class="shrink h-24 w-24 inline-flex items-center justify-center rounded-xl bg-primary/20 text-primary">
                                    <i class="ti ti-credit-card text-5xl"></i>
                                </div>

                                <div class="grow">
                                    <h6 class="text-base text-default-600 font-medium">My Balance</h6>
                                    <h3 class="text-3xl font-semibold text-default-800 my-2.5">$124</h3>
                                    <p class="text-sm text-default-600 font-medium">Added : 8 May 2020</p>
                                </div>
                            </div>
                        </div>
                        <div class="border border-default-200 rounded-lg">
                            <div class="p-6 flex items-center gap-4">
                                <div class="shrink h-24 w-24 inline-flex items-center justify-center rounded-xl bg-blue-500/20 text-blue-500">
                                    <i class="ti ti-cash text-5xl"></i>
                                </div>

                                <div class="grow">
                                    <h6 class="text-base text-default-600 font-medium">freshoo Cashback Blance</h6>
                                    <h3 class="text-3xl font-semibold text-default-800 my-2.5">$87</h3>
                                    <p class="text-sm text-default-600 font-medium">100% of thiscan be used for your next order.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid lg:grid-cols-2 gap-6">
                        <div class="border border-default-200 rounded-lg">
                            <div class="px-6 py-4">
                                <h5 class="text-lg font-medium text-default-950 capitalize">Add Balance</h5>
                            </div>
                            <div class="p-5 border-t border-dashed border-default-200">
                                <div class="grid grid-cols-2 gap-4">
                                    <div class="space-y-1">
                                        <label class="text-default-800 text-sm font-medium inline-block">Holder Name*</label>
                                        <input class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="text" name="holdername" value="" id="holder[name]" required maxlength="64" placeholder="Holder Name">
                                    </div>

                                    <div class="space-y-1">
                                        <label class="text-default-800 text-sm font-medium inline-block">Card Number*</label>
                                        <input class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="text" name="cardnumber" value="" id="card[number]" required maxlength="64" placeholder="Card Number">
                                    </div>

                                    <div class="space-y-1">
                                        <label class="text-default-800 text-sm font-medium inline-block">Expiration Month*</label>
                                        <div class="relative">
                                            <select id="all-select-categories" data-hs-select='{
                            "placeholder": "Select Month",
                            "toggleTag": "<button type=\"button\"></button>",
                            "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 block w-full rounded-md py-2.5 px-4 text-default-800 text-sm text-start focus:ring-transparent border border-default-200 dark:bg-default-50",
                            "dropdownClasses": "mt-2 z-50 w-full custom-scroll max-h-[300px] p-1.5 space-y-0.5 bg-white border border-default-200 rounded-lg overflow-hidden overflow-y-auto end-0 dark:bg-default-50",
                            "optionClasses": "py-2 px-3 w-full text-sm text-default-800 cursor-pointer rounded-md hover:bg-default-100 focus:outline-none focus:bg-default-100",
                            "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><i class=\"ti ti-checks text-lg flex-shrink-0 text-primary\" /></i></span></div>"
                            }' class="hidden">
                                                <option value="1">January</option>
                                                <option value="2">February</option>
                                                <option value="3">March</option>
                                                <option value="4">April</option>
                                                <option value="5">May</option>
                                                <option value="6">June</option>
                                                <option value="7">July</option>
                                                <option value="8">August</option>
                                                <option value="9">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>

                                            <div class="absolute -inset-y-0 start-auto end-3 flex items-center">
                                                <i class="ti ti-chevron-down shrink text-base/none"></i>
                                            </div>
                                        </div><!-- End Select -->
                                    </div>

                                    <div class="space-y-1">
                                        <label class="text-default-800 text-sm font-medium inline-block">Expiration Year*</label>
                                        <input class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="text" name="card[expire-year]" maxlength="4" placeholder="Year">
                                    </div>
                                    <div class="space-y-1">
                                        <label class="text-default-800 text-sm font-medium inline-block">CVV*</label>
                                        <input class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" name="card[cvc]" maxlength="3" placeholder="CVV">
                                    </div>
                                    <div class="space-y-1">
                                        <label class="text-default-800 text-sm font-medium inline-block">Add Balance*</label>
                                        <input class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="text" name="addbalance" maxlength="3" placeholder="$0">
                                    </div>
                                </div>
                                <a href="#" class="inline-flex items-center justify-center rounded-lg bg-primary px-6 py-2.5 text-center text-sm font-medium text-white shadow-sm transition-all duration-200 hover:bg-primary-600 mt-4"><i class="ti ti-circle-plus me-1"></i> Add Balance</a>
                            </div>
                        </div>

                        <div class="overflow-hidden border border-default-200 rounded-lg">
                            <div class="px-6 py-4">
                                <h5 class="text-lg font-medium text-default-950 capitalize">History</h5>
                            </div>
                            <div class="border-t border-dashed border-default-200">
                                <div class="divide-y divide-default-200 overflow-y-auto h-[339px]
                                        [&::-webkit-scrollbar]:w-1
                                        [&::-webkit-scrollbar-track]:bg-transparent
                                        [&::-webkit-scrollbar-thumb]:bg-default-200
                                        [&::-webkit-scrollbar-thumb]:rounded
                                    ">
                                    <div class="flex items-center justify-between p-4">
                                        <div class="">
                                            <h4 class="text-base font-medium text-default-900 mb-1">Purchase</h4>
                                            <p class="text-sm text-default-900 mb-2">Transaction ID <span class="text-primary">freshoo99802586</span></p>
                                            <span class="text-default-900">6 May 2018, 12.56PM</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between p-4">
                                        <div class="">
                                            <h4 class="text-base font-medium text-default-900 mb-1">Purchase</h4>
                                            <p class="text-sm text-default-900 mb-2">Transaction ID <span class="text-primary">freshoo99802586</span></p>
                                            <span class="text-default-900">8 May 2018, 12.56PM</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between p-4">
                                        <div class="">
                                            <h4 class="text-base font-medium text-default-900 mb-1">Purchase</h4>
                                            <p class="text-sm text-default-900 mb-2">Transaction ID <span class="text-primary">freshoo99802586</span></p>
                                            <span class="text-default-900">12 May 2018, 12.56PM</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between p-4">
                                        <div class="">
                                            <h4 class="text-base font-medium text-default-900 mb-1">Purchase</h4>
                                            <p class="text-sm text-default-900 mb-2">Transaction ID <span class="text-primary">freshoo99802586</span></p>
                                            <span class="text-default-900">14 May 2018, 12.56PM</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.shared/footer')

@endsection