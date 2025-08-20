{{-- Header --}}
@include('layout.header')
  <body>

{{-- //Navber - --}}
@include('assets.navber')

{{-- Main content wrapper --}}

{{-- Main content  --}}
    <div class="container">
        @yield('content')
    </div>
    


    {{-- Footer --}}
@include('layout.footer')