<html>
<head>
<meta property="og:url"                content="http://poslaju.wujiecourier.com" />
<meta property="og:type"               content="website" />
<meta property="og:title"              content="Online Printing Poslaju Slip Form" />
<meta property="og:description"        content="Online Printing Poslaju Slip Form with EPSON LQ-310" />
<meta property="og:image"              content="http://poslaju.wujiecourie.com/poslaju_slip_form_sample.png" />
</head>

<body>

<?php
function k($a)
{
	return $k=array(0,$a,($a+330),($a+630));
}
include 'set-tatarajah.php';
for($i=1; $i < 4; $i++):
?>
<div id="print_area">

<div id="wb_Text2" style="left: 264px; top: <?php $k=k($a=15);echo $k[$i]; ?>px; width: 250px; height: 12px; text-align: left; position: absolute;"><span style="color: rgb(0, 0, 0); font-family: Arial; font-size: 15px;">-</span></div>

<div id="wb_Text2" style="left: 70px; top: <?php $k=k($a=57);echo $k[$i]; ?>px; width: 250px; height: 16px; text-align: left; position: absolute; z-index: 0;"><span
style="color: rgb(0, 0, 0); font-family: Arial; font-size: 15px;"><?php echo $baris[0] ?></span></div>
<div id="wb_Text3" style="left: 70px; top: <?php $k=k($a=75);echo $k[$i]; ?>px; width: 250px; height: 15px; text-align: left; position: absolute; z-index: 1;"><span
style="color: rgb(0, 0, 0); font-family: Arial; font-size: 13px;"><?php echo $baris[1] ?></span></div>
<div id="wb_Text4" style="left: 70px; top: <?php $k=k($a=90);echo $k[$i]; ?>px; width: 250px; height: 13px; text-align: left; position: absolute; z-index: 2;"><span
style="color: rgb(0, 0, 0); font-family: Arial; font-size: 13px;"><?php echo $baris[2] ?></span></div>
<div id="wb_Text5" style="left: 70px; top: <?php $k=k($a=107);echo $k[$i]; ?>px; width: 250px; height: 13px; text-align: left; position: absolute; z-index: 3;"><span
style="color: rgb(0, 0, 0); font-family: Arial; font-size: 13px;"><?php echo $baris[3] ?></span></div>
<div id="wb_Text6" style="left: 70px; top: <?php $k=k($a=121);echo $k[$i]; ?>px; width: 250px; height: 13px; text-align: left; position: absolute; z-index: 4;"><span
style="color: rgb(0, 0, 0); font-family: Arial; font-size: 13px;"><?php echo $baris[4] ?></span></div>

<div id="wb_Text7" style="left: 70px; top: <?php $k=k($a=135);echo $k[$i]; ?>px; width: 250px; height: 13px; text-align: left; position: absolute; z-index: 5;"><span
style="color: rgb(0, 0, 0); font-family: Arial; font-size: 13px;"><?php echo $baris[5] ?></span></div>

<div id="wb_Text8" style="left: 70px; top: <?php $k=k($a=195);echo $k[$i]; ?>px; width: 250px; height: 13px; text-align: left; position: absolute; z-index: 6;"><span
style="color: rgb(0, 0, 0); font-family: Arial; font-size: 13px;"><?php echo $baris[6] ?></span></div>

<div id="wb_Text9" style="left: 70px; top: <?php $k=k($a=209);echo $k[$i]; ?>px; width: 300px; height: 39px; text-align: left; position: absolute; z-index: 7;"><span
style="color: rgb(0, 0, 0); font-family: Arial; font-size: 13px;"><?php echo $baris[7] ?>
</span></div>

<div id="wb_Text12" style="left: 70px; top: <?php $k=k($a=264.5);echo $k[$i]; ?>px; width: 250px; height: 13px; text-align: left; position: absolute; z-index: 9;"><span
style="color: rgb(0, 0, 0); font-family: Arial; font-size: 13px;"><?php echo $baris[8] ?></span></div>

<div id="wb_Text14" style="left: 70px; top: <?php $k=k($a=279.7);echo $k[$i]; ?>px; width: 250px; height: 13px; text-align: left; position: absolute; z-index: 10;"><span
style="color: rgb(0, 0, 0); font-family: Arial; font-size: 13px;"><?php echo $baris[9] ?></span></div>

<div id="wb_Text11" style="left: 70px; top: <?php $k=k($a=300);echo $k[$i]; ?>px; width: 250px; height: 13px; text-align: left; position: absolute; z-index: 11;"><span
style="color: rgb(0, 0, 0); font-family: Arial; font-size: 13px;"><?php echo $baris[10] ?></span></div>

<div id="wb_Text13" style="left: 329px; top: <?php $k=k($a=340);echo $k[$i]; ?>px; width: 250px; height: 38px; text-align: left; position: absolute; z-index: 12;"><span
style="color: rgb(0, 0, 0); font-family: Arial; font-size: 26px;"><?php echo $baris[11] ?></span></div>

<div id="wb_Text13" style="left: 406px; top: <?php $k=k($a=350);echo $k[$i]; ?>px; width: 250px; height: 13px; text-align: left; position: absolute; z-index: 13;"><span
style="color: rgb(0, 0, 0); font-family: Arial; font-size: 13px;"><?php //echo $baris[12] ?></span></div>

</div>
<?php endfor; ?>
</body>
</html>