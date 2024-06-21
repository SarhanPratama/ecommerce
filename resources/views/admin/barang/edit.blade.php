@extends('admin')

@section('title')

@section('content')

<div class="p-6 space-y-6">

    @include('layouts.shared/admin-page-title', ['subtitle' => 'Products', 'title' => 'Edit Product'])

    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">

        <div class="p-5 border-t border-dashed border-default-200">
            <form method="POST" action="{{ url('admin/product/'. $barang->id) }}" enctype="multipart/form-data" class="">
                @csrf
                @method('PUT')
                <div class="grid lg:grid-cols-3 gap-6">
                    <div class="">
                        <div class="fallback mb-10">
                            <input name="foto[]" type="file" multiple="multiple">
                        </div>

                        <div>
                            <input value="{{ $barang->kode }}"
                                class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50"
                                type="text" placeholder="Product Code" name="kode">
                        </div>
                    </div>

                    <div class="lg:col-span-2">
                        <div class="grid lg:grid-cols-2 gap-6 mb-6">
                            <div class="space-y-6">
                                <div>
                                    <input value="{{ $barang->nama }}"
                                        class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50"
                                        type="text" placeholder="Product Name" name="nama">
                                </div>

                                <div>
                                    <select name="idsatuan" id="all-select-categories" data-hs-select='{
                                    "placeholder": "Select Type",
                                    "toggleTag": "<button type=\"button\"></button>",
                                    "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 form-input block w-full rounded-md py-2.5 ps-4 pe-10 text-default-800 text-start text-sm focus:ring-transparent border-default-200 overflow-hidden focus:border-primary dark:bg-default-50 before:absolute before:inset-0 before:z-[1]",
                                    }'
                                        class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50">
                                        <option value="" selected disabled>Select Unit</option>
                                        @foreach ($satuan as $item)
                                        <option value="{{ $item->id }}" {{ $barang->idsatuan == $item->id ? 'selected'
                                            : '' }}>{{ $item->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class=" relative">
                                    <select name="idkategori" id="all-select-categories" data-hs-select='{
                                    "placeholder": "Select Type",
                                    "toggleTag": "<button type=\"button\"></button>",
                                    "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 form-input block w-full rounded-md py-2.5 ps-4 pe-10 text-default-800 text-start text-sm focus:ring-transparent border-default-200 overflow-hidden focus:border-primary dark:bg-default-50 before:absolute before:inset-0 before:z-[1]",
                                    }'
                                        class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50">
                                        <option value="" selected disabled>Select Type</option>
                                        @foreach ($kategori as $item)
                                        <option value="{{ $item->id }}" {{ $barang->idkategori == $item->id ?
                                            'selected' : '' }}>{{ $item->nama }}</option>
                                        @endforeach
                                    </select>


                                    {{-- <div class="absolute -inset-y-0 end-3 flex items-center">
                                        <i class="ti ti-selector shrink text-base/none text-default-500"></i>
                                    </div> --}}
                                </div>
                                <!-- End Select -->

                                <div class="grid lg:grid-cols-2 gap-6">
                                    <div>
                                        <input name="hb" value="{{ $barang->hb }}"
                                            class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50"
                                            type="text" placeholder="Cost Price">
                                    </div>
                                    <div>
                                        <input name="hj" value="{{ $barang->hj }}"
                                            class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50"
                                            type="text" placeholder="Selling Price">
                                    </div>

                                </div>
                            </div>

                            <div class="space-y-6">
                                <div>
                                    <input name="sawal" value="{{ $barang->sawal }}"
                                        class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50"
                                        type="number" placeholder="Quantity in Stock">
                                </div>
                                <div>
                                    <select name="status" id="all-select-categories" data-hs-select='{
                                        "placeholder": "Select Type",
                                        "toggleTag": "<button type=\"button\"></button>",
                                        "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 form-input block w-full rounded-md py-2.5 ps-4 pe-10 text-default-800 text-start text-sm focus:ring-transparent border-default-200 overflow-hidden focus:border-primary dark:bg-default-50 before:absolute before:inset-0 before:z-[1]",
                                        }'
                                        class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50">
                                        <option value="" selected disabled>Status</option>
                                        <option value="1" {{ $barang->status == 1 ? 'selected' : '' }}>Publish</option>
                                        <option value="0" {{ $barang->status == 0 ? 'selected' : '' }}>Pending</option>

                                    </select>
                                </div>
                                <div>

                                    <textarea name="desc"
                                        class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50"
                                        rows="5" placeholder="Short Description">{{ $barang->desc }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-3">
                        <div class="flex flex-wrap justify-end items-center gap-4">
                            <div class="flex flex-wrap items-center gap-4">
                                <button
                                    class="py-2.5 px-4 inline-flex rounded-lg text-sm font-medium bg-primary text-white transition-all hover:bg-primary-500">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



@endsection

@section('script')
@vite(['resources/js/admin-product-add.js'])
@endsection