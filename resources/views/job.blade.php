<x-layout>
    <main class="container mx-auto p-6 lg:px-20 space-y-12">
        <h1 class="font-bold text-5xl sm:text-6xl md:text-7xl xl:text-8xl dark:text-white">A offer for every <span class="text-cyan-800 dark:text-cyan-400">job seeker</span>.</h1>

        <h2 class="text-3xl font-bold text-white underline">{{ $job['title']  }}</h2>
        <p>
            This job pays you {{ $job['salary']  }}
        </p>
    </main>
</x-layout>
