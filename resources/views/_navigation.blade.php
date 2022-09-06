<nav class="my-2">
    <ul class="flex">
        <li class="mr-3 px-4 py-2 @if(Route::currentRouteName() == 'blog.index') bg-darkblue @else bg-lightblue @endif text-white"><a href="{{route('blog.index')}}">Blog</a></li>
        <li class="mr-3 px-4 py-2 @if(Route::currentRouteName() == 'overmij') bg-darkblue @else bg-lightblue @endif text-white"><a href="{{route('overmij')}}">Over mij</a></li>
        <li class="mr-3 px-4 py-2 @if(Route::currentRouteName() == 'contact') bg-darkblue @else bg-lightblue @endif text-white"><a href="{{route('contact')}}">Contact</a></li>
    </ul>
</nav>
