<?php include '../diatas.php'; ?>

<div class="kotakAtas">
<div class="kotakTengah">
	<ul class="nav nav-tabs" id="myTab" role="tablist">
	<li class="nav-item">
		<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
	</li>
	</ul>
	<div class="tab-content" id="myTabContent">
		<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...Home</div>
		<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...Profile</div>
		<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...Contact</div>
	</div>
</div><!-- / class="kotakTengah" -->
</div><!-- / class="kotakAtas" -->

<?php include '../dibawah.php'; ?>