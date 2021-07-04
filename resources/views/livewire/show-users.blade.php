<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">

                <section class="text-gray-600 body-font">
                    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">

                        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">


                            @if (session()->has('message'))

                                <x-flash-message-success>  {{ session('message') }}  </x-flash-message-success>

                            @endif

                            @if (session()->has('message-error'))

                            <x-flash-message-error  >  {{ session('message-error') }}  </x-flash-message-error>

                            @endif


                            <form method="POST"  wire:submit.prevent="create" >

                                <div class="w-full max-w-xs">

                                    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                                        <div class="mb-4">
                                            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                                Nome
                                            </label>
                                            <input wire:model="name"
                                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                id="name" name="name" type="text" placeholder="Nome completo...">

                                            @error('name')
                                                <x-validade-message>  {{ $message }}  </x-validade-message>
                                            @enderror


                                        </div>



                                        <div class="mb-4">
                                            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                                                E-mail
                                            </label>
                                            <input wire:model="email"
                                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                id="email" name="email" type="email" placeholder="E-mail...">
                                                @error('email')
                                                    <x-validade-message>  {{ $message }}  </x-validade-message>
                                                @enderror


                                        </div>



                                        <div class="mb-6">
                                            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                                                Senha
                                            </label>
                                            <input wire:model="password"
                                                class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                                                id="password" name="password" type="password" placeholder="Senha...">

                                                @error('password')
                                                    <x-validade-message>  {{ $message }}  </x-validade-message>
                                                @enderror




                                        </div>
                                        <div class="flex items-center justify-between">
                                            <button
                                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                                type="submit">
                                                Cadastrar
                                            </button>

                                        </div>
                                    </form>

                                </div>

                            </form>

                        </div>



                        <div class="container mx-auto px-4 sm:px-8 max-w-3xl">
                            <div class="py-8">
                                <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                                    <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                                        <table class="min-w-full leading-normal">
                                            <thead>
                                                <tr>
                                                    <th scope="col"
                                                        class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                                        Nome
                                                    </th>

                                                    <th scope="col"
                                                        class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                                        E-mail
                                                    </th>
                                                    <th scope="col"
                                                        class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                                        Função
                                                    </th>

                                                    <th scope="col"
                                                        class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                                        Opções
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>


                                                @foreach ($users as $user )

                                                <tr>
                                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                        <div class="flex items-center">
                                                            <div class="flex-shrink-0">
                                                                <a href="#" class="block relative">
                                                                    <img alt="profil" src="/images/person/8.jpg"
                                                                        class="mx-auto object-cover rounded-full h-10 w-10 " />
                                                                </a>
                                                            </div>
                                                            <div class="ml-3">
                                                                <p class="text-gray-900 whitespace-no-wrap">
                                                                    {{ $user->name }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                        <p class="text-gray-900 whitespace-no-wrap">
                                                            {{ $user->email }}
                                                        </p>
                                                    </td>
                                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                        <p class="text-gray-900 whitespace-no-wrap">
                                                            {{ $user->role }}
                                                        </p>
                                                    </td>


                                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">


                                                    </td>
                                                </tr>

                                                @endforeach





                                            </tbody>
                                        </table>
                                        {{ $users->links() }}



                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </section>


            </div>
        </div>
    </div>
</div>
