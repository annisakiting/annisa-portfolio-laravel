<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manage Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            @if(session('success'))
                <div class="mb-6 p-4 bg-green-100 text-green-700 rounded-xl border border-green-200">
                    {{ session('success') }}
                </div>
            @endif

            <div class="flex justify-between items-center mb-8">
                <h1 class="text-2xl font-bold text-gray-800">All Categories</h1>
                <a href="{{ route('admin.categories.create') }}" class="bg-indigo-700 text-white px-8 py-3 rounded-full font-bold hover:bg-indigo-800 transition shadow-lg">
                    + Add New
                </a>
            </div>

            <div class="space-y-4">
                @forelse ($categories as $category)
                    @php
                        $colors = ['bg-blue-50', 'bg-green-50', 'bg-yellow-50', 'bg-purple-50', 'bg-pink-50', 'bg-indigo-50'];
                        $randomColor = $colors[array_rand($colors)];
                    @endphp

                    <div class="{{ $randomColor }} p-6 rounded-2xl shadow-sm flex items-center justify-between border border-gray-100 transition hover:shadow-md">
                        
                        <div class="flex items-center gap-5">
                            @if($category->icon)
                                <img src="{{ Storage::url($category->icon) }}" class="w-16 h-16 rounded-xl object-cover border" alt="{{ $category->name }}">
                            @else
                                <div class="w-16 h-16 rounded-xl bg-gray-200 flex items-center justify-center">No Icon</div>
                            @endif
                            
                            <div>
                                <h3 class="font-bold text-lg text-gray-900 capitalize">{{ $category->name }}</h3>
                                <p class="text-sm text-gray-600">Created: {{ $category->created_at->format('j F Y') }}</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-3">
                            <a href="{{ route('admin.categories.edit', $category->id) }}" class="bg-white text-gray-800 border border-gray-200 px-6 py-2 rounded-full font-semibold hover:bg-gray-50 transition">
                                Edit
                            </a>
                            <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus kategori ini?');">
                                @csrf 
                                @method('DELETE')
                                <button type="submit" class="bg-red-600 text-white px-6 py-2 rounded-full font-semibold hover:bg-red-700 transition">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                @empty
                    <div class="text-center py-10 text-gray-500 bg-white rounded-2xl border border-dashed border-gray-300">
                        Belum ada kategori yang tersedia. Silakan buat yang baru!
                    </div>
                @endforelse
            </div>
            
        </div>
    </div>
</x-app-layout>