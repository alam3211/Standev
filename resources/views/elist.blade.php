@extends('layouts.app')

@section('content')
	<div class="container rounded" style="background-color: white; padding: 10px;margin-top: 10%;">
		<div class="container rounded" style="background-color: #2c3e50;padding: 8px; color: white;">
		<div class="row">
				<div class="col-md-2">
					<img class="img-thumbnail float-left" src="images/thm.jpg">
				</div>
				<div class="col-md-6">
					<h3>CAMP FAIR 2012</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
				<div class="col-md-4">
					<table>
						<thead>
							<tr>
								<th>Jadwal</th>
								<th>Harga</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Sabtu, 5 Maret 2019 11.00 PM - 12.00 PM Gedung Aiola, Surabaya</td>
								<td>150K - 300K</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div id="evelist" style="margin-left: 20%; margin-top: 3%;margin-bottom: 5%;">
		<a href="book.php"><img src="images/ev1.png" id="ev"></a>
	</div>
@endsection