<!DOCTYPE html>
<html lang="en">

    <head>
        @include('layouts.partials.header')
    </head>

    <body>

        @include('layouts.partials.nav')

        <div class="container"> <!-- container start -->
            @yield('content')
        </div> <!-- container end -->

        @include('layouts.partials.scripts')

    </body>

</html>