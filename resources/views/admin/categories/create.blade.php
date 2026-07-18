<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add New Category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                @if ($errors->any())
                    <div class="mb-5 p-4 bg-red-100 text-red-700 rounded-lg">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Category Name</label>
                        <input type="text" name="name" placeholder="e.g. Programming" 
                            class="w-full mt-1 border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500" 
                            value="{{ old('name') }}" required>
                    </div>

                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700">Category Icon</label>
                        <input type="file" name="icon" 
                            class="w-full mt-1 text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100" 
                            required>
                    </div>

                    <button type="submit" class="bg-indigo-700 text-white px-6 py-2 rounded-full font-bold hover:bg-indigo-800 transition">
                        Save Category
                    </button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>