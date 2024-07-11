@extends('admin')

@section('content')

<div class="p-6 space-y-6">

    @include('layouts.shared/admin-page-title', ['subtitle' => 'Orders', 'title' => 'Orders List'])

    <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-6">
        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="p-5">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-base font-semibold text-default-600">All Orders</p>
                        <h4 class="text-2xl font-semibold text-default-900 mt-4">145K</h4>
                    </div>
                    <span class="shrink h-18 w-18 inline-flex items-center justify-center rounded-lg bg-blue-500/20 text-blue-500">
                        <i class="ti ti-box text-4xl"></i>
                    </span>
                </div>
            </div>
        </div>
        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="p-5">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-base font-semibold text-default-600">Delivered Orders</p>
                        <h4 class="text-2xl font-semibold text-default-900 mt-4">80K</h4>
                    </div>
                    <span class="shrink h-18 w-18 inline-flex items-center justify-center rounded-lg bg-primary/20 text-primary">
                        <i class="ti ti-discount-check-filled text-4xl"></i>
                    </span>
                </div>
            </div>
        </div>
        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="p-5">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-base font-semibold text-default-600">Pending Orders</p>
                        <h4 class="text-2xl font-semibold text-default-900 mt-4">44K</h4>
                    </div>
                    <span class="shrink h-18 w-18 inline-flex items-center justify-center rounded-lg bg-amber-500/20 text-amber-500">
                        <i class="ti ti-hourglass text-4xl"></i>
                    </span>
                </div>
            </div>
        </div>
        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="p-5">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-base font-semibold text-default-600">Cancelled Orders</p>
                        <h4 class="text-2xl font-semibold text-default-900 mt-4">21K</h4>
                    </div>
                    <span class="shrink h-18 w-18 inline-flex items-center justify-center rounded-lg bg-red-500/20 text-red-500">
                        <i class="ti ti-trash text-4xl"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
        <div class="flex flex-wrap items-center justify-between py-4 px-5">
            <div class="flex flex-wrap items-center gap-4">

                <a href="{{ url('admin/resetnobukti') }}" target="_blank"
                    class="py-2.5 px-4 inline-flex rounded-lg text-sm font-medium bg-primary text-white transition-all hover:bg-primary-500">Tambah Data</a>

            </div>
            <div class="relative lg:flex hidden ">
                <input type="search" class="ps-12 pe-4 py-2.5 block w-64 bg-default-50/0 text-default-600 border-default-200 rounded-lg text-sm focus:border-primary focus:ring-primary" placeholder="Search...">
                <span class="absolute start-4 top-2.5">
                    <i class="ti ti-search text-lg/none"></i>
                </span>
            </div>

        </div>
        <div class="border-t border-dashed border-default-200 relative overflow-x-auto">

            <table class="min-w-full">
                <thead class="border-b border-dashed border-default-200">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-start text-base capitalize font-semibold text-default-900 min-w-32">No</th>
                        <th scope="col" class="px-6 py-3 text-start text-base capitalize font-semibold text-default-900 min-w-40">Product</th>
                        <th scope="col" class="px-6 py-3 text-start text-base capitalize font-semibold text-default-900 min-w-32">No Bukti</th>
                        <th scope="col" class="px-6 py-3 text-start text-base capitalize font-semibold text-default-900 min-w-40">Pemasok</th>
                        <th scope="col" class="px-6 py-3 text-start text-base capitalize font-semibold text-default-900 min-w-40">Date & Time</th>
                        <th scope="col" class="px-6 py-3 text-start text-base capitalize font-semibold text-default-900 min-w-32">Keterangan</th>
                        <th scope="col" class="px-6 py-3 text-start text-base capitalize font-semibold text-default-900 min-w-40">Amount</th>
                        {{-- <th scope="col" class="px-6 py-3 text-start text-base capitalize font-semibold text-default-900 min-w-32">Status</th> --}}

                        <th scope="col" class="px-6 py-3 text-start text-base capitalize font-semibold text-default-900 min-w-32">Action</th>

                    </tr>
                </thead>
                <tbody class="divide-y divide-dashed divide-default-200">
                    @foreach($dataBeli as $item)
                    <tr>
                        <td class="px-6 py-3 text-default-900 font-medium whitespace-nowrap"><b>{{ $loop->iteration }}</b></td>
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
                                <h6 class="text-sm font-semibold text-default-700">{{ $item->namabarang }}</h6>
                            </spam>
                        </td>
                        <td class="px-6 py-3 text-default-900 font-medium whitespace-nowrap"><b>{{ $item->nobukti }}</b></td>
                        <td class="px-6 py-3 whitespace-nowrap">
                            <h6 class="text-sm font-semibold text-default-700">{{ $item->namapemasok }}</h6>
                        </td>
                        {{-- <td class="px-6 py-3 whitespace-nowrap">
                            <h6 class="text-sm font-semibold text-default-700">{{ $item->namabarang }}</h6>
                        </td> --}}
                        <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">
                            <span class="block mb-0.5"> {{ (new DateTime($item->tgl))->format('d M Y (h:i a)') }}</span>
                        </td>
                        <td class="px-6 py-3 text-primary font-semibold whitespace-nowrap">{{ $item->ket }}</td>
                        {{-- <td class="px-6 py-3 text-primary font-semibold whitespace-nowrap">Rp. {{ number_format($item->harga,0, ',', '.') }}</td> --}}
                        <td class="whitespace-nowrap py-3 px-3 text-center text-sm font-medium">
                            <div class="flex items-center justify-center gap-2">
                                <a href="" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-eye text-lg"></i>
                                </a>
                                <button type="button" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-edit-circle text-base"></i>
                                </button>
                                <button class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-trash text-lg"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="flex items-center justify-between py-3 px-6 border-t border-dashed border-default-200">
            <h6 class="text-default-600">Showing 1 to 5 of 12</h6>

            <nav class="flex items-center gap-1">
                <a class="inline-flex items-center justify-center h-8 w-8 border border-default-200 rounded-md text-default-950 transition-all duration-200 hover:bg-primary hover:text-white hover:border-primary" href="#">
                    <i class="ti ti-chevron-left text-base"></i>
                </a>
                <a class="inline-flex items-center justify-center h-8 w-8 border rounded-md transition-all duration-200 bg-primary text-white border-primary" href="#" aria-current="page">1</a>
                <a class="inline-flex items-center justify-center h-8 w-8 border border-default-200 rounded-md text-default-950 transition-all duration-200 hover:bg-primary hover:text-white hover:border-primary" href="#">2</a>
                <a class="inline-flex items-center justify-center h-8 w-8 border border-default-200 rounded-md text-default-950 transition-all duration-200 hover:bg-primary hover:text-white hover:border-primary" href="#">...</a>
                <a class="inline-flex items-center justify-center h-8 w-8 border border-default-200 rounded-md text-default-950 transition-all duration-200 hover:bg-primary hover:text-white hover:border-primary" href="#">12</a>
                <a class="inline-flex items-center justify-center h-8 w-8 border border-default-200 rounded-md text-default-950 transition-all duration-200 hover:bg-primary hover:text-white hover:border-primary" href="#">
                    <i class="ti ti-chevron-right text-base"></i>
                </a>
            </nav>
        </div>
    </div>
</div>

   <!-- Modal -->
   <div id="modal" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center hidden">
    <div class="relative bg-white p-4 rounded-lg max-w-3xl">
        <button onclick="closeModal()" class="absolute top-2 right-2 text-gray-600 hover:text-gray-900 text-2xl">
            &times;
        </button>
        <img id="modal-image" src="" alt="Gambar Besar" class="w-full h-full object-contain">
    </div>
</div>




<!-- Tambahkan script JavaScript -->
<script>


    function openModal(imageSrc) {
        document.getElementById('modal-image').src = imageSrc;
        document.getElementById('modal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('modal').classList.add('hidden');
    }


</script>

@endsection
