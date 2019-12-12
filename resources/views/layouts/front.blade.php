<!DOCTYPE html>
<html lang="en">
@include('front.includes.header')
@yield('styles')
<body>
<div class="body-inner">
    @include('front.includes.bar')

    @include('front.includes.navbar')

    <div class="row">
        <div class="col-6">

            @include('front.includes.messages')

            {{--@yield('scripts')--}}

            {{--@include('flash::message')--}}
        </div>
    </div>

    @yield('content')

    @include('front.includes.footer')

</div>
<a id="scrollTop"><i class="icon-chevron-up1"></i><i class="icon-chevron-up1"></i></a>
<script src="{{ asset('public/js/front/jquery.js') }}"></script>
<script src="{{ asset('public/js/front/plugins.js') }}"></script>

<script src="{{ asset('public/js/front/functions.js') }}"></script>

</body>
</html>
