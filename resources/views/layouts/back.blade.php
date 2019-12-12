<!doctype html>
<html lang="en">
@include('back.includes.header')

<body>

<div class="wrapper">
    @include('back.includes.sidebar')
    <div class="main-panel">
        @include('back.includes.navbar')

        {{-- @include('back.includes.messages')  --}}

        @yield('content')

        @include('back.includes.footer')
    </div>

</div>


@yield('scripts')
</body>
</html>
