<?php
#############################################################################################################
include '../atas-set.php';
include '../diatas.php';
$tableID = 'myTable';
$tableClass = 'table table-striped table-bordered';
$tajuk = '<th>s</th><th>msic</th><th>keterangan</th><th>msic2000</th><th>notakaki</th>';
echo "\n" . '<table id="' . $tableID . '" class="' . $tableClass . '" style="width:100%">'
. "\n<thead><tr>$tajuk</tr></thead><tfoot><tr>$tajuk</tr></tfoot>\n"
. "</table>\n";
include '../dibawah.php';
#############################################################################################################
?>
<script type="text/javascript">
$(document).ready(function() {
$('#myTable').DataTable( {
	"processing": true,
	"serverSide": true,
	/*"ajax": "../server_side/scripts/server_processing.php"*/
	"ajax": "../../../../../cari/msicjson"
});
});
</script>
</body>
</html>