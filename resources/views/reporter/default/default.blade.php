<!DOCTYPE html>
<html>
<head>
	@include('reporter.includes.head')
</head>
<body>
    <header class="header-area">
@include('reporter.includes.header')
      
    </header>

@yield('content')

<footer class="footer-area">
@include('reporter.includes.footer')
       
    </footer>

@include('reporter.includes.scripts')
</body>
</html>