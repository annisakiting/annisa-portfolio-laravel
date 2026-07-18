<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white p-8 rounded-2xl shadow-sm border">
                <div class="mb-6">
                    <h1 class="text-2xl font-bold text-gray-900">Edit Category</h1>
                    <p class="text-sm text-gray-500">Ubah data atau perbarui ikon kategori yang Anda pilih.</p>
                </div>

                @if ($errors->any())
                    <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-xl shadow-sm">
                        <ul class="list-disc pl-5 text-sm">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.categories.update', $category->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    @method('PUT')

                    <div>
                        <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Category Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name', $category->name) }}" class="w-full px-4 py-2.5 border rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 bg-gray-50" required>
                    </div>

                    <div>
                        <label for="icon" class="block text-sm font-semibold text-gray-700 mb-2">Category Icon</label>
                        
                        <div class="mb-3 flex items-center space-x-3">
                            <span class="text-xs font-medium text-gray-500">Ikon saat ini:</span>
                            @if($category->icon)
                                <img src="{{ Storage::url($category->icon) }}" alt="Current Icon" class="w-12 h-12 object-cover rounded-xl border bg-gray-100">
                            @else
                                <span class="text-xs text-gray-400">Tidak ada ikon</span>
                            @endif
                        </div>

                        <input type="file" name="icon" id="icon" class="w-full px-4 py-2 border rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 bg-gray-50">
                        <p class="text-gray-400 text-xs mt-1">Biarkan kosong jika Anda tidak ingin mengubah gambar ikon.</p>
                    </div>

                    <div class="flex items-center justify-end space-x-3 pt-4 border-t">
                        <a href="{{ route('admin.categories.index') }}" class="bg-gray-100 hover:bg-gray-200 text-gray-700 font-semibold py-2 px-6 rounded-full text-sm transition">
                            Cancel
                        </a>
                        <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-6 rounded-full text-sm shadow transition">
                            Update Category
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>