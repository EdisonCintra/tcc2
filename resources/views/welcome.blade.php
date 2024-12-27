<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div
                    class="p-6 text-gray-900 dark:text-gray-100 flex items-center justify-around flex-col sm:flex-row gap-6">

                    <article
                        class="group flex rounded-md max-w-sm flex-col overflow-hidden border border-neutral-300 bg-neutral-50 text-neutral-600 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-300">
                        <div class="flex flex-col gap-4 p-6">
                            <h3 class="text-balance text-xl lg:text-2xl font-bold text-neutral-900 dark:text-white"
                                aria-describedby="featureDescription">Vendas no mês</h3>
                            <p id="featureDescription" class="text-pretty text-lg font-bold">
                                R$ 50.000
                            </p>
                        </div>
                    </article>

                    <article
                        class="group flex rounded-md max-w-sm flex-col overflow-hidden border border-neutral-300 bg-neutral-50 text-neutral-600 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-300">
                        <div class="flex flex-col gap-4 p-6">
                            <h3 class="text-balance text-xl lg:text-2xl font-bold text-neutral-900 dark:text-white"
                                aria-describedby="featureDescription">Pedidos Finalizados no Mês</h3>
                            <p id="featureDescription" class="text-pretty text-lg font-bold">
                                50
                            </p>
                        </div>
                    </article>

                    <article
                        class="group flex rounded-md max-w-sm flex-col overflow-hidden border border-neutral-300 bg-neutral-50 text-neutral-600 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-300">
                        <div class="flex flex-col gap-4 p-6">
                            <h3 class="text-balance text-xl lg:text-2xl font-bold text-neutral-900 dark:text-white"
                                aria-describedby="featureDescription">Pedidos em Aberto</h3>
                            <p id="featureDescription" class="text-pretty text-lg font-bold">
                                50
                            </p>
                        </div>
                    </article>

                </div>

            </div>
        </div>
    </div>
</x-app-layout>
