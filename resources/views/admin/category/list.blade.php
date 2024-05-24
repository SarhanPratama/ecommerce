@extends('admin')

@section('title')

@section('content')

<div class="p-6 space-y-6">

    @include('layouts.shared/admin-page-title', ['subtitle' => 'Category', 'title' => 'Category List'])



    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
        <div class="flex flex-wrap items-center justify-between py-4 px-5">
            <div class="relative lg:flex hidden">
                <input type="search"
                    class="ps-12 pe-4 py-2.5 block w-64 bg-default-50/0 text-default-600 border-default-200 rounded-lg text-sm focus:border-primary focus:ring-primary"
                    placeholder="Search...">
                <span class="absolute start-4 top-2.5">
                    <i class="ti ti-search text-lg/none"></i>
                </span>
            </div>
            <a href="{{ url('admin/category/create') }}"
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
                        <th scope="col" class="px-6 py-3 text-start text-sm capitalize font-semibold text-default-900">
                            No</th>
                        <th scope="col" class="px-6 py-3 text-start text-sm capitalize font-semibold text-default-900">
                            Category</th>
                        <th scope="col" class="px-6 py-3 text-start text-sm capitalize font-semibold text-default-900">
                            Gambar</th>
                        <th scope="col"
                            class="px-6 py-3 text-center text-sm capitalize font-semibold text-default-900 min-w-32">
                            Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-default-200">
                    @foreach($kategori as $item)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $loop->iteration}}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">
                            <span class="flex items-center gap-2">

                                <h6 class="text-sm font-semibold text-default-700">{{ $item->nama }}</h6>


                            </span>

                        </td>

                        <td class="px-6 py-4 whitespace-nowrap">
                            <spam class="flex items-center gap-2">
                                <span class="h-10 w-10 inline-flex items-center justify-center rounded-full">

                                    <img src="{{ asset('storage/kategori/' . $item->foto) }}" alt="Foto Barang">

                                </span>

                            </spam>
                        </td>


                        <td class="whitespace-nowrap py-3 px-3 text-center text-sm font-medium">
                            <div class="flex items-center justify-center gap-2">
                                <a href=""
                                    class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-eye text-lg"></i>
                                </a>
                                <a href="{{ url('admin/category/'.$item->id. '/edit') }}" type="button"
                                    class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-edit-circle text-base"></i>
                                </a>
                                <form action="{{ url('category/'.$item->id) }}" method="post" style="display:inline">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
                                        class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                        <i class="ti ti-trash text-lg"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- <div class="flex items-center justify-between py-3 px-6 border-t border-dashed border-default-200">
            <h6 class="text-default-600">Showing 1 to 5 of 12</h6>

            <nav class="flex items-center gap-1">
                <a class="inline-flex items-center justify-center h-8 w-8 border border-default-200 rounded-md text-default-950 transition-all duration-200 hover:bg-primary hover:text-white hover:border-primary"
                    href="#">
                    <i class="ti ti-chevron-left text-base"></i>
                </a>
                <a class="inline-flex items-center justify-center h-8 w-8 border rounded-md transition-all duration-200 bg-primary text-white border-primary"
                    href="#" aria-current="page">1</a>
                <a class="inline-flex items-center justify-center h-8 w-8 border border-default-200 rounded-md text-default-950 transition-all duration-200 hover:bg-primary hover:text-white hover:border-primary"
                    href="#">2</a>
                <a class="inline-flex items-center justify-center h-8 w-8 border border-default-200 rounded-md text-default-950 transition-all duration-200 hover:bg-primary hover:text-white hover:border-primary"
                    href="#">...</a>
                <a class="inline-flex items-center justify-center h-8 w-8 border border-default-200 rounded-md text-default-950 transition-all duration-200 hover:bg-primary hover:text-white hover:border-primary"
                    href="#">12</a>
                <a class="inline-flex items-center justify-center h-8 w-8 border border-default-200 rounded-md text-default-950 transition-all duration-200 hover:bg-primary hover:text-white hover:border-primary"
                    href="#">
                    <i class="ti ti-chevron-right text-base"></i>
                </a>
            </nav>
        </div> --}}
    </div>
</div>

@endsection

@section('script')
@vite(['resources/js/admin-customers-list.js'])
@endsection