<div class="container">
<hr><h1>Ruangtamu - Kita Tanya Apa Khabar</h1><hr>
<div class="hero-unit">
<p><?php
$Sesi = new \Aplikasi\Kitab\Sesi();
$Sesi->init();
//echo '<pre>'; print_r($_SESSION); echo '</pre>';
echo 'namaPendek=' . $Sesi->get('bs_namaPendek') . '<br>';
echo 'namaPenuh=' . $Sesi->get('bs_namaPenuh') . '<br>';
echo 'levelPengguna=' . $Sesi->get('bs_levelPengguna') . '';//*/
?></p>

	<a class="btn btn-primary btn-large" href="<?php echo URL ?>ruangtamu/logout">Pergi Lebih Jauh<i class="fas fa-door-open fa-2x"></i></a>
	<a class="btn btn-dark btn-large" href="<?php echo URL ?>sumber">Sumber<i class="fas fa-mosque fa-2x"></i></a>
	<a class="btn btn-success btn-large" target="_blank" href="<?php echo URL ?>borang">Borang<i class="fas fa-hand-holding-heart fa-2x"></i></a>
	<a class="btn btn-success btn-large" target="_blank" href="<?php echo URL ?>kiraan">Kiraan<i class="fas fa-hand-holding-heart fa-2x"></i></a>
	<a class="btn btn-secondary btn-large" target="_blank" href="<?php echo URL ?>borang/industri">MSIC<i class="fa fa-binoculars fa-2x"></i></a>
	<a class="btn btn-warning btn-large" target="_blank" href="<?php echo URL ?>qss">QSS<i class="fa fa-binoculars fa-2x"></i></a>
	<a class="btn btn-info btn-large" target="_blank" href="<?php echo URL ?>ejob">EJOB<i class="fa fa-binoculars fa-2x"></i></a>

</div><!-- / class="hero-unit" -->
</div><!-- / class="container" -->

<div class="container"><br>
	<table class="table">
	<tr class="table-primary"><td>table-primary</td></tr>
	<tr class="table-secondary"><td>table-secondary</td></tr>
	<tr class="table-success"><td>table-success</td></tr>
	<tr class="table-danger"><td>table-danger</td></tr>
	<tr class="table-warning"><td>table-warning</td></tr>
	<tr class="table-info"><td>table-info</td></tr>
	<tr class="table-light"><td>table-light</td></tr>
	<tr class="table-dark"><td>table-dark</td></tr>
	</table>
</div><!-- / class="container" -->
<?php //echo semakDataSesi(); ?>