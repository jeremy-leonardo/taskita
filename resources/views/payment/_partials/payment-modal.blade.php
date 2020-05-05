@prepend('styles')
<link rel="stylesheet" href="{{asset('css/payment/_partials/payment-modal.css')}}?key=<?php echo date('d-M-y'); ?>" />
@endprepend

{{-- LOGIN MODAL --}}
<div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="paymentModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div>
                <button type="button" class="close close-custom" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h2 class="modal-title"><b>Pembayaran</b></h2>
                <!-- PAYMENT FORM -->
                <form method="POST" action="/pay">
                    {{ csrf_field() }}                    
                    <label class="input-label" for="price">Harga</label>
                    <div>
                        Rp ...
                    </div>
                    <div>
                        *Total harga sudah termasuk ongkos kirim
                    </div>
                    <br>
                    <label class="input-label" for="payment-type">Metode Pembayaran</label>
                    @php
                    $payment_types = DB::table('payment_type')->get();
                    @endphp
                    <select class="form-control" name="payment-type" id="payment-typeSelection">
                        @foreach($payment_types as $payment_type)
                        <option value="{{$payment_type->payment_type_id}}">{{$payment_type->payment_type_name}}</option>
                        @endforeach
                    </select>
                    <br>

                    <input name="transaction" type="number" id="selectedTransaction" class="form-control" hidden>
                    <input name="item" type="number" id="selectedItem" class="form-control" hidden>

                    @if($errors->any())
                    <div class="alert alert-danger alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        @foreach($errors->all() as $error)
                        {{ $error }}<br>
                        @endforeach
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary action-btn" onclick="">Bayarkan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
