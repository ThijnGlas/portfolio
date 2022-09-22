<nav class="my-2">
    <ul class="flex">
        <li class="mr-3 px-4 py-2 @if(Route::currentRouteName() == 'homepage') @endif"><a href="{{route('homepage')}}">Homepage</a></li>
        <li class="mr-3 px-4 py-2 @if(Route::currentRouteName() == 'blog.index') @endif"><a href="{{route('blog.index')}}">Blog</a></li>
        <li class="mr-3 px-4 py-2 @if(Route::currentRouteName() == 'overmij') @endif"><a href="{{route('overmij')}}">Over mij</a></li>
        <li class="mr-3 px-4 py-2 @if(Route::currentRouteName() == 'contact') @endif"><a href="{{route('contact')}}">Contact</a></li>
    </ul>
</nav>
{{--<li class="mr-3 px-4 py-2 @if(Route::currentRouteName() == 'homepage') bg-darkblue @else bg-lightblue @endif text-white"><a href="{{route('homepage')}}">Blog</a></li>--}}
