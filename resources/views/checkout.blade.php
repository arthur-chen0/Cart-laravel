<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>

<div class="container">
	<div class="row justify-content-start">
		<div class="col">
			<h1>Cart List</h1>
		</div>
	</div>

	<div class="row">
		<div class="col">
			<h1><br></h1>
		</div>
	</div>

	<div class= "row justify-content-start">
		<div class="col">
			<table class="table table-hover table-bordered"
				<thead>
				    <tr>
				    	<th>#</th>
				        <th>Item</th>
				        <th>Price</th>
				        <th>Quantity</th>
				    </tr>
				</thead>
				<tbody>
                @foreach ($cartList as $item)
                    <tr>
					    <td></td>
						<td>
						    <img src="{{ asset($item->getURL()) }}" width="42px" height="50px">
						    {{ $item->getName() }}	
					    </td>
					    <td>{{ $item->getPrice() }}	</td>
					    <td>
						<select name="count" id="count" class="CompareSel">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
						</select>
						</td>
					</tr>
                    
                @endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>