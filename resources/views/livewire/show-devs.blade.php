<div>

    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
          <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
              <thead class="bg-gray-50">
                <tr>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Dev
                  </th>

                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Ações
                </th>





                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200">


                @foreach ($users as $user )

                <tr>

                  <td class="px-6 py-4 whitespace-nowrap">


                    <div class="flex items-center">
                        <div class="flex-shrink-0 h-10 w-10">
                          <img class="h-10 w-10 rounded-full" src="{{ $user['avatar_url'] }}" alt="">
                        </div>
                        <div class="ml-4">
                          <div class="text-sm font-medium text-gray-900">
                            {{ $user['login'] }}
                          </div>

                        </div>
                      </div>


                  </td>


                  <td class="px-6 py-4 whitespace-nowrap">



                    <div class="flex items-center">

                        <div class="ml-4">
                          <div class="text-sm font-medium text-gray-900">
                            <x-button wire:click="setDev('{{ $user['login'] }}')"> Ver perfil  </x-button>
                          </div>

                        </div>
                      </div>


                  </td>



                </tr>

                @endforeach




                <x-modal wire:model="showDevModal">


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

                                <form method="POST" wire:submit.prevent="vote('{{ $devName }}')" class="w-full max-w-lg">


                                        <div class="flex flex-wrap -mx-3 mb-6">
                                          <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                              Nome
                                            </label>
                                            <input readonly value="{{ $devName }}" wire:model="devName"  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="email" id="email" type="email" placeholder="E-mail">




                                          </div>
                                          <div class="w-full md:w-1/2 px-3">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                                              Quantidade de repositórios
                                            </label>
                                            <input readonly  value="{{ $qtdRepo }}"  wire:model="qtdRepo"  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="email" id="email" type="email" placeholder="E-mail">
                                            @error('email')
                                                <x-validade-message>  {{ $message }}  </x-validade-message>
                                            @enderror


                                          </div>
                                        </div>


                                        <div class="flex flex-wrap -mx-3 mb-6">

                                            <div class="w-full md:w-1/2 px-3 mt-2">
                                              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                                                <a target="_blank" href="{{ $githubLink }}">  <img class="w-10 h-10" src="{{ url('img/github.png') }}" alt="">  </a>
                                              </label>

                                            </div>
                                          </div>


                                        <div class="flex flex-wrap -mx-3 mb-2">

                                            <select wire:model="profile" class="block w-52 text-gray-700 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500" name="animals">
                                                <option selected disabled value="">
                                                    Escolha o perfil
                                                </option>
                                                <option value="ruim">
                                                    Ruim
                                                </option>
                                                <option value="bom">
                                                    Bom
                                                </option>
                                                <option value="muito-bom">
                                                    Muito bom
                                                </option>


                                            </select>


                                          <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                            <x-button type='submit' > Avaliar </x-button>
                                          </div>


                                        </div>
                                      </form>


                                </div>
                            </div>
                        </div>
                    </div>



                </x-modal>


                <!-- More people... -->
              </tbody>
            </table>

            <div class="p-3 float-right">
                <x-button wire: wire:click="decrement()" >Previus</x-button>



                <x-button wire:click="increment()">Next</x-button>
            </div>



          </div>
        </div>
      </div>
    </div>





</div>
