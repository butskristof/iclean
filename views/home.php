<?php $this->layout('template', ['title' => 'iClean', 'id' => 'home', 'extracss' => '/static/css/home.css']) ?>

<!-- JUMBOTRON -->

<div class="jumbotron" id="jumbo_main">
	<div class="container">
		<h1>iClean</h1>
		<p class="lead">Uw ruit, onze zorg</p>
	</div><!-- /container -->
</div><!-- /jumbotron -->

<!-- SALES POINTS -->

<div class="container">
	<div class="row">
		<div class="col-md-6 info_col">
			<h2>Contact</h2>
			<div id="info_col_contact">
				<img src="/static/img/logo/logo.svg" alt="iClean logo">

				<div class="contactlinks">
					<i class="fas fa-phone"></i> +32 477 43 08 65 <br>

					<a href="#" data-toggle="modal" data-target="#contactModal">
						<i class="far fa-envelope"></i> iclean<span class="invisible">notreallyshowingthis</span>@telenet.be <br>
					</a>

					<a href="https://www.facebook.com/kljwiekevorst" target="_blank">
						<i class="fab fa-facebook fa-lg"></i> iClean <br>
					</a>

					<a href="https://www.instagram.com/iclean1/" target="_blank">
						<i class="fab fa-instagram fa-lg"></i> iclean1 <br>
					</a>
				</div><!-- /contactlinks -->
			</div>
		</div><!-- /col-md-6 info_col -->

		<div class="col-md-6 info_col">
			<h2>Koptekst</h2>
			<img src="/static/img/logo/ventje.svg" alt="Illustratie van een man die een ruit kuist">
			<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. Donec id elit non mi porta gravida at eget metus. </p>
		</div><!-- /col-md-6 info_col -->
	</div><!-- /row -->
</div><!-- /container -->


<!-- SECOND JUMBOTRON -->

<div class="jumbotron" id="jumbo_sec">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<img src="/static/img/foto/trui.jpg" alt="Mitch Falchou, zaakvoerder" class="img-fluid">
			</div><!-- /col-md-4 -->
			<div class="col-md-8" id="jumbo_sec_text">
				<div>
					<h2>Koptekst</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec diam et augue tincidunt rhoncus sagittis a magna. Nam mollis bibendum lacus, vitae pharetra lectus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam et massa non orci elementum lacinia eu at ex. Proin enim nisl, feugiat id scelerisque sed, imperdiet nec massa. Vivamus imperdiet erat a tortor pulvinar tincidunt. Vestibulum porttitor posuere diam, quis ullamcorper metus malesuada in. Duis luctus orci quis nisi vehicula accumsan. </p>
					<p id="services_btn"><a class="btn btn-secondary mx-auto" href="/diensten" role="button">Onze diensten &raquo;</a></p>
				</div><!-- /id="jumbo_sec_text" -->
			</div><!-- /col-md-8 -->
		</div><!-- /row -->
	</div><!-- /container -->
</div><!-- /jumbotron -->


<!-- SOCIALS -->

<div class="container">
	<div class="row">
		<div class="col-md-6 info_col">
			<h2>Instagram</h2>

<!--			todo upgrade to full version-->
			<!-- LightWidget WIDGET --><script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/6f2be986000c59288ad94e80eaee2b5b.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>

		</div><!-- /col-md-6 -->
		<div class="col-md-6 info_col">
			<h2>Facebook</h2>

<!--			todo famax embed fb -->

		</div><!-- /col-md-6 -->
	</div><!-- /row -->
</div><!-- /container -->