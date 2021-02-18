<!DOCTYPE html>
<html>
<head>
	@include('partials.header')
</head>
<body>

	@include('partials.messages')
	
	@yield('content')

	<div class="mt-4">

		@include('partials.footer')

	</div>
	@include('partials.js')


</body>
</html>
    

        

       