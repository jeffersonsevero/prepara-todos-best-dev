
    {{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script> --}}

<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Usuários') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">


                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                          <thead class="bg-gray-50">
                            <tr>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Nome
                              </th>

                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                E-mail
                              </th>

                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Tipo de usuário
                              </th>


                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Ações
                              </th>






                            </tr>
                          </thead>
                          <tbody class="bg-white divide-y divide-gray-200">


                            @foreach ($users  as $user )

                            <tr>

                                <td class="px-6 py-4 whitespace-nowrap">


                                  <div class="flex items-center">
                                      <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="{{ url($user->avatar) }}" alt="">
                                      </div>
                                      <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                          {{ $user->name }}
                                        </div>

                                      </div>
                                    </div>


                                </td>

                                <td class="px-6 py-4 whitespace-nowrap">


                                    <div class="flex items-center">

                                        <div class="ml-4">
                                          <div class="text-sm font-medium text-gray-900">
                                            {{ $user->email }}
                                          </div>

                                        </div>
                                      </div>


                                  </td>

                                  <td class="px-6 py-4 whitespace-nowrap">


                                    <div class="flex items-center">

                                        <div class="ml-4">
                                          <div class="text-sm font-medium text-gray-900">
                                            {{ $user->role }}
                                          </div>

                                        </div>
                                      </div>


                                  </td>

                                  <td class="px-6 py-4 whitespace-nowrap">


                                    <div class="flex items-center">

                                        <div class="ml-4">
                                          <div class="text-sm font-medium text-gray-900 flex">

                                            <svg wire:click="edit({{ $user->id }})"  xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cursor-pointer text-gray-500 hover:text-yellow-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                              </svg>

                                              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cursor-pointer hover:text-red-500 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                              </svg>

                                          </div>

                                        </div>
                                      </div>


                                  </td>


                              </tr>


                            @endforeach




                            <x-modal wire:model="showEditModal" >


                                <div class="py-12">
                                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                            <div class="p-6 bg-white border-b border-gray-200">


                                                <div>

                                                    @if (session()->has('message'))

                                                    <x-flash-message-success>  {{ session('message') }}  </x-flash-message-success>

                                                    @endif

                                                    @if (session()->has('message-error'))

                                                    <x-flash-message-error  >  {{ session('message-error') }}  </x-flash-message-error>

                                                    @endif


                                                </div>

                                                <form method="POST" wire:submit.prevent="update" class="w-full max-w-lg">
                                                    <div class="flex flex-wrap -mx-3 mb-6">
                                                      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                                          Nome
                                                        </label>
                                                        <input wire:model="name"   class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="name" id="name" type="text" placeholder="Nome..">
                                                        @error('name')
                                                            <x-validade-message>  {{ $message }}  </x-validade-message>
                                                        @enderror




                                                      </div>
                                                      <div class="w-full md:w-1/2 px-3">
                                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                                                          E-mail
                                                        </label>
                                                        <input wire:model="email"  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="email" id="email" type="email" placeholder="E-mail">
                                                        @error('email')
                                                            <x-validade-message>  {{ $message }}  </x-validade-message>
                                                        @enderror


                                                      </div>
                                                    </div>
                                                    <div class="flex flex-wrap -mx-3 mb-6">
                                                      <div class="w-full px-3">
                                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                                          Nova senha
                                                        </label>
                                                        <input wire:model="password"  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="password" name="password" type="password" placeholder="******">
                                                        @error('password')
                                                            <x-validade-message>  {{ $message }}  </x-validade-message>
                                                        @enderror



                                                      </div>
                                                    </div>
                                                    <div class="flex flex-wrap -mx-3 mb-2">
                                                      <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                                        <x-button type='submit' >  Atualizar </x-button>
                                                      </div>


                                                    </div>
                                                  </form>


                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </x-modal>

                            {{ $users->links() }}


                            <!-- More people... -->
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>





            </div>
        </div>
    </div>
</div>

