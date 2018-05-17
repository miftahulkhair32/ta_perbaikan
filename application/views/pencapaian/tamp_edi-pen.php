<?php 
$info = $this->session->flashdata('info');
if(!empty($info)){
	echo $info;
}?>
<div class="row">
    <div class="col-xs-12">
        <h4 class="header green lighter bigger">
            <i class="ace-icon fa fa-users red"></i>
            Edit Pencapaian
        </h4>
        <div class="space-6"></div>
        <p> Edit Data Inputan Dengan Benar : </p>

        <div class="clearfix"></div>
        <div class="table-header">
            <div class="col-xs-3">
                <strong>Nama</strong> : <?= $data['nama'] ?>
            </div> 
            <strong>Bulan</strong> : <?= $data['bulan'] ?>
        </div>
        <div class="row">
            <div class="col-xs-12">
            <?= form_open('pencapaian/proses_edit') ?>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th rowspan="2" colspan="2" class="center">NO</th>
                        <th rowspan="2" class="center">RENCANA</th>
                        <th rowspan="2" class="center">TARGET</th>
                        <th class="center">PENCAPAIAN</th>
                    </tr>
                    <tr>
                        <th class="center">NILAI 1-100</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="center">A</td>
                        <td></td>
                        <td colspan="4"><strong>Pelaksanaan Program Kegiatan Santri</strong></td>
                    </tr>
                    <tr>
                        <td class="center"></td>
                        <td></td>
                        <td>Program Harian</td>
                        <td>Mengikuti seluruh kegiatan harian tanpa terlambat</td>
                        <td>
                            <?= form_input('na1',$data['na1'],['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="center"></td>
                        <td></td>
                        <td>Program Pekanan</td>
                        <td>Mengikuti seluruh kegiatan pekanan tanpa terlambat</td>
                        <td>
                            <?= form_input('na2',$data['na2'],['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="center"></td>
                        <td></td>
                        <td>Program Bulanan</td>
                        <td>Mengikuti seluruh kegiatan bulanan tanpa terlambat</td>
                        <td>
                            <?= form_input('na3',$data['na3'],['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="center"></td>
                        <td></td>
                        <td>Program Tahunan</td>
                        <td>Mengikuti seluruh kegiatan tahunan tanpa terlambat</td>
                        <td>
                            <?= form_input('na4',$data['na4'],['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="center">B</td>
                        <td></td>
                        <td><strong>Tahsin Tilawah</strong></td>
                        <td>
                            <?= form_input('b1',$data['b1'],['class'=>'col-xs-12','placeholder'=>'Target']) ?>
                        </td>
                        <td>
                            <?= form_input('nb1',$data['nb1'],['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="center">C</td>
                        <td></td>
                        <td><strong>Tahfidz Qur'an</strong></td>
                        <td>
                            <?= form_input('c1',$data['c1'],['class'=>'col-xs-12','placeholder'=>'Target']) ?>
                        </td>
                        <td>
                            <?= form_input('nc1',$data['nc1'],['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="center">D</td>
                        <td></td>
                        <td colspan="4"><strong>Aplikasi 10 Karakter Muslim Tangguh</strong></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="center">1</td>
                        <td colspan="4"><strong>SALIMUL AQIDAH (Aqidah yang bersih)</strong></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Allah dulu, allah lagi, allah terus dalam segala aktivitas</td>
                        <td>
                            <?= form_input('d1a',$data['d1a'],['class'=>'col-xs-12','placeholder'=>'Target']) ?>
                        </td>
                        <td>
                            <?= form_input('nd1a',$data['nd1a'],['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="center">2</td>
                        <td colspan="4"><strong>SHAHIHUL IBADAH  (Ibadah Yang Benar)</strong></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Shalat</td>
                        <td>
                            <?= form_input('d2a',$data['d2a'],['class'=>'col-xs-12','placeholder'=>'Target']) ?>
                        </td>
                        <td>
                            <?= form_input('nd2a',$data['nd2a'],['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Puasa</td>
                        <td>
                            <?= form_input('d2b',$data['d2b'],['class'=>'col-xs-12','placeholder'=>'Target']) ?>
                        </td>
                        <td>
                            <?= form_input('nd2b',$data['nd2b'],['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Tilawah & Tadabbur Qur'an</td>
                        <td>
                            <?= form_input('d2c',$data['d2c'],['class'=>'col-xs-12','placeholder'=>'Target']) ?>
                        </td>
                        <td>
                            <?= form_input('nd2c',$data['nd2c'],['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Dzikir dan Muhasabah</td>
                        <td>
                            <?= form_input('d2d',$data['d2d'],['class'=>'col-xs-12','placeholder'=>'Target']) ?>
                        </td>
                        <td>
                            <?= form_input('nd2d',$data['nd2d'],['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="center">3</td>
                        <td colspan="4"><strong>MATINUL KHULUQ (Akhlak Yang Kokoh)</strong></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Adab Muamalah</td>
                        <td>
                            <?= form_input('d3a',$data['d3a'],['class'=>'col-xs-12','placeholder'=>'Target']) ?>
                        </td>
                        <td>
                            <?= form_input('nd3a',$data['nd3a'],['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Kewarganegaraan</td>
                        <td>
                            <?= form_input('d3b',$data['d3b'],['class'=>'col-xs-12','placeholder'=>'Target']) ?>
                        </td>
                        <td>
                            <?= form_input('nd3b',$data['nd3b'],['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Penampilan Diri</td>
                        <td>
                            <?= form_input('d3c',$data['d3c'],['class'=>'col-xs-12','placeholder'=>'Target']) ?>
                        </td>
                        <td>
                            <?= form_input('nd3c',$data['nd3c'],['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Adab Makan</td>
                        <td>
                            <?= form_input('d3d',$data['d3d'],['class'=>'col-xs-12','placeholder'=>'Target']) ?>
                        </td>
                        <td>
                            <?= form_input('nd3d',$data['nd3d'],['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Adab Tidur</td>
                        <td>
                            <?= form_input('d3e',$data['d3e'],['class'=>'col-xs-12','placeholder'=>'Target']) ?>
                        </td>
                        <td>
                            <?= form_input('nd3e',$data['nd3e'],['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Adab Di Kamar Mandi</td>
                        <td>
                            <?= form_input('d3f',$data['d3f'],['class'=>'col-xs-12','placeholder'=>'Target']) ?>
                        </td>
                        <td>
                            <?= form_input('nd3f',$data['nd3f'],['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="center">4</td>
                        <td colspan="4"><strong>QAWIYYUL JISMI (Kekuatan Jasmani)</strong></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>OLAHRAGA</td>
                        <td>
                            <?= form_input('d4a',$data['d4a'],['class'=>'col-xs-12','placeholder'=>'Target']) ?>
                        </td>
                        <td>
                            <?= form_input('nd4a',$data['nd4a'],['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>KESEHATAN</td>
                        <td>
                            <?= form_input('d4b',$data['d4b'],['class'=>'col-xs-12','placeholder'=>'Target']) ?>
                        </td>
                        <td>
                            <?= form_input('nd4b',$data['nd4b'],['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="center">5</td>
                        <td colspan="4"><strong>MUTSAQQAFUL FIKRI  (Intelek Dalam Berfikir)</strong></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Pencapaian Target Belajar IT</td>
                        <td>
                            <?= form_input('d5a',$data['d5a'],['class'=>'col-xs-12','placeholder'=>'Target']) ?>
                        </td>
                        <td>
                            <?= form_input('nd5a',$data['nd5a'],['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Pencapaian Target Belajar Kepesantrenan / Ilmu Agama Islam</td>
                        <td>
                            <?= form_input('d5b',$data['d5b'],['class'=>'col-xs-12','placeholder'=>'Target']) ?>
                        </td>
                        <td>
                            <?= form_input('nd5b',$data['nd5b'],['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Life Skill Bahasa</td>
                        <td>
                            <?= form_input('d5c',$data['d5c'],['class'=>'col-xs-12','placeholder'=>'Target']) ?>
                        </td>
                        <td>
                            <?= form_input('nd5c',$data['nd5c'],['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Koleksi Buku/Artikel Bacaan Agama</td>
                        <td>
                            <?= form_input('d5d',$data['d5d'],['class'=>'col-xs-12','placeholder'=>'Target']) ?>
                        </td>
                        <td>
                            <?= form_input('nd5d',$data['nd5d'],['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Koleksi Buku/Artikel Bacaan Umum</td>
                        <td>
                            <?= form_input('d5e',$data['d5e'],['class'=>'col-xs-12','placeholder'=>'Target']) ?>
                        </td>
                        <td>
                            <?= form_input('nd5e',$data['nd5e'],['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Wawasan Global / Pengetahuan</td>
                        <td>
                            <?= form_input('d5f',$data['d5f'],['class'=>'col-xs-12','placeholder'=>'Target']) ?>
                        </td>
                        <td>
                            <?= form_input('nd5f',$data['nd5f'],['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="center">6</td>
                        <td colspan="4"><strong>MUJAHADATUL LINAFSIHI  ( Berjuang Melawan Hawa Nafsu)</strong></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Melawan Hawa Nafsu</td>
                        <td>
                            <?= form_input('d6a',$data['d6a'],['class'=>'col-xs-12','placeholder'=>'Target']) ?>
                        </td>
                        <td>
                            <?= form_input('nd6a',$data['nd6a'],['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="center">7</td>
                        <td colspan="4"><strong>HARISHUN ‘ALA WAQTIHI  ( Pandai Menjaga Waktu )</strong></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Manajemen Waktu</td>
                        <td>
                            <?= form_input('d7a',$data['d7a'],['class'=>'col-xs-12','placeholder'=>'Target']) ?>
                        </td>
                        <td>
                            <?= form_input('nd7a',$data['nd7a'],['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="center">8</td>
                        <td colspan="4"><strong>MUNAZHAMUN FI SYUUNIHI  ( Teratur Dalam Urusan )</strong></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>KEDISIPLINAN</td>
                        <td>
                            <?= form_input('d8a',$data['d8a'],['class'=>'col-xs-12','placeholder'=>'Target']) ?>
                        </td>
                        <td>
                            <?= form_input('nd8a',$data['nd8a'],['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>ORGANISASI SANTRI PeTIK (OSP)</td>
                        <td>
                            <?= form_input('d8b',$data['d8b'],['class'=>'col-xs-12','placeholder'=>'Target']) ?>
                        </td>
                        <td>
                            <?= form_input('nd8b',$data['nd8b'],['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="center">9</td>
                        <td colspan="4"><strong>QODIRUN ‘ALAL KASBI ( Memiliki Kemampuan Usaha Sendiri /Mandiri)</strong></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Berjiwa Kewirausahaan</td>
                        <td>
                            <?= form_input('d9a',$data['d9a'],['class'=>'col-xs-12','placeholder'=>'Target']) ?>
                        </td>
                        <td>
                            <?= form_input('nd9a',$data['nd9a'],['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="center">10</td>
                        <td colspan="4"><strong>NAFI’UN LIGHAIRIHI ( Bermanfaat Bagi Orang Lain )</strong></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>MEMILIKI MANFAAT</td>
                        <td>
                            <?= form_input('d10a',$data['d10a'],['class'=>'col-xs-12','placeholder'=>'Target']) ?>
                        </td>
                        <td>
                            <?= form_input('nd10a',$data['nd10a'],['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Kepedulian Sosial</td>
                        <td>
                            <?= form_input('d10b',$data['d10b'],['class'=>'col-xs-12','placeholder'=>'Target']) ?>
                        </td>
                        <td>
                            <?= form_input('nd10b',$data['nd10b'],['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="center">E</td>
                        <td></td>
                        <td colspan="4"><strong>Jaringan Sahabat Nasional & Internasional</strong></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td colspan="2">
                            <?= form_input('e1',$data['e1'],['class'=>'col-xs-12','placeholder'=>'Target']) ?>
                        </td>
                        <td>
                            <?= form_input('ne1',$data['ne1'],['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="center">F</td>
                        <td></td>
                        <td colspan="4"><strong>Rencana Khusus Individu</strong></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Mencoba selalu membangunkan teman untuk sholat tahajud</td>
                        <td>
                            <?= form_input('f1',$data['f1'],['class'=>'col-xs-12','placeholder'=>'Target']) ?>
                        </td>
                        <td>
                            <?= form_input('nf1',$data['nf1'],['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Mengisi waktu luang untuk Menghafal</td>
                        <td>
                            <?= form_input('f2',$data['f2'],['class'=>'col-xs-12','placeholder'=>'Target']) ?>
                        </td>
                        <td>
                            <?= form_input('nf2',$data['nf2'],['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td colspan="2">
                            <?= form_input('f3',$data['f3'],['class'=>'col-xs-12','placeholder'=>'Target']) ?>
                        </td>
                        <td>
                            <?= form_input('nf3',$data['nf3'],['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td colspan="2">
                            <?= form_input('f4',$data['f4'],['class'=>'col-xs-12','placeholder'=>'Target']) ?>
                        </td>
                        <td>
                            <?= form_input('nf4',$data['nf4'],['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td colspan="2">
                            <?= form_input('f5',$data['f5'],['class'=>'col-xs-12','placeholder'=>'Target']) ?>
                        </td>
                        <td>
                            <?= form_input('nf5',$data['nf5'],['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="center" colspan="4"><strong>TOTAL NILAI</strong></td>
                        <td>
                            <?= form_input('total_nilai',$data['total'],['class'=>'col-xs-12','readonly'=>'true','id'=>'total']) ?>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

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