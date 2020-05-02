@extends('layouts.app')

@prepend('styles')
<link rel="stylesheet" href="{{asset('css/catalog/detail.css')}}?key=<?php echo date('d-M-y'); ?>" />
@endprepend

@section('content')

@include('layouts._partials.header-primary-menu')


<div class="row">
    <div class="col-12 pb-3 pt-5">

        <div class="row">
            <div class="col-md-6 text-center">
                @php
                $imgSrc = '/image/item/' . $item->item_id . '.png';
                @endphp
                <img class="big-item-img" src="{{asset($imgSrc)}}" alt="">
            </div>
            <div class="col-md-6 pt-3">
                <div class="row">
                    <div class="col-12 mb-4">
                        <div class="row">
                            <div class="col-12 item-name"><b>{{$item->item_name}}</b></div>
                        </div>
                    </div>
                    <div class="col-12 mb-4">
                        <div class="row">
                            <div class="col-12 mb-1"><b>Harga:</b></div>
                            <div class="col-12 item-price">Rp {{number_format($item->item_price)}} / hari</div>
                            <div class="col-12 or">atau</div>
                            <div class="col-12 item-price">Rp {{number_format($item->item_price * 4)}} / minggu</div>
                        </div>
                    </div>
                    <div class="col-12 mb-4">
                        <div class="row">
                            <div class="col-12 mb-1"><b>Tipe:</b></div>
                            <div class="col-12">{{$item->item_type_name}}</div>
                            <div class="col-12 mb-1"><b>Brand:</b></div>
                            <div class="col-12">{{$item->brand_name}}</div>
                        </div>
                    </div>
                    <div class="col-12 mb-4">
                        <div class="row">
                            <div class="col-12 mb-1"><b>Deskripsi:</b></div>
                            <div class="col-12">{{$item->item_description}}</div>
                            {{-- <div class="col-12">Berat: 700 gram</div> --}}
                            {{-- <div class="col-12">Warna: merah</div> --}}
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12">
                                @if(Auth::guard('web')->check())
                                <button class="btn btn-primary"
                                data-toggle="modal" data-target="#rentModal"
                                >Sewa</button>
                                @else
                                <button class="btn btn-primary"
                                data-toggle="modal" data-target="#loginModal"
                                >Sewa</button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@include('catalog._partials.rent-modal')

@endsection

@section('script')

@endsection