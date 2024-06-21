@extends('user')

@section('content')

@include('layouts.shared/navbar')

@include('layouts.shared/mobile-nav')

<div class="p-6 space-y-6">

    @include('layouts.shared/page-title', ['subtitle' => 'Orders', 'title' => 'Order Details'])

    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
        <div class="p-5 flex flex-wrap items-center gap-3 border-b border-default-200">
            <h4 class="text-xl font-medium text-default-900">Order FM1020#20</h4>
            <div class="flex flex-wrap items-center gap-3">
                <i class="ti ti-point-filled"></i>
                <h4 class="text-sm text-default-600">September 23, 2023</h4>
            </div>
            <div class="flex flex-wrap items-center gap-3">
                <i class="ti ti-point-filled"></i>
                <h4 class="text-sm text-default-600">3 Products</h4>
            </div>

            <a href="" class="ms-auto text-base font-medium text-primary">Back to List</a>
        </div>
        <div class="p-5">
            <div class="grid xl:grid-cols-4 gap-10">
                <div class="xl:col-span-3 col-span-1">
                    <form action="">
                        <div class="flex flex-col flex-wrap md:flex-row w-full md:items-end gap-2 mb-6">
                            <div class="md:grow">
                                <label for="order_id" class="mb-2.5 block text-sm font-medium text-default-700">Order ID</label>
                                <input type="text" id="order_id" class="py-2.5 text-sm block w-full rounded border-default-200 bg-default-50 focus:ring-0 focus:border-primary" placeholder="Enter your order id">
                            </div>
                            <div class="md:shrink-0">
                                <a href="#" class="w-full sm:w-auto inline-flex items-center justify-center rounded border border-primary bg-primary px-6 py-2.5 text-center text-sm font-medium text-white shadow-sm transition-all">Track Order</a>
                            </div>
                        </div>
                    </form>
                    <div class="relative mt-20 mb-10">
                        <div class="md:flex hidden mx-20 -mb-6">
                            <div class="flex w-full h-1.5 bg-default-200 rounded-full overflow-hidden">
                                <div class="w-1/2 flex flex-col justify-center overflow-hidden bg-primary rounded-full"></div>
                            </div>
                        </div>

                        <div class="absolute inset-y-0 start-1/2 -translate-x-1/2 md:hidden flex">
                            <div class="absolute inset-y-0 start-1/2 -translate-x-1/2 flex h-full w-1.5 bg-default-200 rounded-full overflow-hidden">
                                <div class="absolute top-0 bottom-1/2 start-1/2 -translate-x-1/2 w-1.5 flex flex-col justify-center overflow-hidden bg-primary rounded-full"></div>
                            </div>
                        </div>

                        <div class="flex md:flex-row flex-col justify-between items-center gap-8 relative z-10 mx-10">
                            <div class="flex flex-col justify-center items-center">
                                <div class="bg-primary rounded-full text-white w-10 h-10 flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="check" class="lucide lucide-check">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                </div>
                                <h4 class="text-sm text-default-800 mt-3 p-2 md:bg-transparent bg-default-100 md:shadow-none shadow rounded-lg">Order received</h4>
                            </div>

                            <div class="flex flex-col justify-center items-center">
                                <div class="bg-primary rounded-full w-10 h-10 flex justify-center items-center">
                                    <span class="text-sm font-medium text-white">02</span>
                                </div>
                                <h4 class="text-sm text-default-800 mt-3 p-2 md:bg-transparent bg-default-100 md:shadow-none shadow rounded-lg">Processing</h4>
                            </div>

                            <div class="flex flex-col justify-center items-center">
                                <div class="backdrop-blur-sm border border-dashed border-primary rounded-full w-10 h-10 flex justify-center items-center">
                                    <span class="text-sm font-medium text-primary">03</span>
                                </div>
                                <h4 class="text-sm text-default-800 mt-3 p-2 md:bg-transparent bg-default-100 md:shadow-none shadow rounded-lg">On the way</h4>
                            </div>

                            <div class="flex flex-col justify-center items-center">
                                <div class="backdrop-blur-sm border border-dashed border-primary rounded-full w-10 h-10 flex justify-center items-center">
                                    <span class="text-sm font-medium text-primary">04</span>
                                </div>
                                <h4 class="text-sm text-default-800 mt-3 p-2 md:bg-transparent bg-default-100 md:shadow-none shadow rounded-lg">Delivered</h4>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1">
                        <div class="relative overflow-x-auto border border-default-200 rounded-lg">
                            <div class="min-w-full inline-block align-middle">
                                <div class="overflow-hidden">
                                    <table class="min-w-full divide-y divide-default-200">
                                        <thead class="bg-default-50">
                                            <tr>
                                                <th scope="col" class="px-6 py-3 text-start text-sm font-semibold text-default-800 uppercase min-w-[100px]">Product</th>
                                                <th scope="col" class="px-6 py-3 text-start sr-only min-w-[12rem]">Product</th>
                                                <th scope="col" class="px-6 py-3 text-start text-sm font-semibold text-default-800 uppercase">Price</th>
                                                <th scope="col" class="px-6 py-3 text-start text-sm font-semibold text-default-800 uppercase min-w-[10rem]">Quantity</th>
                                                <th scope="col" class="px-6 py-3 text-start text-sm font-semibold text-default-800 uppercase min-w-[15rem]">Subtotal</th>
                                            </tr><!--  end tr -->
                                        </thead><!--  end t-head -->
                                        <tbody class="divide-y divide-default-200">
                                            @foreach ($cartItems as $item)


                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                                    @if ($item->foto)
                                                    @php
                                                    $gambarPaths = explode(',', $item->foto);
                                                    $gambar = $gambarPaths[0];
                                                    @endphp
                                                    <img src="{{ url('storage/'. $gambar) }}" alt="" class="max-w-full h-20">
                                                    @endif
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">{{ $item->nama }}</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">Rp. {{ number_format($item->hj, 0, ',', '.') }}</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">x{{ $item->qtyj }}</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">$70.00</td>
                                            </tr><!--  end tr -->

                                            @endforeach
                                        </tbody><!--  end t-body -->
                                    </table><!--  end table -->
                                </div><!--  end overflow-hidden -->
                            </div>
                        </div>
                    </div>

                    <div class="pt-10">
                        <div class="grid lg:grid-cols-12 grid-cols-1 gap-4">
                            <div class="lg:col-span-8 col-span-1">
                                <div class="grid md:grid-cols-2 gap-6">
                                    <div class="border border-default-200 rounded-lg">
                                        <div class="px-4 py-4">
                                            <h1 class="text-lg font-medium text-default-800 mb-4">Billing Address</h1>
                                            <h6 class="text-lg font-medium text-default-800 mb-2">Gustavo Schleifer</h6>
                                            <p class="text-base mb-6">3042 Allentown Apartment, Parker Road. New York 311434 USA.</p>
                                            <p class="text-base text-default-800 mb-4">dainne.ressell@gmail.com</p>
                                            <p class="text-base text-default-800 mb-4">(123) 278-4567</p>

                                            <a href="#" class="inline-flex items-center justify-center rounded border border-primary bg-primary px-6 py-2.5 text-center text-sm font-medium text-white shadow-sm transition-all">Edit Address</a>
                                        </div>
                                    </div><!-- end card -->

                                    <div class="border border-default-200 rounded-lg">
                                        <div class="px-4 py-4">
                                            <h1 class="text-lg font-medium text-default-800 mb-4">Shipping Address</h1>
                                            <h6 class="text-lg font-medium text-default-800 mb-2">Jaydon Lubin</h6>
                                            <p class="text-base mb-6">3042 Allentown Apartment, Parker Road. New York 311434 USA.</p>
                                            <p class="text-base text-default-800 mb-4">dainne.ressell@gmail.com</p>
                                            <p class="text-base text-default-800 mb-4">(123) 278-4567</p>

                                            <a href="#" class="inline-flex items-center justify-center rounded border border-primary bg-primary px-6 py-2.5 text-center text-sm font-medium text-white shadow-sm transition-all">Edit Address</a>
                                        </div>
                                    </div><!-- end card -->
                                </div>
                            </div><!-- end grid-col -->

                            <div class="lg:col-span-4 col-span-1">
                                <div class="border border-default-200 rounded-lg">
                                    <div class="px-4 py-2 border-b border-default-200">
                                        <p class="text-default-900 font-medium uppercase mb-2">Order ID:</p>
                                        <p class="text-default-800">#4152</p>
                                    </div>
                                    <div class="divide-y divide-default-200">
                                        <div class="p-4 flex justify-between">
                                            <p class="text-default-500 w-1/2">Subtotal:</p>
                                            <p class="text-default-800 w-1/2 text-end">$365.00</p>
                                        </div>
                                        <div class="p-4 flex justify-between">
                                            <p class="text-default-500 w-1/2">Discount</p>
                                            <p class="text-default-800 w-1/2 text-end">20%</p>
                                        </div>
                                        <div class="p-4 flex justify-between">
                                            <p class="text-default-500 w-1/2">Shipping</p>
                                            <p class="text-default-800 w-1/2 text-end">Free</p>
                                        </div>
                                        <div class="p-4 flex justify-between">
                                            <p class="text-default-500 w-1/2">Total</p>
                                            <p class="text-default-800 w-1/2 text-end">$292.00</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end grid-col -->
                        </div><!-- end grid -->
                    </div>
                </div>
                <div class="space-y-6">
                    <div class="rounded-lg border border-default-200">
                        <div class="p-4 border-b border-default-200">
                            <h4 class="text-sm font-medium text-default-800">Logistics Details</h4>
                        </div>

                        <div class="p-6 text-center">
                            <img src="/images/other/truck.png" class="flex mx-auto mb-3">

                            <h4 class="text-base font-medium text-default-800 mb-2">Metro Logistics</h4>
                            <p class="text-base font-medium text-default-700 mb-2">ID: JLST2023477890</p>
                            <p class="text-base text-default-700">Payment Mode: Prepaid (Debit Card)</p>
                        </div>
                    </div>

                    <div class="rounded-lg border border-default-200">
                        <div class="p-4 border-b border-default-200">
                            <h4 class="text-sm font-medium text-default-800">Logistics Details</h4>
                        </div>

                        <div class="">
                            <div class="px-4 py-4 flex justify-between border-b border-default-200">
                                <h4 class="text-sm text-default-700">Transaction ID :</h4>
                                <h4 class="text-sm font-medium text-default-800">#20234567213</h4>
                            </div>
                            <div class="px-4 py-4 flex justify-between border-b border-default-200">
                                <h4 class="text-sm text-default-700">Payment Method :</h4>
                                <h4 class="text-sm font-medium text-default-800">#20234567213</h4>
                            </div>
                            <div class="px-4 py-4 flex justify-between border-b border-default-200">
                                <h4 class="text-sm text-default-700">Card Holder Name :</h4>
                                <h4 class="text-sm font-medium text-default-800">Jaylon Calzoni</h4>
                            </div>
                            <div class="px-4 py-4 flex justify-between">
                                <h4 class="text-sm text-default-700">Card Number :</h4>
                                <h4 class="text-sm font-medium text-default-800">1234 4354 4564</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
