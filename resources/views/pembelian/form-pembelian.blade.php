@extends('admin')

@section('content')

<div class="p-6 space-y-6">

    @include('layouts.shared/admin-page-title', ['subtitle' => 'Orders', 'title' => 'Orders Form'])

    <div class="">
        <div class="p-5 border-t border-dashed border-default-200">
            <form method="POST" action="{{ url('admin/pembelian') }}" enctype="multipart/form-data" class="flex justify-around gap-6">
                @csrf
                {{-- <div class=""> --}}

                    <div class="w-1/2 ">
                        <div class="flex justify-between gap-6">
                        <div class=" mb-6 w-1/2">
                            <input
                                class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50"
                                type="text" value="{{ $nobukti }}" placeholder="No Bukti" name="nobukti">
                        </div>

                        <div class="mb-6 w-1/2">
                            <input
                                class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50"
                                type="date" name="tgl">
                        </div>
                        </div>
                        <div class="mb-6">
                            <select name="idpemasok" id="all-select-categories" data-hs-select='{
                            "placeholder": "Select Type",
                            "toggleTag": "<button type=\"button\"></button>",
                            "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 form-input block w-full rounded-md py-2.5 ps-4 pe-10 text-default-800 text-start text-sm focus:ring-transparent border-default-200 overflow-hidden focus:border-primary dark:bg-default-50 before:absolute before:inset-0 before:z-[1]",
                            }'
                                class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50">
                                <option value="" selected disabled>Pemasok</option>
                                @foreach ($dataPemasok as $item)
                                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <input
                                class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50"
                                type="text" placeholder="Keterangan" name="ket">
                        </div>
                    </div>


                    <div class="flex justify-center flex-wrap items-end gap-4">
                        <button
                            class="py-2.5 px-4 inline-flex rounded-lg text-sm font-medium bg-primary text-white transition-all hover:bg-primary-500">Save</button>
                    </div>

                        <div class="w-1/2">


                                <div class="mb-6">
                                    <select name="idbarang" id="idbarang" data-hs-select='{
                                        "placeholder": "Select Type",
                                        "toggleTag": "<button type=\"button\"></button>",
                                        "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 form-input block w-full rounded-md py-2.5 ps-4 pe-10 text-default-800 text-start text-sm focus:ring-transparent border-default-200 overflow-hidden focus:border-primary dark:bg-default-50 before:absolute before:inset-0 before:z-[1]",
                                    }'
                                        class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50">
                                        <option value="" selected disabled>Nama Barang</option>
                                        @foreach ($dataBarang as $item)
                                            <option value="{{ $item->id }}" data-harga="{{ $item->hb }}">{{ $item->nama }}</option>
                                        @endforeach
                                    </select>

                                </div>

                                <div>
                                    <input id="" name="qty"
                                        class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50"
                                        type="number" placeholder="Quantity in Stock">
                                </div>

                                <div class="mt-6">
                                    {{-- <input name="harga" id="hargaJual"
                                        class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50"
                                        type="text" placeholder="Harga" readonly> --}}
                                        <input name="harga" type="text" id="harga" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" placeholder="Harga Jual" readonly>
                                </div>
                        </div>

                {{-- </div> --}}
            </form>
        </div>
    </div>

    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
        <div class="flex flex-wrap items-center justify-between py-4 px-5">
            <div class="relative lg:flex hidden">
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
                        <th scope="col" class="px-6 py-3 text-start text-base capitalize font-semibold text-default-900 min-w-22">No</th>
                        <th scope="col" class="px-6 py-3 text-start text-base capitalize font-semibold text-default-900 min-w-32">Product</th>
                        <th scope="col" class="px-6 py-3 text-start text-base capitalize font-semibold text-default-900 min-w-40">No Bukti</th>
                        <th scope="col" class="px-6 py-3 text-start text-base capitalize font-semibold text-default-900 min-w-40">Pemasok</th>
                        <th scope="col" class="px-6 py-3 text-start text-base capitalize font-semibold text-default-900 min-w-40">Date & TIme</th>
                        <th scope="col" class="px-6 py-3 text-start text-base capitalize font-semibold text-default-900 min-w-40">Keterangan</th>

                        {{-- <th scope="col" class="px-6 py-3 text-start text-base capitalize font-semibold text-default-900 min-w-32">Status</th> --}}
                        {{-- <th scope="col" class="px-6 py-3 text-start text-base capitalize font-semibold text-default-900 min-w-32">Amount</th> --}}
                        <th scope="col" class="px-6 py-3 text-start text-base capitalize font-semibold text-default-900 min-w-32">Action</th>
                        <th scope="col" class="px-3 py-3 text-center text-base capitalize font-semibold text-default-900 min-w-32">Action</th>
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

                        <td class="px-6 py-3 text-default-900 font-medium whitespace-nowrap"><b>{{ $item->namapemasok }}</b></td>

                        <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">
                            <span class="block mb-0.5"> {{ (new DateTime($item->created_at))->format('d M Y (h:i a)') }}</span>
                        </td>

                        <td class="px-6 py-3 text-default-900 font-medium whitespace-nowrap"><b>{{ $item->ket }}</b></td>

                        {{-- <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">Paypal</td> --}}

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


    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var namaSelect = document.getElementById('idbarang');
        var hargaInput = document.getElementById('harga');

        namaSelect.addEventListener('change', function() {
            var selectedOption = this.options[this.selectedIndex];
            var selectedHarga = selectedOption.getAttribute('data-harga');

            // Set the hargaInput value based on selectedHarga
            hargaInput.value = selectedHarga;
        });
    });
    </script>

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
