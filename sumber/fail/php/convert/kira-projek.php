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
	<div class="form-group col-md-3"><input type="text" class="form-control form-control-sm" id="kiraNilai" readonly></div>
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
<div class="form-row">
	<div class="form-group col-md-1"><label for="inputZip">jumlah</label></div>
	<div class="form-group col-md-3"><input type="text" class="form-control form-control-sm" id="nilaiProjekDaa" readonly></div>
	<div class="form-group col-md-3"><input type="text" class="form-control form-control-sm" id="jumRM" readonly></div>
	<div class="form-group col-md-3"><input type="text" class="form-control form-control-sm" id="bezaRM" readonly></div>
</div>
</form>
</div><!-- / class="container" -->
<hr>

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
//https://stackoverflow.com/questions/1990512/add-comma-to-numbers-every-three-digits
$(document).ready(function() {
	$(".numbers").each(function() {
		$(this).format({format:"#,###", locale:"us"});
	});
});
/*$.fn.digits = function(){
	return this.each(function(){
		$(this).text( $(this).text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") );
	})
}

function numberWithCommas(number) {
	var parts = number.toString().split(".");
	parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	return parts.join(".");
}*/
</script>

<script>
$('#kiraNilai').keyup(function(){
	var nilaiProjekDaa = parseFloat($('#nilaiProjek').val()) || 0;

	$('#nilaiProjekDaa').val(nilaiProjekDaa.toFixed(2));
});
////////////////////////////////////////////////////////////////////////////////////////////////////
$('#st3B').keyup(function(){
	var st3A = parseFloat($('#st3A').val()) || 0;
	//var st3B = parseFloat($('#st3B').val()) || 0;
	var nilaiProjek = parseFloat($('#nilaiProjek').val()) || 0;
	//var nilaiProjekSt3 = parseFloat($('#nilaiProjekSt3').val()) || 0;

	var st3B = st3A;
	var result = st3B * nilaiProjek;
	$('#nilaiProjekSt3').val(result.toFixed(0));
	$('#st3B').val(st3B.toFixed(4));
});

$('#st4B').keyup(function(){
	var st3A = parseFloat($('#st3A').val()) || 0;
	//var st3B = parseFloat($('#st3B').val()) || 0;
	var st4A = parseFloat($('#st4A').val()) || 0;
	//var st4B = parseFloat($('#st4B').val()) || 0;
	var nilaiProjek = parseFloat($('#nilaiProjek').val()) || 0;
	//var nilaiProjekSt3 = parseFloat($('#nilaiProjekSt3').val()) || 0;

	var st4B = st4A - st3A;
	var result = 0; result = st4B * nilaiProjek;
	$('#nilaiProjekSt4').val(result.toFixed(0));
	$('#st4B').val(st4B.toFixed(4));
});

$('#st1B').keyup(function(){
	var st4A = parseFloat($('#st4A').val()) || 0;
	//var st4B = parseFloat($('#st4B').val()) || 0;
	var st1A = parseFloat($('#st1A').val()) || 0;
	//var st1B = parseFloat($('#st1B').val()) || 0;
	var nilaiProjek = parseFloat($('#nilaiProjek').val()) || 0;
	//var nilaiProjekSt3 = parseFloat($('#nilaiProjekSt3').val()) || 0;

	var st1B = st1A - st4A;
	var result = 0; result = st1B * nilaiProjek;
	$('#nilaiProjekSt1').val(result.toFixed(0));
	$('#st1B').val(st1B.toFixed(4));
});

$('#st2B').keyup(function(){
	var st1A = parseFloat($('#st1A').val()) || 0;
	//var st1B = parseFloat($('#st1B').val()) || 0;
	var st2A = parseFloat($('#st2A').val()) || 0;
	//var st2B = parseFloat($('#st2B').val()) || 0;
	var nilaiProjek = parseFloat($('#nilaiProjek').val()) || 0;
	//var nilaiProjekSt3 = parseFloat($('#nilaiProjekSt3').val()) || 0;

	var st2B = st2A - st1A;
	var result = 0; result = st2B * nilaiProjek;
	$('#nilaiProjekSt2').val(result.toFixed(0));
	$('#st2B').val(st2B.toFixed(4));
});
////////////////////////////////////////////////////////////////////////////////////////////////////
$('#bezaRM').keyup(function(){
	//var F1318xa = parseFloat($('#F1318xa').val()) || 0;
	var nilaiBesar = parseFloat($('#nilaiProjekDaa').val()) || 0;
	var T19St3 = parseFloat($('#nilaiProjekSt3').val()) || 0;
	var T19St4 = parseFloat($('#nilaiProjekSt4').val()) || 0;
	var T19St1 = parseFloat($('#nilaiProjekSt1').val()) || 0;
	var T19St2 = parseFloat($('#nilaiProjekSt2').val()) || 0;
	//var io00 = (5 / 45);
	//var io01 = (F1318xa / F1418xb);
	var jumRM = (T19St3 + T19St4 + T19St1 + T19St2);
	var bezaRM = nilaiBesar - jumRM;

	//$('#nilaiProjekDaa').val(nilaiProjek.toFixed(2));
	$('#jumRM').val(jumRM.toFixed(2));
	$('#bezaRM').val(bezaRM.toFixed(2));
});
</script>

</body>
</html>