@extends('layouts.app')

@section('main')
@include('inicio.nav')

<!-- silder  area -->
<div class="slider-area style-five d-flex align-items-center">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 col-md-6">
				<div class="slider-content">
					<h4 class="wow fadeInUp" data-wow-delay=".2s"> <span class="other">$</span>Criptomoneda Segura & Segura</h4>
					<h1 class="wow fadeInUp" data-wow-delay=".4s">Domino <span>Crypto</span></h1>
					<p class="wow fadeInUp" data-wow-delay=".6s">Elevamos la cripto economia a un nuevo nivel en Venezuela. </p>
					<div class="slider-button wow fadeInUp" data-wow-delay=".8s">
						<a href="#">  </i>Conócenos</a>

					</div>
					<div class="slider-btn wow fadeInUp" data-wow-delay=".9s">
						<a href="#"> <i class="flaticon-file"> </i> Noticias</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="slider-thumb" style="margin-top: 95px">
					<img  src="img/icono.png" alt="">
					<div class="hero-shape rotatemeTwo">
						<img src="img/five.png" alt="">
					</div>
					<div class="hero-shape3 rotateme">
						<img src="img/two.png" alt="">
					</div>
					<div class="hero-shape4">
						<img src="img/1.png" alt="">
					</div>
					<div class="hero-shape5">
						<img src="img/three.png" alt="">
					</div>
					
				</div>
			</div>
		</div>
		<div class="shape-one bounce-animate3">
			<img src="img/four.png" alt="">
		</div>
	</div>
</div>
@include('inicio.listacrypto')
@include('inicio.bloginicio')




@endsection