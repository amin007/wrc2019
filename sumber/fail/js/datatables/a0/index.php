<?php
# setkan jquery, bootstrap dan font awesome sama ada local atau cdn
## cdn
//      $jquery_cdn = 'https://code.jquery.com/jquery-2.2.3.min.js';
 $bootstrapJS_cdn = 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js';
$bootstrapCSS_cdn = 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css';
 $ceruleanCSS_cdn = 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cerulean/bootstrap.min.css';
 $fontawesome_cdn = 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css';
## 4.1
 $bootstrapJS_413 = 'https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js';
$bootstrapCSS_413 = 'https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css';
 $ceruleanCSS_413 = 'https://maxcdn.bootstrapcdn.com/bootswatch/4.1.3/cerulean/bootstrap.min.css';
 $fontawesome_510 = 'https://use.fontawesome.com/releases/v5.1.0/css/all.css';
## local
            $sumber = 'sumber/utama/';
      $jquery_local = $sumber . 'jquery/jquery-2.2.3.min.js';
 $bootstrapJS_local = $sumber . 'bootstrap/3.3.7/js/bootstrap.min.js';
$bootstrapCSS_local = $sumber . 'bootstrap/3.3.7/css/bootstrap.min.css';
 $fontawesome_local = $sumber . 'font-awesome/4.7.0/css/font-awesome.min.css';
## datatables
$datatablesCSS = '//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css';
$jquery_cdn = '//code.jquery.com/jquery-3.3.1.js';
$datatablesJSS = '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js';
#############################################################################################################
$urlcss = array($bootstrapCSS_413,$fontawesome_510,$datatablesCSS);
$urljs = array($jquery_cdn,$bootstrapJS_413,$datatablesJSS);
#############################################################################################################
include 'diatas.php';
$tableID = 'myTable';
//$tableClass = 'display';
$tableClass = 'table table-striped table-bordered';
include 'jadual.php';
include 'dibawah.php';
#############################################################################################################
?>
<script type="text/javascript">
$(document).ready( function ()
{
	$('#myTable').DataTable();
});
</script>
</body>
</html>