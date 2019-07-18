<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>BANCI 2019</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet" type="text/css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" type="text/css">

<style type="text/css">
table.excel {
	border-style:ridge;
	border-width:1;
	border-collapse:collapse;
	font-family:sans-serif;
	font-size:11px;
}
table.excel thead th, table.excel tbody th {
	background:#CCCCCC;
	border-style:ridge;
	border-width:1;
	text-align: center;
	vertical-align: top;
}
table.excel tbody th { text-align:center; vertical-align: top; }
table.excel tbody td { vertical-align:bottom; }
table.excel tbody td
{
	padding: 0 3px; border: 1px solid #aaaaaa;
	background:#ffffff;
}
.fa-input {font-family: FontAwesome}
</style>
</head>
<body><!-- menu_atas.php A4.1.3 -->

<nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
	<a class="navbar-brand" href="http://jpmuar07-pc/projek-rahsia/tahun/wrc2019/">
		<i class="fas fa-video"></i>BANCI 2019:</a>
	<a class="navbar-brand" href="http://jpmuar07-pc/projek-rahsia/tahun/wrc2019/ruangtamu/logout">
		<i class="fa fa-times fa-2x" aria-hidden="true"></i>Keluar</a>

	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
	aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
</nav>
<br>

<!-- menu tengah atas -->
<div class="container">
<h1>Nilai Projek Berjuta-juta</h1>
<form>
<div class="form-row">
	<div class="form-group col-md-1"><label for="inputZip">nilai projek</label></div>
	<div class="form-group col-md-3"><input type="text" class="form-control form-control-sm" readonly></div>
	<div class="form-group col-md-3"><input type="text" class="form-control form-control-sm" id="nilaiProjek" placeholder="nilai projek"></div>
	<div class="form-group col-md-3"><input type="text" class="form-control form-control-sm" readonly></div>
</div>
<div class="form-row">
	<div class="form-group col-md-1"><label for="inputZip">st3</label></div>
	<div class="form-group col-md-3"><input type="text" class="form-control form-control-sm" id="st3A" placeholder="st3A"></div>
	<div class="form-group col-md-3"><input type="text" class="form-control form-control-sm" id="nilaiProjekSt3" placeholder="nilai projek suku 3"></div>
	<div class="form-group col-md-3"><input type="text" class="form-control form-control-sm" id="st3B" readonly></div>
</div>
<div class="form-row">
	<div class="form-group col-md-1"><label for="inputZip">st4</label></div>
	<div class="form-group col-md-3"><input type="text" class="form-control form-control-sm" id="st4A" placeholder="st4A"></div>
	<div class="form-group col-md-3"><input type="text" class="form-control form-control-sm" id="nilaiProjekSt4" placeholder="nilai projek suku 4"></div>
	<div class="form-group col-md-3"><input type="text" class="form-control form-control-sm" id="st4B" readonly></div>
</div>
<div class="form-row">
	<div class="form-group col-md-1"><label for="inputZip">st1</label></div>
	<div class="form-group col-md-3"><input type="text" class="form-control form-control-sm" id="st1A" placeholder="st1A"></div>
	<div class="form-group col-md-3"><input type="text" class="form-control form-control-sm" id="nilaiProjekSt1" placeholder="nilai projek suku 1"></div>
	<div class="form-group col-md-3"><input type="text" class="form-control form-control-sm" id="st40B" readonly></div>
</div>
<div class="form-row">
	<div class="form-group col-md-1"><label for="inputZip">st2</label></div>
	<div class="form-group col-md-3"><input type="text" class="form-control form-control-sm" id="st2A" placeholder="st2A"></div>
	<div class="form-group col-md-3"><input type="text" class="form-control form-control-sm" id="nilaiProjekSt2" placeholder="nilai projek suku 2"></div>
	<div class="form-group col-md-3"><input type="text" class="form-control form-control-sm" id="st2B" readonly></div>
</div>
</form>
</div><!-- / class="container" -->

<!-- menu tengah bawah -->
<!-- Footer
================================================== -->
<!-- footer class="footer">
	<div class="container">
		<span class="label label-info">
		&copy; Hak Cipta Terperihara 2019. Theme Asal Bootstrap Twitter</span>
	</div>
</footer -->

<!-- khas untuk jquery dan js2 lain
================================================== -->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

<script>
$('#F1317xa').keyup(function(){
	var F131701 = parseFloat($('#F131701').val()) || 0;
	var F131702 = parseFloat($('#F131702').val()) || 0;
	var F131703 = parseFloat($('#F131703').val()) || 0;
	var F131704 = parseFloat($('#F131704').val()) || 0;
	var F131705 = parseFloat($('#F131705').val()) || 0;
	var F131706 = parseFloat($('#F131706').val()) || 0;
	var F131707 = parseFloat($('#F131707').val()) || 0;
	var F131711 = parseFloat($('#F131711').val()) || 0;
	var F131712 = parseFloat($('#F131712').val()) || 0;
	var F870499 = parseFloat($('#F870499').val()) || 0;
	var F141701 = parseFloat($('#F141701').val()) || 0;

	var resultT = F131701 + F131702 + F131703 + F131704 + F131705 + F131706 + F131707
		+ F131711 + F131712 + F870499;
	var result = resultT - F141701;
	$('#F1317xa').val(result.toFixed(0));
});

$('#F1318xa').keyup(function(){
	var F131801 = parseFloat($('#F131801').val()) || 0;
	var F131802 = parseFloat($('#F131802').val()) || 0;
	var F131803 = parseFloat($('#F131803').val()) || 0;
	var F131804 = parseFloat($('#F131804').val()) || 0;
	var F131805 = parseFloat($('#F131805').val()) || 0;
	var F131806 = parseFloat($('#F131806').val()) || 0;
	var F131807 = parseFloat($('#F131807').val()) || 0;
	var F131811 = parseFloat($('#F131811').val()) || 0;
	var F131812 = parseFloat($('#F131812').val()) || 0;
	var F880499; F880499 = parseFloat($('#F880499').val()) || 0;
	var F141801; F141801 = parseFloat($('#F141801').val()) || 0;

	var resultT = F131801 + F131802 + F131803 + F131804 + F131805 + F131806 + F131807
		+ F131811 + F131812 + F880499;
	var result = resultT - F141801;
	$('#F1318xa').val(result.toFixed(0));
});

$('#F1417xb').keyup(function(){
	var F141702 = parseFloat($('#F141702').val()) || 0;
	var F141703 = parseFloat($('#F141703').val()) || 0;
	var F141704 = parseFloat($('#F141704').val()) || 0;
	var F141705 = parseFloat($('#F141705').val()) || 0;
	var F141706 = parseFloat($('#F141706').val()) || 0;
	var F141707 = parseFloat($('#F141707').val()) || 0;
	var F141718 = parseFloat($('#F141718').val()) || 0;
	var F141723 = parseFloat($('#F141723').val()) || 0;
	var F141725 = parseFloat($('#F141725').val()) || 0;
	var F141730 = parseFloat($('#F141730').val()) || 0;
	var F141732 = parseFloat($('#F141732').val()) || 0;
	var F141733 = parseFloat($('#F141733').val()) || 0;
	var F141737 = parseFloat($('#F141737').val()) || 0;
	var F141750 = parseFloat($('#F141750').val()) || 0;
	var F141751 = parseFloat($('#F141751').val()) || 0;
	var F141752 = parseFloat($('#F141752').val()) || 0;

	var result = F141702 + F141703 + F141704 + F141705 + F141706 + F141707 + F141718 + F141723 + F141725
	+ F141730 + F141732 + F141733 + F141737 + F141750 + F141751 + F141752;
	$('#F1417xb').val(result.toFixed(0));
});

$('#F1418xb').keyup(function(){
	var F141802 = parseFloat($('#F141802').val()) || 0;
	var F141803 = parseFloat($('#F141803').val()) || 0;
	var F141804 = parseFloat($('#F141804').val()) || 0;
	var F141805 = parseFloat($('#F141805').val()) || 0;
	var F141806 = parseFloat($('#F141806').val()) || 0;
	var F141807 = parseFloat($('#F141807').val()) || 0;
	var F141818 = parseFloat($('#F141818').val()) || 0;
	var F141823 = parseFloat($('#F141823').val()) || 0;
	var F141825 = parseFloat($('#F141825').val()) || 0;
	var F141830 = parseFloat($('#F141830').val()) || 0;
	var F141832 = parseFloat($('#F141832').val()) || 0;
	var F141833 = parseFloat($('#F141833').val()) || 0;
	var F141837 = parseFloat($('#F141837').val()) || 0;
	var F141850 = parseFloat($('#F141850').val()) || 0;
	var F141851 = parseFloat($('#F141851').val()) || 0;
	var F141852 = parseFloat($('#F141852').val()) || 0;

	var result = F141802 + F141803 + F141804 + F141805 + F141806 + F141807 + F141818 + F141823 + F141825
	+ F141830 + F141832 + F141833 + F141837 + F141850 + F141851 + F141852;
	$('#F1418xb').val(result.toFixed(0));
});

$('#IO2017').keyup(function(){
	//var F1318xa = parseFloat($('#F1318xa').val()) || 0;
	//var F1418xb = parseFloat($('#F1418xb').val()) || 0;
	var outputA = parseFloat($('#F1317xa').val()) || 0;
	var inputA = parseFloat($('#F1417xb').val()) || 0;
	var outputB = parseFloat($('#F1318xa').val()) || 0;
	var inputB = parseFloat($('#F1418xb').val()) || 0;
	//var io00 = (5 / 45);
	//var io01 = (F1318xa / F1418xb);
	var ioA = (inputA / outputA);
	var ioB = (inputB / outputB);
	$('#IO2017').val(ioA.toFixed(2));
	$('#IO2018').val(ioB.toFixed(2));
});
</script>

</body>
</html>