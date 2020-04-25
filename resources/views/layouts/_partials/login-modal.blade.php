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
                <!-- LOGIN FORM -->
                <form method="POST" action="/register">
                    {{ csrf_field() }}
                    <label class="input-label" for="Email">Email</label>
                    <input type="email" id="email" placeholder="Email" class="form-control">
                    <br>
                    <label class="input-label" for="Password">Password</label>
                    <input type="password" id="password" placeholder="Password" class="form-control">
                    <br>
                    @if($errors->any())
                    <div class="alert alert-danger alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        @foreach($errors->all() as $error)
                        {{ $error }}<br>
                        @endforeach
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary action-btn">Login</button>
                            <p class="foot-text">Belum Memiliki Akun ?</p>
                            <a class="foot-action-text cursor-pointer" id="register-action-text" data-dismiss="modal"
                                data-toggle="modal" data-target="#registerModal">Klik di sini untuk mendaftar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>