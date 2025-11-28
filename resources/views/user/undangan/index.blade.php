@extends('layouts.app')

@section('title', 'Pilih Template Undangan')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-10">
        <h1 class="text-4xl font-bold text-gray-900 mb-4">Pilih Template Undangan</h1>
        <p class="text-lg text-gray-600">Pilih template yang sesuai untuk acara Anda</p>
    </div>

    @if($templates->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($templates as $template)
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    @if($template->thumbnail)
                        <img src="{{ asset('storage/' . $template->thumbnail) }}" alt="{{ $template->nama_template }}" class="w-full h-48 object-cover">
                    @else
                        <div class="w-full h-48 bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center">
                            <span class="text-white text-2xl font-bold">{{ substr($template->nama_template, 0, 1) }}</span>
                        </div>
                    @endif
                    
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $template->nama_template }}</h3>
                        <p class="text-gray-600 mb-4">{{ Str::limit($template->deskripsi, 100) }}</p>
                        <a href="{{ route('undangan.create', $template->id) }}" class="block w-full text-center bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition-colors">
                            Gunakan Template
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="text-center py-12">
            <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
            </svg>
            <h3 class="mt-2 text-sm font-medium text-gray-900">Belum ada template</h3>
            <p class="mt-1 text-sm text-gray-500">Template undangan akan segera tersedia.</p>
        </div>
    @endif
</div>
@endsection