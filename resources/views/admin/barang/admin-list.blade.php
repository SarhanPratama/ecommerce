@extends('admin')

@section('title', 'Admin-List')

@section('content')

<div class="p-6 space-y-6">

    @include('layouts.shared/admin-page-title', ['subtitle' => 'Product', 'title' => 'Product List'])

    <div class="grid xl:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-6">
        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="p-5">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-base font-semibold text-default-600">All Products</p>
                        <h4 class="text-2xl font-semibold text-default-900 mt-4">{{ $totalProducts }}</h4>
                    </div>
                    <span
                        class="shrink h-18 w-18 inline-flex items-center justify-center rounded-lg bg-blue-500/20 text-blue-500">
                        <i class="ti ti-box text-4xl"></i>
                    </span>
                </div>
            </div>
        </div>
        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="p-5">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-base font-semibold text-default-600">New Products</p>
                        <h4 class="text-2xl font-semibold text-default-900 mt-4">{{ $newProduct }}</h4>
                    </div>
                    <span
                        class="shrink h-18 w-18 inline-flex items-center justify-center rounded-lg bg-primary/20 text-primary">
                        <i class="ti ti-discount-check-filled text-4xl"></i>
                    </span>
                </div>
            </div>
        </div>
        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="p-5">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-base font-semibold text-default-600">Upcoming Products</p>
                        <h4 class="text-2xl font-semibold text-default-900 mt-4">44K</h4>
                    </div>
                    <span
                        class="shrink h-18 w-18 inline-flex items-center justify-center rounded-lg bg-amber-500/20 text-amber-500">
                        <i class="ti ti-hourglass text-4xl"></i>
                    </span>
                </div>
            </div>
        </div>
        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="p-5">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-base font-semibold text-default-600">Removed Products</p>
                        {{-- <h4 class="text-2xl font-semibold text-default-900 mt-4">35K</h4> --}}
                    </div>
                    <span
                        class="shrink h-18 w-18 inline-flex items-center justify-center rounded-lg bg-red-500/20 text-red-500">
                        <i class="ti ti-trash text-4xl"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>





    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
        <div class="flex flex-wrap items-center justify-between py-4 px-5">

            <form action="{{ route('product.index') }}" method="GET">
                <div class="relative">
                    <select name="kategori" onchange="this.form.submit()"
                        class="block w-40 py-2.5 px-4 bg-default-50/0 text-default-600 border-default-200 rounded-lg text-sm focus:border-primary focus:ring-primary">
                        <option value="">All Categories</option>
                        @foreach($kategori as $kat)
                        <option value="{{ $kat->id }}" {{ request('kategori')==$kat->id ? 'selected' : '' }}>
                            {{ $kat->nama }}
                        </option>
                        @endforeach
                    </select>
                </div>
            </form>
            <div class="relative lg:flex hidden">
                <form action="{{ route('product.index') }}" method="GET">
                    <input type="search" name="search" value="{{ request('search') }}"
                        class="ps-12 pe-4 py-2.5 block w-64 bg-default-50/0 text-default-600 border-default-200 rounded-lg text-sm focus:border-primary focus:ring-primary"
                        placeholder="Search...">
                    <span class="absolute start-4 top-2.5">
                        <i class="ti ti-search text-lg/none"></i>
                    </span>

                </form>
            </div>
            <a href="{{ url('admin/product/create') }}"
                class="relative overflow-hidden py-2.5 pe-6 ps-12 inline-flex items-center justify-center font-semibold align-middle duration-500 text-sm text-center bg-primary-600 text-white rounded-full hover:bg-primary-700">
                <span
                    class="absolute top-1/2 -translate-y-1/2 start-0 h-full w-10 rounded-full inline-flex items-center justify-center bg-white/20 text-white me-3"><i
                        class="ti ti-circle-plus text-xl"></i></span>
                Add Product
            </a>
        </div>
        <div class="border-t border-dashed border-default-200 relative overflow-x-auto">
            <table class="min-w-full">
                <thead class="border-b border-dashed border-default-200">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-start text-base capitalize font-semibold text-default-900 min-w-15">
                            No</th>
                        {{-- <th scope="col"
                            class="px-6 py-3 text-start text-base capitalize font-semibold text-default-900 min-w-30">
                            Kode</th> --}}
                        <th scope="col"
                            class="px-6 py-3 text-start text-base capitalize font-semibold text-default-900 min-w-32">
                            Product</th>
                        <th scope="col"
                            class="px-6 py-3 text-start text-base capitalize font-semibold text-default-900 min-w-32">
                            category</th>
                        <th scope="col"
                            class="px-6 py-3 text-start text-base capitalize font-semibold text-default-900 min-w-32">
                            Harga beli</th>
                        <th scope="col"
                            class="px-6 py-3 text-start text-base capitalize font-semibold text-default-900 min-w-32 whitespace-nowrap">
                            harga Jual</th>
                        <th scope="col"
                            class="px-6 py-3 text-start text-base capitalize font-semibold text-default-900 min-w-32">
                            Quantity</th>
                        {{-- <th scope="col"
                            class="px-6 py-3 text-start text-base capitalize font-semibold text-default-900 min-w-32">
                            Unit</th> --}}
                        <th scope="col"
                            class="px-6 py-3 text-start text-base capitalize font-semibold text-default-900 min-w-32">
                            Status</th>
                        <th scope="col"
                            class="px-3 py-3 text-center text-base capitalize font-semibold text-default-900 min-w-32">
                            Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-dashed divide-default-200">
                    @foreach ($barang as $item)
                    <tr>
                        <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">{{ ($page - 1) *
                            $barang->perPage() + $loop->iteration }}</td>
                        {{-- <td class="px-6 py-3 text-default-900 font-medium whitespace-nowrap">{{ $item->kode }}</td>
                        --}}
                        <td class="px-6 py-3 text-default-900 font-semibold whitespace-nowrap">
                            <spam class="flex items-center gap-2">
                                <span class="h-10 w-10 inline-flex items-center justify-center rounded-full">
                                    @if ($item->foto)
                                    @php
                                    $gambarPaths = explode(',', $item->foto);
                                    $gambar = $gambarPaths[0];
                                    @endphp
                                    <img src="{{ asset('storage/' . $gambar) }}" alt="Foto Barang">
                                    @endif
                                </span>
                                <h6 class="text-sm font-semibold text-default-700">{{ $item->nama }}</h6>
                            </spam>
                        </td>
                        <td class="px-6 py-3 text-default-900 font-medium whitespace-nowrap">{{ $item->kategori }}
                        </td>
                        <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">Rp.
                            {{number_format($item->hb, 0, ',', '.')}}</td>
                        <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">Rp. {{
                            number_format($item->hj, 0, ',', '.') }}</td>
                        <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">{{ $item->sawal }}
                            <span class="text-primary font-semibold">{{
                                $item->satuan}}</span>
                        </td>
                        {{-- <td class="px-6 py-3 text-primary font-semibold whitespace-nowrap">{{ $item->satuan->nama}}
                        </td> --}}
                        {{-- <td class="px-6 py-3 text-primary font-medium whitespace-nowrap">
                            @if($item->status == 1)
                            <span class="px-3 py-1 text-xs font-medium rounded-md bg-primary/20 text-primary">
                                Publish
                            </span>
                            @else
                            <span class="px-3 py-1 text-xs font-medium rounded-md bg-yellow-500/20 text-yellow-500">
                                Pending
                            </span>
                            @endif
                        </td> --}}
                        <td class="whitespace-nowrap py-3 px-3 text-center text-sm font-medium">
                            <div class="flex items-center justify-center gap-2">
                                <a type="button" href="{{ url('admin/product/'.$item->id) }}"
                                    class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-eye text-lg"></i>
                                </a>
                                <a type="button" href="{{ url('admin/product/'.$item->id.'/edit') }}"
                                    class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-edit-circle text-base"></i>
                                </a>

                                <a href="{{ url('product/destroy', $item->id) }}"
                                    class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white"
                                    data-confirm-delete="true">
                                    <i class="ti ti-trash text-lg"></i>
                                </a>

                            </div>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
    <div class="">
        {{ $barang->onEachSide(3)->links() }}
    </div>
</div>

@endsection
