@extends('layouts.app')

@prepend('styles')
    <link rel="stylesheet" href="{{asset('css/home/index.css')}}?key=<?php echo date('d-M-y'); ?>" />
@endprepend

@section('content')

@include('layouts._partials.header-primary-menu')


<div class="row">
    <div class="col-12 section1-bg">

        <div class="row">
            <div class="col-xl-6 col-lg-5">
                <h1 class="main-text mb-4">Butuh Tas ?</h1>
                <div class="second-text-group">
                    <div class="second-text"><b>Sewa</b> sekarang juga di TasKita</div>
                    <div class="second-text pt-1">Pilih <b>sesuai kebutuhan</b></div>
                    <a name="" id="" class="btn btn-primary mt-5" href="/catalog" role="button">Lihat Catalog</a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-7 text-right">
                <img src="{{asset('/image/home/red-luggage.png')}}" class="luggage" alt="">
                <img src="{{asset('/image/home/handbag.png')}}" class="backpack" alt="">
            </div>
        </div>

    </div>
</div>


@endsection

@section('script')

@endsection