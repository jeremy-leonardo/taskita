@prepend('styles')
    <link rel="stylesheet" href="{{asset('css/layouts/_partials/login-modal.css')}}?key=<?php echo date('d-M-y'); ?>" />
@endprepend

{{-- LOGIN MODAL --}}
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h2 class="modal-title"><b>Login</b></h2>
                <label for="Username">Username</label>
                <input type="text" class="form-control">
                <br>
                <label for="Username">Password</label>
                <input type="Password" class="form-control">
                <div class="row">
                    <div class="col-12 text-center">
                        <button class="btn btn-primary action-btn">Login</button>
                        <p class="foot-text">Belum Memiliki Akun ?</p>
                        <a class="foot-action-text" id="register-action-text" data-dismiss="modal" data-target="#exampleModal1">Klik di sini untuk mendaftar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
