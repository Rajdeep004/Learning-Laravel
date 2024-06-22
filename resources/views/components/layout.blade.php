<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Laravel</title>
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/80">
    <header>
        <nav class="fixed z-40 w-full border-b dark:border-gray-700 bg-white dark:bg-gray-800 md:absolute md:bg-transparent">
            <div class="container m-auto px-2 md:px-12 lg:px-7">
                <div class="flex px-6 md:px-0 z-20 flex-wrap items-center justify-between py-3 gap-6 md:py-4 md:gap-0">
                    <input type="checkbox" name="" id="toggleNav" class="peer hidden">
                    <label for="toggleNav" role="overlaynav" class="fixed left-0 top-0 transition-all
                    md:peer-checked:hidden md:hidden opacity-0 hidden peer-checked:z-0
                    peer-checked:opacity-75 peer-checked:block w-full h-screen
                    bg-gray-200 bg-opacity-75 dark:bg-darker dark:opacity-80"></label>
                    <div class="relative z-40">
                        <a href="#" aria-label="logo">
                            <img src="gdscrjx.png" class="w-12 sm:w-16 dark:hidden rounded-3xl" alt="logo" width="144" height="68">
                            <img src="gdscrjx.png" class="w-12 sm:w-16 hidden dark:block rounded-3xl" alt="logo" width="144" height="68">
                        </a>
                    </div>

                    <div id="navlinks" class="fixed h-full w-4/5 max-w-sm top-0 -left-full peer-checked:-left-0 md:relative md:top-0 md:left-0 transition-all z-30 md:flex items-center p-8 bg-white dark:bg-gray-800 md:space-y-0 md:p-0 md:flex-nowrap md:bg-transparent md:w-max">
                        <div class="z-20 flex gap-8 md:gap-0 flex-col md:flex-row md:items-center w-full">
                            <ul class="pt-28 lg:pt-0 gap-8 tracking-wide font-medium flex-col flex md:flex-row md:gap-0">
                                <x-link :path="'/'">Homiieee</x-link>
                                <x-link :path="'jobs'">jobs</x-link>
                            </ul>
                            <div class="flex sm:hidden pt-4 w-full">
                                <button type="button" title="Start buying" class=" flex justify-center items-center w-full py-3 px-6 text-center rounded-full transition bg-gray-900 dark:bg-gray-700 hover:bg-cyan-500 active:bg-cyan-600 focus:bg-cyan-800">
                                    <span class="block text-white text-sm">
                                        Shop now
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="block-endnav w-max flex items-center gap-4">
                        <button type="button" title="Start buying" class="hidden sm:block w-full py-3 px-6 text-center rounded-full transition bg-gray-900 dark:bg-gray-700 hover:bg-cyan-500 active:bg-cyan-600 focus:bg-cyan-800 sm:w-max">
                            <span class="block text-white text-sm">
                                Shop now
                            </span>
                        </button>

                        <div class="flex items-center md:hidden max-h-10">
                            <label role="button" for="toggleNav" aria-label="humburger" id="hamburger" class="relative  p-6 -mr-6">
                                <div role="hidden" id="line" class="m-auto h-0.5 w-6 rounded bg-sky-900 dark:bg-gray-200 transition duration-300"></div>
                                <div role="hidden" id="line2" class="m-auto mt-2 h-0.5 w-6 rounded bg-sky-900 dark:bg-gray-200 transition duration-300">
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="border-b dark:border-gray-700 pb-2">
        <div class="container m-auto px-6 pt-24 md:px-12  lg:pt-[4.8rem] lg:px-7">
            {{ $slot }}
        </div>
    </main>

</body>

</html>
