<?php include '../diatas.php'; ?>

<div class="kotakAtas">
<div class="kotakTengah">
	<ul class="nav nav-tabs" id="myTab" role="tablist">
	<li class="nav-item">
		<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="false">Login</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
	</li>
	</ul>
	<div class="tab-content" id="myTabContent">
		<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<?php include 'borangLogin000.php'; ?>
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		</div>
		<div class="tab-pane fade" id="login" role="tabpanel" aria-labelledby="login-tab">
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<?php include 'borangLogin001.php'; ?>
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		</div>
		<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...Contact</div>
	</div>
</div><!-- / class="kotakTengah" -->
</div><!-- / class="kotakAtas" -->

<?php include '../dibawah.php'; ?>