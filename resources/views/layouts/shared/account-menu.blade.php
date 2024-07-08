<div class="hidden lg:block">
  <div class="rounded-lg bg-default-50 p-4 dark:bg-default-100">
    <div class="py-8 text-center">
      <img src="/images/avatars/1.png" alt="dashboard" class="mx-auto h-28 w-28 rounded-full" />
      <h3 class="mt-2 text-xl font-medium text-default-900">{{ auth()->user()->name }}</h3>
      <p class="mt-1 text-base text-default-600">Los Angeles</p>
    </div>

    <div class="hs-accordion-group">
      <ul class="admin-menu flex w-full flex-col gap-1.5">
        <li class="menu-item">
          <a class="flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100" href="">
            <i class="ti ti-smart-home text-xl"></i>
            Personal Info
          </a>
        </li>

        <li class="menu-item hs-accordion">
          <a href="javascript:void(0)" class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100">
            <i class="ti ti-box text-xl"></i>
            My Orders
            <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
          </a>

          <div id="menuOrder" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
            <ul class="mt-2 flex flex-col gap-2">
              <li class="menu-item">
                <a href="{{ url('account/order-list/') }}" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Order List
                </a>
              </li>
              <li class="menu-item">
                <a href="" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Order Detail
                </a>
              </li>
            </ul>
          </div>
        </li>

        <li class="menu-item">
          <a class="flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100" href="">
            <i class="ti ti-map-pin text-xl"></i>
            My Adress
          </a>
        </li>

        <li class="menu-item">
          <a class="flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100" href="">
            <i class="ti ti-wallet text-xl"></i>
            Wallet
          </a>
        </li>

        <li class="menu-item">
          <a class="flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100" href="">
            <i class="ti ti-settings text-xl"></i>
            Settings
          </a>
        </li>

        <li class="menu-item">
          <a class="flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100" href="">
            <i class="ti ti-user text-xl"></i>
            Logout
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
