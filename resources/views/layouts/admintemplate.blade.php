<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    @include('layouts.admin.partials._head')
</head>

<body
    class="nk-body bg-lighter npc-general has-sidebar font-circular-regular {{ Auth::user()->theme == 'dark' ? 'dark-mode' : '' }}"
    id="app">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            @include('layouts.admin.includes.sidebar')
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                @include('layouts.admin.includes._header')
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                {{-- @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"]) --}}
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                <div class="nk-footer">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright"> &copy; {{ date('Y') }} FEGOCOOSA. Powered by <a
                                    href="#">Fursee Inc.</a>
                            </div>
                            <div class="nk-footer-links">
                                <ul class="nav nav-sm">
                                    <li class="nav-item"><a class="nav-link" href="#">Terms</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Privacy</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Help</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    {{-- @jquery --}}
    <script src="/assets/admin/assets/js/bundle.js?ver=2.4.0"></script>
    <script src="/assets/admin/assets/js/scripts.js?ver=2.4.0"></script>
    <script src="/assets/admin/assets/js/charts/gd-default.js?ver=2.4.0"></script>
    <script src="/assets/admin/assets/js/example-toastr.js?ver=2.4.0"></script>
    @include('layouts.admin.flash-message')
    @stack('scripts')
    {{-- @toastr_js --}}
    {{-- @toastr_render --}}
    {{-- @livewire('livewire-ui-modal') --}}
    {{-- @livewireUIScripts --}}
    {{-- @livewireScripts --}}
</body>

</html>
