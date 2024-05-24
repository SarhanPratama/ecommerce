<section class="hidden bg-default-100 lg:block">
  <div class="container mt-20">
    <div class="relative flex py-4">
      <ol aria-label="Breadcrumb" class="flex min-w-0 items-center gap-2 whitespace-nowrap">
        <li class="text-sm/loose">
          <a class="flex items-center gap-2 align-middle text-base leading-none text-default-800 transition-all hover:text-primary" href="#">
            <i class="ti ti-brand-google-home text-lg"></i>
            Home
            <i class="ti ti-chevron-right text-base"></i>
          </a>
        </li>
        <li class="text-sm/loose">
          <a href="{{ url('product') }}" class="flex items-center gap-2 align-middle text-base leading-none text-default-800 transition-all hover:text-primary">
            {{ $subtitle }}
            <i class="ti ti-chevron-right text-base"></i>
          </a>
        </li>
        <li aria-current="page" class="text-base/loose font-medium leading-none text-primary hover:text-primary">
          {{ $title }}
        </li>
      </ol>
    </div>
  </div>
</section>