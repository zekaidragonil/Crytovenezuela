@extends('layouts.app')

@section('main')
@include('inicio.nav')
<div class="table-section pt-80 pb-80" style="margin-top: 10rem;">
	<div class="container">
		<div class="row">
			<div class="table-reponsive box">
				<div class="table-responsive-content">
					<h2>Current Market</h2>
					<span>+0.36%</span>
					<p>Market up in the last 24 hours</p>
				</div>
				<table id="example" class="">
					<thead>
						<tr>
							<th id="all_token">Tokens</th>
							<th id="avaiable">Precio</th>
							<th id="gainers">Precio mas bajo</th>
							<th id="gainers">Precio mas alto</th>
							<th id=losers>Variacion</th>
							<th id=date>Market Cap</th>
						</tr>
					</thead>
					<tbody>
          @foreach($data as $dat)
						<tr class="single" style="background-color: #0B0B47;">
							<td> <img height="20" src="{{$dat->image}}" alt=""> {{$dat->id}} </td>
							<td>$ {{$dat->current_price}}</td>
							<td>$ {{$dat->high_24h}}</td>
							<td>$ {{$dat->low_24h}}</td>
							<td>{{$dat->price_change_percentage_24h}} %</td>
							<td>$ {{$dat->market_cap}}</td>
              </t>
              @endforeach
					
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


@endsection()