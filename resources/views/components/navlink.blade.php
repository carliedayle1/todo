@props(['name'])
@props(['active'=> false])

@if( $name == 'home' ? request()->is('/') : request()->is($name))
<div>
    <a class="relative inline-block text-black focus:outline-none before:absolute before:bottom-0.5 before:start-0 before:-z-[1] before:w-full before:h-1 before:bg-lime-400 dark:text-white"
        href="{{ $name == 'home' ? '/': $name  }}" aria-current="page">{{ $slot }}</a>
</div>
@else
<div>
    <a class="inline-block text-black hover:text-gray-600 focus:outline-none focus:text-gray-600 dark:text-white dark:hover:text-neutral-300 dark:focus:text-neutral-300"
        href="{{ $name == 'home' ? '/': $name }}">{{ $slot }}</a>
</div>
@endif
<a class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium" 
   aria-current="{{ $active ? 'page': 'false' }}"
   {{$attributes}}
> {{$slot}} </a>