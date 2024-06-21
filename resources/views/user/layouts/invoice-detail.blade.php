@extends('user')

@section('content')

<div class="p-6 space-y-6">

    @include('layouts.shared/page-title', ['subtitle' => 'Invoice', 'title' => 'Invoice Detail'])

    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit print:shadow-none print:rounded-none print:border-none">
        <div class="p-5 print:p-0">

            <div class="mb-10">
                <div class="flex justify-between items-center">

                    <div>
                        <img src="/images/logo-dark.png" alt="logo-dark" class="h-12">
                    </div> <!-- logo-dark end -->

                    <h4 class="text-lg font-semibold text-default-800">Invoice</h4>
                </div> <!-- flex-end -->
            </div>

            <div class="mb-14">
                <div class="grid sm:grid-cols-2 gap-6">

                    <div class="col-span-1">
                        <p class="text-default-900 font-medium mb-4"><b>Hello, Tosha Minner</b></p>
                        <p class="text-sm font-medium">Please find below a cost-breakdown for the recent work completed. Please make payment at your earliest convenience, and do not hesitate to contact me with any questions.</p>
                    </div> <!-- col-end -->

                    <div class="col-span-1">
                        <div class="flex sm:justify-end space-y-2">

                            <div class="grid gap-3">

                                <div class="grid grid-cols-4 gap-x-3">
                                    <h6 class="col-span-2 font-semibold text-default-900">Order Date:</h6>
                                    <p class="col-span-2 sm:text-end text-default-600 font-medium">Jan 17, 2023</p>
                                </div> <!-- grid-end -->

                                <div class="grid grid-cols-4 gap-x-3">
                                    <h6 class="col-span-2 font-semibold text-default-900">Order Status:</h6>
                                    <p class="col-span-2 sm:text-end text-default-600 font-medium">
                                        <span class="inline-flex items-center px-2 py-px rounded-full text-xs font-medium bg-teal-500 text-white">Paid</span>
                                    </p>
                                </div> <!-- grid-end -->

                                <div class="grid grid-cols-4 gap-x-3">
                                    <h6 class="col-span-2 font-semibold text-default-900">Order ID:</h6>
                                    <p class="col-span-2 sm:text-end text-default-600 font-medium">#123456</p>
                                </div> <!-- grid-end -->

                            </div> <!-- grid-end -->

                        </div> <!-- flex-end -->
                    </div> <!-- col-end -->

                </div> <!-- grid-end -->
            </div>

            <div class="mb-10">
                <div class="grid sm:grid-cols-3 gap-6">

                    <div class="col-span-1">
                        <h6 class="text-sm font-semibold text-default-900 mb-3">Billing Address</h6>
                        <address class="not-italic font-medium">Lynne K. Higby <br> 795 Folsom Ave, Suite 600 <br> San Francisco, CA 94107 <br> P: (123) 456-7890 </address>
                    </div> <!-- col-end -->

                    <div class="col-span-1">
                        <h6 class="text-sm font-semibold text-default-900 mb-3">Shipping Address</h6>
                        <address class="not-italic font-medium">Tosha Minner <br> 795 Folsom Ave, Suite 600 <br> San Francisco, CA 94107 <br> P: (123) 456-7890 </address>
                    </div> <!-- col-end -->

                    <div class="col-span-1">
                        <img src="/images/other/barcode.png" alt="barcode" class="sm:ms-auto">
                    </div> <!-- col-end -->

                </div> <!-- grid-end -->
            </div>

            <div class="mb-5">
                <div class="flex flex-col">
                    <div class="overflow-x-auto">
                        <div class="min-w-full inline-block align-middle overflow-hidden border border-default-200 rounded-md">

                            <table class="min-w-full">
                                <thead class="border-b py-3 bg-default-100 border-default-200 ">
                                    <tr>
                                        <th scope="col" class="px-6 py-2 text-left font-semibold text-default-500">#</th>
                                        <th scope="col" class="px-6 py-2 text-left font-semibold text-default-500 min-w-16">Item</th>
                                        <th scope="col" class="px-6 py-2 text-left font-semibold text-default-500">Quantity</th>
                                        <th scope="col" class="px-6 py-2 text-left font-semibold text-default-500">Unit Cost</th>
                                        <th scope="col" class="px-6 py-2 text-right font-semibold text-default-500">Total</th>
                                    </tr> <!-- tr-end -->
                                </thead> <!-- thead-end -->

                                <tbody>
                                    <tr class="text-default-500 transition-all duration-300 border-b border-default-200 hover:bg-default-100">
                                        <td class="px-6 py-2 font-medium">1</td>
                                        <td class="px-6 py-2 font-medium text-default-900"><b>Fruit</b> <br> Grapes - Sweet satisfaction, one grape at a time </td>
                                        <td class="px-6 py-2 font-medium">1</td>
                                        <td class="px-6 py-2 font-medium">$1799.00</td>
                                        <td class="px-6 py-2 font-medium text-right">$1799.00</td>
                                    </tr> <!-- tr-end -->

                                    <tr class="text-default-500 transition-all duration-300 border-b border-default-200 hover:bg-default-100">
                                        <td class="px-6 py-2 font-medium">2</td>
                                        <td class="px-6 py-2 font-medium text-default-900"><b>Vitamin Powder</b> <br> Powerful Daily Vitamin Boost. </td>
                                        <td class="px-6 py-2 font-medium">3</td>
                                        <td class="px-6 py-2 font-medium">$499.00</td>
                                        <td class="px-6 py-2 font-medium text-right">$1497.00</td>
                                    </tr> <!-- tr-end -->

                                    <tr class="text-default-500 transition-all duration-300 hover:bg-default-100">
                                        <td class="px-6 py-2 font-medium">1</td>
                                        <td class="px-6 py-2 font-medium text-default-900"><b>Nuts</b> <br> Crunchy Nut Bliss awaits!</td>
                                        <td class="px-6 py-2 font-medium">2</td>
                                        <td class="px-6 py-2 font-medium">$412.00</td>
                                        <td class="px-6 py-2 font-medium text-right">$824.00</td>
                                    </tr> <!-- tr-end -->
                                </tbody> <!-- tbody-end -->

                            </table> <!-- table-end -->

                        </div>
                    </div>
                </div>
            </div>

            <div class="grid sm:grid-cols-2 gap-6">

                <div class="col-span-1">
                    <p class="font-medium text-sm mb-2">Notes:</p>
                    <p class="text-xs">All accounts are to be paid within 7 days from receipt of invoice. To be paid by cheque or credit card or direct payment online. If account is not paid within 7 days the credits details supplied as confirmation of work undertaken will be charged the agreed quoted fee noted above.</p>
                </div> <!-- col-end -->

                <div class="col-span-1">
                    <div class="flex sm:justify-end space-y-2">

                        <div class="grid gap-3">

                            <div class="grid grid-cols-4 gap-x-3">
                                <h6 class="col-span-2 font-semibold text-default-900">Sub-total:</h6>
                                <p class="col-span-2 sm:text-end text-default-600 font-medium">$4120.00</p>
                            </div> <!-- grid-end -->

                            <div class="grid grid-cols-4 gap-x-3">
                                <h6 class="col-span-2 font-semibold text-default-900">VAT (12.5):</h6>
                                <p class="col-span-2 sm:text-end text-default-600 font-medium">$515.00</p>
                            </div> <!-- grid-end -->

                            <div class="grid grid-cols-4 gap-x-3">
                                <h6 class="col-span-5 sm:text-xl text-lg font-semibold text-default-900">$4635.00 USD</h6>
                            </div> <!-- grid-end -->

                        </div> <!-- grid-end -->

                    </div> <!-- flex-end -->
                </div> <!-- col-end -->

            </div> <!-- grid-end -->

            <div class="mt-10">
                <div class="flex sm:justify-end gap-2 print:hidden">
                    <a href="javascript:window.print()" class="py-2 px-4 inline-flex items-center justify-center font-semibold tracking-wide align-middle duration-500 text-xs text-center bg-primary-500 hover:bg-primary-600 text-white rounded"><i class="ti ti-printer text-lg/none me-1"></i> Print</a>
                    <button type="button" class="px-4 inline-flex items-center justify-center font-semibold tracking-wide align-middle duration-500 text-xs text-center bg-primary-500 hover:bg-primary-600 text-white rounded"><i class="ti ti-file-download text-lg/none me-1"></i> Save</bu>
                </div> <!-- flex-end -->
            </div>

        </div>
    </div>

</div>

@endsection
