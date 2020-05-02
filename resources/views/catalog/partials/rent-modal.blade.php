@prepend('styles')
<link rel="stylesheet" href="{{asset('css/catalog/partials/rent-modal.css')}}?key=<?php echo date('d-M-y'); ?>" />
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
@endprepend

<div class="modal fade" id="rentModal" tabindex="-1" role="dialog" aria-labelledby="rentModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div>
                <button type="button" class="close close-custom" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h2 class="modal-title"><b>SEWA</b></h2>
                <!-- LOGIN FORM -->
                <form method="" action="">
                <label class="input-label" for ="Durasi">Durasi</label>
                <select class="form-control" id="Select">
                  <option value="2">2 Hari</option>
                  <option value="3">3 Hari</option>
                  <option value="4">1 Minggu</option>
                  <option value="8">2 Minggu</option>
                </select>
                <br>   
                <label class="input-label" for ="tglterima">Tanggal Terima Tas</label>
                <br>
                <input class="form-control" type="date" id="tgl">
                <br> 
                <span>Total Harga:</span>
                <div id="total"></div>
                <script>
                $(document).ready(function(){

                    function show(){
                        var tot = $('#Select').val();
                        tot = tot * {{($item->item_price)}};
                        tot += 10000;
                        $('#total').empty();
                        $('#total').append(tot);
                    }

                    $("#Select").change(show);
                    show();
                });  
                </script>
                <p class="foot-red">*Total harga sudah termasuk ongkos kirim</p>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary action-btn" id="btnSewa">Sewa</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
