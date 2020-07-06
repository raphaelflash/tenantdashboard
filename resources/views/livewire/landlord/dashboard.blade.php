@section('submenu')
<a href="{{url('project')}}" class="border-b-2 border-transparent hover:border-white flex items-center">
  <x-heroicon-s-plus  class="flex-shrink-0 mr-1.5 h-5 w-5 text-white"/>
  New
</a>
@endsection

<div>
  <div>
    <h3 class="text-lg leading-6 font-medium text-gray-900">
      Tenants
    </h3>
    <div class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
      <!-- Tenants  -->
      @foreach ($tenants as $tenant)
      <div  wire:click="showTenant({{$tenant['id']}})" class="bg-white overflow-hidden shadow rounded-lg hover:bg-gray-100 cursor-pointer">
        <div class="px-4 py-5 sm:p-6">
            <div class="flex items-center">
            <div class="flex-shrink-0 bg-gray-800 rounded-md p-3">
                <x-heroicon-o-terminal class="h-6 w-6 text-white"/>
            </div>
            <div class="ml-5 w-0 flex-1">
                <dl>
                <dt class="font-brand text-sm leading-5 font-medium text-gray-500 truncate">
                    {{$tenant['domain']}}
                </dt>
                <dd class="flex items-baseline">
                    <div class="font-brand text-2xl leading-8 text-gray-900">
                        {{$tenant['name']}}
                    </div>
                    <div class="@if($tenant['connected']) font-brand text-green-600 @enderror  ml-2 flex items-baseline text-sm leading-5 font-semibold text-red-500">
                        {{$tenant['database']}}
                    </div>
                </dd>
                </dl>
            </div>
            </div>
        </div>
    </div>
      @endforeach

    </div>
  </div>

  <!-- Modal  -->

</div>
