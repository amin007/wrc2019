<?php
// output
$kiraF = array('01','02','03','04','05','06','07','11','12');
?>
<script>
$('#F1318xa').keyup(function(){
<?php foreach ($kiraF as $ff):?>
	var F1318<?php echo $ff ?>; F1318<?php echo $ff ?> = parseFloat($('#F1318<?php echo $ff ?>').val());
<?php endforeach; ?>
	var F880499; F880499 = parseFloat($('#F880499').val());
	var F141801; F141801 = parseFloat($('#141801').val());

//	var result = F00<?php echo $ff ?>a + F00<?php echo $ff ?>b + F00<?php echo $ff ?>c;
//	$('#F00<?php echo $ff ?>').val(result.toFixed(0));
});
</script>


<?php
// input
$kiraF = array('02','03','04','05','06','07',
'18','23','25','30','32','33','37','50','51','52');
?>
<script>
$('#F1418xb').keyup(function(){
<?php foreach ($kiraF as $ff):?>
	var F1418<?php echo $ff ?>; F1418<?php echo $ff ?> = parseFloat($('#F1418<?php echo $ff ?>').val());
<?php endforeach; ?>
//	var result = F00<?php echo $ff ?>a + F00<?php echo $ff ?>b + F00<?php echo $ff ?>c;
//	$('#F00<?php echo $ff ?>').val(result.toFixed(0));
});
</script>

