@extends('admin')

@section('title', 'Add-Product')

@section('content')

<div class="p-6 space-y-6">

    @include('layouts.shared/admin-page-title', ['subtitle' => 'Products', 'title' => 'Add Product'])

    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">


        <div class="p-5 border-t border-dashed border-default-200">
            <form method="POST" action="{{ url('admin/product') }}" enctype="multipart/form-data">
                @csrf
                <div class="grid lg:grid-cols-3 gap-6">
                    <div class="">
                        <div class="fallback mb-10">
                            <div class="mb-3">
                                {{-- <label for="">Foto</label><br><br> --}}
                                <input class="form-control" type="file" name="foto[]" id="foto" multiple>
                            </div>
                        </div>

                        <div class="mb-6">
                            <input
                                class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50"
                                type="text" placeholder="Product Code" name="kode">
                                @error('kode')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                        </div>

                        <div>
                            <input
                                class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50"
                                type="text" placeholder="Product Name" name="nama">
                                @error('nama')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                        </div>
                    </div>


                    <div class="lg:col-span-2">
                        <div class="grid lg:grid-cols-2 gap-6 mb-6">
                            <div class="space-y-6">

                                <div>
                                    <select name="idsatuan" id="all-select-categories" data-hs-select='{
                                    "placeholder": "Select Type",
                                    "toggleTag": "<button type=\"button\"></button>",
                                    "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 form-input block w-full rounded-md py-2.5 ps-4 pe-10 text-default-800 text-start text-sm focus:ring-transparent border-default-200 overflow-hidden focus:border-primary dark:bg-default-50 before:absolute before:inset-0 before:z-[1]",
                                    }'
                                        class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50">
                                        <option value="" selected disabled>Select Unit</option>
                                        @foreach ($satuan as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
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
                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                        @endforeach
                                    </select>


                                    {{-- <div class="absolute -inset-y-0 end-3 flex items-center">
                                        <i class="ti ti-selector shrink text-base/none text-default-500"></i>
                                    </div> --}}
                                </div>
                                <!-- End Select -->

                                <div class="grid lg:grid-cols-2 gap-6">
                                    <div>
                                        <input name="hb"
                                            class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50"
                                            type="text" placeholder="Cost Price">
                                            @error('idsatuan')
                                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                            @enderror
                                    </div>
                                    <div>

                                        <input name="hj"
                                            class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50"
                                            type="text" placeholder="Selling Price">
                                            @error('idsatuan')
                                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                            @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="space-y-6">
                                <div>
                                    <input name="sawal"
                                        class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50"
                                        type="number" placeholder="Quantity in Stock">
                                        @error('')
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                </div>

                                <div>
                                    <select name="pajang" id="all-select-categories" data-hs-select='{
                                        "placeholder": "Select Type",
                                        "toggleTag": "<button type=\"button\"></button>",
                                        "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 form-input block w-full rounded-md py-2.5 ps-4 pe-10 text-default-800 text-start text-sm focus:ring-transparent border-default-200 overflow-hidden focus:border-primary dark:bg-default-50 before:absolute before:inset-0 before:z-[1]",
                                        }'
                                        class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50">
                                        <option selected disabled>Pajang</option>

                                        <option value="1">Ya</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                                <div>
                                    <textarea name="desc"
                                        class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50"
                                        rows="5" placeholder="Short Description"></textarea>
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