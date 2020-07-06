@extends('layouts.app')
@section('content')
<div class="min-h-screen bg-gray-500 flex flex-col justify-center py-12 sm:px-6 lg:px-8"
 style=" background-color: #ffffff; background-image: url(&quot;data:image/svg+xml,%3Csvg width='84' height='48' viewBox='0 0 84 48' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M0 0h12v6H0V0zm28 8h12v6H28V8zm14-8h12v6H42V0zm14 0h12v6H56V0zm0 8h12v6H56V8zM42 8h12v6H42V8zm0 16h12v6H42v-6zm14-8h12v6H56v-6zm14 0h12v6H70v-6zm0-16h12v6H70V0zM28 32h12v6H28v-6zM14 16h12v6H14v-6zM0 24h12v6H0v-6zm0 8h12v6H0v-6zm14 0h12v6H14v-6zm14 8h12v6H28v-6zm-14 0h12v6H14v-6zm28 0h12v6H42v-6zm14-8h12v6H56v-6zm0-8h12v6H56v-6zm14 8h12v6H70v-6zm0 8h12v6H70v-6zM14 24h12v6H14v-6zm14-8h12v6H28v-6zM14 8h12v6H14V8zM0 8h12v6H0V8z' fill='%23434f53' fill-opacity='0.18' fill-rule='evenodd'/%3E%3C/svg%3E&quot;);">
  <div class="sm:mx-auto sm:w-full sm:max-w-md">
    <img class="mx-auto h-12 w-auto" src="{{ asset('img/vc3.png') }}" alt="vc" />
  </div>

  <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
    @yield('content')
  </div>
</div>
@overwrite