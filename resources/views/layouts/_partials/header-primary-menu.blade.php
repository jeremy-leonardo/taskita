@prepend('styles')
<link rel="stylesheet"
    href="{{asset('css/layouts/_partials/header-primary-menu.css')}}?key=<?php echo date('d-M-y'); ?>" />
@endprepend

<nav class="navbar navbar-expand-lg navbar-light primary-navigation">
    <a class="navbar-brand mr-5" href="/"><img src="{{asset('image/logo-primary.svg')}}" alt="" class="logo-header"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse mt-2" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link deco-none fcolor-white mr-3 nav-menu" href="/">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link deco-none fcolor-white mr-3 nav-menu" href="/catalog">CATALOG</a>
            </li>
            @if(Auth::guard('web')->check())
            <li class="nav-item">
                <a class="nav-link deco-none fcolor-white mr-3 nav-menu" href="/order">MY ORDERS</a>
            </li>
            @endif
            @if(Auth::guard('web')->check())
            <li class="nav-item dropdown d-lg-none">
                <a class="nav-link dropdown-toggle nav-menu fcolor-white" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Halo, {{Auth::guard('web')->user()->user_name}}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/logout">Logout</a>
                </div>
            </li>
            @else
            <li class="nav-item d-lg-none">
                <a class="nav-link deco-none fcolor-white mr-3 nav-menu" href="#" data-toggle="modal"
                    data-target="#loginModal">LOGIN</a>
            </li>
            @endif
        </ul>
    </div>
    @if(Auth::guard('web')->check())
    {{-- <span class="navbar-text d-none d-lg-block">
        <a class="nav-link deco-none fcolor-white mr-3 nav-menu">Halo, {{Auth::guard('web')->user()->user_name}}</a>
    </span> --}}
    <li class="nav-item dropdown d-none d-lg-block">
        <a class="nav-link dropdown-toggle nav-menu fcolor-white" href="#" id="navbarDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Halo, {{Auth::guard('web')->user()->user_name}}
        </a>
        <div class="dropdown-menu nav-dropdown-custom" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/logout">Logout</a>
        </div>
    </li>
    @else
    <span class="navbar-text d-none d-lg-block">
        <a class="nav-link deco-none fcolor-white mr-3 nav-menu" href="#" data-toggle="modal"
            data-target="#loginModal">LOGIN</a>
    </span>
    @endif
</nav>

@include('auth._partials.login-modal')
{{-- @include('auth._partials.register-modal') --}}