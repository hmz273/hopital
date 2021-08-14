<x-app-layout>
  <x-slot name="header">
  <div class="mt-10 sm:mt-0 ">
  <div class="md:grid md:grid-cols-3 md:gap-6 ">
    <div class="mt-5 md:mt-0 md:col-span-2">
      <form action="/rendez_vous" method="POST">
        @csrf
        <div class="shadow overflow-hidden sm:rounded-md">
          <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-3">
                <label for="first-name" class="block text-sm font-medium text-gray-700">First name</label>
                <input type="text" name="firstname" id="first-name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="last-name" class="block text-sm font-medium text-gray-700">Last name</label>
                <input type="text" name="lastname" id="last-name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-4">
                {{-- <label  class="block text-sm font-medium text-gray-700">Email</label> --}}
                <input type="number" value ="{{auth()->id()}}" name="ptn_id" hidden>
                {{-- @foreach ($users as $user) --}}
                {{-- <input type="number" value ="{{auth()->id()}}" name="user_id" hidden > --}}
                    {{-- <p value="{{$user->id}}">{{$user->firstname}}</p> --}}
                    {{-- {{auth()->id()}} --}}
                {{-- @endforeach --}}
              </div>

              {{-- <div class="col-span-6 sm:col-span-3">
                <label for="country" class="block text-sm font-medium text-gray-700">Date</label>
                <input type="text"  class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div> --}}

              <div class="col-span-6">
                <label for="street-address" class="block text-sm font-medium text-gray-700">Address</label>
                <input type="text" name="address" id="street-address" autocomplete="street-address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                <input type="text" name="ville" id="city" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                <label for="state" class="block text-sm font-medium text-gray-700">CIN</label>
                <input type="text" name="cin" id="state" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                <label for="postal-code" class="block text-sm font-medium text-gray-700">Date de naissance</label>
                <input type="text" name="naissance"  class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                <label for="postal-code" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea name="desc" class="resize border rounded-md"></textarea>
              </div>

              <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                <label for="postal-code" class="block text-sm font-medium text-gray-700">Doctor</label>
                <select name="dct_id" class="w-full border bg-white rounded px-3 py-2 outline-none text-gray-700">
                  @foreach ($doctors as $doctor)
                    <option value="{{$doctor->id}}">{{$doctor->fname}}</option>
                @endforeach
              </select>
              </div>
            </div>
          </div>
          <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              {{-- <a href="\redirects">save</a> --}}
              add
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</x-slot>
</x-app-layout>