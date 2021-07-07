
    {{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script> --}}

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Devs com votos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="py-3">



                        <select wire:model="profile"  class="block w-52 text-gray-700 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500" name="animals">



                            <option  selected value="todos">
                                Todos
                            </option>

                            <option  value="ruim">
                                Ruim
                            </option>
                            <option  value="bom">
                                Bom
                            </option>
                            <option  value="muito-bom">
                                Muito bom
                            </option>


                        </select>

                    </div>




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
                                    Perfil
                                  </th>

                                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Github
                                  </th>


                                </tr>
                              </thead>
                              <tbody class="bg-white divide-y divide-gray-200">


                                @foreach ($devs  as $dev )

                                <tr>

                                    <td class="px-6 py-4 whitespace-nowrap">


                                      <div class="flex items-center">
                                          <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-full" src="{{ url($dev->avatar) }}" alt="">
                                          </div>
                                          <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                              {{ $dev->dev }}
                                            </div>

                                          </div>
                                        </div>


                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap">


                                        <div class="flex items-center">

                                            <div class="ml-4">
                                              <div class="text-sm font-medium text-gray-900">
                                                {{ $dev->profile }}
                                              </div>

                                            </div>
                                          </div>

                                      </td>

                                      <td class="px-6 py-4 whitespace-nowrap">

                                        <div class="flex items-center">

                                            <div class="ml-4">
                                              <div class="text-sm font-medium text-gray-900">
                                                <a target="_blank" href="{{ $dev->github_url }}"> Github </a>
                                              </div>

                                            </div>
                                          </div>


                                      </td>

                                      <td class="px-6 py-4 whitespace-nowrap">


                                      </td>


                                  </tr>


                                @endforeach



                                <!-- More people... -->
                              </tbody>
                            </table>

                            <div class="p-3">
                                {{-- {{ $devs->links() }} --}}
                            </div>



                          </div>
                        </div>
                      </div>
                    </div>





                </div>
            </div>
        </div>
    </div>

