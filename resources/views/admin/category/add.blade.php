@extends('admin')

@section('title')

@section('content')

<div class="p-6 space-y-6">

    @include('layouts.shared/admin-page-title', ['subtitle' => 'Category', 'title' => 'Add Sellers'])

    <div class="border border-default-200 rounded-lg">
        <div class="px-6 py-4 flex items-center justify-between gap-4">
            <h4 class="grow text-lg font-medium text-default-900">Add Category</h4>
        </div>
        <div class="p-5 border-t border-dashed border-default-200">
            <div class="grid lg:grid-cols-2 gap-6 mb-6">
                <div>
                    <form method="POST" action="{{ url('admin/category') }}" enctype="multipart/form-data">
                        @csrf
                        <label class="block text-sm font-medium text-default-900 mb-2" for="firstName">Category</label>
                        <input id="firstName" name="nama"
                            class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50"
                            type="text" placeholder="Enter Category"> <br>

                            <input class="form-control" type="file" name="foto" id="foto" multiple>


                        <div class="flex gap-4 mt-10">
                            <button
                                class="flex items-center justify-center gap-2 rounded-md bg-primary px-6 py-2.5 text-center text-sm font-semibold text-white shadow-sm transition-all duration-200 hover:bg-primary-500">
                                <i class="ti ti-device-floppy text-lg"></i>
                                Save
                            </button>
                        </div>
                    </form>
                </div>

                {{-- <div>
                    <label class="block text-sm font-medium text-default-900 mb-2" for="lastName">Last Name</label>
                    <input id="lastName"
                        class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50"
                        type="text" placeholder="Enter Your Last Name">
                </div>

                <div>
                    <label class="block text-sm font-medium text-default-900 mb-2" for="user_name">User Name</label>
                    <input id="user_name"
                        class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50"
                        type="text" placeholder="Enter Your User Name">
                </div>

                <div>
                    <label class="block text-sm font-medium text-default-900 mb-2" for="emailAddress">Email</label>
                    <input id="emailAddress"
                        class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50"
                        type="email" placeholder="demoexample@mail.com">
                </div>

                <div>
                    <label class="block text-sm font-medium text-default-900 mb-2" for="phone_number">Phone
                        Number</label>
                    <input id="phone_number"
                        class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50"
                        type="tel" placeholder="+1-123-XXX-4567">
                </div>

                <div class="space-y-1">
                    <!-- Select -->
                    <label for="all-select-categories" class="text-sm mb-1 text-default-900">Country/Region</label>
                    <div class="relative">
                        <select id="all-select-categories" data-hs-select='{
                              "placeholder": "Select Country",
                              "toggleTag": "<button type=\"button\"></button>",
                              "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 form-input block w-full rounded-md py-2.5 ps-4 pe-10 text-default-800 text-start text-sm focus:ring-transparent border-default-200 overflow-hidden focus:border-primary dark:bg-default-50 before:absolute before:inset-0 before:z-[1]",
                              "dropdownClasses": "mt-2 z-50 w-full max-h-[300px] p-1.5 space-y-0.5 bg-white border border-default-200 rounded-md overflow-hidden overflow-y-auto dark:bg-default-50 [&::-webkit-scrollbar]:w-1 [&::-webkit-scrollbar-track]:bg-transparent [&::-webkit-scrollbar-thumb]:bg-default-300",
                              "optionClasses": "py-2 px-3 w-full text-sm text-default-800 cursor-pointer rounded-md hover:bg-default-100 focus:outline-none focus:bg-default-100",
                              "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><i class=\"ti ti-checks text-lg flex-shrink-0 text-primary\" /></i></span></div>"
                              }' class="hidden">
                            <option></option>
                            <option value="United States">United States</option>
                            <option value="Canada">Canada</option>
                            <option value="Australia">Australia</option>
                            <option value="Germany">Germany</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="China">China</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Bharat">Bharat</option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="France">France</option>
                            <option value="Brazil">Brazil</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Albania">Albania</option>
                        </select>


                        <div class="absolute -inset-y-0 end-3 flex items-center">
                            <i class="ti ti-selector shrink text-base/none text-default-500"></i>
                        </div>
                    </div>
                    <!-- End Select -->
                </div><!-- col end -->

                <div class="space-y-1">
                    <!-- Select -->
                    <label for="all-select-categories" class="text-sm mb-1 text-default-900">State</label>
                    <div class="relative">
                        <select id="all-select-categories" data-hs-select='{
                              "placeholder": "Select State",
                              "toggleTag": "<button type=\"button\"></button>",
                              "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 form-input block w-full rounded-md py-2.5 ps-4 pe-10 text-default-800 text-start text-sm focus:ring-transparent border-default-200 overflow-hidden focus:border-primary dark:bg-default-50 before:absolute before:inset-0 before:z-[1]",
                              "dropdownClasses": "mt-2 z-50 w-full max-h-[300px] p-1.5 space-y-0.5 bg-white border border-default-200 rounded-md overflow-hidden overflow-y-auto dark:bg-default-50 [&::-webkit-scrollbar]:w-1 [&::-webkit-scrollbar-track]:bg-transparent [&::-webkit-scrollbar-thumb]:bg-default-300",
                              "optionClasses": "py-2 px-3 w-full text-sm text-default-800 cursor-pointer rounded-md hover:bg-default-100 focus:outline-none focus:bg-default-100",
                              "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><i class=\"ti ti-checks text-lg flex-shrink-0 text-primary\" /></i></span></div>"
                              }' class="hidden">
                            <option></option>
                            <option value="Alabama">Alabama</option>
                            <option value="Alaska">Alaska</option>
                            <option value="Arizona">Arizona</option>
                            <option value="Arkansas">Arkansas</option>
                            <option value="California">California</option>
                            <option value="Colorado">Colorado</option>
                            <option value="Connecticut">Connecticut</option>
                            <option value="Delaware">Delaware</option>
                            <option value="Florida">Florida</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Hawaii">Hawaii</option>
                            <option value="Idaho">Idaho</option>
                            <option value="Illinois">Illinois</option>
                            <option value="Indiana">Indiana</option>
                            <option value="Iowa">Iowa</option>
                            <option value="Kansas">Kansas</option>
                            <option value="Kentucky">Kentucky</option>
                        </select>


                        <div class="absolute -inset-y-0 end-3 flex items-center">
                            <i class="ti ti-selector shrink text-base/none text-default-500"></i>
                        </div>
                    </div>
                    <!-- End Select -->
                </div><!-- col end -->

                <div>
                    <label class="block text-sm font-medium text-default-900 mb-2" for="zip_code">ZIP code</label>
                    <input id="zip_code"
                        class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50"
                        type="text" placeholder="35010">
                </div>

                <div class="lg:col-span-2">
                    <label class="block text-sm font-medium text-default-900 mb-2" for="description">Description</label>
                    <textarea id="description"
                        class="block w-full bg-transparent rounded-lg py-2.5 px-4 border border-default-200 focus:ring-transparent focus:border-default-200"
                        rows="5" placeholder="Enter Your Last Name"></textarea>
                </div>
            </div>

            <button
                class="flex items-center justify-center gap-2 rounded-md bg-primary/10 px-6 py-2.5 text-center text-sm font-semibold text-primary shadow-sm transition-all duration-200 hover:bg-primary hover:text-white">
                <i class="ti ti-arrow-back-up text-lg"></i>
                Undo
            </button> --}}
            {{-- <div class="flex justify-end gap-4">
                <button
                    class="flex items-center justify-center gap-2 rounded-md bg-primary px-6 py-2.5 text-center text-sm font-semibold text-white shadow-sm transition-all duration-200 hover:bg-primary-500">
                    <i class="ti ti-device-floppy text-lg"></i>
                    Save
                </button>
            </div> --}}
        </div>
    </div>
</div>

@endsection