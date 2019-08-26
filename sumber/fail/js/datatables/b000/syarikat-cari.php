<?php
#############################################################################################################
include '../atas-set-001.php';
include '../diatas.php';
#############################################################################################################
#------------------------------------------------------------------------------------------------------------
?><h1>Papar Syarikat</h1><hr>
<div class="container">
	<div class="row" id="csv-display" style="height:500px;overflow: scroll;">
	</div>
</div>
<hr>
<?php
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
						html += '<th>';
						html += colData;
						html += '</th>';
					});
					html += '</tr>';
					html += '</thead>';
					html += '<tbody>';
				} else {
				html += '<tr>';
				$.each(row, function( index, colData )
				{
					html += '<td>';
					html += colData;
					html += '</td>';
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