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
    <a class="navbar-brand mr-5" href="/"><img src="{{asset('image/logo-primary.svg')}}" alt="" class="logo-header"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse mt-2" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link deco-none fcolor-white mr-3" href="/">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link deco-none fcolor-white mr-3" href="/catalog">CATALOG</a>
            </li>
            <li class="nav-item">
                <a class="nav-link deco-none fcolor-white mr-3" href="#" data-toggle="modal" data-target="#loginModal">LOGIN</a>
            </li>
        </ul>
    </div>
</nav>

{{-- LOGIN MODAL --}}
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h2 class="loghead"><b>Login</b></h2>
                <label for="Username">Username</label>
                <input type="text" class="form-control">
                <br>
                <label for="Username">Password</label>
                <input type="Password" class="form-control">
                <br><br><br><br>
            
                <div class="row">
                    <div class="col-12 text-center">
                        <button class="btn btn-primary btnlog">Login</button>
                        <br><br><br>
                        <p class="akunn">Belum Memiliki Akun ?</p>
                        <a class="daftar" id="linkreg" data-dismiss="modal" data-target="#exampleModal1">Miliki di sini untuk mendaftar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
