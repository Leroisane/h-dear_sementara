@extends('layouts.app')

@section('title', 'Buat Undangan')

@section('content')
<div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-2">Buat Undangan</h1>
        <p class="text-gray-600">Template: <span class="font-semibold">{{ $template->nama_template }}</span></p>
    </div>

    <div class="bg-white shadow-md rounded-lg p-6">
        <form action="{{ route('undangan.store') }}" method="POST">
            @csrf
            <input type="hidden" name="template_id" value="{{ $template->id }}">

            <!-- Data Pengguna -->
            <div class="mb-6">
                <h2 class="text-xl font-semibold text-gray-900 mb-4 border-b pb-2">Data Pengguna</h2>
                
                <div class="mb-4">
                    <label for="nama_user" class="block text-sm font-medium text-gray-700 mb-2">Nama Anda *</label>
                    <input type="text" id="nama_user" name="nama_user" value="{{ old('nama_user') }}" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('nama_user') border-red-500 @enderror">
                    @error('nama_user')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email_user" class="block text-sm font-medium text-gray-700 mb-2">Email Anda (Opsional)</label>
                    <input type="email" id="email_user" name="email_user" value="{{ old('email_user') }}"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('email_user') border-red-500 @enderror">
                    @error('email_user')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Data Undangan -->
            <div class="mb-6">
                <h2 class="text-xl font-semibold text-gray-900 mb-4 border-b pb-2">Detail Undangan</h2>
                
                <div class="mb-4">
                    <label for="nama_pengirim" class="block text-sm font-medium text-gray-700 mb-2">Nama Pengirim *</label>
                    <input type="text" id="nama_pengirim" name="nama_pengirim" value="{{ old('nama_pengirim') }}" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('nama_pengirim') border-red-500 @enderror">
                    @error('nama_pengirim')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="nama_acara" class="block text-sm font-medium text-gray-700 mb-2">Nama Acara *</label>
                    <input type="text" id="nama_acara" name="nama_acara" value="{{ old('nama_acara') }}" placeholder="Contoh: Pernikahan, Ulang Tahun, Seminar" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('nama_acara') border-red-500 @enderror">
                    @error('nama_acara')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="tempat_acara" class="block text-sm font-medium text-gray-700 mb-2">Tempat Acara *</label>
                    <input type="text" id="tempat_acara" name="tempat_acara" value="{{ old('tempat_acara') }}" placeholder="Contoh: Gedung Serbaguna, Hotel Grand" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('tempat_acara') border-red-500 @enderror">
                    @error('tempat_acara')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="tanggal_acara" class="block text-sm font-medium text-gray-700 mb-2">Tanggal & Waktu Acara *</label>
                    <input type="datetime-local" id="tanggal_acara" name="tanggal_acara" value="{{ old('tanggal_acara') }}" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('tanggal_acara') border-red-500 @enderror">
                    @error('tanggal_acara')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="tujuan_undangan" class="block text-sm font-medium text-gray-700 mb-2">Tujuan Undangan *</label>
                    <input type="text" id="tujuan_undangan" name="tujuan_undangan" value="{{ old('tujuan_undangan') }}" placeholder="Contoh: Bapak/Ibu Keluarga Besar" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('tujuan_undangan') border-red-500 @enderror">
                    @error('tujuan_undangan')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="pesan_tambahan" class="block text-sm font-medium text-gray-700 mb-2">Pesan Tambahan (Opsional)</label>
                    <textarea id="pesan_tambahan" name="pesan_tambahan" rows="4" 
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('pesan_tambahan') border-red-500 @enderror">{{ old('pesan_tambahan') }}</textarea>
                    @error('pesan_tambahan')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="flex space-x-4">
                <a href="{{ route('undangan.index') }}" class="flex-1 bg-gray-300 text-gray-700 px-4 py-2 rounded-md hover:bg-gray-400 transition-colors text-center">
                    Kembali
                </a>
                <button type="submit" class="flex-1 bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition-colors">
                    Buat Undangan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection