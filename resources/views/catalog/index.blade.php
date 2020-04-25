@extends('layouts.app')

@prepend('styles')
    <link rel="stylesheet" href="{{asset('css/catalog/index.css')}}?key=<?php echo date('d-M-y'); ?>" />
@endprepend

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