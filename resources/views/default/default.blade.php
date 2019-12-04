<!DOCTYPE html>
<html>
<head>
	@include('includes.head')
</head>
<body>
    <header class="header-area">
@include('includes.header')
      
    </header>

@yield('content')

<footer class="footer-area">
@include('includes.footer')
       
    </footer>

@include('includes.scripts')
</body>
</html>