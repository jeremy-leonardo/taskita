@extends('layouts.app')

@section('style')
<style>
    .pink-bg {
        background: #ffa3a3;
    }

    .main-text {
        margin-top: 20vh;
        margin-left: 5%;
        font-style: normal;
        font-weight: bold;
        font-size: 48px;
        line-height: 56px;
    }

    .second-text-group {
        margin-left: 5%;
    }

    .second-text {
        font-style: normal;
        font-size: 28px;
        line-height: 33px;
    }

    .luggage {
        z-index: 1;
    }

    .backpack {
        margin-top: 90px;
        margin-left: -210px;
        width: 30vw;
    }

    .luggage {
        width: 30vw;
    }

    @media screen and (max-width: 990px) {
        .luggage {
            margin: 0;
            width: 40vw;
        }

        .backpack {
            margin-left: -20vw;
            width: 40vw;
        }
    }
</style>
@endsection

@section('content')

@include('layouts._partials.header-primary-menu')


<div class="row">
    <div class="col-12 pink-bg">

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
                <img src="{{asset('/image/home/red-backpack.png')}}" class="backpack" alt="">
            </div>
        </div>

    </div>
</div>


@endsection

@section('script')

@endsection