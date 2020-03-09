{{-- <div class="row">
    <div class="col-md-12 primary-navigation">
        <div class="row">
            <div class="col-md-4">
                <a href="/">
                    <img src="{{asset('image/logo-primary.svg')}}" alt="" class="logo-header">
                </a>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12 text-right">
                        <div class="row">
                            <div class="col-md-6"></div>
                            <div class="col-md-2 menu-text"><a class="deco-none" href="/">HOME</a></div>
                            <div class="col-md-2 menu-text"><a class="deco-none" href="/catalog">CATALOG</a></div>
                            <div class="col-md-2 menu-text"><a class="deco-none" href="#">LOGIN</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<nav class="navbar navbar-expand-lg navbar-light primary-navigation">
    <a class="navbar-brand mr-5" href="#"><img src="{{asset('image/logo-primary.svg')}}" alt="" class="logo-header"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse mt-2" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link deco-none mr-3" href="/">HOME</a>
        </li>
        <li class="nav-item">
            <a class="nav-link deco-none mr-3" href="/catalog">CATALOG</a>
        </li>
        <li class="nav-item">
            <a class="nav-link deco-none mr-3" href="/login">LOGIN</a>
        </li>
      </ul>
    </div>
</nav>