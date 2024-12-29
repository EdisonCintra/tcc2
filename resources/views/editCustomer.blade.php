<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar Cliente') }}
        </h2>
    </x-slot>

    <div class="py-12">

        {{--        {{ dd($customer) }}--}}

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <article
                        class="group flex flex-col rounded-md overflow-hidden border border-neutral-300 bg-white text-neutral-600 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-300 mx-auto w-full max-w-none">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 p-6">
                            <div class="flex flex-col gap-2 text-neutral-600 dark:text-neutral-300">
                                <label for="nameInput" class="w-fit pl-0.5 text-sm">Nome do Cliente</label>
                                <input id="nameInput" type="text"
                                       class="w-full rounded-md border border-neutral-300 bg-neutral-50 px-6 py-4 text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black disabled:cursor-not-allowed disabled:opacity-75 dark:border-neutral-700 dark:bg-neutral-900/50 dark:focus-visible:outline-white"
                                       name="name" placeholder="Digite seu nome" autocomplete="name" value=" {{ $customer->name }}"/>
                            </div>
                            <div class="flex flex-col gap-2 text-neutral-600 dark:text-neutral-300">
                                <label for="phoneInput" class="w-fit pl-0.5 text-sm">Telefone</label>
                                <input id="phoneInput" type="text"
                                       class="w-full rounded-md border border-neutral-300 bg-neutral-50 px-6 py-4 text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black disabled:cursor-not-allowed disabled:opacity-75 dark:border-neutral-700 dark:bg-neutral-900/50 dark:focus-visible:outline-white"
                                       x-mask="(99) 99999-9999" name="phone" placeholder="(99) 99999-9999" value=" {{ $customer->phone }}"/>
                            </div>
                            <div class="flex flex-col gap-2 text-neutral-600 dark:text-neutral-300">
                                <label for="emailInput" class="w-fit pl-0.5 text-sm">Email</label>
                                <input id="emailInput" type="email"
                                       class="w-full rounded-md border border-neutral-300 bg-neutral-50 px-6 py-4 text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black disabled:cursor-not-allowed disabled:opacity-75 dark:border-neutral-700 dark:bg-neutral-900/50 dark:focus-visible:outline-white"
                                       name="email" placeholder="Digite seu email" autocomplete="email" value=" {{ $customer->email }}"/>
                            </div>
                            <div class="flex flex-col gap-2 text-neutral-600 dark:text-neutral-300">
                                <label for="cpfInput" class="w-fit pl-0.5 text-sm">CPF</label>
                                <input id="cpfInput" type="text"
                                       class="w-full rounded-md border border-neutral-300 bg-neutral-50 px-6 py-4 text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black disabled:cursor-not-allowed disabled:opacity-75 dark:border-neutral-700 dark:bg-neutral-900/50 dark:focus-visible:outline-white"
                                       name="cpf" placeholder="Digite seu CPF" autocomplete="off" value=" {{ $customer->cpf }}"/>
                            </div>

                            <div class="flex flex-col gap-2 text-neutral-600 dark:text-neutral-300">
                                <label for="os" class="w-fit pl-0.5 text-sm">Status</label>

                                <select id="os" name="os"
                                        class="w-full appearance-none rounded-md border border-neutral-300 bg-neutral-50 px-6 py-4 text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black disabled:cursor-not-allowed disabled:opacity-75 dark:border-neutral-700 dark:bg-neutral-900/50 dark:focus-visible:outline-white">
                                    <option selected>Selecione Status</option>
                                    <option value="mac">Tipo 1</option>
                                    <option value="windows">Tipo 2</option>
                                    <option value="linux">Tipo 3</option>
                                </select>
                            </div>

                        </div>
                    </article>
                </div>
                <button type="button"
                        class="cursor-pointer whitespace-nowrap rounded-md bg-green-500 mb-10 mr-5 ml-6 px-4 py-2 text-sm font-medium tracking-wide text-white transition hover:opacity-75 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-500 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-green-500 dark:text-white dark:focus-visible:outline-green-500">
                    Salvar
                </button>
                <button type="button"
                        class="cursor-pointer whitespace-nowrap rounded-md bg-red-500 px-4 py-2 text-sm font-medium tracking-wide text-white transition hover:opacity-75 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-500 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-red-500 dark:text-white dark:focus-visible:outline-red-500">
                    Cancelar
                </button>

            </div>
        </div>
    </div>
</x-app-layout>
