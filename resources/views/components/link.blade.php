@props(['path' => '/','type' => 'a'])

@php
$isActive = request()->is($path);
$activeClass = 'relative text-cyan-800 dark:text-white before:absolute before:-bottom-2 md:before:-bottom-7 before:w-full before:h-0.5 before:mx-auto before:mt-auto before:rounded-full before:bg-cyan-800 dark:before:bg-cyan-400';
$inactiveClass = 'relative text-gray-600 dark:text-gray-300 before:absolute before:-bottom-2 md:before:-bottom-7 before:origin-left before:w-full before:h-0.5 before:mx-auto before:mt-auto before:rounded-full before:bg-cyan-800 dark:before:bg-cyan-400 before:transition before:scale-x-0 group-hover:before:scale-x-100'
@endphp


@if ($type === 'a')
    <li class="max-w-max">
        <a href="{{ $path }}" class="block md:px-3 group">
            <div class="{{ $isActive ? $activeClass : $inactiveClass}}">
                <span class="{{ $isActive ? '':'transition group-hover:text-cyan-700 dark:group-hover:text-cyan-400'  }}">{{ $slot }} </span>
            </div>
        </a>
    </li>
@else
    <button type="button" title="Start buying" class=" flex justify-center items-center w-full py-3 px-6 text-center rounded-full transition bg-gray-900 dark:bg-gray-700 hover:bg-cyan-500 active:bg-cyan-600 focus:bg-cyan-800">
        <span class="block text-white text-sm">{{$slot}}</span>
    </button>
@endif

