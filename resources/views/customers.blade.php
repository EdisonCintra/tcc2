<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lista de Clientes') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
{{--            <div class="flex">--}}
{{--                <div--}}
{{--                    class="my-5 mx-5 relative flex w-full max-w-xs flex-col gap-1 text-neutral-600 dark:text-neutral-300">--}}
{{--                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"--}}
{{--                         stroke="currentColor" aria-hidden="true"--}}
{{--                         class="absolute left-2.5 top-1/2 size-5 -translate-y-1/2 text-neutral-600/50 dark:text-neutral-300/50">--}}
{{--                        <path stroke-linecap="round" stroke-linejoin="round"--}}
{{--                              d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"/>--}}
{{--                    </svg>--}}
{{--                    <input type="search"--}}
{{--                           class="w-full rounded-md border border-neutral-300 bg-neutral-50 py-2 pl-10 pr-2 text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black disabled:cursor-not-allowed disabled:opacity-75 dark:border-neutral-700 dark:bg-neutral-900/50 dark:focus-visible:outline-white"--}}
{{--                           name="search" placeholder="Search" aria-label="search"/>--}}


{{--                </div>--}}
{{--                <div class="my-5 mx-5 relative flex max-w-xs flex-col gap-1 text-neutral-600 dark:text-neutral-300">--}}
{{--                    <button type="button"--}}
{{--                            class="cursor-pointer whitespace-nowrap rounded-md bg-sky-500 px-4 py-2 text-sm font-medium tracking-wide text-white transition hover:opacity-75 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-500 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-sky-500 dark:text-white dark:focus-visible:outline-sky-500">--}}
{{--                        Novo Cliente--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}


            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex">
                    <div
                        class="my-5 mx-5 relative flex w-full max-w-xs flex-col gap-1 text-neutral-600 dark:text-neutral-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                             stroke="currentColor" aria-hidden="true"
                             class="absolute left-2.5 top-1/2 size-5 -translate-y-1/2 text-neutral-600/50 dark:text-neutral-300/50">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"/>
                        </svg>
                        <input type="search"
                               class="w-full rounded-md border border-neutral-300 bg-neutral-50 py-2 pl-10 pr-2 text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black disabled:cursor-not-allowed disabled:opacity-75 dark:border-neutral-700 dark:bg-neutral-900/50 dark:focus-visible:outline-white"
                               name="search" placeholder="Search" aria-label="search"/>


                    </div>
                    <div class="my-5 mx-5 relative flex max-w-xs flex-col gap-1 text-neutral-600 dark:text-neutral-300">
                        <a href="{{ route('newCustomer') }}">
                        <button type="button"
                                class="cursor-pointer whitespace-nowrap rounded-md bg-sky-500 px-4 py-2 text-sm font-medium tracking-wide text-white transition hover:opacity-75 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-500 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-sky-500 dark:text-white dark:focus-visible:outline-sky-500">
                            Novo Cliente
                        </button>
                        </a>
                    </div>
                </div>


                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div
                        class="overflow-hidden w-full overflow-x-auto rounded-md border border-neutral-300 dark:border-neutral-700">
                        <table class="w-full text-left text-sm text-neutral-600 dark:text-neutral-300">
                            <thead
                                class="border-b border-neutral-300 bg-neutral-50 text-sm text-neutral-900 dark:border-neutral-700 dark:bg-neutral-900 dark:text-white">
                            <tr>
                                <th scope="col" class="p-4">ID</th>
                                <th scope="col" class="p-4">Nome</th>
                                <th scope="col" class="p-4">Telefone</th>
                                <th scope="col" class="p-4">Email</th>
                                <th scope="col" class="p-4">Status</th>
                            </tr>
                            </thead>
                            <tbody class="divide-y divide-neutral-300 dark:divide-neutral-700">
                            <tr>
                                <td class="p-4">2335</td>
                                <td class="p-4">
                                    <div class="flex w-max items-center gap-2">
                                        <div class="flex flex-col">
                                            <span class="text-neutral-900 dark:text-white">Alice Brown</span>
                                            <span class="text-sm text-neutral-600 opacity-85 dark:text-neutral-300">alice.brown@gmail.com</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-4">(99) 99999-9999</td>

                                <td class="p-4">
                                    <button type="button"
                                            class="cursor-pointer whitespace-nowrap rounded-md bg-transparent p-0.5 font-semibold text-black outline-black hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 active:opacity-100 active:outline-offset-0 dark:text-white dark:outline-white">
                                        teste@teste.com
                                    </button>
                                </td>
                                <td class="p-4"><span
                                        class="inline-flex overflow-hidden rounded-md border border-green-500 px-1 py-0.5 text-xs font-medium text-green-500 bg-green-500/10">Active</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>
    </div>
</x-app-layout>
