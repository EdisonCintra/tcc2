<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Catálogo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div
                    class="p-6 text-gray-900 dark:text-gray-100 grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">

                    <article
                        class="group flex rounded-md max-w-sm flex-col overflow-hidden border border-neutral-300 bg-neutral-50 text-neutral-600 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-300">
                        <!-- Image -->
                        <div class="h-44 md:h-64 overflow-hidden">
                            <img src="https://penguinui.s3.amazonaws.com/component-assets/card-img-3.webp"
                                 class="object-cover transition duration-700 ease-out group-hover:scale-105"
                                 alt="CASIO G-SHOCK GA2100, Black face, black bands"/>
                        </div>
                        <!-- Content -->
                        <div class="flex flex-col gap-4 p-6">
                            <!-- Header -->
                            <div class="flex flex-col md:flex-row gap-4 md:gap-12 justify-between">
                                <!-- Title & Rating -->
                                <div class="flex flex-col">
                                    <h3 class="text-lg lg:text-xl font-bold text-neutral-900 dark:text-white"
                                        aria-describedby="productDescription">CASIO G-SHOCK GA2100</h3>
                                </div>
                                <span class="text-xl"><span class="sr-only">Price</span>$99.99</span>
                            </div>
                            <p id="productDescription" class="mb-2 text-pretty text-sm">
                                The Casio G-Shock GA2100 is simply designed for easy
                                timekeeping, featuring a sleek profile and clear display.
                            </p>
                            <!-- Button -->
                            <button type="button"
                                    class="flex cursor-pointer items-center justify-center gap-2 whitespace-nowrap bg-black px-4 py-2 text-center text-sm font-medium tracking-wide text-neutral-100 transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:opacity-100 active:outline-offset-0 dark:bg-white dark:text-black dark:focus-visible:outline-white rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                     aria-hidden="true" class="size-3.5">
                                    <path fill-rule="evenodd"
                                          d="M5 4a3 3 0 0 1 6 0v1h.643a1.5 1.5 0 0 1 1.492 1.35l.7 7A1.5 1.5 0 0 1 12.342 15H3.657a1.5 1.5 0 0 1-1.492-1.65l.7-7A1.5 1.5 0 0 1 4.357 5H5V4Zm4.5 0v1h-3V4a1.5 1.5 0 0 1 3 0Zm-3 3.75a.75.75 0 0 0-1.5 0v1a3 3 0 1 0 6 0v-1a.75.75 0 0 0-1.5 0v1a1.5 1.5 0 1 1-3 0v-1Z"
                                          clip-rule="evenodd"/>
                                </svg>
                                Add to Cart
                            </button>
                        </div>
                    </article>

                    <article
                        class="group flex rounded-md max-w-sm flex-col overflow-hidden border border-neutral-300 bg-neutral-50 text-neutral-600 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-300">
                        <!-- Image -->
                        <div class="h-44 md:h-64 overflow-hidden">
                            <img src="https://penguinui.s3.amazonaws.com/component-assets/card-img-3.webp"
                                 class="object-cover transition duration-700 ease-out group-hover:scale-105"
                                 alt="CASIO G-SHOCK GA2100, Black face, black bands"/>
                        </div>
                        <!-- Content -->
                        <div class="flex flex-col gap-4 p-6">
                            <!-- Header -->
                            <div class="flex flex-col md:flex-row gap-4 md:gap-12 justify-between">
                                <!-- Title & Rating -->
                                <div class="flex flex-col">
                                    <h3 class="text-lg lg:text-xl font-bold text-neutral-900 dark:text-white"
                                        aria-describedby="productDescription">CASIO G-SHOCK GA2100</h3>
                                </div>
                                <span class="text-xl"><span class="sr-only">Price</span>$99.99</span>
                            </div>
                            <p id="productDescription" class="mb-2 text-pretty text-sm">
                                The Casio G-Shock GA2100 is simply designed for easy
                                timekeeping, featuring a sleek profile and clear display.
                            </p>
                            <!-- Button -->
                            <button type="button"
                                    class="flex cursor-pointer items-center justify-center gap-2 whitespace-nowrap bg-black px-4 py-2 text-center text-sm font-medium tracking-wide text-neutral-100 transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:opacity-100 active:outline-offset-0 dark:bg-white dark:text-black dark:focus-visible:outline-white rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                     aria-hidden="true" class="size-3.5">
                                    <path fill-rule="evenodd"
                                          d="M5 4a3 3 0 0 1 6 0v1h.643a1.5 1.5 0 0 1 1.492 1.35l.7 7A1.5 1.5 0 0 1 12.342 15H3.657a1.5 1.5 0 0 1-1.492-1.65l.7-7A1.5 1.5 0 0 1 4.357 5H5V4Zm4.5 0v1h-3V4a1.5 1.5 0 0 1 3 0Zm-3 3.75a.75.75 0 0 0-1.5 0v1a3 3 0 1 0 6 0v-1a.75.75 0 0 0-1.5 0v1a1.5 1.5 0 1 1-3 0v-1Z"
                                          clip-rule="evenodd"/>
                                </svg>
                                Add to Cart
                            </button>
                        </div>
                    </article>


                    <article
                        class="group flex rounded-md max-w-sm flex-col overflow-hidden border border-neutral-300 bg-neutral-50 text-neutral-600 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-300">
                        <!-- Image -->
                        <div class="h-44 md:h-64 overflow-hidden">
                            <img src="https://penguinui.s3.amazonaws.com/component-assets/card-img-3.webp"
                                 class="object-cover transition duration-700 ease-out group-hover:scale-105"
                                 alt="CASIO G-SHOCK GA2100, Black face, black bands"/>
                        </div>
                        <!-- Content -->
                        <div class="flex flex-col gap-4 p-6">
                            <!-- Header -->
                            <div class="flex flex-col md:flex-row gap-4 md:gap-12 justify-between">
                                <!-- Title & Rating -->
                                <div class="flex flex-col">
                                    <h3 class="text-lg lg:text-xl font-bold text-neutral-900 dark:text-white"
                                        aria-describedby="productDescription">CASIO G-SHOCK GA2100</h3>
                                </div>
                                <span class="text-xl"><span class="sr-only">Price</span>$99.99</span>
                            </div>
                            <p id="productDescription" class="mb-2 text-pretty text-sm">
                                The Casio G-Shock GA2100 is simply designed for easy
                                timekeeping, featuring a sleek profile and clear display.
                            </p>
                            <!-- Button -->
                            <button type="button"
                                    class="flex cursor-pointer items-center justify-center gap-2 whitespace-nowrap bg-black px-4 py-2 text-center text-sm font-medium tracking-wide text-neutral-100 transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:opacity-100 active:outline-offset-0 dark:bg-white dark:text-black dark:focus-visible:outline-white rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                     aria-hidden="true" class="size-3.5">
                                    <path fill-rule="evenodd"
                                          d="M5 4a3 3 0 0 1 6 0v1h.643a1.5 1.5 0 0 1 1.492 1.35l.7 7A1.5 1.5 0 0 1 12.342 15H3.657a1.5 1.5 0 0 1-1.492-1.65l.7-7A1.5 1.5 0 0 1 4.357 5H5V4Zm4.5 0v1h-3V4a1.5 1.5 0 0 1 3 0Zm-3 3.75a.75.75 0 0 0-1.5 0v1a3 3 0 1 0 6 0v-1a.75.75 0 0 0-1.5 0v1a1.5 1.5 0 1 1-3 0v-1Z"
                                          clip-rule="evenodd"/>
                                </svg>
                                Add to Cart
                            </button>
                        </div>
                    </article>

                    <article
                        class="group flex rounded-md max-w-sm flex-col overflow-hidden border border-neutral-300 bg-neutral-50 text-neutral-600 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-300">
                        <!-- Image -->
                        <div class="h-44 md:h-64 overflow-hidden">
                            <img src="https://penguinui.s3.amazonaws.com/component-assets/card-img-3.webp"
                                 class="object-cover transition duration-700 ease-out group-hover:scale-105"
                                 alt="CASIO G-SHOCK GA2100, Black face, black bands"/>
                        </div>
                        <!-- Content -->
                        <div class="flex flex-col gap-4 p-6">
                            <!-- Header -->
                            <div class="flex flex-col md:flex-row gap-4 md:gap-12 justify-between">
                                <!-- Title & Rating -->
                                <div class="flex flex-col">
                                    <h3 class="text-lg lg:text-xl font-bold text-neutral-900 dark:text-white"
                                        aria-describedby="productDescription">CASIO G-SHOCK GA2100</h3>
                                </div>
                                <span class="text-xl"><span class="sr-only">Price</span>$99.99</span>
                            </div>
                            <p id="productDescription" class="mb-2 text-pretty text-sm">
                                The Casio G-Shock GA2100 is simply designed for easy
                                timekeeping, featuring a sleek profile and clear display.
                            </p>
                            <!-- Button -->
                            <button type="button"
                                    class="flex cursor-pointer items-center justify-center gap-2 whitespace-nowrap bg-black px-4 py-2 text-center text-sm font-medium tracking-wide text-neutral-100 transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:opacity-100 active:outline-offset-0 dark:bg-white dark:text-black dark:focus-visible:outline-white rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                     aria-hidden="true" class="size-3.5">
                                    <path fill-rule="evenodd"
                                          d="M5 4a3 3 0 0 1 6 0v1h.643a1.5 1.5 0 0 1 1.492 1.35l.7 7A1.5 1.5 0 0 1 12.342 15H3.657a1.5 1.5 0 0 1-1.492-1.65l.7-7A1.5 1.5 0 0 1 4.357 5H5V4Zm4.5 0v1h-3V4a1.5 1.5 0 0 1 3 0Zm-3 3.75a.75.75 0 0 0-1.5 0v1a3 3 0 1 0 6 0v-1a.75.75 0 0 0-1.5 0v1a1.5 1.5 0 1 1-3 0v-1Z"
                                          clip-rule="evenodd"/>
                                </svg>
                                Add to Cart
                            </button>
                        </div>
                    </article>

                    <article
                        class="group flex rounded-md max-w-sm flex-col overflow-hidden border border-neutral-300 bg-neutral-50 text-neutral-600 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-300">
                        <!-- Image -->
                        <div class="h-44 md:h-64 overflow-hidden">
                            <img src="https://penguinui.s3.amazonaws.com/component-assets/card-img-3.webp"
                                 class="object-cover transition duration-700 ease-out group-hover:scale-105"
                                 alt="CASIO G-SHOCK GA2100, Black face, black bands"/>
                        </div>
                        <!-- Content -->
                        <div class="flex flex-col gap-4 p-6">
                            <!-- Header -->
                            <div class="flex flex-col md:flex-row gap-4 md:gap-12 justify-between">
                                <!-- Title & Rating -->
                                <div class="flex flex-col">
                                    <h3 class="text-lg lg:text-xl font-bold text-neutral-900 dark:text-white"
                                        aria-describedby="productDescription">CASIO G-SHOCK GA2100</h3>
                                </div>
                                <span class="text-xl"><span class="sr-only">Price</span>$99.99</span>
                            </div>
                            <p id="productDescription" class="mb-2 text-pretty text-sm">
                                The Casio G-Shock GA2100 is simply designed for easy
                                timekeeping, featuring a sleek profile and clear display.
                            </p>
                            <!-- Button -->
                            <button type="button"
                                    class="flex cursor-pointer items-center justify-center gap-2 whitespace-nowrap bg-black px-4 py-2 text-center text-sm font-medium tracking-wide text-neutral-100 transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:opacity-100 active:outline-offset-0 dark:bg-white dark:text-black dark:focus-visible:outline-white rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                     aria-hidden="true" class="size-3.5">
                                    <path fill-rule="evenodd"
                                          d="M5 4a3 3 0 0 1 6 0v1h.643a1.5 1.5 0 0 1 1.492 1.35l.7 7A1.5 1.5 0 0 1 12.342 15H3.657a1.5 1.5 0 0 1-1.492-1.65l.7-7A1.5 1.5 0 0 1 4.357 5H5V4Zm4.5 0v1h-3V4a1.5 1.5 0 0 1 3 0Zm-3 3.75a.75.75 0 0 0-1.5 0v1a3 3 0 1 0 6 0v-1a.75.75 0 0 0-1.5 0v1a1.5 1.5 0 1 1-3 0v-1Z"
                                          clip-rule="evenodd"/>
                                </svg>
                                Add to Cart
                            </button>
                        </div>
                    </article>

                    <article
                        class="group flex rounded-md max-w-sm flex-col overflow-hidden border border-neutral-300 bg-neutral-50 text-neutral-600 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-300">
                        <!-- Image -->
                        <div class="h-44 md:h-64 overflow-hidden">
                            <img src="https://penguinui.s3.amazonaws.com/component-assets/card-img-3.webp"
                                 class="object-cover transition duration-700 ease-out group-hover:scale-105"
                                 alt="CASIO G-SHOCK GA2100, Black face, black bands"/>
                        </div>
                        <!-- Content -->
                        <div class="flex flex-col gap-4 p-6">
                            <!-- Header -->
                            <div class="flex flex-col md:flex-row gap-4 md:gap-12 justify-between">
                                <!-- Title & Rating -->
                                <div class="flex flex-col">
                                    <h3 class="text-lg lg:text-xl font-bold text-neutral-900 dark:text-white"
                                        aria-describedby="productDescription">CASIO G-SHOCK GA2100</h3>
                                </div>
                                <span class="text-xl"><span class="sr-only">Price</span>$99.99</span>
                            </div>
                            <p id="productDescription" class="mb-2 text-pretty text-sm">
                                The Casio G-Shock GA2100 is simply designed for easy
                                timekeeping, featuring a sleek profile and clear display.
                            </p>
                            <!-- Button -->
                            <button type="button"
                                    class="flex cursor-pointer items-center justify-center gap-2 whitespace-nowrap bg-black px-4 py-2 text-center text-sm font-medium tracking-wide text-neutral-100 transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:opacity-100 active:outline-offset-0 dark:bg-white dark:text-black dark:focus-visible:outline-white rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                     aria-hidden="true" class="size-3.5">
                                    <path fill-rule="evenodd"
                                          d="M5 4a3 3 0 0 1 6 0v1h.643a1.5 1.5 0 0 1 1.492 1.35l.7 7A1.5 1.5 0 0 1 12.342 15H3.657a1.5 1.5 0 0 1-1.492-1.65l.7-7A1.5 1.5 0 0 1 4.357 5H5V4Zm4.5 0v1h-3V4a1.5 1.5 0 0 1 3 0Zm-3 3.75a.75.75 0 0 0-1.5 0v1a3 3 0 1 0 6 0v-1a.75.75 0 0 0-1.5 0v1a1.5 1.5 0 1 1-3 0v-1Z"
                                          clip-rule="evenodd"/>
                                </svg>
                                Add to Cart
                            </button>
                        </div>
                    </article>

                    <article
                        class="group flex rounded-md max-w-sm flex-col overflow-hidden border border-neutral-300 bg-neutral-50 text-neutral-600 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-300">
                        <!-- Image -->
                        <div class="h-44 md:h-64 overflow-hidden">
                            <img src="https://penguinui.s3.amazonaws.com/component-assets/card-img-3.webp"
                                 class="object-cover transition duration-700 ease-out group-hover:scale-105"
                                 alt="CASIO G-SHOCK GA2100, Black face, black bands"/>
                        </div>
                        <!-- Content -->
                        <div class="flex flex-col gap-4 p-6">
                            <!-- Header -->
                            <div class="flex flex-col md:flex-row gap-4 md:gap-12 justify-between">
                                <!-- Title & Rating -->
                                <div class="flex flex-col">
                                    <h3 class="text-lg lg:text-xl font-bold text-neutral-900 dark:text-white"
                                        aria-describedby="productDescription">CASIO G-SHOCK GA2100</h3>
                                </div>
                                <span class="text-xl"><span class="sr-only">Price</span>$99.99</span>
                            </div>
                            <p id="productDescription" class="mb-2 text-pretty text-sm">
                                The Casio G-Shock GA2100 is simply designed for easy
                                timekeeping, featuring a sleek profile and clear display.
                            </p>
                            <!-- Button -->
                            <button type="button"
                                    class="flex cursor-pointer items-center justify-center gap-2 whitespace-nowrap bg-black px-4 py-2 text-center text-sm font-medium tracking-wide text-neutral-100 transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:opacity-100 active:outline-offset-0 dark:bg-white dark:text-black dark:focus-visible:outline-white rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                     aria-hidden="true" class="size-3.5">
                                    <path fill-rule="evenodd"
                                          d="M5 4a3 3 0 0 1 6 0v1h.643a1.5 1.5 0 0 1 1.492 1.35l.7 7A1.5 1.5 0 0 1 12.342 15H3.657a1.5 1.5 0 0 1-1.492-1.65l.7-7A1.5 1.5 0 0 1 4.357 5H5V4Zm4.5 0v1h-3V4a1.5 1.5 0 0 1 3 0Zm-3 3.75a.75.75 0 0 0-1.5 0v1a3 3 0 1 0 6 0v-1a.75.75 0 0 0-1.5 0v1a1.5 1.5 0 1 1-3 0v-1Z"
                                          clip-rule="evenodd"/>
                                </svg>
                                Add to Cart
                            </button>
                        </div>
                    </article>


                </div>

            </div>
        </div>
    </div>
</x-app-layout>
