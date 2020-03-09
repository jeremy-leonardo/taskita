@extends('layouts.app')

@section('style')

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