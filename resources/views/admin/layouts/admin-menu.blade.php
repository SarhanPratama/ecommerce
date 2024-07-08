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

      <li class="menu-item hs-accordion">
        <a href="javascript:void(0)"
          class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100">
          <i class="ti ti-list-check text-xl"></i>
          Order
          <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
        </a>

        <div id="menuOrder"
          class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
          <ul class="mt-2 flex flex-col gap-2">
            <li class="menu-item">
              <a href="{{ url('admin/order') }}"
                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Orders List
              </a>
            </li>
            <li class="menu-item">
              <a href="{{ url('admin/category/create') }}"
                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Order Details
              </a>
            </li>
          </ul>
        </div>
      </li>


      <!-- <li class="menu-item hs-accordion">
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
              <a href=""
                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Invoices List
              </a>
            </li>
            <li class="menu-item">
              <a href=""
                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Invoice Details
              </a>
            </li>
            <li class="menu-item">
              <a href=""
                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                Add Invoice
              </a>
            </li>
          </ul>
        </div>
      </li> -->


    </ul>
  </div>
</div>
<!-- End Sidebar -->
