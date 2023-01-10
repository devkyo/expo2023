@extends('layouts.frontend')

@section('content')

	<x-header/>
	<div class="feria__slider">
		<div class="feria__slider-jockey">
			<img src="{{asset('images/jockey.png')}}" alt="">
		</div>
		<div class="container">
			<div class="row">
				<div class="col d-flex">
					<h1 class="feria__slider-title">La feria más importante de la industria del calzado en el Perú.</h1>
				</div>
				<div class="col d-flex justify-content-center">
					<img src="{{asset('images/date.png')}}" alt="">
				</div>
			</div>
			<div class="btn-expo-white mt-5">
				<a href="#rgistrar" class="">Registrarse gratis</a>
			</div>
		</div>
	</div>
	<ul class="feria__countdown" data-aos="zoom-in">
		<li class="count-item count"><span class="c-days"></span> <p class="t-days"></p></li>
		<li class="count-item count"><span class="c-horas"></span> <p>horas</p></li>
		<li class="count-item count"><span class="c-minutos"></span> <p>minutos</p></li>
		<li class="count-item count"><span class="c-segundos"></span> <p>segundos</p></li>
		<li class="count-now title-count" style="display:none"></li>
	</ul>
	
	<div class="container">
		<ul class="feria__items">
			<li data-aos="fade-up" data-aos-delay="100"><img src="{{asset('./images/icos/curtiduria.png')}}" alt="curtiduria"><h5>Curtiduria</h5></li>
			<li data-aos="fade-up" data-aos-delay="200"><img src="{{asset('./images/icos/hormas.png')}}" alt="hormas"><h5>Hormas</h5></li>
			<li data-aos="fade-up" data-aos-delay="300"><img src="{{asset('./images/icos/maquinarias.png')}}" alt="maquinarias"><h5>Maquinarias</h5></li>
			<li data-aos="fade-up" data-aos-delay="400"><img src="{{asset('./images/icos/quimicos.png')}}" alt="quimicos"><h5>Quimicos</h5></li>
			<li data-aos="fade-up" data-aos-delay="500"><img src="{{asset('./images/icos/suelas.png')}}" alt="suelas"><h5>Suelas</h5></li>
			<li data-aos="fade-up" data-aos-delay="600"><img src="{{asset('./images/icos/tacones.png')}}" alt="tacones"><h5>Tacones</h5></li>
			<li data-aos="fade-up" data-aos-delay="700"><img src="{{asset('./images/icos/textiles.png')}}" alt="textiles"><h5>Textiles</h5></li>
			<li data-aos="fade-up" data-aos-delay="800"><img src="{{asset('./images/icos/accesorios.png')}}" alt="accesorios"><h5>Accesorios</h5></li>
		</ul>
	</div>

	<div class="container">
		<div class="feria__info">
			<div class="row">
				<div class="col">
					<div class="feria__info-copy">
						<p data-aos="fade-right">Somos la única feria internacional que expone cada año cueros, productos químicos, componentes, equipamientos y maquinarias para la industria del calzado en el Perú.</p>
					<p data-aos="fade-right" data-aos-delay="300">Expo Detalles es un evento completo que por su trayectoria internacional atrae a compradores nacionales y extranjeros. Sin duda, lo más acertado para efectuar excelentes negocios y consolidar sociedades con empresas nacionales o extranjeras que estarán aqui dispuestas a negociar y a conocer nuevos productos y proveedores.</p>
					</div>
				</div>
				<div class="col">
					<div class="feria__info-img" data-aos="fade-left">
						<img src="{{asset('./images/feria_image.png')}}" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="feria__faq">
			<div class="title">
				<h2 data-aos="fade-down">preguntas</h2>
				<h1 data-aos="fade-up">frecuentes</h1>
			</div>

			<div class="accordion" id="accordionExample">
				<div class="accordion-item">
					<h2 class="accordion-header" id="headingOne">
						<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							¿Quien puede visitar Expo Detalles?
						</button>
					</h2>
					<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
						<div class="accordion-body">
							El ingreso al evento es gratuito y esta dirigido a profesionales del sector del cuero y calzado. <strong>Es la fería profesional y la más importante del Perú</strong>, por lo tanto no se permite el ingreso a menores de 16 años.
						
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header" id="headingTwo">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							¿Cómo puedo participar como expositor?
						</button>
					</h2>
					<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
						<div class="accordion-body">
							<strong>Contactarnos.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header" id="headingThree">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							¿Cómo me registro como visitante?
						</button>
					</h2>
					<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
						<div class="accordion-body">
							<strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header" id="headingFour">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
							¿Cómo llegar?
						</button>
					</h2>
					<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
						<div class="accordion-body">
							<div class="row">
								<div class="col">
									<div id="feria__maps">
									</div>
								</div>
								<div class="col">
									<a href=""><img style="max-width: 100px" src="{{asset('images/ir_waze.webp')}}" alt=""></a>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>
	</div>
	
	<div class="container">
		<div class="title">
			<h2 data-aos="fade-down">2022</h2>
			<h1 data-aos="fade-up">galeria</h1>
		</div>
	</div>

	<div class="feria__galeria">
		<div class="container">
			<div class="owl-carousel owl-theme feria__galeria-content">

					<div class="feria__galeria-item"><a href="{{asset('images/01.jpg')}}" data-lightbox="roadtrip" data-title="Escenario de recuerdo Expo 2022" ><img src="{{asset('images/01.jpg')}}" alt=""></a></div>
					<div class="feria__galeria-item"><a href="{{asset('images/02.jpg')}}" data-lightbox="roadtrip" ><img src="{{asset('images/02.jpg')}}" alt=""></a></div>
					<div class="feria__galeria-item"><a href="{{asset('images/03.jpg')}}" data-lightbox="roadtrip" ><img src="{{asset('images/03.jpg')}}" alt=""></a></div>
					<div class="feria__galeria-item"><a href="{{asset('images/04.jpg')}}" data-lightbox="roadtrip" ><img src="{{asset('images/04.jpg')}}" alt=""></a></div>
					<div class="feria__galeria-item"><a href="{{asset('images/05.jpg')}}" data-lightbox="roadtrip" ><img src="{{asset('images/05.jpg')}}" alt=""></a></div>
					<div class="feria__galeria-item"><a href="{{asset('images/06.jpg')}}" data-lightbox="roadtrip" ><img src="{{asset('images/06.jpg')}}" alt=""></a></div>
					<div class="feria__galeria-item"><a href="{{asset('images/07.jpg')}}" data-lightbox="roadtrip" ><img src="{{asset('images/07.jpg')}}" alt=""></a></div>
					<div class="feria__galeria-item"><a href="{{asset('images/08.jpg')}}" data-lightbox="roadtrip" ><img src="{{asset('images/08.jpg')}}" alt=""></a></div>
			</div>
		</div>
	</div>

	<div class="container">

		<div class="title">
			<h2 data-aos="fade-down">últimas</h2>
			<h1 data-aos="fade-up">noticias</h1>
		</div>
			
		<div class="feria__noticias">

			<div class="feria__noticias-item">
				<a href="/jeje" class="feria__link">
					<div class="feria__noticias-thumb">
						<img src="http://expodetallesperu.pe/wp-content/uploads/2022/04/277677010_1211330722939925_2563250197915635005_n.jpg" alt="">
					</div>
					<div class="feria__noticias-copy">
						<strong>miercoles 20 noviembre, 2022</strong>
						<h2>La Libertad presentan avances tecnológicos en Expodetalles para empresarios en El porvenir</h2>
					</div>
				</a>
			</div>


			<div class="feria__noticias-item">
				<a href="#">
					<div class="feria__noticias-thumb">
						<img src="http://expodetallesperu.pe/wp-content/uploads/2022/04/277677010_1211330722939925_2563250197915635005_n.jpg" alt="">
					</div>
					<div class="feria__noticias-copy">
						<strong>miercoles 20 noviembre, 2022</strong>
						<h2>La Libertad presentan avances tecnológicos en Expodetalles para empresarios en El porvenir</h2>
					</div>
				</a>
			</div>

			<div class="feria__noticias-item">
			<a href="#">
				<div class="feria__noticias-thumb">
					<img src="http://expodetallesperu.pe/wp-content/uploads/2022/04/277677010_1211330722939925_2563250197915635005_n.jpg" alt="">
				</div>
				<div class="feria__noticias-copy">
					<strong>miercoles 20 noviembre, 2022</strong>
					<h2>La Libertad presentan avances tecnológicos en Expodetalles para empresarios en El porvenir</h2>
				</div>
			</a>
			</div>

			<div class="feria__noticias-item">
				<a href="#">
					<div class="feria__noticias-thumb">
						<img src="http://expodetallesperu.pe/wp-content/uploads/2022/04/277677010_1211330722939925_2563250197915635005_n.jpg" alt="">
					</div>
					<div class="feria__noticias-copy">
						<strong>miercoles 20 noviembre, 2022</strong>
						<h2>La Libertad presentan avances tecnológicos en Expodetalles para empresarios en El porvenir</h2>
					</div>
				</a>
			</div>

		</div>

		<div class="btn-expo-dark">
			<a href="#">Ver todas las noticias</a>
		</div>

	</div>
	{{-- end container --}}

@endsection
