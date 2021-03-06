<?php 
$info = $this->session->flashdata('info');
if(!empty($info)){
	echo $info;
}?>
<div class="row">
    <div class="col-xs-12">
        <h4 class="header green lighter bigger">
            <i class="ace-icon fa fa-users red"></i>
            Edit Observasi
        </h4>
        <div class="space-6"></div>
        <p> Edit Data Inputan Dengan Benar : </p>
        <?= form_open('observasi/proses_edit',['class'=>'form-horizontal']) ?>

        <div class="form-group">
            <?= form_label('Nama','nama',['class'=>'col-sm-2 control-label no-padding-right']) ?>
            <label class="block clearfix col-xs-4">
                <span class="block input-icon input-icon-right">
                    <?= form_input('nama',$data['nama'],['class'=>'form-control','id'=>'nim','readonly'=>'true']) ?>
                    <i class="ace-icon fa fa-user"></i>
                </span>
            </label>
        </div>

        <div class="form-group">
            <?= form_label('Bulan','bln',['class'=>'col-sm-2 control-label no-padding-right']) ?>
            <label class="block clearfix col-xs-4">
                <span class="block input-icon input-icon-right">
                    <?= form_input('bulan',$data['bulan'],['class'=>'form-control','id'=>'bln','readonly'=>'true']) ?>
                    <i class="ace-icon fa fa-calendar"></i>
                </span>
            </label>
        </div>

        <?php foreach($username->result_array() as $us) : ?>
        <div class="form-group">
            <?= form_label($us['username'],$us['username'],['class'=>'col-sm-2 control-label no-padding-right']) ?>
            <label class="block clearfix col-xs-4">
                <span class="block input-icon input-icon-right">
                    <?= form_input($us['username'],$data[$us['username']],['class'=>'form-control','id'=>$us['username']]) ?>
                    <i class="ace-icon fa fa-certificate"></i>
                </span>
            </label>
        </div>
        <?php endforeach; ?>

        <?= form_hidden('id',$data['id']) ?>

        <div class="space-24"></div>

        <div class="clearfix form-actions">
            <div class="col-md-offset-1 col-md-9">
                <span class="bigger-110">
                    <?= form_submit('submit','Kirim',['class'=>'btn btn-success']) ?>
                </span>
            </div>
        </div>
        <?= form_close() ?>
    </div>
</div>