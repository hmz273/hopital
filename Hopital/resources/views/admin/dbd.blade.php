<x-app-layout>
    <x-slot name="header">
        <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
            <a href="{{route('admin.add')}}">ADD</a>
          </button>
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                  <table class="w-full min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                      <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                          ID
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                          Firstname
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                          Lastname
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                          CIN
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                          Specialit√©
                        </th>
                        <th scope="col" class="relative px-6 py-3">
                          <span class="sr-only">Edit</span>
                        </th>
                      </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                      @isset($doctors)
                      @foreach ($doctors as $doctor)
                      <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                          {{$doctor->id}}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                          {{$doctor->fname}}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                          {{$doctor->lname}}
                        </td>
                        {{-- <td class="px-6 py-4 whitespace-nowrap">
                          <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                              {{$doctor->id}}
                            </div>
                            <div class="ml-4">
                              <div class="text-sm font-medium text-gray-900">
                                {{$doctor->fname}}
                              </div>
                              <div class="text-sm text-gray-500">
                                {{$doctor->lname}}
                              </div>
                            </div>
                          </div>
                        </td> --}}
                        <td class="px-6 py-4 whitespace-nowrap">
                          <div class="text-sm text-gray-900">{{$doctor->telephone}}</div>
                          {{-- <div class="text-sm text-gray-500"></div> --}}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                          {{$doctor->spec}}
                        </td>
                        {{-- <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                          Admin
                        </td> --}}
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                          <a href="{{route('admin.update', $doctor->id)}}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                        </td>
                        <td><a href="{{route('admin.destroy', $doctor->id)}}" class="text-red-600 hover:text-red-900">Delete</a></td>
                      </tr>
                      @endforeach
                      @endisset
                      <!-- More people... -->
                    </tbody>
                  </table>
                  {{-- {{ $doctor->links()}} --}}
                </div>
              </div>
            </div>
          </div>

    </x-slot>
</x-app-layout>