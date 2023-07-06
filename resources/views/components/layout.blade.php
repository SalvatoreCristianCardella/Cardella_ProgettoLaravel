<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$titlepage ?? 'questa pagina non ha nome'}}</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    @livewireStyles
  </head>
  <body>
    <x-navbar/>
    <div class="min-vh-100 mt-5">
      <div class="mt-5">
        @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif

      </div>

        {{$slot}}
    </div>
    <x-footer/>
    @livewireScripts
  </body>
</html>