<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Owner Dashboard') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10">
                
                <div class="bg-white rounded-xl border border-gray-100 p-8 shadow-sm max-w-4xl mx-auto">
                    <div class="grid grid-cols-5 gap-x-4 divide-x divide-gray-200 text-center">
                        
                        <div class="flex flex-col items-center gap-y-2 px-2">
                            <div class="text-gray-700">
                                <svg class="w-8 h-8 mx-auto" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 01.788 0l4 1.714a.999.999 0 01.356.257L17.375 7a1 1 0 000-1.84l-7-3zM2.25 10.911a.999.999 0 01.356-.257L5.25 9.515V12a1 1 0 00.528.874l3.5 1.944a1 1 0 00.944 0l3.5-1.944A1 1 0 0014.25 12V9.515l2.644 1.139a.999.999 0 01.356.257V14a2 2 0 01-2 2H4.25a2 2 0 01-2-2v-3.089z"></path>
                                </svg>
                            </div>
                            <span class="text-xs text-gray-400 font-medium mt-1">Courses</span>
                            <span class="text-xl font-bold text-indigo-950">{{ $courses }}</span>
                        </div>

                        <div class="flex flex-col items-center gap-y-2 px-2">
                            <div class="text-gray-700">
                                <svg class="w-8 h-8 mx-auto" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4zM18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM5 12a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2h2a1 1 0 100-2h-2z"></path>
                                </svg>
                            </div>
                            <span class="text-xs text-gray-400 font-medium mt-1">Transactions</span>
                            <span class="text-xl font-bold text-indigo-950">{{ $transactions }}</span>
                        </div>

                        <div class="flex flex-col items-center gap-y-2 px-2">
                            <div class="text-gray-700">
                                <svg class="w-8 h-8 mx-auto" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                                </svg>
                            </div>
                            <span class="text-xs text-gray-400 font-medium mt-1">Students</span>
                            <span class="text-xl font-bold text-indigo-950">{{ $students }}</span>
                        </div>

                        <div class="flex flex-col items-center gap-y-2 px-2">
                            <div class="text-gray-700">
                                <svg class="w-8 h-8 mx-auto" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.964 5.964 0 0010 16c1.685 0 3.22-.5 4.546-1.364A5 5 0 0010 11z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-xs text-gray-400 font-medium mt-1">Teachers</span>
                            <span class="text-xl font-bold text-indigo-950">{{ $teachers }}</span>
                        </div>

                        <div class="flex flex-col items-center gap-y-2 px-2">
                            <div class="text-gray-700">
                                <svg class="w-8 h-8 mx-auto" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-xs text-gray-400 font-medium mt-1">Categories</span>
                            <span class="text-xl font-bold text-indigo-950">{{ $categories }}</span>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>