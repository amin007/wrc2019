<!-- khas untuk jquery dan js2 lain
================================================== -->
<?php
if (isset($this->js))
{
    foreach ($this->js as $js)
    {
        echo "\n";
		/*?><script type="text/javascript" src="<?php echo SUMBER . $js ?>"></script><?php*/
		?><script type="text/javascript" src="<?php echo $js ?>"></script><?php
    }
}
?><?php
$dataURL = dpt_url();
//echo '<pre>'; echo '<br>$dataURL:<br>'; print_r($dataURL); echo '</pre>';
$classKhas = array('ubah','hadirbulan','awal','batch','senarai');
if ( isset($dataURL[1]) && ( in_array($dataURL[1],$classKhas) ) ):
echo "\n\n"; ?>
<script type="text/javascript">
	function lookup(inputString)
	{
		if(inputString.length == 1)
		{
			$('#suggestions').hide();// Hide the suggestion box.
		}
		else
		{
			$.get("<?php echo URL ?>cari/syarikat/", {cari: inputString}, function(data)
			{
				if(data.length >0)
				{
					$('#suggestions').show();
					$('#autoSuggestionsList').html(data);
				}
			});
		}
	}// lookup

	function fill(thisValue)
	{
		$('#inputString').val(thisValue);
		setTimeout("$('#suggestions').hide();", 200);
	}

// kod jquery global
	$(document).ready(function(){
		/* ---------- Text editor ---------- */
		$('.cleditor').cleditor();

		/* ---------- Datapicker ---------- */
		$('.date-picker').datepicker();

		/* ---------- Choosen ---------- */
		$('[data-rel="chosen"],[rel="chosen"]').chosen();

		/* ---------- Placeholder Fix for IE ---------- */
		$('input, textarea').placeholder();

		/* ---------- Auto Height texarea ---------- */
		$('textarea').autosize();

		/* ---------- Masked Input ---------- */
		$("#date").mask("99/99/9999");
		$("#phone").mask("(999) 999-9999");
		$("#tin").mask("99-9999999");
		$("#ssn").mask("999-99-9999");
		$.mask.definitions['~']='[+-]';
		$("#eyescript").mask("~9.99 ~9.99 999");

		/* ---------- Textarea with limits ---------- */
		$('#limit').inputlimiter({
			limit: 10,
			limitBy: 'words',
			remText: 'You only have %n word%s remaining...',
			limitText: 'Field limited to %n word%s.'
		});

		/* ---------- Timepicker for Bootstrap ---------- */
		$('#timepicker1').timepicker();

		/* ---------- DateRangepicker for Bootstrap ---------- */
		$('#daterange').daterangepicker();

		/* ---------- Bootstrap Wysiwig ---------- */
		$('.editor').wysiwyg();

		/* ---------- Colorpicker for Bootstrap ---------- */
		$('#colorpicker1').colorpicker();
	});
</script>
<style type="text/css">
	.suggestionsBox {
		position: relative;
		left: 30px;
		margin: 10px 0px 0px 0px;
		width: 600px;
		background-color: #212427;
		-moz-border-radius: 7px;
		-webkit-border-radius: 7px;
		border: 2px solid #000000;
		color: #ffff00;
	}

	.suggestionList {margin: 0px;padding: 0px;}

	.suggestionList li {
		margin: 0px 0px 3px 0px;
		padding: 3px;
		cursor: pointer;
	}

	.suggestionList li:hover {background-color: #659CD8;}
</style>
<?php elseif ( isset($dataURL[1]) && $dataURL[1]=='io') : echo "\n";?>
<script>
$('#F1317xa').keyup(function(){
<?php
	// output - https://stackoverflow.com/questions/29233886/jquery-automatic-add-two-numbers-from-text-fields
	$kiraF = array('01','02','03','04','05','06','07','11','12');
	foreach ($kiraF as $ff):?>
	var F1317<?php echo $ff ?> = parseFloat($('#F1317<?php echo $ff ?>').val()) || 0;
<?php endforeach; ?>
	var F870499 = parseFloat($('#F870499').val()) || 0;
	var F141701 = parseFloat($('#F141701').val()) || 0;

	var resultT = F131701 + F131702 + F131703 + F131704 + F131705 + F131706 + F131707
		+ F131711 + F131712 + F870499;
	var result = resultT - F141701;
	$('#F1317xa').val(result.toFixed(0));
});

$('#F1318xa').keyup(function(){
<?php
	// output - https://stackoverflow.com/questions/29233886/jquery-automatic-add-two-numbers-from-text-fields
	$kiraF = array('01','02','03','04','05','06','07','11','12');
	foreach ($kiraF as $ff):?>
	var F1318<?php echo $ff ?> = parseFloat($('#F1318<?php echo $ff ?>').val()) || 0;
<?php endforeach; ?>
	var F880499 = parseFloat($('#F880499').val()) || 0;
	var F141801 = parseFloat($('#F141801').val()) || 0;

	var resultT = F131801 + F131802 + F131803 + F131804 + F131805 + F131806 + F131807
		+ F131811 + F131812 + F880499;
	var result = resultT - F141801;
	$('#F1318xa').val(result.toFixed(0));
});

$('#F1417xb').keyup(function(){
<?php
	// input
	$kiraF = array('02','03','04','05','06','07',
	'18','23','25','30','32','33','37','50','51','52');
	foreach ($kiraF as $ff):?>
	var F1417<?php echo $ff ?> = parseFloat($('#F1417<?php echo $ff ?>').val()) || 0;
<?php endforeach; ?>

	var result = F141702 + F141703 + F141704 + F141705 + F141706 + F141707 + F141718 + F141723 + F141725
	+ F141730 + F141732 + F141733 + F141737 + F141750 + F141751 + F141752;
	$('#F1417xb').val(result.toFixed(0));
});

$('#F1418xb').keyup(function(){
<?php
	// input
	$kiraF = array('02','03','04','05','06','07',
	'18','23','25','30','32','33','37','50','51','52');
	foreach ($kiraF as $ff):?>
	var F1418<?php echo $ff ?> = parseFloat($('#F1418<?php echo $ff ?>').val()) || 0;
<?php endforeach; ?>

	var result = F141802 + F141803 + F141804 + F141805 + F141806 + F141807 + F141818 + F141823 + F141825
	+ F141830 + F141832 + F141833 + F141837 + F141850 + F141851 + F141852;
	$('#F1418xb').val(result.toFixed(0));
});

$('#IO2018').keyup(function(){
<?php
	// input/output
	$kiraF = array('outputA'=>'1317xa','outputB'=>'1318xa',
	'inputA'=>'1417xb','inputB'=>'1418xb');
	foreach ($kiraF as $key => $ff):?>
	var <?php echo $key ?> = parseFloat($('#F<?php echo $ff ?>').val()) || 0;
<?php endforeach; ?>

	//var io = (F1318xa / F1418xb);
	var ioA = (inputA / outputA);
	var ioB = (inputB / outputB);
	$('#IO2017').val(ioA.toFixed(2));
	$('#IO2018').val(ioB.toFixed(2));
});

</script>

<?php elseif ( isset($dataURL[1]) && $dataURL[1]=='laporan') : echo "\n";?>
<script>

	var barChartData = {
		labels: ["BEK", "ICT", "SIH", "WANG", "BUAT", "DIDIK",
		"LORI", "HOTEL", "LAIN", "PRO"],
		datasets: [
				{
					fillColor: "rgba(220,220,220,0.5)",
					strokeColor: "rgba(220,220,220,1)",
					data: [3,8,30,23,26,29,42,15,35,26]
				},
				{
					fillColor: "rgba(151,187,205,0.5)",
					strokeColor: "rgba(151,187,205,1)",
					data: [0,1,4,3,75,3,5,2,4,3]
				}
			]
	}

	var myLine = new Chart(document.getElementById("bar-chart1").getContext("2d")).Bar(barChartData);
	var myLine = new Chart(document.getElementById("bar-chart2").getContext("2d")).Bar(barChartData);

    var pieData = [
		{value: 0, color: "#1A1130"},
		{value: 1, color: "#1B8632"},
		{value: 4, color: "#1C8633"},
		{value: 3, color: "#1D8634"},
		{value: 75, color: "#1E8130"},
		{value: 3, color: "#1F8230"},
		{value: 5, color: "#13A30"},
		{value: 2, color: "#11B430"},
		{value: 4, color: "#11C630"},
		{value: 3, color: "#F5D630"}
	];
    var myPie = new Chart(document.getElementById("pie-chart").getContext("2d")).Pie(pieData);

</script>
<?php elseif ( isset($dataURL[1]) && $dataURL[1]=='laporanSubjek') : echo "\n";?>
<script>
<?php
	$jquery = new \Aplikasi\Kitab\Jquery_Script();
	echo $jquery->Summary();
?>
</script>
<script>
<?php
	$jquery->kodSummary2(null);
	$jquery->kodSummary3(null);
	$jquery->kodSummary4(null);
	$jquery->kodSummary5(null);
	$jquery->kodSummary6(null);
?></script>
<?php elseif ( isset($dataURL[1]) && $dataURL[1]=='analisa') : echo "\n";?>
<script>
<?php
	$jquery = new \Aplikasi\Kitab\Jquery_Script();
	echo $jquery->kodSummary1($this->namaTajukGraf);
?>
</script>
<?php /*else :?>
<link rel="stylesheet" type="text/css" href="<?php echo JS ?>filter/susun.style.css" />
<script type="text/javascript" src="<?php echo JS ?>filter/susun.application.js"></script>
<?php */
endif;