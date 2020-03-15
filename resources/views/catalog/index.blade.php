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
    <div class="col-12 pb-5">

        <div class="row">
            <div class="col-12">
                <div class="search-nav pt-1 pb-1">
                    <form action="" method="get">
                        <div class="row">
                            <div class="col-md-7 col-12  pt-1 pb-1">
                                <!-- <label for=""></label> -->
                                <input type="text" name="" id="" class="form-control"
                                    placeholder="Cari tas yang Anda inginkan" aria-describedby="helpId">
                            </div>
                            <div class="col-md-4 col-sm-10 col-xs-9 pt-1 pb-1">
                                <!-- <label for=""></label> -->
                                <select class="form-control" name="" id="">
                                    <option>Semua</option>
                                    <option>Koper</option>
                                    <option>Backpack</option>
                                    <option>Tas Wanita</option>
                                </select>
                            </div>
                            <div class="col-md-1 col-sm-2 col-xs-3 pt-1 pb-1">
                                <button type="submit" class="btn btn-primary search-btn">S</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <a class="deco-none" href="/catalog/detail/1">
                    <div class="item-box">
                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="img-box mt-3 mb-3">
                                    <img class="item-img" src="{{asset('/image/home/red-luggage.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-12 mt-3 mb-3">
                                <div class="item-name mb-2">Polo X13 Red</div>
                                <div class="item-price">
                                    Rp 12,000 / hari
                                </div>
                                <div class="or">atau</div>
                                <div class="item-price">
                                    Rp 42,000 / minggu
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <div class="item-box">
                </div>
            </div>
            <div class="col-md-3">
                <div class="item-box">
                </div>
            </div>
            <div class="col-md-3">
                <div class="item-box">
                </div>
            </div>
        </div>

    </div>
</div>


@endsection

@section('script')

@endsection