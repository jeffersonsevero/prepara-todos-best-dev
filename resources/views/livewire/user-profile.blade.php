<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Meu Perfil') }}
    </h2>
</x-slot>

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

                <form method="POST" wire:submit.prevent="update"    class="w-full max-w-lg">
                    <div class="flex flex-wrap -mx-3 mb-6">
                      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                          Nome
                        </label>
                        <input wire:model="name"  value="{{ $user->name }}"   class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="name" id="name" type="text" placeholder="Nome..">
                        @error('name')
                            <x-validade-message>  {{ $message }}  </x-validade-message>
                        @enderror




                      </div>
                      <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                          E-mail
                        </label>
                        <input wire:model="email" value="{{ $user->email }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="email" id="email" type="email" placeholder="E-mail">
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

