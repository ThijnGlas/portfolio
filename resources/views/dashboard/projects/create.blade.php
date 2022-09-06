<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nieuw project') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="bg-light-blue max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-light-blue overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('projects.store')}}" method="POST">
                        @csrf
                        <div class="grid grid-cols-1 gap-6">
                            <label class="block">
                                <span class="text-gray-700">titel</span>
                                <input type="text" value="{{ old('title') }}" name="title" class="
                        mt-1
                        block
                        w-full
                        rounded-md
                        bg-gray-100
                        border-transparent
                        focus:border-gray-500 focus:bg-white focus:ring-0
                      " placeholder="">
                                @error('title')
                                <p class="text-red">{{ $message }}</p>
                                @enderror
                            </label>
                            <label class="block">
                                <span class="text-gray-700">intro</span>
                                <textarea name="intro" class="
                        mt-1
                        block
                        w-full
                        rounded-md
                        bg-gray-100
                        border-transparent
                        focus:border-gray-500 focus:bg-white focus:ring-0
                      " rows="3">{{ old('intro') }}</textarea>
                                @error('intro')
                                <p class="text-red">{{ $message }}</p>
                                @enderror
                            </label>
                            <label class="block">
                                <span class="text-gray-700">content</span>
                                <textarea name="content" class="
                        mt-1
                        block
                        w-full
                        rounded-md
                        bg-gray-100
                        border-transparent
                        focus:border-gray-500 focus:bg-white focus:ring-0
                      " rows="3">{{ old('content') }}</textarea>
                                @error('content')
                                <p class="text-red">{{ $message }}</p>
                                @enderror
                            </label>
                            <label class="block">
                                <span class="text-gray-700">auteur</span>
                                <input type="text" value="{{ old('author') }}" name="author" class="
                        mt-1
                        block
                        w-full
                        rounded-md
                        bg-gray-100
                        border-transparent
                        focus:border-gray-500 focus:bg-white focus:ring-0
                      " placeholder="">
                                @error('author')
                                <p class="text-red">{{ $message }}</p>
                                @enderror
                            </label>
                            <div class="block">
                                <div class="mt-2">
                                    <div>
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" value="1" name="published" class="
                              rounded
                              bg-gray-200
                              border-transparent
                              focus:border-transparent focus:bg-gray-200
                              text-gray-700
                              focus:ring-1 focus:ring-offset-2 focus:ring-gray-500
                            ">
                                            <span class="ml-2">publiseren?</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="border">opslaan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
