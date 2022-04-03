<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Exquisite Writers </title>
    @include('layouts.front.partials._head')
</head>

<body>

    <!-- PreLoader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>
    <!--Preloader-->

    @include('layouts.front.includes.nav')

    @yield('content')

    @include('layouts.front.includes.footer')

    @include('layouts.front.partials._scripts')

    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <div class="elfsight-app-4156069a-2f0d-46bc-b912-4c5a53ebc269"></div>

    @include('sweetalert::alert')

</body>

</html>
