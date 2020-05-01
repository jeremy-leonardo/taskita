@extends('layouts.app')

@prepend('styles')
<link rel="stylesheet" href="{{asset('css/order/index.css')}}?key=<?php echo date('d-M-y'); ?>" />
@endprepend

@section('content')

@include('layouts._partials.header-primary-menu')


<div class="row">
    <div class="col-12">

        <div class="order-box">

            <div class="row">
                <div class="col-12">
                    <h1 class="order-page-title">
                        Order Saya
                    </h1>
                </div>
                <div class="col-12">
                    @foreach($transactions as $transactions)
                    <div class="order-card">
                        <div class="row">
                            <div class="col-lg-2 col-md-4">
                                <div class="img-box text-center">
                                    <img class="item-img" src="{{asset('image/item/1.png')}}" alt="item image">
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-4">
                                <div class="mb-4 mt-3">
                                    {{$transaction->item_name}}
                                </div>
                                <div class="status mb-2">
                                    {{$transaction->status_name}}
                                </div>
                                <div class="status-description mb-2">
                                    Kembalikan pada
                                    {{$transaction->arrive_date->modify('+'. $transaction->rent_duration .' day')}}
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-4">
                                <div class="text-right order-date d-none d-md-block">
                                    {{$transaction->created_at}}
                                </div>
                                <div class="mb-2">
                                    Pembayaran via {{$transaction->payment_type_name}}
                                </div>
                                <div class="mb-2">
                                    <b>
                                        Rp {{number_format($transaction->total_charge)}}
                                    </b>
                                </div class="mb-2">
                                <div>Untuk {{$transaction->rent_duration}} hari</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @if(count($transactions) == 0)
                    <div class="text-center">
                        Anda belum pernah melakukan order
                    </div>
                    @endif
                </div>
            </div>

        </div>

    </div>
</div>


@endsection