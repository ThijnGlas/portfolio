<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Projects') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="bg-light-blue max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-light-blue overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p class="mb-3">welkom op de projectsadmin</p>

                    <p class="mb-3">
                    <a href="{{route('projects.create')}}" class="underline">nieuw project maken</a>
                    </p>

                    @foreach($projects as $project)
                        <a href="">{{ $project->title }} {{ $project->id }}</a><br/>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
