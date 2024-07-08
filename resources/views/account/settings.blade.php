@extends('layouts.base')

@section('content')

@include('layouts.shared/navbar')

@include('layouts.shared/mobile-nav')

@include('layouts.shared/page-title' ,['subtitle' => 'Pages', 'title' => 'Account Setting'])

<section class="lg:py-12 py-6">
    <div class="container">
        <div class="grid lg:grid-cols-5 gap-6">
            @include('layouts.shared/account-menu')

            <div class="lg:col-span-4">
                <div class="p-6 border rounded-lg border-default-200 mb-6">
                    <div>
                        <h4 class="text-xl font-medium text-default-900 mb-4">Personal Details</h4>

                        <div class="grid lg:grid-cols-5 gap-6">
                            <div class="lg:col-span-1">
                                <div class="w-40 h-40 relative">
                                    <img src="/images/avatars/1.png" class="rounded-full">
                                    <div class="absolute bottom-0 end-0">
                                        <button class="w-11 h-11 flex items-center justify-center rounded-full bg-primary border-2 border-default-50">
                                            <i data-lucide="camera" class="w-5 h-5 text-white"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="lg:col-span-4">
                                <div class="grid lg:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-sm font-medium text-default-900 mb-2" for="firstName">First Name</label>
                                        <input id="firstName" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="text" placeholder="Enter Your First Name">
                                    </div>

                                    <div>
                                        <label class="block text-sm font-medium text-default-900 mb-2" for="lastName">Last Name</label>
                                        <input id="lastName" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="text" placeholder="Enter Your Last Name">
                                    </div>

                                    <div>
                                        <label class="block text-sm font-medium text-default-900 mb-2" for="userName">User Name</label>
                                        <input id="userName" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="text" placeholder="Enter Your User Name">
                                    </div>

                                    <div>
                                        <label class="block text-sm font-medium text-default-900 mb-2" for="emailAddress">Email</label>
                                        <input id="emailAddress" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="email" placeholder="demoexample@mail.com">
                                    </div>

                                    <div>
                                        <label class="block text-sm font-medium text-default-900 mb-2" for="phone_number">Phone Number</label>
                                        <input id="phone_number" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="tel" placeholder="+1-123-XXX-4567">
                                    </div>

                                    <div>
                                        <label class="block text-sm font-medium text-default-900 mb-2" for="country">Country/Region</label>
                                        <div class="relative">
                                            <select id="all-select-categories" data-hs-select='{
                                                    "placeholder": "Select country",
                                                    "toggleTag": "<button type=\"button\"></button>",
                                                    "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 text-start block w-full rounded-md py-2.5 ps-4 pe-10 text-default-900 text-sm focus:ring-transparent border border-default-200 focus:border-primary before:absolute before:inset-0 before:z-[1]",
                                                    "dropdownClasses": "mt-2 z-50 min-w-full max-h-[300px] p-1.5 space-y-0.5 bg-white border border-default-200 rounded-lg overflow-hidden overflow-y-auto end-0 dark:bg-default-50",
                                                    "optionClasses": "py-2 px-3 w-full text-sm text-default-800 cursor-pointer rounded-md hover:bg-default-100 focus:outline-none focus:bg-default-100",
                                                    "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><i class=\"ti ti-checks text-lg flex-shrink-0 text-primary\" /></i></span></div>"
                                                    }' class="hidden">
                                                <option></option>
                                                <option value="United States" selected>United States</option>
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

                                            <div class="absolute -inset-y-0 start-auto end-3 flex items-center">
                                                <i class="ti ti-chevron-down shrink text-base/none"></i>
                                            </div>
                                        </div><!-- End Select -->
                                    </div>

                                    <div>
                                        <label class="block text-sm font-medium text-default-900 mb-2" for="state">State</label>
                                        <div class="relative">
                                            <select id="all-select-categories" data-hs-select='{
                                                    "placeholder": "Select State",
                                                    "toggleTag": "<button type=\"button\"></button>",
                                                    "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 text-start block w-full rounded-md py-2.5 ps-4 pe-10 text-default-900 text-sm focus:ring-transparent border border-default-200 focus:border-primary before:absolute before:inset-0 before:z-[1]",
                                                    "dropdownClasses": "mt-2 z-50 min-w-full max-h-[300px] p-1.5 space-y-0.5 bg-white border border-default-200 rounded-lg overflow-hidden overflow-y-auto end-0 dark:bg-default-50",
                                                    "optionClasses": "py-2 px-3 w-full text-sm text-default-800 cursor-pointer rounded-md hover:bg-default-100 focus:outline-none focus:bg-default-100",
                                                    "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><i class=\"ti ti-checks text-lg flex-shrink-0 text-primary\" /></i></span></div>"
                                                    }' class="hidden">
                                                <option></option>
                                                <option value="Alabama" selected>Alabama</option>
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

                                            <div class="absolute -inset-y-0 start-auto end-3 flex items-center">
                                                <i class="ti ti-chevron-down shrink text-base/none"></i>
                                            </div>
                                        </div><!-- End Select -->
                                    </div>

                                    <div>
                                        <label class="block text-sm font-medium text-default-900 mb-2" for="zip_code">ZIP code</label>
                                        <input id="zip_code" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="text" placeholder="35010">
                                    </div>

                                    <div>
                                        <button class="inline-flex items-center justify-center rounded-lg bg-primary px-6 py-2.5 text-center text-sm font-medium text-white shadow-sm transition-all duration-200 hover:bg-primary-600">Save Changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-6 border rounded-lg border-default-200 mb-6">
                    <div>
                        <h4 class="text-xl font-medium text-default-900 mb-4">Change Password</h4>

                        <div class="mb-4" data-x-password>
                            <label class="block text-sm font-medium text-default-900 mb-2" for="current_password">Current Password</label>
                            <div class="flex">
                                <input type="password" id="current_password" class="form-password block w-full rounded-s-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="password" placeholder="Enter your password">
                                <button id="current_password" class="password-toggle inline-flex items-center justify-center py-2.5 px-4 border rounded-e-md bg-transparent border-s-0 border-default-200">
                                    <i class="password-eye-on h-5 w-5 text-default-600" data-lucide="eye"></i>
                                    <i class="password-eye-off h-5 w-5 text-default-600" data-lucide="eye-off"></i>
                                </button>
                            </div>
                        </div>

                        <div class="mb-4" data-x-password>
                            <label class="block text-sm font-medium text-default-900 mb-2" for="new_password">New Password</label>
                            <div class="flex">
                                <input type="password" id="new_password" class="form-password block w-full rounded-s-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="password" placeholder="Enter your password">
                                <button id="new_password" class="password-toggle inline-flex items-center justify-center py-2.5 px-4 border rounded-e-md bg-transparent border-s-0 border-default-200">
                                    <i class="password-eye-on h-5 w-5 text-default-600" data-lucide="eye"></i>
                                    <i class="password-eye-off h-5 w-5 text-default-600" data-lucide="eye-off"></i>
                                </button>
                            </div>
                        </div>

                        <div class="mb-4" data-x-password>
                            <label class="block text-sm font-medium text-default-900 mb-2" for="confirm_password">Confirm Password</label>
                            <div class="flex">
                                <input type="password" id="confirm_password" class="form-password block w-full rounded-s-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="password" placeholder="Enter your password">
                                <button id="confirm_password" class="password-toggle inline-flex items-center justify-center py-2.5 px-4 border rounded-e-md bg-transparent border-s-0 border-default-200">
                                    <i class="password-eye-on h-5 w-5 text-default-600" data-lucide="eye"></i>
                                    <i class="password-eye-off h-5 w-5 text-default-600" data-lucide="eye-off"></i>
                                </button>
                            </div>
                        </div>

                        <div>
                            <button class="inline-flex items-center justify-center rounded-lg bg-primary px-6 py-2.5 text-center text-sm font-medium text-white shadow-sm transition-all duration-200 hover:bg-primary-600">Save Changes</button>
                        </div>
                    </div>
                </div>

                <div class="grid lg:grid-cols-2 gap-6">
                    <div class="p-6 border rounded-lg border-default-200">
                        <h4 class="text-xl font-medium text-default-900 mb-6">Billing Address</h4>

                        <div class="grid lg:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-default-900 mb-2" for="billingFirstName">First Name</label>
                                <input id="billingFirstName" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="text" placeholder="Enter Your First Name">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-default-900 mb-2" for="billingLastName">Last Name</label>
                                <input id="billingLastName" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="text" placeholder="Enter Your Last Name">
                            </div>

                            <div class="lg:col-span-2">
                                <label class="block text-sm font-medium text-default-900 mb-2" for="billingCompanyName">Company Name (Optional)</label>
                                <input id="billingCompanyName" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="text" placeholder="Label">
                            </div>

                            <div class="lg:col-span-2">
                                <label class="block text-sm font-medium text-default-900 mb-2" for="billingAddress">Address</label>
                                <input id="billingAddress" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="text" placeholder="Road No. 47/x, House no. 123/B, Flat No. B4">
                            </div>

                            <div class="lg:col-span-2">
                                <label class="block text-sm font-medium text-default-900 mb-2" for="country">Country/Region</label>
                                <div class="relative">
                                    <select id="all-select-categories" data-hs-select='{
                                            "placeholder": "Select country",
                                            "toggleTag": "<button type=\"button\"></button>",
                                            "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 text-start block w-full rounded-md py-2.5 ps-4 pe-10 text-default-900 text-sm focus:ring-transparent border border-default-200 focus:border-primary before:absolute before:inset-0 before:z-[1]",
                                            "dropdownClasses": "mt-2 z-50 min-w-full max-h-[300px] p-1.5 space-y-0.5 bg-white border border-default-200 rounded-lg overflow-hidden overflow-y-auto end-0 dark:bg-default-50",
                                            "optionClasses": "py-2 px-3 w-full text-sm text-default-800 cursor-pointer rounded-md hover:bg-default-100 focus:outline-none focus:bg-default-100",
                                            "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><i class=\"ti ti-checks text-lg flex-shrink-0 text-primary\" /></i></span></div>"
                                            }' class="hidden">
                                        <option></option>
                                        <option value="United States" selected>United States</option>
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

                                    <div class="absolute -inset-y-0 start-auto end-3 flex items-center">
                                        <i class="ti ti-chevron-down shrink text-base/none"></i>
                                    </div>
                                </div><!-- End Select -->
                            </div>

                            <div class="lg:col-span-2">
                                <label class="block text-sm font-medium text-default-900 mb-2" for="state">State</label>
                                <div class="relative">
                                    <select id="all-select-categories" data-hs-select='{
                                            "placeholder": "Select State",
                                            "toggleTag": "<button type=\"button\"></button>",
                                            "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 text-start block w-full rounded-md py-2.5 ps-4 pe-10 text-default-900 text-sm focus:ring-transparent border border-default-200 focus:border-primary before:absolute before:inset-0 before:z-[1]",
                                            "dropdownClasses": "mt-2 z-50 min-w-full max-h-[300px] p-1.5 space-y-0.5 bg-white border border-default-200 rounded-lg overflow-hidden overflow-y-auto end-0 dark:bg-default-50",
                                            "optionClasses": "py-2 px-3 w-full text-sm text-default-800 cursor-pointer rounded-md hover:bg-default-100 focus:outline-none focus:bg-default-100",
                                            "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><i class=\"ti ti-checks text-lg flex-shrink-0 text-primary\" /></i></span></div>"
                                            }' class="hidden">
                                        <option></option>
                                        <option value="Alabama" selected>Alabama</option>
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

                                    <div class="absolute -inset-y-0 start-auto end-3 flex items-center">
                                        <i class="ti ti-chevron-down shrink text-base/none"></i>
                                    </div>
                                </div><!-- End Select -->
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-default-900 mb-2" for="billing_city">City</label>
                                <div class="relative">
                                    <select id="all-select-categories" data-hs-select='{
                                            "placeholder": "Select City",
                                            "toggleTag": "<button type=\"button\"></button>",
                                            "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 text-start block w-full rounded-md py-2.5 ps-4 pe-10 text-default-900 text-sm focus:ring-transparent border border-default-200 focus:border-primary before:absolute before:inset-0 before:z-[1]",
                                            "dropdownClasses": "mt-2 z-50 min-w-full max-h-[300px] p-1.5 space-y-0.5 bg-white border border-default-200 rounded-lg overflow-hidden overflow-y-auto end-0 dark:bg-default-50",
                                            "optionClasses": "py-2 px-3 w-full text-sm text-default-800 cursor-pointer rounded-md hover:bg-default-100 focus:outline-none focus:bg-default-100",
                                            "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><i class=\"ti ti-checks text-lg flex-shrink-0 text-primary\" /></i></span></div>"
                                            }' class="hidden">
                                        <option></option>
                                        <option value="Alexander" selected>Alexander City</option>
                                        <option value="Andalusia">Andalusia</option>
                                        <option value="Anniston">Anniston</option>
                                        <option value="Athens">Athens</option>
                                        <option value="Atmore">Atmore</option>
                                        <option value="Auburn">Auburn</option>
                                        <option value="Bessemer">Bessemer</option>
                                        <option value="Birmingham">Birmingham</option>
                                        <option value="Chickasaw">Chickasaw</option>
                                        <option value="Clanton">Clanton</option>
                                        <option value="Cullman">Cullman</option>
                                        <option value="Decatur">Decatur</option>
                                        <option value="Demopolis">Demopolis</option>
                                        <option value="Dothan">Dothan</option>
                                        <option value="Enterprise">Enterprise</option>
                                        <option value="Eufaula">Eufaula</option>
                                        <option value="Florence">Florence</option>
                                        <option value="Fort Payne">Fort Payne</option>
                                        <option value="Gadsden">Gadsden</option>
                                        <option value="Greenville">Greenville</option>
                                        <option value="Guntersville">Guntersville</option>
                                        <option value="Huntsville">Huntsville</option>
                                        <option value="Jasper">Jasper</option>
                                        <option value="Marion">Marion</option>
                                    </select>

                                    <div class="absolute -inset-y-0 start-auto end-3 flex items-center">
                                        <i class="ti ti-chevron-down shrink text-base/none"></i>
                                    </div>
                                </div><!-- End Select -->
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-default-900 mb-2" for="billing_zip_code">ZIP code</label>
                                <input id="billing_zip_code" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="text" placeholder="35010">
                            </div>

                            <div class="lg:col-span-2">
                                <label class="block text-sm font-medium text-default-900 mb-2" for="billing_e_mail">Email</label>
                                <input id="billing_e_mail" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="email" placeholder="demoexample@mail.com">
                            </div>

                            <div class="lg:col-span-2">
                                <label class="block text-sm font-medium text-default-900 mb-2" for="billing_phone_number">Phone Number</label>
                                <input id="billing_phone_number" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="tel" placeholder="+1-123-XXX-4567">
                            </div>

                            <div>
                                <button class="inline-flex items-center justify-center rounded-lg bg-primary px-6 py-2.5 text-center text-sm font-medium text-white shadow-sm transition-all duration-200 hover:bg-primary-600">Save Changes</button>
                            </div>
                        </div>
                    </div><!-- end grid-col -->

                    <div class="p-6 border rounded-lg border-default-200">
                        <h4 class="text-xl font-medium text-default-900 mb-6">Shipping Address</h4>

                        <div class="grid lg:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-default-900 mb-2" for="shippingFirstName">First Name</label>
                                <input id="shippingFirstName" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="text" placeholder="Enter Your First Name">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-default-900 mb-2" for="shippingLastName">Last Name</label>
                                <input id="shippingLastName" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="text" placeholder="Enter Your Last Name">
                            </div>

                            <div class="lg:col-span-2">
                                <label class="block text-sm font-medium text-default-900 mb-2" for="shipping_company_name">Company Name (Optional)</label>
                                <input id="shipping_company_name" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="text" placeholder="Label">
                            </div>

                            <div class="lg:col-span-2">
                                <label class="block text-sm font-medium text-default-900 mb-2" for="shipping_address">Address</label>
                                <input id="shipping_address" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="text" placeholder="Road No. 47/x, House no. 123/B, Flat No. B4">
                            </div>

                            <div class="lg:col-span-2">
                                <label class="block text-sm font-medium text-default-900 mb-2" for="country">Country/Region</label>
                                <div class="relative">
                                    <select id="all-select-categories" data-hs-select='{
                                            "placeholder": "Select country",
                                            "toggleTag": "<button type=\"button\"></button>",
                                            "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 text-start block w-full rounded-md py-2.5 ps-4 pe-10 text-default-900 text-sm focus:ring-transparent border border-default-200 focus:border-primary before:absolute before:inset-0 before:z-[1]",
                                            "dropdownClasses": "mt-2 z-50 min-w-full max-h-[300px] p-1.5 space-y-0.5 bg-white border border-default-200 rounded-lg overflow-hidden overflow-y-auto end-0 dark:bg-default-50",
                                            "optionClasses": "py-2 px-3 w-full text-sm text-default-800 cursor-pointer rounded-md hover:bg-default-100 focus:outline-none focus:bg-default-100",
                                            "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><i class=\"ti ti-checks text-lg flex-shrink-0 text-primary\" /></i></span></div>"
                                            }' class="hidden">
                                        <option></option>
                                        <option value="United States" selected>United States</option>
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

                                    <div class="absolute -inset-y-0 start-auto end-3 flex items-center">
                                        <i class="ti ti-chevron-down shrink text-base/none"></i>
                                    </div>
                                </div><!-- End Select -->
                            </div>

                            <div class="lg:col-span-2">
                                <label class="block text-sm font-medium text-default-900 mb-2" for="state">State</label>
                                <div class="relative">
                                    <select id="all-select-categories" data-hs-select='{
                                            "placeholder": "Select State",
                                            "toggleTag": "<button type=\"button\"></button>",
                                            "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 text-start block w-full rounded-md py-2.5 ps-4 pe-10 text-default-900 text-sm focus:ring-transparent border border-default-200 focus:border-primary before:absolute before:inset-0 before:z-[1]",
                                            "dropdownClasses": "mt-2 z-50 min-w-full max-h-[300px] p-1.5 space-y-0.5 bg-white border border-default-200 rounded-lg overflow-hidden overflow-y-auto end-0 dark:bg-default-50",
                                            "optionClasses": "py-2 px-3 w-full text-sm text-default-800 cursor-pointer rounded-md hover:bg-default-100 focus:outline-none focus:bg-default-100",
                                            "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><i class=\"ti ti-checks text-lg flex-shrink-0 text-primary\" /></i></span></div>"
                                            }' class="hidden">
                                        <option></option>
                                        <option value="Alabama" selected>Alabama</option>
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

                                    <div class="absolute -inset-y-0 start-auto end-3 flex items-center">
                                        <i class="ti ti-chevron-down shrink text-base/none"></i>
                                    </div>
                                </div><!-- End Select -->
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-default-900 mb-2" for="billing_city">City</label>
                                <div class="relative">
                                    <select id="all-select-categories" data-hs-select='{
                                            "placeholder": "Select City",
                                            "toggleTag": "<button type=\"button\"></button>",
                                            "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 text-start block w-full rounded-md py-2.5 ps-4 pe-10 text-default-900 text-sm focus:ring-transparent border border-default-200 focus:border-primary before:absolute before:inset-0 before:z-[1]",
                                            "dropdownClasses": "mt-2 z-50 min-w-full max-h-[300px] p-1.5 space-y-0.5 bg-white border border-default-200 rounded-lg overflow-hidden overflow-y-auto end-0 dark:bg-default-50",
                                            "optionClasses": "py-2 px-3 w-full text-sm text-default-800 cursor-pointer rounded-md hover:bg-default-100 focus:outline-none focus:bg-default-100",
                                            "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><i class=\"ti ti-checks text-lg flex-shrink-0 text-primary\" /></i></span></div>"
                                            }' class="hidden">
                                        <option></option>
                                        <option value="Alexander" selected>Alexander City</option>
                                        <option value="Andalusia">Andalusia</option>
                                        <option value="Anniston">Anniston</option>
                                        <option value="Athens">Athens</option>
                                        <option value="Atmore">Atmore</option>
                                        <option value="Auburn">Auburn</option>
                                        <option value="Bessemer">Bessemer</option>
                                        <option value="Birmingham">Birmingham</option>
                                        <option value="Chickasaw">Chickasaw</option>
                                        <option value="Clanton">Clanton</option>
                                        <option value="Cullman">Cullman</option>
                                        <option value="Decatur">Decatur</option>
                                        <option value="Demopolis">Demopolis</option>
                                        <option value="Dothan">Dothan</option>
                                        <option value="Enterprise">Enterprise</option>
                                        <option value="Eufaula">Eufaula</option>
                                        <option value="Florence">Florence</option>
                                        <option value="Fort Payne">Fort Payne</option>
                                        <option value="Gadsden">Gadsden</option>
                                        <option value="Greenville">Greenville</option>
                                        <option value="Guntersville">Guntersville</option>
                                        <option value="Huntsville">Huntsville</option>
                                        <option value="Jasper">Jasper</option>
                                        <option value="Marion">Marion</option>
                                    </select>

                                    <div class="absolute -inset-y-0 start-auto end-3 flex items-center">
                                        <i class="ti ti-chevron-down shrink text-base/none"></i>
                                    </div>
                                </div><!-- End Select -->
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-default-900 mb-2" for="shipping_zip_code">ZIP Code</label>
                                <input id="shipping_zip_code" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="text" placeholder="35010">
                            </div>

                            <div class="lg:col-span-2">
                                <label class="block text-sm font-medium text-default-900 mb-2" for="shipping_e_mail">Email</label>
                                <input id="shipping_e_mail" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="email" placeholder="demoexample@mail.com">
                            </div>

                            <div class="lg:col-span-2">
                                <label class="block text-sm font-medium text-default-900 mb-2" for="shipping_phone_number">Phone Number</label>
                                <input id="shipping_phone_number" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="tel" placeholder="+1-123-XXX-4567">
                            </div>

                            <div>
                                <button class="inline-flex items-center justify-center rounded-lg bg-primary px-6 py-2.5 text-center text-sm font-medium text-white shadow-sm transition-all duration-200 hover:bg-primary-600">Save Changes</button>
                            </div>
                        </div>
                    </div><!-- end grid-col -->
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.shared/footer')

@endsection