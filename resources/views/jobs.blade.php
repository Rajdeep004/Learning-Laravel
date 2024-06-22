<x-layout>
    <main class="container mx-auto p-6 lg:px-20 space-y-12">
        <h1 class="font-bold text-5xl sm:text-6xl md:text-7xl xl:text-8xl dark:text-white">A Page for every <span
                class="text-cyan-800 dark:text-cyan-400">job seeker</span>.</h1>

        <ul>
            @foreach($jobs as $job)
                <li class="font-semibold text-xl">
                    <a
                        href="/jobs/{{ $job['id'] }}"
                        class="text-cyan-400 hover:underline"
                    >
                        {{ $job['title']  }}: Pays {{ $job['salary'] }} per annum
                    </a>

                </li>
            @endforeach
        </ul>

    </main>
</x-layout>
