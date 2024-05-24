<!-- Start Sidebar -->
<div id="application-sidebar"
  class="hs-overlay fixed inset-y-0 start-0 z-60 hidden w-64 -translate-x-full transform overflow-y-auto border-e border-default-200 bg-white transition-all duration-300 hs-overlay-open:translate-x-0 dark:bg-default-50 lg:bottom-0 lg:end-auto lg:z-30 lg:block lg:translate-x-0 rtl:translate-x-full rtl:hs-overlay-open:translate-x-0 rtl:lg:translate-x-0 print:hidden">
  <div class="sticky top-0 flex h-18 items-center justify-start px-6">
    <a href="">
      <img src="/images/logo-dark.png" alt="logo" class="flex h-10 dark:hidden" />
      <img src="/images/logo.png" alt="logo" class="hidden h-10 dark:flex" />
    </a>
  </div>

  <div class="hs-accordion-group h-[calc(100%-72px)] p-4" data-simplebar>
    <ul class="admin-menu flex w-full flex-col gap-1.5">
      <li class="menu-item">
        <a class="flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100"
          href="{{ url('admin/dashboard') }}">
          <i class="ti ti-smart-home text-xl"></i>
          Dashboard
          <span
            class="ms-auto inline-block rounded-full bg-primary/10 px-2.5 py-0.5 text-xs font-medium text-primary">9+</span>
        </a>
      </li>

      {{-- <li class="menu-item">
        <a class="flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100"
          href="{{ route('second', ['admin', 'chat']) }}">
          <i class="ti ti-brand-hipchat text-xl"></i>
          Chat
        </a>
      </li>

      <li class="menu-item">
        <a class="flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100"
          href="{{ route('second', ['admin', 'calendar']) }}">
          <i class="ti ti-calendar text-xl"></i>
          Calender
        </a>
      </li> --}}

      <li class="px-6 py-2 text-sm font-medium text-default-600">Manage</li>

      {{-- <li class="menu-item">
        <a class="flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100"
          href="{{ route('second', ['admin', 'wallet']) }}">
          <i class="ti ti-wallet text-xl"></i>
          Wallet
          <span
            class="ms-auto inline-block rounded-full bg-red-500/10 px-2.5 py-0.5 text-xs font-medium text-red-500">4+</span>
        </a>
      </li>

      <li class="menu-item hs-accordion">
        <a href="javascript:void(0)"
          class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100">
          <i class="ti ti-ticket text-xl"></i>
          Coupons
          <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
        </a>

        <div id="menuCoupons"
          class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
          <ul class="mt-2 flex flex-col gap-2">
            <li class="menu-item">
              <a href="{{ route('second', ['coupons', 'list']) }}"
                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Coupons List
              </a>
            </li>
            <li class="menu-item">
              <a href="{{ route('second', ['coupons', 'add']) }}"
                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Add Coupon
              </a>
            </li>
            <li class="menu-item">
              <a href="{{ route('second', ['coupons', 'edit']) }}"
                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Edit Coupon
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="menu-item hs-accordion">
        <a href="javascript:void(0)"
          class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100">
          <i class="ti ti-list-check text-xl"></i>
          Order
          <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
        </a>

        <div id="menuOrder" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
          <ul class="mt-2 flex flex-col gap-2">
            <li class="menu-item">
              <a href="{{ route('second', ['order', 'list']) }}"
                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Orders List
              </a>
            </li>
            <li class="menu-item">
              <a href="{{ route('second',['order', 'details']) }}"
                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Order Details
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="menu-item hs-accordion">
        <a href="javascript:void(0)"
          class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100">
          <i class="ti ti-users text-xl"></i>
          Customers
          <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
        </a>

        <div id="menuCustomer"
          class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
          <ul class="mt-2 flex flex-col gap-2">
            <li class="menu-item">
              <a href="{{ route('second', ['customers', 'list']) }}"
                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Customers List
              </a>
            </li>
            <li class="menu-item">
              <a href="{{ route('second', ['customers', 'detail']) }}"
                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Customer Details
              </a>
            </li>
            <li class="menu-item">
              <a href="{{ route('second', ['customers', 'add']) }}"
                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Add Customer
              </a>
            </li>
            <li class="menu-item">
              <a href="{{ route('second', ['customers', 'edit']) }}"
                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Edit Customer
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="menu-item hs-accordion">
        <a href="javascript:void(0)"
          class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100">
          <i class="ti ti-building-store text-xl"></i>
          Shops
          <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
        </a>

        <div id="menuShops" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
          <ul class="mt-2 flex flex-col gap-2">
            <li class="menu-item">
              <a href="{{ route('second' , ['shops', 'list']) }}"
                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Shops List
              </a>
            </li>
            <li class="menu-item">
              <a href="{{ route('second', ['shops', 'details']) }}"
                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Shop Details
              </a>
            </li>
            <li class="menu-item">
              <a href="{{ route('second', ['shops', 'add']) }}"
                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Add Shop
              </a>
            </li>
            <li class="menu-item">
              <a href="{{ route('second', ['shops', 'edit']) }}"
                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Edit Shop
              </a>
            </li>
          </ul>
        </div>
      </li> --}}

      <li class="menu-item hs-accordion">
        <a href="javascript:void(0)"
          class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100">
          <i class="ti ti-cheese text-xl"></i>
          Product
          <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
        </a>

        <div id="menuProduct"
          class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
          <ul class="mt-2 flex flex-col gap-2">
            <li class="menu-item">
              <a href="{{ url('admin/product') }}"
                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Products List
              </a>
            </li>
            <li class="menu-item">
              <a href="{{ url('admin/product/create') }}"
                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Add Product
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="menu-item hs-accordion">
        <a href="javascript:void(0)"
          class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100">
          <i class="ti ti-category text-xl"></i>
          Category
          <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
        </a>

        <div id="menuSellers"
          class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
          <ul class="mt-2 flex flex-col gap-2">
            <li class="menu-item">
              <a href="{{ url('admin/category') }}"
                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Categoty List
              </a>
            </li>
            <li class="menu-item">
              <a href="{{ url('admin/category/create') }}"
                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Add Categoty
              </a>
            </li>
          </ul>
        </div>
      </li>

      {{-- <li class="menu-item hs-accordion">
        <a href="javascript:void(0)"
          class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100">
          <i class="ti ti-shopping-bag text-xl"></i>
          Sellers
          <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
        </a>

        <div id="menuSellers"
          class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
          <ul class="mt-2 flex flex-col gap-2">
            <li class="menu-item">
              <a href="{{ route('second', ['sellers', 'list']) }}"
                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Sellers List
              </a>
            </li>
            <li class="menu-item">
              <a href="{{ route('second', ['sellers', 'detail']) }}"
                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Seller Details
              </a>
            </li>
            <li class="menu-item">
              <a href="{{ route('second', ['sellers', 'add']) }}"
                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Add Seller
              </a>
            </li>
            <li class="menu-item">
              <a href="{{ route('second', ['sellers', 'edit']) }}"
                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Edit Seller
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="menu-item hs-accordion">
        <a href="javascript:void(0)"
          class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100">
          <i class="ti ti-file-invoice text-xl"></i>
          Invoice
          <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
        </a>

        <div id="menuInvoice"
          class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
          <ul class="mt-2 flex flex-col gap-2">
            <li class="menu-item">
              <a href="{{ route('second', ['invoice', 'list']) }}"
                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Invoices List
              </a>
            </li>
            <li class="menu-item">
              <a href="{{ route('second' ,['invoice', 'detail']) }}"
                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Invoice Details
              </a>
            </li>
            <li class="menu-item">
              <a href="{{ route('second', ['invoice', 'add']) }}"
                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Add Invoice
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="menu-item hs-accordion">
        <a href="javascript:void(0)"
          class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100">
          <i class="ti ti-license text-xl"></i>
          Blog
          <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
        </a>

        <div id="menuBlog" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
          <ul class="mt-2 flex flex-col gap-2">
            <li class="menu-item">
              <a href="{{ route('second', ['blog', 'list']) }}"
                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Blogs List
              </a>
            </li>
            <li class="menu-item">
              <a href="{{ route('second' ,['blog', 'detail']) }}"
                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Blog Details
              </a>
            </li>
            <li class="menu-item">
              <a href="{{ route('second', ['blog', 'add']) }}"
                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Add Blog
              </a>
            </li>
            <li class="menu-item">
              <a href="{{ route('second', ['blog', 'edit']) }}"
                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Edit Blog
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="px-6 py-2 text-sm font-medium text-default-600">Pages</li>

      <li class="menu-item hs-accordion">
        <a href="javascript:void(0)"
          class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 hover:bg-default-100">
          <i class="ti ti-notebook text-xl"></i>
          Extra Pages
          <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
        </a>

        <div id="menuPages" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
          <ul class="mt-2 space-y-2">
            <li class="menu-item">
              <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                href="{{ route('second', ['pages', 'starter']) }}">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Starter
              </a>
            </li>
            <li class="menu-item">
              <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                href="{{ route('second', ['pages', 'gallery']) }}">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Gallery
              </a>
            </li>
            <li class="menu-item">
              <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                href="{{ route('second', ['pages', 'pricing'  ]) }}">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Pricing
              </a>
            </li>
            <li class="menu-item">
              <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                href="{{ route('second', ['pages', 'timeline']) }}">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Timeline
              </a>
            </li>
            <li class="menu-item">
              <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                href="{{ route('second', ['pages', 'maintenance']) }}">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Maintenance
              </a>
            </li>
            <li class="menu-item">
              <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                href="{{ route('second', ['pages', 'coming-soon']) }}">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Coming Soon
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="menu-item hs-accordion">
        <a href="javascript:void(0)"
          class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 hover:bg-default-100">
          <i class="ti ti-login-2 text-xl"></i>
          Authentication
          <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
        </a>

        <div class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
          <ul class="mt-2 space-y-2">
            <li class="menu-item">
              <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                href="{{ route('second', ['auth', 'login']) }}">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Login
              </a>
            </li>
            <li class="menu-item">
              <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                href="{{ route('second', ['auth', 'register']) }}">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Register
              </a>
            </li>
            <li class="menu-item">
              <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                href="{{ route('second', ['auth', 'logout']) }}">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Logout
              </a>
            </li>
            <li class="menu-item">
              <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                href="{{ route('second', ['auth', 'recoverpw']) }}">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Password Forgot
              </a>
            </li>
            <li class="menu-item">
              <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                href="{{ route('second', ['auth', 'reset-password']) }}">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Password Reset
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="px-6 py-2 text-sm font-medium text-default-600">Components</li>

      <li class="menu-item hs-accordion">
        <a href="javascript:void(0)"
          class="hs-accordion-toggle fill-hover flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 hover:bg-default-100">
          <i class="ti ti-briefcase text-xl"></i>
          Base UI
          <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
        </a>

        <div id="menuBaseUI"
          class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
          <ul class="mt-2 space-y-2">
            <li class="menu-item">
              <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                href="{{ route('second',['ui', 'accordion']) }}">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Accordion
              </a>
            </li>
            <li class="menu-item">
              <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                href="{{ route('second', ['ui', 'alert']) }}">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Alert
              </a>
            </li>
            <li class="menu-item">
              <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                href="{{ route('second', ['ui', 'avatars']) }}">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Avatars
              </a>
            </li>
            <li class="menu-item">
              <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                href="{{ route('second', ['ui', 'buttons']) }}">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Buttons
              </a>
            </li>
            <li class="menu-item">
              <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                href="{{ route('second', ['ui', 'badges']) }}">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Badges
              </a>
            </li>
            <li class="menu-item">
              <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                href="{{ route('second', ['ui', 'breadcrumbs']) }}">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Breadcrumbs
              </a>
            </li>
            <li class="menu-item">
              <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                href="{{ route('second', ['ui', 'cards']) }}">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Cards
              </a>
            </li>
            <li class="menu-item">
              <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                href="{{ route('second', ['ui', 'collapse']) }}">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Collapse
              </a>
            </li>
            <li class="menu-item">
              <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                href="{{ route('second', ['ui', 'dropdowns']) }}">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Dropdowns
              </a>
            </li>
            <li class="menu-item">
              <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                href="{{ route('second', ['ui', 'progress']) }}">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Progress
              </a>
            </li>
            <li class="menu-item">
              <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                href="{{ route('second', ['ui', 'spinners']) }}">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Spinners
              </a>
            </li>
            <li class="menu-item">
              <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                href="{{ route('second', ['ui', 'list-group']) }}">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                List Group
              </a>
            </li>
            <li class="menu-item">
              <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                href="{{ route('second', ['ui', 'ratio']) }}">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Ratio
              </a>
            </li>
            <li class="menu-item">
              <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                href="{{ route('second', ['ui', 'tabs']) }}">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Tabs
              </a>
            </li>
            <li class="menu-item">
              <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                href="{{ route('second', ['ui', 'modals']) }}">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Modals
              </a>
            </li>
            <li class="menu-item">
              <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                href="{{ route('second', ['ui', 'offcanvas']) }}">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Offcanvas
              </a>
            </li>
            <li class="menu-item">
              <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                href="{{ route('second', ['ui', 'popovers']) }}">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Popovers
              </a>
            </li>
            <li class="menu-item">
              <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                href="{{ route('second', ['ui', 'tooltips']) }}">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Tooltips
              </a>
            </li>
            <li class="menu-item">
              <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                href="{{ route('second', ['ui', 'typography']) }}">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Typography
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="menu-item hs-accordion">
        <a href="javascript:void(0)"
          class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 hover:bg-default-100">
          <i class="ti ti-layout-2 text-xl"></i>
          Advance UI
          <span
            class="ms-auto inline-block rounded-full bg-cyan-5  00/10 px-2.5 py-0.5 text-xs font-medium text-cyan-500">Hot</span>
        </a>

        <div id="menuAdvanceUI"
          class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
          <ul class="mt-2 space-y-2">
            <li class="menu-item">
              <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                href="{{ route('second', ['advanced', 'swiper']) }}">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Swiper
              </a>
            </li>
            <li class="menu-item">
              <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                href="{{ route('second', ['advanced', 'sweetalert']) }}">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Sweet Alert
              </a>
            </li>
            <li class="menu-item">
              <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                href="{{ route('second', ['advanced', 'rating']) }}">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Ratings
              </a>
            </li>
            <li class="menu-item">
              <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                href="{{ route('second', ['advanced', 'tour']) }}">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Tour
              </a>
            </li>
            <li class="menu-item">
              <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                href="{{ route('second', ['advanced', 'lightbox']) }}">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                GlightBox
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="menu-item hs-accordion">
        <a href="javascript:void(0)"
          class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 hover:bg-default-100">
          <i class="ti ti-news text-xl"></i>
          Form
          <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
        </a>

        <div id="menuForm" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
          <ul class="mt-2 space-y-2">
            <li class="menu-item">
              <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                href="{{ route('second', ['forms', 'elements']) }}">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Basic Elements
              </a>
            </li>
            <li class="menu-item">
              <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                href="{{ route('second', ['forms', 'select']) }}">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Select
              </a>
            </li>
            <li class="menu-item">
              <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                href="{{ route('second', ['forms', 'range']) }}">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Range
              </a>
            </li>
            <li class="menu-item">
              <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                href="{{ route('second', ['forms', 'editor']) }}">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Editor
              </a>
            </li>
            <li class="menu-item">
              <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                href="{{ route('second', ['forms', 'upload']) }}">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Upload
              </a>
            </li>
            <li class="menu-item">
              <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                href="{{ route('second', ['forms', 'picker']) }}">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Picker
              </a>
            </li>
            <li class="menu-item">
              <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                href="{{ route('second', ['forms', 'validation']) }}">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Validation
              </a>
            </li>
            <li class="menu-item">
              <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                href="{{ route('second', ['forms', 'layout']) }}">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Layout
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="menu-item hs-accordion">
        <a href="javascript:void(0)"
          class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 hover:bg-default-100">
          <i class="ti ti-table text-xl"></i>
          Table
          <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
        </a>

        <div id="menuTable" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
          <ul class="mt-2 space-y-2">
            <li class="menu-item">
              <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                href="{{ route('second', ['ui', 'table-basic']) }}">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Basic Table
              </a>
            </li>
            <li class="menu-item">
              <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                href="{{ route('second', ['ui', 'table-datatable']) }}">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Data Table
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="menu-item hs-accordion">
        <a href="javascript:void(0)"
          class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 hover:bg-default-100">
          <i class="ti ti-icons text-xl"></i>
          Icon
          <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
        </a>

        <div id="menuIcon" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
          <ul class="mt-2 space-y-2">
            <li class="menu-item">
              <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                href="{{ route('second', ['ui', 'icons-lucide']) }}">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Lucide
              </a>
            </li>
            <li class="menu-item">
              <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                href="{{ route('second', ['ui', 'icons-tabler']) }}">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Tabler
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="menu-item">
        <a href="{{ route('second', ['ui', 'maps-vector']) }}"
          class="flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 hover:bg-default-100">
          <i class="ti ti-map text-xl"></i>
          Vector Maps
        </a>
      </li>

      <li class="menu-item">
        <a class="flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100"
          href="{{ route('second', ['ui', 'chart-apex']) }}">
          <i class="ti ti-chart-histogram text-xl"></i>
          Apex Charts
        </a>
      </li> --}}
    </ul>

    {{-- <div class="mt-2">
      <div
        class="-mb-4 flex flex-col items-center justify-center rounded-t-full border border-b-0 border-dashed border-primary-500/40 bg-primary-500/20 bg-cover bg-no-repeat px-4 pb-4 pt-10 text-center text-sm text-default-700"
        href="javascript:void(0)">
        <div
          class="relative inline-flex h-16 w-16 items-center justify-center rounded-full border border-dashed border-primary bg-primary/20">
          <img src="/images/logo-sm.png" alt=""
            class="absolute start-1/2 top-1/2 h-8 w-8 -translate-x-1/2 -translate-y-1/2" />
        </div>
        <p class="my-4 text-sm font-semibold text-primary-700">
          🔥 Upgrade Your Plan. Find Out here
        </p>
        <a href="#" target="_blank"
          class="inline-flex items-center justify-center gap-2 rounded-full bg-primary px-4 py-2 text-sm font-medium text-white transition-all hover:bg-primary-600"><i
            class="ti ti-brand-cashapp text-xl"></i> Upgrade
        </a>
      </div>
    </div> --}}
  </div>
</div>
<!-- End Sidebar -->