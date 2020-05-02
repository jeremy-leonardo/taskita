@prepend('styles')
<link rel="stylesheet" href="{{asset('css/catalog/_partials/rent-modal.css')}}?key=<?php echo date('d-M-y'); ?>" />
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
                <h2 class="modal-title"><b>Sewa</b></h2>
                <form method="POST" action="/rent">
                    {{ csrf_field() }}
                    <label class="input-label" for="duration">Durasi</label>
                    <select class="form-control" name="duration" id="durationSelection">
                        <option value="2">2 Hari</option>
                        <option value="3">3 Hari</option>
                        <option value="4">1 Minggu</option>
                        <option value="8">2 Minggu</option>
                    </select>
                    <br>
                    <label class="input-label" for="arriveDate">Tanggal Terima Tas</label>
                    <br>
                    <input class="form-control" name="arrive-date" type="date" id="arriveDate" value="2020-05-25">
                    <small id="helpArriveDate" class="form-text text-muted">Tanggal dalam format dd-MMM-yyyy (cth:
                        01-Jan-2020)</small>
                    <br>
                    <span>Total Harga:</span>
                    <div id="total"></div>
                    <p class="foot-red">*Total harga sudah termasuk ongkos kirim</p>

                    <input type="number" class="form-control" name="item" value="{{$item->item_id}}" hidden>

                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary action-btn" id="rentBtn">Sewa</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@prepend('inline-scripts')
<script>
    var formatter = new Intl.NumberFormat('en-US');
    $(document).ready(function(){

        function show(){
            var total = $('#durationSelection').val();
            total = total * {{($item->item_price)}};
            total += 10000;
            var price = 'Rp ' + formatter.format(total);
            $('#total').empty();
            $('#total').append(price);
        }

        function formatDate(date) {
            var d = new Date(date),
                month = '' + (d.getMonth() + 1),
                day = '' + d.getDate(),
                year = d.getFullYear();

            if (month.length < 2) 
                month = '0' + month;
            if (day.length < 2) 
                day = '0' + day;

            return [year, month, day].join('-');
        }

        $("#durationSelection").change(show);

        show();

        var date = new Date();

        date.setDate(date.getDate() + 1);
        $("#arriveDate").val(formatDate(date));
        
    });  


</script>
@endprepend