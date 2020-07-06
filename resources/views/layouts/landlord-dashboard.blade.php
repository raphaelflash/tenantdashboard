 @extends('layouts.app')

 @section('content')
<div
    style=" background-color: #ffffff; background-image: url(&quot;data:image/svg+xml,%3Csvg width='84' height='48' viewBox='0 0 84 48' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M0 0h12v6H0V0zm28 8h12v6H28V8zm14-8h12v6H42V0zm14 0h12v6H56V0zm0 8h12v6H56V8zM42 8h12v6H42V8zm0 16h12v6H42v-6zm14-8h12v6H56v-6zm14 0h12v6H70v-6zm0-16h12v6H70V0zM28 32h12v6H28v-6zM14 16h12v6H14v-6zM0 24h12v6H0v-6zm0 8h12v6H0v-6zm14 0h12v6H14v-6zm14 8h12v6H28v-6zm-14 0h12v6H14v-6zm28 0h12v6H42v-6zm14-8h12v6H56v-6zm0-8h12v6H56v-6zm14 8h12v6H70v-6zm0 8h12v6H70v-6zM14 24h12v6H14v-6zm14-8h12v6H28v-6zM14 8h12v6H14V8zM0 8h12v6H0V8z' fill='%23434f53' fill-opacity='0.18' fill-rule='evenodd'/%3E%3C/svg%3E&quot;);"
>
  <div class="bg-gray-900 pb-32">

    <header class="py-10">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="mt-2 flex items-center font-brand text-sm leading-5 text-white sm:mr-6">
        <svg   fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" width="40.0" viewBox="0 0 24 24">
          <g id="icon_cube" transform="translate(-505 -3004)">
              <path id="Path_4205" data-name="Path 4205" d="M486.939,3.626V6.269H488.6V1.591L484.3,0l-.561,1.591,2.058.772L478.612,6.6l-7.228-4.257c.515-.187,1.193-.444,2.058-.772L472.881,0s-3.649,1.357-3.743,1.4l-.538.211V6.292h1.661V3.649L477.77,8.07v8.7c-.468-.351-1.1-.8-1.965-1.4l-.936,1.38,3.743,2.667,3.743-2.69-.959-1.38-1.965,1.427V8.07l7.509-4.444Z" transform="translate(36.4 3004)"/>
          </g>
        </svg>
        <div>
          <x-hx class="text-white ml-5">
            Tenants
          </x-hx>
          <div class="ml-5 mt-4 flex items-center font-brand text-sm leading-5 text-white sm:mr-6">
            @yield('submenu')
        </div>

        </div>

      </div>

      </div>
    </header>
  </div>

  <main class="-mt-32">
    <div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:px-8">
      <div class="bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6 min-h-screen">
        @yield('content')
      </div>
    </div>
  </main>
</div>
@overwrite
