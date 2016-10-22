@include('partials._head')


@include('partials._nav')


<div class="container">

@include('partials._flash_message')

 @yield('content')
</div>

@include('partials._footer')
