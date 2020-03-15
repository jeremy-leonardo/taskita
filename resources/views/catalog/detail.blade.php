@extends('layouts.app')

@section('style')
<style>
    .search-nav {
        /* width: 90%; */
        margin: 50px auto 50px auto;
        /* height: 50px; */

        background: #ffffff;
        border: 1px solid #d6d6d6;
        box-sizing: border-box;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.05);
        border-radius: 4px;
    }

    .search-btn {
        width: 100%;
    }

    .item-box {
        /* width: 202px; */
        /* height: 353px; */
        background: #ffffff;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.25);
        border-radius: 10px;
    }

    .item-img {
        width: 80%;
    }

    .img-box {
        background: linear-gradient(180deg, #ffdada 0%, rgba(255, 255, 255, 0) 100%), #ffffff;
        border: 1px solid #d6d6d6;
        box-sizing: border-box;
        border-radius: 10px;
    }

    .item-name {
        font-family: Roboto;
        font-style: normal;
        font-weight: normal;
        font-size: 18px;
        color: #000000;
    }

    .item-price {
        font-family: Roboto;
        font-style: normal;
        font-weight: bold;
        font-size: 16px;
        color: #8c2020;
    }

    .or {
        font-family: Roboto;
        font-style: normal;
        font-weight: normal;
        font-size: 14px;
        line-height: 16px;
        color: #6a6a6a;
    }
</style>
@endsection

@section('content')

@include('layouts._partials.header-primary-menu')


<div class="row">
    <div class="col-12 pb-3 pt-5">

        <div class="row">
            <div class="col-md-6 text-center">
                <img class="item-img" src="{{asset('/image/home/red-luggage.png')}}" alt="">
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-12 mb-4">
                        <div class="row">
                            <div class="col-12 item-name"><b>Polo X13 Red</b></div>
                        </div>
                    </div>
                    <div class="col-12 mb-4">
                        <div class="row">
                            <div class="col-12 mb-1"><b>Harga:</b></div>
                            <div class="col-12 item-price">Rp 12,000 / hari</div>
                            <div class="col-12 or">atau</div>
                            <div class="col-12 item-price">Rp 42,000 / minggu</div>
                        </div>
                    </div>
                    <div class="col-12 mb-4">
                        <div class="row">
                            <div class="col-12 mb-1"><b>Spesfikasi:</b></div>
                            <div class="col-12">Ukuran: 20 inch</div>
                            <div class="col-12">Berat: 700 gram</div>
                            <div class="col-12">Warna: merah</div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Sewa</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


@endsection

@section('script')

@endsection