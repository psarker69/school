<!DOCTYPE html>
<html lang="en">
  <head>

    <title>@yield('title', Auth::user()->name)</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('backend.layout.inc.style')

  </head>
  <body class="app sidebar-mini">

    @include('backend.layout.inc.header')

    @include('backend.layout.inc.sidebar-menu')

    @yield('main_contents')

    @include('backend.layout.inc.script')

    @if ($errors->any())
        <script>
            @foreach ($errors->all() as $error)
                toastr.error("{{$error}}")
            @endforeach
        </script>
    @endif

  </body>
</html>
