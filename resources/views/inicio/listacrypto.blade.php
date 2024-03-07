
<div class="feature-section pt-80">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="single-feature-box">
					<div class="feature-thumb">
						<img src="../img/5.png" alt="">
					</div>
					<div class="feature-content">
						<span>Binance</span>
						<h3 id="bnb"></h3>
						<p>BNB</p>
					</div>
					<div class="shape">
						<img src="../img/back.png" alt="">
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-feature-box">
					<div class="feature-thumb">
						<img src="../img/01.png" alt="">
					</div>
					<div class="feature-content">
						<span>Bitcon</span>
						<h3 id="btc"></h3>
						<p>BTC</p>
					</div>
					<div class="shape">
						<img src="../img/back2.png" alt="">
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-feature-box">
					<div class="feature-thumb">
						<img src="../img/2.png" alt="">
					</div>
					<div class="feature-content">
						<span>Ethereum</span>
						<h3 id="eth"></h3>
						<p>ETH</p>
					</div>
					<div class="shape">
						<img src="../img/back3.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="table pt-80 pb-80" id="widget-criptomonedas">
	<div class="container">
		<div class="row">
			<div class="table-reponsive box">
				<div class="table-responsive-content">
					<h2>Mercado actual</h2>
					<p>Mercado  en las últimas 24 horas</p>
				</div>
				<table  class="table table-hover">
					<style>
						th{
							color: white;
						}
					</style>
					<thead>
						<tr>
							<th scope="col">Tokens</th>
							<th scope="col">Precio</th>
							<th scope="col">Precio mas alto</th>
							<th scope="col">Precio mas bajo</th>
							<th scope="col">Variacion</th>
							<th scope="col">Volumen</th>
						</tr>
					</thead>
					<tbody>

						@foreach($data->Data as $dato)
						<tr>
							<td scope="row" ><img height="30" src="../{{$dato->DISPLAY->USD->IMAGEURL}}" alt=""> {{$dato->CoinInfo->FullName}}</td>
							<td >{{$dato->DISPLAY->USD->PRICE}}</td>
							<td>{{$dato->DISPLAY->USD->HIGHDAY}}</td>
							<td>{{$dato->DISPLAY->USD->LOWDAY}}</td>
							<td>{{$dato->DISPLAY->USD->CHANGEPCT24HOUR}}</td>
							<td>{{$dato->DISPLAY->USD->MKTCAP}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>



