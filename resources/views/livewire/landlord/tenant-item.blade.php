@section('submenu')
<a href="{{url('/dashboard')}}" class="border-b-2 border-transparent hover:border-white flex items-center">
  <x-heroicon-s-view-list  class="flex-shrink-0 mr-1.5 h-5 w-5 text-white"/>
  List
</a>
@endsection

<div>

<div class="mt-10 sm:mt-0">
  <div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1">
      <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium leading-6 text-gray-900">Tenant Information</h3>
        <p class="mt-1 text-sm leading-5 text-gray-600">
          Configure your databases with the rigth domain.
        </p>
      </div>
    </div>
    <div class="mt-5 md:mt-0 md:col-span-2">
      <form action="#" method="POST"  wire:submit.prevent="save">
        <div class="shadow overflow-hidden sm:rounded-md">
          <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">

              <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                <label for="city" class="block text-sm font-medium leading-5 text-gray-700">Name</label>
                <input id="city"  wire:model="name" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
              </div>

              <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                <label for="state" class="block text-sm font-medium leading-5 text-gray-700">Domain</label>
                <input id="state" wire:model="domain" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
              </div>

              <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                <label for="postal_code" class="block text-sm font-medium leading-5 text-gray-700">Database</label>
                <input id="postal_code" wire:model="db" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
              </div>
            </div>
          </div>
          <div class="px-4 py-3 bg-gray-50 text-right sm:px-6 ">
             @if ($status)
                <x-heroicon-s-sparkles  class=" h-5 w-5  text-green-400"/>
            @else
                <x-heroicon-s-sparkles  class=" h-5 w-5  text-gray-200"/>
            @endif
            <button class="py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-gray-900 shadow-sm hover:bg-gray-600 focus:outline-none focus:shadow-outline-gray-600 active:bg-gray-600 transition duration-150 ease-in-out">
              Save
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

@if($needMigration)
<div class="hidden sm:block">
  <div class="py-5">
    <div class="border-t border-gray-200"></div>
  </div>
</div>

<div class="mt-10 sm:mt-0">
  <div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1">
      <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium leading-6 text-gray-900">Migrations</h3>
        <p class="mt-1 text-sm leading-5 text-gray-600">
         Check and run the migrations
        </p>
      </div>
    </div>
    <div class="mt-5 md:mt-0 md:col-span-2">
      <form action="#" method="POST" wire:submit.prevent="migrate">
        <div class="shadow overflow-hidden sm:rounded-md">
          <div class="px-4 py-5 bg-white sm:p-6">
              <p>This tenant hasnt been migrated</p>
          </div>
          <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            <button class="py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-gray-900 shadow-sm hover:bg-gray-600 focus:outline-none focus:shadow-outline-gray-600 active:bg-gray-600 transition duration-150 ease-in-out">
              Migrate
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endif


<div class="hidden sm:block">
  <div class="py-5">
    <div class="border-t border-gray-200"></div>
  </div>
</div>

<div class="mt-10 sm:mt-0">
  <div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1">
      <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium leading-6 text-gray-900">Products</h3>
        <p class="mt-1 text-sm leading-5 text-gray-600">
          Assign Products for this tenant
        </p>
      </div>
    </div>
    <div class="mt-5 md:mt-0 md:col-span-2">
    <form action="#" method="POST">
        <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
                <div class="grid grid-cols-6 gap-6">
                    <fieldset>
                    <legend class="text-base leading-6 font-medium text-gray-900">Products</legend>
                    <div class="mt-4">
                        <div class="flex items-start">
                        <div class="absolute flex items-center h-5">
                            <input id="comments" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" />
                        </div>
                        <div class="pl-7 text-sm leading-5">
                            <p for="comments" class="font-medium text-gray-700">Vouchers</p>
                        </div>
                        </div>
                        <div class="mt-4">
                        <div class="flex items-start">
                            <div class="absolute flex items-center h-5">
                            <input id="candidates" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" />
                            </div>
                            <div class="pl-7 text-sm leading-5">
                            <p for="candidates" class="font-medium text-gray-700">Tickets</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    </fieldset>
                </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            <button class="py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-gray-900 shadow-sm hover:bg-gray-600 focus:outline-none focus:shadow-outline-gray-600 active:bg-gray-600 transition duration-150 ease-in-out">
              Assign
            </button>
          </div>
        </div>
      </form>
    </div>
    </div>
  </div>
</div>

</div>
