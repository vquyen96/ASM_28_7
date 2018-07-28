<!DOCTYPE html>
<html>
<head>
	<title>ASM</title>



	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/layout/index.css') }}">
</head>
<body>

<header >
	<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKzH44XniC-InSTWGGijNOaSmVE8CB_P64blvaxnQzs1gVNiu6">
</header>
<section>
	<h1>Danh sách chung cư</h1>
	<div class="container">

		<div class="row">
			@foreach($items as $item)
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="sectionItem">
					<div class="sectionItemImg" style="background: url('{{ $item->img }}') no-repeat center /cover; height: 250px;">
						 
					</div>
					<div class="sectionItemTitle">
						{{ $item->name }}
					</div>
					<div class="sectionItemPrice">
						{{ number_format((int)$item->price,0, ',','.') }} VNĐ
					</div>
				</div>
				
			</div>
			@endforeach
		</div>
		<div class="row">
			<div class="col-md-12">
				{{ $items->links() }}
			</div>
		</div>
	</div>
</section>




<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>