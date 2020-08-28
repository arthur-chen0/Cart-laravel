<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('/css/min.css') }}" type="text/css"/>
	<script src="https://kit.fontawesome.com/75ee4c0d67.js" crossorigin="anonymous"></script>
</head>

<div class="container">

	<div class="wrap">
		<form action="{{ route('search') }}" method="POST">
		{{ csrf_field('POST') }}
			<div class="search">
				<input id="keyword" type="text" name="keyword" class="searchTerm" placeholder="Search">
				<button  type="submit" class="searchButton">
					<i class="fa fa-search"></i>
				</button>
			</div>
		</form>
	</div>

	<div class="row">
		<ul id="productList" style="list-style:none;">

            @foreach ($list as $item)

                <li style="list-style: none; display: block; text-align: center; float: left; position: relative; margin: 50px 35px;">
                    <img src="{{ asset($item['url']) }}" alt="{{ $item['name'] }}" title="{{ $item['name'] }}" width="210px" height="250px">
					<div style="display: block; text-overflow: ellipsis; white-space: nowrap; overflow: hidden;">{{ $item['name'] }}</div>

					<span class="hidden" style="display: inline;">
						<span id="currencyIdentifier">NT$</span>
						<span class="currency symbol">{{ $item['price'] }}</span>
					</span>
                    <div style="margin-top: 15px">
                    <form action="{{ route('cart.store') }}" method="POST">
                        {{ csrf_field('POST') }}

                        <input type="hidden" name="name" value="{{ $item['name'] }}">
                        <input type="hidden" name="price" value="{{ $item['price'] }}">
                        <input type="hidden" name="url" value="{{ $item['url'] }}">
                        <button id="{{ $item['name'] }}" type="submit" class="btn btn-secondary">Add to cart</button>
                    </form>
					</div>
				</li>
            @endforeach

		</ul>
	</div>

	<div class="row" style="margin-top: 30px;">
		<div class="col">
            <a href="{{ route('checkout') }}" class="btn btn-secondary filter-button">Checkout </a>
		</div>

		<div class="col">
            <a href="{{ route('add') }}" class="btn btn-secondary filter-button">Add Production </a>
		</div>
    </div>

</div>
