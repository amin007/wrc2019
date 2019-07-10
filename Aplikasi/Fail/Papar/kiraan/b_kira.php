<div class="container">
<h1>Komponen Output</h1>
<form>
<?php
// output
$labelF = array('Jualan barang2','Jualan kenderaan bermotor','Jualan alat ganti & aksesori',
'Jualan petrol dan gas','Komisen, brokeraj dan yuran yang diterima',
'Pdptn drpd perkhidmatan pembaikan,pemasangan & penyelenggaraan',
'Royalti, hakcipta,pelesenan & yuran francais',
'Pdptn drpd sewa Lain-lain',
'Pdptn operasi lain pindahan wang',
'Jum membuat/membina sendiri (soalan aset)',
'Kos barangan yg dijual');
$f0 = 'F1317';
$kiraF0 = array($f0.'01',$f0.'02',$f0.'03',$f0.'04',$f0.'05',$f0.'06',$f0.'07',$f0.'11',$f0.'12','F870499','F141701');
$f1 = 'F1318';
$kiraF1 = array($f1.'01',$f1.'02',$f1.'03',$f1.'04',$f1.'05',$f1.'06',$f1.'07',$f1.'11',$f1.'12','F880499','F141801');
?>
<?php foreach ($labelF as $key => $ff):?>
<div class="form-row">
	<div class="form-group col-md-5">
		<label for="inputZip"><?php echo ($key+1) . '|' . $ff ?></label>
	</div>
	<div class="form-group col-md-3">
		<input type="text" class="form-control form-control-sm" id="<?php echo $kiraF0[$key] ?>" placeholder="<?php echo $kiraF0[$key] ?>"<?php
		echo ( $kiraF0[$key] == 'F1317xa') ? ' readonly':''?>>
	</div>
	<div class="form-group col-md-3">
		<input type="text" class="form-control form-control-sm" id="<?php echo $kiraF1[$key] ?>" value="5" placeholder="<?php echo $kiraF1[$key] ?>"<?php
		echo ( $kiraF1[$key] == 'F1318xa') ? ' readonly':''?>>
	</div>
</div>
<?php endforeach; ?>
</form>
<hr>
<h1>Komponen Input</h1>
<form>
<?php
// input
$labelF = array('Kos pembaikan','Penbelian bahan & bekalan','kos pencetakan',
'Air yg dibeli','Tenaga elektrik yg dibeli','Bahan pembakar,pelincir & gas',
'Pembelian perkhidmatan pengangkutan',
'Bayaran telekomunikasi (cth telefon,internet)',
'Pengiklanan & promosi',
'Bayaran sewa Sewaan operasi lain',
'Bayaran royalti kerajaan/badan berkanun',
'Bayaran royalti ngo/tajaan korporat',
'Perbelanjaan operasi lain',
'Kos perkerjaan:bayaran kpd pengarah tak bekerja',
'Kos perkerjaan:nilai pakaian percuma',
'Kos perkerjaan:kos latihan kpd pekerja',
'Input','Output','IO');
$f0 = 'F1417';
$kiraF0 = array($f0.'02',$f0.'03',$f0.'04',$f0.'05',$f0.'06',$f0.'07',
$f0.'18',$f0.'23',$f0.'25',$f0.'30',$f0.'32',$f0.'33',$f0.'37',$f0.'50',$f0.'51',$f0.'52','F1317xa','F1417xb','IO2017');
$f1 = 'F1418';
$kiraF1 = array($f1.'02',$f1.'03',$f1.'04',$f1.'05',$f1.'06',$f1.'07',
$f1.'18',$f1.'23',$f1.'25',$f1.'30',$f1.'32',$f1.'33',$f1.'37',$f1.'50',$f1.'51',$f1.'52','F1318xa','F1418xb','IO2018');
?>
<?php foreach ($labelF as $key => $ff):?>
<div class="form-row">
	<div class="form-group col-md-5">
		<label for="inputZip"><?php echo ($key+1) . '|' . $ff ?></label>
	</div>
	<div class="form-group col-md-3">
		<input type="text" class="form-control form-control-sm" id="<?php echo $kiraF0[$key] ?>" placeholder="<?php echo $kiraF0[$key] ?>"<?php
		echo ( $kiraF0[$key] == 'F1317xa') ? ' readonly':''?>>
	</div>
	<div class="form-group col-md-3">
		<input type="text" class="form-control form-control-sm" id="<?php echo $kiraF1[$key] ?>" placeholder="<?php echo $kiraF1[$key] ?>"<?php
		echo ( $kiraF1[$key] == 'F1318xa') ? ' readonly':''?>>
	</div>
</div>
<?php endforeach; ?>
</form>
</div><!-- / class="container" -->

<?php //include 'komponen-io.php'; ?>
