<script>
$('#F1318xa').keyup(function(){
<?php
	// output
	$kiraF = array('01','02','03','04','05','06','07','11','12');
	foreach ($kiraF as $ff):?>
	var F1318<?php echo $ff ?>; F1318<?php echo $ff ?> = parseFloat($('#F1318<?php echo $ff ?>').val());
<?php endforeach; ?>
	var F880499; F880499 = parseFloat($('#F880499').val());
	var F141801; F141801 = parseFloat($('#F141801').val());

	var resultT = F131801 + F131802 + F131803 + F131804 + F131805 + F131806 + F131807
		+ F131811 + F131812 + F880499;
	var result = resultT - F141801;
	$('#F1318xa').val(result.toFixed(0));
});
</script>

<script>
$('#F1418xb').keyup(function(){
<?php
	// input
	$kiraF = array('02','03','04','05','06','07',
	'18','23','25','30','32','33','37','50','51','52');
	foreach ($kiraF as $ff):?>
	var F1418<?php echo $ff ?>; F1418<?php echo $ff ?> = parseFloat($('#F1418<?php echo $ff ?>').val());
<?php endforeach; ?>
	var result = F141802 + F141803 + F141804 + F141805 + F141806 + F141807 + F141818 + F141823 + F141825
	+ F141830 + F141832 + F141833 + F141837 + F141850 + F141851 + F141852;
	$('#F1418xb').val(result.toFixed(0));
});
</script>
