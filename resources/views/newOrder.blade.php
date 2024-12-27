<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Novo Pedido') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <article
                        class="group flex flex-col rounded-md overflow-hidden border border-neutral-300
                        bg-white text-neutral-600 dark:border-neutral-700
                        dark:bg-neutral-900 dark:text-neutral-300 mx-auto w-full max-w-none">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 p-6">
                            <div class="flex flex-col gap-2 text-neutral-600 dark:text-neutral-300">
                                <label for="nameInput" class="w-fit pl-0.5 text-sm">Nome do Cliente</label>
                                <input id="nameInput" type="text"
                                       class="w-full rounded-md border border-neutral-300 bg-neutral-50
                                       px-6 py-4 text-sm focus-visible:outline focus-visible:outline-2
                                       focus-visible:outline-offset-2 focus-visible:outline-black
                                        disabled:cursor-not-allowed disabled:opacity-75
                                        dark:border-neutral-700 dark:bg-neutral-900/50
                                        dark:focus-visible:outline-white"
                                       name="name" placeholder="Digite o nome do cliente" autocomplete="name"/>
                            </div>
                            <div class="flex flex-col gap-2 text-neutral-600 dark:text-neutral-300">
                                <label for="os" class="w-fit pl-0.5 text-sm">Status</label>

                                <select id="os" name="os"
                                        class="w-full appearance-none rounded-md border border-neutral-300 bg-neutral-50
                                        px-6 py-4 text-sm focus-visible:outline focus-visible:outline-2
                                        focus-visible:outline-offset-2 focus-visible:outline-black disabled:cursor-not-allowed
                                        disabled:opacity-75 dark:border-neutral-700 dark:bg-neutral-900/50
                                        dark:focus-visible:outline-white">
                                    <option selected>Status</option>
                                    <option value="mac">Tipo 1</option>
                                    <option value="windows">Tipo 2</option>
                                    <option value="linux">Tipo 3</option>
                                </select>
                            </div>
                            <div class="flex flex-col gap-2 text-neutral-600 dark:text-neutral-300">
                                <label for="emailInput" class="w-fit pl-0.5 text-sm">Produto</label>
                                <input id="emailInput" type="email"
                                       class="w-full rounded-md border border-neutral-300 bg-neutral-50 px-6 py-4 text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black disabled:cursor-not-allowed disabled:opacity-75 dark:border-neutral-700 dark:bg-neutral-900/50 dark:focus-visible:outline-white"
                                       name="email" placeholder="Digite o nome do produto" autocomplete="email"/>
                            </div>
                            <div class="flex flex-col gap-2 text-neutral-600 dark:text-neutral-300">
                                <label for="emailInput" class="w-fit pl-0.5 text-sm">Quantidade</label>
                                <input id="emailInput" type="email"
                                       class="w-full rounded-md border border-neutral-300 bg-neutral-50 px-6 py-4 text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black disabled:cursor-not-allowed disabled:opacity-75 dark:border-neutral-700 dark:bg-neutral-900/50 dark:focus-visible:outline-white"
                                       name="email" placeholder="Digite a quantidade" autocomplete="email"/>
                            </div>

                        </div>
                    </article>
                </div>
                <button type="button"
                        class="cursor-pointer whitespace-nowrap rounded-md bg-green-500 mb-10 mr-5 ml-6 px-4 py-2 text-sm font-medium tracking-wide text-white transition hover:opacity-75 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-500 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-green-500 dark:text-white dark:focus-visible:outline-green-500">
                    Adicionar
                </button>
                <button type="button"
                        class="cursor-pointer whitespace-nowrap rounded-md bg-red-500 px-4 py-2 text-sm font-medium tracking-wide text-white transition hover:opacity-75 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-500 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-red-500 dark:text-white dark:focus-visible:outline-red-500">
                    Cancelar
                </button>

            </div>

            <div class="p-6 text-gray-900 dark:text-gray-100">
                <div
                    class="overflow-hidden w-full overflow-x-auto rounded-md border border-neutral-300 dark:border-neutral-700">
                    <table class="w-full text-left text-sm text-neutral-600 dark:text-neutral-300">
                        <thead
                            class="border-b border-neutral-300 bg-neutral-50 text-sm text-neutral-900 dark:border-neutral-700 dark:bg-neutral-900 dark:text-white">
                        <tr>
                            <th scope="col" class="p-4">ID</th>
                            <th scope="col" class="p-4">Produtos</th>
                            <th scope="col" class="p-4">Quantidade</th>
                            <th scope="col" class="p-4">Preço Unitário</th>
                            <th scope="col" class="p-4">Faturado</th>
                            <th scope="col" class="p-4">Qtd Usada Estoque</th>
                            <th scope="col" class="p-4"></th>

                        </tr>
                        </thead>
                        <tbody class="divide-y divide-neutral-300 dark:divide-neutral-700">
                        <tr>
                            <td class="p-4">1</td>
                            <td class="p-4">
                                <div class="flex w-max items-center gap-2">
                                    <div class="flex flex-col">
                                        <span class="text-neutral-900 dark:text-white">Produto 1</span>
                                    </div>
                                </div>
                            </td>
                            <td class="p-4">50</td>

                            <td class="p-4">
                                <button type="button"
                                        class="cursor-pointer whitespace-nowrap rounded-md bg-transparent p-0.5 font-semibold text-black outline-black hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 active:opacity-100 active:outline-offset-0 dark:text-white dark:outline-white">
                                    Tipo 1
                                </button>
                            </td>
                            <td class="p-4">
                                <span
                                    class="inline-flex overflow-hidden rounded-md border border-green-500 px-1
                                    py-0.5 text-xs font-medium text-green-500 bg-green-500/10">Sim</span>
                            </td>
                            <td class="p-4">
                                <button type="button"
                                        class="cursor-pointer whitespace-nowrap rounded-md bg-transparent p-0.5 font-semibold text-black outline-black hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 active:opacity-100 active:outline-offset-0 dark:text-white dark:outline-white">
                                    50
                                </button>
                            </td>
                            <td>
                                <!-- warning Modal -->
                                <div x-data="{ warningModalIsOpen: false }" class="flex gap-4 mr-3">
                                    <button @click="warningModalIsOpen = true" type="button"
                                            class="w-25 cursor-pointer whitespace-nowrap rounded-md bg-amber-500 px-4 py-2 text-center text-sm font-medium tracking-wide text-white transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-amber-500 active:opacity-100 active:outline-offset-0">
                                        Alterar
                                    </button>
                                    <div x-cloak
                                         x-show="warningModalIsOpen"
                                         class="fixed inset-0 z-30 flex items-center justify-center bg-black/20 p-4 sm:p-8 backdrop-blur-md"
                                         role="dialog"
                                         aria-modal="true"
                                         aria-labelledby="warningModalTitle">
                                        <!-- Modal Dialog -->
                                        <div x-show="warningModalIsOpen"
                                             x-transition:enter="transition ease-out duration-200 delay-100 motion-reduce:transition-opacity"
                                             x-transition:enter-start="opacity-0 scale-50"
                                             x-transition:enter-end="opacity-100 scale-100"
                                             class="flex max-w-lg flex-col gap-4 overflow-hidden rounded-md border border-neutral-300 bg-white text-neutral-600 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-300">
                                            <!-- Dialog Header -->
                                            <div
                                                class="flex items-center justify-between border-b border-neutral-300 bg-neutral-50/60 px-4 py-2 dark:border-neutral-700 dark:bg-neutral-950/20">
                                                <div
                                                    class="flex items-center justify-center rounded-full bg-amber-500/20 text-amber-500 p-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                         fill="currentColor" class="size-6" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                              d="M18 10a8 8 0 1 1-16 0 8 8 0 0 1 16 0Zm-8-5a.75.75 0 0 1 .75.75v4.5a.75.75 0 0 1-1.5 0v-4.5A.75.75 0 0 1 10 5Zm0 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z"
                                                              clip-rule="evenodd"/>
                                                    </svg>
                                                </div>
                                                <button @click="warningModalIsOpen = false" aria-label="close modal">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                         aria-hidden="true" stroke="currentColor" fill="none"
                                                         stroke-width="1.4" class="w-5 h-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              d="M6 18L18 6M6 6l12 12"/>
                                                    </svg>
                                                </button>
                                            </div>
                                            <!-- Dialog Body -->
                                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 p-6">
                                                <div class="flex flex-col gap-2 text-neutral-600 dark:text-neutral-300">
                                                    <label for="emailInput"
                                                           class="w-fit pl-0.5 text-sm">Quantidade</label>
                                                    <input id="emailInput" type="email"
                                                           class="w-full rounded-md border border-neutral-300 bg-neutral-50 px-2 py-2 text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black disabled:cursor-not-allowed disabled:opacity-75 dark:border-neutral-700 dark:bg-neutral-900/50 dark:focus-visible:outline-white"
                                                           name="email" autocomplete="email"/>
                                                </div>
                                                <div class="flex flex-col gap-2 text-neutral-600 dark:text-neutral-300">
                                                    <label for="emailInput" class="w-fit pl-0.5 text-sm">Preço</label>
                                                    <input id="emailInput" type="email"
                                                           class="w-full rounded-md border border-neutral-300 bg-neutral-50 px-2 py-2 text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black disabled:cursor-not-allowed disabled:opacity-75 dark:border-neutral-700 dark:bg-neutral-900/50 dark:focus-visible:outline-white"
                                                           name="email" autocomplete="email"/>
                                                </div>
                                                <div class="flex flex-col gap-2 text-neutral-600 dark:text-neutral-300">
                                                    <label for="os" class="w-fit pl-0.5 text-sm">Faturado</label>

                                                    <select id="os" name="os"
                                                            class="w-full appearance-none rounded-md border border-neutral-300 bg-neutral-50
                                                                px-2 py-2 text-sm focus-visible:outline focus-visible:outline-2
                                                                focus-visible:outline-offset-2 focus-visible:outline-black disabled:cursor-not-allowed
                                                                disabled:opacity-75 dark:border-neutral-700 dark:bg-neutral-900/50
                                                                dark:focus-visible:outline-white">
                                                        <option value="sim">Sim</option>
                                                        <option value="nao">Não</option>
                                                    </select>
                                                </div>
                                                <div class="flex flex-col gap-2 text-neutral-600 dark:text-neutral-300">
                                                    <label for="os" class="w-fit pl-0.5 text-sm">Retirado do Estoque</label>

                                                    <select id="os" name="os"
                                                            class="w-full appearance-none rounded-md border border-neutral-300 bg-neutral-50
                                                                px-2 py-2 text-sm focus-visible:outline focus-visible:outline-2
                                                                focus-visible:outline-offset-2 focus-visible:outline-black disabled:cursor-not-allowed
                                                                disabled:opacity-75 dark:border-neutral-700 dark:bg-neutral-900/50
                                                                dark:focus-visible:outline-white">
                                                        <option value="si">Sim</option>
                                                        <option value="no">Não</option>
                                                    </select>
                                                </div>
                                                <div class="flex flex-col gap-2 text-neutral-600 dark:text-neutral-300">
                                                    <label for="emailInput" class="w-fit pl-0.5 text-sm">Quantidade Retirada do Estoque</label>
                                                    <input id="emailInput" type="email"
                                                           class="w-full rounded-md border border-neutral-300 bg-neutral-50 px-2 py-2 text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black disabled:cursor-not-allowed disabled:opacity-75 dark:border-neutral-700 dark:bg-neutral-900/50 dark:focus-visible:outline-white"
                                                           name="email"
                                                           autocomplete="email"/>
                                                </div>

                                            </div>
                                            <!-- Dialog Footer -->
                                            <div
                                                class="flex items-center justify-center border-neutral-300 p-4 dark:border-neutral-700">
                                                <button @click="warningModalIsOpen = false" type="button"
                                                        class="w-full cursor-pointer whitespace-nowrap rounded-md bg-amber-500 px-4 py-2 text-center text-sm font-semibold tracking-wide text-white transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-amber-500 active:opacity-100 active:outline-offset-0">
                                                    Alterar
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- danger Modal -->
                                    <div x-data="{ dangerModalIsOpen: false }">
                                        <button @click="dangerModalIsOpen = true" type="button"
                                                class="w-25 cursor-pointer whitespace-nowrap rounded-md bg-red-500 px-4 py-2 text-center text-sm font-medium tracking-wide text-white transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-500 active:opacity-100 active:outline-offset-0">
                                            Excluir
                                        </button>
                                        <div x-cloak x-show="dangerModalIsOpen" x-transition.opacity.duration.200ms
                                             x-trap.inert.noscroll="dangerModalIsOpen"
                                             @keydown.esc.window="dangerModalIsOpen = false"
                                             @click.self="dangerModalIsOpen = false"
                                             class="fixed inset-0 z-30 flex items-end justify-center bg-black/20 p-4 pb-8 backdrop-blur-md sm:items-center lg:p-8"
                                             role="dialog" aria-modal="true" aria-labelledby="dangerModalTitle">
                                            <!-- Modal Dialog -->
                                            <div x-show="dangerModalIsOpen"
                                                 x-transition:enter="transition ease-out duration-200 delay-100 motion-reduce:transition-opacity"
                                                 x-transition:enter-start="opacity-0 scale-50"
                                                 x-transition:enter-end="opacity-100 scale-100"
                                                 class="flex max-w-lg flex-col gap-4 overflow-hidden rounded-md border border-neutral-300 bg-white text-neutral-600 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-300">
                                                <!-- Dialog Header -->
                                                <div
                                                    class="flex items-center justify-between border-b border-neutral-300 bg-neutral-50/60 px-4 py-2 dark:border-neutral-700 dark:bg-neutral-950/20">
                                                    <div
                                                        class="flex items-center justify-center rounded-full bg-red-500/20 text-red-500 p-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                             fill="currentColor" class="size-6" aria-hidden="true">
                                                            <path fill-rule="evenodd"
                                                                  d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16ZM8.28 7.22a.75.75 0 0 0-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 1 0 1.06 1.06L10 11.06l1.72 1.72a.75.75 0 1 0 1.06-1.06L11.06 10l1.72-1.72a.75.75 0 0 0-1.06-1.06L10 8.94 8.28 7.22Z"
                                                                  clip-rule="evenodd"/>
                                                        </svg>
                                                    </div>
                                                    <button @click="dangerModalIsOpen = false" aria-label="close modal">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                             aria-hidden="true" stroke="currentColor" fill="none"
                                                             stroke-width="1.4" class="w-5 h-5">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  d="M6 18L18 6M6 6l12 12"/>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <!-- Dialog Body -->
                                                <div class="px-4 text-center">
                                                    <h3 id="dangerModalTitle"
                                                        class="mb-2 font-semibold tracking-wide text-neutral-900 dark:text-white">
                                                        Excluir Produto</h3>
                                                    <p>Você tem certeza que gostaria de excluir esse produto?</p>
                                                </div>
                                                <!-- Dialog Footer -->
                                                <div
                                                    class="flex items-center justify-center border-neutral-300 p-4 dark:border-neutral-700">
                                                    <button @click="dangerModalIsOpen = false" type="button"
                                                            class="w-full cursor-pointer whitespace-nowrap rounded-md bg-red-500 px-4 py-2 text-center text-sm font-semibold tracking-wide text-white transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-500 active:opacity-100 active:outline-offset-0">
                                                        Excluir
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tbody>
                    </table>
                </div>

            </div>

        </div>


    </div>
</x-app-layout>
