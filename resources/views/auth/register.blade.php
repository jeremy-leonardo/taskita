@extends('layouts.app')

@prepend('styles')
<link rel="stylesheet" href="{{asset('css/auth/register.css')}}?key=<?php echo date('d-M-y'); ?>" />
@endprepend


@section('content')

@include('layouts._partials.header-primary-menu')


<div class="row">
    <div class="col-12 d-flex justify-content-center">
        <div class="card">

            <h2 class="text-center"><b>Register</b></h2>

            <form method="POST" action="/register">
                {{ csrf_field() }}
                <label class="input-label" for="Name">Nama</label>
                <input name="name" type="text" id="name" placeholder="Nama" class="form-control">
                <br>
                <label class="input-label" for="Email">Email</label>
                <input name="email" type="email" id="email" placeholder="Email" class="form-control">
                <br>
                <label class="input-label" for="Password">Password</label>
                <input name="password" type="password" id="password" placeholder="Password" class="form-control">
                <br>
                <label class="input-label" for="Password">Konfirmasi Password</label>
                <input name="password-confirmation" type="password" id="passwordConfirmation" placeholder="Password"
                    class="form-control">
                <br>
                <label class="input-label" for="Phone Number">Nomor Telepon</label>
                <input name="phone-number" type="text" id="phoneNumber" placeholder="Nomor Telepon"
                    class="form-control">
                <br>
                <label class="input-label" for="Adress">Alamat</label>
                <input name="address" type="text" id="address" placeholder="Alamat" class="form-control">
                <br>
                <label class="input-label" for="NIK">NIK (Nomor KTP)</label>
                <input name="nik" type="text" id="nik" placeholder="NIK" class="form-control">
                <br>
                @if($errors->any() && $errors->all()[0] != "Failed to log in")
                <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    @foreach($errors->all() as $error)
                    {{ $error }}<br>
                    @endforeach
                </div>
                @endif
                <div class="row">
                    <div class="col-12 text-center">
                        <button class="btn btn-primary action-btn">Register</button>
                        <p class="foot-text">Sudah Memiliki Akun ?</p>
                        <a class="foot-action-text cursor-pointer" id="login-action-text" data-dismiss="modal"
                            data-toggle="modal" data-target="#loginModal">Klik di sini untuk login</a>
                    </div>
                </div>
            </form>

        </div>

    </div>
</div>


@endsection

@section('script')

@endsection