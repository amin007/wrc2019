<?php
#############################################################################################################
include '../atas-set-001.php';
include '../diatas.php';
#############################################################################################################
#------------------------------------------------------------------------------------------------------------
$carian = null;
if ($carian=='[id:0]')
{
	echo 'data kosong<br>';
}
else
{// $this->carian=='newss' - mula
	//echo $halaman . '<br>';
?>
<h1></h1>
<div class="container">
<form method="GET" action="<?=$mencari?>" class="form-inline" autocomplete="off">
<div class="form-group"><div class="input-group">
	<div class="input-group-append"><span class="input-group-text">
		Papar Id Syarikat
	</span></div>
	<input type="text" name="cari" class="form-control" autofocus
	id="inputString" onkeyup="lookup(this.value);" onblur="fill();">
	<div class="input-group-append">
		<input type="submit" value="Kemaskini" class="btn btn-outline-secondary">
	</div>
</div></div>
<div class="suggestionsBox" id="suggestions" style="display: none; " >
	<div class="suggestionList" id="autoSuggestionsList">&nbsp;</div>
</div>
</form></div><hr>
<div class="container">
	<div class="row" id="csv-display" style="height:500px;overflow: scroll;">
	</div>
</div>
<hr>
<?php
}
#------------------------------------------------------------------------------------------------------------
#############################################################################################################
include '../dibawah.php';
#############################################################################################################
?>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-csv/0.71/jquery.csv-0.71.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
	/*https://www.js-tutorials.com/jquery-tutorials/reading-csv-file-using-jquery */
	var data;
	$.ajax({
	type: "GET",  
	url: "../../../pxls/contoh_laporan.csv",
	/*url: "../../../pxls/js-tutorials.com_sample_file.csv",*/
	dataType: "text",
		success: function(response)  
		{
			data = $.csv.toArrays(response);
			generateHtmlTable(data);
		}
	});
	
	function generateHtmlTable(data) 
	{
		var html = '<table class="table table-condensed table-hover table-striped">';
		if(typeof(data[0]) === 'undefined')
		{
			return null;
		}
		else
		{
			$.each(data, function( index, row )
			{
				//bind header
				if(index == 0)
				{
					html += '<thead>';
					html += '<tr>';
					$.each(row, function( index, colData ) 
					{
						html += '<th>' + colData + '</th>';
					});
					html += '</tr>';
					html += '</thead>';
					html += '<tbody>';
				} else {
				html += '<tr>';
				$.each(row, function( index, colData )
				{
					if(index == 0)
						html += '<td class="bg-primary">' + colData + '</td>';
					else
						html += '<td>' + colData + '</td>';
				});
				html += '</tr>';
				}
			});
			html += '</tbody>';
			html += '</table>';
			$('#csv-display').append(html);
		}
	}
});
</script>
</body>
</html>