<x-site-layout>
    <x-slot name="pagetitle">
        welkom op mijn blog
    </x-slot>

        <section>

            @foreach($projects as $project)
                <article class="bg-white p-4 mb-4 ">
                    <h2 class="font-bold ">{{ $project->title }}</h2>
                    <h3>{{ $project->author }}</h3>
                    <p>{{ $project->intro }}</p>
                    <a href="">lees verder</a>
                 </article>

            @endforeach

            {{ $projects->links() }}
        </section>

</x-site-layout>
