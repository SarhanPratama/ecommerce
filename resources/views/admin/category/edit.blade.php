@extends('admin')

@section('title')

@section('content')

<div class="p-6 space-y-6">

    @include('layouts.shared/admin-page-title', ['subtitle' => 'Sellers', 'title' => 'Edit Sellers'])

    <div class="border border-default-200 rounded-lg">
        <div class="px-6 py-4 flex items-center justify-between gap-4">
            <h4 class="grow text-lg font-medium text-default-900">Edit Seller</h4>
        </div>
        <div class="p-5 border-t border-dashed border-default-200">
            <form method="post" action="{{ url('admin/category/'. $kategori->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="grid gap-6 mb-6">
                    <div>
                        <label class="block text-sm font-medium text-default-900 mb-2" for="firstName"> Name</label>
                        <input name="nama"
                            class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50"
                            type="text" placeholder="Enter Your First Name" value="{{ $kategori->nama }}">
                    </div>
                    <div>
                        <input name="foto" type="file" multiple="multiple">
                    </div>

                    <div class="flex gap-4">
                        <button
                            class="flex items-center justify-center gap-2 rounded-md bg-primary px-6 py-2.5 text-center text-sm font-semibold text-white shadow-sm transition-all duration-200 hover:bg-primary-500">
                            <i class="ti ti-device-floppy text-lg"></i>
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @endsection