@extends('layouts.base')

@section('content')

@include('layouts.shared/navbar')

@include('layouts.shared/mobile-nav')

@include('layouts.shared/page-title' ,['subtitle' => 'Pages', 'title' => 'Order Detail'])

<section class="lg:py-12 py-6">
    <div class="container">
        <div class="grid lg:grid-cols-5 gap-6"> 
            @include('layouts.shared/account-menu')

            <div class="lg:col-span-4">
                <div class="border border-default-200 rounded-lg p-6">
                    <div class="w-full">
                        <div class="pb-6">
                            <form action="">
                                <div class="flex flex-col sm:flex-row w-full sm:items-end gap-2 mb-6">
                                    <div class="sm:grow">
                                        <label for="order_id" class="mb-2.5 block text-sm font-medium text-default-700">Order ID</label>
                                        <input type="text" id="order_id" class="py-2.5 text-sm block w-full rounded border-default-300 focus:ring-0 focus:border-primary dark:bg-default-50" placeholder="Enter your order id" />
                                    </div>
                                    <div class="sm:shrink-0">
                                        <a href="#" class="w-full sm:w-auto inline-flex items-center justify-center rounded border border-primary bg-primary px-6 py-2.5 text-center text-sm font-medium text-white shadow-sm transition-all">Track Order</a>
                                    </div>
                                </div>
                            </form>
                            <div class="relative mt-10 mb-8">
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
                                            <i class="ti ti-checks text-lg"></i>
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
                        </div>

                        <div class="grid grid-cols-1">
                            <div class="overflow-hidden border border-default-200 rounded-md">
                                <div class="relative overflow-x-auto">
                                    <table class="min-w-full">
                                        <thead class="bg-default-100 border-b border-dashed border-default-200">
                                            <tr>
                                                <th scope="col" class="px-6 py-3 text-start text-sm font-semibold text-default-800 uppercase w-[100px]">Product</th>
                                                <th scope="col" class="px-6 py-3 text-start sr-only min-w-[12rem]">Product</th>
                                                <th scope="col" class="px-6 py-3 text-start text-sm font-semibold text-default-800 uppercase">Price</th>
                                                <th scope="col" class="px-6 py-3 text-start text-sm font-semibold text-default-800 uppercase min-w-[10rem]">Quantity</th>
                                                <th scope="col" class="px-6 py-3 text-start text-sm font-semibold text-default-800 uppercase w-[15rem]">Subtotal</th>
                                            </tr><!--  end tr -->
                                        </thead>
                                        <tbody class="divide-y divide-dashed divide-default-200">
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                                    <img src="/images/product/1.png" class="h-22 w-22">
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">Banana</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">$47.00</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">x6</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">$70.00</td>
                                            </tr><!--  end tr -->

                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                                    <img src="/images/product/2.png" alt="" class="h-22 w-22">
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">Shale Snacks</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">$25.00</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">x4</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">$100.00</td>
                                            </tr><!--  end tr -->

                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                                    <img src="/images/product/3.png" alt="" class="h-22 w-22">
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">Grapes</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">$45.00</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">x1</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">$267.00</td>
                                            </tr><!--  end tr -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="pt-10">
                            <div class="grid lg:grid-cols-12 grid-cols-1 gap-4">
                                <div class="lg:col-span-8 col-span-1">
                                    <div class="flex flex-wrap border border-default-200 rounded-lg divide-y md:divide-y-0 md:divide-x divide-default-200">
                                        <div class="md:w-1/2 w-auto grow">
                                            <div class="px-4 py-3 border-b border-default-200">
                                                <h1 class="text-lg font-medium text-default-800">Billing Address</h1>
                                            </div>
                                            <div class="px-4 py-4">
                                                <h6 class="text-lg font-medium text-default-800 mb-2">Jordyn Madsen</h6>
                                                <p class="text-base text-default-600 mb-6">3042 Allentown Apartment, Parker Road. <br> New York 311434 USA.</p>
                                                <div class="mb-4">
                                                    <p class="text-base text-default-700 uppercase">Email</p>
                                                    <p class="text-base text-default-800">demo.mail123@gmail.com</p>
                                                </div>
                                                <div class="">
                                                    <p class="text-base text-default-700 uppercase">Phone</p>
                                                    <p class="text-base text-default-800">(123) 278-4567</p>
                                                </div>
                                            </div>
                                        </div><!-- end card -->

                                        <div class="md:w-1/2 w-auto grow">
                                            <div class="px-4 py-3 border-b border-default-200">
                                                <h1 class="text-lg font-medium text-default-800">Shipping Address</h1>
                                            </div>
                                            <div class="px-4 py-4">
                                                <h6 class="text-lg font-medium text-default-800 mb-2">Alfonso Vetrovs</h6>
                                                <p class="text-base text-default-600 mb-6">3042 Allentown Apartment, Parker Road. <br> New York 311434 USA.</p>
                                                <div class="mb-4">
                                                    <p class="text-base text-default-700 uppercase">Email</p>
                                                    <p class="text-base text-default-800">demo.mail123@gmail.com</p>
                                                </div>
                                                <div class="">
                                                    <p class="text-base text-default-700 uppercase">Phone</p>
                                                    <p class="text-base text-default-800">(123) 278-4567</p>
                                                </div>
                                            </div>
                                        </div><!-- end card -->
                                    </div><!-- end flex -->
                                </div><!-- end grid-col -->

                                <div class="lg:col-span-4 col-span-1">
                                    <div class="border border-default-200 rounded-lg">
                                        <div class="border-b border-default-200 flex divide-x divide-default-200">
                                            <div class="px-6 py-4 w-1/2">
                                                <p class="text-default-700 uppercase mb-2">Order ID:</p>
                                                <p class="text-default-800">#4152</p>
                                            </div>
                                            <div class="px-6 py-4 w-1/2">
                                                <p class="text-default-700 uppercase mb-2">Payment Method:</p>
                                                <p class="text-default-800">Visa **</p>
                                            </div>
                                        </div>
                                        <div class="divide-y divide-default-200">
                                            <div class="p-4 flex justify-between">
                                                <p class="text-default-700 w-1/2">Subtotal:</p>
                                                <p class="text-default-800 w-1/2 text-end">$365.00</p>
                                            </div>
                                            <div class="p-4 flex justify-between">
                                                <p class="text-default-700 w-1/2">Discount</p>
                                                <p class="text-default-800 w-1/2 text-end">20%</p>
                                            </div>
                                            <div class="p-4 flex justify-between">
                                                <p class="text-default-700 w-1/2">Shipping</p>
                                                <p class="text-default-800 w-1/2 text-end">Free</p>
                                            </div>
                                            <div class="p-4 flex justify-between">
                                                <p class="text-default-700 w-1/2">Total</p>
                                                <p class="text-default-800 w-1/2 text-end">$292.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end grid-col -->
                            </div><!-- end grid -->
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