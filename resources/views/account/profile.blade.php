@extends('user')

@section('content')

@include('layouts.shared/navbar')

@include('layouts.shared/mobile-nav')

@include('layouts.shared/page-title' ,['subtitle' => 'Pages', 'title' => 'Profile'])

<section class="lg:py-12 py-6">
    <div class="container">
        <div class="grid lg:grid-cols-5 gap-6">
            @include('layouts.shared/account-menu')

            <div class="lg:col-span-4">
                <div class="border border-default-200 rounded-lg p-6">
                    <div class="space-y-6">
                        <h3 class="text-xl font-semibold text-default-900">Hi! Adam Wathan</h3>

                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="md:col-span-2">
                                <div class="border border-default-200 rounded-lg">
                                    <div class="px-6 py-4">
                                        <h5 class="text-lg font-medium text-default-950 capitalize">My Wallet</h5>
                                    </div>
                                    <div class="p-5 border-t border-dashed border-default-200">
                                        <h3 class="text-xl text-default-900 mb-5">Credits $600</h3>
                                        <div class="flex flex-wrap sm:flex-nowrap items-center *:sm:w-1/2 gap-6">
                                            <p class="text-base text-default-600"><i class="ti ti-credit-card align-middle"></i> Payment Method</p>
                                            <p class="text-base text-primary"><i class="ti ti-gift"></i>+5 Rewards Available</p>
                                        </div>
                                    </div>
                                    <div class="px-6 py-4 border-t border-dashed border-default-200">
                                        <button class="inline-flex items-center justify-center rounded-lg bg-primary px-6 py-2.5 text-center text-sm font-medium text-white shadow-sm transition-all duration-200 hover:bg-primary-600">View All Orders</button>
                                    </div>
                                </div>
                            </div>
                            <div class="border border-default-200 rounded-lg">
                                <div class="px-6 py-4">
                                    <h5 class="text-lg font-medium text-default-950 capitalize">My Orders</h5>
                                </div>
                                <div class="p-5 border-t border-dashed border-default-200">
                                    <h3 class="text-xl text-default-900 mb-5">4 Recently Purchases</h3>
                                    <div class="flex items-center justify-between gap-4">
                                        <p class="text-base text-default-600">$45</p>
                                        <p class="text-base text-primary">On the way</p>
                                        <p class="text-base text-default-600">8 Items</p>
                                    </div>
                                </div>
                                <div class="px-6 py-4 border-t border-dashed border-default-200">
                                    <button class="inline-flex items-center justify-center rounded-lg bg-primary px-6 py-2.5 text-center text-sm font-medium text-white shadow-sm transition-all duration-200 hover:bg-primary-600">View All Orders</button>
                                </div>
                            </div>
                            <div class="border border-default-200 rounded-lg">
                                <div class="px-6 py-4">
                                    <h5 class="text-lg font-medium text-default-950 capitalize">My Rewards</h5>
                                </div>
                                <div class="p-5 border-t border-dashed border-default-200">
                                    <h3 class="text-xl text-default-900 mb-5">6 Rewards</h3>
                                    <div class="flex flex-wrap items-center gap-2">
                                        <span class="inline-flex items-center gap-x-1.5 py-1 px-3 rounded-full text-xs font-medium bg-primary/10 border border-primary/20 text-primary">Cashback $4</span>
                                        <span class="inline-flex items-center gap-x-1.5 py-1 px-3 rounded-full text-xs font-medium bg-primary/10 border border-primary/20 text-primary">Won $9</span>
                                        <span class="inline-flex items-center gap-x-1.5 py-1 px-3 rounded-full text-xs font-medium bg-primary/10 border border-primary/20 text-primary">Won 35%</span>
                                    </div>
                                </div>
                                <div class="px-6 py-4 border-t border-dashed border-default-200">
                                    <button class="inline-flex items-center justify-center rounded-lg bg-primary px-6 py-2.5 text-center text-sm font-medium text-white shadow-sm transition-all duration-200 hover:bg-primary-600">View All Orders</button>
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
