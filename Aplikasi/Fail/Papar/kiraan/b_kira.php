<div class="container">
<h1>Komponen Output</h1>
<form>
<?php
// output
$labelF = array('Jualan barang-barang','Jualan kenderaan bermotor','Jualan alat ganti dan aksesori',
'Jualan petrol dan gas','Komisen, brokeraj dan yuran yang diterima',
'Pendapatan dari perkhidmatan pembaikan,pemasangan dab penyelenggaraan',
'Royalti, hakcipta,pelesenan dan yuran francais',
'Pendapatan daripada sewa Lain-lain',
'Pendapatan operasi lain pindahan wang',
'Jumlah membuat/membina sendiri (soalan aset)',
'Kos barangan yang dijual');
$f0 = 'F1317';
$kiraF0 = array($f0.'01',$f0.'02',$f0.'03',$f0.'04',$f0.'05',$f0.'06',$f0.'07',$f0.'11',$f0.'12','F870499','F141701');
$f1 = 'F1318';
$kiraF1 = array($f1.'01',$f1.'02',$f1.'03',$f1.'04',$f1.'05',$f1.'06',$f1.'07',$f1.'11',$f1.'12','F880499','F141801');
?>
<?php foreach ($labelF as $key => $ff):?>
<div class="form-row">
	<div class="form-group col-md-4">
		<label for="inputZip"><?php echo ($key+1) . '|' . $ff ?></label>
	</div>
	<div class="form-group col-md-4">
		<input type="text" class="form-control" placeholder="<?php echo $kiraF0[$key] ?>">
	</div>
	<div class="form-group col-md-4">
		<input type="text" class="form-control" placeholder="<?php echo $kiraF1[$key] ?>">
	</div>
</div>
<?php endforeach; ?>
</form>
</div><!-- / class="container" -->