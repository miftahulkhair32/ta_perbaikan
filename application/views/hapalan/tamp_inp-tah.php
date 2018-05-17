<div class="row">
    <div class="col-xs-12">
        <h3 class="header smaller lighter blue">Input Form Tahfizh</h3>
        <?php $info = $this->session->flashdata('info');
        if(!empty($info)){
            echo $info;
        } ?>
        <div class="clearfix"></div>
        <div class="table-header">
            <div class="col-xs-3">
                <strong>Nama</strong> : <?= $this->session->userdata('nama'); ?>
            </div> 
            <strong>Bulan</strong> : <?= $bulan ?>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="center">Tanggal</th>
                            <th class="center">Hafalan</th>
                            <th class="center">Tajwid</th>
                            <th class="center">Makna</th>
                            <th class="center">Jumlah</th>
                        </tr>
                    </thead>
                    <?= form_open('hapalan/proses_input') ?>
                    <tbody>
                        <tr>
                            <td class="center">
                                <input class="from-control date-picker col-xs-12" type="date" name="tgl1">
                            </td>
                            <td class="center">
                                <?= form_input('kesalahan1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'i1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('kelancaran1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'i1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('makna1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'i1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'i1','rel'=>'e']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="center">
                                <input class="from-control date-picker col-xs-12" type="date" name="tgl2">
                            </td>
                            <td class="center">
                                <?= form_input('kesalahan2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'i2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('kelancaran2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'i2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('makna2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'i2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'i2','rel'=>'e']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="center">
                                <input class="from-control date-picker col-xs-12" type="date" name="tgl3">
                            </td>
                            <td class="center">
                                <?= form_input('kesalahan3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'i3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('kelancaran3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'i3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('makna3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'i3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'i3','rel'=>'e']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="center">
                                <input class="from-control date-picker col-xs-12" type="date" name="tgl4">
                            </td>
                            <td class="center">
                                <?= form_input('kesalahan4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'i4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('kelancaran4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'i4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('makna4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'i4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'i4','rel'=>'e']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="center">
                                <input class="from-control date-picker col-xs-12" type="date" name="tgl5">
                            </td>
                            <td class="center">
                                <?= form_input('kesalahan5','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'i5']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('kelancaran5','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'i5']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('makna5','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'i5']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'i5','rel'=>'e']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="center">
                                <input class="from-control date-picker col-xs-12" type="date" name="tgl6">
                            </td>
                            <td class="center">
                                <?= form_input('kesalahan6','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'i6']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('kelancaran6','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'i6']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('makna6','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'i6']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'i6','rel'=>'e']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="center">
                                <input class="from-control date-picker col-xs-12" type="date" name="tgl7">
                            </td>
                            <td class="center">
                                <?= form_input('kesalahan7','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'i7']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('kelancaran7','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'i7']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('makna7','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'i7']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'i7','rel'=>'e']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="center">
                                <input class="from-control date-picker col-xs-12" type="date" name="tgl8">
                            </td>
                            <td class="center">
                                <?= form_input('kesalahan8','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'i8']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('kelancaran8','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'i8']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('makna8','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'i8']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'i8','rel'=>'e']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="center">
                                <input class="from-control date-picker col-xs-12" type="date" name="tgl9">
                            </td>
                            <td class="center">
                                <?= form_input('kesalahan9','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'i9']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('kelancaran9','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'i9']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('makna9','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'i9']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'i9','rel'=>'e']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="center">Jumlah Halaman Yang di Hafal Terakhir</td>
                            <td colspan="3" class="center">
                                <?= form_input('halam','',['class'=>'col-xs-12','placeholder'=>'Halaman']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" class="center">Total</td>
                            <td class="center">
                                <?= form_input('total','',['class'=>'input-mini','readonly'=>'true','id'=>'total']) ?>
                            </td>
                        </tr>
                        <?= form_hidden('bulan',$bulan) ?>
                        <?= form_hidden('user',$this->session->userdata('id')) ?>
                    </tbody>
                </table>
                <div>
                    <?= form_submit('submit','KIRIM',['class'=>'btn btn-primary']) ?>
                </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>
<script>
    function ha(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))

        return false;
      return true;
    }
</script>
<script>
    $(document).ready(function(){
        var a = "input[rel=i1]";
        $('input').bind('keyup',function(){
            var av=0;
            $(a).each(function() {
                if(this.value !='') av += parseInt(this.value,10);
            $('#i1').val(av);
            });
        });
        var b = "input[rel=i2]";
        $('input').bind('keyup',function(){
            var av=0;
            $(b).each(function() {
                if(this.value !='') av += parseInt(this.value,10);
            $('#i2').val(av);
            });
        });
        var c = "input[rel=i3]";
        $('input').bind('keyup',function(){
            var av=0;
            $(c).each(function() {
                if(this.value !='') av += parseInt(this.value,10);
            $('#i3').val(av);
            });
        });
        var d = "input[rel=i4]";
        $('input').bind('keyup',function(){
            var av=0;
            $(d).each(function() {
                if(this.value !='') av += parseInt(this.value,10);
            $('#i4').val(av);
            });
        });
        var e = "input[rel=e]";
        $('input').bind('keyup',function(){
            var av=0;
            $(e).each(function() {
                if(this.value !='') av += parseInt(this.value,10);
            $('#total').val(av);
            });
        });
        var f = "input[rel=i5]";
        $('input').bind('keyup',function(){
            var av=0;
            $(f).each(function() {
                if(this.value !='') av += parseInt(this.value,10);
            $('#i5').val(av);
            });
        });
        var g = "input[rel=i6]";
        $('input').bind('keyup',function(){
            var av=0;
            $(g).each(function() {
                if(this.value !='') av += parseInt(this.value,10);
            $('#i6').val(av);
            });
        });
        var h = "input[rel=i7]";
        $('input').bind('keyup',function(){
            var av=0;
            $(h).each(function() {
                if(this.value !='') av += parseInt(this.value,10);
            $('#i7').val(av);
            });
        });
        var i = "input[rel=i8]";
        $('input').bind('keyup',function(){
            var av=0;
            $(i).each(function() {
                if(this.value !='') av += parseInt(this.value,10);
            $('#i8').val(av);
            });
        });
        var j = "input[rel=i9]";
        $('input').bind('keyup',function(){
            var av=0;
            $(j).each(function() {
                if(this.value !='') av += parseInt(this.value,10);
            $('#i9').val(av);
            });
        });
    });
</script>