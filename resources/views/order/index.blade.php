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
                    @foreach($transactions as $transaction)
                    <div class="order-card">
                        <div class="row">
                            <div class="col-lg-2 col-md-4">
                                <div class="img-box text-center">
                                    <img class="item-img" src="{{asset('image/item/'.$transaction->item_id.'.png')}}" alt="item image">
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
                                    {{date ( 'Y-m-d', strtotime($transaction->transaction_arrive_date. '+ '. $transaction->transaction_rent_duration .' days'))}}
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-4">
                                <div class="text-right order-date d-none d-md-block">
                                    {{$transaction->created_at}}
                                </div>
                                <div class="mb-2 mt-2">
                                    @if($transaction->payment_id)
                                    Pembayaran via {{$transaction->payment_type_name}}                                   
                                    @endif
                                </div>
                                <div class="mb-2">
                                    <b>
                                        Rp {{number_format($transaction->total_charge)}}
                                    </b>
                                </div class="mb-2">
                                <div>Untuk {{$transaction->transaction_rent_duration}} hari</div>
                                @if(!$transaction->payment_id)
                                <div class="mb-2 mt-4">
                                    <button class="btn btn-primary pay-button" onclick="changeSelectedTransaction('{{$transaction->transaction_id}}', '{{$transaction->item_id}}')" data-toggle="modal" data-target="#paymentModal">Bayar</button>
                                </div>
                                @endif
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

@include('payment._partials.payment-modal')

@endsection

@push('inline-scripts')

<script>
    function changeSelectedTransaction(transactionID, itemID){
        $("#selectedTransaction").val(transactionID);
        $("#selectedItem").val(itemID);
    }
</script>

@endpush