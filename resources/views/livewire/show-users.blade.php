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

                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cursor-pointer text-gray-500 hover:text-yellow-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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

