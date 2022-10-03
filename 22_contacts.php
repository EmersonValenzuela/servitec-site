
<?php
	include("inc/header.php");
?>

<div class="content-wrapper">

	<!-- Stunning header -->

	<div class="stunning-header stunning-header-bg-blue">
		<div class="stunning-header-content">
			<h1 class="stunning-header-title">Contactanos</h1>
			<ul class="breadcrumbs">
				<li class="breadcrumbs-item">
					<a href="index.php">Inicio</a>
					<i class="seoicon-right-arrow"></i>
				</li>
				<li class="breadcrumbs-item active">
					<span href="#">Contactanos</span>
					<i class="seoicon-right-arrow"></i>
				</li>
			</ul>
		</div>
	</div>

	<!-- End Stunning header -->

	<!-- Overlay Search -->


	<div class="overlay_search">
		<div class="container">
			<div class="row">
				<div class="form_search-wrap">
					<form>
						<input class="overlay_search-input" placeholder="Type and hit Enter..." type="text">
						<a href="#" class="overlay_search-close">
							<span></span>
							<span></span>
						</a>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- End Overlay Search -->


	<!-- Contacts -->


	<div class="container-fluid">
		<div class="row medium-padding80 bg-border-color contacts-shadow">
			<div class="container">
				<div class="row">
					<div class="contacts">
						<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
							<div class="contacts-item">
								<img loading="lazy" src="img/contact7.png" alt="phone">
								<div class="content">
									<a href="#" class="title">Lima, Perú</a>
									<p class="sub-title">Jr. Pereyra 108 4A Esquina con Teran, Chorrillos.</p>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
							<div class="contacts-item">
								<img loading="lazy" src="img/contact8.png" alt="phone">
								<div class="content">
									<a href="mailto:gerencia@servitecperu.com" class="title">gerencia@servitecperu.com</a>
									<a href="mailto:contactos@servitecperu.com" class="title">contactos@servitecperu.com</a>
									<p class="sub-title">Soporte en Linea</p>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
							<div class="contacts-item">
								<img loading="lazy" src="img/contact9.png" alt="phone">
								<div class="content">
									<a href="#" class="title">972 252 744</a>
									<p class="sub-title">Domingo a Viernes  9:30 am – 6:30 pm</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- End Contacts -->

	<!-- Leaflet map -->


	<div class="section">
		<div id="map"></div>
	</div>

	<!-- End Leaflet map -->

	<!-- Contact form -->


	<div class="container">
		<div class="contact-form medium-padding120">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="heading">
						<h4 class="heading-title">¿Tienes alguna pregunta?</h4>
						<div class="heading-line">
							<span class="short-line"></span>
							<span class="long-line"></span>
						</div>
						<p class="heading-text">Comuníquese con nosotros a través del formulario 
						y nos comunicaremos con usted lo antes posible.</p>
					</div>
				</div>
			</div>

			<form class="contact-form crumina-submit" method="post" data-nonce="crumina-submit-form-nonce" data-type="standard" action="phpfiles/contact.php">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<input class="input-standard-grey" name="website" type="text" placeholder="URL del sistio web" required>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<input name="name" class="input-standard-grey" placeholder="Tu nombre" type="text" required>
					</div>

				</div>

				<div class="row">

					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<input name="email" class="input-standard-grey" placeholder="Dirección de correo electrónico" type="email" required>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<input name="phone" class="input-standard-grey" placeholder="Telefóno" type="tel" required>
					</div>

				</div>

				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<textarea name="message" class="input-standard-grey" placeholder="Descripción del Proyecto"></textarea>
					</div>
				</div>

				<div class="row">
					<div class="submit-block table">
						<div class="col-lg-3 table-cell">
							<button class="btn btn-small btn--primary">
								<span class="text">Enviar ahora</span>
							</button>
						</div>

						<div class="col-lg-5 table-cell">
							<div class="submit-block-text">
							Por favor, háganos saber cualquier cosa en particular para verificar 
							y el mejor momento para comunicarnos con usted por teléfono (si se proporciona).
							</div>
						</div>
					</div>
				</div>
			</form>

		</div>
	</div>

	<!-- End Contact form -->


	<?php
	include("inc/footer.php");
?>