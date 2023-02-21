{{-- The tags are commas separated list coming from the DB --}}
@props(['tagsCsv'])

@php
    /* Gets the comma separated string and turns it into an array  */
    $tags = explode(',', $tagsCsv);
@endphp

<ul class="flex">
    @foreach ($tags as $tag)
        <li
            class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
            <a href="/?tag={{$tag}}">{{ $tag }}</a> {{-- The href has a query parameter for the current tag --}}
        </li>
    @endforeach
</ul>