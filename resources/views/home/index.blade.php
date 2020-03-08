@extends('layouts.app')

@section('style')

@endsection

@section('content')

@include('layouts._partials.header-primary-menu')


<div class="row">
  <div class="col-12 pink-bg">

    <div class="row">
      <div class="col-md-6">
        <h1 class="main-text mb-4">Butuh Tas ?</h1>
        <div class="second-text-group">
          <div class="second-text"><b>Sewa</b> sekarang juga di TasKita</div>
          <div class="second-text">Pilih <b>sesuai kebutuhan</b></div>
          <a name="" id="" class="btn btn-primary mt-5" href="#" role="button">Lihat Catalog</a>
        </div>
      </div>
      <div class="col-md-6">
        <img src="{{asset('/image/home/red-luggage.png')}}" class="luggage" alt="">
        <img src="{{asset('/image/home/red-backpack.png')}}" class="backpack-abs" alt="">
      </div>
    </div>

  </div>
</div>


@endsection  

@section('script')

@endsection


