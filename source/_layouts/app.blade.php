<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="canonical" href="{{ $page->getUrl() }}">
		<meta name="description" content="{{ $page->description }}">
		<title>{{ $page->title }}</title>
		<link rel="icon" type="image/x-icon" href="{{ url('/favicon.ico') }}">
		<link rel="stylesheet" href="{{ url(mix('css/main.css', 'assets/build')) }}">
		<script defer src="{{ url(mix('js/main.js', 'assets/build')) }}"></script>
		<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
	</head>
	<body>
		@yield('body')
	</body>
</html>