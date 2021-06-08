<!DOCTYPE HTML>
<html lang="en">
	<head>
		<!-- css file start from -->
		@extends('layouts.filecss')
		<!-- css file end here -->
	</head>
	<body>
		<!-- header file start from -->
		@include('layouts.header')
		<!-- header file end here -->
		<div class="container">
			<!-- slider file start from -->
			@include('layouts.slider')
			<!-- slider file end here -->

			<!-- product file start from -->
			@include('layouts.product')
			<!-- product file end here -->

			<!-- request file start from -->
			@include('layouts.request')
			<!-- request file end here -->

			<!-- service file start from -->
			@include('layouts.service')
			<!-- service file end here -->
		</div>  
		<!-- container end.// -->

		<!-- footer file start form -->
		@extends('layouts.footer')
		<!-- footer file end here -->
	</body>	
</html>