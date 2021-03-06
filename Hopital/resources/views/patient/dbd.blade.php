<x-app-layout>
    <x-slot name="header">
      <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
        <a href="{{route('patient.rdv')}}">ADD</a>
      </button>
<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="w-full min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Name
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Title
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Status
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Role
                </th>
                <th scope="col" class="relative px-6 py-3">
                  <span class="sr-only">Edit</span>
                </th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              @isset($rendez_vouses)
              @foreach ($rendez_vouses as $rendez_vous)
              <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="flex items-center">
                    <div class="flex-shrink-0 h-10 w-10">
                      {{$rendez_vous->id}}
                    </div>
                    <div class="ml-4">
                      <div class="text-sm font-medium text-gray-900">
                        {{$rendez_vous->firstname}}
                      </div>
                      <div class="text-sm text-gray-500">
                        {{$rendez_vous->lastname}}
                      </div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="text-sm text-gray-900">{{$rendez_vous->cin}}</div>
                  <div class="text-sm text-gray-500">{{$rendez_vous->naissance}}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="text-sm text-gray-900">{{$rendez_vous->address}}</div>
                  <div class="text-sm text-gray-500">{{$rendez_vous->ville}}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  <div class="text-sm text-gray-900">{{$rendez_vous->spec}}</div>
                  <div class="text-sm text-gray-500">{{$rendez_vous->desc}}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  {{-- <div class="text-sm text-gray-900">{{$rendez_vous->status}}</div> --}}
                  @if ($rendez_vous->status === 'confirmed')
                  <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                    Confirmed
                  </span>
                  @elseif ($rendez_vous->status === 'canceld')
                  <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                    Canceld
                  </span>
                  @else
                  <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                    Pending
                  </span>
                  @endif
                </td>
                <td>
                  
                  </td>
                {{-- <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  <div class="text-sm text-gray-900">{{$rendez_vous->status}}</div>
                </td> --}}
                {{-- <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                  <a href="{{route('rendez_vous.update', $rendez_vous->id)}}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                  <a href="{{route('rendez_vous.destroy', $rendez_vous->id)}}" class="text-red-600 hover:text-red-900">delete</a>
                </td> --}}
              </tr>
              @endforeach
              @endisset
  
              <!-- More people... -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  
    </x-slot>
</x-app-layout>