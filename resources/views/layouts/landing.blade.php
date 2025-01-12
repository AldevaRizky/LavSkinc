<!DOCTYPE html>
<html lang="en">
@include('partials.Landing.head')
<body class="bg-gray-100 text-gray-800 font-sans">
  @include('partials.Landing.navbar')
  
  <main>
    @yield('content')
  </main>

  @include('partials.Landing.footer')
  @include('partials.Landing.scripts')
</body>
</html>
